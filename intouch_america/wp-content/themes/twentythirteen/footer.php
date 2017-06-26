<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>
    <div class="footer-main">
	<div class="footer">
    	<div class="container">
        	<div class="row">
            	<div class="col-sm-3 block">
                	<h4>COMPANY INFO</h4>
                    <ul>
                    	<li><a href="#">Cell Phones</a></li>
                        <li><a href="#">Smartphones</a></li>
                        <li><a href="#">Senior Friendly Phones
</a></li>
                        <li><a href="#">Accessories</a></li>
                        <li><a href="#">Blog</a></li>
						<li><a href="#">FAQ</a></li>
						<li><a href="#">Cell Phone Lingo</a></li>
                    </ul>
                </div>
                <div class="col-sm-3 block">
                	<h4>IMPORTANT LINKS</h4>
                    <ul>
                    	<li><a href="#">Cell Phones</a></li>
                        <li><a href="#">Smartphones</a></li>
                        <li><a href="#">Senior Friendly Phones
</a></li>
                        <li><a href="#">Accessories</a></li>
                        <li><a href="#">Blog</a></li>
						<li><a href="#">FAQ</a></li>
						<li><a href="#">Cell Phone Lingo</a></li>
                    </ul>
                </div>
                <div class="col-sm-3 block">
                	<h4>PRODUCTS</h4>
                    <ul>
                    	<li><a href="#">Cell Phones</a></li>
                        <li><a href="#">Smartphones</a></li>
                        <li><a href="#">Senior Friendly Phones
</a></li>
                        <li><a href="#">Accessories</a></li>
                        <li><a href="#">Blog</a></li>
						<li><a href="#">FAQ</a></li>
						<li><a href="#">Cell Phone Lingo</a></li>
                    </ul>
                </div>
                <div class="col-sm-3 block">
                	<h4>CONNECT WITH US</h4>
                    <P class="call_us"><i class="fa fa-phone"></i> <span>(855) 563-6993</span></P>
					<P class="call_us"><i class="fa fa-envelope"></i> <span>info@intouchamerica.com</span></P>
					<br/>
					<p><img src="<?php bloginfo('template_directory'); ?>/img/foot-logo.png" alt="">
                </div>
            </div>
        </div>
    </div>
	
     <!--footer end-->
    
    <div class="last_footer">
    	<div class="container">
        	<div class="row">
            	<div class="col-sm-6">
                </div>
                <div class="col-sm-6">
                	<span class="pull-right">© 2017 Intouch America , Inc. All Rights Reserved</span>
                </div>
            </div>
        </div>
    </div>
	</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="https://use.fontawesome.com/a832a5b49f.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
    <script>
    
        jQuery('.toBottom').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
            || location.hostname == this.hostname) {

            var target = jQuery(this.hash);
            target = target.length ? target : jQuery('[name=' + this.hash.slice(1) +']');
               if (target.length) {
                 jQuery('html,body').animate({
                     scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });
    
    
        jQuery( document ).ready(function() {
            jQuery('#nav_fix').affix({
                offset: {
                    top: 100    
                }
            });
        });
        
        /* highlight the top nav as scrolling occurs */ 
        jQuery('body').scrollspy({ target: '#nav_fix' })
    
    </script>
    <script>
jQuery( ".contact_button" ).click(function() {
  jQuery( ".contact_menu" ).toggle( "slow" );
});
</script>
<script>
jQuery( ".menu_button" ).click(function() {
  jQuery( ".menu_menu" ).toggle( "slow" );
});

jQuery( ".cart-toggle" ).click(function() {
  jQuery( ".show-toggle" ).toggle( "slow" );
});


	$('.step').each(function(index, el) {
  $(el).not('.active').addClass('done');
  $('.done').html('<i class="icon-valid"></i>');
  if($(this).is('.active')) {
    $(this).parent().addClass('pulse')
    return false;
  }
});




var cart_price = 0;
var sp_cart = 0;
function myFunction(id,proid,price){
    
     var url = document.location;
    
    jQuery('.a').removeClass('active-price');    
   
    
  
    
     jQuery('#box'+proid).addClass('active-price');
     
      jQuery('#simple_pro').val(proid);
     
    cart_price = price; 
    
    var num = cart_price.toFixed(2);
    
    jQuery("#plan-price").html("$"+num);
    
} 


function mySecFunction(id,proid,price){
    var url = document.location;
    
   
     jQuery('.b').removeClass('active-price');    
   
  
    jQuery('#box2'+proid).addClass('active-price');
    
    jQuery('#smart_pro').val(proid);
    var sp_cart = cart_price+price; 
    
    var num = sp_cart.toFixed(2);
    
    jQuery("#plan-price").html("$"+num);
    
} 

function addTocart(){
    
     var url = document.location;
     
     var sPlan = jQuery('#simple_pro').val();
     var spPlan = jQuery('#smart_pro').val(); 
   
    

    var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
    
    jQuery.ajax({
        type: "POST",
        url: ajaxurl,
         data: {'simplepro_id' : sPlan,'smartpro_id' : spPlan},
        success: function (res) {
            if (res) {
                alert(res);
                  window.location = url+'/phones?simple=' +sPlan+"&smart="+spPlan;
            }
        }
    }); 
    
    
    
    
}
 /*
function myRejSecFunction(id,proid,price){
   var url = document.location;
    
    var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
    
    jQuery.ajax({
        type: "POST",
        url: ajaxurl,
        data: {action : 'remove_item_from_cart','product_id' : proid},
        success: function (res) {
            if (res) {
                alert('Removed Successfully');
            }
        }
    }); 
    
    
   jQuery('#box2'+proid).removeClass('active-price');
      jQuery("#select-"+proid).html('<button id="demo" onClick="mySecFunction('+id+','+proid+','+price+')">Select Plan <i class="fa fa-check"></i></button>');
    
}



function myRejFunction(id,proid,price){
  
     var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
    
    jQuery.ajax({
        type: "POST",
        url: ajaxurl,
        data: {action : 'remove_item_from_cart','product_id' : proid},
        success: function (res) {
            if (res) {
               // alert('Removed Successfully');
            }
        }
    });
     
   // jQuery("#selectone-"+proid).html('<button id="demo" onClick="myFunction('+id+','+proid+','+price+')">Select Plan <i class="fa fa-plus"></i></button>');
    jQuery('#box'+proid).removeClass('active-price');

    cart_price = cart_price-price;
    
    var num = cart_price.toFixed(2);
    
    jQuery("#plan-price").html("$"+num);
    
} 

/*

function mySecFunction(id,proid){
    var url = document.location;
    
    jQuery.ajax({
          type: 'POST',
          url: url+'?add-to-cart='+proid,
          data: { 'product_id':  id},
          success: function(response, textStatus, jqXHR){
               alert("Product added");
                console.log("Product added");

            },
         
        }); 
    
    //jQuery("#select-"+id).html('<button id="demo" onClick="mySecRejFunction('+id+','+proid+')">Reject Plan <i class="fa fa-check"></i></button>');
    jQuery('#box2'+id).addClass('active-price');
    
} 
function mySecRejFunction(id,proid){
    var url = document.location;
    
    var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
    
    jQuery.ajax({
        type: "POST",
        url: ajaxurl,
        data: {action : 'remove_item_from_cart','product_id' : proid},
        success: function (res) {
            if (res) {
                alert('Removed Successfully');
            }
        }
    });
    
    
    jQuery("#select-"+id).html('<button id="demo" onClick="mySecFunction('+id+','+proid+')">Select Plan <i class="fa fa-plus"></i></button>');
    jQuery('#box2'+id).removeClass('active-price');
   
}
*/
</script>

  </body>
</html>