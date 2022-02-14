import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import EmployeeProfile from '../components/EmployeeProfile.vue';
import Employees from '../components/Employees.vue';

const routes = [

    { 
        path: '/employee',
        component: Employees, 
        name: 'Employees'
    },

    { 
        path: '/employee/:id',
        component: EmployeeProfile, 
        name: 'EmployeeProfile'
    },


];

const router = new VueRouter({
    routes,
    hashbang: false,
    mode: 'history'
})

export default router;