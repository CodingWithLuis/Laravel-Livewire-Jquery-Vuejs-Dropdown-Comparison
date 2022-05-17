@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <div class="form-group">
                        <label for="country">Country</label>
                        <select id="country" name="country" class="form-control">
                            <option>--- Seleccione un país ---</option>
                            @foreach($countries as $country)
                            <option value="{{$country->id}}">{{$country->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group mt-4">
                        <label for="city">City</label>
                        <select id="city" name="city" class="form-control">
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
    $(document).ready(function() {

        $('#country').change(function() {

            const city_dropdown = $('#city');

            $.ajax({
                url: "{{ route('cities.index') }}",
                data: {
                    country_id: $(this).val()
                },
                success: function(data) {
                    city_dropdown.html('<option value="" selected>Seleccione</option>');

                    $.each(data, function(id, value) {
                        city_dropdown.append('<option value="' + id + '">' + value + '</option>');
                    });
                }
            })
        })
    })
</script>
@endsection
