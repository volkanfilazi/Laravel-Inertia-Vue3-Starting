<template>
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 w-full gap-2 px-4">
    <Box v-for="listing in listings" :key="listing.id">
      <div>
        <Link :href="route('listing.show', { listing: listing.id })">
        <Price :price="listing.price"></Price>
        <ListingPlace :listing="listing"></ListingPlace>
        <ListingAddress :listing="listing"></ListingAddress>
        </Link>
      </div>
      <CardButtons :listing="listing"></CardButtons>
    </Box>
  </div>
</template>

<script setup>
import { Link } from '@inertiajs/inertia-vue3'
import Box from '../../Components/UI/Box.vue';
import ListingAddress from '../../Components/ListingAddress.vue'
import ListingPlace from '../../Components/UI/ListingPlace.vue';
import Price from '../../Components/UI/Price.vue';
import CardButtons from '../../Components/UI/CardButtons.vue';
defineProps({
  listings: Array,
})
</script>

