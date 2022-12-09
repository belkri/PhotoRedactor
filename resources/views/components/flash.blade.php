@if (session()->has('success'))
<div class="bg-green-500 bottom-5 fixed font-semibold p-4 right-5 rounded-md text-lg">
<p>{{ session('success') }}</p>
</div>
@endif