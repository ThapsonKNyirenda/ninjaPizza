<?php



?>
<!DOCTYPE html>
<html>
    
    <?php include('templates/header.php');?>

    <section class="container grey-text">
        <h4 class="center">Add a Pizza</h4>
        <form action="add.php" method="" class="center">
            <label for="email" class="left">Enter Email</label>
            <input type="text" name="email">
            <label for="title" class="left">Pizza Title</label>
            <input type="text" name="title">
            <label for="ingredients" class="left">Ingridients (comma seperated)</label>
            <input type="text" name="ingredients">
            <div class="center">
                <input type="submit" name="submit" value="Submit" class="btn brand">
            </div>
        </form>
    </section>

    <?php include('templates/footer.php');?>
    
    </body>
</html>