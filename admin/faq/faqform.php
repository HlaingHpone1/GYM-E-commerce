<?php require('./header.php');
    require('../dbconfig.php');

    $sql = "SELECT * FROM `users`";
    $result = mysqli_query($connection, $sql);

?>

<div class="container-fluid">
    <div class="row mb-5">
        <div class="col-md-12 text-center fw-bolder fs-1">FAQ Entry</div>
    </div>
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <form action="./create.php" method="POST" enctype="multipart/form-data">
                
                <div class="form-floating mb-3">
                    <select class="form-select" name="user_id" id="floatingSelect" aria-label="Floating label select example">
                        <option selected disabled>Open this select users</option>

                        <?php
                            while($row = mysqli_fetch_assoc($result)){
							?>
                        <option value="<?php echo $row['id']; ?>">
                        <?php echo $row['username']; ?>
                        </option>
                        <?php
							}
						?>
                    </select>
                    <label for="floatingSelect">User Name</label>
                </div>
                <div class="form-floating mb-3">
                    <textarea name="question" class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                    <label for="floatingTextarea">Question</label>
                </div>
                <div class="form-group mb-3">
                    <label for="floatingTextarea">Answer</label>
                    <textarea class="form-control" placeholder="Product Deatails" id="ckeditor" name="answer"></textarea>
                </div>
                <input class="btn login_btn" type="submit" value="Submit">
            </form>
        </div>
    </div>
</div>




<?php require('./footer.php'); ?>