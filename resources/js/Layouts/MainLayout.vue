<template>
  <div class="root">
    <Link href="/">Main Page</Link>
    <Link href="/hello">Show Page</Link>
    <Link href="/listing">Listing</Link>

    <div>The page with time {{ timer }}</div>
  </div>
  <slot></slot>

</template>

<script setup>
import { Link } from '@inertiajs/inertia-vue3'
import {ref} from 'vue'

const timer = ref(0)

setInterval(() => timer.value++,1000)

</script>

<style>
.root {
  display: flex;
  flex-direction: column;
  margin-bottom: 0px;
}
</style>