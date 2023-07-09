<template>
  <div class="grid grid-rows-2 items-center">
    <div>
      <Link method="DELETE" :href="route('listing.destroy', { listing: listing.id })" as="button">
        <Icon icon="ic:round-delete" color="gray" width="25"/>
      </Link>
    </div>
    <div>
      <Link :href="route('listing.edit', { listing: listing.id })" as="button">
        <Icon icon="material-symbols:edit" color="gray" width="25" />
      </Link>
    </div>
  </div>
</template>

<script setup>
import { Link } from '@inertiajs/inertia-vue3'
import { Icon } from '@iconify/vue';

defineProps({
  listing: Object,
})
</script>