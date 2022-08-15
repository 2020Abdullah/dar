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
            <form action="{{url('update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" value="{{ $student->id }}" name="id"/>
                <div class="row">
                    <div class="col-md-12">
                        <input type="file" name="profile_image" class="form-control" id="profile_image" style="opacity:0;height:1px;display:none" onchange="document.getElementById('profile_preview').src = window.URL.createObjectURL(this.files[0])"/>
                        <div class="card text-center">
                            <div class="card-body">
                                <div class="profile">
                                    @if ($student->pic === null)
                                        <p>لا توجد صورة</p>
                                        <img id="profile_preview" src="">
                                    @else
                                    <img id="profile" class="card-img-top" src="{{ asset('public/Image/' . $student->pic) }}" alt="Card image cap">
                                    <img id="profile_preview" src="">
                                    @endif
                                    <a href="#" class="btn" id="change-profile">تحديث الصورة</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                    <label class="form-label d-block text-start">الكود</label>
                    <input type="text" value="{{ $student->code }}" class="form-control" name="code" />
                    </div>
                    <div class="col-md-3 mb-3">
                    <label class="form-label d-block text-start">الإسم</label>
                    <input type="text" value="{{ $student->Name }}" class="form-control" name="Name"/>
                    </div>
                    <div class="col-md-3 mb-3">
                    <label class="form-label d-block text-start">الرقم القومي</label>
                    <input type="text" value="{{ $student->National_ID }}" class="form-control" name="National_ID"/>
                    </div>
                    <div class="col-md-3 mb-3">
                    <label class="form-label d-block text-start">تاريخ الإيداع</label>
                    <input type="date" value="{{ $student->CaseHistory }}" class="form-control" name="CaseHistory"/>
                    </div>
                    <div class="col-md-3 mb-3">
                    <label class="form-label d-block text-start">رقم القضية</label>
                    <input type="text" value="{{ $student->CaseNumber }}" class="form-control" name="CaseNumber"/>
                    </div>
                    <div class="col-md-3 mb-3">
                    <label class="form-label d-block text-start">اسم الأم</label>
                    <input type="text" value="{{ $student->motherName }}" class="form-control" name="motherName"/>
                    </div>
                    <div class="col-md-3 mb-3">
                    <label class="form-label d-block text-start">ولي الأمر</label>
                    <input type="text" value="{{ $student->NameFather }}" class="form-control" name="NameFather"/>
                    </div>
                    <div class="col-md-3 mb-3">
                    <label class="form-label d-block text-start">عنوان ولي الأمر</label>
                    <input type="text" value="{{ $student->Address }}" class="form-control" name="Address"/>
                    </div>
                    <div class="col-md-3 mb-3">
                    <label class="form-label d-block text-start">الحالة العلمية</label>
                    <input type="text" value="{{ $student->stateEducation }}" class="form-control" name="stateEducation"/>
                    </div>
                    <div class="col-md-3 mb-3">
                    <label class="form-label d-block text-start">الإتهام</label>
                    <input type="text" value="{{ $student->Accusation }}" class="form-control" name="Accusation"/>
                    </div>
                    <div class="col-md-3 mb-3">
                    <label class="form-label d-block text-start">طريقة التحويل</label>
                    <input type="text" value="{{ $student->Transfer }}" class="form-control" name="Transfer"/>
                    </div>
                    <div class="col-md-3 mb-3">
                    <label class="form-label d-block text-start">الحالة النفسية</label>
                    <input type="text" value="{{ $student->state }}" class="form-control" name="state"/>
                    </div>
                    <div class="col-md-3 mb-3">
                    <label class="form-label d-block text-start">نتيجة الإختبار النفسي</label>
                    <input type="text" value="{{ $student->stateResult }}" class="form-control" name="stateResult"/>
                    </div>
                    <div class="col-md-3 mb-3">
                    <label class="form-label d-block text-start">حالة الأسرة الإقتصادية</label>
                    <input type="text" value="{{ $student->stateFamily }}" class="form-control" name="stateFamily"/>
                    </div>
                    <div class="col-md-3 mb-3">
                    <label class="form-label d-block text-start"> المهن السابقة</label>
                    <input type="text" value="{{ $student->Business }}" class="form-control" name="Business"/>
                    </div>
                    <div class="col-md-3 mb-3">
                    <label class="form-label d-block text-start"> عدد الإخوة</label>
                    <input type="text" value="{{ $student->Brothers }}" class="form-control" name="Brothers"/>
                    </div>
                    <div class="col-md-3 mb-3">
                    <label class="form-label d-block text-start">وظيفة الأب</label>
                    <input type="text" value="{{ $student->fatherJop }}" class="form-control" name="fatherJop"/>
                    </div>
                    <div class="col-md-3 mb-3">
                    <label class="form-label d-block text-start">وظيفة الأم</label>
                    <input type="text" value="{{ $student->motherJop }}" class="form-control" name="motherJop"/>
                    </div>
                    <div class="col-md-3 mb-3">
                    <label class="form-label d-block text-start">المراقب الإجتماعي</label>
                    <input type="text" value="{{ $student->social_watcher }}" class="form-control" name="social_watcher"/>
                    </div>
                    <div class="col-md-3 mb-3">
                    <label class="form-label d-block text-start">الإخصائي الإجتماعي</label>
                    <input type="text" value="{{ $student->worker }}" class="form-control" name="worker"/>
                    </div>
                    <div class="col-md-12 mb-3">
                    <label class="form-label d-block text-start">ملاحظات أخرى</label>
                    <textarea class="form-control" name="Nots">{{ $student->Nots }}</textarea>
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

@section('js')

<script>
    $('#change-profile').on('click', function(e){
        e.preventDefault();
        $('#profile_image').click();
    });
    $("#profile_image").on('change', function(){
        $(".profile p").hide();
        $("#profile_preview").each(function(){
            if($("#profile").length){
                $("#profile").hide();
            }
            $(this).addClass('active')
        })
    })
</script>

@endsection
