<div class="form-group">
    <p>{{$label}}</p>
    @foreach ($arr as $key=>$value)
    <div class="form-check">
        <input class="form-check-input" type="radio" name="{{$name}}" value="{{$key}}" id="r{{$key}}" {{$old==$key
            ? 'checked' : '' }}>
        <label class="form-check-label" for="r{{$key}}">{{$value}}</label>
    </div>
    @endforeach
</div>