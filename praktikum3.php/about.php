
<?php
include './top.php';
include './menu.php';
?>
<head>
    <!-- Page content wrapper-->
<div id="page-content-wrapper">
    <!-- Top navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
    <div class="dropdown" data-bs-theme="light">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButtonLight" data-bs-toggle="dropdown" aria-expanded="false">
    Default dropdown
  </button>  
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                    <li class="nav-item active"><a class="nav-link" href="#!">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!"></a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#!">Action</a>
                            <a class="dropdown-item" href="#!">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#!">Something else here</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="wrapper">
        <div id="content"> 
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


<div class="profile-container">
    <div class="profile-header text-center">
        <img src="WhatsApp Image 2025-02-11 at 08.50.35.jpeg" alt="Foto Profil" class="profile-img">
        <h2>ZAHRA NAUROH RAHMANI</h2>
        <p class="text-muted">Information Systems Student</p>
    </div>
    <div class="profile-body">
        <p><strong><i class="bi bi-geo-alt"></i> Address:</strong> jl.Bungur V No.51 RT005/005 </p>
        <p><strong><i class="bi bi-heart"></i> Hobi:</strong> Playing Basketball</p>
        <p><strong><i class="bi bi-book"></i> Religion:</strong> Islam</p>
        <p><strong><i class="bi bi-book"></i> Age:</strong> 18 Years</p>
    </div>
</div>


<?php
include './bottom.php';
?>