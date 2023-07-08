<template>
  <div class="root">
    <Link href="/">Main Page</Link>
    <Link href="/hello">Show Page</Link>
    <Link href="/listing">Listing</Link>
  
    <h2 v-if="flashSuccess">{{ flashSuccess }}</h2>
  </div>
  <slot></slot>

</template>

<script setup>
import { Link, usePage } from '@inertiajs/inertia-vue3'
import {computed} from 'vue'

const page = usePage()
const flashSuccess = computed(() => page.props.value.flash.success)

</script>

<style>
.root {
  display: flex;
  flex-direction: column;
  margin-bottom: 0px;
}
</style>