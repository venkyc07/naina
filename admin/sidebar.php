<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard.html">
        <!-- <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div> -->
        <div class="sidebar-brand-text mx-3">
          <img src="../img/nainalogo1.png" height="90px" width="100px" class="logo" alt="logo">
        </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="dashboard.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">
     
      <li class="nav-item">
        <a class="nav-link collapsed material" href="#" data-toggle="collapse" data-target="#collapseCategory" aria-expanded="false" aria-controls="collapseProducts">
          <i class="fas fa-fw fa-plus"></i>
          <span>Category</span>
        </a>
        <div id="collapseCategory" class="collapse material_drop" aria-labelledby="collapseCategory" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="add_category.php">Add Category </a>
            <a class="collapse-item" href="total_categories.php">View Category </a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed material" href="#" data-toggle="collapse" data-target="#collapseProduct" aria-expanded="false" aria-controls="collapseProducts">
          <i class="fas fa-fw fa-plus"></i>
          <span>Products</span>
        </a>
        <div id="collapseProduct" class="collapse material_drop" aria-labelledby="collapseProduct" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="add_Product.php">Add Product </a>
            <a class="collapse-item" href="total_Products.php">View Product </a>
          </div>
        </div>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="payments.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Payments</span></a>
      </li>
      <!-- <li class="nav-item active">
        <a class="nav-link" href="students.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>studnets</span></a>
      </li> -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>