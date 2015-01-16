<div class="row">
	<div class="col-lg-12">
	    <section class="panel">
		    <header class="panel-heading">
				 User Details
			</header>
			<div class="panel-body">
			    <form class="form-horizontal tasi-form" method="post" action="<?php echo site_url('site/createusersubmit');?>">
				    <div class="form-group">
						<label class="col-sm-2 control-label">Name</label>
						<div class="col-sm-4">
						  <input type="text" id="normal-field" class="form-control" name="name" value="<?php echo set_value('name');?>" required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">DOB</label>
						<div class="col-sm-4">
						  <input type="date" id="normal-field" class="form-control" name="dob" value="<?php echo set_value('dob');?>" required>
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-2 control-label">Email</label>
						<div class="col-sm-4">
						  <input type="email" id="" name="email" class="form-control" value="<?php echo set_value('email'); ?>" required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Password</label>
						<div class="col-sm-4">
						  <input type="password" id="normal-field" class="form-control" name="password" value="" required>
						</div>
					</div>	
					<div class="form-group">
						<label class="col-sm-2 control-label">Confirm Password</label>
						<div class="col-sm-4">
						  <input type="password" id="normal-field" class="form-control" name="confirmpassword" value="" required>
						</div>
					</div>	
					<div class="form-group">
						<label class="col-sm-2 control-label">Contact No</label>
						<div class="col-sm-4">
						  <input type="number" id="" name="contactno" class="form-control" value="<?php echo set_value('contactno'); ?>">
						</div>
					</div>
					
					<div class=" form-group">
					  <label class="col-sm-2 control-label">Status</label>
					  <div class="col-sm-4">
						<?php
							
							echo form_dropdown('status',$status,set_value('status'),'class="chzn-select form-control" 	data-placeholder="Choose a Accesslevel..."');
						?>
					  </div>
					</div>
					<div class=" form-group">
					  <label class="col-sm-2 control-label">Select Accesslevel</label>
					  <div class="col-sm-4">
						<?php 	 echo form_dropdown('accesslevel',$accesslevel,set_value('accesslevel'),'class="chzn-select form-control" 	data-placeholder="Choose a Accesslevel..."');
						?>
					  </div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">&nbsp;</label>
						<div class="col-sm-4">	
							<button type="submit" class="btn btn-info">Submit</button>
						</div>
					</div>
				</form>
			</div>
		</section>
    </div>
</div>