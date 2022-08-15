@extends('layouts.master')

@section('title')
بيانات الحالة
@endsection

@section('Header')

<x-header/>

@endsection

@section('SideBar')

<x-sidebar/>

@endsection

@section('main')
<main id="main" class="main">
    <div class="export">
        <button id="print" class="btn btn-success"><i class="fa-solid fa-print"></i> طباعة</button>
    </div>
    <div id="personal">
        <h2 class="table-title">بيانات الحالة</h2>
            <section class="section report">
                <table class="table table-bordered table-show">
                    @isset($student->pic)
                        <tr>
                            <td colspan="4">
                                <img src="{{ asset('public/Image/'. $student->pic) }}" class="card-img-top" alt="...">
                            </td>
                        </tr>
                    @endisset
                    <tr>
                        <td>الإسم</td>
                        <td>{{ $student->Name }}</td>
                        <td>الكود</td>
                        <td>{{ $student->code }}</td>
                    </tr>
                    <tr>
                        <td>الرقم القومي</td>
                        <td>
                            @if ($student->National_ID == null)
                                غير معروف
                            @else
                                {{ $student->National_ID }}
                            @endif
                        </td>
                        <td>رقم القضية</td>
                        <td>{{ $student->CaseNumber }}</td>
                    </tr>
                    <tr>
                        <td>تاريخ الميلاد</td>
                        <td>{{ $student->Birdth }}</td>
                        <td>العمر</td>
                        <td>{{ $student->Age }}</td>
                    </tr>
                    <tr>
                        <td>اسم الأم</td>
                        <td>
                            @if ($student->motherName == null)
                                غير معروف
                            @else
                                {{ $student->motherName }}
                            @endif
                        </td>
                        <td>ولي الأمر</td>
                        <td>{{ $student->NameFather }}</td>
                    </tr>
                    <tr>
                        <td>عنوان ولي الأمر</td>
                        <td>{{ $student->Address }}</td>
                        <td>تاريخ الإيداع</td>
                        <td>{{ $student->CaseHistory }}</td>
                    </tr>
                    <tr>
                        <td>الحالة النفسية</td>
                        <td>{{ $student->state }}</td>
                        <td>الحالة العلمية</td>
                        <td>{{ $student->stateEducation }}</td>
                    </tr>
                    <tr>
                        <td>نتيجة الإختبار النفسي</td>
                        <td>{{ $student->stateResult }}</td>
                        <td>الإتهام</td>
                        <td>{{ $student->Accusation }}</td>
                    </tr>
                    <tr>
                        <td>الإخصائي الإجتماعي</td>
                        <td>{{ $student->worker }}</td>
                        <td>المراقب الإجتماعي</td>
                        <td>{{ $student->social_watcher }}</td>
                    </tr>
                    <tr>
                        <td>الإتهام</td>
                        <td>{{ $student->Accusation }}</td>
                        <td>طريقة التحويل</td>
                        <td>{{ $student->Transfer }}</td>
                    </tr>
                    <tr>
                        <td>حالة الأسرة الإقتصادية</td>
                        <td>{{ $student->stateFamily }}</td>
                        <td>المهن السابقة</td>
                        <td>{{ $student->Business }}</td>
                    </tr>
                    <tr>
                        <td>وظيفة الأب</td>
                        <td>{{ $student->fatherJop }}</td>
                        <td>وظيفة الأم</td>
                        <td>{{ $student->motherJop }}</td>
                    </tr>
                    <tr>
                        <td>عدد الإخوة</td>
                        <td>{{ $student->Brothers }}</td>
                        <td>ملاحظات</td>
                        <td>
                            @if ($student->Nots == null)
                                لا يوجد
                            @else
                                {{ $student->Nots }}
                            @endif
                        </td>
                    </tr>
                </table>
            </section>
    </div>

    </main><!-- End #main -->



@endsection


@section('footer')
  <x-footer/>
@endsection

