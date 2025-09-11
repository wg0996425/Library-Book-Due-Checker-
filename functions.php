<!-- W. VIKTOR GRAY -->

<?php
    // Only runs if there is a get. Otherwise, the function is never created
    if ($_GET) {
        function checkDueDate()
        {
            // Sets the $returnDate and $dueDate with a small if statement
            $returnDate = isset($_GET['returnDate']) ? date_create($_GET['returnDate']) : '';
            $dueDate = isset ($_GET['dueDate']) ? date_create($_GET['dueDate']) : '';

            //
            

            // Basically a switch/match statement. I think an if/elif statement does it better
            // as I don't have to call any variables to match
            if ($returnDate > $dueDate) {
                // date_diff is new! It's not a string, but like a DateTime in C#. The '$remain->y' is
                // the only way I found to easily get the year (or whatever) from the new $remain var.
                $remain = date_diff($returnDate, $dueDate);
                // World's longest concat.
                echo 'Your book is ' . $remain->y . ' years, ' . $remain->m . ' months, and ' . $remain->d . ' days OVERDUE!';
            } else if ($returnDate < $dueDate) {
                $remain = date_diff($dueDate, $returnDate);
                echo 'Your book is DUE in ' . $remain->y . ' years, ' . $remain->m . ' months, and ' . $remain->d . ' days!';
            } else if ($returnDate == $dueDate) {
                $remain = 3;
                echo 'Your book is DUE TODAY!';
            }
        }
    }
?>