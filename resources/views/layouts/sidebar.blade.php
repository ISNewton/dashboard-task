<aside
    class="max-w-62.5 ease-nav-brand z-990 fixed inset-y-0 my-4 ml-4 block w-full -translate-x-full flex-wrap items-center justify-between overflow-y-auto rounded-2xl border-0 bg-white p-0 antialiased shadow-none transition-transform duration-200 xl:left-0 xl:translate-x-0 xl:bg-transparent">
    <div class="h-19.5">
        <i class="absolute top-0 right-0 hidden p-4 opacity-50 cursor-pointer fas fa-times text-slate-400 xl:hidden"
            sidenav-close></i>
        <a class="block px-8 py-6 m-0 text-sm whitespace-nowrap text-slate-700" href="javascript:;" target="_blank">
            <img src="../assets/img/logo-ct.png"
                class="inline h-full max-w-full transition-all duration-200 ease-nav-brand max-h-8" alt="main_logo" />
            <span class="ml-1 font-semibold transition-all duration-200 ease-nav-brand">Soft UI Dashboard</span>
        </a>
    </div>

    <hr class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent" />


    <div class="items-center block w-auto max-h-screen overflow-auto h-sidenav grow basis-full">
        <ul class="flex flex-col pl-0 mb-0">




          <li class="mt-0.5 w-full">
            <a class="{{ request()->is('*users*') ? 'bg-white px-4 font-semibold text-slate-700' : '' }} nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors"
             href="{{ route('users.index') }}">
              <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center fill-current stroke-0 text-center xl:p-2.5">
                U
              </div>
              <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Users</span>
            </a>
          </li>

          <li class="mt-0.5 w-full">
            <a class="{{ request()->is('*clients*') ? 'bg-white px-4 font-semibold text-slate-700' : '' }} py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors"
             href="{{ route('clients.index') }}">
              <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center fill-current stroke-0 text-center xl:p-2.5">
                C
              </div>
              <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Clients</span>
            </a>
          </li>

          <li class="mt-0.5 w-full">
            <a class="{{ request()->is('*projects*') ? 'bg-white px-4 font-semibold text-slate-700' : '' }} py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors"
             href="{{ route('projects.index') }}">
              <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center fill-current stroke-0 text-center xl:p-2.5">
                P
              </div>
              <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Projects</span>
            </a>
          </li>

          <li class="mt-0.5 w-full">
            <a class="{{ request()->is('*tasks*') ? 'bg-white px-4 font-semibold text-slate-700' : '' }} py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors"
             href="{{ route('tasks.index') }}">
              <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center fill-current stroke-0 text-center xl:p-2.5">
                T
              </div>
              <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Tasks</span>
            </a>
          </li>
        </ul>
    </div>

</aside>
