@include('header')
@include('ruangguru')
<div class="content-area">
    <!-- start content-area -->
    <form action="/updateguru/<?= $data['guru']->id ?>" method="POST">
    @csrf

    <div class="row">
        <div class="col-md-6 mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="name" class="form-control"
               value="<?= $data['guru']->name ?>" required>
        </div>

        <div class="col-md-6 mb-3">
            <label class="form-label">Jabatan</label>
            <select name="role" class="form-control" required>
            <option value="bendahara" <?= $data['guru']->role == 'bendahara' ? 'selected' : '' ?>>Bendahara</option>
            <option value="wali" <?= $data['guru']->role == 'walikelas' ? 'selected' : '' ?>>Wali Kelas</option>
        </select>
        </div>

        <div class="col-md-6 mb-3">
            <label class="form-label">Username</label>
            <input type="text" name="username" class="form-control"
               value="<?= $data['guru']->username ?>" required>
        </div>

        <div class="col-md-6 mb-3">
            <label class="form-label">Password</label>
            <input type="text" name="password" class="form-control"
               value="<?= Crypt::decrypt($data['guru']->password) ?>" required>
        </div>
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
