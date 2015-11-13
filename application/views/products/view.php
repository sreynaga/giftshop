<div class="row">
	<div class="col-md-12">
		<h2>View product</h2>
	</div>
</div>

<div class="row-view-product">
	
	<div class="row">
		<div class="col-md-2">
			<strong>Name:</strong>
		</div>
		<div class="col-md-10">
			<?php echo $oProduct->product_name; ?>
		</div>
	</div>

	<div class="row">
		<div class="col-md-2">
			<strong>Category:</strong>
		</div>
		<div class="col-md-10">
			<?php echo $oProduct->category_name; ?>
		</div>
	</div>

	<div class="row">
		<div class="col-md-2">
			<strong>Description:</strong>
		</div>
		<div class="col-md-10">
			<?php echo $oProduct->description; ?>
		</div>
	</div>

	<div class="row">
		<div class="col-md-2">
			<strong>Price:</strong>
		</div>
		<div class="col-md-10">
			$<?php echo number_format($oProduct->price, 2); ?>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<form action="<?php echo base_url('cart/add'); ?>" method="post">
				<input type="hidden" name="id" value="<?php echo $oProduct->product_id; ?>" />
				<input type="hidden" name="name" value="<?php echo $oProduct->product_name; ?>" />
				<input type="hidden" name="price" value="<?php echo $oProduct->price; ?>" />
				<button class="btn btn-info">Add to cart</button>
			</form>
		</div>
	</div>

</div>