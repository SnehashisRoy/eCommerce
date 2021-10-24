<template>
    <div class="container">
        <div>
            <b-button variant="success" to="/admin/product/create">Create Product</b-button>

             <ul>
                 <li v-for="product in products" :key="product.id"> <router-link  :to="{name : 'product' , params: {id: product.id}}">{{product.name}}</router-link></li>
                 
             </ul>
        </div>
        
    </div>
</template>

<script>
    export default {
        data(){
            return {
                products: []
            }
        },
        async mounted() {
            let res = await axios.get('/api/admin/products');
            this.products = res.data.data;

            console.log(this.products);
            
        }
    }
</script>
