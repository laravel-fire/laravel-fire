<template>
  <div class="mt-10">
    <span class="text-2xl font-bold">Pinned Projects</span>
    <div class="pt-3 pb-10 overflow-y-auto">
      <article v-for="project in projects" :key="project.id" class="mt-3 px-6 pt-4 pb-4 xl:px-10 xl:pt-5 xl:pb-5 bg-white hover:bg-gray-200 rounded-lg">
          <div class="flex items-center justify-between">
            <div class="flex">
              <div>
                <img src="https://images.unsplash.com/photo-1463453091185-61582044d556?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=3.5&amp;w=144&amp;h=144&amp;q=80" alt="" class="h-12 w-12 rounded-full object-cover">
              </div>
              <div class="ml-3 md:items-center md:justify-between">
                <p class="text-base font-semibold leading-tight xl:text-lg">
                  <span class="text-gray-900 hover:underline">{{ project.name }}</span>
                  <!-- <span class="text-gray-600">wrote</span> -->
                </p>
                <div class="flex items-center">
                    <span class="text-sm text-gray-600">
                      {{ project.name }} created {{ project.updated_at }}
                    </span>
                </div>
              </div>
            </div>
            <div class="flex justify-end">
                <span class="text-gray-600">
                  <font-awesome-icon icon="comment"></font-awesome-icon>
                </span>
            </div>
          </div>
      </article>
    </div>
    <span class="text-xl font-medium">Other Projects</span>
    <div class="py-3 overflow-y-auto">
      <article v-for="project in projects" :key="project.id" class="mt-3 px-6 pt-4 pb-4 xl:px-10 xl:pt-5 xl:pb-5 bg-white hover:bg-gray-200 rounded-lg">
        <div class="flex items-center justify-between">
          <div class="flex">
            <div>
              <img src="https://images.unsplash.com/photo-1463453091185-61582044d556?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=3.5&amp;w=144&amp;h=144&amp;q=80" alt="" class="h-12 w-12 rounded-full object-cover">
            </div>
            <div class="ml-3 md:items-center md:justify-between">
              <p class="text-base font-semibold leading-tight xl:text-lg">
                <span class="text-gray-900 hover:underline">{{ project.name }}</span>
                <!-- <span class="text-gray-600">wrote</span> -->
              </p>
              <div class="flex items-center">
                    <span class="text-sm text-gray-600">
                      {{ project.name }} created {{ project.updated_at }}
                    </span>
              </div>
            </div>
          </div>
          <div class="flex justify-end">
                <span class="text-gray-600">
                  <font-awesome-icon icon="comment"></font-awesome-icon>
                </span>
          </div>
        </div>
      </article>
    </div>
  </div>
</template>
<script>
import Layout from '@/Shared/Layout';
export default {
    layout: Layout,
    props: {
      projects: Array
    },
}
</script>
