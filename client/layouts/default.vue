<template>
    <header class="shadow-sm bg-white">
        <nav class="container mx-auto p-4 flex justify-between">
            <NuxtLink to="/" class="font-bold">Just Another Website</NuxtLink>
        </nav>
    </header>

    <div class="container mx-auto p-4">
        <slot />
    </div>

    <footer class="container mx-auto p-4">
        <p>Submitted by: Luis Suizo&nbsp;&nbsp;&nbsp;Submitted to: Mr. Calija</p>
    </footer>
</template>

<style>
    .router-link-exact-active {
        color: limegreen;
    }
</style>