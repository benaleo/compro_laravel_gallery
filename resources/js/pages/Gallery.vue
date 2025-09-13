<script setup lang="ts">
import GallerySection from '@/components/apps/GallerySection.vue';
import MainLayout from '@/layouts/MainLayout.vue';
import { Head } from '@inertiajs/vue3';

const props = defineProps<{
    images: string[];
}>();
</script>

<template>
    <Head title="Gallery" />
    <MainLayout>
        <GallerySection :id="'gallery'" />
    </MainLayout>
</template>
