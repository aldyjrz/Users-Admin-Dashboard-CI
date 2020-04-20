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
                <h3 class="card-title">Edit - <?= $member->nama?></h3>
              </div>
               <!-- form start -->
               <form id="edit-form" method="POST" action="<?=base_url("users/edit")?>">
                <div class="card-body">
                  <div class="form-group">
                    <label for="nama">Name</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?=$member->nama?>">
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?=$member->email?>">
                  </div>  
                  <div class="form-group">
                    <label for="imei">IMEI</label>
                    <input type="number" class="form-control" id="imei" name="imei" value="<?=$member->IMEI?>">
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