<div class="content-wrapper">
	<ol class="breadcrumb">
		<li><a href="<?php echo base_url('dashboard') ?>">Home</a></li>
		<li class="active">Manage Section</li>
	</ol>

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
		</div>
		<!-- /col-md-4 -->

		<div class="col-md-8">
			<div class="panel panel-default">
				<!-- Default panel contents -->
				<div class="panel-heading">Manage Section</div>

				<div class="panel-body">
					<div class="result"></div>
				</div>
			</div>
		</div>
		<!-- /col-md-8 -->
	</div>
</div>
<!-- /row -->

<!-- create section modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="addSectionModal">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Add Section</h4>
			</div>
			<form action="<?php echo base_url('section/create') ?>" method="post" id="addSectionForm">
				<div class="modal-body">
					<div id="add-section-message"></div>

					<div class="form-group">
						<label for="sectionName">Section Name</label>
						<input type="text" class="form-control" id="sectionName" name="sectionName" placeholder="Section Name">
					</div>
					<div class="form-group">
						<label for="teacherName">Teacher : </label>
						<select class="form-control" name="teacherName" id="teacherName">
							<option value="">Select a Teacher</option>
							<?php
							if ($teacherData) {
								foreach ($teacherData as $key => $value) : ?>
									<option value="<?php echo $value['teacher_id'] ?>"><?php echo $value['fname'] . ' ' . $value['lname'] ?></option>
								<?php
								endforeach
								?>
							<?php
							} else { ?>
								<option value="">No Data Available</option>
							<?php
							}
							?>
						</select>
					</div>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-success">Save changes</button>
				</div>

			</form>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- update section modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="editSectionModal">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Edit Section</h4>
			</div>
			<form action="<?php echo base_url('section/update') ?>" method="post" id="editSectionForm">
				<div class="modal-body">
					<div id="edit-section-messages"></div>

					<div class="form-group">
						<label for="editSectionName">Section Name</label>
						<input type="text" class="form-control" id="editSectionName" name="editSectionName" placeholder="Section Name">
					</div>
					<div class="form-group">
						<label for="editTeacherName">Teacher : </label>
						<select class="form-control" name="editTeacherName" id="editTeacherName">
							<option value="">Select a Teacher</option>
							<?php
							if ($teacherData) {
								foreach ($teacherData as $key => $value) : ?>
									<option value="<?php echo $value['teacher_id'] ?>"><?php echo $value['fname'] . ' ' . $value['lname'] ?></option>
								<?php
								endforeach
								?>
							<?php
							} else { ?>
								<option value="">No Data Available</option>
							<?php
							}
							?>
						</select>
					</div>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-success">Save changes</button>
				</div>

			</form>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script type="text/javascript">
	var base_url = $("#base_url").val();

	$(document).ready(function() {
		$("#topClassMainNav").addClass('active');
		$("#topNavSection").addClass('active');

		/*
		 *-------------------------------
		 * fetches the class section
		 * information 	
		 *-------------------------------
		 */

		var classSideBar = $(".classSideBar").attr('id');
		var classId = classSideBar.substring(7);

		getClassSection(classId);

	}); // /document

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
				url: "<?php echo site_url('section/fetchSectionTable/') ?>" + classId,
				type: 'post',
				success: function(response) {
					$(".result").html(response);
				} // /success
			}); // /ajax 
		}
	}

	/*
	 *----------------------------
	 * add section function
	 *----------------------------
	 */
	function addSection(classId = null) {
		if (classId) {
			$("#addSectionForm")[0].reset();
			$(".form-group").removeClass('has-error').removeClass('has-success');
			$('.text-danger').remove();
			$("#add-section-message").html('');

			$("#addSectionForm").unbind('submit').bind('submit', function() {
				$("#add-section-message").html('');

				var form = $(this);
				var url = form.attr('action') + '/' + classId;
				var type = form.attr('method');

				$.ajax({
					url: url,
					type: type,
					data: form.serialize(),
					dataType: 'json',
					success: function(response) {
						if (response.success == true) {

							$('#addSectionModal').modal('hide');
							swal(
								'Good job!',
								response.messages,
								'success'
							)

							$("#addSectionForm")[0].reset();
							$(".form-group").removeClass('has-error').removeClass('has-success');
							$(".text-danger").remove();

							$("#manageSectionTable").load("<?php echo site_url('section/fetchUpdateSectionTable/') ?>" + classId);

						} else {
							$.each(response.messages, function(index, value) {
								var key = $("#" + index);

								key.closest('.form-group')
									.removeClass('has-error')
									.removeClass('has-success')
									.addClass(value.length > 0 ? 'has-error' : 'has-success')
									.find('.text-danger').remove();

								key.after(value);

							});
						}
					} // /success
				}); // /ajax

				return false;
			});
		} // /if
	}

	/*
	 *----------------------------
	 * update class's section function
	 *----------------------------
	 */
	function editSection(sectionId = null, classId = null) {
		if (sectionId && classId) {
			/*Clear the form*/
			$("#editSectionForm")[0].reset();
			$(".form-group").removeClass('has-error').removeClass('has-success');
			$('.text-danger').remove();
			$("#edit-section-messages").html('');

			$.ajax({
				url: "<?php echo site_url('section/fetchSectionByClassSection/') ?>" + classId + '/' + sectionId,
				type: 'post',
				dataType: 'json',
				success: function(response) {
					$("#editSectionName").val(response.section_name);

					$("#editTeacherName").val(response.teacher_id);

					$("#editSectionForm").unbind('submit').bind('submit', function() {
						var form = $(this);
						var url = form.attr('action');
						var type = form.attr('method');

						$.ajax({
							url: url + '/' + classId + '/' + sectionId,
							type: type,
							data: form.serialize(),
							dataType: 'json',
							success: function(response) {
								if (response.success == true) {
									$('#editSectionModal').modal('hide');
									swal(
										'Good job!',
										response.messages,
										'success'
									)

									$("#manageSectionTable").load("<?php echo site_url('section/fetchUpdateSectionTable/') ?>" + classId);

									$(".form-group").removeClass('has-error').removeClass('has-success');
									$(".text-danger").remove();
								} else {

									$.each(response.messages, function(index, value) {
										var key = $("#" + index);

										key.closest('.form-group')
											.removeClass('has-error')
											.removeClass('has-success')
											.addClass(value.length > 0 ? 'has-error' : 'has-success')
											.find('.text-danger').remove();

										key.after(value);

									});

								} // /else
							} // /success
						}); // /ajax

						return false;
					});


				} // /successs
			}); // /ajax		

		}
	}

	/*
	 *----------------------------
	 * removes class's section function
	 *----------------------------
	 */

	function removeSection(sectionId = null, classId = null) {
		if (sectionId && classId) {
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
				url: "<?php echo site_url('section/remove/') ?>" + sectionId,
              type: 'post',
              dataType: 'json',
              success: function(response) {
                if (response.success === true) {
                  swal(
                    'Deleted!',
                    response.messages,
                    'success'
                  );

				  $("#manageSectionTable").load("<?php echo site_url('section/fetchUpdateSectionTable/') ?>" + classId);

                  $("#removeClassModal").modal('hide');
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
</script>