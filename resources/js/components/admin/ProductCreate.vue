<template>
    <div class="container">
        <div>
    <b-form @submit="onSubmit">
      <b-form-group
        id="input-group-1"
        label="Product Name:"
        label-for="name"
      >
        <b-form-input
          id="name"
          v-model="product.name"
          type="text"
          placeholder="Enter Description"
          required
        ></b-form-input>
      </b-form-group>
      <b-form-group
        id="input-group-2"
        label="Product Name:"
        label-for="name"
      >
        <b-form-textarea
        id="textarea"
        v-model="text"
        placeholder="Description"
        rows="3"
        max-rows="6"
        ></b-form-textarea>
      </b-form-group>

      <b-button type="submit" variant="primary">Submit</b-button>
    </b-form>
    
  </div>
        
    </div>
</template>

<script>
    export default {
        data(){
            return {
            product: {}
          }
        },
        methods: {
            onSubmit(){

            }
        }
    }
</script>
