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
        <h2>بيانات الحالة</h2>
        <hr/>
        <section class="section report">
            <div class="d-flex report-header">
                @isset($student->pic)
                    <img src="{{ asset('public/Image/'. $student->pic) }}" class="card-img-top" alt="...">
                @endisset
            </div>
            <div class="row">
                <div class="col-md-3 mb-3">
                    <div class="card-box">
                        <h3>الإسم</h3>
                        <p class="lead">{{ $student->Name }}</p>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card-box">
                        <h3>الكود</h3>
                        <p class="lead">{{ $student->code }}</p>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card-box">
                        <h3>الإتهام</h3>
                        <p class="lead">{{ $student->Accusation }}</p>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card-box">
                        <h3>الإخصائي الإجتماعي</h3>
                        <p class="lead">{{ $student->worker }}</p>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card-box">
                        <h3>تاريخ الهروب</h3>
                        <p class="lead">{{ $student->date_escape }}</p>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card-box">
                        <h3>كيفية الهروب</h3>
                        <p class="lead">{{ $student->how_escape }}</p>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card-box">
                        <h3>تاريخ العودة</h3>
                        <p class="lead">{{ $student->date_back }}</p>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card-box">
                        <h3>كيفية العودة</h3>
                        <p class="lead">{{ $student->how_back }}</p>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card-box">
                        <h3>عدد مرات الهروب</h3>
                        <p class="lead">{{ $student->number_back }}</p>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card-box">
                        <h3>العودة وسببها</h3>
                        <p class="lead">{{ $student->reason_back }}</p>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->



@endsection


@section('footer')
    <x-footer/>
@endsection
