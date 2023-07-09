<template>
  <div>
    <span class="font-bold">{{ listing.beds }}</span> bds |
    <span class="font-bold">{{ listing.baths }}</span> bs |
    <span class="font-bold">{{ listing.area }}</span> m2
  </div>
</template>

<script setup>
defineProps({
  listing: Object,
})
</script>
