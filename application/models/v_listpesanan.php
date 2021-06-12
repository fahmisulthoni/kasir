<div class="container">
    <div class="section-intro mb-120px">
        <h4 class="intro-title">Pesanan Anda</h4>
    </div>
</div>
<?php $data = $this->m_home->listPesan(); ?>
<div class="container">
    <?php if (empty($data)) { ?>
        <h1>Belum Ada Pesanan</h1>
    <?php } else { ?>
        <div class="row text-center">
            <table class="table table-bordered table-hover">
                <tr>
                    <th>No</th>
                    <th>Menu</th>
                    <th>Harga</th>
                    <th>Jumlah Pesanan</th>
                    <th>Subtotal</th>
                </tr>
                <?php $no = 0;
                foreach ($pesanan as $key => $value) {
                    $no++; ?>
                    <tr>
                        <td><?= $no ?></td>
                        <td><?= $value->nama_menu ?></td>
                        <!-- <td><img class="card-img-top" src="<?= base_url('gambar_menu/' . $value->gambar_menu) ?>" alt="Card image cap" width="200px" height="200px"></td> -->
                        <td>Rp. <?= number_format($value->harga_menu)  ?></td>
                        <td>
                            <input type="number" value="<?= $value->jumlah_menu ?>">
                        </td>
                        <td name="subtotal">Rp. <?= number_format($value->harga_menu * $value->jumlah_menu) ?></td>
                    </tr>
                <?php } ?>
                <tr>
                    <td colspan="4">Total Pesanan</td>
                    <?= $total = 0;
                    foreach ($pesanan as $key) {
                        $total += $key->jumlah_menu * $key->harga_menu;
                    } ?>
                    <td>Rp. <?= number_format($total) ?></td>
                </tr>
            </table>
        <?php } ?>
        </div>
</div>