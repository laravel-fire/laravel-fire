<x-layouts.app>
      {{-- <div class="mt-10">
    <!-- Pinned projects -->
    <span class="text-2xl font-bold">Pinned Projects</span>
    <div class="pt-3 pb-10 overflow-y-auto">
      <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white"  v-for="project in projects" :key="project.id">
        <div class="px-6 py-4">
          <div class="font-bold text-xl mb-2">Project name</div>
          <p class="text-gray-700 text-base">
            Project path
          </p>
        </div>
        <div class="px-6 py-4 justify-between flex">
          <button class="bg-red-100 rounded px-3 py-1 text-sm font-semibold text-red-700 mr-2">
            Open in editor
          </button>
          <div>
            <button class="bg-gray-200 rounded px-3 py-1 text-sm font-semibold text-gray-700 mr-2">
              <font-awesome-icon icon="pencil-alt"></font-awesome-icon>
            </button>
            <button class="bg-gray-200 rounded px-3 py-1 text-sm font-semibold text-gray-700 mr-2">
              <font-awesome-icon icon="times"></font-awesome-icon>
            </button>
          </div>

        </div>
      </div>
    </div>
    <!-- All projects -->
    <span class="text-xl font-medium">Other Projects</span>
    <div class="my-3 overflow-y-auto shadow-md  rounded-lg">
      <article v-for="project in projects" :key="project.id" class="mt-3 px-6 pt-4 pb-4 xl:px-10 xl:pt-5 xl:pb-5 bg-white border-b border-gray-400">
        <div class="flex items-center justify-between">
          <div class="flex">
            <div class="flex px-3 bg-gray-200 rounded-full" style="align-items:center">
              <font-awesome-icon icon="book" size="lg" />
            </div>
            <div class="ml-3 md:items-center md:justify-between">
              <p class="text-base font-semibold leading-tight xl:text-lg">
                <span class="text-gray-900 hover:underline">Project name</span>
              </p>
              <div class="flex items-center">
                    <span class="text-sm text-gray-600">
                      Project path
                    </span>
              </div>
            </div>
          </div>
          <div class="flex justify-end">
            <button class="bg-red-100 rounded px-3 py-1 text-sm font-semibold text-red-700 mr-2">
              Open in editor
            </button>
            <button class="bg-gray-200 rounded px-3 py-1 text-sm font-semibold text-gray-700 mr-2">
              <font-awesome-icon icon="pencil-alt"></font-awesome-icon>
            </button>
            <button class="bg-gray-200 rounded px-3 py-1 text-sm font-semibold text-gray-700 mr-2">
              <font-awesome-icon icon="times"></font-awesome-icon>
            </button>
          </div>
        </div>
      </article>
    </div>
  </div> --}}
</x-layouts.app>