<?php 
require_once"./inc/header.php";
require_once"./config.php";
require_once"./database.php";

/**
 * Database query including here
 * */ 

 $dataBase = new Database();
 $query = "SELECT * FROM  user_info ";

//  get selected method here
$result = $dataBase -> selected($query);


?>

<?php 
/**
 * get data urlencode 
 * */ 

 if(isset($_GET['msg'])){
    $notification = "<p style='color=green; font-size:20px;'>{$_GET['msg']}</p>";
 }


?>


<div class="table-class" style="margin-top:100px">
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <div class="button-all">
                    <div class="btn-group">
                        <a class="btn btn-info" href="create.php">Add User</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="row">
                <div class="col-lg-10">
                    <?php if($notification){ echo $notification; } ?>
                </div>
            </div>
            <div class="col-lg-10">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Skill</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if($result): ?>
                            <?php while($data = $result -> fetch_assoc()): ?>
                        <tr>
                            <td><?php echo $data['id']?></td>
                            <td><?php echo $data['use_name']?></td>
                            <td><?php echo $data['email']?></td>
                            <td><?php echo $data['skill']?></td>
                            <td><a style="color: green;" href="update.php?id=<?php echo $data['id']?>">Edit</a> | <a style="color:red;" href="delete.php?id=<?php echo $data['id']?>">Delete</a></td>
                        </tr>
                        <?php endwhile; ?>
                        <?php else: ?>
                            <p>Connection Invalidation Here Now</p>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>







<?php
require_once"./inc/footer.php";