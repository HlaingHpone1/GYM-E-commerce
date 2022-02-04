<?php
	include('../header.php');
    require_once("../dbconfig.php");

	$sql = "SELECT * FROM products";

    $result = mysqli_query($connection, $sql);
	
?>
	

		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 text-center">
					<h1 class="fw-bolder">Dashboard</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12"><a href="" class="btn btn-success mb-3 float-end"><i class="fas fa-user me-2"></i>Add Products</a></div>
				<div class="col-md-12 mb-3">
					<div class="card">
						<div class="card-header">
							<span><i class="fas fa-th me-2"></i></span> Products Data Table
						</div>

						<div class="card-body">
							<?php 
								if($result->num_rows > 0){
							?>
							<div class="table-responsive">
							<table
								id="datatable"
								class="table table-striped data-table w-100"
							>
								<thead>
									<tr>
										<th>Product No.</th>
										<th>Product Name</th>
										<th>Price</th>
										<th>Description</th>
										<th>Images</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
								
								<?php
									while($row = mysqli_fetch_assoc($result)){
								?>

								<tr>
									<td><?php echo $row['id']; ?></td>
									<td><?php echo $row['name']; ?></td>
									<td><?php echo $row['price']; ?></td>
									<td><?php echo $row['description']; ?></td>
									<td><?php echo $row['images']; ?></td>
									<td>
										<a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-primary"> <i class="far fa-edit me-2"></i>Edit</a>
										<a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"><i class="fas fa-trash me-2"></i> Delete</a>
									</td>
								</tr>
								
								<?php
									}
								?>

								</tbody>
								<tfoot>
									<tr>
                                        <th>Product No.</th>
										<th>Product Name</th>
										<th>Price</th>
										<th>Description</th>
										<th>Images</th>
										<th>Action</th>
									</tr>
								</tfoot>
							</table>
							</div>
						<?php } else{
							echo"There is no records.";
						}

						?>
						</div>
					</div>
				</div>
			</div>
		</div>

	
	<script>
		$(document).ready( function () {
			$('#datatable').DataTable();
		} );
	</script>
<?php include_once('../footer.php'); ?>
