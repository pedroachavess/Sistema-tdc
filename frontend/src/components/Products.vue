<template>
    <div class="box" >
        <ul id="products-table" v-for="(product, index) in products" :key="index">
            <li class="product" >
                {{product.id}}
             </li>
            <li class="product">
                {{product.name}}
             </li>
             <li class="product" >
                {{product.value}}
            </li>
            <li class="product" >
                {{product.desc}}
            </li>
        </ul>
    </div>

</template>
<script>   
    import axios from "axios"
    export default {
        name: "Lista-produtos",
        data () {
            return {
                products: []
            }

        },
        created () {
            axios.defaults.baseURL="http://127.0.0.1:8000/api"
            axios.get("/products").then(response=>{
                this.products=response.data
                
                
                console.log(this.products)
                console.log(response)
            })
        },
      
        
    }
</script>
<style>
.box {
    position: relative;
    margin: 50px 0;
}
#products-list {
    position: relative;
}
.product {
    background-color: #00d1b2;
    border-radius: 3px;
    border: 1px solid black;
    display:inline-block ;
    padding: 10px 20px;
    font-size: 20px;
    width: 20%;
    color: white;

}
</style>