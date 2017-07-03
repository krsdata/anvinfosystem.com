$(document).ready(function() {
    $(".phonevalidation").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
             // Allow: Ctrl+A, Command+A
            (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) || 
             // Allow: home, end, left, right, down, up
            (e.keyCode >= 35 && e.keyCode <= 40)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
});
function Dologin()
{
	$('#loginerror').hide();
	var username=$('#username').val();
	var password=$('#password').val();
	if(document.getElementById('rememberme').checked) {
		var rememberme="1";
	} else {
		var rememberme="0";
	}
	if(username=='')
	{
		$('#loginerror').show();
		$('#loginerror').text('Need to enter User ID.');
		$('#username').focus();
	}
	
	else if(password=='')
	{
		$('#loginerror').show();
		$('#loginerror').text('Need to enter Password.');
		$('#username').focus();
	}
	else
	{
		$('#loginerror').hide();
		var UrlToPass = 'action=Dologin&username='+username+'&password='+password+'&rememberme='+rememberme;
		$('#loader').show();
		$("input").prop('disabled', true);
			$.ajax({ 
			type : 'POST',
			data : UrlToPass, 
			url  : 'process/process.php',
			success: function(data){
				$('#loader').hide(); 
				$("input").prop('disabled', false);
				var data=$.trim(data);
				if(data=='0')
				{
					$('#loginerror').show();
		            $('#loginerror').text('Sorry Invalid Login Details.');
					$('#username').val('');
	                $('#password').val('');
				}
				else
				{
					window.location.href='dashboard';
				}
			  }
			  
			}); 
		
	}
}

function chnagepassword()
{
	$('#passsuc').hide();
	$('#olderror').hide();
	$('#cnewerror').hide();
	$('#passerror').hide();
	var pnew=$('#new').val();
	var cnew=$('#cnew').val();
	var old=$('#old').val();
	var oldpass=$('#oldpass').val();
	if(old=='')
	{
		$('#passerror').show();
		$('#passerror').text('Error! Need to enter Old Password.');
		$('#old').focus();
		return false;
	}
	else if(old!=oldpass)
	{
		$('#olderror').show();
		$('#old').focus();
		$('#old').val('');
		return false;
	}
	else if(pnew=='')
	{
		$('#passerror').show();
		$('#passerror').text('Error! Need to enter New Password.');
		
		$('#new').focus();
		return false;
	}
	
	
	else if(cnew=='')
	{
		$('#passerror').show();
		$('#passerror').text('Error! Need to enter Confirm Password.');
		
		$('#cnew').focus();
		$('#cnew').val('');
		return false;
	}
	
	else if(pnew!=cnew)
	{
		$('#cnewerror').show();
		$('#cnew').focus();
		$('#cnew').val('');
		return false;
	}
	else
	{
	$('#passsuc').hide();
	$('#olderror').hide();
	$('#cnewerror').hide();
	$('#passerror').hide();
	$.ajax({
                type: "POST",
                url: 'process/process.php?pass='+pnew+'&action=Changepassword',
                beforeSend: function(data) {
                    $("#newpassform").prop('readonly', true);
                    $('#passloader').show();
                }, 
                success: function(data) {
			
                    $("#newpassform").prop("disabled", false);
                    $('#passloader').hide();
                    $('#passsuc').show();
					$('#new').val('');
					$('#cnew').val('');
					$('#old').val('');
					return false;
                }
            });
			return false;
	}
	return false;
}
function checkmy1(id)
{
	$("#cityerror"+id).hide();
	 var form = $('#ggg'+id);
	 
	 $.ajax({ 
      type: "POST",
      url: "process/process.php?action=EditCategory&id="+id,
      data: form.serialize(),
      success: function(response) {
        var response=$.trim(response);
		if(response=='1')
		{
			window.location.href='category.php?msg=editsuc';
			return false;
		}
		else
		{
			$("#cityerror"+id).show();
			$("#CityCode"+id).val('');
			$("#CityCode"+id).focus();
			return false;
			
		}
		return false;
      }
    });
	return false;
}
function DueDate(id)
{
	var cdate=$('#datepick').val();
	if(cdate!='')
	{
	if(id=='')
	{
		$('#due').show();
		$('#due').attr('value','');
	}
	else
	{
		$('#due').show();
		var date= cdate.split('-');
		var date1= date[1];
		var date2=parseInt(date1)+parseInt(id);
		if(date2<=12)
		{
			var date3=date2;
			var dyear=date[2];
		}
		else {
			dyear=parseInt(date[2]) + 1;
			date3=date2-12;
		}
		if(date3<10)
		{
			date3='0'+date3;
		}
		var fdate= date[0] + '-' + date3 + '-' +  dyear;
		//alert(k);
		$('#due').attr('value',fdate);
	}
	}
}
function Mycron()
{
	$.ajax({
                type: "POST",
                url: 'process/process.php?action=CronSet',
                success: function(data) {
			return true;
                }
            });
}
function Mycron1()
{
	$.ajax({
                type: "POST",
                url: 'process/process.php?action=CronSet1',
                success: function(data) {
			return true;
                }
            });
}




