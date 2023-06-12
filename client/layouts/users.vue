<template>
  <header class="shadow-sm bg-white text-[35px]">
    <nav class="container mx-auto p-4">
        <NuxtLink to="#" class="font-bold">Just Another User</NuxtLink>
    </nav>
  </header>

  <div class="container mx-auto p-4">
    <slot />
  </div>

  <footer class="container mx-auto p-4 flex justify-between border-t-2 font-bold">
    <ul class="flex gap-2">
      <li><NuxtLink to="/">Home</NuxtLink></li>
      </ul>
  </footer>
</template>

<style>
  .router-link-exact-active {
      color: green;
  }
</style>