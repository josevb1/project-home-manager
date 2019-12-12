import Vue from 'vue';
import VueRouter from 'vue-router' ;
import ShowGroups from "./components/ShowGroups";
import CreateGroup from "./components/CreateGroup";
import ExampleComponent from "./components/ExampleComponent";
import Contacts from "./components/Contacts";

Vue.use(VueRouter);

export default new VueRouter({
        routes: [ 

         { path: '/show', name: 'show', component: ShowGroups },

         { path: '/create', name: 'create', component: CreateGroup },

         { path: '/main', name: 'main', component: ExampleComponent },

         { path: '/contacts', name: 'contacts', component: Contacts },

         


            

    ],

    mode: 'history'
})