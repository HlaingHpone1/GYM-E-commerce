<?php
	include('./header.php');
    require_once("../dbconfig.php");

	$sql = "SELECT * FROM users";

    $result = mysqli_query($connection, $sql);
	
?>
	<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 text-center">
					<h1 class="fw-bolder">Users Data Dashboard</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12"><a href="" class="btn btn-success mb-3 float-end"><i class="fas fa-user me-2"></i>Add User</a></div>
				<div class="col-md-12 mb-3">
					<div class="card">
						<div class="card-header">
							<span><i class="fas fa-th me-2"></i></span>User Data Table
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
										<th >No.</th>
										<th >Username</th>
										<th >Email</th>
										<th >Phone</th>
										<th >Password</th>
										<th >Comfirm Password</th>
										<th >Edit</th>
										<th >Delete</th>
									</tr>
								</thead>
								<tbody>
								
								<?php
									while($row = mysqli_fetch_assoc($result)){
								?>

								<tr class="text-center">
									<td class="text-break"><?php echo $row['id']; ?></td>
									<td class="text-break"><?php echo $row['username']; ?></td>
									<td class="text-break"><?php echo $row['email']; ?></td>
									<td class="text-break"><?php echo $row['phone']; ?></td>
									<td class="text-break"><?php echo $row['password']; ?></td>
									<td class="text-break"><?php echo $row['comfirmpassword']; ?></td>
									<td >
										<a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-primary btn-sm"> <i class="far fa-edit me-2"></i>Edit</a>
									</td>
									<td >
										<a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash me-2"></i> Delete</a>
									</td>
								</tr>
								
								<?php
									}
								?>

								</tbody>
								<tfoot>
									<tr class="text-center">
										<th >No.</th>
										<th >Username</th>
										<th >Email</th>
										<th >Phone</th>
										<th >Password</th>
										<th >Comfirm Password</th>
										<th >Edit</th>
										<th >Delete</th>
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
	
	<script src="../../js/jquery-3.6.0.min.js"></script>
	<script type="text/javascript">
		$(document).ready( function () {
			$('#datatable').DataTable();
		} );
	</script>

<?php include_once('./footer.php'); ?>
