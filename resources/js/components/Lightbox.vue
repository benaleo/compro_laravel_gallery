<script setup lang="ts">
 import { ref, onMounted, onBeforeUnmount } from 'vue';
 import { Card, CardContent } from '@/components/ui/card';
 import { Carousel, CarouselContent, CarouselItem, CarouselNext, CarouselPrevious } from '@/components/ui/carousel';

 interface Props {
     images: string[];
     initialIndex?: number;
     class?: string;
 }

 const props = defineProps<Props>();

 const open = ref(false);
 const currentIndex = ref(props.initialIndex ?? 0);

 function openModal() {
     currentIndex.value = props.initialIndex ?? 0;
     open.value = true;
 }
 function closeModal() {
     open.value = false;
 }

 function onKeydown(e: KeyboardEvent) {
     if (!open.value) return;
     if (e.key === 'Escape') closeModal();
 }

 onMounted(() => {
     window.addEventListener('keydown', onKeydown);
 });
 onBeforeUnmount(() => {
     window.removeEventListener('keydown', onKeydown);
 });
</script>

<template>
    <!-- Trigger -->
    <div :class="props.class" @click="openModal">
        <slot />
    </div>

    <!-- Modal -->
    <teleport to="body">
        <div v-if="open" class="fixed inset-0 z-50 flex items-center justify-center">
            <!-- Backdrop -->
            <div class="absolute inset-0 bg-black/70" @click="closeModal" />

            <div class="relative z-10 aspect-square w-full lg:w-[50vw] mx-auto max-w-5xl px-4">
                <Carousel class="relative w-full" :opts="{ startIndex: currentIndex }">
                    <CarouselContent>
                        <CarouselItem v-for="(img, idx) in props.images" :key="idx">
                            <div class="p-2">
                                <Card>
                                    <CardContent class="flex aspect-video items-center justify-center p-0">
                                        <img :src="img" alt="Gallery" class="h-full w-full object-contain bg-black" />
                                    </CardContent>
                                </Card>
                            </div>
                        </CarouselItem>
                    </CarouselContent>
                    <CarouselPrevious />
                    <CarouselNext />
                </Carousel>

                <!-- Close Button -->
                <button type="button" @click="closeModal" class="absolute -right-2 -top-2 rounded-full bg-white/90 p-2 shadow hover:bg-white">
                    ✕
                </button>
            </div>
        </div>
    </teleport>
</template>
