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
                $('#submitbutton').attr('disabled' , true);
           	}else{
           		$('#check-email-button').attr('disabled' , false);
           		$('#email-error').html('');
                $('#submitbutton').attr('disabled' , false);
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

$("#profile_avatar").change(function(){   
    $('#profileavatarform').submit();
});
function appendbenifit()
{
    var value = $('#bennifitnew').val();
    if(value)
    {
        $('#bennifitnew').removeClass('is-invalid')
        $('#appendbenifitindiv').append('<div class="col-md-6"><label class="checkbox checkbox-lg mb-3"><input checked type="checkbox" name="benifits[]" /><span class="mr-3"></span>'+value+'</label></div>');
        $('#bennifitnew').val(' ');
    }else{
        $('#bennifitnew').addClass('is-invalid')
    }
}

$('#advance_detail_submit_form').on('submit',(function(e) {
    $('#advance_detail_submit_button').html('<i class="fa fa-spin fa-spinner"></i>');
    $(".advance-feedback").css('display','none');
    $('#advance_detail_submit_form').find('*').removeClass('is-invalid');

    e.preventDefault();
    var formData = new FormData(this);

    $.ajax({
        type:'POST',
        url: $(this).attr('action'),
        data:formData,
        cache:false,
        contentType: false,
        processData: false,
        success: function(data){
         if($.isEmptyObject(data.error)){
            $(".advance-feedback").css('display','none');
            $('#advance_detail_submit_form')[0].reset();
        }else{
            $('#advance_detail_submit_button').html('Save');
            // $("html, body").animate({ scrollTop: 0 }, "slow");
            printErrorMsg(data.error);
        }
            
        }
    });
}));

$('#updateriderpolicy').on('submit',(function(e) {
    $('#riderpolicy_submit_button').html('<i class="fa fa-spin fa-spinner"></i>');
    $(".riderpolicy-feedback").css('display','none');
    $('#updateriderpolicy').find('*').removeClass('is-invalid');

    e.preventDefault();
    var formData = new FormData(this);

    $.ajax({
        type:'POST',
        url: $(this).attr('action'),
        data:formData,
        cache:false,
        contentType: false,
        processData: false,
        success: function(data){
         if($.isEmptyObject(data.error)){
            $('#ridertextpolicy').html(data.policytext)
            $('#riderpolicy').modal('hide');
            $('#riderpolicy_submit_button').html('Save');
        }else{
            $('#riderpolicy_submit_button').html('Save');
            printErrorMsg(data.error);
        }
            
        }
    });
}));


$('#updatepetpolicy').on('submit',(function(e) {
    $('#update-pet-policy-submit-button').html('<i class="fa fa-spin fa-spinner"></i>');
    $(".petpolicy-feedback").css('display','none');
    $('#updatepetpolicy').find('*').removeClass('is-invalid');

    e.preventDefault();
    var formData = new FormData(this);

    $.ajax({
        type:'POST',
        url: $(this).attr('action'),
        data:formData,
        cache:false,
        contentType: false,
        processData: false,
        success: function(data){
         if($.isEmptyObject(data.error)){
            $('#pettextpolicy').html(data.policytext)
            $('#petpolicy').modal('hide');
            $('#update-pet-policy-submit-button').html('Save');
        }else{
            $('#update-pet-policy-submit-button').html('Save');
            printErrorMsg(data.error);
        }
            
        }
    });
}));



function printErrorMsg (msg) {
    $.each( msg, function( key, value ) {
        $("#"+key+"_err").html('<strong>'+value+'</strong>');
        $("#"+key+"_err").show();
        $('#'+key).addClass('is-invalid');
    });
}
function addnewequipment() {
    
}


$(document).ready(function() {
  $("#addmore").click(function() {
    $("#req_input").append('<div class="required_inp"><input name="fname" placeholder="Text Field 1" type="text"><input name="lname" placeholder="Text Field 2" type="text">' + '<input type="button" class="inputRemove" value="Remove"/></div>');
  });
  $('body').on('click','.inputRemove',function() {
    $(this).parent('div.required_inp').remove()
  });
});