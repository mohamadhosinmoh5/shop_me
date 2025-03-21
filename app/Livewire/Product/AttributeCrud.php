<?php

namespace App\Livewire\Product;

use Livewire\Component;
use App\Models\Attribute;

class AttributeCrud extends Component
{
    public $name, $attributeId;
    public $isOpen = false;

    public function render()
    {
        return view('livewire.Product.attribute-crud', [
            'attributes' => Attribute::all(),
        ])->layout('master');
    }

    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }

    public function store()
    {
        $this->validate([
            'name' => 'required|unique:attributes,name,' . $this->attributeId,
        ]);

        Attribute::updateOrCreate(['id' => $this->attributeId], [
            'name' => $this->name,
        ]);

        session()->flash('message', $this->attributeId ? 'ویژگی به‌روزرسانی شد.' : 'ویژگی ایجاد شد.');
        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $attribute = Attribute::find($id);
        if ($attribute) {
            $this->attributeId = $attribute->id;
            $this->name = $attribute->name;
            $this->openModal();
        } else {
            session()->flash('error', 'ویژگی یافت نشد.');
        }
    }

    public function delete($id)
    {
        $attribute = Attribute::find($id);
        if ($attribute) {
            $attribute->delete();
            session()->flash('message', 'ویژگی حذف شد.');
        } else {
            session()->flash('error', 'ویژگی یافت نشد.');
        }
    }

    private function resetInputFields()
    {
        $this->name = '';
        $this->attributeId = null;
    }

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }
}
