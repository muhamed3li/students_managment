<div class="card-body">
    <div class="form-group">
        <label>{{$label}}</label>
        <select class="form-control select2 select2-hidden-accessible {{$name}}" style="width: 100%;"
            data-select2-id="1" tabindex="-1" aria-hidden="true" name="{{$name}}" id="{{$name}}">

            <option>اختر</option>
            @foreach ($selectdata as $item)
            <option value="{{$item->id}}">{{$item->$key}}</option>
            @endforeach

        </select>
    </div>
    @error($name)
    <p class="text-danger" id="myError">{{$message}}</p>
    @enderror
</div>