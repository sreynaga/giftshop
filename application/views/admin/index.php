<div class="row">
	<div class="col-md-12">
		<button class="btn btn-success">Add new product</button>
	</div>
</div>

<?php //var_dump($arrProducts); ?>

<div class="container-products-table">
	
	<table class="table table-hover">
		<thead>
			<tr>
				<th class="text-center">#</th>
				<th class="text-center">Name</th>
				<th class="text-center">Description</th>
				<th class="text-center">Price</th>
				<th class="text-center">Category</th>
				<th class="text-center">Options</th>
			</tr>
		</thead>
		<tbody>
			<?php if ( count( $arrProducts ) ) { ?>
				<?php foreach ( $arrProducts as $numKey => $oProduct ) { ?>
					<tr>
						<td class="text-center"><?php echo $numKey + 1; ?></td>
						<td><?php echo $oProduct->product_name; ?></td>
						<td><?php echo substr($oProduct->description, 0, 100); ?>...</td>
						<td class="text-center">$<?php echo number_format($oProduct->price, 2); ?></td>
						<td class="text-center"><?php echo $oProduct->category_name; ?></td>
						<td class="text-center">
							<a href="#">
								<i class="glyphicon glyphicon-edit"></i>
							</a>
							<a href="#">
								<li class="glyphicon glyphicon-trash"></li>
							</a>
						</td>
					</tr>
				<?php } ?>
			<?php } else { ?>
				<tr>
					<td colspan="5">No data.</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>

</div>