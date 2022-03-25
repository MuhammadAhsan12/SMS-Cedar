<!DOCTYPE html>
<html>

<head>
  <?php
  $this->load->view('admin/inc/top');
  ?>
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href="#"><b>School</b> Management</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
      <p class="login-box-msg">Please Login To Continue..</p>

      <form method="post" action="<?php echo base_url('users/login') ?>" id="loginForm">
        <fieldset>
          <div id="message"></div>

          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="Username">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
          </div>

          <button type="submit" class="col-md-12 btn btn-success login-button"><i class="fa fa-sign-in-alt"></i> Login</button>
        </fieldset>
      </form>
    </div>
    <!-- /.login-box-body -->
  </div>
  <!-- /.login-box -->

  <script type="text/javascript">
    $(document).ready(function() {
      $("#loginForm").unbind('submit').bind('submit', function() {

        var form = $(this);
        var url = form.attr('action');
        var type = form.attr('method');

        $.ajax({
          url: url,
          type: type,
          data: form.serialize(),
          dataType: 'json',
          success: function(response) {
            if (response.success === true) {
              swal(
                'Login Successfully!',
                'Your Account has been Login.',
                'success'
              )
              window.setTimeout(function() {
                window.location.href = response.messages;
              }, 1000);
            } else {
              if (response.messages instanceof Object) {
                $("#message").html('');

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
                $(".text-danger").remove();
                $(".form-group").removeClass('has-error').removeClass('has-success');

                $("#message").html('<div class="alert alert-warning alert-dismissible" role="alert">' +
                  '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' +
                  response.messages +
                  '</div>');
              } // /else
            } // /else
          } // /if
        });

        return false;
      });
    });
  </script>

</body>

</html>