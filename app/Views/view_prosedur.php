<?= $this->extend('/layout/dashboard_layout') ?>
<?= $this->section('content') ?>

<!-- Main Sidebar Container -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <!-- ... (same as before) ... -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Form Tambah Data</h3>
            </div>
            <div class="card-body">
            <?php
                if (!empty(session()->getFlashdata('error'))) : ?>
                  <div class="alert alert-danger" role=""alert>
                    <h4>Periksa Entrian Form</h4>
                    <hr>
                    <?php echo session()->getFlashdata('error'); ?>
                  </div>
                  <?php endif; ?>
                <?php
                if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                  <?= session()->getFlashdata('pesan'); ?>
                </div>
                <?php endif; ?>
                <form action="<?= base_url(); ?>prosedur/save" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                  <div class="row">
                    <div class="col">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="name_sop">SOP</label>
                        <input type="text" name ="name_sop" class="form-control" id="name_sop" placeholder="- Name SOP -" autofocus value="<?=isset($pedit[0]['name_sop'])?$pedit[0]['name_sop']:''; ?>">
                      </div>
                      <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" name="description"  class="form-control" id="description" placeholder="- Description SOP -" value="<?=isset($pedit[0]['description'])?$pedit[0]['description']:''; ?>">
                      </div>
                      <div class="form-group">
                        <label for="file_url">File URL</label>
                        <input type="url" name="file_url"  class="form-control" id="file_url" placeholder="- File URL -" value="<?=isset($pedit[0]['file_url'])?$pedit[0]['file_url']:''; ?>">
                      </div>
                      <div class="text-center">
                        <i href="<?=isset($pedit[0]['file_sop'])?'/uploads/file/'.$pedit[0]['file_sop']:''; ?>" class="rounded" alt="<?=isset($pedit[0]['name_sop'])?$pedit[0]['name_sop']:''; ?>"></i>
                      </div>
                    </div>
                </div>
                <br>
                <div class="form-group">
                <button type="submit" class="btn btn-primary btn-sm">Save</button>
                <input type="hidden" name="id"  class="form-control" id="id" value="<?=isset($pedit[0]['id'])?$pedit[0]['id']:''; ?>">
                </div> 
                  </div>               
                </form>

            </div>
          </div>
        </div>
        <div class="row">
        <div class="col-lg-5 col-md-6">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data File SOP</h3>
            </div>
            <div class="card-body">
              <form class="form-inline mb-2 d-flex justify-content-between" method="GET">
                <label class="sr-only" for="inlineFormInputName2">File Name</label>
                <input type="text" class="form-control mb-2 mr-2" id="inlineFormInputName2" name="cari" placeholder="- Search by file name -">
                <div class="btn-group" role="group">
                  <a class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    MORE
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="/profil/">RESET</a>
                    <button type="submit" class="dropdown-item">FILTER</button>
                    <a class="dropdown-item" href="/add">ADD</a>
                  </div>
                </div>
              </form>
              <div class="col-12 mb-2">
                <?php echo $jumlah; ?>
              </div>
              <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>QRCode</th>
                    <th>File Name</th>
                    <th>Description</th>
                    <th>File_url</th>
                    <th>Created_at</th>
                    <th>Created_by</th>
                    <th>Updated_at</th>
                    <th>Updated_by</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $id = 1;
                    foreach($promod as $m) {
                      $id = $id + 1; 
                      ?>
                    <tr>
                      <td><?= $m['id']; ?></td>
                      <td>
                    <?php
                    $kode = $m['file_url'];
                    require_once('assets/phpqrcode/qrlib.php');
                    QRcode::png($kode, FCPATH . "kode" . $m['id'] . ".png", "M", 2.2);
                    ?>

                  

                    <img src="<?= base_url("kode" . $m['id'] . ".png"); ?>" alt="" height="30" width="30">
                    
                    <a href="<?= base_url("kode" . $m['id'] . ".png"); ?>" download class="qr-code-link">
                    <button class="btn btn-primary btn-xs">
                        Cetak/Simpan
                    </button>
                </a>
                </td>

                      <td><?= $m['name_sop']; ?></td>
                      <td><?= $m['description']; ?></td>
                      <td><a href="<?= $m['file_url']; ?>" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Link</a></td>
                      <td><?= $m['created_at']; ?></td>
                      <td><?= $m['created_by']; ?></td>
                      <td><?= $m['updated_at']; ?></td>
                      <td><?= $m['updated_by']; ?></td>
                      <td>
                      <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown" data-offset="-52" aria-expanded="false">
                          <i class="fas fa-bars"></i>
                        </button>
                        <div class="dropdown-menu" role="menu">
                          <div class="btn-group-vertical d-grid gap-2 d-md-block" role="group" aria-label="Vertical button group">
                            <a href="/prosedur/<?= $m['id']; ?>" class="dropdown-item">Edit/Detail</a>
                            <a href="<?= base_url('prosedur/delete/'.$m['id']) ?>" class="btn btn-danger dropdown-item" onclick="return confirm('Are you sure ?')">Delete</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                  <?php } ?>
                  <tbody>
                </table>
                <?= $pager->Links();?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<?= $this->endSection() ?>
