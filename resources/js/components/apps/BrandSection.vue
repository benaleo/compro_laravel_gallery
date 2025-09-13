<script setup lang="ts">
import Card from '../ui/card/Card.vue';
import CardContent from '../ui/card/CardContent.vue';
import logoGradient from '~/storage/gallery-logo-gradient.png';
import imageWide from '~/storage/card-wide.jpg';

interface Props {
    id: string;
}
const props = defineProps<Props>();
</script>

<template>
    <section :id="props.id" class="container mx-auto hover:translate-y-[-4px] transition-all duration-300">
        <Card class="p-4">
            <CardContent class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="flex flex-col justify-between py-12">
                    <div>
                    <img :src="logoGradient" alt="logo" class="h-10" />
                        <h1 class="text-3xl font-bold">World-class websites to design without restricting creativity or speed.</h1>
                    </div>
                    <p class="text-xl text-slate-600">
                        Combine seamlessly fitting layouts, customize every component you want in Essentials theme, lorem ipsum dolor sit amet,
                        consectetur adipiscing.
                    </p>
                </div>
                <div>
                 <img :src="imageWide" alt="logo" class="w-full rounded-md" />
                </div>
            </CardContent>
        </Card>
    </section>
</template>
