<div class="row">
	<div class="col-md-12">
		<h3>Billing Info</h3>
	</div>
</div>
<div class="row billing-info-container">
	<div class="col-md-6">

		<form class="form-horizontal" action="<?php echo base_url('billing/thankyou'); ?>" method="post">
		
			<div class="form-group">
				<label class="col-md-3">Order Total:</label>
				<div class="col-md-9">
					<strong>$ <?php echo number_format($numOrderTotal, 2); ?></strong>
				</div>
			</div>

			<div class="form-group">
				<label for="name" class="col-md-3">Name:</label>
				<div class="col-md-9">
					<input type="text" name="name" class="form-control" placeholder="Name" />
				</div>
			</div>

			<div class="form-group">
				<label for="address" class="col-md-3">Address:</label>
				<div class="col-md-9">
					<input type="text" name="address" class="form-control" placeholder="Address" />
				</div>
			</div>

			<div class="form-group">
				<label for="email" class="col-md-3">Email:</label>
				<div class="col-md-9">
					<input type="text" name="email" class="form-control" placeholder="Email" />
				</div>
			</div>

			<div class="form-group">
				<label for="phone" class="col-md-3">Phone:</label>
				<div class="col-md-9">
					<input type="text" name="phone" class="form-control" placeholder="Phone" />
				</div>
			</div>

			<div class="form-group">
				<div class="col-md-12 text-right">
					<button class="btn btn-success">Place order</button>
				</div>
			</div>

		</form>

	</div>
</div>