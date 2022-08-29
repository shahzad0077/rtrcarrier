function geturl()
{
	return $('#app_url').val();
}
$("#check-email-button").click(function(){
	if($('#name').val() == '')
	{
		$('#name-error').show();
		$('#name-error').html('Full Name is Required');
	}else{
		$('#name-error').hide();
		if($('#company_name').val() == '')
		{
			$('#company_name-error').show();
			$('#company_name-error').html('Company Name is Required');
		}else{
			$('#company_name-error').hide();
			checkemail();
		}
	}
});
function closealert()
{
	$('#name-error').hide();
}

function checkcompanyname(id)
{
	$('#name-error').hide();
	var app_url = geturl();
	$.ajax({
        url:app_url+"/checkcompanyname/"+id, 
        type:"get",
        success:function(res){
            if(res > 0)
            {
            	$('#company_name-error').show();
				$('#company_name-error').html('This Company Name is already in our Records');
				$('#check-email-button').attr('disabled' , true);
            }else{
            	$('#check-email-button').attr('disabled' , false);
            	$('#company_name-error').hide();
            }
        }
    })
}
function checkdotnumber(id)
{
	var app_url = geturl();
	$.ajax({
        url:app_url+"/checkdotnumber/"+id, 
        type:"get",
        success:function(res){
            if(res > 0)
            {
            	$('#dot_number-error').show();
				$('#dot_number-error').html('This Carrier DOT Number is already in our Records')
				$('#check-password-button').attr('disabled' , true);
            }else{
            	$('#check-password-button').attr('disabled' , false);
            	$('#dot_number-error').hide();
            }
        }
    })
}

$("#check-password-button").click(function(){
  	var password = $('#password').val();
	var confermpassword = $('#conferm-password').val();
	if(password == confermpassword)
	{
		$('#password-error').hide();
		var dot_number = $('#dot_number').val();
		var trucks_in_fleet = $('#trucks_in_fleet').val();
		var how_many_drivers_in_next = $('#how_many_drivers_in_next').val();
		if(dot_number)
		{
			if(trucks_in_fleet)
			{
				if(how_many_drivers_in_next)
				{
					$("#check-email-button").hide();
	            	$('#check-password-button').hide();
	            	$('#next-button').click();
				}else{
					$('#how_many_drivers_in_next-error').show();
					$('#how_many_drivers_in_next-error').html('This is Required')
				}
			}else{
				$('#trucks_in_fleet-error').show();
				$('#trucks_in_fleet-error').html('This is Required')
			}
		}else
		{
			$('#dot_number-error').show();
			$('#dot_number-error').html('Carrier DOT Number id Required')
		}
	}else
	{
		$('#password-error').show();
		$('#password-error').html('Please Make Sure your Passwords Match')
	}
});


function checkemail()
{
	var email = $('#work_email').val();
    var form = new FormData();
    form.append('email',email);
    var app_url = geturl();
    $.ajax({
    	 headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    },
        url:app_url+"/checkemail", 
        type:"POST",
        data:form,
        cache:false,
        contentType:false,
        processData:false,
        success:function(res){
            if(res == 1)
            {
            	$('#work_email').addClass('is-invalid');
            	$('#email-error').html('<strong>This Email is already in out Records</strong>')
            }else{
            	$("#check-email-button").hide();
            	$('#check-password-button').show();
            	$('#next-button').click();
            }
        }
    }) 
}
function selectredirect(id)
{
	$('.step-finish-card').removeClass('step-finish-card-active');
	$('.'+id).addClass('step-finish-card-active');
	$("#"+id).prop("checked", true);
}