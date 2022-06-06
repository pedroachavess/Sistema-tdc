<template>
    <div class="box">
        <ul id="users-table" v-for="(user, index) in users" :key="index">
            <li class="user">
                {{ user.id }}
            </li>
            <li class="user">
                {{ user.name }}
            </li>
            <li class="user">
                {{ user.email }}
            </li>
            <div id="div_products">
                <p>
                    {{user.products_user}}
                </p>
            </div>

        </ul>
    </div>

</template>
<script>
import axios from "axios"
export default {
    name: "Lista-produtos",
    data() {
        return {
            users: []
        }

    },
    created() {
        axios.defaults.baseURL = "http://127.0.0.1:8000/api"
        axios.get("/users/products_user").then(response => {
            this.users=response.data
        })
    }

}
</script>
<style>
.box {
    position: relative;
    margin: 50px auto;
    width: 100%;
    height: 100%;


}

.user {
    background-color: #00d1b2;
    border-radius: 3px;
    border: 1px solid black;
    display: inline-block;
    padding: 10px 20px;
    font-size: 20px;
    width: 30%;
    color: white;

}
#div_products {
    background-color: #00d1b2;
    border-radius: 3px;
    border: 1px solid black;
    display: inline-block;
    padding: 10px 20px;
    font-size: 20px;
    width: 90%;
    color: white;


}
</style>