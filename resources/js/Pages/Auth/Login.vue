<template>
  <form @submit.prevent="login">
    <div class="w-full md:w-2/4 lg:w-1/4 space-y-5 mx-auto">
      <div>
        <label for="email">E-mail (username)</label>
        <input type="text" name="" id="email" class="input" v-model="form.email">
        <div class="input-error">Potential errors</div>
      </div>
      <div>
        <label for="password">Password</label>
        <input type="password" name="" id="password" class="input" v-model="form.password">
        <div class="input-error">Potential errors</div>
      </div>
      <div>
        <button class="button-primary w-full" type="submit">Login</button>
      </div>
    </div>
  </form>
</template>

<script setup>
  import { useForm } from '@inertiajs/inertia-vue3'

  const form = useForm({
    email: null,
    password: null
  })

  const login = () => form.post(route('login.store'))
</script>