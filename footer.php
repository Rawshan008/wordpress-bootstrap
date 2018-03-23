 <!-- Footer -->
	<div class="footer-wigdets">
		<div class="container">
			<div class="row">
				<?php
				if(is_active_sidebar('footer_widgets')){
					dynamic_sidebar('footer_widgets');
				}
				 ?>
			</div>
		</div>
	</div>

    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  
    <?php wp_footer(); ?>
  </body>


</html>