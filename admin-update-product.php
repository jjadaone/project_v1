<?php 
    include 'includes/header2.php';
    include 'config/functions.php';
?>
<div style="margin: 100px"></div>
<div class="container">
    <table class="table table-striped table-dark">
      <thead>
        <tr>
            <th>Product ID</th>
            <th>Image</th>
            <th>Product Name</th>
            <th>Category</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Description</th>
        </tr>
      </thead>
      <tbody>
        
        <tr>
        <?php foreach ($product->getSingleProduct($_GET['id']) as $product): ?>
          <th scope="row"><?php echo $product['product_id']; ?></th>
          <td><input type="text" name="image value="<?php echo $product['image']; ?>"></td>
          
          <td><input type="text" name="product_name" value="<?php echo $product['product_name']; ?>"></td>
          <td><input type="text" name="category_id" value="<?php echo $product['category_id']; ?>"></td>
          <td><input type="text" name="price" value="<?php echo $product['price']; ?>"></td>
          <td><input type="text" name="quantity[]" value="<?php echo $product['quantity']; ?>"></td>
          <td><input type="text" name="description" value="<?php echo $product['description']; ?>"></td>

        </tr>
        <?php endforeach; ?>
      </tbody>
      <td><button onclick="UpdateData()">Update</button></td>
    </table>
        </div>   



