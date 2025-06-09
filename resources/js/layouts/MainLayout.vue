<script setup lang="ts">
    import MainFooterLayout from './main/MainFooterLayout.vue';
    import MainHeaderLayout from './main/MainHeaderLayout.vue';
</script>
<template>
    <MainHeaderLayout />
    <main>
        <slot />
    </main>
    <MainFooterLayout />
</template>
