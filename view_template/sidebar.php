  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="../view_admin/index.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-heading">Admin</li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#basic-data" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Basic Data</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="basic-data" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="../view_basic_data/material_data.php">
              <i class="bi bi-circle"></i><span>Material Data</span>
            </a>
          </li>
          <li>
            <a href="../view_basic_data/material_catagory.php">
              <i class="bi bi-circle"></i><span>Material Catagory</span>
            </a>
          </li>
          <li>
            <a href="../view_basic_data/vendor_data.php">
              <i class="bi bi-circle"></i><span>Vendor Data</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#in-out-data" data-bs-toggle="collapse" href="#">
          <i class="bi bi-box-seam"></i><span>In-Out Data</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="in-out-data" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="../view_in_out_data/po_proccess.php">
              <i class="bi bi-circle"></i><span>PO Proccess</span>
            </a>
          </li>
          <li>
            <a href="../view_in_out_data/accepts_material_in.php">
              <i class="bi bi-circle"></i><span>Accepts Material in Proccess</span>
            </a>
          </li>
          <li>
            <a href="../view_in_out_data/out_material.php">
              <i class="bi bi-circle"></i><span>Out Material Proccess</span>
            </a>
          </li>
          <li>
            <a href="../view_in_out_data/transfer_proccess.php">
              <i class="bi bi-circle"></i><span>Transfer Proccess</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#stock-inventory" data-bs-toggle="collapse" href="#">
          <i class="bi bi-stack"></i><span>Stock Inventory</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="stock-inventory" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="../view_stock_inventory/stock.php">
              <i class="bi bi-circle"></i><span>Stock</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-heading">User</li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#users" data-bs-toggle="collapse" href="#">
          <i class="bi bi-person"></i><span>Users</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="users" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="../view_users/users-list.php">
              <i class="bi bi-circle"></i><span>List User</span>
            </a>
          </li>
          <li>
            <a href="../view_users/users-profile.php">
              <i class="bi bi-circle"></i><span>My Profile</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->
    </ul>

  </aside><!-- End Sidebar-->