<template>
    <main class="form-signin w-100 m-auto">
        <form @submit.stop.prevent="submit">
            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

            <div class="form-floating">
                <input v-model="email" type="email" class="form-control" id="floatingInput"
                    placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
                <input v-model="password" type="password" class="form-control" id="floatingPassword"
                    placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>

            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p>
        </form>
    </main>
</template>
<script>
import axios from "axios"
import jsCookie from "js-cookie"
export default {

    name: "Login_",
    data() {
        return {
            email: "",
            password: "",
        }
    },
    methods: {
        submit() {
            const user = {
                email: this.email,
                password: this.password,
            }
            axios.defaults.baseURL = "http://127.0.0.1:8000/api"
            axios.post("/login", user, {
                headers: {
                    "Content-Type": "application/json",
                    "Accept": "application/json"
                }
            }).then(response => {
                jsCookie.set("sistema_tdc_token", response.data.access_token)
                this.$router.push({path:"/home"});
            })
        }
    },

}
</script>

<style>
.form-signin {
    max-width: 330px;
    padding: 300px 15px;

}

.form-signin .form-floating:focus-within {
    z-index: 2;

}

.form-signin input[type="email"] {
    margin-bottom: -1px;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;

}

.form-signin input[type="password"] {
    margin-bottom: 10px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;

}
</style>
