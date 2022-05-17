<?php

namespace App\Http\Livewire;

use App\Models\City;
use App\Models\Country;
use Livewire\Component;

class CountrySelectComponent extends Component
{
    public $countries = [], $cities = [];
    public $country, $city;

    public function mount()
    {
        $this->countries = Country::all();
        $this->cities = collect();
    }

    public function updatedCountry($value)
    {
        $this->cities = City::where('country_id', $value)->get();
        $this->city = $this->cities->first()->id ?? null;
    }

    public function render()
    {
        return view('livewire.country-select-component');
    }
}
