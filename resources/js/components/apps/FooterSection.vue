<script setup lang="ts">
interface Props {
    id: string;
}

const props = defineProps<Props>();
</script>

<template>
    <section :id="props.id" class="py-8">
        <div class="container mx-auto px-4 text-slate-800">
            <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
                <div class="col-span-2">
                    <h1 class="text-3xl font-bold">Footer</h1>
                </div>
                <div>
                    <h1 class="text-3xl font-bold">Footer</h1>
                </div>
            </div>
        </div>
    </section>
</template>
