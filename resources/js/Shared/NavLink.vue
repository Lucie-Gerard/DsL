<script setup>

    props: {
        active: Boolean
    }


</script>

<template>
    <!-- 27. 
    Create the Link component that will wrap the anchor tag 
    Don't forget the slot and the setup !!
-->
    <Link :class="{ 'font-bold underline': active }">
    <slot />
    </Link>
</template>