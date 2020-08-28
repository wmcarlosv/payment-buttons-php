<?php include('header.php'); ?>
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h3>Ingrese un Producto de Prueba</h3>
				</div>
				<form method="POST" action="process.php">
					<div class="card-body">
						<div class="form-group">
							<label>Titulo:</label>
							<input type="text" required name="title" class="form-control">
						</div>
						<div class="form-group">
							<label>Cantidad:</label>
							<input type="number" required name="qty" class="form-control">
						</div>
						<div class="form-group">
							<label>Precio:</label>
							<input type="text" required name="price" class="form-control">
						</div>
					</div>
					<div class="card-footer text-right">
						<button class="btn btn-success">Comprar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
<?php include('footer.php'); ?>