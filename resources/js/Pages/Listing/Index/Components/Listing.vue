<template>
  <Box>
    <div>
      <Link :href="route('listing.show', { listing: listing.id })">
      <div class="flex items-center gap-2">
        <Price class="text-2xl" :price="listing.price"></Price>
        <div class="text-xs text-gray-500">
          <Price :price="monthlyPayment"></Price> pm
        </div>
      </div>
      <ListingPlace :listing="listing"></ListingPlace>
      <ListingAddress :listing="listing"></ListingAddress>
      </Link>
    </div>
    <CardButtons :listing="listing"></CardButtons>
  </Box>
</template>

<script setup>
import { Link } from '@inertiajs/inertia-vue3'
import Box from '../../../../Components/UI/Box.vue'
import ListingAddress from '../../../../Components/ListingAddress.vue'
import ListingPlace from '../../../../Components/UI/ListingPlace.vue';
import Price from '../../../../Components/UI/Price.vue';
import CardButtons from '../../../../Components/UI/CardButtons.vue';
import { useMonthlyPayment } from '../../../../Composables/useMonthlyPayment'

const props = defineProps({
  listing: Object,
})
const { monthlyPayment } = useMonthlyPayment(props.listing.price,2.5,25)

</script>