@extends('layouts.master')

@section('title')
إضافة حالة جديدة
@endsection

@section('Header')

<x-header/>

@endsection

@section('SideBar')

<x-sidebar/>

@endsection

@section('main')
    <main id="main" class="main">
        <h2 class="text-start">إضافة حالة جديدة</h2>
        <hr/>
        <div class="mb-3">
            @include('layouts.msg')
        </div>
        <div class="form-data">
            <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <fieldset class="border p-2" id="student_info">
                    <legend class="w-auto">بيانات شخصية</legend>
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <div class="form-field">
                                <label for="nametxt" class="form-label">الإسم</label>
                                <input type="text" name="Name" title="الأسم" class="form-control" id="nametxt" placeholder="ادخل الإسم رباعي بالكامل" >
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-field">
                                <label for="code" class="form-label">كود البنت</label>
                                <input type="text" name="code" title="كود الحالة" class="form-control" id="code" placeholder="ادخل رقم الفتاة" >
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-field">
                                <label for="Birdth" class="form-label">تاريخ الميلاد</label>
                                <input type="date" name="Birdth" class="form-control" id="Birdth">
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-field">
                                <label for="Age" class="form-label">السن</label>
                                <input type="number" name="Age" class="form-control" id="Age" value="" readonly>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-field">
                                <label for="National_ID" class="form-label">الرقم القومي</label>
                                <input type="number" name="National_ID" class="form-control" id="National_ID">
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-field">
                                <label for="motherName" class="form-label">اسم الأم</label>
                                <input type="text" name="motherName" class="form-control" id="motherName">
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-field">
                                <label for="father" class="form-label">اسم ولي الأمر</label>
                                <input type="text" name="fatherName" class="form-control" id="father">
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-field">
                                <label for="Address" class="form-label">عنوان ولي الأمر</label>
                                <input type="text" name="Address" class="form-control" id="Address">
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-field">
                                <label for="caseNum" class="form-label">رقم القضية</label>
                                <input type="text" name="caseNum" class="form-control" id="caseNum">
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-field">
                                <label for="Deposit" class="form-label">تاريخ الإيداع</label>
                                <input type="date" name="Deposit" class="form-control" id="Deposit">
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-field">
                                <label for="accusation" class="form-label">الإتهام</label>
                                <input type="text" name="accusation" class="form-control" id="accusation">
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-field">
                                <label for="Image" class="form-label">صورة شخصية</label>
                                <input type="file" name="Image" class="form-control" id="Image" multiple>
                                <span>ملاحظة: الحد الأقصي لحجم الصورة 2mb</span>
                            </div>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="border p-2" id="Deposit_data">
                    <legend class="w-auto">بيانات الإيداع</legend>
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <div class="form-field">
                                <label for="Transfer" class="form-label">طريقة التحويل</label>
                                <input type="text" name="Transfer" class="form-control" id="Transfer">
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-field">
                                <label for="state" class="form-label">الحالة النفسية</label>
                                <select name="state" class="form-select" aria-label="state" id="state">
                                    <option value="جيدة جداً">جيدة جداً</option>
                                    <option value="جيدة">جيدة</option>
                                    <option value="ضعيفة">ضعيفة</option>
                                    <option value="تحتاج إلي دعم">تحتاج إلي دعم</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-field">
                                <label for="stateResult" class="form-label">نتيجة الإختبار النفسي</label>
                                <select name="stateResult" class="form-select" aria-label="stateResult" id="stateResult">
                                    <option value="ممتاز">ممتاز</option>
                                    <option value="جيد جداً">جيد جداً</option>
                                    <option value="جيد">جيد</option>
                                    <option value="ضعيفة">ضعيفة</option>
                                    <option value="يحتاج إلي رعاية">يحتاج إلي رعاية</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-field">
                                <label for="social_watcher" class="form-label">المراقب الإجتماعي</label>
                                <input type="text" name="social_watcher" class="form-control" id="social_watcher">
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-field">
                                <label for="stateEducation" class="form-label">الحالة العلمية</label>
                                <select class="form-select" aria-label="stateEducation" id="stateEducation" name="stateEducation">
                                    <option value="ثانوى عام">ثانوى عام</option>
                                    <option value="دبلوم صناعي">دبلوم صناعي</option>
                                    <option value="دبلوم تجارى">دبلوم تجارى</option>
                                    <option value="دبلوم زراعي">دبلوم زراعي</option>
                                    <option value="دبلوم خدمات">دبلوم خدمات</option>
                                    <option value="محو أمية">محو أمية</option>
                                    <option value="يجيد القراءة والكتابة">يجيد القراءة والكتابة</option>
                                    <option value="لا يجيد القراءة والكتابة">لا يجيد القراءة والكتابة</option>
                                    <option value="أخرى">أخرى ...</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-field">
                                <label for="worker" class="form-label">الإخصائي الإجتماعي</label>
                                <input type="text" name="worker" class="form-control" id="worker">
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-field">
                                <label for="Business" class="form-label">المهن السابقة</label>
                                <input type="text" name="Business" class="form-control" id="Business">
                            </div>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="border p-2" id="Family_data">
                    <legend class="w-auto">بيانات العائلة</legend>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="form-field">
                                <label for="stateFamily" class="form-label">حالة الأسرة الإقتصادية</label>
                                <select name="stateFamily" class="form-select" aria-label="stateFamily" id="state" id="stateFamily">
                                    <option value="متيسرة">متيسرة</option>
                                    <option value="متوسطة">متوسطة</option>
                                    <option value="ضعيفة">ضعيفة</option>
                                    <option value="متعثرة">متعثرة</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-field">
                                <label for="Brothers" class="form-label">عدد الإخوة</label>
                                <input type="text" name="Brothers" class="form-control" id="Brothers">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-field">
                                <label for="fatherJop" class="form-label">وظيفة الأب</label>
                                <input type="text" name="fatherJop" class="form-control" id="fatherJop">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-field">
                                <label for="motherJop" class="form-label">وظيفة الأم</label>
                                <input type="text" name="motherJop" class="form-control" id="motherJop">
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-field">
                                <label for="Nots" class="form-label">ملاحظات</label>
                                <textarea name="Nots" class="form-control" id="Nots"></textarea>
                            </div>
                        </div>
                    </div>
                </fieldset>
                <div class="mt-3">
                    <input type="submit" class="btn btn-success" value="حفظ البيانات"/>
                </div>
            </form>
        </div>
    </main>
@endsection

@section('footer')
    <x-footer/>
@endsection
