<template>
  <header class="border-b-[1px] border-black">
    <div class="mx-auto">
      <nav class="p-4 flex items-center justify-between">
        <Link class="text-blue-700 font-bold" :href="route('listing.index')">Listings</Link>
        <Link class="text-blue-700 font-bold" :href="route('listing.index')">Volkan Estate</Link>
        <div v-if="userName" class="flex items-center gap-2">
          <div>{{ userName.name }}</div>
          <div class="button-primary">
            <Link :href="route('listing.create')">+ New Listing</Link>
          </div>
          <div>
            <Link :href="route('logout')" method="delete" as="button">Logout</Link>
          </div>
        </div>
        <div v-else>
          <Link :href="route('login')">Sign-In</Link>
        </div>
      </nav>
    </div>
  </header>
  <main class="p-4">
    <div class="px-4">
      <h2 class="bg-blue-300 border-[1px] border-blue-500 mb-2 rounded-md text-black font-semibold p-1"
        v-if="flashSuccess">{{ flashSuccess }}</h2>
    </div>
    <slot>Default</slot>
  </main>
</template>

<script setup>
import { Link, usePage } from '@inertiajs/inertia-vue3'
import { computed } from 'vue'

const page = usePage()
const flashSuccess = computed(() => page.props.value.flash.success)
const userName = computed(() => page.props.value.user)

</script>
