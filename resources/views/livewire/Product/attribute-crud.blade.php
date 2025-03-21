<div>
    <h2>مدیریت ویژگی‌ها</h2>

    <button wire:click="create" class="btn btn-primary">اضافه کردن ویژگی</button>

    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    @if ($isOpen)
        <div class="modal" style="display:block;">
            <div class="modal-content">
                <h3>{{ $attributeId ? 'ویرایش ویژگی' : 'ایجاد ویژگی' }}</h3>
                <form wire:submit.prevent="store">
                    <div>
                        <label>نام ویژگی</label>
                        <input type="text" wire:model="name" class="form-control">
                        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <button type="submit" class="btn btn-success">ذخیره</button>
                    <button type="button" wire:click="closeModal" class="btn btn-secondary">بستن</button>
                </form>
            </div>
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>نام</th>
                <th>عملیات</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($attributes as $attribute)
                <tr>
                    <td>{{ $attribute->name }}</td>
                    <td>
                        <button wire:click="edit({{ $attribute->id }})" class="btn btn-warning">ویرایش</button>
                        <button wire:click="delete({{ $attribute->id }})" class="btn btn-danger">حذف</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>