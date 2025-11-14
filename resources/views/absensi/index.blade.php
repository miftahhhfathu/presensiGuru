<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Absensi Guru</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 min-h-screen">

    <div class="max-w-6xl mx-auto py-10">

        <div class="flex justify-center mb-6"></div>

        <div class="bg-white shadow-xl rounded-xl p-8">
            <div class="mb-6">
                <h1 class="text-xl font-bold text-gray-700">ABSENSI GURU</h1>
                <label class="block mt-4 mb-1 font-semibold text-gray-600">Pilih Hari:</label>

                <form method="GET" action="/absensi">
                    <select name="hari" onchange="this.form.submit()"
                        class="border p-2 rounded-lg bg-gray-50 focus:ring-indigo-400">
                        <option>Senin</option>
                        <option>Selasa</option>
                        <option>Rabu</option>
                        <option>Kamis</option>
                        <option>Jumat</option>
                    </select>
                </form>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <h2 class="text-lg font-semibold mb-2 text-gray-700">Absensi Jam Awal</h2>

                    <input type="text" id="filterAwal" onkeyup="filterAwalFunc()"
                        placeholder="Masukkan ID Guru..."
                        class="border p-2 rounded-lg w-full mb-3 bg-gray-50 focus:ring-indigo-300">

                    <table class="w-full border text-sm">
                        <thead class="bg-gray-100 border-b">
                            <tr>
                                <th class="border p-2">ID</th>
                                <th class="border p-2">Nama Guru</th>
                                <th class="border p-2">Mapel</th>
                                <th class="border p-2">Kelas</th>
                                <th class="border p-2">Hadir</th>
                            </tr>
                        </thead>

                        <tbody id="awalTable">
                            @foreach($jadwal as $j)
                            <tr class="border hover:bg-gray-50" data-id="{{ $j->guru->id }}">
                                <td class="border p-2">{{ $j->guru->id }}</td>
                                <td class="border p-2">{{ $j->guru->nama_guru }}</td>
                                <td class="border p-2">{{ $j->mapel->nama_mapel }}</td>
                                <td class="border p-2">{{ $j->kelas->nama_kelas }}</td>
                                <td class="border p-2 text-center">
                                    <input type="checkbox" class="scale-125">
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div>
                    <h2 class="text-lg font-semibold mb-2 text-gray-700">Absensi Jam Akhir</h2>

                    <input type="text" id="filterAkhir" onkeyup="filterAkhirFunc()"
                        placeholder="Masukkan ID Guru..."
                        class="border p-2 rounded-lg w-full mb-3 bg-gray-50 focus:ring-indigo-300">

                    <table class="w-full border text-sm">
                        <thead class="bg-gray-100 border-b">
                            <tr>
                                <th class="border p-2">ID</th>
                                <th class="border p-2">Nama Guru</th>
                                <th class="border p-2">Mapel</th>
                                <th class="border p-2">Kelas</th>
                                <th class="border p-2">Hadir</th>
                            </tr>
                        </thead>

                        <tbody id="akhirTable">
                            @foreach($jadwal as $j)
                            <tr class="border hover:bg-gray-50" data-id="{{ $j->guru->id }}">
                                <td class="border p-2">{{ $j->guru->id }}</td>
                                <td class="border p-2">{{ $j->guru->nama_guru }}</td>
                                <td class="border p-2">{{ $j->mapel->nama_mapel }}</td>
                                <td class="border p-2">{{ $j->kelas->nama_kelas }}</td>
                                <td class="border p-2 text-center">
                                    <input type="checkbox" class="scale-125">
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        function filterAwalFunc() {
            let val = document.getElementById("filterAwal").value;
            document.querySelectorAll("#awalTable tr").forEach(tr => {
                tr.style.display = tr.dataset.id == val || val === "" ? "" : "none";
            });
        }

        function filterAkhirFunc() {
            let val = document.getElementById("filterAkhir").value;
            document.querySelectorAll("#akhirTable tr").forEach(tr => {
                tr.style.display = tr.dataset.id == val || val === "" ? "" : "none";
            });
        }
    </script>
</body>
</html>
