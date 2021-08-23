<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('public/css/app.css')); ?>">
    <title>Super store</title>
  </head>
  <body >
  
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
                    <a class="nav-link " href="about" >about</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="contact" >contact us</a>
                </li>
            </ul>
          
           <a href="cartes" class="btn btn-success"> <i class="fa fa-shopping-cart" style="font-size:20px" aria-hidden="true"></i></a>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <div class="dropdown">
                <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Account
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="<?php echo e($title ?? 'login'); ?>"><?php echo e($title ?? 'login'); ?></a></li>
                    <li><a class="dropdown-item" href="<?php echo e($author ?? 'signup'); ?>"><?php echo e($author ?? 'sign up'); ?></a></li>
                 </ul>
            </div>
            &nbsp;&nbsp;
            <form class="d-flex"  action="search" method="POST">
            <?php echo csrf_field(); ?>
                <input class="form-control me-2 typeahead " name= "search" type="search" placeholder="Search" aria-label="Search" required>
                 <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
     </div>
</nav>
<br/>
    
  <div class="container">
  
    <?php echo $__env->yieldContent('content'); ?>
    </div>
    <br/>
    <br/>
    <br/>
    <?php echo e(View::make('footer')); ?>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    


</body>
</html>

    <?php /**PATH /opt/lampp/htdocs/neo/resources/views/layout.blade.php ENDPATH**/ ?>