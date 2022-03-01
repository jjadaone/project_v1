<?php
    include 'config/functions.php';
    include 'includes/header2.php';
?>

<link rel="stylesheet" type="text/css" href="assets/css/review.css">
<div class="row">
    <div class="container">
        <div class="review-card">
            <h1>REVIEW FORM</h1><br>
            <?php //echo $_GET['id']; ?>
            <form method="POST">
            <?php foreach($review->getSingleReview($_GET['id'], $_SESSION['id']) as $rev): ?>
                <input type="hidden" name="product_id" value="<?php echo $rev['product_id'];//$_GET['id']; ?>">
                <label for="rating">Rating</label>
                <input type="number"  name="rating" min="1" max="5" value="<?php echo $rev['rating']; ?>"><br><br>
                
                <label for="review">Review</label>
                <textarea type="text" name="review" value="<?php echo $rev['review']; ?>"></textarea>
                <input class="btn btn-primary" type="submit" name="submit-review" value="Submit Review">
            <?php endforeach; ?>
            </form>
        </div>
    </div>
</div>

<?php
    if (isset($_POST['submit-review'])) {
        
        $data = [
            'product_id' => $_POST['product_id'],
            'user_id' => $_SESSION['id'],
            'rating' => $_POST['rating'],
            'review' => $_POST['review'],
            'date_created' => date("Y-m-d"),
        ];
        $review->updateReview($data);
        // header("Refresh: 0");
        header("Location: single-product.php?id=" . $_POST['product_id']);
    } 
?>
<?php include 'includes/footer.php'; ?>