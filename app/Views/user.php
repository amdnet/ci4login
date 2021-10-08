<?= $this->extend('layout/template.php') ?>

<?= $this->section('content') ?>

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">

                <div class="col-sm-6">
                    <!-- <h1 class="m-0">Data User</h1> -->
                    <a class="btn btn-primary" href="<?= base_url('user/create'); ?>" role="button">Add User Login</a>
                </div>
		  
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Dashboard</a></li>
                    <li class="breadcrumb-item active">Data User</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>

    <div class="container">
            <div class="card">
                <div class="card-header">
                    List Data User Login
                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 175px; padding:3px 0">
                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Task</th>
                            <th>Progress</th>
                            <th style="width: 40px">Label</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($user as $row) { ?>
                      <tr>
                      <td>1</td>
                      <td><?= $row->username;?></td>
                      <td><?= $row->username;?></td>
                      <td><?= $row->username;?></td>
                    </tr>
                    <?php } ?>
                    </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">«</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">»</a></li>
                </ul>
              </div>
            </div>
       </div>

<?= $this->endSection() ?>