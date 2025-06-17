<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="//cdn.datatables.net/2.3.2/css/dataTables.dataTables.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Dashboard</title>
</head>
<body>
    <div class="bg-gray-100 mx-auto p-6">
        <div class="flex-row justify-center items-center mb-6">
            <div class=" flex items-center justify-center">
                <div class="bg-white p-6 rounded-lg border-2 w-full">
                    <h1 class="text-2xl font-bold mb-4">Dashboard, Admin!</h1>
                    <p class="text-gray-700">Welcome to your dashboard!</p>
                </div>
            </div>
            
            <div class="bg-white p-6 rounded-lg border-2 w-full mt-2">
                <div class="flex flex-col items-center justify-center">
                    <div class="flex flex-row items-center justify-evenly w-full mb-4">
                        <h2 class="text-xl font-semibold mb-4">Daftar Barang</h2>
                        <a href="{{ route('barangs.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Tambah Barang</a>
                    </div>
    
                    <table id="myTable" class="display">
                        <thead>
                            <tr>
                                <th class="px-4 py-2">Nama Barang</th>
                                <th class="px-4 py-2">Harga</th>
                                <th class="px-4 py-2">Stok</th>
                                <th class="px-4 py-2">Deskripsi</th>
                                <th class="px-4 py-2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($barangs as $barang)
                            <tr>
                                <td class="border px-4 py-2">{{ $barang->nama }}</td>
                                <td class="border px-4 py-2">{{ $barang->harga }}</td>
                                <td class="border px-4 py-2">{{ $barang->stok }}</td>
                                <td class="border px-4 py-2">{{ $barang->deskripsi }}</td>
                                <td class="flex space-x-2 border px-4 py-2">
                                    <a href="{{ route('barangs.edit', $barang->id) }}" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">Edit</a>
                                    <form action="{{ route('barangs.destroy', $barang->id) }}" method="POST" class="inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.datatables.net/2.3.2/js/dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#myTable').DataTable();
        });
    </script>
</body>
</html>