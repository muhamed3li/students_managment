<div class="form-group">
    <label for="{{$name}}">{{$label}}</label>
    <textarea type="text" class="form-control" id="{{$name}}" name="{{$name}}">{{$old}}</textarea>
</div>
@error($name)
<p class="alert alert-danger" id="myError">{{$message}}</p>
@enderror