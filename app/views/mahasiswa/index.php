<div class="container mt-4">

<div class="row">
  <div class="col-lg-6">
    <?php Flasher::flash(); ?>
  </div>
</div>

<div class="row mb-3">
  <div class="col-lg-6">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">Tambah Data Mahasiswa</button>
  </div>
</div>

<div class="row">
  <div class="col-lg-6">
    <form action="<?= NAVBARURL; ?>/mahasiswa/cari" method="post">
    <div class="input-group mb-3">
      <input type="text" class="form-control" placeholder="Cari Mahasiswa" name="keyword" id="keyword" autocomplete="off" aria-describedby="button-addon2">
      <button class="btn btn-info" type="submit" id="tombolCari">Cari</button>
</div>  
    </form>
  </div>
</div>


<div class="row">
    <div class="col-lg-6">
        <h3>Daftar Mahasiswa</h3>
            <ul class="list-group">
                <?php foreach( $data['mhs'] as $mhs ) : ?>
                <li class="list-group-item">
                <?= $mhs['nama']; ?>
                <a href="<?= NAVBARURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge bg-danger float-end ms-1" onclick="return confirm('yakin?');">Hapus</a>
                <a href="<?= NAVBARURL; ?>/mahasiswa/ubah/<?= $mhs['id']; ?>" class="badge bg-info float-end ms-1 tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $mhs['id']; ?>">Ubah</a>
                <a href="<?= NAVBARURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge bg-primary float-end ms-1">Detail</a>
                </li>
                <?php endforeach; ?>
            </ul>
       
    </div>
</div>

</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="JudulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModal">Tambah Data Mahasiswa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
        <form action="<?= NAVBARURL; ?>/mahasiswa/tambah" method="post">
            <input type="hidden" name="id" id="id">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="mb-3">
                <label for="nim" class="form-label">NIM</label>
                <input type="number" class="form-control" id="nim" name="nim">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>

            <label for="jurusan" class="form-label">Jurusan</label>
                <input class="form-control" list="listjurusan" id="jurusan" name="jurusan">
                    <datalist id="listjurusan">
                    <option value="Teknik Elektro">
                    <option value="Teknik Mesin">
                    <option value="Teknik Sipil">
                    <option value="Akutansi">
                    <option value="Bisnis">
                    </datalist> 

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>