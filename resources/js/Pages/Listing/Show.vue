<template>
  <div class="flex flex-col-reverse md:flex-row w-full px-4 gap-2">
    <div class="w-full md:w-3/5 flex items-center min-h-[100px] justify-center bg-gray-200">
      No images
    </div>
    <div class="md:w-2/5 flex flex-col gap-1">
      <div class="w-full bg-gray-200 p-4 space-y-2">
        <h2 class="text-gray-500">Basic Info</h2>
        <Price :price="listing.price"></Price>
        <ListingPlace :listing="listing"></ListingPlace>
        <ListingAddress :listing="listing"></ListingAddress>
      </div>
      <div class="bg-gray-200 p-4">
        <h2 class="text-gray-500">Offer</h2>
        Make an offer
      </div>
    </div>
  </div>
</template>

<script setup>
import ListingPlace from '../../Components/UI/ListingPlace.vue'
import Price from '../../Components/UI/Price.vue'
import ListingAddress from '../../Components/ListingAddress.vue'

defineProps({
  listing: Object,
})
</script>