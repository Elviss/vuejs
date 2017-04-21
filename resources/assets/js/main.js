import Vue from 'vue'

import VueResource from 'vue-resource'

Vue.use(VueResource);

import Users from './components/users.vue'

new Vue({
    el: '.container',
    components: {
        Users
    },
    data: {
        title: 'qualquer coisa'
    }
});