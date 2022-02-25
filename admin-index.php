<?php 
    include 'includes/header2.php';
    include 'config/functions.php';
?>
<div style="margin: 55px"></div>
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
            <th>Action</th>
        </tr>
      </thead>
      <tbody>
      <form>
        <tr>
        <?php foreach ($product->getProducts() as $product): ?>
          <th scope="row"><?php echo $product['product_id']; ?></th>
          <td><?php echo $product['image']; ?></td>
          <td><?php echo $product['product_name']; ?></td>
          <td><?php echo $product['category_id']; ?></td>
          <td><?php echo $product['price']; ?></td>
          <td><?php echo $product['quantity']; ?></td>
          <td><?php echo $product['description']; ?></td>
          <td>
            <a href ="admin-update-product.php?id=<?php echo $product['product_id']; ?>">Update</a>
            <button onclick="ClearData()">Remove</button>  
          </td>
        </tr>
        <?php endforeach; ?>
        </form>
      </tbody>
    </table>
    
  </div>

<?php include 'includes/footer.php'; ?>

