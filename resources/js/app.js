require('./bootstrap');

window.Vue = require('vue');

Vue.component('idea', require('./components/Idea.vue').default);

const app = new Vue({
    el: '#app',
});
