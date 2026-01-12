<x-layout>

    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="container">
        <div class="logo d-inline-flex flex-row mb4">
            <div class="p-2 ">
                <img src="images/logo_kemenhub.png" alt="Kemenhub" width="75px" height="80px">
            </div>
            <div class="p-2">
                <img src="images/" alt="">
            </div>
            <div class="p-2">
                <img src="images/logo_bp3c.png" alt="BP3C" width="75px" height="80px">
            </div>
            <div class="p-2">
                <img src="images/" alt="">
            </div>
        </div>
        <table class="table table-dark table-striped">
            <tr>
                <th>Nama Diklat</th>
                <th>Kelas</th>
                <th>Instruktur</th>
                <th>Jam</th>
            </tr>
            <tr>
                <td>{{ $tampil_diklat->nama_diklat }}</td>
                <td>{{ $tampil_diklat->nama_kelas }}</td>
                <td>{{ $tampil_diklat->nama_instruktur }}</td>
                <td>{{ $tampil_diklat->jam_mulai_diklat }} - {{ $tampil_diklat->jam_selesai_diklat }}</td>
            </tr>
    </table>
    </div>

</x-layout>