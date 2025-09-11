<!-- W. VIKTOR GRAY -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>WVG Library Book Due Checker</title>
</head>

<body style="background:gainsboro ; color:darkslategray">
    <h1 class="mt-3 mx-6 text-center">Library Book Due Checker</h1>
    
    <!-- All this php does is call both form.php and functions.php into use. You can visibly
    see form.php as opposed to functions.php, but functions.php is still neccessary to be called 
    because of its function. -->
    <?php 
        require 'form.php';
        require 'functions.php';
    ?>

    <!-- The function call and output return is separated so that I can add bootstrap to it. 
    Is it the best way to do this? No. Does it work? Yes. -->
    <h3 class="pt-1 text-center fw-light fst-italic">
        <?php 
            echo 'Return Date: ' . $_GET['returnDate'] . '<br>';
            echo 'Due Date: ' . $_GET['dueDate'] . '<br>';
        ?>
    </h3>
    <h2 class="pt-2 text-center fw-light">
        <?php checkDueDate() ?>
    </h2>
</body>

</html>