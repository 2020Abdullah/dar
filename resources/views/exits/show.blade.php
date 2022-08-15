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
                        <h4>الإسم</h4>
                        <p class="lead">{{ $student->Name }}</p>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card-box">
                        <h4>الكود</h4>
                        <p class="lead">{{ $student->code }}</p>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card-box">
                        <h4>الرقم القومي</h4>
                        <p class="lead">{{ $student->National_ID }}</p>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card-box">
                        <h4>تاريخ الميلاد</h4>
                        <p class="lead">{{ $student->Birdth }}</p>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card-box">
                        <h4>تاريخ الخروج</h4>
                        <p class="lead">{{ $student->exit_date }}</p>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card-box">
                        <h4>سبب الخروج</h4>
                        <p class="lead">{{ $student->exit_reason }}</p>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card-box">
                        <h4>تاريخ الإيداع</h4>
                        <p class="lead">{{ $student->CaseHistory }}</p>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->



@endsection


@section('footer')
  <x-footer/>
@endsection
