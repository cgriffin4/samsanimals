<div class="navbar-wrapper">
    <div class="masthead container">
        <h3 class="muted">Sam's Animals</h3>
        <div class="navbar">
          <div class="navbar-inner">
            <div class="container">
              <ul class="nav">
              <?php
                switch($SETTINGS->currentPage)
                {
                    case 'index':
                        $iIndex = "active";
                        break;
                    case 'about':
                        $aIndex = "active";
                        break;
                    case 'links':
                        $lIndex = "active";
                        break;
                    default:
                        break;
                }
              ?>
                <li class="<?php echo $iIndex; ?> "><a href="index.php">Home</a></li>
                <li class="<?php echo $aIndex; ?> "><a href="about.php">About</a></li>
                <li class="<?php echo $lIndex; ?> "><a href="links.php">Links</a></li>
              </ul>
            </div>
          </div>
        </div><!-- /.navbar -->
    </div>
</div>