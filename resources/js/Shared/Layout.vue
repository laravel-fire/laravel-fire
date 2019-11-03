<template>
  <main>
    <Toolbar></Toolbar>
    <div class="bg-gray-200 h-screen">
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