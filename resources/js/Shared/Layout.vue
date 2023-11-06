<script setup>
// 21. Import the nav as a component
import Nav from "./Nav.vue";
</script>

<template>
    <!-- 22. Build the header and integrate the nav -->
    <header class="main-header">
        <h1 class="header_logo text-center">
            <Link href="/"><img src="./assets/img/nav/logo.png" alt="Logo"></Link>
        </h1>

        <Nav />
    </header>

    <main>
        <!-- 24. The slot will display the content of other pages (like Home, etc) -->
       <slot />
    </main>
</template>