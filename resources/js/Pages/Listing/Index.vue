<template>
  <div class="px-4">
    <Filters :filters="filters" />
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 w-full gap-2">
      <Listing v-for="listing in listings.data" :key="listing.id" :listing="listing" />
    </div>

    <div v-if="listings.data.length" class="w-full flex justify-center mt-8">
      <Pagination :links="listings.links"></Pagination>
    </div>
  </div>
</template>

<script setup>
import Pagination from '../../Components/UI/Pagination.vue';
import Listing from '../../Pages/Listing/Index/Components/Listing.vue';
import Filters from './Index/Components/Filters.vue';
defineProps({
  listings: Object,
  filters: Object
})
</script>

