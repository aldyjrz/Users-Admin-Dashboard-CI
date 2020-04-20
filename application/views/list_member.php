<div class="content-wrapper" style="min-height: 1203.6px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>List Members</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">List Members</li>
            </ol> 
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">

        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Total Member Terdaftar</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="members" class="table table-bordered table-striped">
              <thead>
                <tr>
                    <th>ID/</th>
                    <th>NAME</th>
                    <th>EMAIL</th>
                    <th>IMEI</th>
                    <th>CREATED</th>
                    <th>EXPIRED</th>
                    <th>ACTION</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($members as $member): ?>
                <tr>
                    <td><?=$member->id?></td>
                    <td><?=$member->nama?></td>
                    <td><?=$member->email?></td>
                    <td><?=$member->IMEI?></td>
                    <td><?=$member->created_at?></td>
                    <td><?=$member->updated_at?></td>
                    <td>
                        <a href="<?=base_url("users/view/{$member->id}")?>"class="btn btn-success btn-sm"><i class="fa fa-pencil"></i></a>
                        <a onclick="deleteMember(<?=$member->id?>)" class="btn btn-danger btn-sm text-white"><i class="fa fa-trash"></i></a>
                      </td>
                </tr>
                <?php endforeach;?>
            </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>