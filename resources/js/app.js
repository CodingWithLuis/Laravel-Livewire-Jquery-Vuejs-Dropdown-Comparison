import { createApp } from "vue";

import CountryDropdown from './components/CountryDropdown.vue'

window.axios = require('axios')

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest'

const app = createApp({})

app.component('CountryDropdown', CountryDropdown)
    .mount('#app')

