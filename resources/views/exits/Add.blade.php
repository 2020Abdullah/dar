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
        <h2 class="text-start">إضافة بيانات الخروج</h2>
        <hr/>
        @include('layouts.msg')
        <div class="form-data">
            <form action="{{ route('index-exit.store') }}" method="POST">
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
                                <label for="date_exit" class="form-label">تاريخ الخروج</label>
                                <input type="date" name="date_exit" class="form-control" id="date_exit">
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-field">
                                <label for="exit_reason" class="form-label">سبب الخروج</label>
                                <input type="text" name="exit_reason" class="form-control" id="exit_reason">
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
