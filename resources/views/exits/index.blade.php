@extends('layouts.master')

@section('title')
سجل الخروج
@endsection

@section('Header')

<x-header/>

@endsection

@section('SideBar')

<x-sidebar/>

@endsection

@section('main')

    <main id="main" class="main">
        <h2>سجل الخروج</h2>
        <hr/>
        @include('layouts.msg')
        <section class="section dashboard">
            <form action="{{ route('index-exit.Search') }}" method="POST" class="d-flex mb-3">
                @csrf
                <input class="form-control me-2" type="search" placeholder="ادخل الإسم أو الكود ..." aria-label="Search" name="q">
                <button class="btn btn-success" type="submit">بحث </button>
            </form>
            <table class="table table-bordered table-responsive">
                <tr>
                    <th>مسلسل</th>
                    <th>الكود</th>
                    <th>الإسم</th>
                    <th>تاريخ الإيداع</th>
                    <th>تاريخ الخروج</th>
                    <th>سبب الخروج</th>
                    <th>القضية</th>
                    <th>إجراء</th>
                </tr>
                @forelse ($exit as $ex)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $ex->code }}</td>
                        <td><a href="{{ route('index-exit.show', $ex->id) }}">{{ $ex->Name }}</a></td>
                        <td>{{ $ex->CaseHistory }}</td>
                        <td>{{ $ex->exit_date }}</td>
                        <td>{{ $ex->exit_reason }}</td>
                        <td>{{ $ex->Accusation }}</td>
                        <td>
                            <button type="button" class="btn btn-danger delete" data-bs-toggle="modal" data-bs-target="#del{{$ex->code}}" id="{{$ex->code}}">
                                <i class="fa fa-trash"></i> حذف
                            </button>
                        </td>
                        <!-- Modal-Delete -->
                        <div class="modal fade" id="del{{$ex->code}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title text-danger" id="exampleModalLabel">تأكيد حذف الحالة</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('index-exit.destory', '') }}" method="POST">
                                        @csrf
                                        <input type="hidden" value="{{$ex->student_id}}" name="student_id"/>
                                        <div class="mb-3 text-start">
                                            <label class="form-label">هل تريد حذف هذه الحالة بالفعل ؟</label>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إلغاء</button>
                                            <input type="submit" value="تأكيد" class="btn btn-success"/>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </tr>
                @empty
                    <tr>
                        <td colspan="8">لا توجد بيانات</td>
                    </tr>
                @endforelse
            </table>
        </section>
        {{$exit->links()}}
    </main><!-- End #main -->



@endsection


@section('footer')
    <x-footer/>
@endsection
