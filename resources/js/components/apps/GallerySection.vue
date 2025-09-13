<script setup lang="ts">
import { ref } from 'vue';
import Icon from '../Icon.vue';
import Lightbox from '../Lightbox.vue';
import Badge from '../ui/badge/Badge.vue';
import Button from '../ui/button/Button.vue';

interface Props {
    id: string;
}

const props = defineProps<Props>();

// All gallery images for the lightbox carousel
const images: string[] = [
    '/storage/gal-1.jpg',
    '/storage/gal-2.jpg',
    '/storage/gal-3.jpg',
    '/storage/gal-4.jpg',
    '/storage/gal-5.jpg',
    '/storage/gal-6.jpg',
    '/storage/gal-7.jpg',
];

const handleExternalLink = (link : string) => {
    window.location.href = link || 'https://google.com';
};
</script>

<template>
    <section :id="props.id" class="container mx-auto flex w-full flex-col items-center justify-center py-8">
        <!-- Badge -->
        <Badge class="px-3 py-1.5" variant="secondary">Unlimited Possibilities</Badge>

        <!-- Heading -->
        <div class="py-12 text-center">
            <h1 class="text-3xl font-bold">Add a <span class="a-underline">Super Clean</span></h1>
            <h1 class="text-3xl font-bold"><span class="a-underline">Gallery</span> to your Website</h1>
        </div>

        <!-- Description -->
        <div class="mx-auto max-w-2xl text-center">
            <p class="text-xl text-slate-600">
                Combine seamlessly fitting layouts, customize everything you want, switch components on the go using Essentials theme.
            </p>
        </div>

        <!-- Grid Gallery -->
        <div class="grid grid-cols-1 gap-4 lg:grid-cols-3">
            <!-- Tile 1: gal-1 (index 0) -->
            <div class="relative lg:col-start-1 lg:row-span-1 lg:row-start-1">
                <Lightbox :images="images" :initialIndex="0">
                    <img src="/storage/gal-1.jpg" alt="Gallery" class="h-full w-full object-cover" />
                    <Button
                        class="absolute bottom-4 left-1/2 flex w-[90%] -translate-x-1/2 items-center justify-between gap-2 bg-slate-200 text-slate-800 hover:bg-slate-300"
                    >
                        View Gallery <Icon name="frame" color="black" />
                    </Button>
                </Lightbox>
            </div>

            <!-- Tile 2: gal-2 (index 1) -->
            <div class="group relative lg:col-start-2 lg:row-span-1 lg:row-start-1">
                <Lightbox :images="images" :initialIndex="1">
                    <img src="/storage/gal-2.jpg" alt="Gallery" class="h-full w-full object-cover" />
                    <Button
                        class="absolute bottom-4 left-1/2 flex w-[90%] -translate-x-1/2 items-center justify-between gap-2 bg-slate-200 text-slate-800 opacity-0 group-hover:opacity-100 hover:bg-slate-300"
                    >
                        View Gallery <Icon name="frame" color="black" />
                    </Button>
                </Lightbox>
            </div>

            <!-- Tile 3: gal-4 (index 3) -->
            <div class="group relative lg:col-start-3 lg:row-span-2">
                <Lightbox :images="images" :initialIndex="3" class="h-full cursor-pointer">
                    <img src="/storage/gal-4.jpg" alt="Gallery" class="h-full w-full object-cover" />
                </Lightbox>
                <Button
                    @click="handleExternalLink('https://google.com')"
                    class="absolute bottom-4 left-1/2 flex w-[90%] -translate-x-1/2 cursor-pointer items-center justify-between gap-2 bg-slate-200 text-slate-800 hover:bg-slate-300"
                >
                    Click to External Link <Icon name="link" color="black" />
                </Button>
            </div>

            <!-- Tile 4: gal-3 (index 2) -->
            <div class="group relative lg:col-span-2 lg:col-start-1 lg:row-span-1 lg:row-start-2">
                <Lightbox :images="images" :initialIndex="2" class="aspect-video cursor-pointer">
                    <img src="/storage/gal-3.jpg" alt="Gallery" class="h-full w-full object-cover" />
                    <Button
                        class="absolute bottom-4 left-1/2 flex w-[90%] -translate-x-1/2 items-center justify-between gap-2 bg-slate-200 text-slate-800 opacity-0 group-hover:opacity-100 hover:bg-slate-300"
                    >
                        View Gallery <Icon name="frame" color="black" />
                    </Button>
                </Lightbox>
            </div>

            <!-- Tile 5: gal-5 (index 4) -->
            <div class="relative lg:col-span-2 lg:col-start-1 lg:row-span-2 lg:row-start-3">
                <Lightbox :images="images" :initialIndex="4">
                    <img src="/storage/gal-5.jpg" alt="Gallery" class="h-full w-full object-cover" />
                </Lightbox>
                <Button
                    @click="handleExternalLink('/')"
                    class="absolute bottom-4 left-1/2 flex w-[90%] -translate-x-1/2 cursor-pointer items-center justify-between gap-2 bg-slate-200 text-slate-800 hover:bg-slate-300"
                >
                    Click to External Link <Icon name="link" color="black" />
                </Button>
            </div>

            <!-- Tile 6: gal-6 (index 5) -->
            <div class="group relative lg:col-start-3 lg:row-start-3">
                <Lightbox :images="images" :initialIndex="5">
                    <img src="/storage/gal-6.jpg" alt="Gallery" class="h-full w-full object-cover" />
                    <Button
                        class="absolute bottom-4 left-1/2 flex w-[90%] -translate-x-1/2 items-center justify-between gap-2 bg-slate-200 text-slate-800 opacity-0 group-hover:opacity-100 hover:bg-slate-300"
                    >
                        View Gallery <Icon name="frame" color="black" />
                    </Button>
                </Lightbox>
            </div>

            <!-- Tile 7: gal-7 (index 6) -->
            <div class="group relative lg:col-start-3 lg:row-start-4">
                <Lightbox :images="images" :initialIndex="6">
                    <img src="/storage/gal-7.jpg" alt="Gallery" class="h-full w-full object-cover" />
                    <Button
                        class="absolute bottom-4 left-1/2 flex w-[90%] -translate-x-1/2 items-center justify-between gap-2 bg-slate-200 text-slate-800 opacity-0 group-hover:opacity-100 hover:bg-slate-300"
                    >
                        View Gallery <Icon name="frame" color="black" />
                    </Button>
                </Lightbox>
            </div>
        </div>
    </section>
    <slot />
</template>

<style scoped>
.a-underline {
    position: relative;
    display: inline-block;
    text-decoration: none;
    color: inherit;
    z-index: 1;
    padding: 0 2px;
    transition: color 0.3s ease;

    &::after {
        content: '';
        position: absolute;
        left: 0;
        bottom: 0;
        width: 100%;
        height: 4px;
        background-color: #ffd900;
        transform-origin: bottom center;
        transform: scaleX(1);
        transition: all 0.3s ease;
        z-index: -1;
    }

    &:hover {
        color: #1a1a1a;
        &::after {
            transform: scaleY(10) scaleX(1.05);
            background-color: #ffd900;
        }
    }
}
</style>
