<?= $this->extend('admin/dashboard') ?>

<?= $this->section('content') ?>
<div class="row">
    <div class="col-xs-12">
        <!-- PAGE CONTENT BEGINS -->
        <div class="row">
            <!-- tampil data Website -->
            <div class="col-xs-12" id="form_data_web">
                <button class="btn btn-warning" onclick="tambah_data_web()" style="border-radius: 5px;">
                    <i class="ace-icon fa fa-pencil align-top bigger-125"></i>
                    Tambah Website
                </button>
                <br>
                <div class="table-header">
                    <?php echo $title ?>
                </div>
                <div>
                    <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Nama layanan</th>
                                <th>URL Layanan</th>
                                <th>Sampul Layanan</th>
                                <th>Deskripsi</th>
                                <th>Kategori</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data as $row) : ?>
                                <tr>
                                    <td style="text-align: center"><?= $row['namaLayanan']; ?></td>
                                    <td style="text-align: center"><a href="<?= $row['url']; ?>" target="_blank"><?= $row['url']; ?></a></td>
                                    <td style="text-align: center">
                                        <img align="center" style="height:80px; width:100px" src="<?= base_url('gambar/' . $row['gambarLayanan']) ?>">
                                    </td>
                                    <td style="text-align: center;"><?= $row['deskripsiLayanan']; ?></td>
                                    <td style="text-align: center"><?= $row['kategori']; ?></td>
                                    <td style="text-align: center">
                                        <div class="hidden-sm hidden-xs action-buttons">
                                            <a href="#" onclick="editDataLayanan(<?= $row['idLayanan']; ?>);" id="editLayanan" name="editLayanan" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                <span class="green">
                                                    <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                </span>
                                            </a>
                                            <a href="#" onclick="hapusDataLayanan(<?= $row['idLayanan']; ?>,'<?= $row['gambarLayanan']; ?>');" id="hapusLayanan" name="hapusLayanan" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                <span class="red">
                                                    <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- akhir data Website -->

            <!-- tambah data Layanan-->
            <div class="col-xs-12 col-sm-12" id="form_tambah_data_web" style="display: none">
                <div class="widget-box">
                    <div class="widget-header">
                        <h4 class="widget-title"><span id="titleTambahWeb"></span></h4>
                        <span class="widget-toolbar">
                            <a href="#" data-action="collapse">
                                <i class="ace-icon fa fa-chevron-up"></i>
                            </a>
                        </span>
                    </div>
                    <!-- <form method="POST" id="tambahWeb" enctype="multipart/form-data"> -->
                    <form method="POST" id="tambahWeb" enctype="multipart/form-data">
                        <div class="widget-body">
                            <div class="widget-main">
                                <!-- <div>
                                    <label>Id Website</label>
                                    <input type="text" id="idLayanan" name="idLayanan" class="form-control" />
                                </div> -->
                                <div>
                                    <label>Nama website</label>
                                    <input type="text" id="namaWebsite" name="namaWebsite" class="form-control" />
                                </div>
                                <div>
                                    <label for="form-field-mask-2">
                                        URL Website
                                    </label>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="ace-icon fa fa-link"></i>
                                        </span>
                                        <input class="form-control" type="text" id="url" name="url" />
                                    </div>
                                </div>
                                <div>
                                    <label for="gamabar">Sampul Website</label>
                                    <input multiple="" type="file" id="sampul" name="sampul" class="form-control" />
                                    <!-- <span id="GambarRumah"></span>
                                        <input type="hidden" id="gbrLama" name="gbrLama"> -->
                                </div>
                                <div>
                                    <label for="form-field-8">Deskripsi</label>
                                    <textarea class="form-control" id="deskripsi" name="deskripsi" placeholder="Default Text"></textarea>
                                </div>
                                <div>
                                    <label for="form-field-select-1">Kategori</label>
                                    <select class="form-control" id="kategori" name="kategori">
                                        <option value="" selected disabled>--Pilih--</option>
                                        <option value="internal">Internal</option>
                                        <option value="eksternal">Eksternal</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="widget-header">
                            <button type="submit" id="simpan" class="btn btn-white btn-info btn-bold">
                                <i class="ace-icon fa fa-floppy-o bigger-120 blue"></i>
                                Simpan
                            </button>
                            <!-- <button type="submit" id="Update" class="btn btn-white btn-info btn-bold">
                                <i class="ace-icon fa fa-floppy-o bigger-120 blue"></i>
                                Update
                            </button> -->
                            <button Type="reset" class="btn btn-white btn-info btn-bold" onclick="batal_tambah_website()">
                                <i class="ace-icon fa fa-times red2"></i>
                                Batal
                            </button>
                        </div>
                    </form>
                </div>
            </div><!-- /.tutup tamabah data layanan -->

            <!-- form edit data Layanan -->
            <div class="col-xs-12 col-sm-12" id="form_update_data_web" style="display: none">
                <div class="widget-box">
                    <div class="widget-header">
                        <h4 class="widget-title"><span id="titleUpdateWeb"></span></h4>
                        <span class="widget-toolbar">
                            <a href="#" data-action="collapse">
                                <i class="ace-icon fa fa-chevron-up"></i>
                            </a>
                        </span>
                    </div>
                    <!-- <form method="POST" id="tambahWeb" enctype="multipart/form-data"> -->
                    <form method="POST" id="updateWeb" enctype="multipart/form-data">
                        <div class="widget-body">
                            <div class="widget-main">
                                <!-- <div>
                                    <label>Id Website</label>
                                    <input type="text" id="idLayanan" name="idLayanan" class="form-control" />
                                </div> -->
                                <input type="hidden" id="idLayanan" name="idLayanan">
                                <div>
                                    <label>Nama website</label>
                                    <input type="text" id="namaWebsite2" name="namaWebsite2" class="form-control" />
                                </div>
                                <div>
                                    <label for="form-field-mask-2">
                                        URL Website
                                    </label>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="ace-icon fa fa-link"></i>
                                        </span>
                                        <input class="form-control" type="text" id="url2" name="url2" />
                                    </div>
                                </div>
                                <div>
                                    <label for="gamabar">Sampul Website</label>
                                    <input multiple="" type="file" id="sampul2" name="sampul2" class="form-control" />
                                    <!-- <span id="GambarRumah"></span>
                                        <input type="hidden" id="gbrLama" name="gbrLama"> -->
                                </div>
                                <div>
                                    <label for="form-field-8">Deskripsi</label>
                                    <textarea class="form-control" id="deskripsi2" name="deskripsi2" placeholder="Default Text"></textarea>
                                </div>
                                <div>
                                    <label for="form-field-select-1">Kategori</label>
                                    <select class="form-control" id="kategori2" name="kategori2">
                                        <option value="" selected disabled>--Pilih--</option>
                                        <option value="internal">Internal</option>
                                        <option value="eksternal">Eksternal</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="widget-header">
                            <!-- <button type="submit" id="simpan" class="btn btn-white btn-info btn-bold">
                                <i class="ace-icon fa fa-floppy-o bigger-120 blue"></i>
                                Simpan
                            </button> -->
                            <button type="submit" id="Update" class="btn btn-white btn-info btn-bold">
                                <i class="ace-icon fa fa-floppy-o bigger-120 blue"></i>
                                Update
                            </button>
                            <button Type="reset" class="btn btn-white btn-info btn-bold" onclick="batal_tambah_website()">
                                <i class="ace-icon fa fa-times red2"></i>
                                Batal
                            </button>
                        </div>
                    </form>
                </div>
            </div><!-- /.span -->
        </div><!-- /.row -->
        <!-- PAGE CONTENT ENDS -->
    </div><!-- /.col -->
</div>
<?= $this->endSection() ?>