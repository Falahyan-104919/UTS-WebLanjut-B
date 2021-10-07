<div class="row mb-2">
    <div class="col md-6">
        <h4>Daftar Anggota Koperasi Himakom</h4>
    </div>
</div>
<hr>
<div class="row mb-3">  
    <div class="col-md-6">
        <a href="<?=base_url();?>anggota/tambah" type="button" class="btn btn-primary">Tambah Anggota</a>
    </div>
</div>
<div class="row mb-2">
    <div class="col-md-6">
        <form action="<?=base_url('anggota');?>" method="post">
            <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Cari Anggota" name="keyword" autocomplete="off" autofocus>
            <div class="input-group-append">
                <input class="btn btn-success" type="submit" name="submit">
            </div>
        </form>
    </div>
</div>
<?php if($this->session->flashdata('flash')) : ?>
<div class="row mt-3">
    <div class="col-md-8">
        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
        </symbol>
        </svg>
        <div class="alert alert-success d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
            <div>
            Data Mahasiswa <strong>Berhasil</strong> <?=$this->session->flashdata('flash');?>.
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
<div class="row mb-3">
    <div class="col-md-6">
        <strong>Total Anggota</strong> : <?= $total_rows; ?>
    </div>
</div>
<div class="row mt-1">
    <div class="col-md">
            <table class="table table-success table-striped">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">No. Hp</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(empty($anggota)) :?>
                        <div class="alert alert-danger" role="alert">
                            Anggota Tidak Di Temukan!
                        </div>
                    <?php endif;?>
                    <?php foreach ($anggota as $a) : ?>
                    <tr>
                        <th><?= ++$start ;?></th>
                        <td><?=$a['nama'];?></td>
                        <td><?=$a['no_hp'];?></td>
                        <td>
                            <a href="<?=base_url();?>anggota/edit/<?=$a['id'];?>" class="badge bg-warning">Edit</a>
                            <a href="<?=base_url();?>anggota/detail/<?=$a['id'];?>" class="badge bg-primary">Detail</a>
                            <a href="<?=base_url();?>anggota/hapus/<?=$a['id'];?>" class="badge bg-danger" onclick="return confirm('Apakah anda yakin?')">Delete</a>
                        </td>
                    </tr>
                    <?php endforeach ;?>
                </tbody>
        </table>
        <?= $this->pagination->create_links();?>
    </div>
</div>