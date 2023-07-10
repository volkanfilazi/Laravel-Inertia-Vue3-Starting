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
        <h2 class="text-gray-500">Monthly Payment</h2>
        <div>
          <label class="label">Interest rate <span class="font-bold text-gray-700">({{ interestRate }})</span></label>
          <input v-model.number="interestRate" class="w-full h-4 bg-gray-300 rounded-lg appearance-none cursor-pointer" type="range" min="0.1" max="30" step="0.1">

          <label class="label">Duration <span class="font-bold text-gray-700">({{ duration }})</span></label>
          <input v-model.number="duration" class="w-full h-4 bg-gray-300 rounded-lg appearance-none cursor-pointer" type="range" min="3" max="35" step="1">

          <div class="text-gray-600 mt-2">
            <div class="text-gray-400">Your monthly payment</div>
            <Price :price="monthlyPayment" class="text-3xl"></Price>
          </div>

          <div class="mt-2 text-gray-500 space-y-2">
            <div class="flex justify-between">
              <div>Total paid</div>
              <Price :price="totalPaid"></Price>
            </div>
            <div class="flex justify-between">
              <div>Principal paid</div>
              <Price :price="listing.price"></Price>
            </div>
            <div class="flex justify-between">
              <div>Total interest</div>
              <Price :price="totalInterest"></Price>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import ListingPlace from '../../Components/UI/ListingPlace.vue'
import Price from '../../Components/UI/Price.vue'
import ListingAddress from '../../Components/ListingAddress.vue'
import { ref } from 'vue'
import { useMonthlyPayment } from '../../Composables/useMonthlyPayment'
const interestRate = ref(2.5)
const duration = ref(25)

const props = defineProps({
  listing: Object,
})

const { monthlyPayment, totalPaid, totalInterest } = useMonthlyPayment(props.listing.price,interestRate,duration)


</script>