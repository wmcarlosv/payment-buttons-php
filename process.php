<?php

	include 'settings.php';
	include 'vendor/autoload.php';

	MercadoPago\SDK::setAccessToken($settings['access_token']);

	$preference = new MercadoPago\Preference();

	$title = $_POST['title'];
	$qty = $_POST['qty'];
	$price = $_POST['price'];
	$total = $qty * $price;

	$preference->back_urls = array(
		'success' => $settings['success'],
		'failure' => $settings['failure'],
		'pending' => $settings['pending']
	);

	$item = new MercadoPago\Item();
	$item->title = $title;
	$item->quantity = $qty;
	$item->unit_price = $price;
	$preference->items = array($item);
	$preference->save();

	include 'header.php';
?>

	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h3>Confirmacion de Pedido</h3>
				</div>
				<div class="card-body">
					<table class="table table-bordered table-striped">
						<thead>
							<th>Producto</th>
							<th>Cantidad</th>
							<th>Precio</th>
							<th>Total</th>
						</thead>
						<tbody>
							<tr>
								<td><?=$title?></td>
								<td><?=$qty?></td>
								<td><?=$price?></td>
								<td><?=$total?></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="card-footer text-right">
					<form action="payment.php" method="POST" style="display: inline;">
					  <script
					   src="https://www.mercadopago.com.ar/integrations/v1/web-payment-checkout.js"
					   data-preference-id="<?php echo $preference->id; ?>">
					  </script>
					</form>
					<a class="btn btn-danger" href="index.php">Cancelar</a>
				</div>
			</div>
		</div>
	</div>

<?php include 'footer.php'; ?>