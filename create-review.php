<?php 
    include 'includes/header.php';
    include 'config/functions.php';
?>



<div>
    <form action="create-review.php" method="POST">
        <!-- <input type="text" name="product_id" value="<?php echo $_GET['id']; ?>" /> -->
        <label for="rating">Rating</label>
        <input type="number"  name="rating" min="1" max="5">
        <label for="review">Review</label>
        <input type="text" name="review">
        <input type="submit" name="submit-review" value="Submit Review">
    </form>
</div>

<?php

    if (isset($_POST['submit-review'])) {

        // $_POST['product_id']);
        // echo $_SESSION['id'];
        
        // $data = [
        //     'product_id' => $_GET['id'],
        //     'rating' => $_POST['rating'],
        //     'review' => $_POST['review'],
        // ];

        // $review->addReview($data);

    } else {
     
    }

?>