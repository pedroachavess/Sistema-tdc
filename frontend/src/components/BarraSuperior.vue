<template>
    <nav class="navbar is-primary is-forth-quarter">
        <div class="navbar-brand">
          <a class="navbar-item" href="/" style="font-weight:bold;">
            Home
          </a>
        </div>
        <div id="navMenu" class="navbar-menu">
          <div class="navbar-end">
            <a href="/users" class="navbar-item">Listar usuários</a>
            <a href="/products" class="navbar-item">Listar Produtos</a>
          </div>
        </div>
    </nav>
</template>

<script>

export default {
    name: 'BarraLateral'
}
</script>

<style>
</style>