<div class="container-fluid d-flex align-items-center px-5">
   <div class="container-fluid d-flex align-items-center gap-3">
      <a class="navbar-brand" href="index.php">
         <img src="images/sidoarjo.png" alt="" width="40" height="40" class="d-inline-block align-text-top">
      </a>
      <small class="text-black text-uppercase fw-semibold lh-sm navbar-title">
         DINAS KOMUNIKASI DAN INFORMATIKA
         <br>
         KABUPATEN SIDOARJO
      </small>
   </div>

   <nav id="navbar" class="navbar order-last order-lg-0 text-capitalize">
      <ul>
         <?php 
            $result = $mysqli->query('SELECT * from menu');
            $rows = $result->fetch_all(MYSQLI_ASSOC);
            menu($rows);

            function menu($data, $parent_id=0){
               foreach ($data as $key => $value) {
                  if ($value['parent'] == $parent_id) {
                     html($data, $value);
                  }
               }
            }

            function html($data, $menu){
               $count = 0;

               foreach ($data as $key => $value) {
                  if ($value['parent'] == $menu['id']) {
                     $count++;
                  }
               }

               if ($count > 0) {
                  echo '<li class="dropdown">
                        <a href="#">'.$menu['menu_name'].'<i class="bi bi-chevron-right"></i></a>
                           <ul>';
                              menu($data, $menu['id']);
                     echo '</ul>
                     </li>';
               }

               else{
                  echo '<li><a class="nav-link" href="#">'.$menu['menu_name'].'</a></li>';
                  echo '';
               }
            }
			?>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
   </nav><!-- .navbar -->
</div>