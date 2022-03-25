<div class="content-wrapper">
  <ol class="breadcrumb">
    <li><a href="<?php echo base_url('dashboard') ?>">Home</a></li>
    <li class="active">Manage Class</li>
  </ol>

  <div class="panel panel-default">
    <div class="panel-heading">
      Manage Class
    </div>
    <div class="panel-body">
      <div id="messages"></div>

      <div class="pull pull-right">
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#addClass" id="addClassModelBtn">
          <i class="glyphicon glyphicon-plus-sign"></i> Add Class
        </button>
      </div>

      <br /> <br /> <br />
      <table id="manageClassTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <!-- <table id="" class="table table-hover table-bordered"> -->
        <thead>
          <tr>
            <th>#</th>
            <th>Class Name</th>
            <th>Numeric Name</th>
            <th>Action</th>
          </tr>
        </thead>
      </table>

    </div>
  </div>

  <!-- add class -->
  <div class="modal fade" tabindex="-1" role="dialog" id="addClass">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Add Class</h4>
        </div>

        <form class="form-horizontal" method="post" id="createClassForm" action="<?php echo base_url() . 'classes/create' ?>">

          <div class="modal-body">

            <div id="add-class-messages"></div>

            <div class="form-group">
              <label for="className" class="col-sm-4 control-label">Class Name : </label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="className" name="className" placeholder="Class Name">
              </div>
            </div>
            <div class="form-group">
              <label for="numericName" class="col-sm-4 control-label">Numeric Name : </label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="numericName" name="numericName" placeholder="Numeric Name">
              </div>
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

  <!-- edit class -->
  <div class="modal fade" tabindex="-1" role="dialog" id="editClassModal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Edit Class</h4>
        </div>

        <form class="form-horizontal" method="post" id="editClassForm" action="<?php echo base_url() . 'classes/update'; ?>">

          <div class="modal-body">

            <div id="edit-class-messages"></div>

            <div class="form-group">
              <label for="editClassName" class="col-sm-4 control-label">Class Name : </label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="editClassName" name="editClassName" placeholder="Class Name">
              </div>
            </div>
            <div class="form-group">
              <label for="editNumericName" class="col-sm-4 control-label">Numeric Name : </label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="editNumericName" name="editNumericName" placeholder="Numeric Name">
              </div>
            </div>
          </div>
          <div class="modal-footer edit-class-modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-success">Save changes</button>
          </div>
        </form>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

  <script type="text/javascript">
    var manageClassTable;
    var base_url = $("#base_url").val();

    $(document).ready(function() {
      $("#topClassMainNav").addClass('active');
      $("#topNavClass").addClass('active');

      manageClassTable = $("#manageClassTable").DataTable({
        // 'ajax': base_url + 'classes/fetchClassData',
        "ajax": {
          "url": "<?php echo site_url('classes/fetchClassData') ?>",
          "type": "POST"
        },
        'order': []
      });

      /*
       *------------------------------------
       * Add class modal button clicked
       *------------------------------------
       */
      $("#addClassModelBtn").on('click', function() {
        $("#createClassForm")[0].reset();
        $(".form-group").removeClass('has-error').removeClass('has-success');
        $("#add-class-messages").html('');
        $('.text-danger').remove();

        $("#createClassForm").unbind('submit').bind('submit', function() {
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
                $('#addClass').modal('hide');
                swal(
                  'Good job!',
                  response.messages,
                  'success'
                )

                manageClassTable.ajax.reload(null, false);

                $("#createClassForm")[0].reset();
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
              }
            } // /success
          }); // /ajax
          return false;
        }); // /create class form submit
      }); // /add class model btn

    }); // /document

    function editClass(class_id) {
      if (class_id) {
        /*Clear the form*/
        $(".form-group").removeClass('has-error').removeClass('has-success');
        $('.text-danger').remove();
        $("#edit-class-messages").html('');
        $("#classId").remove();

        $.ajax({
          url: "<?php echo site_url('classes/fetchClassData') ?>/" + class_id,
          type: 'post',
          dataType: 'json',
          success: function(response) {
            $("#editClassName").val(response.class_name);

            $("#editNumericName").val(response.numeric_name);

            // hidden class_id input field
            $(".edit-class-modal-footer").append('<input type="hidden" name="classId" id="classId" value="' + response.class_id + '" />');

            $("#editClassForm").unbind('submit').bind('submit', function() {
              var form = $(this);
              var url = form.attr('action');
              var type = form.attr('method');


              $.ajax({
                url: url + '/' + class_id,
                type: type,
                data: form.serialize(),
                dataType: 'json',
                success: function(response) {
                  if (response.success == true) {
                    $('#editClassModal').modal('hide');

                    swal(
                      'Good job!',
                      response.messages,
                      'success'
                    )

                    manageClassTable.ajax.reload(null, false);

                    $(".form-group").removeClass('has-error').removeClass('has-success');
                    $(".text-danger").remove();
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
                      $("#edit-class-messages").html('<div class="alert alert-warning alert-dismissible" role="alert">' +
                        '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' +
                        response.messages +
                        '</div>');
                    } // /else									
                  } // /else
                } // /success
              }); // /ajax

              return false;
            });


          } // /successs
        }); // /ajax
      } // /
    }

    /*
     *------------------------------------
     * remove class function
     *------------------------------------
     */

    function removeClass(class_id = null) {
      if (class_id) {
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
              url: "<?php echo site_url('classes/remove') ?>/" + class_id,
              type: 'post',
              dataType: 'json',
              success: function(response) {
                if (response.success === true) {
                  swal(
                    'Deleted!',
                    response.messages,
                    'success'
                  );

                  manageClassTable.ajax.reload(null, false);

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