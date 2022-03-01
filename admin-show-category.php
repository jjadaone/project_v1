<?php ob_start(); include 'includes/sidebar.php';include 'config/functions.php';?>
                <div class="container-fluid">
                          <table class="table table-striped table-hover table-dark">
                            <thead>
                              <tr>

                                  <th>ID</th>
                                  <th>Category Name</th>
                                  <th>Category Description</th>
                                  <th>Image</th>
                                
                              </tr>
                            </thead>
                            <tbody>
                            <form>
                              <tr>
                              <?php foreach ($category->getCategories() as $category): ?>
                                <th scope="row"><?php echo $category['category_id']; ?></th>
                                <td><?php echo $category['category_name']; ?></td>
                                <td><?php echo $category['category_description']; ?></td>
                                <td><?php echo $category['category_image']; ?></td>
            
                                <td>
                                  <a class="btn btn-info" href ="admin-update-category.php?id=<?php echo $category['category_id']; ?>">Update</a>
                                  <a class="btn btn-danger" href="admin-delete-category.php?id=<?php echo $category['category_id']; ?>" onclick="return confirm('Are you sure you want to delete this item?');">Remove</a>  
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