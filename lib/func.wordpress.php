<?php
//* Fonction pour WordPress

//Enlever la barre Admin en front
// show_admin_bar( false );


add_action( 'wp_footer', 'slick_script', 9000 );
function slick_script() {
	// Si ce n'est pas l'accueil, le script s'arrête
	if ( ! is_home() ) { return; }
?>	

	<script type="text/javascript">
		jQuery('.slider-slick').slick({
		  autoplay: true,
		  autoplaySpeed: 2000,
		});
	</script>
<?php }