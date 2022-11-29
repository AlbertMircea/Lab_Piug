<div class=" sablon container-fluid text-light p-3 d-flex align-items-center justify-content-between sticky-top">
        <!-- <h3 class="mb-0 h-font">Visible Words</h3> -->
        <div class="site-logo">
                    <a href="#"> <img src="../images/logo.png" /> </a>
        </div>
        <!-- <a href="logout.php" class="btn btn-sm custom-bg text-white shadow-none">LOG OUT</a> -->
    </div>

    <div class=" sablon col-lg-2 border-top border-3 border-secondary" id="dashboard-menu">
        <nav class=" navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid flex-lg-column align-items-stretch">
                <h4 class=" admin mt-2">ADMIN PANEL</h4>
                <button class="navbar-toggler shadow-none" type="button" data-bs-toggler="collapse" data-bs-target="#adminDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class=" meniu collapse navbar-collapse flex-column align-items-stretch mt-2" id="adminDropdown"> 
                    <ul class=" lista nav nav-pills flex-column ">
                        <li class="nav-item">
                            <a class="nav-link" href="dashboard.php">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="bookings.php">Bookings</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="users.php">Users</a>
                        </li>
                    </ul>

                    <a href="logout.php" class="btn btn-sm custom-bg text-white shadow-none">LOG OUT</a>
                </div>
            </div>
        </nav>
    </div>