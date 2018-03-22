    <footer>
      <?php
          $args = array(
            'theme_location' => 'header-menu',
            'container' => 'nav',
            'after' => '<span class="separator"> | </span>'
          );
          wp_nav_menu($args);
       ?>

       <div class="location">
         <p>779 Logwood Terace, Portmore</p>
         <p>Phone Number: +1-876-872-8763</p>
       </div>


       <p class="copyright">All rights reserved <?php echo date('Y'); ?></p>
    </footer>





    <?php wp_footer(); ?>
  </body>
</html>
