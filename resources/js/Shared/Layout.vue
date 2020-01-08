<template>
  <main class="bg-gray-100 h-screen">
    <Toolbar />
    <div class="container mx-auto">
      <slot />
    </div>
  </main>
</template>
<script>
import { InertiaLink } from '@inertiajs/inertia-vue'
import Toolbar from '@/Shared/Toolbar.vue'
export default {
  components: {
    InertiaLink,
    Toolbar
  }
}
</script>
