@if(Session::get('success'))
	<div class="flex items-center h-16 border bg-green-200 pr-4 w-full max-w-md shadow-lg">
		<div class="flex items-center justify-center bg-green-300 w-12 h-full">
			<svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
				<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
			</svg>
		</div>
		<div class="px-6">
			<h5 class="font-semibold">Successful</h5>
			<p class="text-sm">{{ Session::get('success') }}</p>
		</div>
		<button class="ml-auto">
			<svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
				<path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
			</svg>
		</button>
	</div>
@endif

@if(Session::get('failed'))
	<div class="flex items-center h-16 border bg-red-200 pr-4 w-full max-w-md shadow-lg">
		<div class="flex items-center justify-center bg-red-300 w-12 h-full">
			<svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
				<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
			</svg>
		</div>
		<div class="px-6">
			<h5 class="font-semibold">Failed</h5>
			<p class="text-sm">{{ Session::get('failed') }}</p>
		</div>
		<button class="ml-auto">
			<svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
				<path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
			</svg>
		</button>
	</div>
@endif
@if(Session::get('warn'))
	<div class="flex items-center h-16 border bg-yellow-200 pr-4 w-full max-w-md shadow-lg">
		<div class="flex items-center justify-center bg-yellow-300 w-12 h-full">
			<svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
				<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
			</svg>
		</div>
		<div class="px-6">
			<h5 class="font-semibold">Warning</h5>
			<p class="text-sm">{{ Session::get('warn') }}</p>
		</div>
		<button class="ml-auto">
			<svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
				<path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
			</svg>
		</button>
	</div>
@endif