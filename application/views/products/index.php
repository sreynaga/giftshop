<div class="row products-row">
	
	<div class="col-md-3 text-center search-container">
		<form action="" method="get">
			<div class="input-group">
				<input type="text" name="query" placeholder="Search product" class="form-control" value="<?php echo $strSearch; ?>" />
				<span class="input-group-btn">
					<button class="btn btn-info btn-flat">Search</button>
				</span>
			</div>
		</form>
	</div>
	
	<div class="col-md-6 text-right category-container">
		<a href="<?php echo base_url('products/all'); ?>" <?php echo ( $numCategory == 0 ) ? 'class="active"' : ''; ?>>All</a>
		<?php foreach ( $arrCategories as $numKey => $oCategory ) { ?>
			<a href="<?php echo base_url('products') . '/' . $oCategory->id; ?>" <?php echo ( $numCategory == $oCategory->id ) ? 'class="active"' : ''; ?>><?php echo $oCategory->name; ?></a>
		<?php } ?>
	</div>

	<div class="col-md-3 text-right per-page-container">
		<form action="" id="show-products-per-page" method="post">
			<label for="products_per_page" class="col-md-7 text-right show-per-page-label">Show:</label>
			<div class="col-md-5">
				<input type="hidden" id="input-products-per-page" name="products_per_page" />
				<select name="products_per_page" class="form-control" id="select-per-page">
					<option value="5" <?php echo ( $numProductsPerPage == 5 ) ? 'selected' : ''; ?>>5</option>
					<option value="10" <?php echo ( $numProductsPerPage == 10 ) ? 'selected' : ''; ?>>10</option>
					<option value="15" <?php echo ( $numProductsPerPage == 15 ) ? 'selected' : ''; ?>>15</option>
					<option value="20" <?php echo ( $numProductsPerPage == 20 ) ? 'selected' : ''; ?>>20</option>
				</select>
			</div>
		</form>
	</div>

</div>

<div class="row products-row products-table">

	<?php if ( count($arrProducts) > 0 ) { ?>
		<?php foreach ( $arrProducts as $numKey => $oProduct ) { ?>
			<div class="col-md-3 text-center pic-row">
				<div class="product-row">
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
							<span class="price">$<?php echo number_format($oProduct->price, 2); ?></span>
						</div>
						<div class="col-md-12 product-description">
							<?php echo substr($oProduct->description, 0, 130); ?>
							...<a href="<?php echo base_url('view_products/view') . '/' . $oProduct->product_id; ?>">View more</a>
						</div>
					</div>
				</div>
			</div>
		<?php } ?>
	<?php } else { ?>
		<div class="col-md-12 no-data-row">
			<i>No data found.</i>
		</div>
	<?php } ?>

</div>

<div class="row">
	<div class="col-md-12 text-right">
		<?php echo $strPagination; ?>
	</div>
</div>