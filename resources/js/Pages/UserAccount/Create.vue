<template>
  <form @submit.prevent="register">
    <div class="w-full md:w-2/4 lg:w-1/4 space-y-5 mx-auto">
      <div>
        <label for="name">Name</label>
        <input type="text" name="" id="name" class="input" v-model="form.name">
        <div v-if="form.errors.name" class="input-error">{{ form.errors.name }}</div>
      </div>
      <div>
        <label for="email">Email</label>
        <input type="text" name="" id="email" class="input" v-model="form.email">
        <div v-if="form.errors.email" class="input-error">{{ form.errors.email }}</div>
      </div>
      <div>
        <label for="password">Password</label>
        <input type="password" name="" id="password" class="input" v-model="form.password">
        <div v-if="form.errors.password" class="input-error">{{ form.errors.password }}</div>
      </div>
      <div>
        <label for="password_confirmation">Confirm Password</label>
        <input type="password" name="" id="password_confirmation" class="input" v-model="form.password_confirmation">
        <div v-if="form.errors.password_confirmation" class="input-error">{{ form.errors.password_confirmation }}</div>
      </div>
      <div>
        <button class="button-primary w-full" type="submit">Create Account</button>
      </div>
    </div>
  </form>
</template>

<script setup>
  import { useForm } from '@inertiajs/inertia-vue3'

  const form = useForm({
    name: null,
    email: null,
    password: null,
    password_confirmation: null
  })

  const register = () => form.post(route('user-account.store'))
</script>