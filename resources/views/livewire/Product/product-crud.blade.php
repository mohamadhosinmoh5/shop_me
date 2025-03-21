<div>
    <h2>مدیریت محصولات</h2>

    <button wire:click="create" class="btn btn-primary">اضافه کردن محصول</button>

    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    @if ($isOpen)
        <div class="modal" style="display:block;">
            <div class="modal-content">
                <h3>{{ $productId ? 'ویرایش محصول' : 'ایجاد محصول' }}</h3>
                <form wire:submit.prevent="store">
                    <div>
                        <label>نام</label>
                        <input type="text" wire:model="name" class="form-control">
                        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label>توضیحات</label>
                        <textarea wire:model="description" class="form-control"></textarea>
                    </div>
                    <div>
                        <label>قیمت پایه</label>
                        <input type="number" wire:model="price" class="form-control">
                        @error('price') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label>نوع محصول</label>
                        <input type="checkbox" wire:model="isDigital"> دیجیتال
                    </div>
                    @if (!$isDigital)
                        <div>
                            <label>موجودی پایه</label>
                            <input type="number" wire:model="stock" class="form-control">
                            @error('stock') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    @endif
                    @if ($isDigital)
                        <div>
                            <label>فایل دیجیتال</label>
                            <input type="file" wire:model="digitalFile" class="form-control">
                            @error('digitalFile') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    @endif

                    <!-- ویژگی‌ها -->
                    <h4>ویژگی‌ها</h4>
                    @foreach ($attributes as $index => $attribute)
                        <div>
                            <label>
                                <input type="checkbox" wire:model="selectedAttributes" value="{{ $attribute->id }}">
                                {{ $attribute->name }}
                            </label>
                            @if (in_array($attribute->id, $selectedAttributes))
                                <div>
                                    <label>مقدار (مثلاً قرمز)</label>
                                    <input type="text" wire:model="attributeValues.{{ $attribute->id }}" class="form-control">
                                </div>
                                <div>
                                    <label>تغییر قیمت</label>
                                    <input type="number" wire:model="priceAdjustments.{{ $attribute->id }}" class="form-control">
                                </div>
                                <div>
                                    <label>موجودی</label>
                                    <input type="number" wire:model="attributeStocks.{{ $attribute->id }}" class="form-control">
                                </div>
                            @endif
                        </div>
                    @endforeach

                    <!-- تخفیف -->
                    <h4>تخفیف</h4>
                    <div>
                        <label>درصد تخفیف</label>
                        <input type="number" wire:model="discountPercentage" class="form-control">
                    </div>
                    <div>
                        <label>تاریخ شروع</label>
                        <input type="date" wire:model="startDate" class="form-control">
                    </div>
                    <div>
                        <label>تاریخ پایان</label>
                        <input type="date" wire:model="endDate" class="form-control">
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
                <th>قیمت</th>
                <th>موجودی</th>
                <th>نوع</th>
                <th>فایل دیجیتال</th>
                <th>ویژگی‌ها</th>
                <th>تخفیف</th>
                <th>عملیات</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->is_digital ? 'نامحدود' : $product->stock }}</td>
                    <td>{{ $product->is_digital ? 'دیجیتال' : 'فیزیکی' }}</td>
                    <td>
                        @if ($product->is_digital && $product->digitalFiles->first())
                            <a href="{{ Storage::url($product->digitalFiles->first()->file_path) }}" target="_blank">
                                {{ $product->digitalFiles->first()->file_name }}
                            </a>
                        @endif
                    </td>
                    <td>
                        @foreach ($product->attributes as $attribute)
                            {{ $attribute->name }}: {{ $attribute->pivot->value }} ({{ $attribute->pivot->price_adjustment }} - {{ $attribute->pivot->stock }})
                            <br>
                        @endforeach
                    </td>
                    <td>
                        @if ($product->discounts->first())
                            {{ $product->discounts->first()->discount_percentage }}% ({{ $product->discounts->first()->start_date }} تا {{ $product->discounts->first()->end_date }})
                        @endif
                    </td>
                    <td>
                        <button wire:click="edit({{ $product->id }})" class="btn btn-warning">ویرایش</button>
                        <button wire:click="delete({{ $product->id }})" class="btn btn-danger">حذف</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>