var input = document.getElementById( 'file-upload' );
var infoArea = document.getElementById( 'file-upload-filename' );

input.addEventListener( 'change', showFileName );

function showFileName( event ) {
  var input = event.srcElement;
  var fileName = input.files[0].name;
  infoArea.textContent = 'File name: ' + fileName;
  $('#file-upload-filename').addClass('alert');
  $('#file-upload-filename').addClass('alert-primary');
}



function showdetails(id) {
    var x = document.getElementById("jobdetailbutton"+id);
      if (x.innerHTML === "See Details") {
        x.innerHTML = "Less Details";
      } else {
        x.innerHTML = "See Details";
      }
    $('.detailsection'+id).slideToggle();
}

function searchzipcodefordashboard(id) {
    if(id == '')
    {
        $('.dropdown-content').hide();
    }else{
        var app_url = geturl();
        $.ajax({
            url:app_url+"/searchzipcodefordashboard/"+id+"", 
            type:"get",
            success:function(res)
            {
                $('.dropdown-content').show();
                $('.dropdown-content').html(res);
            }
        })
    }
}


function deleteequipment(id , jobid) {
    var app_url = geturl();
    $('#deleteequipmentbutton'+id).html('<i class="fa fa-spin fa-spinner"></i>')
    $.ajax({
        url:app_url+"/deleteequipment/"+id+"/"+jobid, 
        type:"get",
        success:function(res)
        {
            $('#showequipment').html(res);
        }
    })
}
function shownotifications() {
    $('#shownotifications').html('<div style="margin-top: 35%;" class="d-flex justify-content-center"><div><i style="font-size: 40px;" class="fa fa-spin fa-spinner"></i></div></div>')
    var app_url = geturl();
    $.ajax({
        url:app_url+"/shonotifications", 
        type:"get",
        success:function(res)
        {
            $('#shownotifications').html(res);
        }
    })
}
function showalerts() {
    $('#showalerts').html('<div style="margin-top: 35%;" class="d-flex justify-content-center"><div><i style="font-size: 40px;" class="fa fa-spin fa-spinner"></i></div></div>')
    var app_url = geturl();
    $.ajax({
        url:app_url+"/showalerts", 
        type:"get",
        success:function(res)
        {
            $('#showalerts').html(res);
        }
    })
}


function showpreviewofhiringreq(id) {
    var app_url = geturl();
    $.ajax({
        url:app_url+"/showpreviewofhiringreq/"+id, 
        type:"get",
        success:function(res){
            $('.previewcard').css('display' , 'none');
            $('.alltemplate').css('display' , 'none');
            $('#preview'+id).html(res);
            $('#preview'+id).show();
        }
    })
}







function deletegroup(id) {
    alert('ok');
}
function showmodalforgroupsettings(id) {
    $('#groupsettings').modal('show');
    $('#groupidforupdate').val(id);
    var app_url = geturl();
    $.ajax({
        url:app_url+"/chat/getgroupdetailsforsettings/"+id, 
        type:"get",
        success:function(res){
            $('#group_name_for_update').val(res.name);
            var image = app_url+"/public/images/"+res.image;
            $('#groupiconupdate').attr('src' , image);
        }
    })
}
function startgroupchat(id) 
{
    var app_url = geturl();
    $.ajax({
        url:app_url+"/chat/startgroupchat/"+id, 
        type:"get",
        success:function(res){
            $('#mainchatall').hide();
            $('#singlechat').html(res);
            $('#messagesuser').addClass('newmessageclass');
            $('#messagesuser').html('<div class="loader"></div>');
            getchatbygroup(id);
        }
    })
}
function getchatbygroup(id) 
{
    var app_url = geturl();
    $.ajax({
        url:app_url+"/chat/getchatbygroup/"+id, 
        type:"get",
        success:function(res){
            $('#messagesuser').removeClass('newmessageclass');
            $('#messagesuser').html(res);
            var div = $(".scroll-pull");
            div.scrollTop(div.prop('scrollHeight'));
        }
    })
}
function filterusers(id) {
    var value = $('#searchuserinput').val();
    if(value == '')
    {
        $('#searchusers').hide();
        $('#alreadyusers').show();
    }else{
        $('#alreadyusers').hide();
        var app_url = geturl();
        $.ajax({
            url:app_url+"/chat/filterusers/"+id, 
            type:"get",
            success:function(res){
                if(res == 2)
                {
                    $('#searchusers').hide();
                    $('#alreadyusers').show();
                }else{
                    $('#searchusers').show();
                    $('#searchusers').html(res);
                }      
            }
        }) 
    }
}
function statuschange(id) {
    var app_url = geturl();
    $.ajax({
        url:app_url+"/chat/chat_status_change/"+id, 
        type:"get",
        success:function(res){
            $('#chat_status').html(id);
            $('#asid123nsajkd').hide();
            if(id == 'Available')
            {
                $('#chatstatus').removeClass('label-warning');
                $('#chatstatus').removeClass('label-danger');
                $('#chatstatus').removeClass('label-info');
                $('#chatstatus').addClass('label-success');
            }
            if(id == 'In Meeting')
            {
                $('#chatstatus').removeClass('label-warning');
                $('#chatstatus').removeClass('label-danger');
                $('#chatstatus').removeClass('label-success');
                $('#chatstatus').addClass('label-info');
            }
            if(id == 'Do Not disturb')
            {
                $('#chatstatus').removeClass('label-warning');
                $('#chatstatus').removeClass('label-success');
                $('#chatstatus').removeClass('label-info');
                $('#chatstatus').addClass('label-danger');
            }
            if(id == 'Away')
            {
                $('#chatstatus').removeClass('label-success');
                $('#chatstatus').removeClass('label-danger');
                $('#chatstatus').removeClass('label-info');
                $('#chatstatus').addClass('label-warning');
            }
        }
    })
}
function chatshow(id) {
    var app_url = geturl();
    if(id == 'open')
    {
        $('.modal-sticky-bottom-right').show();
    }
    if(id == 'close')
    {
        $('.modal-sticky-bottom-right').hide();
    }
    $.ajax({
        url:app_url+"/chat/chatshow", 
        type:"get",
        success:function(res){
           
        }
    })
}
function startchatwith(id) {

    var app_url = geturl();
    $.ajax({
        url:app_url+"/chat/startchatwith/"+id, 
        type:"get",
        success:function(res){
            $('#mainchatall').hide();
            $('#singlechat').html(res);
            $('#messagesuser').addClass('newmessageclass');
            $('#messagesuser').html('<div class="loader"></div>');
            getchatbyuser(id);
        }
    })
}
function getchatbyuser(id) {
    var app_url = geturl();
    $.ajax({
        url:app_url+"/chat/getchatbyuser/"+id, 
        type:"get",
        success:function(res){
            $('#messagesuser').removeClass('newmessageclass');
            $('#messagesuser').html(res);
            var div = $(".scroll-pull");
            div.scrollTop(div.prop('scrollHeight'));
        }
    })
}

$( document ).ready(function() {
    // checkchatmessage();
});

function checkchatmessage()
{
    $.ajax({
        type: "GET",
        url: geturl()+'/chat/checkchatmessage/',
        success: function(resp) {

            if(resp > 0)
            {
                var value = $('#chatuserid').val();
                getchatbyuser(value);
            }
            setTimeout(function() { 
                checkchatmessage();
            }, 2000);
        }
    });
}



function sendchatroomMessage(){
    var app_url = geturl();
    var file_data = $('#file-input').prop('files')[0];
    var form_data = new FormData();
    form_data.append('file', file_data);
    form_data.append('sendBy', $('#sendBy').val());
    form_data.append('sendTo', $('#sendTo').val());
    form_data.append('_token', $('meta[name="csrf-token"]').attr('content'));
    form_data.append('message',$('#inputMessage').val());
    if($('#inputMessage').val()!='' || file_data!=undefined){
        $.ajax({
            type: "POST",
            url:app_url+"/chat/savechat", 
            data: form_data,
            cache: false,
            contentType: false,
            processData: false,
            success: function(res) {
                $('#messagesuser').removeClass('newmessageclass');
                $('#inputMessage').val('')
                $('#file-input').val('')
                $('#blah').hide();
                $('#messagesuser').html(res);
                $('#messagesuser').scrollTop($('#messagesuser').get(0).scrollHeight);
            }
        });
    }
}


function backtoallchats() {
    $('#singlechat').html('');
    $('#mainchatall').show();
}
function savebasicform() {
    $('#savebasicform').submit();
}
function geturl()
{
	return $('#app_url').val();
}
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})
function selectplan(id)
{
    $('#plan_id').val(id);
    $('.removeactiveplan').removeClass('activeplan');
    $('#activeplan'+id).addClass('activeplan');
}
function closealert()
{
	$('#name-error').hide();
}
function validatetwitter(id) {
    
}
function savetemplate()
{
    $('#savetemplate').modal('show');
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
function randomIntFromInterval(min, max) { // min and max included 
  return Math.floor(Math.random() * (max - min + 1) + min)
}
function appendbenifit()
{
    var number = randomIntFromInterval(100, 60000)
    var value = $('#bennifitnew').val();
    if(value == '')
    {
        $('#bennifitnew').addClass('is-invalid') 
        
    }else{
        $('#bennifitnew').removeClass('is-invalid')
        $('#appendbenifitindiv').append('<div class="col-md-6 benfit'+number+'"><label class="checkbox checkbox-lg mb-3"><input id="checkbox'+number+'" checked value="'+value+'" type="checkbox" name="custombenifits[]" /><span class="mr-3"></span>'+value+'</label><span onclick="removebenifit('+number+')" class="badge badge-light">&times;</span></div>');
        $('#bennifitnew').val('');
    }
}
function removebenifit(id) {
    $('.benfit'+id).remove();
    $("#checkbox"+id).prop("checked", false);
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
            $('#advance_detail_submit_button').css('background-color' , 'green');
            $('#advance_detail_submit_button').html('<i class="fa fa-check"></i> Updated');
            setTimeout(function() { 
                $('#advanceDetail').modal('hide');
                $('#advance_detail_submit_button').html('Save');
                $('#advance_detail_submit_button').css('background-color' , '#22AAE2');
            }, 2000);
        }else{
            $('#advance_detail_submit_button').html('Save');
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



$('#addnewcompanyemal').on('submit',(function(e) {
    $('#addnewcompanyemal_submit_button').html('<i class="fa fa-spin fa-spinner"></i>');
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
            $('.hirringreqemail').append('<option selected value="'+$('#emailfield').val()+'">'+$('#emailfield').val()+'</option>');
            $("#addnewcompanyemal").trigger('reset');
            $('#addcompanyemail').modal('hide');
            $('#addnewcompanyemal_submit_button').html('Save');
        }else{
            $('#payout-schedule-button').html('Set Schedule');
            printErrorMsg(data.error);
        }
            
        }
    });
}));


$('#addpayoutschedule').on('submit',(function(e) {
    $('#payout-schedule-button').html('<i class="fa fa-spin fa-spinner"></i>');
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
            $('#payOption').modal('hide');
            $('#payout-schedule-button').html('Set Schedule');
        }else{
            $('#payout-schedule-button').html('Set Schedule');
            printErrorMsg(data.error);
        }
            
        }
    });
}));

function savetemplatemodalsubmit()
{
    var value = $('#templatenamefield').val(); 
    if(value)
    {
        $('#template_name_field').val(value);
        $('#save_templatebutton').html('<i class="fa fa-spin fa-spinner"></i>');
        setTimeout(function() { 
            $('#savetemplate').modal('hide');
            $('#save_templatebutton').html('Save');
            $('#save_as_template').css('background-color' , 'green');
            $('#save_as_template').html('<i class="fa fa-check"></i> Saved');
        }, 2000);
    }else{
        $('#templatenameerror').html('This Field Is Required');
        $('#templatenameerror').css('display' , 'block');
    }
    
}



$('#addadvancepayoutdetails').on('submit',(function(e) {
    $('#advance-pay-button-submit').html('<i class="fa fa-spin fa-spinner"></i>');
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


            $('#advance-pay-button-submit').css('background-color' , 'green');
            $('#advance-pay-button-submit').html('<i class="fa fa-check"></i> Updated');
            setTimeout(function() { 
                $('#advancepayOption').modal('hide');
                $('#advance-pay-button-submit').html('Submit Now');
                $('#advance-pay-button-submit').css('background-color' , '#22AAE2');
            }, 2000);
        }else{
            $('#payout-schedule-button').html('Set Schedule');
            printErrorMsg(data.error);
        }
            
        }
    });
}));



$('#advanceequipment').on('submit',(function(e) {
    $('#advance-equipment-modal-button').html('<i class="fa fa-spin fa-spinner"></i>');
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
            $('#advance-equipment-modal-button').css('background-color' , 'green');
            $('#advance-equipment-modal-button').html('<i class="fa fa-check"></i> Updated');
            setTimeout(function() { 
                $('#equipmentOption').modal('hide');
                $('#advance-equipment-modal-button').html('Save Changes');
                $('#advance-equipment-modal-button').css('background-color' , '#22AAE2');
            }, 2000);
        }else{
            $('#advance-equipment-modal-button').html('Save Changes');
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


// Add Payout Schedule
var payoutrow=2;
$(document).on("click", "#addmore", function () {
  var new_row = '<div id="payoutrow'+payoutrow+'" class="row mb-3"> <div class="col-md-6 mb-3"> <h5>Payout #' + payoutrow + '</h5> </div><div class="col-md-6 mb-3 text-right"> <a onclick="removepayoutrow('+payoutrow+')" href="javascript:void(0)" class="text-danger">Delete New Payout</a></div> <div class="col-md-6"> <div class="form-group"> <label class="lable-control">When?</label> <select name="whenpayout[]" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects"> <option value="Orientation">Orientation</option> <option value="1st Dispatch">1st Dispatch</option> <option value="Delivery of 1st Load">Delivery of 1st Load</option> <option value="Month 1">Month 1</option> <option value="Month 2">Month 2</option> <option value="Month 3">Month 3</option> <option value="Month 4">Month 4</option> <option value="Month 5">Month 5</option> <option value="Month 6">Month 6</option> <option value="Month 7">Month 7</option> <option value="Month 8">Month 8</option> <option value="Month 9">Month 9</option> <option value="Month 10">Month 10</option> <option value="Month 11">Month 11</option> <option value="Month 12">Month 12</option> </select> </div> </div> <div class="col-md-6"> <div class="form-group"> <label class="lable-control">Amount</label> <select name="ammountpayout[]" class="form-control  form-control-solid font-size-lg pl-5 min-h-50px" id="exampleSelects"> <option value="Yes">Yes</option> <option value="No">No</option> </select> </div> </div> </div>';
  $('#payoutschedule').append(new_row);
  payoutrow++;
  return false;
});

$(document).on("click", ".delete-row", function () {
    if(payoutrow>1) {
      $(this).closest('tr').remove();
      payoutrow--;
    }
  return false;
});

function removepayoutrow(id)
{
    $('#payoutrow'+id).remove();
}




// Add Equipment
var row=1;
$(document).on("click", "#add-row", function () {
  var new_row = '<tr style="margin-bottom:20px;" class="row" id="row' + row + '"><td class="col-md-3"><input name="truck_make[]" type="text" class="form-control form-control-solid font-size-lg pl-5 min-h-50px" /></td><td class="col-md-3"><input name="truck_model[]" type="text" class="form-control form-control-solid font-size-lg pl-5 min-h-50px" /></td><td class="col-md-3"><input name="truck_year[]" type="text" class="form-control form-control-solid font-size-lg pl-5 min-h-50px" /></td><td class="col-md-3"><input style="height:52px;" class="delete-row form-control btn btn-danger" type="button" value="Delete" /></td></tr>';
  $('#test-body').append(new_row);
  row++;
  return false;
});

$(document).on("click", ".delete-row", function () {
    if(row>1) {
      $(this).closest('tr').remove();
      row--;
    }
  return false;
});

function showbelowfield(value , id , condition)
{
    if(value == condition)
    {
        $('#'+id).show();
    }else{
        $('#'+id).hide();
    }
}
function showbelowfieldbyclass(value , id , condition)
{
    if(value == condition)
    {
        $('.'+id).show();
    }else{
        $('.'+id).hide();
    }
}
function deletejobbycarrier(id)
{
    $('#deletejobmodal').modal('show');
    var app_url = geturl();
    var newUrl = app_url+'/deletejob/'+id;
    $('#deletejoburl').attr("href", newUrl);
}
var checkList = document.getElementById('list1');
checkList.getElementsByClassName('anchor')[0].onclick = function(evt) {
  if (checkList.classList.contains('visible'))
    checkList.classList.remove('visible');
  else
    checkList.classList.add('visible');
}
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $(".upload-logo").css("background-image", "url(" + e.target.result + ")");
        };
        reader.readAsDataURL(input.files[0]);
    }
}
function showpreview(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#blah').attr('src', e.target.result);
            $('#blah').show();
        };
        reader.readAsDataURL(input.files[0]);
    }
}


function savecity(city , state , radius , map_id)
{
    var app_url = geturl();
    $.ajax({
        url:app_url+"/savecity/"+city+"/"+state+"/"+map_id+"/"+radius, 
        type:"get",
        success:function(res){
         $('#appenddivs').append(res);      
        }
    })
}
function savestate(value, map_id)
{
    var app_url = geturl();
    $.ajax({
        url:app_url+"/savestate/"+value+"/"+map_id, 
        type:"get",
        success:function(res){
           
        }
    })
}
function deletezipcode(id)
{
    $('.zipcode'+id).hide();
    $('#zipcode'+id).val('');
}