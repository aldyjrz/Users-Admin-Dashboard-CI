 
	 
 
	<div class="content-wrapper" style="min-height: 1203.6px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
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
                <h3 class="card-title">Login Admin</h3>
              </div>
			  <div style="color: red;margin-bottom: 15px;">
		<?php
		// Cek apakah terdapat session nama message
		if($this->session->flashdata('message')){ // Jika ada
			echo $this->session->flashdata('message'); // Tampilkan pesannya
		}
		 
		?>
	</div>

	<form method="post" action="<?php echo base_url('index.php/auth/login') ?>">
	<div class="card-body">
        <div class="form-group">
              <label for="name">Email</label>
                  <input type="email" class="form-control" id="email" name="email">
		</div>
	</div>
	 
		<div class="card-body">
			<div class="form-group">
				<label for="name">Password</label>
					<input type="password" class="form-control" id="password" name="password">
					
		<button type="submit"  class="btn btn-primary">Register</button>
			</div>
		</div>

					</form>
	 
				<!-- /.card -->

        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>