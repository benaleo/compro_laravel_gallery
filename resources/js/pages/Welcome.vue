<script setup lang="ts">
import FooterSection from '@/components/apps/FooterSection.vue';
import GalleryCta from '@/components/apps/GalleryCta.vue';
import GallerySection from '@/components/apps/GallerySection.vue';
import HeroSection from '@/components/apps/HeroSection.vue';
import ListFeatureSection from '@/components/apps/ListFeatureSection.vue';
import MainLayout from '@/layouts/MainLayout.vue';
</script>

<template>
    <MainLayout>
        <HeroSection :id="'hero'" />
        <ListFeatureSection :id="'feature'" />
        <GallerySection :id="'gallery'" />
        <GalleryCta :id="'gallery-cta'" />

    </MainLayout>
</template>
