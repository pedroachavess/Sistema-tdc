<template>
  <header class="columns is-gapless is-multiline">
    <div class="column">
      <BarraSuperior/>
    </div>
  </header>
  <main>
    <router-view></router-view>
  </main>
</template>
<script>
  import BarraSuperior from "./components/BarraSuperior.vue"
  export default {

    name: "App",
    components: {
      BarraSuperior,
    },
    
  }
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}

nav {
  padding: 30px;
}

nav a {
  font-weight: bold;
  color: #2c3e50;
}

nav a.router-link-exact-active {
  color: #42b983;
}
</style>
