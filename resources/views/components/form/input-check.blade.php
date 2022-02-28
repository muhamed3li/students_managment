<div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="{{$name}}" name="{{$name}}" value="1" {{$checked==0 ? ""
        :"checked"}}>
    <label for="{{$name}}" class="form-check-label">{{$label}}</label>
</div>
@error($name)
<p class="text-danger" id="myError">{{$message}}</p>
@enderror