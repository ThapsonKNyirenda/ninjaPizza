<?php

    include("config/connection.php");

    $sql= "SELECT* FROM pizzas ORDER BY created_at";
    $result = mysqli_query($conn, $sql);

    $pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);
    // print_r($pizzas);

    mysqli_free_result($result);
    mysqli_close($conn);



?>
<!DOCTYPE html>
<html>
    
    <?php include('templates/header.php');?>

    <h4 class="center grey-text">Pizzas</h4>

    <div class="container">
        <div class="row">
            <?php foreach($pizzas as $pizza ){?>
                <div class="col s6 md3">
                    <div class="card z-depth-0">
                        <div class="card-content center">
                            <h5>
                                <?php echo htmlspecialchars($pizza['title']);?>
                            </h5>
                            <div>
                                <ul>
                                    <?php 
                                    foreach(explode(',', $pizza['ingredients']) as $ing): ?>

                                    <li>
                                        <?php echo $ing;?>
                                    </li>

                                    <?php endforeach;?>
                                        
                                </ul>
                                
                            </div>

                        </div>

                        <div class="card-action right-align">
                            <a class="brand-text" href="details.php?id=<?php echo $pizza['id']; ?>">More Info</a>
                        </div>
                    </div>
                </div>
            <?php }?>
        </div>
    </div>

    <br>
    <hr>
    <?php include('templates/footer.php');?>
    
    </body>
</html>