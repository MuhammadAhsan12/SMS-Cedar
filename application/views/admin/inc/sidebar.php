<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo base_url(); ?>assets/dist/img/admin-user.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Administrator</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>

            <li class="active"><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>


            <li class="treeview">
                <a href="#">
                    <i class="fa fa-th-large"></i> <span>Class & Subject</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('classes'); ?>"><i class="fa fa-circle-o"></i> Manage Class</a></li>
                    <li><a href="<?php echo base_url('section') ?>"><i class="fa fa-circle-o"></i> Manage Section</a></li>
                    <li><a href="<?php echo base_url('subject') ?>"><i class="fa fa-circle-o"></i> Manage Subject</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-graduation-cap"></i><span>Student</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('student?opt=addst') ?>"><i class="fa fa-circle-o"></i> Add Student</a></li>
                    <li><a href="<?php echo base_url('student?opt=bulkst') ?>"><i class="fa fa-circle-o"></i> Add Bulk Student</a></li>
                    <li><a href="<?php echo base_url('student?opt=mgst') ?>"><i class="fa fa-circle-o"></i> Manage Student</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user"></i><span>Teacher</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('teacher') ?>"><i class="fa fa-circle-o"></i> Manage Teacher</a></li>
                </ul>
            </li>

            <!-- <li class="treeview">
                <a href="#">
                    <i class="fa fa-calendar"></i> <span>Attendance</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('attendance?atd=add') ?>"><i class="fa fa-circle-o"></i> Take Attendance</a></li>
                    <li><a href="<?php echo base_url('attendance?atd=report') ?>"><i class="fa fa-circle-o"></i> Attendance Report</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-file"></i> <span>Marksheet</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('marksheet?opt=mngms') ?>"><i class="fa fa-circle-o"></i> Manage Marksheet</a></li>
                    <li><a href="<?php echo base_url('marksheet?opt=mgmk') ?>"><i class="fa fa-circle-o"></i> Manage Marks</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user-md"></i> <span>Accounting Section</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('accounting?opt=crtpay') ?>"><i class="fa fa-circle-o"></i> Create Student Payment</a></li>
                    <li><a href="<?php echo base_url('accounting?opt=mgpay') ?>"><i class="fa fa-circle-o"></i> Manage Payment</a></li>
                    <li><a href="<?php echo base_url('accounting?opt=mgexp') ?>"><i class="fa fa-circle-o"></i> Expenses</a></li>
                    <li><a href="<?php echo base_url('accounting?opt=ime') ?>"><i class="fa fa-circle-o"></i> Income</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-th-large"></i> <span>Department</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url(); ?>add-department"><i class="fa fa-circle-o"></i> Add Department</a></li>
                    <li><a href="<?php echo base_url(); ?>manage-department"><i class="fa fa-circle-o"></i> Manage Department</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i> <span>Staff</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url(); ?>add-staff"><i class="fa fa-circle-o"></i> Add Staff</a></li>
                    <li><a href="<?php echo base_url(); ?>manage-staff"><i class="fa fa-circle-o"></i> Manage Staff</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-usd"></i> <span>Salary</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url(); ?>add-salary"><i class="fa fa-circle-o"></i> Add Salary</a></li>
                    <li><a href="<?php echo base_url(); ?>manage-salary"><i class="fa fa-circle-o"></i> Manage Salary</a></li>
                </ul>
            </li> -->


        </ul>
    </section>
    <!-- /.sidebar -->
</aside>