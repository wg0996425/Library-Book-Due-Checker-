<!-- W. VIKTOR GRAY -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>FORM</title>
</head>

<body>
    <!-- Remember: It's required that you have a 'name="id"' in the input! I spent 2 hours figuring out why it
    wasn't working :( -->
    <form class="container mt-5 mb-5 w-50" action="index.php" method="get">
        <!-- RETURN DATE -->
        <div class="mb-3">
            <label for="returnDate" class="form-label">Return Date:</label>
            <input type="date" class="form-control" id="returnDate" name="returnDate" aria-describedby="returnDate" required>
        </div>
        <!-- DUE DATE -->
        <div class="mb-3">
            <label for="dueDate" class="form-label">Due Date:</label>
            <input type="date" class="form-control" id="dueDate" name="dueDate" required>
        </div>
        <!-- SUBMIT BUTTON -->
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>

</html>