require('./bootstrap');

window.Vue = require('vue').default;

Vue.component('employees', require('./components/Employees.vue').default);

import router from './routes/routes';
import Home from './components/Home.vue';

const app = new Vue({
    el: '#app',
    router,
    render: h => h(Home),
});
