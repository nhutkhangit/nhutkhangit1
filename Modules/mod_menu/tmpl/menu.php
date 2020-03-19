<?php if (!empty($dbmenu)): ?>
  <div class="menu-header">
    <div class="container">
      <div class="row">
        <div class="col-md-12 nav-sm-fuild">
          <nav class="navbar navbar-expand-lg navbar-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="<?=$dbmenu[0]['url']?>"><?=$dbmenu[0]['name']?><span class="sr-only">(current)</span></a>
                </li>
                <?php foreach ($dbmenu as $key => $menu): ?>
                  <?php if ($menu['name'] != $dbmenu[0]['name']): ?>
                    <li class="nav-item">
                      <a class="nav-link" href="<?=$menu['url']?>"><?=$menu['name']?></a>
                    </li>
                  <?php endif; ?>
                <?php endforeach; ?>
                <li class="nav-item">
                  <a class="nav-link" href="?page=lienhe">Liên Hệ</a>
                </li>
                <!--
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
                -->
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </div>
<?php endif; ?>