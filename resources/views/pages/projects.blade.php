<x-layouts.app>
  <div class="w-full xl:w-4/6">
      <div class="px-6 py-8 border-b border-gray-200">
        <span class="text-xl font-medium">Projects</span>
      </div>
      <div class="overflow-y-auto border-b border-gray-200">
        @foreach($projects as $project)
          <article class="mt-3 px-6 pt-4 pb-4 xl:px-6 xl:pt-5 xl:pb-5 bg-white">
            <div class="flex justify-between">
              <div class="flex items-center">
                <div class="w-3 h-3 rounded-full bg-green-400 mr-3"></div>
                <div class="md:items-center md:justify-between">
                  <p class="text-base font-semibold leading-tight xl:text-lg">
                    <span class="text-gray-900 hover:underline">{{ $project->name }}</span>
                  </p>
                </div>
              </div>
              <div class="flex text-right">
                <div class="">
                  <livewire:projects.open />
                </div>
              </div>
            </div>
            <div class="flex justify-between mt-3">
              <div class="flex items-center">
                <svg viewBox="0 0 16 16" fill="currentColor" class="mr-3 -mt-1 w-5 h-5 text-gray-500 dark:text-white transition duration-150"><path fill-rule="evenodd" d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z"></path></svg>
                <span class="text-sm text-gray-500 font-medium">
                  laravel-fire/laravel-fire
                </span>
              </div>
              <div class="flex items-center">
                <span class="text-sm font-medium text-gray-500">
                  Last update 3h ago
                  {{-- {{ $project->path }} --}}
                </span>
              </div>
            </div>
          </article>
        @endforeach
      </div>
  </div>
  <div class="w-full xl:w-2/6 bg-gray-100">
    <div class="px-5 mt-10">
      <span class="text-sm font-semibold text-gray-800">Activity Feed</span>
    </div>
  </div>
</x-layouts.app>