<div class="h-screen flex overflow-hidden bg-white">
    <div class="lg:hidden" id="sidebar" style="opacity: 0">
      <div class="fixed inset-0 flex z-40">
        <div class="fixed inset-0" aria-hidden="true">
          <div class="absolute inset-0 bg-gray-600 opacity-75"></div>
        </div>
        <div class="relative flex-1 flex flex-col max-w-xs w-full pt-5 pb-4 bg-white">
          <div class="absolute top-0 right-0 -mr-12 pt-2">
            <button class="ml-1 flex items-center justify-center h-10 w-10 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" id="sidebar-close">
              <span class="sr-only">Close sidebar</span>
              <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>
          </div>
          <div class="mt-5 flex-1 h-0 overflow-y-auto">
            <nav class="px-2">
              <div class="space-y-1">
                <a href="{{route('home')}}" class="bg-gray-100 text-gray-900 group flex items-center px-2 py-2 text-base leading-5 font-medium rounded-md" aria-current="page">
                  <svg class="text-gray-500 mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                  </svg>
                  Home
                </a>
              </div>
              <div class="mt-8">
                <h3 class="px-3 text-xs font-semibold text-gray-500 uppercase tracking-wider" id="teams-headline">
                  Teams
                </h3>
                <div class="mt-1 space-y-1" role="group" aria-labelledby="teams-headline">
                  <span class="group flex items-center px-3 py-2 text-sm font-medium text-gray-700 rounded-md">
                    <span class="w-2.5 h-2.5 mr-4 bg-indigo-500 rounded-full" aria-hidden="true"></span>
                    <span class="truncate">
                      Busje
                    </span>
                  </span>
    
                  <span class="group flex items-center px-3 py-2 text-sm font-medium text-gray-700 rounded-md">
                    <span class="w-2.5 h-2.5 mr-4 bg-green-500 rounded-full" aria-hidden="true"></span>
                    <span class="truncate">
                      SUV
                    </span>
                  </span>
    
                  <span class="group flex items-center px-3 py-2 text-sm font-medium text-gray-700 rounded-md">
                    <span class="w-2.5 h-2.5 mr-4 bg-yellow-500 rounded-full" aria-hidden="true"></span>
                    <span class="truncate">
                      Personenauto
                    </span>
                  </span>
  
                  <span class="group flex items-center px-3 py-2 text-sm font-medium text-gray-700 rounded-md">
                    <span class="w-2.5 h-2.5 mr-4 bg-red-500 rounded-full" aria-hidden="true"></span>
                    <span class="truncate">
                      Cabrio
                    </span>
                  </span>
                </div>
              </div>
            </nav>
          </div>
        </div>
        <div class="flex-shrink-0 w-14" aria-hidden="true"></div>
      </div>
    </div>
  
    <div class="hidden lg:flex lg:flex-shrink-0">
      <div class="flex flex-col w-64 border-r border-gray-200 pt-5 pb-4 bg-gray-100">
        <div class="h-0 flex-1 flex flex-col overflow-y-auto">
          <div class="px-3 mt-6 relative inline-block text-left">
            <div>
              <button type="button" class="group w-full bg-gray-100 rounded-md px-3.5 py-2 text-sm font-medium text-gray-700 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-purple-500" id="options-menu" aria-haspopup="true" aria-expanded="true">
                <span class="flex w-full justify-between items-center">
                  <span class="flex min-w-0 items-center justify-between space-x-3">
                    <span class="flex-1 min-w-0">
                      <span class="text-gray-900 text-sm font-medium truncate">{{Auth::user()->name}}</span>
                    </span>
                  </span>
                </span>
              </button>
            </div>
          </div>
          <nav class="px-3 mt-6">
            <div class="space-y-1">
              <a href="{{route('home')}}" class="bg-gray-200 text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                <svg class="text-gray-500 mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
                Home
              </a>
            </div>
            <div class="mt-8">
              <h3 class="px-3 text-xs font-semibold text-gray-500 uppercase tracking-wider" id="teams-headline">
                Soorten Auto's
              </h3>
              <div class="mt-1 space-y-1" role="group" aria-labelledby="teams-headline">
                <span class="group flex items-center px-3 py-2 text-sm font-medium text-gray-700 rounded-md">
                  <span class="w-2.5 h-2.5 mr-4 bg-indigo-500 rounded-full" aria-hidden="true"></span>
                  <span class="truncate">
                    Busje
                  </span>
                </span>
  
                <span class="group flex items-center px-3 py-2 text-sm font-medium text-gray-700 rounded-md">
                  <span class="w-2.5 h-2.5 mr-4 bg-green-500 rounded-full" aria-hidden="true"></span>
                  <span class="truncate">
                    SUV
                  </span>
                </span>
  
                <span class="group flex items-center px-3 py-2 text-sm font-medium text-gray-700 rounded-md">
                  <span class="w-2.5 h-2.5 mr-4 bg-yellow-500 rounded-full" aria-hidden="true"></span>
                  <span class="truncate">
                    Personenauto
                  </span>
                </span>

                <span class="group flex items-center px-3 py-2 text-sm font-medium text-gray-700 rounded-md">
                  <span class="w-2.5 h-2.5 mr-4 bg-red-500 rounded-full" aria-hidden="true"></span>
                  <span class="truncate">
                    Cabrio
                  </span>
                </span>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>

    <div class="flex flex-col w-0 flex-1 overflow-hidden">
      <div class="relative z-10 flex-shrink-0 flex h-16 bg-white border-b border-gray-200 lg:hidden">
        <button class="px-4 border-r border-gray-200 text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-purple-500 lg:hidden" id="open-sidebar">
          <span class="sr-only">Open sidebar</span>
          <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
          </svg>
        </button>
        <div class="flex-1 flex justify-between px-4 sm:px-6 lg:px-8">
          <div class="flex items-center">
            <div class="ml-3 relative">
              <div>
                <button class="max-w-xs bg-white flex items-center text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500" id="user-menu" aria-haspopup="true">
                    <span class="text-gray-900 text-sm font-medium truncate">{{Auth::user()->name}}</span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>