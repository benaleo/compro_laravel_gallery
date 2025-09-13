<script setup lang="ts">
interface Props {
    id: string;
}

const props = defineProps<Props>();

const menuList = [
    {
        group: 'Customer',
        items: [
            { label: 'Help Center', href: '#', class: "normal" },
            { label: 'Pricing', href: '#', class: "normal" },
            { label: 'Contact Us', href: '#', class: "normal" },
        ],
    },
    {
        group: 'Product',
        items: [
            { label: 'Blog', href: '#', class: "normal" },
            { label: 'Elements', href: '#', class: "normal" },
            { label: 'Products', href: '#', class: "normal" },
        ],
    },
    {
        group: 'Company',
        items: [
            { label: 'About Us', href: '#', class: "normal" },
            { label: 'Careers', href: '#', class: "normal" },
            { label: "We're hiring", href: '#', class: "text-gradient" },
        ],
    }
];

</script>

<template>
    <section :id="props.id" class="pt-16 pb-8">
        <div class="container mx-auto px-4 text-slate-800">
            <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
                <div class="col-span-2">
                <img src="/storage/gallery-logo-gradient.png" alt="Footer" class="w-[100px] object-cover" />
                    <h1 class="text-lg font-medium">Follow us in Social Network</h1>
                </div>
                <div>
                    <ul class="space-y-2 flex flex-col md:flex-row gap-8">
                        <li v-for="list in menuList" :key="list.group">
                            <h1 class="text-lg font-medium mb-2">{{ list.group }}</h1>
                            <ul class="space-y-2">
                                <li v-for="item in list.items" :key="item.label">
                                    <a :href="item.href" :class="[item.class === 'text-gradient' ? 'text-gradient' : 'text-slate-600 hover:text-slate-800']">{{ item.label }}</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</template>
