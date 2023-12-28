<?php

    $email = $title = $ingredients='';
    $errors=['email'=>'', 'title'=>'', 'ingredients'=>''];

    if (isset($_POST["submit"])) {
        
        if (empty($_POST["email"])) {
            
            $errors['email'] = "Please enter email";
        }else{
            $email = $_POST["email"];
            if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
                $errors['email'] = "Please enter a valid email";
            }
        }

        if (empty($_POST["ingredients"])) {
            
            $errors['ingredients'] = "Please enter ingredients";
        }else{
            $ingredients = $_POST["ingredients"];
            if (!preg_match("/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s*])*$/", $_POST["ingredients"])) {
                $errors['ingredients'] = "Please enter seperate with commas";
            }
        }

        if (empty($_POST["title"])) {
            
            $errors['title'] = "Please enter title";
        }else{
            $title = $_POST["title"];
            if (!preg_match("/^[a-zA-Z\s]+$/", $_POST["title"])) {
                
                $errors['title'] = "Please enter a valid title";
            }
        }
    }


?>
<!DOCTYPE html>
<html>
    
    <?php include('templates/header.php');?>

    <section class="container grey-text">
        <h4 class="center">Add a Pizza</h4>
        <form action="add.php" method="post" class="center">
            <label for="email" class="left">Enter Email</label>
            <input type="text" name="email" value="<?php echo $email;?>">
            <div class="red1"><?php echo $errors['email'];?></div>
            <label for="title" class="left">Pizza Title</label>
            <input type="text" name="title" value="<?php echo $title;?>">
            <div class="red1"><?php echo $errors['title'];?></div>
            <label for="ingredients" class="left">Ingridients (comma seperated)</label>
            <input type="text" name="ingredients"value="<?php echo $ingredients;?>">
            <div class="red1"><?php echo $errors['ingredients'];?></div>
            <div class="center">
                <input type="submit" name="submit" value="Submit" class="btn brand">
            </div>
        </form>
    </section>

    <?php include('templates/footer.php');?>
    
    </body>
</html>