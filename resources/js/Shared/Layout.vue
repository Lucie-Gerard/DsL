<script setup>
// 21. Import the nav as a component
import Nav from "./Nav.vue";

</script>

<template>
    <!-- 29. Write a title here as a fallback -->
    <!-- <Head title="DsL" /> is a way of writing -->
    <Head>
        <title>
            DsL
        </title>
        <!-- 31. head-key in meta -->
        <meta name="description" content="Page information" head-key="description">
    </Head> 

    <!-- 22. Build the header and integrate the nav -->
    <header class="main-header">
        <Nav />
    </header>

    <main class="main-content">
        <!-- 24. The slot will display the content of other pages (like Home, etc) -->
       <slot />
    </main>
</template>