<?php 
require_once"./inc/header.php";
require_once"./config.php";
require_once"./database.php";

/**
 * Database query including here
 * */ 

 $dataBase = new Database();
 $query = "SELECT * FROM  info_users ";


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
                <form action="create.php" class="form">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input id="name" type="text" class="form-control" name="name">
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