<div class="form-group">
    <label for="{{$name}}">{{$label}}</label>
    <select class="form-control" name="{{$name}}" id="{{$name}}">
        @foreach ($selectdata as $key => $value)
        <option value="{{$key}}" {{$old==$key ? 'selected' :''}}>{{$value}}</option>
        @endforeach
    </select>
</div>