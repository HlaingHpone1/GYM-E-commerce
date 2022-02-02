<?php
    require_once("../dbconfig.php");

	$sql = "SELECT * FROM users";

    $result = mysqli_query($connection, $sql);

	include_once('../header.php');
	
?>
	
	<main class="mt-5 pt-3">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 text-center">
					<h1 class="fw-bolder">Dashboard</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 mb-3">
					<div class="card">
						<div class="card-header">
							<span><i class="bi bi-table me-2"></i></span> Data Table
						</div>
						<div class="card-body">
							<div class="table-responsive">
							<table
								id="datatable"
								class="table table-striped data-table w-100"
							>
								<thead>
									<tr>
										<th>No.</th>
										<th>Username</th>
										<th>Email</th>
										<th>Phone</th>
										<th>Password</th>
										<th>Comfirm Password</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
								
								<?php
									while($row = mysqli_fetch_assoc($result)){
								?>

								<tr>
									<td><?php echo $row['id']; ?></td>
									<td><?php echo $row['username']; ?></td>
									<td><?php echo $row['email']; ?></td>
									<td><?php echo $row['phone']; ?></td>
									<td><?php echo $row['password']; ?></td>
									<td><?php echo $row['comfirmpassword']; ?></td>
									<td>
										<a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a>
										<a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
									</td>
								</tr>
								
								<?php
									}
								?>

								</tbody>
								<tfoot>
									<tr>
										<th>No.</th>
										<th>Username</th>
										<th>Email</th>
										<th>Phone</th>
										<th>Password</th>
										<th>Comfirm Password</th>
										<th>Action</th>
									</tr>
								</tfoot>
							</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
<?php include_once('../footer.php'); ?>
