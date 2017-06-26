<?php
/* Template Name: Contact Page template */
get_header(); 

?>

   <?php 
   if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

wc_print_notices();

do_action( 'woocommerce_before_checkout_form', $checkout );


   ?>
<div class="plan-process">
   	<div class="container">
    	<div class="row plan-shadow">
        	<div class="col-sm-8">
            	<div id="steps">
    <ul>
        <li><div class="step" data-desc="Plans">1</div></li>
        <li><div class="step" data-desc="Phones">2</div></li>
        <li><div class="step active" data-desc="Checkout">3</div></li>
     
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
            <div class="show-toggle" style="display:none!important">
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
  
  	<div class="checkout-section">
		<div class="container checkout-process">
			<div class="row">
				<div class="col-sm-8"> 
				
					<form name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">
					
					<?php if ( $checkout->get_checkout_fields() ) : ?>

		<?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>
<div class="col2-set" id="customer_details">
					<div class="contact-info">
						<h3>Please Fill YOUR BILLING ADDRESS</h3>
						<?php do_action( 'woocommerce_checkout_billing' ); ?>
					</div>
				
					
					<div class="contact-info prefrence-info">
						<h3>Please Fill YOUR SHIPPING INFORMATION</h3>
						<?php do_action( 'woocommerce_checkout_shipping' ); ?>
					</div>
					</div>

					<?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>

	<?php endif; ?>
		<div class="contact-info prefrence-info card-detail">
						<h3><?php _e( 'PAY FOR YOUR ORDER', 'woocommerce' ); ?></h3>
						<?php do_action( 'woocommerce_checkout_before_order_review' ); ?>
						<div id="order_review" class="woocommerce-checkout-review-order">
		               <?php do_action( 'woocommerce_checkout_order_review' ); ?>
	</div>

		</div>

					</form>
					
				
					
				</div>
				
			</div>
		</div>
</div>
<?php get_footer(); ?>