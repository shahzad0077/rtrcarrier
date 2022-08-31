function geturl()
{
	return $('#app_url').val();
}

function closealert()
{
	$('#name-error').hide();
}

function coppytoclipboard() {
  /* Get the text field */
  var copyText = document.getElementById("kt_clipboard_1");

  /* Select the text field */
  copyText.select();
  copyText.setSelectionRange(0, 99999); /* For mobile devices */

  /* Copy the text inside the text field */
  navigator.clipboard.writeText(copyText.value);
  
  /* Alert the copied text */
  alert("Copied the text: " + copyText.value);
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
           		$('#check-email-button').attr('disabled' , true);
           		$('#email-error').html('This Email is already in our Records');
           	}else{
           		$('#check-email-button').attr('disabled' , false);
           		$('#email-error').html('');
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

$("#updateprofileinput").change(function(){   
    $('#updateprofileform').submit();
});
$("#updatecoverinput").change(function(){   
    $('#updatecoverform').submit();
});