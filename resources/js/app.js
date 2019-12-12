import Vue from 'vue';
import VueRouter from 'vue-router';
import router from './routes';
import EvaIcons from 'vue-eva-icons';



Vue.use(EvaIcons);
Vue.use(VueRouter);

require('./bootstrap');

window.Vue = require('vue');



Vue.component('create-business', require('./components/CreateBusiness.vue').default);
Vue.component('create-group', require('./components/CreateGroup.vue').default);
Vue.component('contacts', require('./components/Contacts.vue').default);
Vue.component('groups', require('./components/ShowGroups.vue').default);
Vue.component('network-menu', require('./components/menu/NetworkMenu').default);

const app = new Vue({
    el: '#root',

    router,


});

