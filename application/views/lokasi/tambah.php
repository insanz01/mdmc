<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow-sm border-bottom-primary">
            <div class="card-header bg-white py-3">
                <div class="row">
                    <div class="col">
                        <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                            Form Tambah Lokasi
                        </h4>
                    </div>
                    <div class="col-auto">
                        <a href="<?= base_url('lokasi') ?>" class="btn btn-sm btn-secondary btn-icon-split">
                            <span class="icon">
                                <i class="fa fa-arrow-left"></i>
                            </span>
                            <span class="text">
                                Kembali
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <?= $this->session->flashdata('pesan'); ?>
                <form action="<?= base_url('lokasi/index') ?>" method="post">

                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="kabupaten">Kabupaten</label>
                    <div class="col-md-9">
                      <input type="text" name="kabupaten" class="form-control" value="<?= set_value('kabupaten') ?>">
                        <!-- <input readonly value="<?= set_value('id_barang', $id_barang); ?>" name="id_barang" id="id_barang" type="text" class="form-control" placeholder="ID Barang..."> -->
                        <?= form_error('kabupaten', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="kelurahan">Kelurahan</label>
                    <div class="col-md-9">
                      <input type="text" name="kelurahan" class="form-control" value="<?= set_value('kelurahan') ?>">
                        <?= form_error('kelurahan', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="kecamatan">Kecamatan</label>
                    <div class="col-md-9">
                      <input type="text" name="kecamatan" class="form-control" value="<?= set_value('kecamatan') ?>">
                        <?= form_error('kecamatan', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="desa">Desa</label>
                    <div class="col-md-9">
                      <input type="text" name="desa" class="form-control" value="<?= set_value('desa') ?>">
                        <?= form_error('desa', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="jenis_bencana">Jenis Bencana</label>
                    <div class="col-md-9">
                      <input type="text" name="jenis_bencana" class="form-control" value="<?= set_value('jenis_bencana') ?>">
                        <?= form_error('jenis_bencana', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-9 offset-md-3">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="reset" class="btn btn-secondary">Reset</bu>
                    </div>
                </div>
              </form>
            </div>
        </div>
    </div>
</div>
