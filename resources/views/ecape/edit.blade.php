@extends('layouts.master')

@section('title')
تعديل بيانات الحالة
@endsection

@section('Header')

<x-header/>

@endsection

@section('SideBar')

<x-sidebar/>

@endsection

@section('main')

    <main id="main" class="main">
        <h2>تعديل بيانات الحالة</h2>
        <hr/>
        @include('layouts.msg')
        <section class="section edit-report">
            <form action="{{route('index-escape.update', '') }}" method="POST">
                @csrf
                <input type="hidden" value="{{$student->student_id}}" name="student_id"/>
                <div class="row">
                    <div class="col-md-4 mb-3">
                    <label class="form-label d-block text-start">الكود</label>
                    <input type="text" value="{{ $student->code }}" class="form-control" name="code" readonly/>
                    </div>
                    <div class="col-md-4 mb-3">
                    <label class="form-label d-block text-start">الإسم</label>
                    <input type="text" value="{{ $student->Name }}" class="form-control" name="Name" readonly/>
                    </div>
                    <div class="col-md-4 mb-3">
                    <label class="form-label d-block text-start">تاريخ الإيداع</label>
                    <input type="date" value="{{ $student->CaseHistory }}" class="form-control" name="CaseHistory" readonly/>
                    </div>
                    <div class="col-md-4 mb-3">
                    <label class="form-label d-block text-start">تاريخ الهروب</label>
                    <input type="date" value="{{ $student->date_escape }}" class="form-control" name="date_escape"/>
                    </div>
                    <div class="col-md-4 mb-3">
                    <label class="form-label d-block text-start">كيفية الهروب</label>
                    <input type="text" value="{{ $student->how_escape }}" class="form-control" name="how_escape"/>
                    </div>
                    <div class="col-md-4 mb-3">
                    <label class="form-label d-block text-start">تاريخ العودة</label>
                    <input type="date" value="{{ $student->date_back }}" class="form-control" name="date_back"/>
                    </div>
                    <div class="col-md-4 mb-3">
                    <label class="form-label d-block text-start">كيفية العودة</label>
                    <input type="text" value="{{ $student->how_back }}" class="form-control" name="how_back"/>
                    </div>
                    <div class="col-md-4 mb-3">
                    <label class="form-label d-block text-start">عدد مرات الهروب</label>
                    <input type="text" value="{{ $student->number_back }}" class="form-control" name="number_back"/>
                    </div>
                    <div class="col-md-4 mb-3">
                    <label class="form-label d-block text-start">العودة وسببها</label>
                    <input type="text" value="{{ $student->reason_back }}" class="form-control" name="reason_back"/>
                    </div>
                </div>
                <input type="submit" class="btn btn-success" value="حفظ وتعديل"/>
            </form>
        </section>

    </main><!-- End #main -->



@endsection


@section('footer')
    <x-footer/>
@endsection
