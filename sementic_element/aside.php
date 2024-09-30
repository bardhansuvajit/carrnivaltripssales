


  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../index.php" class="brand-link">
      <img src="../dist/img/logo2.png" alt="Admin Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-bloder">CarrnivalTrips</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../dist/img/user8-128x128.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION["sess_admin_name"]; ?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="../index.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
         
          </li>





          <!-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Product
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../add_fish/add_product.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Product</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../add_fish/display_product.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Display Product</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../add_fish/add_category.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Category</p>   
                </a>
              </li>

            
            </ul>
          </li> -->




         


          <!-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Seller Verification
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
             
              <li class="nav-item">
                <a href="../seller_verification/display_seller_verification_individual.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Individual Seller</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../seller_verification/display_seller_verification_company.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Company Seller</p>
                </a>
              </li>
             
            
            </ul>
          </li> -->





          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                 Pre Loaded Itinerary
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../package/add_package.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../package/display_package_info.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Display</p>
                </a>
              </li>
            </ul>
          </li>


          


           <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                 Sightseeing
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../sightseeing/add_sightseeing_loc.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../sightseeing/display_sightseeing.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Display</p>
                </a>
              </li>
            </ul>
          </li>


          




          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                 Hotel
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../hotel/add_hotel_category.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../hotel/display_hotel.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Display</p>
                </a>
              </li>             

            </ul>
          </li>



          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                 Season
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
               <li class="nav-item">
                <a href="../hotel/add_season.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Season</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="../hotel/display_season.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Display Season</p>
                </a>
              </li>
              
            </ul>
          </li>




          <li class="nav-item">
            <a href="../destination_activity/display_sightseeing.php" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                 Destination Activity
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="../car/display_car.php" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                 Car
                <!-- <i class="fas fa-angle-left right"></i> -->
              </p>
            </a>
            <!-- <ul class="nav nav-treeview">
              
               <li class="nav-item">
                <a href="../car/add_car.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Car</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="../car/display_car.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Display Car</p>
                </a>
              </li>
              
            </ul> -->
          </li>

          <li class="nav-item">
            <a href="../ferry/display_ferry.php" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                 Ferry
                <!-- <i class="fas fa-angle-left right"></i> -->
              </p>
            </a>
            
          </li>







          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                 Employee
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../employee/add_employee.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../employee/display_employee.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Display</p>
                </a>
              </li>
            </ul>
          </li>





          
          <!-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                 Customer
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../customer/add_customer.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../customer/display_customer_info.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Display</p>
                </a>
              </li>
            </ul>
          </li> -->








          <!-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-image"></i> -->
              <!-- <i class="nav-icon fas fa-sign-out-alt fa-lg"></i> -->
              <!-- <p>
                Customer Query
              </p>
            </a>
          </li>
          -->



          <!-- <br><br> -->
          <li class="nav-item">
            <a href="../login/logout.php" class="nav-link">
              <!-- <i class="nav-icon far fa-image"></i> -->
              <i class="nav-icon fas fa-sign-out-alt fa-lg"></i>
              <p>
                Logout
              </p>
            </a>
          </li>

         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>