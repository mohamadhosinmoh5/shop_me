@extends('livewire.admin.dashboard.master')

@section('mainDashboard')
    <div>
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">لوحة القيادة</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2">
                    <button type="button" class="btn btn-sm btn-outline-secondary">مشاركة</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">تصدير</button>
                </div>
                <button type="button"
                    class="btn btn-sm btn-outline-secondary dropdown-toggle d-flex align-items-center gap-1">
                    <svg class="bi">
                        <use xlink:href="#calendar3" />
                    </svg>
                    هذا الأسبوع
                </button>
            </div>
        </div>

        <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>

        <h2>عنوان القسم</h2>
        <div class="table-responsive small">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">عنوان</th>
                        <th scope="col">عنوان</th>
                        <th scope="col">عنوان</th>
                        <th scope="col">عنوان</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1,001</td>
                        <td>بيانات</td>
                        <td>عشوائية</td>
                        <td>تثري</td>
                        <td>الجدول</td>
                    </tr>
                    <tr>
                        <td>1,002</td>
                        <td>تثري</td>
                        <td>مبهة</td>
                        <td>تصميم</td>
                        <td>تنسيق</td>
                    </tr>
                    <tr>
                        <td>1,003</td>
                        <td>عشوائية</td>
                        <td>غنية</td>
                        <td>قيمة</td>
                        <td>مفيدة</td>
                    </tr>
                    <tr>
                        <td>1,003</td>
                        <td>معلومات</td>
                        <td>تثري</td>
                        <td>توضيحية</td>
                        <td>عشوائية</td>
                    </tr>
                    <tr>
                        <td>1,004</td>
                        <td>الجدول</td>
                        <td>بيانات</td>
                        <td>تنسيق</td>
                        <td>قيمة</td>
                    </tr>
                    <tr>
                        <td>1,005</td>
                        <td>قيمة</td>
                        <td>مبهة</td>
                        <td>الجدول</td>
                        <td>تثري</td>
                    </tr>
                    <tr>
                        <td>1,006</td>
                        <td>قيمة</td>
                        <td>توضيحية</td>
                        <td>غنية</td>
                        <td>عشوائية</td>
                    </tr>
                    <tr>
                        <td>1,007</td>
                        <td>تثري</td>
                        <td>مفيدة</td>
                        <td>معلومات</td>
                        <td>مبهة</td>
                    </tr>
                    <tr>
                        <td>1,008</td>
                        <td>بيانات</td>
                        <td>عشوائية</td>
                        <td>تثري</td>
                        <td>الجدول</td>
                    </tr>
                    <tr>
                        <td>1,009</td>
                        <td>تثري</td>
                        <td>مبهة</td>
                        <td>تصميم</td>
                        <td>تنسيق</td>
                    </tr>
                    <tr>
                        <td>1,010</td>
                        <td>عشوائية</td>
                        <td>غنية</td>
                        <td>قيمة</td>
                        <td>مفيدة</td>
                    </tr>
                    <tr>
                        <td>1,011</td>
                        <td>معلومات</td>
                        <td>تثري</td>
                        <td>توضيحية</td>
                        <td>عشوائية</td>
                    </tr>
                    <tr>
                        <td>1,012</td>
                        <td>الجدول</td>
                        <td>تثري</td>
                        <td>تنسيق</td>
                        <td>قيمة</td>
                    </tr>
                    <tr>
                        <td>1,013</td>
                        <td>قيمة</td>
                        <td>مبهة</td>
                        <td>الجدول</td>
                        <td>تصميم</td>
                    </tr>
                    <tr>
                        <td>1,014</td>
                        <td>قيمة</td>
                        <td>توضيحية</td>
                        <td>غنية</td>
                        <td>عشوائية</td>
                    </tr>
                    <tr>
                        <td>1,015</td>
                        <td>بيانات</td>
                        <td>مفيدة</td>
                        <td>معلومات</td>
                        <td>الجدول</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
