<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import Card from '../ui/card/Card.vue';
import CardContent from '../ui/card/CardContent.vue';
import CardDescription from '../ui/card/CardDescription.vue';
import CardHeader from '../ui/card/CardHeader.vue';

interface Props {
    id: string;
}

const props = defineProps<Props>();

type FeatureItem = {
    title: string;
    badge: string;
    url: string;
    gradient: string;
    bgImage: string;
};

const featureList: FeatureItem[] = [
    {
        title: 'Premium\nFeatures',
        badge: 'Included',
        url: '/features/premium',
        gradient: 'from-rose-200 via-pink-200 to-amber-100',
        bgImage: '/storage/feature-1.jpg',
    },
    {
        title: 'Made in\nFrance',
        badge: 'Prestigious',
        url: '/features/made-in-france',
        gradient: 'from-pink-300 via-fuchsia-300 to-indigo-300',
        bgImage: '/storage/feature-2.jpg',
    },
    {
        title: 'Advanced\nOptions',
        badge: 'High Quality',
        url: '/features/advanced-options',
        gradient: 'from-indigo-300 via-purple-300 to-violet-300',
        bgImage: '/storage/feature-3.jpg',
    },
];
</script>

<template>
    <section :id="props.id" class="py-8">
        <div class="container mx-auto px-1">
            <div class="grid grid-cols-1 gap-1 md:grid-cols-3">
                <Link v-for="feature in featureList" :key="feature.title" :href="feature.url" class="group block">
                    <Card
                        :class="[
                            'group relative h-64 overflow-hidden border-0 p-0 shadow-md transition-transform duration-300 ease-out will-change-transform',
                            'bg-gradient-to-br',
                            feature.gradient,
                            'hover:scale-95',
                        ]"
                    >
                        <!-- Background image -->
                        <img
                            :src="feature.bgImage"
                            alt="feature"
                            class="absolute inset-0 h-full w-full object-cover opacity-60 transition-opacity duration-300 ease-out will-change-transform group-hover:opacity-80"
                        />

                        <!-- Content -->
                        <CardHeader class="relative z-10 h-full items-center justify-center p-6">
                            <CardContent class="flex flex-col items-center justify-center gap-3">
                                <!-- Badge -->
                                <div class="inline-flex w-fit rounded-md bg-white/90 px-3 py-1 text-xs font-semibold text-slate-800 shadow-sm">
                                    {{ feature.badge }}
                                </div>
                                <div class="text-center text-3xl font-extrabold tracking-tight text-white drop-shadow-sm">
                                    {{ feature.title }}
                                </div>
                            </CardContent>
                            <CardDescription class="mt-6 text-center text-base font-semibold text-white/90">
                                <span>Check it out</span>
                                <span aria-hidden class="ml-2 inline-block transition-transform duration-200 group-hover:translate-x-0.5">›</span>
                            </CardDescription>
                        </CardHeader>
                    </Card>
                </Link>
            </div>
        </div>
    </section>
</template>
