<?php

    include("config/connection.php");

    if(isset($_GET["id"])){
        $id = mysqli_real_escape_string($conn,$_GET["id"]);
        
        // query
        $sql = "SELECT * FROM pizzas WHERE id = $id";
        $result = mysqli_query($conn,$sql);
        $pizza=mysqli_fetch_assoc($result);
        // print_r($pizza);
        // echo $pizza['title'];
        // die;
    }else{
        echo "Not set to get request";
    }


?>

<!DOCTYPE html>
<html lang="en">
<body>
    <?php include("templates/header.php") ?>

    <div class="container center">
        <?php if($pizza):?>
            <div class="container center">
                <h4><?php echo $pizza['title'];?></h4>
                <p><?php echo $pizza['email'];?></p>
                <p><?php echo $pizza['ingredients'];?></p>
                <p><?php echo $pizza['created_at'];?></p>
            </div>
            
        <?php else:?>
            <h4>No Pizza Available</h4>
        <?php endif;?>
    </div>
    
    <br>
    <hr>
    <?php include("templates/footer.php") ?>

</body>
</html>