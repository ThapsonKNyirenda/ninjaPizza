<?php

    $email = $title = $ingredient='';
    $errors=['email'=>'', 'title'=>'', 'ingredient'=>''];

    if (isset($_POST["submit"])) {
        
        if (empty($_POST["email"])) {
            
            $errors['email'] = "Please enter email";
        }else{
            if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
                $errors['email'] = "Please enter a valid email";
            }else{
                $email = $_POST["email"];
            }
        }

        if (empty($_POST["title"])) {
            
            $errors['title'] = "Please enter title";
        }else{
            if (preg_match("/^[a-zA-Z\s]+$/", $_POST["title"])) {
                $errors['title'] = "Please enter a valid title";
            }else{
                $title = $_POST["title"];
            }
        }

        if (empty($_POST["title"])) {
            
            $errors['title'] = "Please enter title";
        }else{
            if (preg_match("/^[a-zA-Z\s]+$/", $_POST["title"])) {
                $errors['title'] = "Please enter a valid title";
            }else{
                $title = $_POST["title"];
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
            <input type="email" name="email" value="<?php echo $email;?>">
            <div class="red1"><?php echo $errors['email'];?></div>
            <label for="title" class="left">Pizza Title</label>
            <input type="text" name="title" value="<?php echo $title;?>">
            <div class="red1"><?php echo $errors['title'];?></div>
            <label for="ingredients" class="left">Ingridients (comma seperated)</label>
            <input type="text" name="ingredients"value="<?php echo $ingredient;?>">
            <div class="red1"><?php echo $errors['ingredient'];?></div>
            <div class="center">
                <input type="submit" name="submit" value="Submit" class="btn brand">
            </div>
        </form>
    </section>

    <?php include('templates/footer.php');?>
    
    </body>
</html>