<nav class="navbar navbar-expand-lg navbar-light bg-info">
    <div class="container">
        <a class="navbar-brand" href="#">Blog | Ku</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link <?php echo e(($title == "home" ) ? : ''); ?>" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo e(($title == "home" ) ? : ''); ?>" href="/About">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo e(($title == "home" ) ? : ''); ?>" href="/Blog">Blog</a>
                </li>
            </ul>
        </div>
    </div>
</nav><?php /**PATH D:\laravel app\example-app\resources\views/partial/navbar.blade.php ENDPATH**/ ?>