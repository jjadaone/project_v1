<?php 
    include 'includes/header2.php';
    include 'config/functions.php';
?>
<body>
    <div style="margin: 100px"></div>
    <div class ="container">
        <form action="admin-new-product.php" method="POST">
            <table class="table table-striped table-dark">
            <thead>
            <th>Create New Product</th>
                <tbody>
                        <th scope="row"><label for="new-product">Product name</label></th>
                        <td><input type="text" name="product_name"></td>
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
                        <td><textarea type="text" name="description"></textarea></td>
                        </tr>
                        <tr>
                        <th scope="row"><label for="image">Upload Image</label></th>
                        <td><input type="file" name="txtFile" id="txtFile"></td>
                        </tr>
                        <tr>
                        <th scope="row"></th>
                        <td><button type="submit" name="addProduct">Submit</button> </td>
                        </tr>
                        
                </tbody>
            </thead>
            </table>
        </form>
    </div>
</body>
<?php

    if (isset($_POST['addProduct'])) {

        $product_name = $_POST['product_name'];
        $category_id = $_POST['category_id'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];
        $description = $_POST['description'];
        // $image = $_POST['image'];


        $data = [
            'product_name' => $product_name,
            'category_id' => $category_id,
            'price' => $price,
            'quantity' => $quantity,
            'description' => $description,
            // 'image' => $image,
        ];

        $product->addProduct($data);
        header("Location:admin-index.php");
    }



?>