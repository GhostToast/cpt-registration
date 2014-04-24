add_action( 'init', 'ghost_create_post_type', 10, 1);
function ghost_create_post_type() {
	$cpt_holder = array();
	//$cpt_holder[] = array( Single, Plural, slug, array( supports ), public, etc );
	$cpt_holder[]	= array( 'Shirt', 'Shirts', 'shirt', array( 'title', 'editor', 'thumbnail', 'revisions' ), true );
  $cpt_holder[]	= array( 'Pant', 'Pants', 'pant', array( 'title', 'editor', 'revisions' ), true ); 
	foreach ( $cpt_holder as $cpt ) {
		register_post_type( $cpt[2],				   
			array(
				'labels' => array(
				'name' => $cpt[1],
				'singular_name' => $cpt[0],
				'add_new' => 'Add New ' .$cpt[0],
				'add_new_item' => 'Add New ' .$cpt[0],
				'edit_item' => 'Edit ' .$cpt[0],
				'new_item' => 'New ' .$cpt[0],
				'view_item' => 'View ' .$cpt[0],
				'search_items' => 'Search ' .$cpt[1],
				'not_found' => 'No ' .$cpt[1]. ' found',
				),
			'public' => $cpt[4],
			'has_archive' => true,
			'supports' => $cpt[3],
			)
		);	
	}
}
