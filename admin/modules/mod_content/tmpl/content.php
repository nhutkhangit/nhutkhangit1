<?php if (isset($_GET['type']) && $_GET['type']=='slider'): ?>
    <?php include_once("modules/mod_slider/mod_slider.php"); ?>
<?php else (isset($_GET['type']) && $_GET['type']=='qlcm'): ?>
  <?php include_once("modules/mod_qlcm/mod_qlcm.php"); ?>
<?php endif ;?>
<div class="main-content">
    <nav class="navbar navbar-expand-md navbar-light d-none d-md-flex" id="topbar">
        <div class="container-fluid">
            <!-- Form -->
            <form class="form-inline mr-4 d-none d-md-flex">
                <div class="input-group input-group-flush input-group-merge" data-toggle="lists" data-options='{"valueNames": ["name"]}'>

                    <!-- Input -->
                    <input type="search" class="form-control form-control-prepended dropdown-toggle search" data-toggle="dropdown" placeholder="Search" aria-label="Search">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fe fe-search"></i>
                        </div>
                    </div>

                    <!-- Menu -->
                    <div class="dropdown-menu dropdown-menu-card">
                        <div class="card-body">

                            <!-- List group -->
                            <div class="list-group list-group-flush list my-n3">
                                <a href="team-overview.html" class="list-group-item px-0">
                                    <div class="row align-items-center">
                                        <div class="col-auto">

                                            <!-- Avatar -->
                                            <div class="avatar">
                                                <img src="./assets/img/avatars/teams/team-logo-1.jpg" alt="..." class="avatar-img rounded">
                                            </div>

                                        </div>
                                        <div class="col ml-n2">

                                            <!-- Title -->
                                            <h4 class="text-body mb-1 name">
                              Airbnb
                            </h4>

                                            <!-- Time -->
                                            <p class="small text-muted mb-0">
                                                <span class="fe fe-clock"></span>
                                                <time datetime="2018-05-24">Updated 2hr ago</time>
                                            </p>

                                        </div>
                                    </div>
                                    <!-- / .row -->
                                </a>
                                <a href="team-overview.html" class="list-group-item px-0">
                                    <div class="row align-items-center">
                                        <div class="col-auto">

                                            <!-- Avatar -->
                                            <div class="avatar">
                                                <img src="./assets/img/avatars/teams/team-logo-2.jpg" alt="..." class="avatar-img rounded">
                                            </div>

                                        </div>
                                        <div class="col ml-n2">

                                            <!-- Title -->
                                            <h4 class="text-body mb-1 name">
                              Medium Corporation
                            </h4>

                                            <!-- Time -->
                                            <p class="small text-muted mb-0">
                                                <span class="fe fe-clock"></span>
                                                <time datetime="2018-05-24">Updated 2hr ago</time>
                                            </p>

                                        </div>
                                    </div>
                                    <!-- / .row -->
                                </a>
                                <a href="project-overview.html" class="list-group-item px-0">

                                    <div class="row align-items-center">
                                        <div class="col-auto">

                                            <!-- Avatar -->
                                            <div class="avatar avatar-4by3">
                                                <img src="./assets/img/avatars/projects/project-1.jpg" alt="..." class="avatar-img rounded">
                                            </div>

                                        </div>
                                        <div class="col ml-n2">

                                            <!-- Title -->
                                            <h4 class="text-body mb-1 name">
                              Homepage Redesign
                            </h4>

                                            <!-- Time -->
                                            <p class="small text-muted mb-0">
                                                <span class="fe fe-clock"></span>
                                                <time datetime="2018-05-24">Updated 4hr ago</time>
                                            </p>

                                        </div>
                                    </div>
                                    <!-- / .row -->

                                </a>
                                <a href="project-overview.html" class="list-group-item px-0">

                                    <div class="row align-items-center">
                                        <div class="col-auto">

                                            <!-- Avatar -->
                                            <div class="avatar avatar-4by3">
                                                <img src="./assets/img/avatars/projects/project-2.jpg" alt="..." class="avatar-img rounded">
                                            </div>

                                        </div>
                                        <div class="col ml-n2">

                                            <!-- Title -->
                                            <h4 class="text-body mb-1 name">
                              Travels & Time
                            </h4>

                                            <!-- Time -->
                                            <p class="small text-muted mb-0">
                                                <span class="fe fe-clock"></span>
                                                <time datetime="2018-05-24">Updated 4hr ago</time>
                                            </p>

                                        </div>
                                    </div>
                                    <!-- / .row -->

                                </a>
                                <a href="project-overview.html" class="list-group-item px-0">

                                    <div class="row align-items-center">
                                        <div class="col-auto">

                                            <!-- Avatar -->
                                            <div class="avatar avatar-4by3">
                                                <img src="./assets/img/avatars/projects/project-3.jpg" alt="..." class="avatar-img rounded">
                                            </div>

                                        </div>
                                        <div class="col ml-n2">

                                            <!-- Title -->
                                            <h4 class="text-body mb-1 name">
                              Safari Exploration
                            </h4>

                                            <!-- Time -->
                                            <p class="small text-muted mb-0">
                                                <span class="fe fe-clock"></span>
                                                <time datetime="2018-05-24">Updated 4hr ago</time>
                                            </p>

                                        </div>
                                    </div>
                                    <!-- / .row -->

                                </a>
                                <a href="profile-posts.html" class="list-group-item px-0">

                                    <div class="row align-items-center">
                                        <div class="col-auto">

                                            <!-- Avatar -->
                                            <div class="avatar">
                                                <img src="./assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                                            </div>

                                        </div>
                                        <div class="col ml-n2">

                                            <!-- Title -->
                                            <h4 class="text-body mb-1 name">
                              Dianna Smiley
                            </h4>

                                            <!-- Status -->
                                            <p class="text-body small mb-0">
                                                <span class="text-success">●</span> Online
                                            </p>

                                        </div>
                                    </div>
                                    <!-- / .row -->

                                </a>
                                <a href="profile-posts.html" class="list-group-item px-0">

                                    <div class="row align-items-center">
                                        <div class="col-auto">

                                            <!-- Avatar -->
                                            <div class="avatar">
                                                <img src="./assets/img/avatars/profiles/avatar-2.jpg" alt="..." class="avatar-img rounded-circle">
                                            </div>

                                        </div>
                                        <div class="col ml-n2">

                                            <!-- Title -->
                                            <h4 class="text-body mb-1 name">
                              Ab Hadley
                            </h4>

                                            <!-- Status -->
                                            <p class="text-body small mb-0">
                                                <span class="text-danger">●</span> Offline
                                            </p>

                                        </div>
                                    </div>
                                    <!-- / .row -->

                                </a>
                            </div>

                        </div>
                    </div>
                    <!-- / .dropdown-menu -->

                </div>
            </form>

            <!-- User -->
            <div class="navbar-user">

                <!-- Dropdown -->
                <div class="dropdown mr-4 d-none d-md-flex">

                    <!-- Toggle -->
                    <a href="#" class="navbar-user-link" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="icon active">
                                <i class="fe fe-bell"></i>
                              </span>
                    </a>

                    <!-- Menu -->
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">

                                    <!-- Title -->
                                    <h5 class="card-header-title">
                                      Notifications
                                    </h5>

                                </div>
                                <div class="col-auto">

                                    <!-- Link -->
                                    <a href="#!" class="small">
                                      View all
                                    </a>

                                </div>
                            </div>
                            <!-- / .row -->
                        </div>
                        <!-- / .card-header -->
                        <div class="card-body">

                            <!-- List group -->
                            <div class="list-group list-group-flush my-n3">
                                <a class="list-group-item px-0" href="#!">

                                    <div class="row">
                                        <div class="col-auto">

                                            <!-- Avatar -->
                                            <div class="avatar avatar-sm">
                                                <img src="./assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                                            </div>

                                        </div>
                                        <div class="col ml-n2">

                                            <!-- Content -->
                                            <div class="small text-muted">
                                                <strong class="text-body">Dianna Smiley</strong> shared your post with <strong class="text-body">Ab Hadley</strong>, <strong class="text-body">Adolfo Hess</strong>, and <strong class="text-body">3 others</strong>.
                                            </div>

                                        </div>
                                        <div class="col-auto">

                                            <small class="text-muted">
                                          2m
                                        </small>

                                        </div>
                                    </div>
                                    <!-- / .row -->

                                </a>
                                <a class="list-group-item px-0" href="#!">

                                    <div class="row">
                                        <div class="col-auto">

                                            <!-- Avatar -->
                                            <div class="avatar avatar-sm">
                                                <img src="./assets/img/avatars/profiles/avatar-2.jpg" alt="..." class="avatar-img rounded-circle">
                                            </div>

                                        </div>
                                        <div class="col ml-n2">

                                            <!-- Content -->
                                            <div class="small text-muted">
                                                <strong class="text-body">Ab Hadley</strong> reacted to your post with a 😍
                                            </div>

                                        </div>
                                        <div class="col-auto">

                                            <small class="text-muted">
                                          2m
                                        </small>

                                        </div>
                                    </div>
                                    <!-- / .row -->

                                </a>
                                <a class="list-group-item px-0" href="#!">

                                    <div class="row">
                                        <div class="col-auto">

                                            <!-- Avatar -->
                                            <div class="avatar avatar-sm">
                                                <img src="./assets/img/avatars/profiles/avatar-3.jpg" alt="..." class="avatar-img rounded-circle">
                                            </div>

                                        </div>
                                        <div class="col ml-n2">

                                            <!-- Content -->
                                            <div class="small text-muted">
                                                <strong class="text-body">Adolfo Hess</strong> commented
                                                <blockquote class="text-body">“I don’t think this really makes sense to do without approval from Johnathan since he’s the one...” </blockquote>
                                            </div>

                                        </div>
                                        <div class="col-auto">

                                            <small class="text-muted">
                                          2m
                                        </small>

                                        </div>
                                    </div>
                                    <!-- / .row -->

                                </a>
                                <a class="list-group-item px-0" href="#!">

                                    <div class="row">
                                        <div class="col-auto">

                                            <!-- Avatar -->
                                            <div class="avatar avatar-sm">
                                                <img src="./assets/img/avatars/profiles/avatar-4.jpg" alt="..." class="avatar-img rounded-circle">
                                            </div>

                                        </div>
                                        <div class="col ml-n2">

                                            <!-- Content -->
                                            <div class="small text-muted">
                                                <strong class="text-body">Daniela Dewitt</strong> subscribed to you.
                                            </div>

                                        </div>
                                        <div class="col-auto">

                                            <small class="text-muted">
                                          2m
                                        </small>

                                        </div>
                                    </div>
                                    <!-- / .row -->

                                </a>
                                <a class="list-group-item px-0" href="#!">

                                    <div class="row">
                                        <div class="col-auto">

                                            <!-- Avatar -->
                                            <div class="avatar avatar-sm">
                                                <img src="./assets/img/avatars/profiles/avatar-5.jpg" alt="..." class="avatar-img rounded-circle">
                                            </div>

                                        </div>
                                        <div class="col ml-n2">

                                            <!-- Content -->
                                            <div class="small text-muted">
                                                <strong class="text-body">Miyah Myles</strong> shared your post with <strong class="text-body">Ryu Duke</strong>, <strong class="text-body">Glen Rouse</strong>, and <strong class="text-body">3 others</strong>.
                                            </div>

                                        </div>
                                        <div class="col-auto">

                                            <small class="text-muted">
                                          2m
                                        </small>

                                        </div>
                                    </div>
                                    <!-- / .row -->

                                </a>
                                <a class="list-group-item px-0" href="#!">

                                    <div class="row">
                                        <div class="col-auto">

                                            <!-- Avatar -->
                                            <div class="avatar avatar-sm">
                                                <img src="./assets/img/avatars/profiles/avatar-6.jpg" alt="..." class="avatar-img rounded-circle">
                                            </div>

                                        </div>
                                        <div class="col ml-n2">

                                            <!-- Content -->
                                            <div class="small text-muted">
                                                <strong class="text-body">Ryu Duke</strong> reacted to your post with a 😍
                                            </div>

                                        </div>
                                        <div class="col-auto">

                                            <small class="text-muted">
                                          2m
                                        </small>

                                        </div>
                                    </div>
                                    <!-- / .row -->

                                </a>
                                <a class="list-group-item px-0" href="#!">

                                    <div class="row">
                                        <div class="col-auto">

                                            <!-- Avatar -->
                                            <div class="avatar avatar-sm">
                                                <img src="./assets/img/avatars/profiles/avatar-7.jpg" alt="..." class="avatar-img rounded-circle">
                                            </div>

                                        </div>
                                        <div class="col ml-n2">

                                            <!-- Content -->
                                            <div class="small text-muted">
                                                <strong class="text-body">Glen Rouse</strong> commented
                                                <blockquote class="text-body">“I don’t think this really makes sense to do without approval from Johnathan since he’s the one...” </blockquote>
                                            </div>

                                        </div>
                                        <div class="col-auto">

                                            <small class="text-muted">
                                          2m
                                        </small>

                                        </div>
                                    </div>
                                    <!-- / .row -->

                                </a>
                                <a class="list-group-item px-0" href="#!">

                                    <div class="row">
                                        <div class="col-auto">

                                            <!-- Avatar -->
                                            <div class="avatar avatar-sm">
                                                <img src="./assets/img/avatars/profiles/avatar-8.jpg" alt="..." class="avatar-img rounded-circle">
                                            </div>

                                        </div>
                                        <div class="col ml-n2">

                                            <!-- Content -->
                                            <div class="small text-muted">
                                                <strong class="text-body">Grace Gross</strong> subscribed to you.
                                            </div>

                                        </div>
                                        <div class="col-auto">

                                            <small class="text-muted">
                                          2m
                                        </small>

                                        </div>
                                    </div>
                                    <!-- / .row -->

                                </a>
                            </div>

                        </div>
                    </div>
                    <!-- / .dropdown-menu -->

                </div>

                <!-- Dropdown -->
                <div class="dropdown">

                    <!-- Toggle -->
                    <a href="#" class="avatar avatar-sm avatar-online dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="./assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                    </a>

                    <!-- Menu -->
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="profile-posts.html" class="dropdown-item">Profile</a>
                        <a href="settings.html" class="dropdown-item">Settings</a>
                        <hr class="dropdown-divider">
                        <a href="?type=logout" class="dropdown-item">Logout</a>
                    </div>

                </div>

            </div>

        </div>
    </nav>
    
</div>
<!-- / .main-content -->