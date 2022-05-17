<div>
    <div class="form-group">
        <label for="country">Country</label>
        <select id="country" name="country" class="form-control" wire:model="country">
            <option>--- Seleccione un país ---</option>
            @foreach($countries as $country)
            <option value="{{$country->id}}">{{$country->name}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group mt-4">
        <label for="city">City</label>
        <select id="city" name="city" class="form-control" wire:model="city">
            @if($cities->count() == 0)
            <option>Debe seleccionar un país antes de continuar</option>
            @endif
            @foreach($cities as $city)
            <option value="{{$city->id}}">{{$city->name}}</option>
            @endforeach
        </select>
    </div>
</div>
