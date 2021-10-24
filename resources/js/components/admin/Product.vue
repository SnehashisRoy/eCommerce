<template>
    <div class="container">
        <div>
            product
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
