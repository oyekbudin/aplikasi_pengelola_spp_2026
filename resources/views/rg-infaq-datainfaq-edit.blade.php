@include('header')
@include('ruangguru')

<div class="content-area">

    <?php if(session('error')): ?>
        <div class="alert alert-danger">
            <?= session('error') ?>
        </div>
    <?php endif; ?>

    <form action="/updateinfaq/<?= $data['infaq']->id ?>" method="POST">
        @csrf

        <div class="row">

            <!-- Nama Infaq -->
            <div class="col-md-6 mb-3">
                <label class="form-label">Nama Infaq</label>
                <input type="text" name="name" class="form-control"
                    value="<?= old('name', $data['infaq']->name) ?>" required>
            </div>

            <!-- Harga -->
            <div class="col-md-6 mb-3">
                <label class="form-label">Harga</label>
                <input type="number" name="harga" class="form-control"
                    value="<?= old('harga', $data['infaq']->harga) ?>" required>
            </div>

            <!-- Kelas -->
            <div class="col-md-6 mb-3">
                <label class="form-label">Kelas</label>
                <select name="id_kelompok" class="form-control" required>
                    <option value="">-- Pilih Kelas --</option>

                    <?php foreach($data['kelompok'] as $k): ?>
                        <option value="<?= $k->id ?>"
                            <?= $data['infaq']->id_kelompok == $k->id ? 'selected' : '' ?>>
                            <?= $k->name ?>
                        </option>
                    <?php endforeach; ?>

                </select>
            </div>

            <!-- Hidden -->
            <input type="hidden" name="id_tahunajaran" value="<?= $data['infaq']->id_tahunajaran ?>">

        </div>

        <button type="submit" class="btn btn-primary">
            Simpan
        </button>

        <button type="button" class="btn btn-danger" onclick="history.back()">
            Batal
        </button>

    </form>

</div>

@include('footer')