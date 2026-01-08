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
                <td>Customer Experience & Service Excellence</td>
                <td>Kelas 3.1 Soekarno Hatta</td>
                <td>Dedy Fachrudin</td>
                <td>08.30 - 17.00</td>
            </tr>
    </table>
    </div>

    

</x-layout>