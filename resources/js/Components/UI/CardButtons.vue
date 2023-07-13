<template>
  <div class="grid grid-rows-2 items-center">
    <div>
      <Link v-if="userName" method="DELETE" :href="route('listing.destroy', { listing: listing.id })" as="button">
        <Icon icon="ic:round-delete" color="gray" width="25"/>
      </Link>
    </div>
    <div>
      <Link v-if="userName" :href="route('listing.edit', { listing: listing.id })" as="button">
        <Icon icon="material-symbols:edit" color="gray" width="25" />
      </Link>
    </div>
  </div>
</template>

<script setup>
import { Link, usePage } from '@inertiajs/inertia-vue3'
import { Icon } from '@iconify/vue';
import { computed } from 'vue'

const page = usePage()

const userName = computed(() => page.props.value.user)
defineProps({
  listing: Object,
})


</script>