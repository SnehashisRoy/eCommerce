import Vue from 'vue';
import VueRouter from 'vue-router';
import Products from './components/admin/Products';
import ProductCreate from './components/admin/ProductCreate';
import Product from './components/admin/Product';




Vue.use(VueRouter);

export default new VueRouter({
    mode: 'history',

    routes: [
        { path: '/admin/products', component: Products },
        { path: '/admin/product/create', component: ProductCreate },
        { path: '/admin/product/:id', component: Product },


    ]
});