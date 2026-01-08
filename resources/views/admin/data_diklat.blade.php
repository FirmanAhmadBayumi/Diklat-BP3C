<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#modalTambahDiklat">
        Tambah Diklat
    </button>

    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th>Nama Diklat</th>
                <th>Kelas</th>
                <th>Instruktur</th>
                <th>Jam</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Customer Experience & Service Excellence</td>
                <td>Kelas 3.1 Soekarno Hatta</td>
                <td>Dedy Fachrudin</td>
                <td>08.30 - 17.00</td>
            </tr>
        </tbody>
    </table>

    <div class="modal fade" id="modalTambahDiklat" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content text-dark">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel">Tambah Diklat</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form action="{{ route('tambah.diklat') }}" method="POST">
                    <div class="modal-body">
                        @csrf
                        <div class="mb-3">
                            <label for="nama_diklat" class="form-label">Nama Diklat</label>
                            <input type="text" class="form-control" id="nama_diklat" name="nama_diklat" required>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="nama_kelas" class="form-label">Nama Kelas</label>
                                <input type="text" class="form-control" id="nama_kelas" name="nama_kelas" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="nama_instruktur" class="form-label">Nama Instruktur</label>
                                <input type="text" class="form-control" id="nama_instruktur" name="nama_instruktur"
                                    required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="tgl_mulai_diklat" class="form-label">Tanggal Mulai</label>
                                <input type="date" class="form-control" id="tgl_mulai_diklat" name="tgl_mulai_diklat"
                                    required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="tgl_selesai_diklat" class="form-label">Tanggal Selesai</label>
                                <input type="date" class="form-control" id="tgl_selesai_diklat"
                                    name="tgl_selesai_diklat" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="jam_mulai_diklat" class="form-label">Jam Mulai</label>
                                <input type="time" class="form-control" id="jam_mulai_diklat" name="jam_mulai_diklat"
                                    required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="jam_selesai_diklat" class="form-label">Jam Selesai</label>
                                <input type="time" class="form-control" id="jam_selesai_diklat"
                                    name="jam_selesai_diklat" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="status_diklat" class="form-label">Status Diklat</label>
                            <select class="form-select" id="status_diklat" name="status_diklat" required>
                                <option value="" selected disabled>Pilih Status...</option>
                                <option value="Aktif">Dijadwalkan</option>
                                <option value="Selesai">Dilaksanakan</option>
                                <option value="Dibatalkan">Selesai</option>
                            </select>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-layout>