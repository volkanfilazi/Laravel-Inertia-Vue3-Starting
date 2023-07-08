<template>
  <div>
    <div class="navigation">
      <Link href="/listing">Listing</Link>
      <Link href="/listing/create">New Listing</Link>
    </div>
    <h2 v-if="flashSuccess">{{ flashSuccess }}</h2>
  </div>
  <slot></slot>
</template>

<script setup>
import { Link, usePage } from '@inertiajs/inertia-vue3'
import { computed } from 'vue'

const page = usePage()
const flashSuccess = computed(() => page.props.value.flash.success)

</script>

<style>
.navigation {
  display: flex;
  flex-direction: flex;
  gap: 2px;
  margin-bottom: 0px;
}
</style>