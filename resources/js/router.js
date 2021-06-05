import Vue from 'vue';
import VueRouter from 'vue-router';
import Products from './components/Products'



Vue.use(VueRouter);

export default new VueRouter({
    mode: 'history',

    routes: [{
            path: '/admin/products',
            name: 'admin-products',
            component: Products,
        },
        // {
        //     path: '/users/:userId', name: 'user.show', component: UserShow,
        //     meta: { title: 'Profile' }
        // }
    ]
});