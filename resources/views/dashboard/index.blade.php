@extends('layouts.admin')

@section('content')

<div class="block w-full">

@include('components.sidenav')

<main id="main" class="block p-5 pl-80 overflow-hidden text-slate-700 dark:text-slate-200 transition-all duration-300">

@include('components.pagetitle')

<section class="flex items-center justify-between mb-5">
   <div class="block p-3 basis-1/3">
      <div class="bg-white shadow-xl flex items-center dark:bg-slate-700 p-8 rounded-xl">
         <div class="p-4 bg-violet-500 rounded-full">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-10 h-10 text-slate-100">
              <path d="M11.25 4.533A9.707 9.707 0 006 3a9.735 9.735 0 00-3.25.555.75.75 0 00-.5.707v14.25a.75.75 0 001 .707A8.237 8.237 0 016 18.75c1.995 0 3.823.707 5.25 1.886V4.533zM12.75 20.636A8.214 8.214 0 0118 18.75c.966 0 1.89.166 2.75.47a.75.75 0 001-.708V4.262a.75.75 0 00-.5-.707A9.735 9.735 0 0018 3a9.707 9.707 0 00-5.25 1.533v16.103z" />
            </svg>
         </div>
         <div class="ml-5">
            <p class="font-bold text-xs uppercase mb-2 text-slate-500 dark:text-slate-200">Total Judul Buku</p>
            <p class="text-3xl font-bold text-slate-500 dark:text-slate-200">{{ $count }}</p>
         </div>
      </div>
   </div>
   <div class="block p-3 basis-1/3">
      <div class="bg-white shadow-xl flex items-center dark:bg-slate-700 p-8 rounded-xl">
         <div class="p-4 bg-violet-500 rounded-full">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-10 h-10 text-slate-100">
              <path d="M4.5 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM14.25 8.625a3.375 3.375 0 116.75 0 3.375 3.375 0 01-6.75 0zM1.5 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM17.25 19.128l-.001.144a2.25 2.25 0 01-.233.96 10.088 10.088 0 005.06-1.01.75.75 0 00.42-.643 4.875 4.875 0 00-6.957-4.611 8.586 8.586 0 011.71 5.157v.003z" />
            </svg>
         </div>
         <div class="ml-5">
            <p class="font-bold text-xs uppercase mb-2 text-slate-500 dark:text-slate-200">Total Anggota</p>
            <p class="text-3xl font-bold text-slate-500 dark:text-slate-200">{{ $count }}</p>
         </div>
      </div>
   </div>
   <div class="block p-3 basis-1/3">
      <div class="bg-white shadow-xl flex items-center dark:bg-slate-700 p-8 rounded-xl">
         <div class="p-4 bg-violet-500 rounded-full">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 text-slate-100">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
         </div>
         <div class="ml-5">
            <p class="font-bold text-xs uppercase mb-2 text-slate-500 dark:text-slate-200">Total Denda</p>
            <p class="text-2xl font-bold text-slate-500 dark:text-slate-200">Rp. {{ $count }}</p>
         </div>
      </div>
   </div>
</section>

<div class="flex justify-between mb-5">
   <section class="basis-2/3 p-3">

<button type="button" data-modal-target="nekomodal" data-modal-toggle="nekomodal" class="text-gray-900 bg-white hover:bg-gray-100 border border-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-600 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700">Tambah Data</button>

<!-- Main modal -->
<div id="nekomodal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-lg max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="nekomodal">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                <span class="sr-only">Close modal</span>
            </button>

            <div class="px-6 py-4 border-b rounded-t dark:border-gray-600">
                <h3 class="text-base font-semibold text-gray-900 lg:text-xl dark:text-white">
                    Tambah Kategori
                </h3>
            </div>

            <form action="{{ route('category.add') }}" method="post" enctype="multipart/form-data">
               <div class="flex p-6">
                  <div class="w-32">
                     <div class="flex justify-center items-center w-full">
                        <label for="icon" class="flex flex-col justify-center items-center w-full h-32 bg-slate-50 rounded-lg border-2 border-slate-300 border-dashed cursor-pointer dark:hover:bg-slate-500 dark:bg-slate-600 hover:bg-slate-100 dark:border-slate-500 dark:hover:border-slate-400 relative">
                           <div class="flex flex-col justify-center items-center pt-5 pb-6">
                              <svg aria-hidden="true" class="mb-3 w-10 h-10 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                              </svg>
                              <center>
                                 <p class="text-sm text-slate-500 dark:text-slate-400 px-1">
                                    <strong>Upload icon kategori</strong>
                                 </p>
                              </center>
                           </div>
                           <input id="icon" type="file" class="hidden" name="icon">
                           <p class="hidden absolute text-sm text-slate-500 dark:text-slate-400 bottom-0 py-3 px-5 border-t left-0 right-0 text-center" id="namaIcon"></p>
                        </label>
                     </div>
                     @if($errors->has('icon'))
                         <div class="text-red-500">{{ $errors->first('icon') }}</div>
                     @endif
                  </div>
                  <div class="grow pl-7">
                     <label for="name">Nama Kategori</label>
                     <input name="name" id="name" type="text" class="p-3 focus:outline-none focus:ring focus:ring-red-500 rounded-lg w-full border my-3 border-slate-300 dark:bg-slate-700 dark:border-slate-600" placeholder="Nama Kategori..." required autofocus value="{{ old('name') }}">
                     @if($errors->has('name'))
                         <div class="text-red-500">{{ $errors->first('name') }}</div>
                     @endif
                  </div>
               </div>
               <div class="px-6 py-4 border-t dark:border-gray-600 flex justify-end">
                   <button class="px-4 py-2 bg-red-500 rounded text-white" type="submit">Submit</button>
               </div>
            </form>
        </div>
    </div>
</div>

      <div class="bg-white dark:bg-slate-700 shadow-xl p-3 pb-7 rounded-xl relative overflow-hidden box-border">
        <h3 class="p-4 pb-3 uppercase text-sm font-bold">Daftar User</h3>
        <p class="mb-6 text-sm px-4">Rekap pendaftaran user hari ini pada Mebelicious</p>
        
        <div class="overflow-x-auto relative px-4 mb-5">
         <table class="w-full text-sm text-left text-slate-600 dark:text-slate-200">
             <thead class="text-xs text-slate-500 uppercase bg-gray-100 dark:bg-slate-800 dark:text-slate-300">
                 <tr>
                    <th scope="col" class="py-3 px-6">#</th>
                    <th scope="col" class="py-3 px-6">Nama</th>
                    <th scope="col" class="py-3 px-6">Email</th>
                    <th scope="col" class="py-3 px-6">Username</th>
                 </tr>
             </thead>
             <tbody>

              @if($user->isEmpty())

                 <tr class="bg-white border-b dark:bg-slate-700 dark:border-slate-600">
                    <td class="py-4 px-6 text-center" colspan="4">Tidak ada user hari ini</td>
                 </tr>

              @else

                 @foreach($user as $d)

                    <tr class="bg-white border-b dark:bg-slate-700 dark:border-slate-600">
                       <td class="py-4 px-6">{{ ++$i }}</td>
                       <td class="py-4 px-6">{{ $d->name }}</th>
                       <td class="py-4 px-6">{{ $d->email }}</td>
                       <td class="py-4 px-6">{{ $d->username }}</td>
                    </tr>

                 @endforeach

              @endif

             </tbody>
         </table>
        </div>

        <div class="text-right px-4 pt-3 pb-2">
           <a href="#" class="text-violet-500 border border-white dark:border-slate-700 dark:text-violet-300 dark:hover:text-slate-200 hover:text-slate-700 py-2 rounded-lg text-sm" title="Lihat Laporan Peminjaman">
              <span class="inline-block mr-1">Lihat Laporan User</span>
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 inline-block">
                <path fill-rule="evenodd" d="M16.72 7.72a.75.75 0 011.06 0l3.75 3.75a.75.75 0 010 1.06l-3.75 3.75a.75.75 0 11-1.06-1.06l2.47-2.47H3a.75.75 0 010-1.5h16.19l-2.47-2.47a.75.75 0 010-1.06z" clip-rule="evenodd" />
              </svg>
           </a>
        </div>
      </div>
   </section>

   <section class="basis-1/3 p-3">
      <div class="bg-white dark:bg-slate-700 shadow-xl rounded-xl">
         <h3 class="px-5 py-4 uppercase text-xs font-bold">User Baru Ditambahkan</h3>

         @if($user->isEmpty())

            <div class="flex justify-center py-3 px-4 border-t dark:border-slate-600">
               <span class="text-slate-700 dark:text-slate-100 text-sm block">Tidak ada data user</span>
            </div>

         @else
         
            @foreach($user as $d)

               <div class="flex items-center py-3 px-4 border-t dark:border-slate-600">
                  <img src="{{ asset('/img/anggota/'.$d->photo) }}" alt="{{ $d->name }}" class="w-10 h-10 mt-1 object-cover rounded-full mr-3">
                     
                  <p class="grow overflow-hidden">
                     <span class="text-slate-700 dark:text-slate-100 text-sm block font-semibold">{{ $d->name }}</span>
                     <span class="text-slate-500 dark:text-slate-300 text-xs block">{{ $d->email }}</span>
                  </p>
               </div>

            @endforeach

         @endif

      </div>
   </section>
</div>

</main>

</div>

<script>
   
$(document).ready(() => {
   $(document).on('change', '#icon', function(){
      const icon = $('#icon').val().replace(/.*(\/|\\)/, '')
      $('#namaIcon').removeClass('hidden')
      $('#namaIcon').html(icon)
   })
})

</script>

@endsection