@include('header')
@include('ruangguru')
<div class="content-area">
    <!-- start content-area -->
    <div class="mb-3">
        <p>Anda akan menaikkan kelas semua siswa-siswi dengan rincian sebagai berikut:</p>
    </div>
    <blockquote class="blockquote p-3 bg-light border-start border-4 border-primary rounded">

        <p class="mb-2">Kelas 7 <i data-lucide="arrow-right"></i> Kelas 8</p>
        <p class="mb-2">Kelas 8 <i data-lucide="arrow-right"></i> Kelas 9</p>
        <p class="mb-2">Kelas 9 <i data-lucide="arrow-right"></i> Alumni</p>

    </blockquote>

    <div class="mb-3">
        <p>Kemudian anda perlu mengisi data:</p>
    </div>
    <blockquote class="blockquote p-3 bg-light border-start border-4 border-primary rounded">

        <p class="mb-2">Tahun Masuk <i data-lucide="arrow-right"></i> Untuk membuat Kelas baru. Contoh: 2026</p>
        <p class="mb-2">Tahun Ajaran <i data-lucide="arrow-right"></i> Untuk membuat Infaq pada tahun ajaran ini. Contoh: 2026/2027</p>

    </blockquote>

    <div class="mb-3">
        <p>Setelah ini, anda dapat menambah, mengatur dan menghapus Infaq di menu <span class="badge bg-primary rounded-pill px-3 py-2">
                Kelola Data Infaq
            </span></p>
    </div>


    <form method="POST" action="/naikkelas">
    @csrf

    <div class="row">
        <div class="col-md-6 mb-3">
            <label class="form-label">Tahun Masuk</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="col-md-6 mb-3">
            <label class="form-label">Tahun Ajaran</label>
            <input type="text" name="tahunajaran_name" class="form-control" required>
        </div>

        <!--div class="col-md-6 mb-3">
            <label class="form-label">Kelas</label>
            <select name="id_kelompok" class="form-select" required>
                
                <option value="">-- Pilih Kelas --</option>
                <//?php foreach($data['kelompok'] as $k): ?>
                <option value="<//?= $k->id ?>"><//?= $k->name ?></option>
                <//?php endforeach; ?>
            </select>
        </div-->

     

        
    </div>

    <button type="submit" class="btn btn-primary" onclick="this.disabled=true; this.form.submit();">
        Lanjutkan
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
