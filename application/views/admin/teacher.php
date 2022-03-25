<style>
	.user-row {
		margin-bottom: 14px;
	}

	.user-row:last-child {
		margin-bottom: 0;
	}

	.dropdown-user {
		margin: 13px 0;
		padding: 5px;
		height: 100%;
	}

	.dropdown-user:hover {
		cursor: pointer;
	}

	.table-user-information>tbody>tr {
		border-top: 1px solid rgb(221, 221, 221);
	}

	.table-user-information>tbody>tr:first-child {
		border-top: 0;
	}


	.table-user-information>tbody>tr>td {
		border-top: 0;
	}

	.toppad {
		margin-top: 20px;
	}
</style>
<div class="content-wrapper">
	<ol class="breadcrumb">
		<li><a href="<?php echo base_url('dashboard') ?>">Home</a></li>
		<li class="active">Manage Teacher</li>
	</ol>

	<div class="panel panel-default">
		<div class="panel-body">
			<fieldset>
				<legend>Manage Teacher</legend>

				<div id="messages"></div>

				<div class="pull pull-right">
					<button type="button" class="btn btn-success" data-toggle="modal" data-target="#addTeacher" id="addTeacherModelBtn">
						<i class="glyphicon glyphicon-plus-sign"></i> Add Teacher
					</button>
				</div>

				<br /> <br /> <br />

				<table id="manageTeacherTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th>Photo</th>
							<th>Fullname</th>
							<th>Age</th>
							<th>Contact</th>
							<th>Email</th>
							<th>Address</th>
							<th>Registered</th>
							<th>Action</th>
						</tr>
					</thead>
				</table>

			</fieldset>
		</div>
	</div>
</div>

<!-- add teacher -->
<div class="modal fade" tabindex="-1" role="dialog" id="addTeacher">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Add Teacher</h4>
			</div>

			<form class="form-horizontal" method="post" id="createTeacherForm" action="teacher/create" enctype="multipart/form-data">

				<div class="modal-body create-modal">

					<div id="add-teacher-messages"></div>

					<div class="row">
						<div class="col-md-12">
							<div class="col-md-6">
								<div class="form-group">
									<label for="fname" class="col-sm-4 control-label">First Name : </label>
									<div class="col-sm-8">
										<input type="text" class="form-control" id="fname" name="fname" placeholder="First Name" />
									</div>
								</div>
								<div class="form-group">
									<label for="lname" class="col-sm-4 control-label">Last Name : </label>
									<div class="col-sm-8">
										<input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name" />
									</div>
								</div>
								<div class="form-group">
									<label for="dob" class="col-sm-4 control-label">DOB: </label>
									<div class="col-sm-8">
										<input type="text" class="form-control" id="dob" name="dob" placeholder="Date of Birth" />
									</div>
								</div>
								<div class="form-group">
									<label for="age" class="col-sm-4 control-label">Age: </label>
									<div class="col-sm-8">
										<input type="text" class="form-control" id="age" name="age" placeholder="Age" />
									</div>
								</div>
								<div class="form-group">
									<label for="contact" class="col-sm-4 control-label">Contact: </label>
									<div class="col-sm-8">
										<input type="text" class="form-control" id="contact" name="contact" placeholder="Contact" />
									</div>
								</div>
								<div class="form-group">
									<label for="email" class="col-sm-4 control-label">Email: </label>
									<div class="col-sm-8">
										<input type="text" class="form-control" id="email" name="email" placeholder="Email" />
									</div>
								</div>
								<div class="form-group">
									<label for="address" class="col-sm-4 control-label">Address: </label>
									<div class="col-sm-8">
										<input type="text" class="form-control" id="address" name="address" placeholder="Address" />
									</div>
								</div>
								<div class="form-group">
									<label for="city" class="col-sm-4 control-label">City: </label>
									<div class="col-sm-8">
										<input type="text" class="form-control" id="city" name="city" placeholder="City" />
									</div>
								</div>
								<div class="form-group">
									<label for="country" class="col-sm-4 control-label">Country: </label>
									<div class="col-sm-8">
										<input type="text" class="form-control" id="country" name="country" placeholder="Country" />
									</div>
								</div>

							</div>
							<!-- /col-md-6 -->

							<div class="col-md-6">
								<div class="form-group">
									<label for="registerDate" class="col-sm-4 control-label">Register Date : </label>
									<div class="col-sm-8">
										<input type="text" class="form-control" id="registerDate" name="registerDate" placeholder="Register Date" />
									</div>
								</div>
								<div class="form-group">
									<label for="jobType" class="col-sm-4 control-label">Job Type: </label>
									<div class="col-sm-8">
										<select class="form-control" name="jobType" id="jobType">
											<option value="">Select an option</option>
											<option value="1">Full-Time</option>
											<option value="2">Part-Time</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="photo" class="col-sm-4 control-label">Photo: </label>
									<div class="col-sm-8">
										<!-- the avatar markup -->
										<div id="kv-avatar-errors-1" class="center-block" style="max-width:500px;display:none"></div>
										<div class="kv-avatar center-block" style="width:100%">
											<input type="file" id="photo" name="photo" class="file-loading" />
										</div>
									</div>
								</div>
							</div>
							<!-- /col-md-4 -->
						</div>
						<!-- /col-md-12 -->

					</div>
					<!-- /row -->
				</div>
				<!-- /modal-body -->
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-success">Save changes</button>
				</div>
			</form>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- edit teacher -->
<div class="modal fade" tabindex="-1" role="dialog" id="updateTeacherModal">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Edit Teacher</h4>
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

						<form class="form-horizontal" method="post" id="updateTeacherPhotoForm" action="teacher/updatePhoto" enctype="multipart/form-data">

							<div class="row">
								<div class="col-md-12">
									<div id="edit-upload-image-message"></div>

									<div class="col-md-6">
										<center>
											<img src="" id="teacher_photo" alt="Teacher Photo" class="img-thumbnail upload-photo" />
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
						<form class="form-horizontal" method="post" action="teacher/updateInfo" id="updateTeacherInfoForm">
							<div class="row">

								<div class="col-md-12">
									<div id="edit-personal-teacher-message"></div>

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
											<label for="editDob" class="col-sm-4 control-label">DOB : </label>
											<div class="col-sm-8">
												<input type="text" class="form-control" id="editDob" name="editDob" placeholder="Date of Birth" />
											</div>
										</div>
										<div class="form-group">
											<label for="editAge" class="col-sm-4 control-label">Age : </label>
											<div class="col-sm-8">
												<input type="text" class="form-control" id="editAge" name="editAge" placeholder="Age" />
											</div>
										</div>
										<div class="form-group">
											<label for="editContact" class="col-sm-4 control-label">Contact : </label>
											<div class="col-sm-8">
												<input type="text" class="form-control" id="editContact" name="editContact" placeholder="Contact" />
											</div>
										</div>
										<div class="form-group">
											<label for="editEmail" class="col-sm-4 control-label">Email : </label>
											<div class="col-sm-8">
												<input type="text" class="form-control" id="editEmail" name="editEmail" placeholder="Email" />
											</div>
										</div>
										<div class="form-group">
											<label for="editAddress" class="col-sm-4 control-label">Address : </label>
											<div class="col-sm-8">
												<input type="text" class="form-control" id="editAddress" name="editAddress" placeholder="Address" />
											</div>
										</div>
										<div class="form-group">
											<label for="editCity" class="col-sm-4 control-label">City : </label>
											<div class="col-sm-8">
												<input type="text" class="form-control" id="editCity" name="editCity" placeholder="City" />
											</div>
										</div>
										<div class="form-group">
											<label for="editCountry" class="col-sm-4 control-label">Country : </label>
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
											<label for="editJobType" class="col-sm-4 control-label">Job Type: </label>
											<div class="col-sm-8">
												<select class="form-control" name="editJobType" id="editJobType">
													<option value="">Select an option</option>
													<option value="1">Full-Time</option>
													<option value="2">Part-Time</option>
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

<div class="modal fade" tabindex="-1" role="dialog" id="viewTeacherModal">
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
											<td> Teacher Id : </td>
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
											<td> Job Type : </th>
											<td id="JobType"></td>
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
							<a onclick="" id="Edit" type="button" data-toggle="modal" data-target="#updateTeacherModal" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
							<a onclick="" id="Del" type="button" data-toggle="modal" data-target="#deleteTeacherModal" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
						</span>
					</div>

				</div>
			</div>
		</div>
	</div>
</div><!-- /.modal -->

<script type="text/javascript">
	var manageTeacherTable;
	var base_url = $("#base_url").val();

	$(document).ready(function() {
		$("#topNavTeacher").addClass('active');

		manageTeacherTable = $("#manageTeacherTable").DataTable({
			'ajax': "<?php echo site_url('teacher/fetchTeacherData') ?>",
			'order': []
		});




		/*
		 *-------------------------------------------------
		 * click on the add teacher model button
		 *-------------------------------------------------
		 */
		$("#addTeacherModelBtn").unbind('click').bind('click', function() {
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
				defaultPreviewContent: '<img src="<?php echo base_url(); ?>assets/images/default/default_avatar.png" alt="Your Avatar" style="width:208px;height:200px;"><h6 class="text-muted">Click to select</h6>',
				layoutTemplates: {
					main2: '{preview} {remove} {browse}'
				},
				allowedFileExtensions: ["jpg", "png", "gif", "JPG", "PNG", "GIF"]
			});

			/*remove error messages*/
			$(".form-group").removeClass('has-success').removeClass('has-error');
			$(".text-danger").remove();
			$("#add-teacher-messages").html('');

			$("#createTeacherForm").unbind('submit').bind('submit', function() {
				var form = $(this);
				var formData = new FormData($(this)[0]);
				var url = form.attr('action');
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
							$('#addTeacher').modal('hide');
							swal(
								'Good job!',
								response.messages,
								'success'
							)

							manageTeacherTable.ajax.reload(null, false);
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
								$("#add-teacher-messages").html('<div class="alert alert-warning alert-dismissible" role="alert">' +
									'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' +
									response.messages +
									'</div>');
							}
						} // /else
					} // /success
				}); // /ajax

				return false;
			});
		}); // /click on the add teacher button


	});

	/*
	 *-------------------------------------------------
	 * edits teacher information function
	 *-------------------------------------------------
	 */
	function editTeacher(teacherId = null) {
		$("#viewTeacherModal").modal('hide');

		if (teacherId) {
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
				defaultPreviewContent: '<img src="<?php echo base_url(); ?>assets/images/default/default_avatar.png" alt="Your Avatar" style="width:208px;height:200px;"><h6 class="text-muted">Click to select</h6>',
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
			$('#edit-personal-teacher-message').html('');



			$.ajax({
				url: "<?php echo site_url('teacher/fetchTeacherData/') ?>" + teacherId,
				type: 'post',
				dataType: 'json',
				success: function(response) {
					$("#editFname").val(response.fname);
					$("#editLname").val(response.lname);
					$("#editDob").val(response.date_of_birth);
					$("#editAge").val(response.age);
					$("#editContact").val(response.contact);
					$("#editEmail").val(response.email);
					$("#editAddress").val(response.address);
					$("#editCity").val(response.city);
					$("#editCountry").val(response.country);
					$("#editRegisterDate").val(response.register_date);
					$("#editJobType").val(response.job_type);

					$("#teacher_photo").attr('src', base_url + response.image);

					// submit the teacher information form
					$("#updateTeacherInfoForm").unbind('submit').bind('submit', function() {
						var form = $(this);
						var url = form.attr('action');
						var type = form.attr('method');

						$.ajax({
							url: url + '/' + teacherId,
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

									manageTeacherTable.ajax.reload(null, false);
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
										$("#edit-personal-teacher-message").html('<div class="alert alert-warning alert-dismissible" role="alert">' +
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
					$("#updateTeacherPhotoForm").unbind('submit').bind('submit', function() {
						var form = $(this);
						var formData = new FormData($(this)[0]);
						var url = form.attr('action') + '/' + teacherId;
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
									$('#updateTeacherModal').modal('hide');

									swal(
										'Good job!',
										response.messages,
										'success'
									)

									manageTeacherTable.ajax.reload(null, false);
									$('.form-group').removeClass('has-error').removeClass('has-success');
									$('.text-danger').remove();

									$(".fileinput-remove-button").click();

									$.ajax({
										url: 'teacher/fetchTeacherData/' + teacherId,
										type: 'post',
										dataType: 'json',
										success: function(response) {
											$("#teacher_photo").attr('src', '../' + response.image);
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
	 *-------------------------------------------------
	 * removes teacher function
	 *-------------------------------------------------
	 */
	function removeTeacher(teacherId = null) {
		$("#viewTeacherModal").modal('hide');

		if (teacherId) {
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
						url: "<?php echo site_url('teacher/remove/') ?>" + teacherId,
						type: 'post',
						dataType: 'json',
						success: function(response) {
							if (response.success === true) {
								swal(
									'Deleted!',
									response.messages,
									'success'
								);

								// $("#manageSubjectTable").load("<?php echo site_url('subject/fetchUpdateSubjectTable/') ?>" + classId);

								manageTeacherTable.ajax.reload(null, false);
								$("#removeTeacherModal").modal('hide');
							} else {
								$("#remove-messages").html('<div class="alert alert-warning alert-dismissible" role="alert">' +
									'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' +
									response.messages +
									'</div>');
							}
						}
					});
				}
			})
		}
	}

	function viewTeacher(teacherId = null) {
		if (teacherId) {
			$.ajax({
				url: "<?php echo site_url('teacher/fetchTeacherData/') ?>" + teacherId,
				type: 'post',
				dataType: 'json',
				success: function(response) {
					$("#Photo").attr('src', base_url + response.image);
					$("#Id").html(response.teacher_id);
					$("#Name").html(response.fname + " " + response.lname);
					$("#Fname").html(response.fname);
					$("#Lname").html(response.lname);
					$("#Dob").html(response.date_of_birth);
					$("#Age").html(response.age);
					$("#Contact").html(response.contact);
					$("#Email").html(response.email);
					$("#Address").html(response.address);
					$("#City").html(response.city);
					$("#Country").html(response.country);
					$("#RegisterDate").html(response.register_date);
					$("#JobType").html(response.job_type);
					$("#Edit").attr('onclick', 'editTeacher("' + response.teacher_id + '")');
					$("#Del").attr('onclick', 'removeTeacher("' + response.teacher_id + '")');
				}
			});
		}
	}

	function viewPdf(teacherId = null) {
		if (teacherId) {
			$.ajax({
				url: "<?php echo site_url('teacher/fetchTeacherData/') ?>" + teacherId,
				type: 'post',
				dataType: 'json',
				success: function(response) {
					$.ajax({
						url: "<?php echo site_url('teacher/pdf') ?>/" + teacherId,
						type: "GET",
						success: function(response) {
							window.location.href = "<?php echo base_url() . 'teacher/pdf/' ?>" + teacherId;
						}
					});
				}
			});

		}
	}

	/*
	 *-------------------------------------------------
	 * clears the form 
	 *-------------------------------------------------
	 */
	function clearForm() {
		$('input[type="text"]').val('');
		$('select').val('');
		$(".fileinput-remove-button").click();
	}
</script>