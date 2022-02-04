<?php require('../header.php'); ?>

<div class="container-fluid">
    <div class="row mb-5">
        <div class="col-md-12 text-center fw-bolder fs-1">FAQ Entry</div>
    </div>
    <div class="row">
        <div class="col-md-8 offset-md-3">
            <form action="">
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">User Name</label>
                </div>
                <div class="form-floating mb-3">
                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    <label for="floatingSelect">Works with selects</label>
                </div>
                <div class="form-floating mb-3 textaera">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                    <label for="floatingTextarea">Question</label>
                </div>
                <div class="form-floating mb-3 textaera textaera1">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"></textarea>
                    <label for="floatingTextarea2">Answer</label>
                </div>
                <input class="btn btn-primary" type="submit" value="Submit">
            </form>
        </div>
    </div>
</div>




<?php require('../footer.php'); ?>