<?php 
require_once"./inc/header.php";
require_once"./config.php";
require_once"./database.php";

/**
 * Database query including here
 * */ 

 $dataBase = new Database();

 $notification = '';
// data create form validation
if(isset($_POST['submit'])){
    $user_name = $_POST['user_name'];
    $email = $_POST['email'];
    $skill = $_POST['skill'];

    if($user_name == "" && $email == "" && $skill == ""){
        $notification = "<p style='color: red; font-size: 20px;'>Field Mush Not be Empty!!</p>";
    }else{
        $query = "INSERT INTO  user_info (use_name, email , skill) VALUES ('$user_name', '$email', '$skill')";

        $dataBase -> insertData($query);
    }
}

?>


<div class="table-class" style="margin-top:100px">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 offset-lg-3">
                <div class="button-all">
                    <div class="btn-group">
                        <a class="btn btn-info" href="index.php">Back To Home</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-7 offset-lg-3">
                <form action="create.php" class="form" method="POST">
                    <?php if(isset( $notification )){
                        echo  $notification ; 
                    }?>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input id="name" type="text" class="form-control" name="user_name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" type="text" class="form-control" name="email">
                    </div>
                    <div class="form-group">
                        <label for="skill">Skill</label>
                        <input id="skill" type="text" class="form-control" name="skill">
                    </div>
                    <input class="form-control mt-3 btn btn-info" type="submit" name="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>
</div>







<?php
require_once"./inc/footer.php";