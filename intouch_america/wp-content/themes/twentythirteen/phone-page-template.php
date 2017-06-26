<?php /* Template Name: Phone Page template */ 
get_header();
?>
<?php 

global $woocommerce;
$items = $woocommerce->cart->get_cart();

foreach ($items as $item ) {
      $product = $item['data'];
      $terms = get_the_terms( $product->id, 'product_cat' );
      
      foreach ($terms as $term) {
            $cat_ids[$term->term_id] = '';  //get all the item categories in the cart
             
        }

}
$a = array();
foreach($cat_ids as $i=>$v){
    
    array_push($a,$i);
}
print_r($a);
?>
       <div class="sub-banner">
    	<img src="<?php bloginfo('template_directory'); ?>/img/sub-banner.jpg" width="100%;">
    </div>
   
   <div class="plan-process">
   	<div class="container-fluid">
    	<div class="row">
        	<div class="col-sm-8">
            	<div id="steps">
    <ul>
        <li><div class="step" data-desc="Plans">1</div></li>
        <li><div class="step active" data-desc="Phones">2</div></li>
        <li><div class="step" data-desc="Checkout">3</div></li>
      <!-- <li><div class="step" data-desc="Validation">4</div></li>
        <li><div class="step" data-desc="Payment">5</div></li>
        <li><div class="step" data-desc="Resume">6</div></li>-->
<!--         <li><div class="step" data-desc="Other">7</div></li> -->
    </ul>
</div>
            </div>
            <div class="col-sm-4">
            	<div class="due-box">
            	<span>
                 	Due Today
$30.00   
                </span>
                </div>
            
            <div class="due-box2">
            		<span>
                 	Due Monthly
$30.00   
                </span>
            </div>
            <div class="add-to-cart-btn">
            	<button class="cart-toggle"><i class="fa fa-sort-desc" aria-hidden="true"></i> View Cart <i class="fa fa-sort-desc" aria-hidden="true"></i></button>
            </div>
            <div class="show-toggle" style="display:none">
            	<div class="head-cart">
            	<h3>VIEW CART ITEMS</h3>
                </div>
                <div class="cart-detail">
                   
                    <?php global $woocommerce;
                            $cart = $woocommerce->cart->cart_contents;
                            
                            foreach($cart as $item){ 
                            ?>
                        <div class="cart-left">
                        <h4>Product Name</h4>
                        </div>
                         <div class="cart-right">
                        <h4><?php echo $item['data']->post->post_title; ?></h4>
                        </div>      
                        <div class="cart-left">
                        <h4>Quantity</h4>
                        </div>
                         <div class="cart-right">
                        <h4><?php echo $item['quantity']; ?></h4>
                        </div>  
                         <div class="cart-left">
                        <h4>Price</h4>
                        </div>
                         <div class="cart-right">
                        <h4>$<?php echo $item['line_total']; ?></h4>
                        </div>  
                   

                        <?php } ?>
                     <div class="cart-left">
                        <h4>Cart Total</h4>
                        </div>
                         <div class="cart-right">
                        <h4><?php echo  $woocommerce->cart->get_cart_total(); ?></h4>
                        </div>  
                   
                </div>
                
                <div class="head-cart">
            		<h3>INVOICE CREDITS
Next Invoice</h3>
                </div>
                <div class="cart-detail">
                	<p><span>First Month Free</span>
Your order qualifies for our First
Month Free promotion! Talk and
Connect Plans, plus any additional
line fees, will be complimentary for
your first monthly billing cycle. We'll
apply this credit to your first invoice.</p>
                </div>
            </div>
            </div>
        </div>
    </div> 
   </div>
   
  
   
   <div class="choose-plan">
   	<div class="container-fluid">
    	<div class="row">
        	<div class="col-sm-8">
            	<div class="choose-plan-content">
                	<h2>PHONES & DEVICES </h2>
                    
                    <p>At InTouch America we have a wide selection of cell phone plans to suit anyone. If you are unsure about choosing the best plan to fit your requirements and budget, please just give us call on (800) 500-0066 or send us a message Here. Our friendly 100% U.S. based customer service team is always happy to help with any questions that you may have. We can always evaluate your specific wireless usage and recommend a great plan that would work best for your needs. </p>
                </div>
            </div>
            <div class="col-sm-4">
            	<div class="right-main-content">
                	<h3>Same Great Networks up to 74% Less!</h3>
                    <p>With our flexible cell phone plans, you are always in control.  You can easily change your plan at anytime withno extra charges.</p>
                </div>
            </div>
        </div>
    </div>
   </div>
 <div class="phone-device">
    	<div class="container-fluid">
        	   
  <?php 
    $i=0; // counter
       
    $args = array( 'post_type' => 'product', 'posts_per_page' => 10, 'product_cat' => 'phones' );

    $loop = new WP_Query( $args );

    while ( $loop->have_posts() ) : $loop->the_post(); 
    
    if ($i%4==0) { // if counter is multiple of 3
    
    
    echo '<div class="row">';
    
    }
    
    global $product; 

    $attributes = $product->get_attributes();
    
    $mypro_id = $product->id;
    ?>
    <div class="col-sm-3">
                	<div class="phone-box">
                    	<?php echo woocommerce_get_product_thumbnail() ?>
                        <h3><?php echo get_the_title() ?></h3>
                         <?php
                        // $average = $product->get_average_rating();
    //echo '<div class="star-rating"><span style="width:'.( ( $average / 5 ) * 100 ) . '%"><strong itemprop="ratingValue" class="rating">'.$average.'</strong> '.__( 'out of 5', 'woocommerce' ).'</span></div>';
    ?>
    
                            <p><span><i class="fa fa-star"></i></span> <span><i class="fa fa-star"></i></span> <span><i class="fa fa-star"></i></span> <span><i class="fa fa-star"></i></span> <span><i class="fa fa-star"></i></span> <span class="r-review"><a href="#">Read Review</a></span></p>
                            	
                            <p class="price-phone">
                             <?php
						    	#Step 1: Get product varations
$available_variations = $product->get_available_variations();

#Step 2: Get product variation id
$variation_id=$available_variations[0]['variation_id']; // Getting the variable id of just the 1st product. You can loop $available_variations to get info about each variation.

#Step 3: Create the variable product object
$variable_product1= new WC_Product_Variation( $variation_id );

#Step 4: You have the data. Have fun :)
$regular_price = $variable_product1 ->regular_price;

echo '$ '.$regular_price;
					
					?>
                            </p>
                            <div class="phone-btn">
                            	<a data-toggle="modal" data-target="#myModal<?php echo $product->id; ?>">View Detail</a> <a href="<?php echo $product->get_permalink(); ?>">Add To Cart</a>
                            </div>
                    </div>
                    <!-- Modal -->
<div class="modal fade" id="myModal<?php echo $product->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel<?php echo $i; ?>">SPECIFICATIONS</h4>
      </div>
      <div class="modal-body">
        <div class="container-fluid phone-detail-sec">
		<div class="card">
			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-4">
					    
					    
					    	<div class="preview-pic tab-content">
						  <div class="tab-pane active" id="pic-1-<?php echo $product->id ?>"><?php echo  get_the_post_thumbnail($product->id); ?></div>
						 <?php
						$attachment_ids = $product->get_gallery_attachment_ids();
						
$k = 2;
foreach( $attachment_ids as $attachment_id ) 
{
 
    ?>
    <div class="tab-pane" id="pic-<?php echo $k; ?>-<?php echo $product->id ?>"><img src="<?php echo wp_get_attachment_url( $attachment_id ); ?>"></div>
  <?php
  $k++;
  
  
}
?>
						  
						  
						</div>
						
						
						<ul class="preview-thumbnail nav nav-tabs">
						  
						    <?php
						$attachment_ids = $product->get_gallery_attachment_ids();
					
$l = 2;
foreach( $attachment_ids as $attachment_id ) 
{
      if($mypro_id == $product->id){  
    ?>
 <li>
     <a data-target="#pic-<?php echo $l; ?>-<?php echo $product->id ?>" data-toggle="tab">
 <img src="<?php echo wp_get_attachment_url( $attachment_id ); ?>" height="80px" width="100px">
 </a></li>
  
  <?php
  $l++;
      }
}
?>
						</ul>
						
					</div>
					<div class="details col-md-8">
						<h3 class="product-title"><?php echo get_the_title() ?></h3>
						<div class="rating">
							<div class="stars">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
								
								
							
							</div>
							<span class="review-no">Read Review</span>
						</div>
						<p class="product-description"><?php echo get_the_content() ?></p>
						<h4 class="price">current price:  <span>
						    
						     <?php
						    	#Step 1: Get product varations
$available_variations = $product->get_available_variations();

#Step 2: Get product variation id
$variation_id=$available_variations[0]['variation_id']; // Getting the variable id of just the 1st product. You can loop $available_variations to get info about each variation.

#Step 3: Create the variable product object
$variable_product1= new WC_Product_Variation( $variation_id );

#Step 4: You have the data. Have fun :)
$regular_price = $variable_product1 ->regular_price;

echo '$ '.$regular_price;
					
					?>
						<?php
   foreach ( $attributes as $attribute ) : 

   	if($attribute['name']=='Size') {

   		echo '<h5 class="sizes">sizes:';

    // Check and output, adopted from /templates/single-product/product-attributes.php
    if ( $attribute['is_taxonomy'] ) {
        $values = wc_get_product_terms( $product->id, $attribute['name'], array( 'fields' => 'names' ) );
        echo '<span class="size" data-toggle="tooltip">'.apply_filters( 'woocommerce_attribute', wpautop( wptexturize( implode( '  ', $values ) ) ), $attribute, $values ).'</span>';
    } else {
        // Convert pipes to commas and display values
        $values = array_map( 'trim', explode( WC_DELIMITER, $attribute['value'] ) );
        echo '<span class="size" data-toggle="tooltip">'.apply_filters( 'woocommerce_attribute', wpautop( wptexturize( implode( '  ', $values ) ) ), $attribute, $values ).'</span>';
    }
    echo '</h5>';
}
endforeach;

?>
<?php
   foreach ( $attributes as $attribute ) : 

   	if($attribute['name']=='Color') {

   		echo '<h5 class="colors">Colors:';

    // Check and output, adopted from /templates/single-product/product-attributes.php
    if ( $attribute['is_taxonomy'] ) {
        $values = wc_get_product_terms( $product->id, $attribute['name'], array( 'fields' => 'names' ) );
        echo '<span class="color">'.apply_filters( 'woocommerce_attribute', wpautop( wptexturize( implode( ', ', $values ) ) ), $attribute, $values ).'</span>';
    } else {
        // Convert pipes to commas and display values
        $values = array_map( 'trim', explode( WC_DELIMITER, $attribute['value'] ) );
        echo '<span class="color">'.apply_filters( 'woocommerce_attribute', wpautop( wptexturize( implode( ', ', $values ) ) ), $attribute, $values ).'</span>';
    }
    echo '</h5>';
}
endforeach;

?>
					
					</div>
				</div>
			</div>
		</div>
	</div>
      </div>
      
    </div>
  </div>
</div>
                </div>
    <?php $i++;
    
    if ($i%4==0) { // if counter is multiple of 3
    
    
    echo '</div>';
    
    }
    
    endwhile; 


    wp_reset_query(); 


  ?>
            

            
        </div>
    </div>

   
    <?php get_footer(); ?>
   