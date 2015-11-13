<div class="row">
	<div class="col-md-12">
		<?php //var_dump($arrCart); ?>
		<table class="table table-striped">
			<thead>
				<tr>
					<th class="text-center">#</th>
					<th class="text-center">Name</th>
					<th class="text-center">Price</th>
					<th class="text-center">Qty</th>
					<th class="text-center">Amount</th>
					<th class="text-center">Remove product</th>
				</tr>
			</thead>
			<tbody>
				<?php if ( count( $arrCart ) ) { ?>
					<?php foreach ( $arrCart as $numKey => $cart ) { ?>
						<tr>
							<td class="text-center"><?php echo $numKey + 1; ?></td>
							<td><?php echo $cart['name']; ?></td>
							<td class="text-center"><?php echo $cart['price']; ?></td>
							<td class="text-center"><?php echo $cart['qty']; ?></td>
							<td class="text-center"><?php echo number_format($cart['subtotal'], 2); ?></td>
							<td class="text-center">
								<a href="<?php echo base_url('cart/remove') . '/' . $cart['rowid']; ?>">
									<img src="<?php echo base_url('includes/images/cart_cross.jpg'); ?>" alt="remove" widtd="20" height="20" />
								</a>
							</td>
						</tr>
					<?php } ?>
					<tr>
						<td colspan="<?php echo ( $this->session->userdata('loggued') ) ? '2' : '6'; ?>">
							<strong>Order total: $<?php echo number_format($numOrderTotal, 2); ?></strong>
						</td>
						<?php if ( $this->session->userdata('loggued') ) { ?>
							<td class="text-right" colspan="4">
								<form action="<?php echo base_url('billing'); ?>" method="post">
									<button class="btn btn-success">Place order</button>
								</form>
							</td>
						<?php } ?>
					</tr>
				<?php } else { ?>
					<tr>
						<td colspan="6">No data.</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>