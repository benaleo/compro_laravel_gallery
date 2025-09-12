<script setup lang="ts">

interface Props {
  id: string;
}

const props = defineProps<Props>();

defineEmits<{
  (e: 'play'): void
}>()

const clientList = [
    {
        name: 'Spotify',
        logo: '/storage/logo-spotify.png'
    },
    {
        name: 'Airbnb',
        logo: '/storage/logo-airbnb.png'
    },
    {
        name: 'Nike',
        logo: '/storage/logo-nike.png'
    },
    {
        name: 'Netflix',
        logo: '/storage/logo-netflix.png'
    },
    {
        name: 'Adidas',
        logo: '/storage/logo-adidas.png'
    },
    
]
</script>

<template>
  <section :id="props.id" class="relative overflow-hidden min-h-screen">
    <div class="mx-auto h-[100vh] flex flex-col items-center justify-center p-4 text-center">
      <!-- Gradient ribbon with Play button -->
      <div class="relative mb-8 flex justify-center">
        <div
          class="h-2 w-full max-w-3xl rounded-full bg-gradient-to-r from-sky-400 via-pink-400 to-rose-400"
        ></div>

        <button
          type="button"
          class="absolute -top-6 inline-flex h-16 w-16 items-center justify-center rounded-full bg-white shadow-lg ring-1 ring-black/5 transition-transform duration-200 hover:scale-105"
          @click="$emit('play')"
          aria-label="Play"
        >
          <svg viewBox="0 0 24 24" class="h-7 w-7 fill-slate-800">
            <path d="M8 5v14l11-7z" />
          </svg>
        </button>
      </div>

      <!-- Subheading -->
      <p class="mb-3 text-sm font-semibold text-pink-500">
        Combine seamlessly fitting layouts
      </p>

      <!-- Heading -->
      <h1
        class="mb-4 text-4xl font-extrabold tracking-tight text-slate-900 sm:text-5xl md:text-6xl"
      >
        Create Beautiful Sites!
      </h1>

      <!-- Description -->
      <p class="mx-auto mb-8 max-w-2xl text-base text-slate-600 md:text-lg">
        Combine seamlessly fitting layouts, customize everything you want, switch components on the go
        using Essentials theme.
      </p>

      <!-- CTA -->
      <div class="flex items-center justify-center">
        <a
          href="/gallery"
          class="inline-flex items-center gap-2 rounded-full bg-gradient-to-r from-pink-500 to-indigo-500 px-5 py-3 font-semibold text-white shadow-lg transition-shadow hover:shadow-xl"
        >
          <!-- Display icon -->
          <svg viewBox="0 0 24 24" class="h-5 w-5 fill-white">
            <path
              d="M3 5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2H9l-4 4v-4H5a2 2 0 0 1-2-2V5Z"
            />
          </svg>
          <span>View our Gallery</span>
        </a>
      </div>

      <!-- Logos row -->
      <div
        class="mt-12 flex flex-wrap items-center justify-center gap-x-8 gap-y-5 opacity-70"
        aria-label="Trusted by"
      >
        <div v-for="client in clientList" :key="client.name">
            <img :src="client.logo" :alt="client.name" class="h-20 opacity-70 hover:opacity-100 transition-all duration-300" />
        </div>
      </div>
    </div>
  </section>
</template>