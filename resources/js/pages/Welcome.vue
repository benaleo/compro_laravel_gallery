<script setup lang="ts">
import FooterSection from '@/components/apps/FooterSection.vue';
import HeroSection from '@/components/apps/HeroSection.vue';
import ListFeatureSection from '@/components/apps/ListFeatureSection.vue';
import MainLayout from '@/layouts/MainLayout.vue';
</script>

<template>
    <MainLayout>
        <HeroSection :id="'hero'" />
        <ListFeatureSection :id="'feature'" />
        <FooterSection :id="'footer'" />
    </MainLayout>
</template>
