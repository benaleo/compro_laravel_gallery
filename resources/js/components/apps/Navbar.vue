<script setup lang="ts">
import { ref, watch, onMounted, onUnmounted } from 'vue';
import logo from '~/storage/gallery-logo-dark.png';
import logoGradient from '~/storage/gallery-logo-gradient.png';
import Icon from '../Icon.vue';
import Separator from '../ui/separator/Separator.vue';
import { Link } from '@inertiajs/vue3';

const isMenuOpen = ref(false);
const isScrolled = ref(false);
const isMobile = ref(false);

const checkIfMobile = () => {
    isMobile.value = window.innerWidth < 768;
    if (!isMobile.value) {
        isMenuOpen.value = false;
    }
};

onMounted(() => {
    checkIfMobile();
    window.addEventListener('resize', checkIfMobile);
    window.addEventListener('scroll', handleScroll);
});

onUnmounted(() => {
    window.removeEventListener('resize', checkIfMobile);
    window.removeEventListener('scroll', handleScroll);
});

const handleScroll = () => {
  isScrolled.value = window.scrollY > 10;
};


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
        title: 'Gallery',
        href: '/gallery',
    },
    {
        title: 'Blog',
        href: '/blog',
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

<template>
    <nav class="sticky top-0 z-50 h-16 w-full bg-white/80 backdrop-blur-md transition-shadow duration-300 hover:shadow-md">
        <div class="container mx-auto flex h-full items-center justify-between px-4 md:px-0 py-1">
            <!-- Logo -->
            <div class="flex h-full items-center gap-2 py-2">
                <a href="/">
                    <img :src="isScrolled ? logoGradient : logo" alt="logo" class="h-10 transition-all duration-300" />
                </a>
                <Separator v-if="!isMobile" orientation="vertical" />
                <span v-if="!isMobile" class="text-2xl font-bold text-slate-800">Design at its finest</span>
            </div>
            <!-- Menu -->
            <div class="relative flex h-full items-center gap-2 py-2">
                <div class="relative flex w-full h-full gap-3">
                    <transition 
                        enter-active-class="transition-all duration-300 ease-out"
                        enter-from-class="opacity-0 -translate-y-4"
                        enter-to-class="opacity-100 translate-y-0"
                        leave-active-class="transition-all duration-200 ease-in"
                        leave-from-class="opacity-100 translate-y-0"
                        leave-to-class="opacity-0 -translate-y-4"
                    >
                        <div v-if="isMenuOpen" class="fixed lg:relative flex flex-col lg:flex-row left-0 right-0 top-16 z-50 bg-white shadow-lg pt-4 pb-6 px-6 lg:p-0 lg:items-center lg:top-0 lg:bg-transparent lg:shadow-none lg:gap-6">
                            <div v-for="item in menuItems" :key="item.title" class="group py-2 border-b border-gray-100 last:border-b-0">
                                <Link 
                                    :href="item.href" 
                                    class="text-lg font-medium text-slate-800 group-hover:text-blue-600 transition-colors duration-200 block py-2"
                                    @click="isMenuOpen = false"
                                >
                                    {{ item.title }}
                                </Link>
                            </div>
                        </div>
                    </transition>
                    
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
            </div>
        </div>
    </nav>
</template>

