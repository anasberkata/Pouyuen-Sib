  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="../view_admin/index.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-heading">Data Barang</li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#item" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Data Barang</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="item" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="../view_item/item_list.php">
              <i class="bi bi-circle"></i><span>List Barang</span>
            </a>
          </li>
          <li>
            <a href="../view_item/item_stock.php">
              <i class="bi bi-circle"></i><span>Stok Barang</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

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