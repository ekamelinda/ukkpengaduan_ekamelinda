<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="index.html">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->


<!-- Nav Item - Pages Collapse Menu -->
<?php
if(session('level')=='admin'){
    ?>
        <li class="nav-item">
            <a class="nav-link" href="/petugas">
                <i class="fas fa-fw fa-user"></i>
                <span>Petugas</span>
            </a>
        </li>
    <?php
    }
?>
<!-- Nav Item - Utilities Collapse Menu -->
<?php
if(session('level')!='masyarakat'){
    ?>
        <li class="nav-item">
            <a class="nav-link" href="/masyarakat">
                <i class="fas fa-fw fa-users"></i>
                 <span>Masyarakat</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="/tanggapan">
                <i class="fas fa-fw fa-comment"></i>
                <span>Tangapan</span>
            </a>
        </li>
    <?php
    }
?>
        <li class="nav-item">
            <a class="nav-link" href="/pengaduan">
                 <i class="fas fa-fw fa-file"></i>
                 <span>Pengaduan</span>
            </a>
        </li>

<!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link" href="/logout">
                <i class="fas fa-fw fa-sign-out-alt"></i>
                <span>Logout</span>
            </a>
        </li>

<!-- Nav Item - Charts -->

<!-- Nav Item - Tables -->

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

<!-- Sidebar Message -->
<div class="sidebar-card d-none d-lg-flex">
    <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
    <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
    <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
</div>

</ul>