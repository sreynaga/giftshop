<div class="row products-row">
	
	<div class="col-md-4 text-center search-container">
		<div class="input-group">
			<input type="text" name="search" placeholder="Search product" class="form-control" />
			<span class="input-group-btn">
				<button class="btn btn-info btn-flat" type="button">Search</button>
			</span>
		</div>
	</div>
	
	<div class="col-md-5 text-center category-container">
		<a href="#">Acústica</a>
		<a href="#">Electroacústica</a>
		<a href="#">Electrica</a>
	</div>

	<div class="col-md-3 text-right per-page-container">
		<label for="products_per_page" class="col-md-8 text-right">Show:</label>
		<div class="col-md-4">
			<select name="products_per_page" class="form-control">
				<option value="1">5</option>
				<option value="2">10</option>
				<option value="3">15</option>
				<option value="4">20</option>
			</select>
		</div>
	</div>

</div>

<div class="row products-row products-table">
	<div class="col-md-3 text-center pic-row">
		<div class="col-md-12 pic-container">
			<a href="#">
				<img src="<?php echo base_url('includes/images/products/guitarra1.png'); ?>" alt="guitarra acustica yahama c40" />
			</a>
		</div>
		<div class="pic-info-container">
			<div class="col-md-12">
				<span>Guitarra 1</span>
			</div>
			<div class="col-mod-12">
				<span class="price">$1,890.00</span>
			</div>
		</div>
	</div>
	<div class="col-md-3 text-center pic-row">
		<div class="pic-container">
			<a href="#">
				<img src="<?php echo base_url('includes/images/products/guitarra2.jpg'); ?>" alt="guitarra electroacustica fender cd60" />
			</a>
		</div>
		<div class="pic-info-container">
			<div class="col-md-12">
				<span>Guitarra 2</span>
			</div>
			<div class="col-mod-12">
				<span class="price">$4,390.00</span>
			</div>
		</div>
	</div>
	<div class="col-md-3 text-center pic-row">
		<div class="pic-container">
			<a href="#">
				<img src="<?php echo base_url('includes/images/products/guitarra3.jpg'); ?>" alt="guitarra fender coronado II" />
			</a>
		</div>
		<div class="pic-info-container">
			<div class="col-md-12">
				<span>Guitarra 3</span>
			</div>
			<div class="col-mod-12">
				<span class="price">$8,390.00</span>
			</div>
		</div>
	</div>
	<div class="col-md-3 text-center pic-row">
		<div class="pic-container">
			<a href="#">
				<img src="<?php echo base_url('includes/images/products/guitarra4.jpg'); ?>" alt="guitarra fender telecaster cabronita" />
			</a>
		</div>
		<div class="pic-info-container">
			<div class="col-md-12">
				<span>Guitarra 4</span>
			</div>
			<div class="col-mod-12">
				<span class="price">$11,590.00</span>
			</div>
		</div>
	</div>
	<div class="col-md-3 text-center pic-row">
		<div class="pic-container">
			<a href="#">
				<img src="<?php echo base_url('includes/images/products/guitarra5.jpg'); ?>" alt="guitarra fender coronado II" />
			</a>
		</div>
		<div class="pic-info-container">
			<div class="col-md-12">
				<span>Guitarra 5</span>
			</div>
			<div class="col-mod-12">
				<span class="price">$8,390.00</span>
			</div>
		</div>
	</div>
</div>