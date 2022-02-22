<?php 
    include 'includes/header.php';
    include 'config/functions.php';
?>



<div>
    <form action="create-review.php" method="POST">
        <label for="rating">Rating</label>
        <input type="number"  name="rating" min="1" max="5">
        <label for="review">Review</label>
        <input type="text" name="review">
        <input type="submit" name="submit-review" value="Submit Review">
    </form>
</div>

<?php

    if (isset($_POST['submit-review'])) {
        echo 'sss';
    }

?>