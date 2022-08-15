@extends('layouts.master')

@section('title')
إضافة بيانات جديدة
@endsection

@section('Header')

<x-header/>

@endsection

@section('SideBar')

<x-sidebar/>

@endsection

@section('main')
    <main id="main" class="main">
        <h2 class="text-start">إضافة بيانات الهروب والعودة</h2>
        <hr/>
        @include('layouts.msg')
        <div class="form-data">
            <form action="{{ route('index-escape.store') }}" method="POST">
                @csrf
                <fieldset class="border p-2" id="student_info">
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <div class="form-field">
                                <label for="nametxt" class="form-label">الإسم</label>
                                <select name="st_Name" class="form-control">
                                    <option>...</option>
                                    @foreach ($students as $student)
                                        <option value="{{$student->id}}">{{$student->Name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-field">
                                <label for="date_escape	" class="form-label">تاريخ الهروب</label>
                                <input type="date" name="date_escape" class="form-control" id="date_escape">
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-field">
                                <label for="how_escape	" class="form-label">كيفية الهروب</label>
                                <input type="text" name="how_escape" class="form-control" id="date_escape">
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-field">
                                <label for="date_back" class="form-label">تاريخ العودة</label>
                                <input type="date" name="date_back" class="form-control" id="date_escape">
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-field">
                                <label for="how_back" class="form-label">كيفية العودة</label>
                                <input type="text" name="how_back" class="form-control" id="date_escape">
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-field">
                                <label for="number_back" class="form-label">عدد مرات الهروب</label>
                                <input type="number" name="number_back" class="form-control" id="date_escape">
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-field">
                                <label for="reason_back" class="form-label">العودة وسببها</label>
                                <input type="text" name="reason_back" class="form-control" id="date_escape">
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
