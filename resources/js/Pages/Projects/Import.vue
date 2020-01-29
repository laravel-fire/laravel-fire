<template>
  <div class="mt-10">
    <span class="text-2xl font-bold">Import Project</span>
    <div class="my-3 overflow-y-auto shadow-md rounded-lg bg-white directoryStructure">
      <article v-for="(directory, index) in directoryStructure" :key="index" @click="changeDirectoryStructure(directory.path)" class="px-6 xl:px-10 xl:pt-5 xl:pb-5 hover:bg-gray-200 cursor-pointer">
        <div class="flex items-center justify-between">
          <div class="flex">
            <div class="flex" style="align-items:center">
              <font-awesome-icon :icon="['far', 'folder']" size="lg" />
            </div>
            <div class="ml-3 md:items-center md:justify-between">
              <p class="text-base leading-tight xl:text-md">
                <span class="text-gray-900 hover:underline">{{ directory.name }}</span>
              </p>
            </div>
          </div>
        </div>
      </article>
    </div>
  </div>
</template>

<script>
  import Layout from "@/Shared/Layout";
  export default {
    layout: Layout,
    props: {
      directoryStructure: Array
    },
    methods: {
      changeDirectoryStructure(directory) {
        this.$inertia.post(this.route('project.import'), { directory: directory });
      }
    }
  }
</script>

<style scoped>
  .directoryStructure {
    max-height: calc(100vh - 12rem);
  }
</style>
