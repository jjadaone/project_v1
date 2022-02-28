<?php 
    include 'config/functions.php';
    include 'includes/header2.php'; 
?>



<div>
    <form action="create-review.php" method="POST">
    <table class="table table-striped table-hover table-dark">
    <input type="hidden" name="product_id" value="<?php echo $_GET['id']; ?>">
    <th scope="row"><label for="rating">Rating</label></th>
    <td><input type="number"  name="rating" min="1" max="5" required placeholder="1-5"></td>
    <th scope="row"><label for="review">Review</label></th>
    <td><textarea type="text" name="review" required></textarea></td>
        
    <td><input class="btn btn-primary" type="submit" name="submit-review" value="Submit Review"></td>
    </form>
    </table>
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