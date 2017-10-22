
<?php 
include_once('page/header.php'); ?>

    <div class="container">
      
        <div class="row">
            <div class="col-md-6">
              <div class="center-block" style="margin-top: 60px; margin-bottom: 60px">
                <form action="<?php echo base_url('login/aksi_login'); ?>" method="post">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>
        </div>
    </div>
</div>
<br/>
<?php include_once('page/footer.php'); ?>