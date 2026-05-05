@include('header')
@include('ruangguru')

<div class="content-area">
    <!-- start content-area -->

    <div class="mb-3">
        <h3>Pilih Tahun Ajaran</h3>
    </div>

    <div class="menukotak">
        <?php if(empty($data['tahunajaran']) || count($data['tahunajaran']) == 0): ?>

        <div class="alert alert-warning">
            Belum ada tahun ajaran
        </div>

        <?php else: ?>

        <?php foreach($data['tahunajaran'] as $t): ?>

        <a href="/datainfaq/tahunajaran/<?= $t->id ?>">
            <div class="menuitem btn btn-primary">
                <h3><?= $t->name ?></h3>
            </div>
        </a>

        <?php endforeach; ?>

        <?php endif; ?>

        <!--a href="/tambahtahunajaran">
            <div class="menuitem btn btn-success">
                <i data-lucide="plus"></i>
                
                <span>Tambah Tahun Ajaran Baru</span>
            </div>
        </a-->

    </div> <!-- end menukotak -->


</div> <!-- end content-area -->
</div> <!-- end content -->
</div> <!-- end b -->
</div> <!-- end layoutadmin -->
@include('footer')
