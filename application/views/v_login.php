
<?php 
include_once('page/header.php'); ?>

    <div class="container">
      
        <div class="row">
            <div class="col-md-6">
              <div class="center-block" style="margin-top: 60px; margin-bottom: 60px">
                  <div id="error">
          <!-- error will be shown here ! -->
                   </div>
                <form class="form-horizontal" id="login-form" method="post">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                      <input type="email" class="contact-email" id="email" name="email" />
                    </div> 
                     <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                  </div> 
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-10">
                      <input type="password" class="contact-email" id="password" name="password" />
                    </div> 
                  </div> 
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                      <button type="submit" id="btn-login" class="button solid-button purple">Login</button>
                    </div> 
                  </div> 
                </form>
              </div>
        </div>
    </div>
</div>
<br/>
<?php include_once('page/footer.php'); ?>