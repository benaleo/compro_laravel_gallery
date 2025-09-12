<template>
    <nav class="h-16 w-full bg-slate-100">
        <div class="container mx-auto flex h-full items-center justify-between py-1">
            <!-- Logo -->
            <div class="flex h-full items-center gap-2 py-2">
                <img :src="logo" alt="logo" class="h-10" />
                <Separator orientation="vertical" />
                <span class="text-2xl font-bold text-slate-800">Design at its finest</span>
            </div>
            <!-- Menu -->
            <div class="flex h-full items-center gap-2 py-2">
                <div class="flex h-full items-center gap-3">
                    <div v-if="isMenuOpen" v-for="item in menuItems" :key="item.title">
                        <Link :href="item.href" class="text-xl font-medium text-slate-800 hover:text-blue-800 hover:font-bold hover:border-b-4 hover:border-blue-600 hover:py-1 hover:transition-all">
                            {{ item.title }}
                        </Link>
                    </div>
                    <Button @click="toggleMenu" class="relative h-8 w-8 overflow-hidden">
                        <Icon
                            :class="{
                                'rotate-0 opacity-100': !isMenuOpen,
                                '-rotate-90 opacity-0': isMenuOpen,
                            }"
                            class="absolute top-1/2 left-1/2 h-8 w-8 -translate-x-1/2 -translate-y-1/2 transition-all duration-300 ease-in-out"
                            name="Menu"
                            color="black"
                        />
                        <Icon
                            :class="{
                                'rotate-90 opacity-0': !isMenuOpen,
                                'rotate-0 opacity-100': isMenuOpen,
                            }"
                            class="absolute top-1/2 left-1/2 h-8 w-8 -translate-x-1/2 -translate-y-1/2 transition-all duration-300 ease-in-out"
                            name="X"
                            color="black"
                        />
                    </Button>
                </div>
                <Separator orientation="vertical" />
                <span class="text-2xl font-bold text-slate-800">Icon2</span>
            </div>
        </div>
    </nav>
</template>

<script setup lang="ts">
import { ref, watch } from 'vue';
import logo from '~/storage/gallery-logo-dark.png';
import Icon from '../Icon.vue';
import Separator from '../ui/separator/Separator.vue';
import { Link } from '@inertiajs/vue3';

const isMenuOpen = ref(false);

const toggleMenu = () => {
    isMenuOpen.value = !isMenuOpen.value;
};

watch(isMenuOpen, (value) => {
    if (value) {
        document.body.classList.add('overflow-hidden');
    } else {
        document.body.classList.remove('overflow-hidden');
    }
});

const menuItems = [
    {
        title: 'Home',
        href: '/',
    },
    {
        title: 'About',
        href: '/about',
    },
    {
        title: 'Contact',
        href: '/contact',
    },
];
</script>
