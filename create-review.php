<?php 
    include 'includes/header.php';
    include 'config/functions.php';
?>



<div>
    <form action="create-review.php" method="POST">
        <input type="hidden" name="product_id" value="<?php echo $_GET['id']; ?>">
        <label for="rating">Rating</label>
        <input type="number"  name="rating" min="1" max="5">
        <label for="review">Review</label>
        <input type="text" name="review">
        <input type="submit" name="submit-review" value="Submit Review">
    </form>
</div>

<?php

    if (isset($_POST['submit-review']) && isset($_POST['product_id']) && $_SESSION['id']) {
        echo $_POST['product_id'];
        echo $_POST['rating'];
        
        $data = [
            'product_id' => $_POST['product_id'],
            'user_id' => $_SESSION['id'],
            'rating' => $_POST['rating'],
            'review' => $_POST['review'],
            'date_created' => date("Y-m-d"),
        ];

        $review->addReview($data);
        header("location:single-product.php?id=" . $_POST['product_id']);

    } 

?>