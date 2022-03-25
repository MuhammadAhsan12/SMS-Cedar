<?php
if ($this->input->get('opt') == '' || !$this->input->get('opt')) {
  show_404();
} else {
?>
  <div class="content-wrapper">
    <div id="request" class="div-hide"><?php echo $this->input->get('opt'); ?></div>

    <ol class="breadcrumb">
      <li><a href="<?php echo base_url('dashboard') ?>">Home</a></li>
      <?php
      if ($this->input->get('opt') == 'addst') {
        echo '<li class="active">Add Student</li>';
      } else if ($this->input->get('opt') == 'bulkst') {
        echo '<li class="active">Add Bulk Student</li>';
      } else if ($this->input->get('opt') == 'mgst') {
        echo '<li class="active">Manage Student</li>';
      }
      ?>

    </ol>

    <?php if ($this->input->get('opt') == 'addst' || $this->input->get('opt') == 'bulkst') { ?>

      <div class="panel panel-default">
        <div class="panel-heading">
          <?php
          if ($this->input->get('opt') == 'addst') {
            echo "Add Student";
          } else if ($this->input->get('opt') == 'bulkst') {
            echo "Add Bulk Student";
          }
          ?>

        </div>
        <div class="panel-body">
          <div id="messages"></div>

          <?php
          if ($this->input->get('opt') == 'addst') {
            // echo "Add Student";
          ?>
            <form action="<?php echo base_url('student/create') ?>" method="post" id="createStudentForm" enctype="multipart/form-data">
              <div class="col-md-7">
                <fieldset>
                  <legend>Student Info</legend>

                  <div class="form-group">
                    <label for="fname">First Name</label>
                    <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name" autocomplete="off">
                  </div>
                  <div class="form-group">
                    <label for="lname">Last Name</label>
                    <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name" autocomplete="off">
                  </div>
                  <div class="form-group">
                    <label for="dob">Date of Birth</label>
                    <input type="text" class="form-control" id="dob" name="dob" placeholder="Date of Birth" autocomplete="off">
                  </div>
                  <div class="form-group">
                    <label for="age">Age</label>
                    <input type="text" class="form-control" id="age" name="age" placeholder="Age" autocomplete="off">
                  </div>
                  <div class="form-group">
                    <label for="contact">Contact</label>
                    <input type="text" class="form-control" id="contact" name="contact" placeholder="Contact" autocomplete="off">
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email" autocomplete="off">
                  </div>

                </fieldset>

                <fieldset>
                  <legend>Address Info</legend>

                  <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="Address" autocomplete="off">
                  </div>
                  <div class="form-group">
                    <label for="city">City</label>
                    <input type="text" class="form-control" id="city" name="city" placeholder="City" autocomplete="off">
                  </div>
                  <div class="form-group">
                    <label for="country">Country</label>
                    <input type="text" class="form-control" id="country" name="country" placeholder="Country" autocomplete="off">
                  </div>
                </fieldset>

              </div>
              <!-- /col-md-6 -->

              <div class="col-md-5">

                <fieldset>
                  <legend>Registration Info</legend>

                  <div class="form-group">
                    <label for="registerDate">Register Date</label>
                    <input type="text" class="form-control" id="registerDate" name="registerDate" placeholder="Register Date" autocomplete="off">
                  </div>
                  <div class="form-group">
                    <label for="className">Class</label>
                    <select class="form-control" name="className" id="className">
                      <option value="">Select</option>
                      <?php foreach ($classData as $key => $value) { ?>
                        <option value="<?php echo $value['class_id'] ?>"><?php echo $value['class_name'] ?></option>
                      <?php } // /forwach 
                      ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="sectionName">Section</label>
                    <select class="form-control" name="sectionName" id="sectionName">
                      <option value="">Select Class</option>
                    </select>
                  </div>
                </fieldset>

                <fieldset>
                  <legend>Photo Attachment</legend>

                  <div class="form-group">
                    <label for="photo">Photo</label>
                    <!-- the avatar markup -->
                    <div id="kv-avatar-errors-1" class="center-block" style="max-width:500px;display:none"></div>
                    <div class="kv-avatar center-block" style="width:100%">
                      <input type="file" id="photo" name="photo" class="file-loading" />
                    </div>
                  </div>

                </fieldset>


              </div>
              <!-- /col-md-6 -->

              <div class="col-md-12">

                <br /> <br />
                <center>
                  <button type="submit" class="btn btn-success">Save Changes</button>
                  <button type="button" class="btn btn-danger">Reset</button>
                </center>
              </div>


            </form>

          <?php
          } // /add student
          else if ($this->input->get('opt') == 'bulkst') {
            // echo "Add Bulk Student";        
          ?>
            <form action="student/createBulk" method="post" id="createBulkForm">

              <center>
                <button type="button" class="btn btn-primary" onclick="addRow()">Add Row</button>
                <button type="submit" class="btn btn-success">Save Changes</button>
              </center>
              <br /> <br />

              <table class="table" id="addBulkStudentTable">
                <thead>
                  <tr>
                    <th style="width: 20%;">First Name</th>
                    <th style="width: 20%;">Last Name</th>
                    <th style="width: 20%;">Class</th>
                    <th style="width: 20%;">Section</th>
                    <th style="width: 2%;">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  for ($x = 1; $x < 4; $x++) { ?>
                    <tr id="row<?php echo $x; ?>">
                      <td>
                        <div class="form-group">
                          <input type="text" class="form-control" id="bulkstfname<?php echo $x; ?>" name="bulkstfname[<?php echo $x; ?>]" placeholder="First Name" autocomplete="off">
                        </div>
                      </td>
                      <td>
                        <div class="form-group">
                          <input type="text" class="form-control" id="bulkstlname<?php echo $x; ?>" name="bulkstlname[<?php echo $x; ?>]" placeholder="Last Name" autocomplete="off">
                        </div>
                      </td>
                      <td>
                        <div class="form-group">
                          <select class="form-control" name="bulkstclassName[<?php echo $x; ?>]" id="bulkstclassName<?php echo $x; ?>" onchange="getSelectClassSection(<?php echo $x; ?>)">
                            <option value="">Select</option>
                            <?php foreach ($classData as $key => $value) { ?>
                              <option value="<?php echo $value['class_id'] ?>"><?php echo $value['class_name'] ?></option>
                            <?php } // /forwach 
                            ?>
                          </select>
                        </div>
                      </td>
                      <td>
                        <div class="form-group">
                          <select class="form-control" name="bulkstsectionName[<?php echo $x; ?>]" id="bulkstsectionName<?php echo $x; ?>">
                            <option value="">Select Class</option>
                          </select>
                        </div>
                      </td>
                      <td>
                        <button type="button" class="btn btn-danger" onclick="removeRow(<?php echo $x; ?>)"><i class="glyphicon glyphicon-trash"></i></button>
                      </td>
                    </tr>
                  <?php
                  } // /for
                  ?>

                </tbody>
              </table>
              <!-- /.form -->

            </form>
            <!-- /.form -->

          <?php
          } // /add bulk student      
          ?>



        </div>
        <!-- /panle-bdy -->
      </div>
      <!-- /.panel -->

    <?php
    } // /checking condition for add student and bulk student 
    else if ($this->input->get('opt') == 'mgst') { ?>
      <div class="row">
        <div class="col-md-4">
          <div class="panel panel-default">

            <div class="panel-heading">
              Class
            </div>

            <div class="list-group">
              <?php
              if ($classData) {
                $x = 1;
                foreach ($classData as $value) {
              ?>
                  <a class="list-group-item classSideBar <?php if ($x == 1) {
                                                            echo 'active';
                                                          } ?>" onclick="getClassSection(<?php echo $value['class_id'] ?>)" id="classId<?php echo $value['class_id'] ?>">
                    <?php echo $value['class_name']; ?>(<?php echo $value['numeric_name']; ?>)
                  </a>
                <?php
                  $x++;
                }
              } else {
                ?>
                <a class="list-group-item">No Data</a>
              <?php
              }
              ?>
            </div>

          </div>
          <!-- /.panel -->
        </div>
        <!-- /.col-md-4 -->
        <div class="col-md-8">

          <div class="panel panel-default">
            <div class="panel-heading">Manage Student</div>
            <div class="panel-body">
              <div id="result"></div>

            </div>
            <!-- /panel-body -->
          </div>
          <!-- /panel -->
        </div>
        <!-- /.col-md-08 -->
      </div>
      <!-- /.row -->
    <?php
    } // /condition for manage student
    ?>

    <!-- edit student modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="editStudentModal">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Edit Student</h4>
          </div>

          <div class="modal-body edit-modal">

            <div id="edit-teacher-messages"></div>

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Photo</a></li>
              <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Personal Detail</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="home">
                <br />

                <form class="form-horizontal" method="post" id="updateStudentPhotoForm" action="student/updatePhoto" enctype="multipart/form-data">

                  <div class="row">
                    <div class="col-md-12">
                      <div id="edit-upload-image-message"></div>

                      <div class="col-md-6">
                        <center>
                          <img src="" id="student_photo" alt="Student Photo" class="img-thumbnail upload-photo" />
                        </center>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="editPhoto" class="col-sm-4 control-label">Photo: </label>
                          <div class="col-sm-8">
                            <!-- the avatar markup -->
                            <div id="kv-avatar-errors-1" class="center-block" style="max-width:500px;display:none"></div>
                            <div class="kv-avatar center-block" style="width:100%">
                              <input type="file" id="editPhoto" name="editPhoto" class="file-loading" />
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-sm-offset-2 col-sm-10">
                            <center>
                              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-success">Save Changes</button>
                            </center>
                          </div>
                        </div>

                      </div>
                      <!-- /col-md-6 -->
                    </div>
                    <!-- /col-md-12 -->
                  </div>
                  <!-- /row -->

                </form>
              </div>
              <!-- /tab panel of image -->

              <div role="tabpanel" class="tab-pane" id="profile">

                <br />
                <form class="form-horizontal" method="post" action="student/updateInfo" id="updateStudentInfoForm">
                  <div class="row">

                    <div class="col-md-12">
                      <div id="edit-personal-student-message"></div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="editFname" class="col-sm-4 control-label">First Name : </label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="editFname" name="editFname" placeholder="First Name" />
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="editLname" class="col-sm-4 control-label">Last Name : </label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="editLname" name="editLname" placeholder="Last Name" />
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="editDob" class="col-sm-4 control-label">DOB: </label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="editDob" name="editDob" placeholder="Date of Birth" />
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="editAge" class="col-sm-4 control-label">Age: </label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="editAge" name="editAge" placeholder="Age" />
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="editContact" class="col-sm-4 control-label">Contact: </label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="editContact" name="editContact" placeholder="Contact" />
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="editEmail" class="col-sm-4 control-label">Email: </label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="editEmail" name="editEmail" placeholder="Email" />
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="editAddress" class="col-sm-4 control-label">Address: </label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="editAddress" name="editAddress" placeholder="Address" />
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="editCity" class="col-sm-4 control-label">City: </label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="editCity" name="editCity" placeholder="City" />
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="editCountry" class="col-sm-4 control-label">Country: </label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="editCountry" name="editCountry" placeholder="Country" />
                          </div>
                        </div>

                      </div>
                      <!-- /col-md-6 -->

                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="editRegisterDate" class="col-sm-4 control-label">Register Date : </label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="editRegisterDate" name="editRegisterDate" placeholder="Register Date" />
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="editClassName" class="col-sm-4 control-label">Class</label>
                          <div class="col-sm-8">
                            <select class="form-control" name="editClassName" id="editClassName">
                              <option value="">Select</option>
                              <?php foreach ($classData as $key => $value) { ?>
                                <option value="<?php echo $value['class_id'] ?>"><?php echo $value['class_name'] ?></option>
                              <?php } // /forwach 
                              ?>
                            </select>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="editSectionName" class="col-sm-4 control-label">Section</label>
                          <div class="col-sm-8">
                            <select class="form-control" name="editSectionName" id="editSectionName">
                              <option value="">Select Class</option>
                            </select>
                          </div>
                        </div>

                      </div>
                      <!-- /col-md-4 -->

                      <div class="form-group">
                        <div class="col-sm-12">
                          <center>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Save Changes</button>
                          </center>
                        </div>
                      </div>
                    </div>
                    <!-- /col-md-12 -->

                  </div>
                  <!-- /row -->
                </form>

              </div>
              <!-- /tab-panel of teacher information -->
            </div>


          </div>
          <!-- /modal-body -->

        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div class="modal fade" tabindex="-1" role="dialog" id="viewStudentModal">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad">
				<div class="panel panel-info">
					<div class="panel-heading">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h3 id="Name" class="panel-title"></h3>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-3 col-lg-3 " align="center"><img src="" id="Photo" alt="Photo" class="img-circle" width="100px" height="100px" /></div>
							<div class=" col-md-9 col-lg-9 ">
								<table class="table table-user-information">
									<tbody>
										<tr>
											<td> student Id : </td>
											<td id="Id"></td>
										</tr>
										<tr>
											<td> First Name : </td>
											<td id="Fname"></td>
										</tr>
										<tr>
											<td> Last Name : </td>
											<td id="Lname"></td>
										</tr>
										<tr>
											<td> DOB : </td>
											<td id="Dob"></td>
										</tr>
										<tr>
											<td> Age : </td>
											<td id="Age"></td>
										</tr>
										<tr>
											<td> Contact : </td>
											<td id="Contact"></td>
										</tr>
										<tr>
											<td> Email : </td>
											<td id="Email"></td>
										</tr>
										<tr>
											<td> Address : </th>
											<td id="Address"></td>
										</tr>
										<tr>
											<td> City : </td>
											<td id="City"></td>
										</tr>
										<tr>
											<td> Contry : </td>
											<td id="Country"></td>
										</tr>
                    <tr>
											<td> Class Name : </th>
											<td id="ClassName"></td>
										</tr>
										<tr>
											<td> Section Name : </th>
											<td id="SectionName"></td>
										</tr>
										<tr>
											<td> Regestration Dtae : </td>
											<td id="RegisterDate"></td>
										</tr>
									</tbody>
								</table>

								<!-- <a href="#" class="btn btn-primary">My Performance</a>
								<a href="#" class="btn btn-primary">Team Performance</a> -->
							</div>
						</div>
					</div>
					<div class="panel-footer">
						<a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
						<span class="pull-right">
							<a onclick="" id="Edit" type="button" data-toggle="modal" data-target="#editStudentModal" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
							<a onclick="" id="Del" type="button" data-toggle="modal" data-target="#deleteSudentModal" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
						</span>
					</div>

				</div>
			</div>
		</div>
	</div>
</div><!-- /.modal -->
  </div>
<?php

} // /else show_404() 

?>



<script type="text/javascript">
  var manageStudentTable;
  var studentSectionTable = {};
  var base_url = $("#base_url").val();

  $(document).ready(function() {
    var request = $("#request").text();

    $("#topStudentMainNav").addClass('active');

    if (request == 'addst') {
      $("#addStudentNav").addClass('active');

      $('#registerDate').calendarsPicker({
        dateFormat: 'yyyy-mm-dd'
      });

      $('#dob').calendarsPicker({
        dateFormat: 'yyyy-mm-dd'
      });

      $("#photo").fileinput({
        overwriteInitial: true,
        maxFileSize: 1500,
        showClose: false,
        showCaption: false,
        showBrowse: false,
        browseOnZoneClick: true,
        removeLabel: '',
        removeIcon: '<i class="glyphicon glyphicon-remove"></i>',
        removeTitle: 'Cancel or reset changes',
        elErrorContainer: '#kv-avatar-errors-2',
        msgErrorClass: 'alert alert-block alert-danger',
        defaultPreviewContent: '<img src="' + base_url + 'assets/images/default/default_avatar.png" alt="Your Avatar" style="width:208px;height:200px;"><h6 class="text-muted">Click to select</h6>',
        layoutTemplates: {
          main2: '{preview} {remove} {browse}'
        },
        allowedFileExtensions: ["jpg", "png", "gif", "JPG", "PNG", "GIF"]
      });

      // change on the class
      $("#className").unbind('change').bind('change', function() {
        var class_id = $(this).val();
        $("#sectionName").load(base_url + 'student/fetchClassSection/' + class_id);
      });

      /*
       * submit the create student form
       */
      $("#createStudentForm").unbind('submit').bind('submit', function() {
        $("#messages").html('');

        var form = $(this);
        var url = form.attr('action');
        var type = form.attr('method');
        var formData = new FormData($(this)[0]);

        $.ajax({
          url: url,
          type: type,
          data: formData,
          dataType: 'json',
          cache: false,
          contentType: false,
          processData: false,
          async: false,
          success: function(response) {
            if (response.success == true) {
              $('#updateTeacherModal').modal('hide');

              swal(
                'Good job!',
                response.messages,
                'success'
              )

              $('.form-group').removeClass('has-error').removeClass('has-success');
              $('.text-danger').remove();
              clearForm();
            } else {
              if (response.messages instanceof Object) {
                $.each(response.messages, function(index, value) {
                  var key = $("#" + index);

                  key.closest('.form-group')
                    .removeClass('has-error')
                    .removeClass('has-success')
                    .addClass(value.length > 0 ? 'has-error' : 'has-success')
                    .find('.text-danger').remove();

                  key.after(value);
                });
              } else {
                $("#messages").html('<div class="alert alert-warning alert-dismissible" role="alert">' +
                  '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' +
                  response.messages +
                  '</div>');
              }
            } // /else
          } // /success
        }); // /ajax

        return false;
      });

    } // /add individual student	
    else if (request == 'bulkst') {
      $("#addBulkStudentNav").addClass('active');
      $("#createBulkForm").unbind('submit').bind('submit', function() {

        var form = $(this);
        var url = form.attr('action');
        var type = form.attr('method');

        $.ajax({
          url: url,
          type: type,
          data: form.serialize(),
          dataType: 'json',
          success: function(response) {
            if (response.success == true) {
              $('#updateTeacherModal').modal('hide');

              swal(
                'Good job!',
                response.messages,
                'success'
              )

              $('.form-group').removeClass('has-error').removeClass('has-success');
              $('.text-danger').remove();

              $('input[type="text"]').val('');
              $("#createBulkForm")[0].reset();
            } else {
              if (response.messages instanceof Object) {
                $.each(response.messages, function(index, value) {

                  var key = $("#" + index);

                  key.closest('.form-group')
                    .removeClass('has-error')
                    .removeClass('has-success')
                    .addClass(value.length > 0 ? 'has-error' : 'has-success')
                    .find('.text-danger').remove();

                  key.after(value);
                });
              } else {
                $("#messages").html('<div class="alert alert-warning alert-dismissible" role="alert">' +
                  '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' +
                  response.messages +
                  '</div>');
              }
            } // /else
          } // /.sucess
        }); // /.ajax

        return false;
      });
    } // /add bulk student
    else if (request == 'mgst') {
      $("#manageStudentNav").addClass('active');

      var classSideBar = $('.classSideBar').attr('id');
      var class_id = classSideBar.substring(7);

      getClassSection(class_id);

    } // /manage student table

  });

  /*
   *----------------------------
   * get class section function
   *----------------------------
   */
  function getClassSection(classId = null) {
    if (classId) {
      $(".list-group-item").removeClass('active');
      $("#classId" + classId).addClass('active');
      $.ajax({
        url: base_url + 'student/getClassSectionTab/' + classId,
        type: 'post',
        dataType: 'json',
        success: function(response) {
          $("#result").html(response.html);

          manageStudentTable = $("#manageStudentTable").DataTable({
            'ajax': 'student/fetchStudentByClass/' + classId,
            'order': []
          });

          /*
           *-------------------------------------
           * retrives from the getclassectiontab
           * function as a json format
           * and stores the section table into 
           * the object 
           *-------------------------------------
           */
          $.each(response.sectionData, function(index, value) {
            index += 1;
            studentSectionTable['studentTable' + index] = $("#manageStudentTable" + index).DataTable({
              'ajax': 'student/fetchStudentByClassAndSection/' + value.class_id + '/' + value.section_id,
              'order': []
            });
          });
        } // /success
      }); // /ajax		
    }
  }

  function clearForm() {
    $('input[type="text"]').val('');
    $('select').val('');
    $("#sectionName").html('<option value="">Select Class</option>');

    $(".fileinput-remove-button").click();
  }

  /*
   *-------------------------------
   * update student's info function
   *-------------------------------
   */
  function updateStudent(studentId = null) {
    $("#viewStudentModal").modal('hide');

    if (studentId) {
      $('#editRegisterDate').calendarsPicker({
        dateFormat: 'yyyy-mm-dd'
      });

      $('#editDob').calendarsPicker({
        dateFormat: 'yyyy-mm-dd'
      });

      $("#editPhoto").fileinput({
        overwriteInitial: true,
        maxFileSize: 1500,
        showClose: false,
        showCaption: false,
        showBrowse: false,
        browseOnZoneClick: true,
        removeLabel: '',
        removeIcon: '<i class="glyphicon glyphicon-remove"></i>',
        removeTitle: 'Cancel or reset changes',
        elErrorContainer: '#kv-avatar-errors-2',
        msgErrorClass: 'alert alert-block alert-danger',
        defaultPreviewContent: '<img src="' + base_url + 'assets/images/default/edit_avatar.png" alt="Your Avatar" style="width:208px;height:200px;"><h6 class="text-muted">Click to select</h6>',
        layoutTemplates: {
          main2: '{preview} {remove} {browse}'
        },
        allowedFileExtensions: ["jpg", "png", "gif", "JPG", "PNG", "GIF"]
      });

      $(".form-group").removeClass('has-error').removeClass('has-success');
      $('.text-danger').remove();
      // photo
      $('#edit-upload-image-message').html('');
      $(".fileinput-remove-button").click();

      // information
      $('#edit-personal-student-message').html('');


      $.ajax({
        url: base_url + 'student/fetchStudentData/' + studentId,
        type: 'post',
        dataType: 'json',
        success: function(response) {
          $("#editFname").val(response.fname);
          $("#editLname").val(response.lname);
          $("#editDob").val(response.dob);
          $("#editAge").val(response.age);
          $("#editContact").val(response.contact);
          $("#editEmail").val(response.email);
          $("#editAddress").val(response.address);
          $("#editCity").val(response.city);
          $("#editCountry").val(response.country);
          $("#editRegisterDate").val(response.register_date);
          $("#editClassName").val(response.class_id);

          $("#editSectionName").load('student/fetchClassSection/' + response.class_id, function(i) {
            $("#editSectionName").val(response.section_id);
          });

          $("#student_photo").attr('src', base_url + response.image);

          $("#editClassName").unbind('change').bind('change', function() {
            var class_id = $(this).val();
            $("#editSectionName").load('student/fetchClassSection/' + class_id);
          });

          // submit the teacher information form
          $("#updateStudentInfoForm").unbind('submit').bind('submit', function() {
            var form = $(this);
            var url = form.attr('action');
            var type = form.attr('method');

            $.ajax({
              url: url + '/' + studentId,
              type: type,
              data: form.serialize(),
              dataType: 'json',
              success: function(response) {
                if (response.success == true) {
                  $('#editStudentModal').modal('hide');

                  swal(
                    'Good job!',
                    response.messages,
                    'success'
                  )

                  manageStudentTable.ajax.reload(null, false);

                  // refresh the section table 
                  $.each(studentSectionTable, function(index, value) {
                    studentSectionTable[index].ajax.reload(null, false);
                  });

                  $('.form-group').removeClass('has-error').removeClass('has-success');
                  $('.text-danger').remove();
                } else {
                  if (response.messages instanceof Object) {
                    $.each(response.messages, function(index, value) {
                      var key = $("#" + index);

                      key.closest('.form-group')
                        .removeClass('has-error')
                        .removeClass('has-success')
                        .addClass(value.length > 0 ? 'has-error' : 'has-success')
                        .find('.text-danger').remove();

                      key.after(value);

                    });
                  } else {
                    $("#edit-personal-student-message").html('<div class="alert alert-warning alert-dismissible" role="alert">' +
                      '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' +
                      response.messages +
                      '</div>');
                  }
                } // /else
              } // /success
            }); // /ajax
            return false;
          }); // /submit the teacher information form

          // submit the teacher photo form
          $("#updateStudentPhotoForm").unbind('submit').bind('submit', function() {
            var form = $(this);
            var formData = new FormData($(this)[0]);
            var url = form.attr('action') + '/' + studentId;
            var type = form.attr('method');

            $.ajax({
              url: url,
              type: type,
              data: formData,
              dataType: 'json',
              cache: false,
              contentType: false,
              processData: false,
              async: false,
              success: function(response) {

                if (response.success == true) {
                  $('#editStudentModal').modal('hide');

                  swal(
                    'Good job!',
                    response.messages,
                    'success'
                  )

                  manageStudentTable.ajax.reload(null, false);

                  // refresh the section table 
                  $.each(studentSectionTable, function(index, value) {
                    studentSectionTable[index].ajax.reload(null, false);
                  });

                  $('.form-group').removeClass('has-error').removeClass('has-success');
                  $('.text-danger').remove();

                  $(".fileinput-remove-button").click();

                  $.ajax({
                    url: 'student/fetchStudentData/' + studentId,
                    type: 'post',
                    dataType: 'json',
                    success: function(response) {
                      $("#student_photo").attr('src', '../' + response.image);
                    }
                  });

                } else {
                  $("#edit-upload-image-message").html('<div class="alert alert-warning alert-dismissible" role="alert">' +
                    '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' +
                    response.messages +
                    '</div>');
                } // /else
              } // /success
            }); // /ajax
            return false;
          }); // /submit the teacher photo form

        } // /success
      }); // /ajax

    } // /if 
  }

  /*
   *-------------------------------
   * remove student's info function
   *-------------------------------
   */

  /*
   *-------------------------------
   * remove student's info function
   *-------------------------------
   */
  function removeStudent(studentId = null) {
    
    $("#viewStudentModal").modal('hide');

    if (studentId) {

      swal({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!',
        closeOnConfirm: false
      }).then(function(isConfirm) {
        if (isConfirm) {
          // ajax delete data to database
          $.ajax({
            url: 'student/remove/' + studentId,
            type: 'post',
            dataType: 'json',
            success: function(response) {
              if (response.success === true) {
                swal(
                  'Deleted!',
                  response.messages,
                  'success'
                );

                manageStudentTable.ajax.reload(null, false);

                // refresh the section table 
                $.each(studentSectionTable, function(index, value) {
                  studentSectionTable[index].ajax.reload(null, false);
                });

                $("#removeStudentModal").modal('hide');
              } else {
                $("#messages").html('<div class="alert alert-warning alert-dismissible" role="alert">' +
                  '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' +
                  response.messages +
                  '</div>');
              }
            }
          });
        }
      })
    } // /if
  }


  /*
   *-------------------------------
   * add row student's info function
   *-------------------------------
   */
  function addRow() {
    var countTotalTR = $("#addBulkStudentTable tbody tr").length;
    var countId = 0;

    if (countTotalTR <= 0) {
      countId = 1;
    } else {
      var lastRowNumber = $("#addBulkStudentTable tbody tr:last").attr('id');
      var countId = lastRowNumber.substring(3);
      countId = Number(countId) + 1;
    } // /else

    $.ajax({
      url: base_url + 'student/getAppendBulkStudentRow/' + countId,
      type: 'post',
      success: function(response) {
        if ($("#addBulkStudentTable tbody tr").length > 1) {
          $("#addBulkStudentTable tbody tr:last").after(response);
        } else {
          $("#addBulkStudentTable tbody").append(response);
        }
      } // /success
    }); // ajax
  }

  /*
   *-------------------------------
   * remove row studnt's info function
   *-------------------------------
   */
  function removeRow(rowId = null) {
    if (rowId) {
      $("#row" + rowId).fadeOut().remove();
    }
  }

  function viewStudent(studentId = null) {
		if (studentId) {
			$.ajax({
				url: "<?php echo site_url('student/fetchStudentData/') ?>" + studentId,
				type: 'post',
				dataType: 'json',
				success: function(response) {
					$("#Photo").attr('src', base_url + response.image);
					$("#Id").html(response.student_id);
					$("#Name").html(response.fname + " " + response.lname);
					$("#Fname").html(response.fname);
					$("#Lname").html(response.lname);
					$("#Dob").html(response.dob);
					$("#Age").html(response.age);
					$("#Contact").html(response.contact);
					$("#Email").html(response.email);
					$("#Address").html(response.address);
					$("#City").html(response.city);
					$("#Country").html(response.country);
					$("#RegisterDate").html(response.register_date);
          $("#ClassName").html(response.class_id);
          $("#SectionName").html(response.section_id);

					$("#Edit").attr('onclick', 'updateStudent("' + response.student_id + '")');
					$("#Del").attr('onclick', 'removeStudent("' + response.student_id + '")');
				}
			});
		}
	}

  function viewPdfstudent(studentId = null) {
		if (studentId) {
			$.ajax({
				url: "<?php echo site_url('student/fetchStudentData/') ?>" + studentId,
				type: 'post',
				dataType: 'json',
				success: function(response) {
					$.ajax({
						url: "<?php echo site_url('student/pdf') ?>/" + studentId,
						type: "GET",
						success: function(response) {
							window.location.href = "<?php echo base_url() . 'student/pdf/' ?>" + studentId;
						}
					});
				}
			});

		}
	}

  /*
   *-------------------------------
   * gets the class's section info function
   *-------------------------------
   */
  function getSelectClassSection(rowId = null) {
    if (rowId) {
      var class_id = $("#bulkstclassName" + rowId).val();
      $("#bulkstsectionName" + rowId).load(base_url + 'student/fetchClassSection/' + class_id);
    }
  }
</script>