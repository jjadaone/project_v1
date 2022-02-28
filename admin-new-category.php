<?php ob_start(); include 'includes/sidebar.php';include 'config/functions.php';?>

        <div class="container-fluid">
                <body>
                    <div class ="container">
                        <form action="admin-new-category-process.php" method="POST" enctype="multipart/form-data">
                            <table  class="table table-striped table-hover table-dark">
                            <thead>
                            <th>Create New Category</th>
                                <tbody>
                                        <tr>
                                        <th scope="row"><label for="category">Category Name</label></th>
                                        <!-- <td><select name= category_id>
                                        <?php foreach ($category->getCategories() as $category): ?>
                                        <option value="<?php echo $category['category_id']; ?>"><?php echo $category['category_name']; ?>  
                                        <?php endforeach; ?>
                                        </option>
                                        </select>
                                        </td> -->
                                        <td><input type="text" name="category_name" required></td>
                                        </tr>
                                        <tr>
                                        <th scope="row"><label for="category_description">Description</label></th>
                                        <td><textarea type="text" name="category_description"required></textarea></td>
                                        </tr>
                                        <tr>
                                        <th scope="row"><label for="image">Upload Image</label></th>
                                        <td><input type="file" name="category_image" id="category_image"></td>
                                        </tr>
                                
                                        <td><button type="submit" name="addCategory">Submit</button> </td>
                                        </tr>
                                        
                                </tbody>
                            </thead>
                            </table>
                        </form>
                    </div>
                </body>
               
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
  


