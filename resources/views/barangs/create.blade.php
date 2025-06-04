<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
                <div>
                    <div class="flex flex-row">
                        <h1 class="text-xl font-semibold mb-4 flex-grow">
                            <strong>
                                Tambah Data Barang
                            </strong>
                        </h1>

                        <div>
                            <a href="{{ route('barangs.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 ml-auto">Kembali ke Daftar Barang</a>
                        </div>
                    </div>

                    <div>
                        <form action="{{ route('barangs.store') }}" method="POST" class="w-full max-w-lg">
                            @csrf
                            @method('POST')
                            <div class="mb-4">
                                <label for="kode" class="block text-gray-700">Kode Barang</label>
                                <input type="text" name="kode" id="kode" class="w-full p-2 border rounded" required>
                            </div>
                            <div class="mb-4">
                                <label for="nama" class="block text-gray-700">Nama Barang</label>
                                <input type="text" name="nama" id="nama" class="w-full p-2 border rounded" required>
                            </div>
                            <div class="mb-4">
                                <label for="harga" class="block text-gray-700">Harga</label>
                                <input type="number" name="harga" id="harga" class="w-full p-2 border rounded" required>
                            </div>
                            <div class="mb-4">
                                <label for="stok" class="block text-gray-700">Stok</label>
                                <input type="number" name="stok" id="stok" class="w-full p-2 border rounded" required>
                            </div>
                            <div class="mb-4">
                                <label for="deskripsi" class="block text-gray-700">Deskripsi</label>
                                <textarea name="deskripsi" id="deskripsi" class="w-full p-2 border rounded"></textarea>
                            </div>
                            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Tambah Barang</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>