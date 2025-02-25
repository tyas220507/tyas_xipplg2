<div class="content-wrapper">
<section class="content-header">
      <h1>
        Data Mahasiswa
        <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Mahsiswa</li>
      </ol>
    </section>

    <section class="content">
      <?php echo $this->session->flashdata('message'); ?>
        <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        <i class="fa fa-plus"></i> Tambah Data Mahasiswa</button>
        <a class="btn btn-danger" href="<?php echo base_url('mahasiswa/print') ?>"><i class="fa fa-print"> Print</i></a>
    
        <div class="dropdown inline">
         <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
           <i class="fa fa-download"></i> Export
         <span class="caret"></span>
         </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a href="<?php echo base_url('mahasiswa/pdf') ?>">PDF</a></li>
            <li><a href="<?php echo base_url('mahasiswa/excel') ?>">EXCEL</a></li>
          </ul>
        </div>

        <div class="navbar-form navbar-right">
          <?php echo form_open('mahasiswa/search') ?>
          <input type="text" name="keyword" class="form-control" placeholder="Search">
          <button type="submit" class="btn btn-success">Cari</button>
          <?php echo form_close() ?>
        </div>

        <table class="table">
            <tr>
                <th>NO</th>
                <th>NAMA MAHASISWA</th>
                <th>NIM</th>
                <th>TANGGAL LAHIR</th>
                <th>JURUSAN</th>
                <th colspan="2">AKSI</th>
            </tr>

            <?php 
            $no = 1;
            foreach ($mahasiswa as $mhs): ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $mhs->nama ?></td>
                <td><?php echo $mhs->nim ?></td>
                <td><?php echo $mhs->tgl_lahir ?></td>
                <td><?php echo $mhs->jurusan ?></td>
                <td><?php echo anchor('mahasiswa/detail/'.$mhs->id,'<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div>')?></td>
                <td onclick="javascript: return confirm('Anda Yakin Hapus?')"><?php echo anchor('mahasiswa/hapus/'.$mhs->id, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
                <td><?php echo anchor('mahasiswa/edit/'. $mhs->id, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </section>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">FORM INPUT DATA MAHASISWA</h4>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <?php echo form_open_multipart('mahasiswa/tambah_aksi'); ?>
            <div class="form-group">
                <label>Nama Mahasiswa</label>
                <input type="text" name="nama" class="form-control">
            </div>   
            
            <div class="form-group">
                <label>NIM</label>
                <input type="text" name="nim" class="form-control">
            </div> 

            <div class="form-group">
                <label>Tanggal Lahir</label>
                <input type="date" name="tgl_lahir" class="form-control">
            </div> 

            <div class="form-group">
                <label>Jurusan</label>
                <select type="text" name="jurusan">
                  <option>Sistem Informasi</option>
                  <option>Teknik Informatika</option>
                  <option>Teknik Komputer</option>
                </select>
            </div> 

            <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="alamat" class="form-control">
            </div> 

            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control">
            </div> 

            <div class="form-group">
                <label>No. Telepon</label>
                <input type="text" name="no_telp" class="form-control">
            </div> 

            <div class="form-group">
                <label>Foto</label>
                <input type="file" name="foto" class="form-control">
            </div> 

            <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
            <button type="submit" class="btn btn-primary">Simpan</button>

      <?php echo form_close(); ?>
      </div>
    </div>
  </div>
</div>
</div>