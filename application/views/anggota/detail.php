<br><br>
<div class="row mt-5">
    <div class="col-md">
        <div class="d-flex justify-content-center">
            <div class="card text-dark bg-warning mb-3" style="max-width: px;">
                <div class="card-header text-center">
                    Detail Anggota Koperasi Himakom
                </div>
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="https://source.unsplash.com/750x600/?portrait" class="img-fluid rounded-start" alt="Profile Pincture">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <div class="container">
                            <h3>Informasi</h3>
                        </div>
                        <table class="table mt-3">
                            <tr>
                                <td>Nama</td>
                                <td><?=$anggota['nama'];?></td>
                            </tr>
                            <tr>
                                <td>No. Handphone</td>
                                <td><?=$anggota['no_hp'];?></td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td><?=$anggota['alamat'];?></td>
                            </tr>
                            <tr>
                                <td>Gender</td>
                                <td><?=$anggota['gender'];?></td>
                            </tr>
                        </table>
                        <div class="d-flex justify-content-end">
                            <a href="<?=base_url();?>anggota/index" class="btn btn-primary">Kembali</a>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>