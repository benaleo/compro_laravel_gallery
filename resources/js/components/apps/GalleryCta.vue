<script setup lang="ts">
import Icon from '../Icon.vue';
import Button from '../ui/button/Button.vue';

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
        <img src="/storage/cta-like.png" alt="Gallery" class="w-[200px] object-cover" />
        <div class="space-y-4 px-8 w-full text-center md:text-left">
            <h1 class="text-xl md:text-3xl font-bold">Visit our new gallery</h1>
            <p class="md:text-xl text-slate-600 md:max-w-[80%]">Create awesome and top-notch products using the most advanced WordPress theme we have ever made.</p>
        </div>
        <Button @click="handleExternalLink('/gallery')" class="whitespace-nowrap rounded-full cursor-pointer" variant="gradient">
        <Icon name="images" class="mr-2" /> Go To Gallery </Button>
    </section>
</template>
