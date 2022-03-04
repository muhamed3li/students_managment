<div class="form-group mt-3">
    <label for="{{$name}}">{{$label}}</label>
    <input type="text" class="form-control" id="{{$name}}" name="{{$name}}" value="{{$old}}">
</div>
@error($name)
<p class="alert alert-danger" id="myError">{{$message}}</p>
@enderror