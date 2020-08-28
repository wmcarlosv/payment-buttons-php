<?php include '../header.php'; ?>
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h3>Operacion Pendiente</h3>
				</div>
				<div class="card-body">
					<table class="table table-bordered table-striped">
						<?php foreach($_REQUEST as $key => $value): ?>
							<tr>
								<td><?=$key?>:</td>
								<td><?=$value?></td>
							</tr>
						<?php endforeach ?>
					</table>
				</div>
				<div class="card-footer text-right">
					<a class="btn btn-success" href="../index.php">Volver a Producto</a>
				</div>
			</div>
		</div>
	</div>
<?php include '../footer.php'; ?>