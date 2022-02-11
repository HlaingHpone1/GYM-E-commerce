<?php
    require_once("../dbconfig.php");
    
    $id = $_GET['id'];
	$sql = "SELECT faq.*, users.username 
	FROM  `faq` INNER JOIN users ON faq.user_id = users.id WHERE faq.id=".$id;

    $result = mysqli_query($connection, $sql);
    $row = mysqli_fetch_assoc($result);

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $id = $_GET['id']; 

        $user_id = $_POST['user_id'];
        $question = $_POST['question'];
        $answer = $_POST['answer'];


        $sql = "UPDATE `faq` SET `user_id` = '$user_id', `question` = '$question', `answer` ='$answer' WHERE `faq`.`id` = ".$id;

        $result = mysqli_query($connection, $sql);

        if(!$result){
            echo $connection->error;
        }else{
            header('location:index.php');
        }
        $connection->close();
    }

include('./header.php');
?>

	<div class="container-fluid">
			<div class="row mb-5">
				<div class="col-md-12 text-center">
					<h1 class="fw-bolder">Edit FAQ</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 offset-md-2">
                    <form action="?id=<?php echo $row['id']; ?>" method="POST" enctype="multipart/form-data">
                        <?php
                            $user_sql = "SELECT * FROM users";
                            $user_result = $connection->query($user_sql); 
                        ?>
                        <div class="form-floating mb-3">
                            
                            <select class="form-select" name="user_id" id="floatingSelect" aria-label="Floating label select example">
                            <?php
                                if($user_result->num_rows > 0){
                                    while($user_row = mysqli_fetch_assoc($user_result)){
                                    ?>
                                <option value="<?php echo $user_row['id']; ?>" <?php echo ($user_row['id'] == $row['user_id'])?"selected":"" ?> >
                                <?php echo $user_row['username']; ?>
                                </option>
                                <?php
                                    }
                                }else{
                                    echo"There is No record";
                                }
                                ?>
                            </select>
                            <label for="floatingSelect">User Name</label>
                        </div>
                        <div class="form-floating mb-3 textaera">
                            <textarea name="question" class="form-control" placeholder="Leave a comment here" id="floatingTextarea">
                                <?php echo $row['question']; ?>
                            </textarea>
                            <label for="floatingTextarea">Question</label>
                        </div>
                        <div class="form-group mb-3">
                            <label for="floatingTextarea">Answer</label>
                            <textarea class="form-control" placeholder="Product Deatails" id="ckeditor" name="answer">
                                <?php echo $row['answer']; ?>
                            </textarea>
                        </div>
                        <input class="btn login_btn" type="submit" value="Submit">
                    </form>
                </div>
			</div>
	</div>

<?php include_once('./footer.php'); ?>
