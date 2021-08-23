<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
        <a class="navbar-brand" href="/">super store</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="list">list</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">categorie</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#" >about</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="contact" >contact us</a>
                </li>
            </ul>
            <div class="dropdown">
                <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Account
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="login"><?php echo e($data ?? 'login'); ?></a></li>
                    <li><a class="dropdown-item" href="signup">Sign up</a></li>
                 </ul>
            </div>
            &nbsp;&nbsp;
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                 <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
     </div>
</nav>
<br/><?php /**PATH /opt/lampp/htdocs/neo/resources/views/header.blade.php ENDPATH**/ ?>