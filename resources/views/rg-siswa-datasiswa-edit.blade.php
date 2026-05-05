@include('header')
@include('ruangguru')
<div class="content-area">
    <!-- start content-area -->
    <form action="/updatesiswa/<?= $data['siswa']->id ?>" method="POST">
    @csrf

    <div class="row">
        <div class="col-md-6 mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="name" class="form-control"
               value="<?= $data['siswa']->name ?>" required>
        </div>

        <div class="col-md-6 mb-3">
            <label class="form-label">Nomor Whatsapp</label>
            <input type="text" name="no_whatsapp" class="form-control"
               value="<?= $data['siswa']->no_whatsapp ?>" required>
        </div>

        <input type="hidden" name="id_angkatan" value="<?= $data['siswa']->id_angkatan ?>">

    </div>

    <button type="submit" class="btn btn-primary">
        Simpan
    </button>
    <button type="button" class="btn btn-danger" onclick="history.back()">
        Batal
    </button>
</form>

</div> <!-- end content-area -->
</div> <!-- end content -->
</div> <!-- end b -->
</div> <!-- end layoutadmin -->


@include('footer')
