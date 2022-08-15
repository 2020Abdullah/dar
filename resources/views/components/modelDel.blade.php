<!-- Modal-Delete -->
<div class="modal fade" id="del{{$student->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-danger" id="exampleModalLabel">تأكيد حذف الحالة</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ url('destroy') }}" method="POST">
                @csrf
                <input type="hidden" value="{{$student->id}}" name="student_id"/>
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
