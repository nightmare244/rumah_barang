<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Daftar Anggota Keluarga</title>

    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-100">

<div class="container mx-auto mt-10 mb-10 px-10">

    <div class="grid grid-cols-8 gap-4 mb-4 p-5">
        <div class="col-span-4 mt-2">
            <h1 class="text-3xl font-bold text-gray-800">
                DAFTAR ANGGOTA KELUARGA
            </h1>
        </div>

        <div class="col-span-4">
            <div class="flex justify-end">
                <a href="{{ route('anggota_keluarga.create') }}"
                   class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs uppercase rounded-full shadow-md
                          hover:bg-blue-700 hover:shadow-lg transition">
                    Tambah Anggota
                </a>
            </div>
        </div>
    </div>

    <div class="bg-white p-5 rounded shadow-sm">

        @if (session('success'))
            <div class="p-3 rounded bg-green-500 text-green-100 mb-4">
                {{ session('success') }}
            </div>
        @endif

        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th class="px-6 py-3">No</th>
                        <th class="px-6 py-3">Nama</th>
                        <th class="px-6 py-3">Peran</th>
                        <th class="px-6 py-3">Usia</th>
                        <th class="px-6 py-3 text-center">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                @forelse ($anggotaKeluarga as $anggota)
                    <tr class="bg-white border-b">
                        <td class="px-6 py-4">
                            {{ $loop->iteration }}
                        </td>
                        <td class="px-6 py-4 font-medium text-gray-900">
                            {{ $anggota->nama }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $anggota->peran }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $anggota->usia }} tahun
                        </td>
                        <td class="px-6 py-4 text-center">
                            <form action="{{ route('anggota_keluarga.destroy', $anggota) }}"
                                  method="POST"
                                  onsubmit="return confirm('Yakin ingin menghapus data ini?');"
                                  class="inline-flex gap-2">

                                @csrf
                                @method('DELETE')

                                <a href="{{ route('anggota_keluarga.show', $anggota) }}"
                                   class="px-4 py-2 bg-green-500 text-white text-xs rounded-full hover:bg-green-600 transition">
                                    Detail
                                </a>

                                <a href="{{ route('anggota_keluarga.edit', $anggota) }}"
                                   class="px-4 py-2 bg-blue-500 text-white text-xs rounded-full hover:bg-blue-600 transition">
                                    Edit
                                </a>

                                <button type="submit"
                                        class="px-4 py-2 bg-red-600 text-white text-xs rounded-full hover:bg-red-700 transition">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5"
                            class="text-center text-sm text-gray-900 px-6 py-4">
                            Data anggota keluarga masih kosong
                        </td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>

    </div>

</div>

</body>
</html>
