<?php 
    include 'includes/sidebar.php';
    include 'config/functions.php';
?>
<!-- Page content wrapper-->

                <!-- Page content-->
                <div class="container-fluid">
                          <table class="table table-striped table-hover table-dark">
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
                                  <a class="btn btn-info" href ="admin-update-product.php?id=<?php echo $product['product_id']; ?>">Update</a>
                                  <a class="btn btn-danger" href="admin-delete-product.php?id=<?php echo $product['product_id']; ?>" onclick="return confirm('Are you sure you want to delete this item?');">Remove</a>  
                                </td>
                              </tr>
                              <?php endforeach; ?>
                              </form>
                            </tbody>
                          </table>
                </div>
            </div>
        </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script>           window.addEventListener('DOMContentLoaded', event => {

            // Toggle the side navigation
            const sidebarToggle = document.body.querySelector('#sidebarToggle');
            if (sidebarToggle) {
                // Uncomment Below to persist sidebar toggle between refreshes
                // if (localStorage.getItem('sb|sidebar-toggle') === 'true') {
                //     document.body.classList.toggle('sb-sidenav-toggled');
                // }
                sidebarToggle.addEventListener('click', event => {
                    event.preventDefault();
                    document.body.classList.toggle('sb-sidenav-toggled');
                    localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains('sb-sidenav-toggled'));
                });
            }
            
            });</script>
</body>



