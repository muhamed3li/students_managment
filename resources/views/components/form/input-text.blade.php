<div class="form-group mb-5">
    <label for="{{$name}}">{{$label}}</label>
    <input type="text" class="form-control" id="{{$name}}" name="{{$name}}" value="{{$old}}">
</div>
@error($name)
<p class="text-danger">{{$message}}</p>
@enderror