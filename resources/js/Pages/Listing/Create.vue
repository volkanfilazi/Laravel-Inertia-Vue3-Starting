<template>
  <form @submit.prevent="create">
    <div class="space-y-5 px-4">

      <div class="grid  grid-cols-3 gap-5">
        <div>
          <div class="flex flex-col">
            <label class="label">Beds</label>
            <input class="input" v-model.number="form.beds" type="number" />
          </div>
          <div v-if="form.errors.beds" class="input-error">{{ form.errors.beds }}</div>
        </div>

        <div>
          <div class="flex flex-col">
            <label class="label">Baths</label>
            <input class="input" v-model.number="form.baths" type="number" />
          </div>
          <div v-if="form.errors.baths" class="input-error">{{ form.errors.baths }}</div>
        </div>

        <div>
          <div class="flex flex-col">
            <label class="label">Area</label>
            <input class="input" v-model.number="form.area" type="number" />
          </div>
          <div v-if="form.errors.area" class="input-error">{{ form.errors.area }}</div>
        </div>
      </div>

      <div class="grid grid-cols-6 gap-5">
        <div class="col-span-4">
          <div class="flex flex-col">
            <label class="label">City</label>
            <input class="input" v-model="form.city" type="text" />
          </div>
          <div v-if="form.errors.city" class="input-error">{{ form.errors.city }}</div>
        </div>

        <div class="col-span-2">
          <div class="flex flex-col">
            <label class="label">Post Code</label>
            <input class="input" v-model="form.code" type="text" />
          </div>
          <div v-if="form.errors.code" class="input-error">{{ form.errors.code }}</div>
        </div>
      </div>

      <div class="grid grid-cols-6 gap-5">
        <div class="col-span-4">
          <div class="flex flex-col">
            <label class="label">Street</label>
            <input class="input" v-model="form.street" type="text" />
          </div>
          <div v-if="form.errors.street" class="input-error">{{ form.errors.street }}</div>
        </div>

        <div class="col-span-2">
          <div class="flex flex-col">
            <label class="label">Post Code</label>
            <input class="input" v-model="form.code" type="text" />
          </div>
          <div v-if="form.errors.code" class="input-error">{{ form.errors.code }}</div>
        </div>
      </div>

      <div>
        <div class="flex flex-col">
          <label class="label">Price</label>
          <input class="input" v-model.number="form.price" type="number" />
        </div>
        <div v-if="form.errors.price" class="input-error">{{ form.errors.price }}</div>
      </div>

      <div class="flex items-center justify-center">
        <button class="button-primary" type="submit">Create</button>
      </div>
    </div>
  </form>
</template>

<script setup>
import { useForm } from '@inertiajs/inertia-vue3'

const form = useForm({
  beds: 0,
  baths: 0,
  area: 0,
  city: null,
  code: null,
  street: null,
  street_nr: null,
  price: 0
})

const create = () => form.post(route('listing.store'))

</script>