<template>
  <div class="container" v-for="listing in listings" :key="listing.id">
    <div>
      <Link :href="`/listing/${listing.id}`">
      <ListingAddress :listing="listing"></ListingAddress>
      </Link>
    </div>
    <div>
      <Link :href="`/listing/${listing.id}/edit`" as="button">Edit</Link>
    </div>
    <div>
      <Link method="DELETE" :href="`/listing/${listing.id}`" as="button">Delete</Link>
    </div>
  </div>
</template>

<script setup>
import { Link } from '@inertiajs/inertia-vue3'
import ListingAddress from '../../Components/ListingAddress.vue'
defineProps({
  listings: Array,
})

const deleteItem = () => (`/listing/{${listing.id}}`);

</script>

<style scoped>
.container {
  display: flex;
  flex-direction: flex;
  gap: 5px;
}
</style>