<div class="row products-row">
	
	<div class="col-md-3 text-center search-container">
		<div class="input-group">
			<input type="text" name="search" placeholder="Search product" class="form-control" />
			<span class="input-group-btn">
				<button class="btn btn-info btn-flat" type="button">Search</button>
			</span>
		</div>
	</div>
	
	<div class="col-md-6 text-right category-container">
		<a href="<?php echo base_url('products/all'); ?>" <?php echo ( $numCategory == 0 ) ? 'class="active"' : ''; ?>>All</a>
		<?php foreach ( $arrCategories as $numKey => $oCategory ) { ?>
			<a href="<?php echo base_url('products') . '/' . $oCategory->id; ?>" <?php echo ( $numCategory == $oCategory->id ) ? 'class="active"' : ''; ?>><?php echo $oCategory->name; ?></a>
		<?php } ?>
	</div>

	<div class="col-md-3 text-right per-page-container">
		<label for="products_per_page" class="col-md-8 text-right">Show:</label>
		<div class="col-md-4">
			<input type="hidden" id="base-url" value="<?php echo base_url('products'); ?>" />
			<input type="hidden" id="category" value="<?php echo $numCategory; ?>" />
			<select name="products_per_page" class="form-control" id="select-per-page">
				<option value="5">5</option>
				<option value="10">10</option>
				<option value="15">15</option>
				<option value="20">20</option>
			</select>
		</div>
	</div>

</div>

<div class="row products-row products-table">

	<?php foreach ( $arrProducts as $numKey => $oProduct ) { ?>
		<div class="col-md-3 text-center pic-row">
			<div class="col-md-12 pic-container">
				<a href="#">
					<img src="<?php echo base_url('includes/images') . '/' . $oProduct->image; ?>" alt="<?php echo $oProduct->product_name; ?>">
				</a>
			</div>
			<div class="pic-info-container">
				<div class="col-md-12">
					<span><?php echo $oProduct->product_name; ?></span>
				</div>
				<div class="col-md-12">
					<span class="category"><?php echo $oProduct->category_name; ?></span>
				</div>
				<div class="col-md-12">
					<span class="price">$<?php echo $oProduct->price; ?></span>
				</div>
			</div>
		</div>
	<?php } ?>

</div>
<?php echo $strPagination; ?>