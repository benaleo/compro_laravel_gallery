<script setup lang="ts">
import Button from '../ui/button/Button.vue';

interface Props {
    id: string;
}
const props = defineProps<Props>();

const countList = [
    { title: 'Team Members', count: 1000 },
    { title: 'Nationalities', count: 30 },
    { title: 'Spoken Languages', count: 15 },
]

</script>

<template>
    <section :id="props.id" class="container mx-auto my-12 py-12 grid grid-cols-2 md:grid-cols-3 gap-y-8">
        <div class="text-center" v-for="count in countList" :key="count.title">
            <h1 class="text-gradient text-6xl font-extrabold">+{{ count.count }}</h1>
            <p class="text-xl font-bold text-slate-600">{{ count.title }}</p>
        </div>
        <Button variant="outline" class="rounded-full col-start-2 row-start-2">Made with Love in Indonesia</Button>
    </section>
</template>
