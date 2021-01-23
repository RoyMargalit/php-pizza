<?php
include('./config/db_connect.php');
//query for pizzas
$sql = 'SELECT title, ingredients, id FROM pizzas ORDER BY created_at';
//make query and get results
$result = mysqli_query($conn, $sql);
//fetch the resulting rows
$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);
//free result from memory
mysqli_free_result($result);
//close connection with db
mysqli_close($conn);
// print_r($pizzas);
// explode(',', $pizzas[0]['ingredients']);
?>

<!DOCTYPE html>
<html lang="en">
<?php include('templates/header.php') ?>
<h4 class="center gret-text">Pizzas!</h4>
<div class="container">
    <div class="row">
        <?php
        foreach ($pizzas as $pizza) : ?>
            <div class="col s6 md3">
                <div class="card z-depth-0">
                    <img class="pizza-img" src="./img/pizza.svg">
                    <div class="card-content center">
                        <h6><?php echo htmlspecialchars($pizza['title']); ?></h6>
                        <ul>
                            <?php foreach (explode(',', $pizza['ingredients']) as $ing) :; ?>
                                <li><?php echo htmlspecialchars($ing) ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="card-action right-align">
                        <a href="details.php?id=<?php echo $pizza['id']; ?>" class="brand-text">more info</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <div>
        <p><?php echo count($pizzas) > 2 ? 'there are 2 or more pizzas' : 'there are less than 2 pizzas'; ?></p>
    </div>
</div>
<?php include('templates/footer.php') ?>
</body>

</html>