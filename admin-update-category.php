<?php 
    include 'includes/sidebar.php';
    include 'config/functions.php';
?>
<!-- Page content wrapper-->

                <!-- Page content-->
                <div class="container-fluid">
                      <div class ="container">
                        <form action="admin-update-process-category.php" method="POST" enctype="multipart/form-data">
                            <table  class="table table-striped table-hover table-dark">
                            <thead>
                            <th>Update Category</th>
                                <tbody>
                                <?php foreach ($category->getSingleCategories($_GET['id']) as $category): ?>
                                   
                                        <th scope="row" >Category ID</th>
                                        <td><input type="text"  readonly name="category_id" value="<?php echo $category['category_id']; ?>"></td>
                                        </tr>
                                        <tr>
                                        <th scope="row">Category Name</th>
                                        <td><input type="text" name="category_name" value="<?php echo $category['category_name']; ?>"></td>
                                        </tr>
                                        <th scope="row">Category Description</th>
                                        <td><input type="text" name="category_description" value="<?php echo $category['category_description']; ?>"></td>
                                        </tr>
                                        <tr>
                                        <th scope="row">Image</th>
                                        <td><input type="file" name="category_image" id="image value="<?php echo $category['category_image']; ?>"><label><?php echo $category['category_image']; ?></label></td>
                                        </tr>
                                
                                    
                                        <?php endforeach; ?>
                                        <td><button type="submit" name="updateCategory">Submit</button> </td>
                                </tbody>
                            </thead>
                            </table>
                        </form>
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
  
 



