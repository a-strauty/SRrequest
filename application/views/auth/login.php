      <div class="container">
          <div class="row">
              <div class="col-md-4 col-md-offset-4">
                  <div class="login-panel panel panel-default">
                      <div class="panel-heading">
                          <h3 class="panel-title">Please Sign In</h3>
                      </div>
                      <div class="panel-body">
                            <?php echo form_open("auth/login");?>
                              <fieldset>
                                  <div class="form-group">
                                      <?php echo lang('login_identity_label', 'identity');?>
                                      <?php echo form_input($identity);?>
                                  </div>
                                  <div class="form-group">
                                      <?php echo lang('login_password_label', 'password');?>
                                      <?php echo form_input($password);?>
                                  </div>
                                  <div class="checkbox">
                                    <label>
                                      <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?> Remember Me
                                    </label>
                                  </div>
                                  <?php echo form_submit('submit', lang('login_submit_btn'), 'class="btn btn-lg btn-success btn-block"');?>

                              </fieldset>
                           <?php echo form_close();?>
                          <p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>
                          <p><?php echo anchor('', 'Back') ?>
                      </div>
                  </div>
              </div>
          </div>
      </div>
