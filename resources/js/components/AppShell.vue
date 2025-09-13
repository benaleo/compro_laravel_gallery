<script setup lang="ts">
import { SidebarProvider } from '@/components/ui/sidebar';
import { usePage } from '@inertiajs/vue3';
import Navbar from '@/components/apps/Navbar.vue';

interface Props {
    variant?: 'header' | 'sidebar';
}

interface PageProps {
    sidebarOpen: boolean;
}

defineProps<Props>();

const page = usePage<{ props: PageProps }>();
const isOpen = page.props.sidebarOpen as boolean;
</script>

<template>
    <div v-if="variant === 'header'" class="flex min-h-screen w-full flex-col">
        <Navbar />
        <slot />
    </div>
    <SidebarProvider v-else :default-open="isOpen">
        <Navbar />
        <slot />
    </SidebarProvider>
</template>
