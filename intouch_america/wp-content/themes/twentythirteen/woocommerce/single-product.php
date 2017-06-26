<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header('shop'); 
global $woocommerce;
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

<?php 
   $product = wc_get_product(get_the_ID());

// Get the attributes
$attributes = $product->get_attributes(); 

 ?>
 <div class="container-fluid phone-detail-sec">
		<div class="card">
			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-4">
					  
						<div class="preview-pic tab-content">
						  <div class="tab-pane active" id="pic-1"><?php echo  get_the_post_thumbnail(get_the_ID()); ?></div>
						 <?php
						$attachment_ids = $product->get_gallery_attachment_ids();
$i = 2;
foreach( $attachment_ids as $attachment_id ) 
{
    ?>
    <div class="tab-pane" id="pic-<?php echo $i; ?>"><img src="<?php echo wp_get_attachment_url( $attachment_id ); ?>"></div>
  <?php
  $i++;
}
?>
						  
						  
						</div>
						<ul class="preview-thumbnail nav nav-tabs">
						  
						    <?php
						$attachment_ids = $product->get_gallery_attachment_ids();
$i = 2;
foreach( $attachment_ids as $attachment_id ) 
{
    ?>
 <li>
     <a data-target="#pic-<?php echo $i; ?>" data-toggle="tab">
 <img src="<?php echo wp_get_attachment_url( $attachment_id ); ?>" height="80px" width="100px">
 </a></li>
  
  <?php
  $i++;
}
?>
						</ul>
						
					</div>
					<div class="details col-md-8">
						<h3 class="product-title"><?php  the_title(); ?></h3>
						<div class="rating">
							<div class="stars">
								<?php
                           
                         $average = $product->get_average_rating();
                                      
    
							  if($average==0){ ?>
							      
							      	<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
								
							      
							 <?php }elseif($average==1){ ?>
							      
							      	<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
								
							  <?php }elseif($average==2){ ?>
							      	<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star "></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
								
							      
							 <?php }elseif($average==3){ ?>
							      
							      	<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
								
							 <?php }elseif($average==4){ ?>
							      	<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								
							      
							<?php  }elseif($average==5){ ?>
							      	<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								
							      
							 <?php }
							   ?>
							
							</div>
							<span class="review-no">Read Review</span>
						</div>
						<p class="product-description"><?php wc_get_template( 'single-product/short-description.php' ); ?></p>
						<h4 class="price">current price: <span>
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
						    
						    
						    
						</span></h4>
						
						

					<?php
				
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
	?>

		<?php while ( have_posts() ) : the_post(); ?>

			<?php wc_get_template_part( 'content', 'single-product' ); ?>

		<?php endwhile; // end of the loop. ?>

	<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>

	
						
						<br/>
						<div class="contact-info prefrence-info detail-items">
						<form>
							<div class="form-group">
								<label for="inputEmail"><h4>Keep Your Existing Phone Number?</h4> </label>
								<div class="check-select-prefrence">
									<span class="button-checkbox check-preference">
										<button type="button" class="btn btn-lg btn-default" data-color="primary"><i class="state-icon glyphicon glyphicon-unchecked"></i>&nbsp;yes</button>
										<input type="checkbox" class="hidden" unchecked="">
									</span>
								</div>
								<div class="check-select-prefrence">
									<span class="button-checkbox check-preference">
										<button type="button" class="btn btn-lg btn-default" data-color="primary"><i class="state-icon glyphicon glyphicon-unchecked"></i>&nbsp;No</button>
										<input type="checkbox" class="hidden" unchecked="">
									</span>
								</div>
							</div>
							
							<div class="form-group">
								<label for="inputEmail"><h4>Protect Your Device:</h4> </label>
									<p>Safeguard this device from spills, drops and hardware failures with a protection plan from our partner, SquareTrade.</p>
							</div>
							
							<div class="form-group">
								<label for="inputEmail"><h4>I want to protect my device with SquareTrade</h4> </label>
								<div class="check-select-prefrence">
									<span class="button-checkbox check-preference">
										<button type="button" class="btn btn-lg btn-default" data-color="primary"><i class="state-icon glyphicon glyphicon-unchecked"></i>&nbsp;yes  $2.00 Monthly</button>
										<input type="checkbox" class="hidden" unchecked="">
									</span>
								</div>
								<div class="check-select-prefrence">
									<span class="button-checkbox check-preference">
										<button type="button" class="btn btn-lg btn-default" data-color="primary"><i class="state-icon glyphicon glyphicon-unchecked"></i>&nbsp;No, I don't want</button>
										<input type="checkbox" class="hidden" unchecked="">
									</span>
								</div>
							</div>
							
							<p><b>NOTE:</b> You can cancel your protection plan at any time.</p>
							
							<div class="continue-shoping1">
								<a href="<?php echo $woocommerce->cart->get_checkout_url(); ?>">Continue Shopping</a>
							</div>
							
							
						</form>
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>

   
<?php get_footer('shop');

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
