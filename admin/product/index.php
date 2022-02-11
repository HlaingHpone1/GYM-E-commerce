<?php
	include('./header.php');
    require_once("../dbconfig.php");

	$sql = "SELECT * FROM products";

    $result = mysqli_query($connection, $sql);
	
?>
	

		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 text-center">
					<h1 class="fw-bolder">Product Dashboard</h1>
				</div>
			</div>
			<div class="row">
				<?php
					if(!empty($_SESSION['success_upload'])){
						echo $_SESSION['success_upload'];
					}
					if(!empty($_SESSION['success_update'])){
						echo $_SESSION['success_update'];
					}
					unset($_SESSION['success_update']);
					unset($_SESSION['success_upload']);
				?>
				<div class="col-md-12"><a href="./upload.php" class="btn btn-success mb-3 float-end"><i class="fas fa-user me-2"></i>Add Products</a></div>
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
									<tr class="text-center">
										<th >Product No.</th>
										<th >Product Name</th>
										<th >Price</th>
										<th >Description</th>
										<th >Review</th>
										<th >First Image</th>
										<th >Second Image</th>
										<th >Edit</th>
										<th >Delete</th>
									</tr>
								</thead>
								<tbody>
								
								<?php
									while($row = mysqli_fetch_assoc($result)){
								?>

								<tr class="text-justify">
									<td><?php echo $row['id']; ?></td>
									<td><?php echo $row['name']; ?></td>
									<td><?php echo "$".$row['price']; ?></td>
									<td class="text-break text-wrap"><?php echo $row['description']; ?></td>
									<td class="text-break text-wrap "><?php echo $row['review']; ?></td>
									<td>
										<img class="w-100 product_img" src="f_img/<?php echo $row['f_img'] ?>" alt="this is product_image">
									</td>
									<td>
										<img class="w-100 product_img" src="s_img/<?php echo $row['s_img'] ?>" alt="this is product_image">
									</td>
									<td>
										<a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-primary btn-sm"> <i class="far fa-edit me-2"></i>Edit</a>
									</td>
									<td>
										<a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash me-2"></i> Delete</a>
									</td>
								</tr>
								<?php
									}
								?>

								</tbody>
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

	<script src="../../js/jquery-3.6.0.min.js"></script>

	<script>
		$(document).ready( function () {
			$('#datatable').DataTable();
		} );
	</script>
<?php include_once('./footer.php'); ?>
