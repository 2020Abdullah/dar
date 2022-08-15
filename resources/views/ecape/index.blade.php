@extends('layouts.master')

@section('title')
سجل الهروب والعودة
@endsection

@section('Header')

<x-header/>

@endsection

@section('SideBar')

<x-sidebar/>

@endsection

@section('main')

    <main id="main" class="main">
        <h2>سجل الهروب والعودة</h2>
        <hr/>
        @include('layouts.msg')
        <section class="section dashboard">
            <form action="{{ route('index-escape.Search') }}" method="POST" class="d-flex mb-3">
                @csrf
                <input class="form-control me-2" type="search" placeholder="ادخل الإسم أو الكود ..." aria-label="Search" name="q">
                <button class="btn btn-success" type="submit">بحث </button>
            </form>
            <table class="table table-bordered table-responsive">
                <tr>
                    <th>مسلسل</th>
                    <th>الكود</th>
                    <th>الإسم</th>
                    <th>الإتهام</th>
                    <th>تاريخ الهروب</th>
                    <th>عدد مرات الهروب</th>
                    <th>إجراء</th>
                </tr>
                @forelse ($Escape as $esc)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $esc->code }}</td>
                        <td><a href="{{ route('index-escape.show', $esc->student_id) }}">{{ $esc->Name }}</a></td>
                        <td>{{ $esc->Accusation }}</td>
                        <td>{{ $esc->date_escape }}</td>
                        <td>{{ $esc->number_back }}</td>
                        <td>
                            <a href="{{route('index-escape.edit', $esc->student_id)}}" class="btn btn-success"><i class="fa fa-edit"></i> تعديل</a>
                            <button type="button" class="btn btn-danger delete" data-bs-toggle="modal" data-bs-target="#del{{$esc->code}}" id="{{$esc->code}}">
                                <i class="fa fa-trash"></i> حذف
                            </button>
                        <!-- Modal-Delete -->
                        <div class="modal fade" id="del{{$esc->code}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title text-danger" id="exampleModalLabel">تأكيد حذف الحالة </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('index-escape.destroy', '') }}" method="POST">
                                        @csrf
                                        <input type="hidden" value="{{$esc->code}}" name="code"/>
                                        <input type="hidden" value="{{$esc->id}}" name="id"/>
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
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8">لا توجد بيانات</td>
                    </tr>
                @endforelse
            </table>
        </section>
        {{$Escape->links()}}
    </main><!-- End #main -->



@endsection


@section('footer')
    <x-footer/>
@endsection
