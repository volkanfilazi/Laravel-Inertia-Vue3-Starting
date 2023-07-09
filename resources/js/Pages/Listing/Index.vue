<template>
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 w-full gap-2 px-4">
    <Box v-for="listing in listings" :key="listing.id">
      <div>
        <Link :href="route('listing.show', {listing: listing.id})">
        <ListingAddress :listing="listing"></ListingAddress>
        </Link>
      </div>
      <div>
        <Link :href="route('listing.edit', {listing: listing.id})" as="button">Edit</Link>
      </div>
      <div>
        <Link method="DELETE" :href="route('listing.destroy', {listing: listing.id})" as="button">Delete</Link>
      </div>
  </Box>
  </div>
</template>

<script setup>
import { Link } from '@inertiajs/inertia-vue3'
import Box from '../../Components/UI/Box.vue';
import ListingAddress from '../../Components/ListingAddress.vue'
defineProps({
  listings: Array,
})

</script>

