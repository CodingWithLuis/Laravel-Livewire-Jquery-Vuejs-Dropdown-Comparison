<template>
    <div>
        <div class="form-group">
            <label for="country">Country</label>
            <select
                id="country"
                name="country"
                class="form-control"
                v-model="country_id"
                @change="getCities()"
            >
                <option value="">Seleccione</option>
                <option
                    v-for="country in countries"
                    :key="country.id"
                    :value="country.id"
                >
                    {{ country.name }}
                </option>
            </select>
        </div>

        <div class="form-group mt-4">
            <label for="city">City</label>
            <select
                id="city"
                name="city"
                class="form-control"
                v-model="city_id"
            >
                <option v-for="city in cities" :key="city.id" :value="city.id">
                    {{ city.name }}
                </option>
            </select>
        </div>
    </div>
</template>
<script>
import { ref, onMounted } from 'vue';

export default {
    name: 'CountryDropdown',
    setup() {
        const countries = ref([]);
        const cities = ref([]);

        const country_id = ref([]);
        const city_id = ref([]);

        const getCountries = () => {
            axios
                .get('/api/countries/index')
                .then((response) => (countries.value = response.data));
        };

        onMounted(() => {
            getCountries();
        });

        const getCities = () => {
            axios
                .get('/api/countries/' + country_id.value + '/getCities')
                .then((response) => (cities.value = response.data));
        };

        return {
            countries,
            cities,
            getCountries,
            getCities,
            country_id,
            city_id,
        };
    },
};
</script>
