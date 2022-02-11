<?php
    require_once("../dbconfig.php");

	$sql = "SELECT faq.*, users.username 
	FROM  `faq` INNER JOIN users ON faq.user_id = users.id";

    $result = $connection->query($sql);

	include('./header.php');
?>

	<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 text-center">
					<h1 class="fw-bolder">FAQs Dashboard</h1>
				</div>
			</div>
			<div class="row">
				<?php
					if(!empty($_SESSION['success_faq_message'])){
						echo $_SESSION['success_faq_message'];
					}
					unset($_SESSION['success_faq_message']);
				?>
				<div class="col-md-12"><a href="./faqform.php" class="btn btn-success mb-3 float-end"><i class="fas fa-user me-2"></i>Add FAQ</a></div>
				<div class="col-md-12 mb-3">
					<div class="card">
						<div class="card-header">
							<span><i class="fas fa-th me-2"></i></span>FAQ Data Table
						</div>

						<div class="card-body">
							<?php 
								if($result->num_rows > 0){
							?>
							<div class="table-responsive">
							<table
								id="datatable"
								class="table table-striped data-table"
							>
								<thead>
									<tr class="text-center">
										<th >Question No.</th>
										<th >User Id</th>
										<th >User Name</th>
										<th >Question</th>
										<th >Answer</th>
										<th >Edit</th>
										<th >Delete</th>
									</tr>
								</thead>
								<tbody>
								
								<?php
									while($row = $result->fetch_assoc()){
								?>

								<tr class="text-justify">
									<td><?php echo $row['id']; ?></td>
									<td><?php echo $row['user_id']; ?></td>
									<td><?php echo $row['username']; ?></td>
									<td class="text-break text-wrap"><?php echo $row['question']; ?></td>
									<td class="text-break text-wrap"><?php echo $row['answer']; ?></td>
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
