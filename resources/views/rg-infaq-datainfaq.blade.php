@include('header')
@include('ruangguru')
<div class="content-area">
    <!-- start content-area -->


    <!--blockquote class="blockquote p-3 bg-light border-start border-4 border-primary rounded">

        <p class="mb-2">
            Siswa-siswi <strong><//?= optional($data['angkatan']->kelompok)->name ?></strong> ini adalah Angkatan
            
            <span class="badge bg-primary rounded-pill px-3 py-2">
                <//?= $data['angkatan']->name ?>
            </span>
        </p>
        <p class="mb-2">
            Jumlah siswa : <span class="badge bg-success rounded-pill px-3 py-2">
        <//?= $data['angkatan']->siswa_count ?> Siswa
    </span>
        </p>

    </blockquote-->


    <div class="mb-3">

        <!-- Tombol tambah -->
        <a href="/tambahinfaq/<?= $data['tahunajaran']->id ?>" class="btn btn-primary">
            Tambah Infaq
        </a>
    </div>
    
    <div class="mb-3 d-flex gap-2 align-items-center">
        <span>Menampilkan Infaq untuk : </span>
        <a href="?kelas=" 
        class="btn <?= request('kelas') == '' ? 'btn-success' : 'btn-outline-success' ?>">
        Semua Kelas
        </a>

        <a href="?kelas=2" 
        class="btn <?= request('kelas') == 2 ? 'btn-success' : 'btn-outline-success' ?>">
        Kelas 7
        </a>

        <a href="?kelas=3" 
        class="btn <?= request('kelas') == 3 ? 'btn-success' : 'btn-outline-success' ?>">
        Kelas 8
        </a>

        <a href="?kelas=4" 
        class="btn <?= request('kelas') == 4 ? 'btn-success' : 'btn-outline-success' ?>">
        Kelas 9
        </a>

        <!-- Filter 
        
        <form method="GET" action="" class="d-flex gap-2">

            <select name="kelas" class="form-control" onchange="this.form.submit()">
                <option value="">Semua Kelas</option>
                <option value="2" <?= request('kelas') == 2 ? 'selected' : '' ?>>Kelas 7</option>
                <option value="3" <?= request('kelas') == 3 ? 'selected' : '' ?>>Kelas 8</option>
                <option value="4" <?= request('kelas') == 4 ? 'selected' : '' ?>>Kelas 9</option>
            </select>

        </form>-->

    </div>


    <table class="table table-hover">
        <thead class="table-light">
            <tr>
                <th>No</th>
                <th>Nama Infaq</th>
                <th>Kelas</th>
                <th>Harga</th>
                <!--th>Password</th-->
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if(count($data['infaq']) > 0): ?>

            <?php $no = 1; ?>
            <?php foreach($data['infaq'] as $i): ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $i->name ?></td>
                <td><?= optional($i->kelompok)->name ?></td>
                <td>Rp <?= number_format($i->harga, 0, ',', '.') ?></td>
                <td>
                    <button onclick="window.location.href='/editinfaq/<?= $i->id ?>'"
                        class="btn btn-sm btn-primary">Edit</button>
                    <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal"
                        data-id="<?= $i->id ?>">Hapus</button>
                </td>
            </tr>
            <?php endforeach; ?>
            <?php else: ?>

            <tr>
                <td colspan="5" class="text-center text-muted">
                    Data infaq belum ada
                </td>
            </tr>

            <?php endif; ?>

        </tbody>
    </table>

</div> <!-- end content-area -->
</div> <!-- end content -->
</div> <!-- end b -->
</div> <!-- end layoutadmin -->


<!-- modal popup -->
<div class="modal fade" id="confirmDeleteModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Konfirmasi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                Apakah Anda yakin ingin menghapus data ini?
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    Batal
                </button>

                <form id="formHapus" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger">
                        Ya, Hapus
                    </button>
                </form>
            </div>

        </div>
    </div>
</div>

<script>
    var modalHapus = document.getElementById('confirmDeleteModal');

    modalHapus.addEventListener('show.bs.modal', function(event) {
        var button = event.relatedTarget;
        var id = button.getAttribute('data-id');

        var form = document.getElementById('formHapus');
        form.action = '/hapusinfaq/' + id;
    });
</script>

@include('footer')
