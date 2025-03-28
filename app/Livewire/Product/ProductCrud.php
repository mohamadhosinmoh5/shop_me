<?php
namespace App\Livewire\Product;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Product;
use App\Models\Attribute;
use App\Models\DigitalFile;

class ProductCrud extends Component
{
    use WithFileUploads;

    public $products, $name, $description, $price, $stock, $productId, $isDigital = false;
    public  $selectedAttributes = [], $attributeValues = [], $priceAdjustments = [], $attributeStocks = [];
    public $discountPercentage, $startDate, $endDate;
    public $digitalFile; // برای آپلود فایل
    public $isOpen = false;

    public function render()
    {
        $this->products = Product::with('attributes', 'discounts', 'digitalFiles')->get();
        return view('livewire.Product.attribute-crud', [
            'products' => $this->products,
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
            'name' => 'required',
            'price' => 'required|numeric',
            'stock' => $this->isDigital ? 'nullable|integer' : 'required|integer',
            'digitalFile' => $this->isDigital ? 'required|file|max:10240' : 'nullable',
        ]);

        $product = Product::updateOrCreate(['id' => $this->productId], [
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
            'stock' => $this->isDigital ? 0 : $this->stock, // برای دیجیتال موجودی صفر
            'is_digital' => $this->isDigital,
        ]);

        // ذخیره ویژگی‌ها
        if (!empty($this->selectedAttributes)) {
            $syncData = [];
            foreach ($this->selectedAttributes as $attributeId) { // مستقیم مقداردهی
                $syncData[$attributeId] = [
                    'value' => $this->attributeValues[$attributeId] ?? '',
                    'price_adjustment' => $this->priceAdjustments[$attributeId] ?? 0,
                    'stock' => $this->attributeStocks[$attributeId] ?? 0,
                ];
            }
            $product->attributes()->sync($syncData);
        }
        
        

        // ذخیره تخفیف
        if ($this->discountPercentage) {
            $product->discounts()->updateOrCreate(
                ['product_id' => $product->id],
                [
                    'discount_percentage' => $this->discountPercentage,
                    'start_date' => $this->startDate,
                    'end_date' => $this->endDate,
                ]
            );
        }

        // ذخیره فایل دیجیتال
        if ($this->isDigital && $this->digitalFile) {
            $filePath = $this->digitalFile->store('digital_files', 'public');
            $product->digitalFiles()->create([
                'file_path' => $filePath,
                'file_name' => $this->digitalFile->getClientOriginalName(),
            ]);
        }

        session()->flash('message', $this->productId ? 'محصول به‌روزرسانی شد.' : 'محصول ایجاد شد.');
        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $product = Product::with('attributes', 'discounts', 'digitalFiles')->findOrFail($id);
        $this->productId = $id;
        $this->name = $product->name;
        $this->description = $product->description;
        $this->price = $product->price;
        $this->stock = $product->stock;
        $this->isDigital = $product->is_digital;

        $this->selectedAttributes = $product->attributes->pluck('id')->toArray();
        $this->attributeValues = $product->attributes->pluck('pivot.value', 'id')->toArray();
        $this->priceAdjustments = $product->attributes->pluck('pivot.price_adjustment', 'id')->toArray();
        $this->attributeStocks = $product->attributes->pluck('pivot.stock', 'id')->toArray();

        $discount = $product->discounts->first();
        if ($discount) {
            $this->discountPercentage = $discount->discount_percentage;
            $this->startDate = $discount->start_date;
            $this->endDate = $discount->end_date;
        }

        $this->openModal();
    }

    public function delete($id)
    {
        Product::find($id)->delete();
        session()->flash('message', 'محصول حذف شد.');
    }

    private function resetInputFields()
    {
        $this->name = '';
        $this->description = '';
        $this->price = '';
        $this->stock = '';
        $this->productId = '';
        $this->isDigital = false;
        $this->selectedAttributes = [];
        $this->attributeValues = [];
        $this->priceAdjustments = [];
        $this->attributeStocks = [];
        $this->discountPercentage = '';
        $this->startDate = '';
        $this->endDate = '';
        $this->digitalFile = null;
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