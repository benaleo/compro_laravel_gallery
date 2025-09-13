<script setup lang="ts">
import { ShoppingBag } from 'lucide-vue-next';
import Icon from '../Icon.vue';
import Button from '../ui/button/Button.vue';
import image from '~/storage/cta-icon.png';

interface Props {
    id: string;
}

const props = defineProps<Props>();

const handleExternalLink = (link : string) => {
    window.location.href = link || 'https://google.com';
};
</script>

<template>
    <section :id="props.id" class="container mx-auto my-12  flex gap-4 w-full flex-col items-center justify-center py-8 px-12 lg:px-2 md:flex-row">
        <div class="relative w-[200px]">
            <img :src="image" alt="Gallery" class="w-full h-full object-cover floating" />
        </div>
        <div class="space-y-4 px-8 w-full text-center md:text-left">
            <h1 class="text-xl md:text-3xl font-bold">Template is Now Available</h1>
            <p class="md:text-xl text-slate-600 md:max-w-[80%]">Over 9 million digital products by a global community.</p>
        </div>
        <Button @click="handleExternalLink('/gallery')" class="whitespace-nowrap rounded-full cursor-pointer text-2xl" variant="gradient">
        <ShoppingBag class="mr-2" />
        Purchase Now </Button>
    </section>
</template>

<style scoped>
@keyframes float {
    0% {
        transform: translateY(0px);
    }
    50% {
        transform: translateY(-15px);
    }
    100% {
        transform: translateY(0px);
    }
}

.floating {
    animation: float 4s ease-in-out infinite;
}
</style>
