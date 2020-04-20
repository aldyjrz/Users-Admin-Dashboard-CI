<div class="content-wrapper" style="min-height: 1203.6px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Admin - <?= $member->name?></h3>
              </div>
               <!-- form start -->
               <form id="edit-admin" method="POST" action="<?=base_url("users/editadmin")?>">
                <div class="card-body">
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?=$member->name?>">
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?=$member->email?>">
                  </div>  
                  <div class="form-group">
                    <label for="imei">password</label>
                    <input type="password" class="form-control" id="password" name="password">
                  </div>
                  <input type="hidden" name="id" value="<?=$member->id?>">
                  <button type="submit" class="btn btn-primary">Submit</button>
                 </div>
                <!-- /.card-body -->

                
              </form>
            </div>
</div>
            <!-- /.card -->

        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>