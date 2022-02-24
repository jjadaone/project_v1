<?php 
    include 'includes/header2.php';
    include 'config/functions.php';
?>
<div style="margin: 100px"></div>

<form >
    <table class="table table-striped table-dark">
      <thead>
      <th>Create New Product</th>
        <tbody>
                <th scope="row"><label for="new-product">New Product</label></th>
                <td><input type="text" name="product_id"></td>
                </tr>
                <tr>
                <th scope="row"><label for="category">Category</label></th>
                <td><input type="text" name="category_id"></td>
                </tr>
                <tr>
                <th scope="row"><label for="price">Price</label></th>
                <td><input type="text" name="price"></td>
                </tr>
                <tr>
                <th scope="row"><label for="quantity">Quantity</label></th>
                <td><input type="text" name="quantity"></td>
                </tr>
                <tr>
                <th scope="row"><label for="description">Description</label></th>
                <td><textarea></textarea></td>
                </tr>
                <tr>
                <th scope="row"><label for="image">Upload Image</label></th>
                <td><input type="file" name="txtFile" id="txtFile"></td>
                </tr>
                <tr>
                <th scope="row"></th>
                <td><button type="submit" name="submit">Submit</button> </td>
                </tr>
                
        </tbody>
      </thead>
    </table>
</form>
<div style="margin: 55px"></div>

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
          <td><a href ="admin-update-product.php?id=<?php echo $product['product_id']; ?>">Update</a>
                  <button onclick="ClearData()">Remove</button>  </td>
        </tr>
        <?php endforeach; ?>
        </form>
      </tbody>
    </table>
    


<?php include 'includes/footer.php'; ?>

