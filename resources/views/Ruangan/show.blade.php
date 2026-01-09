<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Detail Ruangan {{ $ruangan->nama_ruangan }}</title>

    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>

<body class="bg-gray-100">

<div class="container mx-auto mt-10 mb-10 px-10">

    {{-- Header --}}
    <div class="grid grid-cols-8 gap-4 mb-4 p-5">
        <div class="col-span-4 mt-2">
            <h1 class="text-3xl font-bold text-gray-800">
                Detail Ruangan: {{ $ruangan->nama_ruangan }}
            </h1>
        </div>
    </div>

    {{-- Detail Card --}}
    <div class="bg-white p-6 rounded shadow-sm">
        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-600">
                <tbody>

                    <tr class="border-b">
                        <th class="px-6 py-4 font-medium text-gray-900 w-1/3">
                            Nama Ruangan
                        </th>
                        <td class="px-6 py-4">
                            {{ $ruangan->nama_ruangan }}
                        </td>
                    </tr>

                    <tr class="border-b">
                        <th class="px-6 py-4 font-medium text-gray-900">
                            Luas
                        </th>
                        <td class="px-6 py-4">
                            {{ $ruangan->luas }} m²
                        </td>
                    </tr>

                    <tr class="border-b">
                        <th class="px-6 py-4 font-medium text-gray-900">
                            Kapasitas
                        </th>
                        <td class="px-6 py-4">
                            {{ $ruangan->kapasitas }} orang
                        </td>
                    </tr>

                    <tr>
                        <th class="px-6 py-4 font-medium text-gray-900">
                            Dibuat Pada
                        </th>
                        <td class="px-6 py-4">
                            {{ $ruangan->created_at->format('d M Y') }}
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>

    {{-- Action --}}
    <div class="mt-4 flex gap-3">
        <a href="{{ route('ruangan.index') }}"
           class="inline-block px-6 py-2.5 bg-gray-200 text-gray-700 text-xs uppercase rounded-full shadow-sm hover:bg-gray-300 transition">
            Kembali
        </a>

        <a href="{{ route('ruangan.edit', $ruangan) }}"
           class="inline-block px-6 py-2.5 bg-blue-500 text-white text-xs uppercase rounded-full shadow-sm hover:bg-blue-600 transition">
            Edit Ruangan
        </a>
    </div>

</div>

</body>
</html>
