<?php require('./header.php');
    require('../dbconfig.php');

    error_reporting(0);

    $sql = "SELECT * FROM `users`";
    $result = $connection->query($sql);

    if($_SERVER['REQUEST_METHOD'] == 'POST' AND !empty($_POST)){
        $user_id = $_POST['user_id'];
        $question = $_POST['question'];
        $answer = $_POST['answer'];

        if(empty($user_id)){
            $errors[] = "User Name Field is Required<br/>";
        }

        if(empty($question)){ 
            $errors[] = "Question Field is Required<br/>";
        }

        if(empty($answer)){
            $errors[] =  "Answer Field is Required<br/>";
        }

        if(empty($errors)){
            $insertsql = "INSERT INTO `faq` (`user_id`, `question`, `answer`)
            VALUES ('$user_id', '$question', '$answer');
            ";

            $insertresult = $connection->query($insertsql);
        
            if(!$insertresult){
                echo $connection->error;
            }else{
                header('location:index.php');
            }
            $messages[] = "Create FAQ Successful!!!";
        }
        $connection->close();
    }

?>

<div class="container-fluid">
    <div class="row mb-5">
        <div class="col-md-12 text-center fw-bolder fs-1">FAQ Entry</div>
    </div>
    <div class="row">
        
        <div class="col-md-8 offset-md-2">
                <?php
                    if(!empty($errors)){
                        foreach($errors as $error){
                            echo "<p class='text-danger'>". $error ."</p>";
                        }
                    }

                    if(!empty($messages)){
                        foreach ($messages as $message) {
                            $success = "<p class='text-success fs-4'>". $message."</p>";
                        }
                        $_SESSION['success_faq_message'] = $success;
                    }
                    ?>
            <form action="" method="POST" enctype="multipart/form-data">
                
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