<!-- W. VIKTOR GRAY -->

<?php
    if ($_GET) {
        $returnDate = $_GET['returnDate'];
        $dueDate = $_GET['dueDate'];

        $returnDate = strtotime($returnDate);
        $dueDate = strtotime($dueDate);
    }

    function returnDate_strtodate() {
        
    }

?>