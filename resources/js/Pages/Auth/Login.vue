<template>
  <form @submit.prevent="login">
    <div class="w-full md:w-2/4 lg:w-1/4 space-y-5 mx-auto">
      <div>
        <label for="email">E-mail</label>
        <input type="text" name="" id="email" class="input" v-model="form.email">
        <div v-if="form.errors.email" class="input-error">{{ form.errors.email }}</div>
      </div>
      <div>
        <label for="password">Password</label>
        <input type="password" name="" id="password" class="input" v-model="form.password">
        <div v-if="form.errors.password" class="input-error">{{ form.errors.password }}</div>
      </div>
      <div>
        <button class="button-primary w-full" type="submit">Login</button>
        <div class="mt-2 text-center">
          <Link class="text-sm text-gray-500" :href="route('user-account.create')">Need an account? Click here</Link>
        </div>
      </div>
    </div>
  </form>
</template>

<script setup>
  import { useForm, Link } from '@inertiajs/inertia-vue3'

  const form = useForm({
    email: null,
    password: null
  })

  const login = () => form.post(route('login.store'))
</script>