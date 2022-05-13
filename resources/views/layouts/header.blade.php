<nav class="navbar navbar-expand-lg navbar-light bg-light nav-main">
    <div class="container-fluid container-navbar">
        <button class="navbar-toggler btn-menu" id="menu-bar" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand logo" href="#">
            <img src="{{asset('/img/hapo-learn.png')}}" class="img-logo" alt="HapoBanner">
        </a>
        <div class="collapse navbar-collapse navbar-menu" id="navbarNav">
            <ul class="navbar-nav list-menu">
                <li class="nav-item list-item">
                    <a class="nav-link item" aria-current="page" href="#">HOME</a>
                </li>
                <li class="nav-item list-item">
                    <a class="nav-link item" href="#">ALL COURSES</a>
                </li>
                <li class="nav-item list-item" id="login-register">
                    <a data-bs-toggle="modal" data-bs-target="#exampleModal" class="nav-link item btn-login-register" href="">LOGIN/REGISTER</a>
                </li>
                <li class="nav-item list-item">
                    <a class="nav-link item" href="#">PROFILE</a>
                </li>
            </ul>
        </div>
    </div>
</nav>