<?php require('./header.php'); ?>
        <div class="container-fluid mybg-dark">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="faq-title text-center pb-3">
                        <h1 class="text-white fw-bolder">FAQ</h1>
                    </div>
                </div>
                <div class="col-md-6 offset-md-3">
                    <?php 
                        require('./admin/dbconfig.php');
                        $sql = "SELECT faq.*, users.username
                        FROM  `faq` INNER JOIN users ON faq.user_id = users.id";

                        $result = mysqli_query($connection, $sql);

                    ?>
                    <?php
                        if($result->num_rows > 0){
                    ?>
                        <?php
                            while($row = mysqli_fetch_assoc($result)){
                        ?>
                    <details class="mb-5 w-100">
						<summary class="fw-bolder"><?php echo $row['question']; ?></summary>
						<p class="faq_text">
                            <?php echo $row['answer']; ?>
						</p>
					</details>
                    <?php
                    }
                ?>
                </div>
                

                <?php  
                    }
                ?>
            </div>
        </div>



<?php require("./footer.php") ?>