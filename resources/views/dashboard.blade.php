@extends('layouts.master')

@section('title')
نظرة عامة
@endsection

@section('Header')

<x-header/>

@endsection

@section('SideBar')

<x-sidebar/>

@endsection

@section('main')

    <main id="main" class="main">
        <h2>نظرة عامة</h2>
        <hr/>
        <section class="section dashboard">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                    <h5 class="card-title">إجمالي سجل القيد العام</h5>
                    <p class="card-text">
                        {{ $studentCount }}
                    </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                    <h5 class="card-title">إجمالي سجل الهاربين</h5>
                    <p class="card-text">
                        {{ $ecapeCount }}
                    </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                    <h5 class="card-title">إجمالي حالات الخروج</h5>
                    <p class="card-text">
                        {{ $exitcount }}
                    </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                    <h5 class="card-title">إجمالي كل الحالات المسجلة</h5>
                    <p class="card-text">
                        {{ $total }}
                    </p>
                    </div>
                </div>
            </div>
            </div>
        </div>
        </section>

    </main><!-- End #main -->



@endsection


@section('footer')
    <x-footer/>
@endsection
