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
     
    jQuery(function () {
    jQuery('.button-checkbox').each(function () {

        // Settings
        var $widget = $(this),
            $button = $widget.find('button'),
            $checkbox = $widget.find('input:checkbox'),
            color = $button.data('color'),
            settings = {
                on: {
                    icon: 'glyphicon glyphicon-check'
                },
                off: {
                    icon: 'glyphicon glyphicon-unchecked'
                }
            };

        // Event Handlers
        $button.on('click', function () {
            $checkbox.prop('checked', !$checkbox.is(':checked'));
            $checkbox.triggerHandler('change');
            updateDisplay();
        });
        $checkbox.on('change', function () {
            updateDisplay();
        });

        // Actions
        function updateDisplay() {
            var isChecked = $checkbox.is(':checked');

            // Set the button's state
            $button.data('state', (isChecked) ? "on" : "off");

            // Set the button's icon
            $button.find('.state-icon')
                .removeClass()
                .addClass('state-icon ' + settings[$button.data('state')].icon);

            // Update the button's color
            if (isChecked) {
                $button
                    .removeClass('btn-default')
                    .addClass('btn-' + color + ' active');
            }
            else {
                $button
                    .removeClass('btn-' + color + ' active')
                    .addClass('btn-default');
            }
        }

        // Initialization
        function init() {

            updateDisplay();

            // Inject the icon if applicable
            if ($button.find('.state-icon').length == 0) {
                $button.prepend('<i class="state-icon ' + settings[$button.data('state')].icon + '"></i> ');
            }
        }
        init();
    });
});
</script>
    
    
    
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
  jQuery( ".contact_menu" ).toggle();
});
</script>
<script>
jQuery( ".menu_button" ).click(function() {
  jQuery( ".menu_menu" ).toggle();
});

jQuery( ".cart-toggle" ).click(function() {
  jQuery( ".show-toggle" ).toggle();
});


	$('.step').each(function(index, el) {
  $(el).not('.active').addClass('done');
  $('.done').html('<i class="icon-valid"></i>');
  if($(this).is('.active')) {
    $(this).parent().addClass('pulse')
    return false;
  }
});





var sp_cart = 0;
var check = 0;
var total = 0;

function myFunction(id,proid,price){
    
     var url = document.location;

        jQuery('.a').removeClass('active-price');    
        
        
        jQuery('#box'+proid).addClass('active-price');
         
        jQuery('#simple_pro').val(proid);
         
        total = price; 
        
        total = total.toFixed(2);
        
        jQuery("#plan-price").html("$"+total);
        
        jQuery('.b').removeClass('active-price'); 
        jQuery('#smart_pro').val('');
        
    
        
     check = 1;
}  

 

function mySecFunction(id,proid,price){
    
    if(check=='1'){
    var url = document.location;
    
   
     if(jQuery('#box2'+proid).hasClass('active-price'))
       {
         
           jQuery('#box2'+proid).removeClass('active-price');
           jQuery('#smart_pro').val('');
           
         
           
            jQuery("#plan-price").html("$"+total);
            
           
        }else{
           
            jQuery('.b').removeClass('active-price');    
    
            jQuery('#box2'+proid).addClass('active-price');
            
            jQuery('#smart_pro').val(proid);
            
            
            var spm = parseFloat(total) + parseFloat(price);
            
            
             spm = spm.toFixed(2);
            
            jQuery("#plan-price").html("$"+spm);
            
        
           
       }
      
    }else{
        
        alert("Please select monthly access plan first");
    }

} 
 
function addTocart(){
    
     var url = document.location;
     
     var sPlan = jQuery('#simple_pro').val();
     var spPlan = jQuery('#smart_pro').val(); 
     var line_item = $('select[name="line"] option:selected').val();
   
    
    if(sPlan!=''){
        
        var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
        
        if(spPlan!=''){
            
                    jQuery.ajax({
                    type: "POST",
                    url: ajaxurl,
                     data: {'simplepro_id' : sPlan,'smartpro_id' : spPlan,'line_item' : line_item},
                    success: function (res) {
                        if (res) {
                            
                              window.location = url+'/phones';
                        }
                    }
                });
            
        }else{
            
                    jQuery.ajax({
                    type: "POST",
                    url: ajaxurl,
                     data: {'simplepro_id' : sPlan,'line_item' : line_item},
                    success: function (res) {
                        if (res) {
                            
                              window.location = url+'/phones';
                        }
                    }
                });
        }
        
    }else{
        
       alert('Please select Monthly Plan'); 
       return false;
    }
    
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
<?php wp_footer(); ?>
  </body>
</html>