
<?php
$title = 'Admin';
 include_once('page/a_header.php') ?>

	<div class="container">
			
			<h1>Welcome back, Mr. <?php echo $data->uname; ?></h1>
			
		<div class="row white">
			<div class="col-md-6">
				<div class="text-center"><h3><b>Contact</b></h3></div>
				<table class="table table-striped table-inverse">
				  <thead>
				    <tr>
				      <th>id</th>
				      <th>Name</th>
				      <th>Email</th>
				      <th>Subject</th>
				    </tr>
				  </thead>
				  <tbody>
				   <?php foreach($post as $post){ ?>
				    <tr>
				      <th scope="row"><?php echo $post->id; ?></th>
				      <td><?php echo $post->nama; ?></td>
				      <td><?php echo $post->mail; ?></td>
				      <td><?php echo $post->sub_pesan; ?></td>
				    </tr>
				   <?php } ?>

				  </tbody>

				</table>	
				  <div class="center"><a href="#" class="button btn-solid">View all message</a></div>			
			</div>
			<div class="col-md-6">
				<div class="text-center"><h3>Blog</h3></div>
				<table class="table table-striped table-inverse">
				  <thead>
				    <tr>
				      <th>id</th>
				      <th>Judul</th>
				     
				      <th>Categories</th>
				    </tr>
				  </thead>
				  <tbody>
			  	 <?php foreach($blog as $blog){ ?>
				    <tr>
				      <th scope="row"><?php echo $blog->id; ?></th>
				      <td><?php echo $blog->judul; ?></td>
				    
				      <td><?php echo $blog->categories; ?></td>
				    </tr>
				   <?php } ?>
				  </tbody>
				</table>	
				 <div class="center"><a href="#" class="button btn-solid">View all post</a></div>			
			</div>

			<div class="col-md-12">
				<div style="height: 30px"></div>
				<div class="text-center"><h3>Mail Contact</h3></div>
				<table class="table table-striped table-inverse">
				  <thead>
				    <tr>
				      <th>#</th>
				      <th>First Name</th>
				      <th>Last Name</th>
				      <th>Username</th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				      <th scope="row">1</th>
				      <td>Mark</td>
				      <td>Otto</td>
				      <td>@mdo</td>
				    </tr>
				    <tr>
				      <th scope="row">2</th>
				      <td>Jacob</td>
				      <td>Thornton</td>
				      <td>@fat</td>
				    </tr>
				    <tr>
				      <th scope="row">3</th>
				      <td>Larry</td>
				      <td>the Bird</td>
				      <td>@twitter</td>
				    </tr>
				  </tbody>
				</table>				
			</div>
		</div>
		
	</div>
<?php include_once('page/footer.php') ?>