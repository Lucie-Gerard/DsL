<script setup>
// 21. Import the nav as a component
import Nav from "./Nav.vue";
</script>

<template>
    <!-- 22. Build the header and integrate the nav -->
    <header class="main-header">
        <h1 class="header_logo text-center">
            <a href="index.html"><img src="./assets/img/nav/logo.png" alt="Logo"></a>
        </h1>

        <Nav />
    </header>

    <main>
        <h2>My decks</h2>
    </main>
</template>