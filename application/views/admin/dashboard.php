  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-primary">
            <div class="inner">
              <h3><?php echo $countTotalStudent; ?></h3>

              <p>Total Students</p>
            </div>
            <div class="icon">
              <i class="ionicons ion-social-buffer"></i>
            </div>
            <a href="<?php echo base_url(); ?>manage-department" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-maroon">
            <div class="inner">
              <h3><?php echo $countTotalTeacher; ?></h3>

              <p>Total Teacher</p>
            </div>
            <div class="icon">
              <i class="ionicons ion-android-contacts"></i>
            </div>
            <a href="<?php echo base_url(); ?>manage-staff" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo $countTotalClasses; ?></h3>

              <p>Total Class</p>
            </div>
            <div class="icon">
              <i class="ionicons ion-log-out"></i>
            </div>
            <a href="<?php echo base_url(); ?>approve-leave" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>$<?php 
              if(isset($salary))
              {
                foreach ($salary as $s) {
                  echo $s['total'];
                }
                
              }
              else{
                echo 0;
              }
              ?></h3>

              <p>Salary Paid</p>

              <!-- <h3><?php echo $countTotalMarksheet; ?></h3>

              <p>Total Marksheet</p> -->

            </div>
            <div class="icon">
              <i class="ionicons ion-social-usd"></i>
            </div>
            <a href="<?php echo base_url(); ?>manage-salary" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
