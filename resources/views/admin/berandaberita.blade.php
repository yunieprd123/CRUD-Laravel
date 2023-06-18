<x-template-layout>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Daftar Pesanan
        </h2>
    <div>
        <div class="shadow px-6 py-4 bg-white rounded sm:px-1 sm:py-1 ">
            <div class="grid grid-cols-12">
                <div class="col-span-6 p-4">
                    <a href="{{route('berita.create')}}"><button class="px-4 py-1 text-sm rounded text-purple-600 font-semibold border border-purple-200 hover:text-white hover:bg-purple-600 hover:border-transparent focus:outline-none">Tambah</button></a>
                    <button class="px-4 py-1 text-sm rounded text-red-600 font-semibold border border-red-200 hover:text-white hover:bg-red-600 hover:border-transparent focus:outline-none">Delete</button>
                </div>
                <div class="col-span-6 p-4 flex justify-end">
                    <input type="text" class="px-4 py-2 focus:ring-indigo-500 focus:border-indigo-500 rounded-none rounded-1-md sm:text-sm border-gray-300" >
                    <button class="rounded-r-md border border-1-0 px-4 py-1 border-gray-300 bg-gray-50 text-gray-500 text-blue-600 hover:text-white hover:bg-blue-600" >Cari</button>
                </div>
            </div>
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg m-3"> 
            <table class="min-w-full divide-y divide-gray-200 p-2">
                <thead class="bg-gray-50">
                    <tr class="text-lg text-left">
                        <th class="w-1">Tandai</th>
                        <th>No</th>
                        <th>Jenis Baju</th>
                        <th>Model atau Desain</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <?php $no=1;?>
                    @foreach ($berita as $item)
                        <tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>{{$no}}</td>
                            <td>{{$item->title}}</td>
                            <td>{{$item->description}}</td>
                            <td>
                            <img src="{{asset('storage/'.$item->cover)}}" class="w-16" alt="">
                            </td>
                            <td>

                            <form action="{{route('berita.destroy',$item->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a href="{{route('berita.edit',$item->id)}}" class="px-4 py-1 text-sm rounded text-black-600 border border-blue-200 hover:text-white hover:bg-blue-600">Edit</a>
                                <button type="submit" class="px-4 py-1 text-sm rounded text-red-600 border border-red-200 hover:text-white hover:bg-red-600">Del</button>
                            </form>
                            </td>
                        </tr>
                    <?php $no++; ?>
                    @endforeach
                </thody>
            </table>
        </div>
        </div>
        </div>
</x-template-layout>