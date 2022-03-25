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
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-share"></i> <span>Leave</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url(); ?>approve-leave"><i class="fa fa-circle-o"></i> Manage Staff's Leave</a></li>
                    <li><a href="<?php echo base_url(); ?>leave-history"><i class="fa fa-circle-o"></i> Leave History</a></li>
                </ul>
            </li>


        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
