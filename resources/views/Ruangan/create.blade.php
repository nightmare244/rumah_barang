<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Create Ruangan</title>

    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>

<body class="bg-gray-100">

<div class="container mx-auto mt-10 mb-10 px-10">

    {{-- Header --}}
    <div class="grid grid-cols-8 gap-4 p-5">
        <div class="col-span-4 mt-2">
            <h1 class="text-3xl font-bold text-gray-800">
                CREATE RUANGAN
            </h1>
        </div>
    </div>

    {{-- Form Card --}}
    <div class="bg-white p-6 rounded shadow-sm">

        <form action="{{ route('ruangan.store') }}" method="POST">
            @csrf

            {{-- Nama Ruangan --}}
            <div class="mb-5">
                <label class="block mb-1 font-medium">Nama Ruangan</label>
                <input type="text"
                       name="nama_ruangan"
                       value="{{ old('nama_ruangan') }}"
                       required
                       class="block w-full px-3 py-2 text-gray-700 bg-white border border-gray-300
                              rounded-full focus:border-blue-600 focus:outline-none">

                @error('nama_ruangan')
                    <div class="bg-red-400 text-white p-2 rounded mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            {{-- Luas --}}
            <div class="mb-5">
                <label class="block mb-1 font-medium">Luas (m²)</label>
                <input type="number"
                       name="luas"
                       value="{{ old('luas') }}"
                       min="1"
                       required
                       class="block w-full px-3 py-2 text-gray-700 bg-white border border-gray-300
                              rounded-full focus:border-blue-600 focus:outline-none">

                @error('luas')
                    <div class="bg-red-400 text-white p-2 rounded mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            {{-- Kapasitas --}}
            <div class="mb-5">
                <label class="block mb-1 font-medium">Kapasitas</label>
                <input type="number"
                       name="kapasitas"
                       value="{{ old('kapasitas') }}"
                       min="1"
                       required
                       class="block w-full px-3 py-2 text-gray-700 bg-white border border-gray-300
                              rounded-full focus:border-blue-600 focus:outline-none">

                @error('kapasitas')
                    <div class="bg-red-400 text-white p-2 rounded mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            {{-- Action --}}
            <div class="mt-4">
                <button type="submit"
                        class="inline-block px-6 py-2.5 bg-blue-600 text-white text-xs uppercase rounded-full
                               shadow-md hover:bg-blue-700 hover:shadow-lg transition">
                    Simpan
                </button>

                <a href="{{ route('ruangan.index') }}"
                   class="inline-block px-6 py-2.5 bg-gray-200 text-gray-700 text-xs uppercase rounded-full
                          shadow-md hover:bg-gray-300 hover:shadow-lg transition">
                    Kembali
                </a>
            </div>

        </form>

    </div>

</div>

</body>
</html>
