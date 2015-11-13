<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-5">
		<?php if ($this->session->flashdata('strError')) { ?>
			<label class="error"><?php echo $this->session->flashdata('strError'); ?></label>
		<?php } ?>

		<form class="form-horizontal" action="<?php echo base_url('users/login'); ?>" method="post">
			
			<div class="form-group">
				<label for="username" class="col-md-2 control-label">Username</label>
				<div class="col-md-10">
					<input type="text" name="username" placeholder="Username" class="form-control" />
				</div>
			</div>

			<div class="form-group">
				<label for="password" class="col-md-2 control-label">Password</label>
				<div class="col-md-10">
					<input type="password" name="password" placeholder="Password" class="form-control" />
				</div>
			</div>

			<div class="form-group text-right">
				<div class="col-md-12">
					<button class="btn btn-success">Login</button>
				</div>
			</div>

		</form>
	</div>
	<div class="col-md-4"></div>
</div>