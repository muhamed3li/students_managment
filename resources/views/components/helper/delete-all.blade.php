<form method="POST" action="{{route($model.'.deleteAll')}}">
    @csrf
    <button type="submit" class="btn btn-danger mt-5 mb-1">
        حذف كل البيانات
        <i class="fas fa-trash"></i>
    </button>
</form>