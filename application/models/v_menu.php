<div class="container">
    <div class="section-intro mb-120px">
        <h4 class="intro-title">Menu Kami</h4>
    </div>
</div>
<div class="container">
    <div class="row text-center">
        <?php foreach ($menu as $key => $value) { ?>
            <div class="card ml-3" style="width: 15rem;">
                <img class="card-img-top" src="<?= base_url('gambar_menu/' . $value->gambar_menu) ?>" alt="Card image cap" width="200px" height="200px">
                <div class=" card-body">
                    <h5 class="card-title mb-1"><?= $value->nama_menu ?></h5>
                    <small>"<?= $value->keterangan_menu ?>"</small><br>
                    <span class="badge badge-pill mb-3 badge-dark">Rp. <?= $value->harga_menu ?></span><br>
                    <a href="<?= base_url(); ?>home/pesan/<?= $value->id_menu ?>" class="btn btn-sm btn-primary">Pesan</a>
                </div>
            </div>
        <?php } ?>
    </div>
</div>