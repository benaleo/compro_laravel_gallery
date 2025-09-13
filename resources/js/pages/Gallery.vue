<script setup lang="ts">
import GallerySection from '@/components/apps/GallerySection.vue';
import MainLayout from '@/layouts/MainLayout.vue';
import { Head } from '@inertiajs/vue3';
import CtaPurchase from '@/components/apps/CtaPurchase.vue';

const props = defineProps<{
    images: string[];
}>();
</script>

<template>
    <Head title="Gallery" />
    <MainLayout>
        <GallerySection :id="'gallery'" />
        <CtaPurchase :id="'cta-purchase'" />
    </MainLayout>
</template>
