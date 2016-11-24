<!-- Primary navigation -->
    <nav id="primary">
      <ul>
        <li <?php if($active == 1) { echo 'class="active"'; } ?>>
          <a href="#">
            <span class="icon32 dashboard"></span>
            Dashboard
          </a>
        </li>
        <li <?php if($active == 2) { echo 'class="active"'; } ?>>
          <a href="#">
            <span class="icon32 shuffle"></span>
            UI Elements
          </a>
        </li>
        <li <?php if($active == 3) { echo 'class="active"'; } ?>>
          <a href="#">
            <span class="icon32 pencil"></span>
            Forms
          </a>
        </li>
        <li <?php if($active == 4) { echo 'class="active"'; } ?>>
          <a href="#">
            <span class="icon32 listicon"></span>
            Tables
          </a>
        </li>
        <li <?php if($active == 5) { echo 'class="active"'; } ?>>
          <a href="#">
            <span class="icon32 chart"></span>
            Charts
          </a>
        </li>
        <li class="bottom">
          <a href="<?php echo BASE_URL.'login.php?logout'; ?>">
            <span class="icon32 quit"></span>
            Log out
          </a>
        </li>
      </ul>
    </nav>