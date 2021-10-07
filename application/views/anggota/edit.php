<div class="row mt-5">
    <div class="col-md">
    <div class="d-flex justify-content-center">
        <div class="card border-warning mb-3" style="width: 50rem;">
            <div class="card-header text-center"><strong>Form Edit Anggota Koperasi</strong></div>
            <div class="card-body">
                <form action="" method="post">
                    <input type="hidden" name="id" value="<?=$anggota['id'];?>">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" autocomplete="off" value="<?=$anggota['nama'];?>">
                <small class="form-text text-danger"><?= form_error('nama');?></small>
                <label for="no_hp">No. Handpohone</label>
                <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="No. HP" autocomplete="off" value="<?=$anggota['no_hp'];?>">
                <small class="form-text text-danger"><?= form_error('no_hp');?></small>
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat Lengkap" autocomplete="off" value="<?=$anggota['alamat'];?>">
                <small class="form-text text-danger"><?= form_error('alamat');?></small>
                <label for="gender">Jenis Kelamin</label>
                <select name="gender" id="gender" name="gender" class="form-control" value="<?=$anggota['gender'];?>">
                    <option value="Pria">Pria</option>
                    <option value="Wanita">Wanita</option>
                </select>
            </div>
            <div class="card-footer">
                <div class="d-flex justify-content-end">
                    <input type="submit" class="btn btn-primary">
                </div>
            </div>
            </form>
        </div>
    </div>
    </div>
</div>