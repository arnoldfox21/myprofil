
<div class="leave-comment">
	<h4>Leave A Comment</h4>
	<div class="inner">
		<form name="blog" class="form-horizontal">
			<input type="hidden" value="<?php echo $data->id; ?>" id="pid">
			<input type="hidden" value="0" id="comit">
			<div class="form-group">
				<label class="col-sm-2 control-label">Name</label>
				<div class="col-sm-10">
					<input type="text" class="contact-name" id="nama" />
				</div>
			</div> 
			<div class="form-group">
				<label class="col-sm-2 control-label">Email</label>
				<div class="col-sm-10">
					<input type="email" class="contact-email" id="mail" />
				</div>
			</div> 
			<div class="form-group">
				<label class="col-sm-2 control-label">Message</label>
				<div class="col-sm-10">
					<textarea name="comment_id" id="comment_id" class="contact-message" rows="5"></textarea>
					<?php echo $smiley_table; ?>
				</div> 
			</div>
			<div class="form-group">
				<div class="col-sm-2"></div>
				<div class="col-sm-6">
					<div class="g-recaptcha" data-sitekey="6LfVlzQUAAAAAH2gVmIAiWdbEf0CzCNSGno-r6vn"></div>
				</div> 
			</div> 
			<div class="form-group">
				<div class="col-sm-10 col-sm-offset-2">
					<button type="button" id="submit" onclick="myFuckcomment()" class="button solid-button purple">
						<i id="delta" class="fa hidden fa-refresh fa-spin fa-3x fa-fw"></i> Send Message</button>
					
				</div> 
			</div> 
		<div id="alpha" class="contact-success hidden form-group alert alert-success form-alert">
			<span class="message">Success!</span>
			<button type="button" class="close" data-hide="alert" aria-label="Close"><i class="fa fa-times"></i></button>
		</div>
		<div id="beta" class="contact-failed hidden form-group alert alert-danger form-alert">
			<span class="message">Gagal!</span>
			<button type="button" class="close" data-hide="alert" aria-label="Close"><i class="fa fa-times"></i></button>
		</div>
		</form>
	</div> 
</div> 

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>