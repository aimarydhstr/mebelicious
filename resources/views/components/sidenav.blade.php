<aside class="w-72 fixed top-0 left-0 bottom-0 shadow-2xl transition-all duration-300" id="sidebar">
   <div class="h-screen relative pt-6 bg-white pb-32 box-border overflow-hidden dark:bg-slate-700">
      <header class="flex justify-center mb-6 px-3">
         <h1 class="text-xl font-semibold whitespace-nowrap dark:text-white"><a href="{{ route('dashboard') }}">Mebelicious</a></h1>
      </header>
      
      <nav class="overflow-hidden hover:overflow-y-scroll h-full pb-3">
         <ul class="space-y-3">
            <li>
               <a href="{{ route('dashboard') }}" class="{{ Request::routeIs('dashboard.*') || Request::routeIs('dashboard') ? 'text-white bg-violet-500 rounded-lg dark:text-white hover:bg-violet-700 active:bg-violet-800' : 'text-slate-900 rounded-lg dark:text-slate-200 hover:bg-gray-200 active:bg-gray-300 dark:hover:bg-slate-600 dark:active:bg-slate-500' }} flex items-center p-3 mx-2">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                    <path fill-rule="evenodd" d="M3 6a3 3 0 013-3h2.25a3 3 0 013 3v2.25a3 3 0 01-3 3H6a3 3 0 01-3-3V6zm9.75 0a3 3 0 013-3H18a3 3 0 013 3v2.25a3 3 0 01-3 3h-2.25a3 3 0 01-3-3V6zM3 15.75a3 3 0 013-3h2.25a3 3 0 013 3V18a3 3 0 01-3 3H6a3 3 0 01-3-3v-2.25zm9.75 0a3 3 0 013-3H18a3 3 0 013 3V18a3 3 0 01-3 3h-2.25a3 3 0 01-3-3v-2.25z" clip-rule="evenodd" />
                  </svg>
                  <span class="ml-3">Dashboard</span>
               </a>
            </li>

            <li>
               <p class="pt-5 pb-1 px-5 mt-3 border-t dark:border-slate-600 uppercase text-slate-400 text-xs font-semibold">Manajemen Laporan</p>
            </li>

            <li>
               <a href="{{ route('dashboard') }}" class="{{ Request::routeIs('dashboard.*') || Request::routeIs('dashboard') ? 'text-white bg-violet-500 rounded-lg dark:text-white hover:bg-violet-700 active:bg-violet-800' : 'text-slate-900 rounded-lg dark:text-slate-200 hover:bg-gray-200 active:bg-gray-300 dark:hover:bg-slate-600 dark:active:bg-slate-500' }} flex items-center p-3 mx-2">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                    <path fill-rule="evenodd" d="M3 6a3 3 0 013-3h2.25a3 3 0 013 3v2.25a3 3 0 01-3 3H6a3 3 0 01-3-3V6zm9.75 0a3 3 0 013-3H18a3 3 0 013 3v2.25a3 3 0 01-3 3h-2.25a3 3 0 01-3-3V6zM3 15.75a3 3 0 013-3h2.25a3 3 0 013 3V18a3 3 0 01-3 3H6a3 3 0 01-3-3v-2.25zm9.75 0a3 3 0 013-3H18a3 3 0 013 3V18a3 3 0 01-3 3h-2.25a3 3 0 01-3-3v-2.25z" clip-rule="evenodd" />
                  </svg>
                  <span class="ml-3">Dashboard</span>
               </a>
            </li>

            <li>
               <p class="pb-1 px-5 mt-3 border-t dark:border-slate-600 uppercase text-slate-400 text-xs font-semibold"></p>
            </li>
            <li>
               <form id="logout-form" action="{{ route('logout') }}" method="POST">
                      @csrf
                  <button type="submit" class="text-slate-900 rounded-lg dark:text-slate-200 hover:bg-gray-200 active:bg-gray-300 dark:hover:bg-slate-600 dark:active:bg-slate-500 flex items-center p-3 mx-2 w-64">
                     <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                       <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                     </svg>
                     <span class="flex-1 ml-3 grow whitespace-nowrap text-left">Logout</span>
                  </button>
               </form>
            </li>
         </ul>
      </nav>                        

      <div class="flex items-center relative py-4 px-5 bg-slate-600 absolute bottom-0 w-full">
         <img src="{{ asset('/img/user/'.$auth->photo) }}" alt="{{ $auth->name }}" class="w-10 h-10 mt-1 object-cover rounded-full mr-3">
         <span class="flex h-3 w-3 absolute left-12 bottom-5">
            <span class="animate-ping absolute flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
            <span class="relative flex rounded-full h-3 w-3 bg-emerald-500"></span>
         </span>
         <p class="grow truncate overflow-hidden">
            <span class="text-slate-100 text-sm block font-semibold">{{ $auth->name }}</span>
            <span class="text-slate-300 text-xs block">{{ $auth->role->name }} Mebelicious</span>
         </p>
         <button id="toggle" title="Aktifkan Dark Mode" class="text-white bg-slate-200 bg-slate-500 hover:bg-slate-800 active:bg-slate-900 rounded-full text-sm p-2 focus:outline-none">
            <svg id="dark" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
               <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
            </svg>
            <svg id="light" class="w-5 h-5 hidden" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
               <path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path>
            </svg>
         </button>
      </div>

   </div>
</aside>

<script type="module">
$(document).ready(() => {
   $(document).on('click', '#navIcon', function(e){
      e.preventDefault()
      $('#sidebar').hide(300);
      $('#main').removeClass('pl-80')
      $(this).attr('id', 'navIconClose')
   })
   $(document).on('click', '#navIconClose', function(e){
      e.preventDefault()
      $('#sidebar').show(300);
      $('#main').addClass('pl-80')
      $(this).attr('id', 'navIcon')
   })
})
</script>
