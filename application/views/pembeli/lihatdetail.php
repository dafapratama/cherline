<head>
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/pembeli/lihatdetail.css">
</head>

<?= form_open_multipart('pembeli/lihatdetail/' . $kategori->id_kategori); ?>
<div class="container input-voucher">
    <div class="row">
        <div class="col-sm-4 img">
            <img src="<?= base_url('assets/img/kategori/') . $kategori->gambar ?>" width="312px" height="312px">
        </div>
        <div class="col-sm-8">
            <div class="no1 text-center">
                <p>1</p>
            </div>
            <div class="input-id">
                <h6>Masukan Player ID</h6>
                <div class="form-group">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <input type="hidden" class="form-control" name="id_kategori" value="<?= $kategori->id_kategori ?>">
                </div>
            </div>
            <br>
            <div class="no1 text-center">
                <p>2</p>
            </div>
            <!--input nominal-->
            <div class="input-nominal">
                <div class="container">
                    <div class="row">
                        <h6>Pilih Nominal Top Up</h6>
                    </div>

                    <div class="row sm-12 text-center">
                        <?php
                        foreach ($harga->result() as $admin => $data) { ?>
                            <div class="col-sm-4 ">
                                <div type="button" class="btn btn-outline-dark diamond">
                                    <input type="radio" name="voucher" id="defaultCheck1" value="<?= $data->id_voucher ?>"><?= $data->nama_voucher ?></input>
                                </div>
                            </div>
                        <?php } ?>
                    </div>

                </div>
            </div>
            <br>
            <!--beli-->
            <div class="no1 text-center">
                <p>3</p>
            </div>
            <div class="input-id">
                <h6>Beli!</h6>
                <button type="submit" class="btn btn-dark" style="width: 200px;">Beli Sekarang!</button>
            </div>
        </div>
    </div>
</div>
</form>