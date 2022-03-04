<div class="form-group">
    <label for="{{$name}}">{{$label}}</label>
    <input type="date" class="form-control datepicker" id="{{$name}}" name="{{$name}}" value="{{$old}}">
</div>
@error($name)
<p class="alert alert-danger" id="myError">{{$message}}</p>
@enderror