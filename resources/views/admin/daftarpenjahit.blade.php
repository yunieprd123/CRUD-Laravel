<!-- memanggil admin template -->
<!-- component layout yang dibuat pada langkah 3 -->
<x-admin-layout>
<h2 class="font-semibold text-xl text-gray-800 leading-tight">
<!-- menampilkan variabel title yang dikirim dari controller-->
{{$title}}
</h2>
<div>
<div class="shadow px-6 py-4 bg-white rounded sm:px-1 sm:py-1 ">
<div class="grid grid-cols-12">
<div class="col-span-6 p-4">
<!-- menampilkan url untuk menampilkan halaman input petani -->
<a href="{{route('penjahit.create')}}">
<button class="px-4 py-1 text-sm rounded text-purple-600 font-semibold border border-purple-
200 hover:text-white hover:bg-purple-600 hover:border-transparent focus:outline-
none">Tambah</button>
</a>
<button class="px-4 py-1 text-sm rounded text-green-600 font-semibold border border-green-
200 hover:text-white hover:bg-green-600 hover:border-transparent focus:outline-
none">Publish</button>
<button class="px-4 py-1 text-sm rounded text-red-600 font-semibold border border-red-
200 hover:text-white hover:bg-red-600 hover:border-transparent focus:outline-
none">Delete</button>
</div>
<div class="col-span-6 p-4 flex justify-end">
<input type="text" class="px-4 py-2 focus:ring-indigo-500 focus:border-indigo-500 rounded-
none rounded-l-md sm:text-sm border-gray-300">
<button class="rounded-r-md border border-l-0 px-4 py-1 border-gray-300 bg-gray-50 text-gray-
500 text-blue-600 hover:text-white hover:bg-blue-600">
Cari</button>
</div>
</div>
<div class="py-2 align-middle inline-block min-w-full sm:px-4 lg:px-4">
<div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
<table class="min-w-full divide-y divide-gray-200">
<thead class="bg-gray-50">
<tr>
 <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-
500 uppercase tracking-wider">
 Nama
 </th>
 <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-
500 uppercase tracking-wider">
 Kontak
 </th>
 <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-
500 uppercase tracking-wider">
 Kelompok
 </th>
 <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-
500 uppercase tracking-wider">
 Aksi
 </th>
</tr>
</thead>
<tbody class="bg-white divide-y divide-gray-200">
<!-- Ruang untuk menampilkan data-->
</tbody>
</table>
</div>
</div>
</div>
</div>
</x-admin-layout>