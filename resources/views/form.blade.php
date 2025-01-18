<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Form Data Siswa</title>
</head>
<body class="p-10">
    <h1 class="text-3xl font-bold text-center mb-6">Form Pengisian Data Siswa</h1>

    <form action="{{ route('form.post') }}" method="POST" class="max-w-lg mx-auto p-6 border border-gray-300 rounded-lg shadow-lg">
        @csrf
        <div class="mb-4">
            <label for="nama" class="block text-lg font-medium mb-2">Nama Siswa</label>
            <input type="text" id="nama" name="nama" required class="w-full px-4 py-2 border border-gray-300 rounded-lg">
        </div>
        
        <div class="mb-4">
            <label for="nisn" class="block text-lg font-medium mb-2">NISN</label>
            <input type="text" id="nisn" name="nisn" required class="w-full px-4 py-2 border border-gray-300 rounded-lg">
        </div>

        <div class="mb-4">
            <label for="phone_number" class="block text-lg font-medium mb-2">No Telepon</label>
            <input type="text" id="phone_number" name="phone_number" required class="w-full px-4 py-2 border border-gray-300 rounded-lg">
        </div>

                <p class="text-lg font-semibold mb-2">Pilih Hobi:</p>
                <div class="space-y-4">
                    @foreach ($hobby as $item)
                        <div class="flex items-center">
                            <input type="checkbox" id="{{ $item->hobby }}" name="hobby[]" value="{{ $item->id }}" class="mr-2" >
                            <label for="{{ $item->hobby }}" class="text-md">{{ $item->hobby }}</label>
                        </div>
                    @endforeach
                </div>
                


        <div class="mb-4 text-center flex justify-center gap-2">
            <a href="{{ route('data') }}" class="bg-green-500 text-white px-6 py-2 rounded-lg">Kembali</a>
            <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded-lg">Submit</button>
        </div>
    </form>
</body>
</html>
