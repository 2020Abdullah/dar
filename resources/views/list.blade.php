@extends('layouts.master')

@section('title')
سجل القيد العام
@endsection

@section('Header')

<x-header/>

@endsection

@section('SideBar')

<x-sidebar/>

@endsection

@section('main')

    <main id="main" class="main">
        <h2>سجل القيد العام</h2>
        <hr/>
        @include('layouts.msg')
        <section class="section dashboard">
            <form action="{{ route('Search') }}" method="POST" class="d-flex mb-3">
                @csrf
                <input class="form-control me-2" type="search" placeholder="ادخل الإسم أو الكود ..." aria-label="Search" name="q">
                <button class="btn btn-success" type="submit">بحث </button>
            </form>
            <table class="table table-responsive table-bordered">
                <tr>
                    <th>مسلسل</th>
                    <th>الكود</th>
                    <th>الإسم</th>
                    <th>العمر</th>
                    <th>تاريخ الإيداع</th>
                    <th>طريقة التحويل</th>
                    <th>الرقم القومي</th>
                    <th>اتخاذ إجراء</th>
                </tr>
                @forelse ($students as $student)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $student->code }}</td>
                        <td>{{ $student->Name }}</td>
                        <td>{{ $student->Age }}</td>
                        <td>{{ $student->CaseHistory }}</td>
                        <td>{{ $student->Transfer }}</td>
                        <td>{{ $student->National_ID }}</td>
                        <td>
                            <a href="{{ route('show', $student->id) }}" class="btn btn-info"><i class="fa fa-eye"></i>عرض تفصلي</a>
                            <a href="{{ route('edit', $student->id) }}" class="btn btn-success"><i class="fa fa-edit"></i> تعديل</a>
                            <button type="button" class="btn btn-danger delete" data-bs-toggle="modal" data-bs-target="#del{{$student->id}}" id="{{$student->id}}">
                                <i class="fa fa-trash"></i> حذف
                            </button>
                            @include('components.modelDel')
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8">لا توجد بيانات</td>
                    </tr>
                @endforelse
            </table>
        </section>
        {{$students->links()}}
    </main><!-- End #main -->



@endsection


@section('footer')
    <x-footer/>
@endsection
