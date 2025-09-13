<script setup lang="ts">
import FooterSection from '@/components/apps/FooterSection.vue';
import Navbar from '@/components/apps/Navbar.vue';
</script>

<template>
    <Navbar />
    <slot />
    <FooterSection :id="'footer'" />
</template>
