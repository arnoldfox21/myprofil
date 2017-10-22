
<!DOCTYPE html>
<html>
<head>
  <title>Data Post</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/v_post/css/bootstrap.css">
  <link rel="shortcut icon" href="#">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/v_post/css/froala_editor.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/v_post/css/froala_style.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/v_post/css/plugins/code_view.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/v_post/css/plugins/image_manager.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/v_post/css/plugins/image.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/v_post/css/plugins/table.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/v_post/css/plugins/video.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/v_post/css/cloudflare.css">
  

  <style>

    div#editor {
      width: 81%;
      margin: auto;
      text-align: left;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
   
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Hexca Administrator</a>
    </div>

    
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="../?page=data-post">Data Blog<span class="sr-only">(current)</span></a></li>
        <li><a href="#">User</a></li>

      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
       
        <li><img src="../images/s.jpg" width="42" style="margin-top: 5px" class="img-circle"></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">saya <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Edit Profil</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="../../engine/access.php?logout">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


<div class="container">
	 	
	 	<div class="row">
	 	<div class="col-md-12">

		        <form method="post" action="<?php echo base_url() ?>crud/add_post">
              		<div class="form-group">
              			<label>Judul</label>
              			
                    <input type="text" class="form-control" value="" style="width: 300px" name="judul">
               
              		</div>
		
	                <div class="left">
                      <div id="editor">
                          <textarea id='edit' name="isi" style="margin-top: 30px;" placeholder="Type some text">
                          </textarea>

                      </div>
                  </div>     
                    <input type="submit" value="submit" class="btn btn-success" name="submit">
    
             </form>
            </div>
          </div>
          </div>            
		




  <script type="text/javascript" src="<?php echo base_url() ?>asset/v_post/js/cloudflare.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>asset/v_post/js/cloudflare2.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>asset/v_post/js/cloudflare3.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>asset/v_post/js/froala_editor.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>asset/v_post/js/plugins/align.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>asset/v_post/js/plugins/code_beautifier.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>asset/v_post/js/plugins/code_view.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>asset/v_post/js/plugins/draggable.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>asset/v_post/js/plugins/image.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>asset/v_post/js/plugins/image_manager.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>asset/v_post/js/plugins/link.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>asset/v_post/js/plugins/lists.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>asset/v_post/js/plugins/paragraph_format.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>asset/v_post/js/plugins/paragraph_style.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>asset/v_post/js/plugins/table.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>asset/v_post/js/plugins/video.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>asset/v_post/js/plugins/url.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>asset/v_post/js/plugins/entities.min.js"></script>

  <script>
      $(function(){
        $('#edit')
          .on('froalaEditor.initialized', function (e, editor) {
            $('#edit').parents('form').on('submit', function () {
              console.log($('#edit').val());
              return false;
            })
          })
          .froalaEditor({enter: $.FroalaEditor.ENTER_P, placeholderText: null})
      });
  </script>

<footer class="footer">
   
    </footer>
<!-- <script type="text/javascript" src="js/jquery.js"></script> -->
<script type="text/javascript" src="<?php echo base_url() ?>asset/v_post/js/bootstrap.js"></script>


</body>
</html>