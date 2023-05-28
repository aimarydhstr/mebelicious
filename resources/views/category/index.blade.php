@extends('layouts.admin')

@section('content')

<div class="block w-full">

@include('components.sidenav')

<main id="main" class="block p-5 pl-80 overflow-hidden text-slate-700 dark:text-slate-200 transition-all duration-300">

@include('components.pagetitle')

<div class="flex mb-5">
   <section class="p-3 basis-2/3">
      <div class="bg-white dark:bg-slate-700 shadow-xl p-3 pb-7 rounded-xl relative overflow-hidden box-border">
         <div class="relative">
            <h3 class="p-4 pb-3 uppercase text-sm font-bold">Daftar Kategori</h3>
            <p class="mb-6 text-sm px-4">Daftar kategori pada perpustakaan</p>

            <button id="create" type="button" data-modal-target="nekomodal" data-modal-toggle="nekomodal" class="bg-violet-500 text-white px-4 py-2 rounded-lg shadow-lg text-xs absolute top-6 right-4 hover:bg-violet-600 active:bg-violet-700">Tambah Data</button>

            <div class="flex items-center mb-5 px-4">
               <div class="relative w-full">
                  <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                     <svg aria-hidden="true" class="w-5 h-5 text-slate-500 dark:text-slate-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                  </div>
                  <input type="text" id="search" class="border bg-transparent text-sm rounded-lg focus:outline-none focus:ring-2 focus:ring-violet-500 block w-full pl-10 p-2.5 dark:border-slate-500" placeholder="Cari kategori buku...">
               </div>
            </div>
         </div>
         
         <div id="result">
         </div>

      </div>
   </section>
</div>

</main>

</div>

<div id="nekomodal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-lg max-h-full">
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
            @csrf
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


@foreach($category as $d)

<div id="nekomodal{{ $d->id }}" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-lg max-h-full">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="nekomodal">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                <span class="sr-only">Close modal</span>
            </button>

            <div class="px-6 py-4 border-b rounded-t dark:border-gray-600">
                <h3 class="text-base font-semibold text-gray-900 lg:text-xl dark:text-white">
                    Edit Kategori
                </h3>
            </div>

            <form action="{{ route('category.update') }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
               <div class="flex p-6">
                  <div class="w-32">
                     <div class="flex p-6">
                  <div class="w-32 relative" id="dataFoto">
                     <img src="{{ asset('/img/buku/'.$d->photo) }}" alt="Buku {{ $d->name }}" class="w-full h-32 block object-cover rounded-xl shadow-lg cursor-point bg-slate-600">
                     <div id="labelFoto" class="flex justify-center items-center hidden absolute top-0 w-full">
                        <label for="foto" class="flex flex-col justify-center items-center w-full h-32 bg-slate-50 rounded-lg border-2 border-slate-300 border-dashed cursor-pointer dark:hover:bg-slate-500 dark:bg-slate-600 hover:bg-slate-100 dark:border-slate-500 dark:hover:border-slate-400 relative">
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
                           <input id="foto" type="file" class="hidden" name="foto">
                           <p class="hidden absolute text-sm text-slate-500 dark:text-slate-400 bottom-0 py-3 px-5 border-t left-0 right-0 text-center" id="namaFoto"></p>
                        </label>
                     </div>
                     @if($errors->has('icon'))
                         <div class="text-red-500">{{ $errors->first('icon') }}</div>
                     @endif
                  </div>
                  <div class="grow pl-7">
                     <label for="name">Nama Kategori</label>
                     <input name="name" id="name" type="text" class="p-3 focus:outline-none focus:ring focus:ring-red-500 rounded-lg w-full border my-3 border-slate-300 dark:bg-slate-700 dark:border-slate-600" placeholder="Nama Kategori..." required autofocus value="{{ $d->name }}">
                     @if($errors->has('name'))
                         <div class="text-red-500">{{ $errors->first('name') }}</div>
                     @endif
                  </div>
               </div>
               <div class="px-6 py-4 border-t dark:border-gray-600 flex justify-end">
                   <button class="px-4 py-2 bg-red-500 rounded text-white" type="submit">Update</button>
               </div>
            </form>
        </div>
    </div>
</div>

@endforeach

<script>

$(document).ready(() => {
   $('a.inline-flex').addClass('focus:outline-none focus:ring-0 focus:border-slate-300 hover:bg-slate-100 active:bg-slate-200')
   $('span.inline-flex').addClass('bg-slate-200')
   $('span.inline-flex svg').parent().removeClass('bg-slate-200')

   function fetchData(page, search){
      $.ajax({
         url:"/kategori/data?page="+page+"&search="+search,
         success: function(data){
            $('#result').html(data)
            $('a.inline-flex').addClass('focus:outline-none focus:ring-0 focus:border-slate-300 hover:bg-slate-100 active:bg-slate-200')
            $('span.inline-flex').addClass('bg-slate-200')
            $('span.inline-flex svg').parent().removeClass('bg-slate-200')
         }
      })
   }

   $(document).on('keyup', '#search', function(){
      const search = $('#search').val()
      const page = $('#hidden_page').val()

      fetchData(page, search)
   })

   $(document).on('click', 'a.inline-flex', function(event){
      event.preventDefault()
      const page = $(this).attr('href').split('page=')[1]
      $('#hidden_page').val(page)
      const search = $('#search').val()

      fetchData(page, search);
      $(this).parent().addClass('bg-violet-700 text-white')
   })

})

</script>

@endsection