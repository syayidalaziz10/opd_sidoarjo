<div class="container d-flex align-items-center">
   <div class="container-fluid d-flex align-items-center gap-3">
      <a class="navbar-brand" href="#">
         <img src="images/sidoarjo.png" alt="" width="35" height="35" class="d-inline-block align-text-top">
         <!-- <h3 class="logo me-auto text-uppercase fs-5 text-white"><a href="index.html">diskominfo</a></h3> -->
      </a>
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
      <i class="bi bi-list mobile-nav-toggle text-white"></i>
   </nav><!-- .navbar -->
</div>