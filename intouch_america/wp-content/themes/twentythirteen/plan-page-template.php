<?php /* Template Name: Plan Page template */ 
get_header();
?>
    
    <div class="sub-banner">
        <img src="<?php bloginfo('template_directory'); ?>/img/sub-banner.jpg" width="100%;">
    </div>
   
   <div class="plan-process">
    <div class="container">
        <div class="row plan-shadow">
            <div class="col-sm-8">
                <div id="steps">
    <ul>
        <li><div class="step active" data-desc="Plans">1</div></li>
        <li><div class="step" data-desc="Phones">2</div></li>
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
<?php $totalamount = $woocommerce->cart->get_cart_total(); echo $totalamount; 

?>
                </span>
                </div>
            
            <div class="due-box2">
            		<span>
                 	Due Monthly
<?php $totalamount = $woocommerce->cart->get_cart_total(); echo $totalamount; 

?>   
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
                
                <?php 
    	    
                global $woocommerce;
                
                if($woocommerce->cart->cart_contents_count > 0){
                
                ?>
                
                <div class="head-cart">
                    <h3><a href="<?php echo $woocommerce->cart->get_checkout_url() ?>" >Checkout</a></h3>
                </div>
                <?php } ?>
                
            </div>
            </div>
        </div>
    </div> 
   </div>
   
  <div class="rate-head">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <span><input type="checkbox" class="check-rate"><span class="rate-content">YES I AM VETERN ADDITIONAL 5% OFF YOUR MONTHLY RATES FOR LIFE!</span> <img src="<?php bloginfo('template_directory'); ?>/img/flag.jpg" class="flag"></span>
                    
                </div>
            </div>
        </div>
   </div>
   
   <div class="choose-plan">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="choose-plan-content">
                    <h2>Choose Your Best Plan Based On Your Needs</h2>
                    <h3>National Freedom Plans:</h3>
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
   
   
   
   <div class="new-pricing">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    
                <?php 
                $i=1; // counter
                   
                $args = array( 'post_type' => 'product', 'posts_per_page' => 5, 'product_cat' => 'simple-plans' );
            
                $loop = new WP_Query( $args );
            
                while ( $loop->have_posts() ) : $loop->the_post(); 
                
                global $product; 
            
                ?>
                                
                    
                    
                    <?php global $woocommerce;
 
    foreach($woocommerce->cart->get_cart() as $key => $val ) {
        $_product = $val['data'];
 
        if($product_id == $_product->id ) {
            return true;
        }
    }
    ?>
 
                    
                    <div id="<?php echo "box".$product->id; ?>" class="new-price-box a">
                        <p id="p-price" class="main-price">
                            $ <?php echo $product->get_display_price( $product->get_regular_price() ) ?>
                        </p>
                        <p class="m-acc">
                            <?php echo get_the_title() ?>
                        </p>
                         <p id="selectone-<?php echo $product->id; ?>" class="select-btn s_one">
                             
                             <button id="demo" onClick="myFunction(<?php echo $i; ?>,<?php echo $product->id; ?>,<?php echo $product->get_display_price( $product->get_regular_price() ) ?>)">Select Plan <i class="fa fa-plus"></i><i class="fa fa-check" style="display:none;"></i></button>
                             
                        </p>
                       
                       
                        <p><img src="<?php bloginfo('template_directory'); ?>/img/free-dark.jpg"></p>
                        <p><span><img src="<?php bloginfo('template_directory'); ?>/img/right-ico.png"></span> <span>120 Minutes Included</span></p>
                        <p><span><img src="<?php bloginfo('template_directory'); ?>/img/right-ico.png"></span> <span>$0.30 Additional Airtime</span></p>
                        <p><span><img src="<?php bloginfo('template_directory'); ?>/img/right-ico.png"></span> <span>Free Long Distance</span></p>   
                        <p><span><img src="<?php bloginfo('template_directory'); ?>/img/right-ico.png"></span> <span>Free Long Distance</span></p>   
                        
                    </div>
                    
                    
                   <?php $i++;
    
    
    endwhile; 


    wp_reset_query(); 


  ?>
            
 
                    
                    
                </div>
            </div>
        </div>
   </div>
   
   <div class="smart-value">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2>Smartphone value plans:</h2>
                <p>Exceptional Talk, Text & Data Plans on America's Best 4G Networks</p>
            </div>
        </div>
    </div>
   </div>
   
   <div class="new-pricing">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                <?php 
                $j=1; // counter
                   
                $args = array( 'post_type' => 'product', 'posts_per_page' => 5, 'product_cat' => 'smartphone-value-plans' );
            
                $loop = new WP_Query( $args );
            
                while ( $loop->have_posts() ) : $loop->the_post(); 
                
                
                
                global $product; 
            
                
                ?>
                                
                
                    <div id="<?php echo "box2".$product->id; ?>" class="new-price-box b">
                        <p id="s-price" class="main-price">
                            $ <?php echo $product->get_display_price( $product->get_regular_price() ) ?>
                        </p>
                        <p class="m-acc">
                            <?php echo get_the_title() ?>
                        </p>
                        <p id="select-<?php echo $product->id; ?>" class="select-btn s_two">
                            
                        
                            
                            <button id="demo" onClick="mySecFunction(<?php echo $j; ?>,<?php echo $product->id; ?>,<?php echo $product->get_display_price( $product->get_regular_price() ) ?>)">Select Plan <i class="fa fa-plus"></i></button>    
                                
                            
                            
                        
                        
                        </p>
                        <p><img src="<?php bloginfo('template_directory'); ?>/img/free-dark.jpg"></p>
                         <p><span><img src="<?php bloginfo('template_directory'); ?>/img/right-ico.png"></span> <span>120 Minutes Included</span></p>
                        <p><span><img src="<?php bloginfo('template_directory'); ?>/img/right-ico.png"></span> <span>$0.30 Additional Airtime</span></p>
                        <p><span><img src="<?php bloginfo('template_directory'); ?>/img/right-ico.png"></span> <span>Free Long Distance</span></p>   
                        <p><span><img src="<?php bloginfo('template_directory'); ?>/img/right-ico.png"></span> <span>Free Long Distance</span></p>   
                         
                    </div>
                   
                   <?php $j++;
    
    
    endwhile; 


    wp_reset_query(); 


  ?>
            
                    
                </div>
            </div>
        </div>
   </div>
   
   <div class="container line-dropdown">
       
   <div class="row">
       
       <div class="col-sm-12">
           
            <select name="line" class="form-control">
                <option value="229">One Line</option>
                <option value="230">Two Line</option>
            </select>
       </div>
       
   </div>
       
   </div>
   
  
   
   
   
   <div class="choose-plan">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="choose-plan-content">
                    <h2>MONTHLY PLAN TOTALS</h2>
                    <h3>National Freedom Plans:</h3>
                    <p>At InTouch America we have a wide selection of cell phone plans to suit anyone. If you are unsure about choosing the best plan to fit your requirements and budget, please just give us call on (800) 500-0066 or send us a message Here. Our friendly 100% U.S. based customer service team is always happy to help with any questions that you may have. We can always evaluate your specific wireless usage and recommend a great plan that would work best for your needs. </p>
                </div>
            </div>
            <div class="col-sm-4 continue-shoping1">
                <div class="right-main-content continue-shoping" >
                    <h2 class="text-center"><span id="plan-price">$0</span> <br/>MONTHLY BILL</h2>
                    
                </div>
                
                <input type="hidden" id="simple_pro" value="">
                <input type="hidden" id="smart_pro" value="">
            
                
                <button id="shop" onClick="addTocart()" class="add-to-cart-btn">Continue Shopping</button>
            </div>
            <div class="col-sm-4">
                <div class="choose-plan-content">
                    <h2>MONTHLY PLAN TOTALS</h2>
                    <h3>National Freedom Plans:</h3>
                    <p>At InTouch America we have a wide selection of cell phone plans to suit anyone. If you are unsure about choosing the best plan to fit your requirements and budget, please just give us call on (800) 500-0066 or send us a message Here. Our friendly 100% U.S. based customer service team is always happy to help with any questions that you may have. We can always evaluate your specific wireless usage and recommend a great plan that would work best for your needs. </p>
                </div>
            </div>
        </div>
    </div>
   </div>
   <div class="features feature2">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2>Included Features on all plans</h2>
                   
                </div>
            </div>
            <div class="row categories">
                <div class="col-sm-4">
                    <div class="box text-center">
                        <img src="<?php bloginfo('template_directory'); ?>/img/icon1.png" alt="ACA Compliance">
                        <h3>FREE Cell Phone</h3>
                        <p>Across the nation. Backed with 30 years of experience our service is free and our process is absolutely simple</p>
                        <img src="<?php bloginfo('template_directory'); ?>/img/down_icon.png" alt="more">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="box text-center">
                        <img src="<?php bloginfo('template_directory'); ?>/img/icon2.png" alt="ACA Compliance">
                        <h3>FREE Shipping</h3>
                        <p>Across the nation. Backed with 30 years of experience our service is free and our process is absolutely simple</p>
                        <img src="<?php bloginfo('template_directory'); ?>/img/down_icon.png" alt="more">
                    </div>
                </div>
                <div class="col-sm-4 right_border">
                    <div class="box text-center">
                        <img src="<?php bloginfo('template_directory'); ?>/img/icon3.png" alt="ACA Compliance">
                        <h3>Best National Wireless Networks</h3>
                        <p>Across the nation. Backed with 30 years of experience our service is free and our process is absolutely simple</p>
                        <img src="<?php bloginfo('template_directory'); ?>/img/down_icon.png" alt="more">
                    </div>
                </div>
            </div>
            
            <div class="row categories">
                <div class="col-sm-4 ">
                    <div class="box text-center bottom_border ">
                        <img src="<?php bloginfo('template_directory'); ?>/img/icon4.png" alt="ACA Compliance">
                        <h3>FREE Activation ($36 value)</h3>
                        <p>Across the nation. Backed with 30 years of experience our service is free and our process is absolutely simple</p>
                        <img src="<?php bloginfo('template_directory'); ?>/img/down_icon.png" alt="more">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="box text-center bottom_border">
                        <img src="<?php bloginfo('template_directory'); ?>/img/icon5.png" alt="ACA Compliance">
                        <h3>Veteran Discount</h3>
                        <p>Across the nation. Backed with 30 years of experience our service is free and our process is absolutely simple</p>
                        <img src="<?php bloginfo('template_directory'); ?>/img/down_icon.png" alt="more">
                    </div>
                </div>
                <div class="col-sm-4 right_border">
                    <div class="box text-center bottom_border">
                        <img src="<?php bloginfo('template_directory'); ?>/img/icon6.png" alt="ACA Compliance">
                        <h3>Refer a Friend &amp; Get $10 Each</h3>
                        <p>Across the nation. Backed with 30 years of experience our service is free and our process is absolutely simple</p>
                        <img src="<?php bloginfo('template_directory'); ?>/img/down_icon.png" alt="more">
                    </div>
                </div>
            </div>
            
            
        </div>
    </div>
   

    <?php get_footer(); ?>
   