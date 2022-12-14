function geturl()
{
    return $('#app_url').val();
}
function checkemailfromadmin()
{
    var email = $('#work_email').val();

    $('#email-error').hide();
    var app_url = geturl();
    $.ajax({
        url:app_url+"/checkemailfromadmin/"+email, 
        type:"get",
        success:function(res){
            if(res > 0)
            {
                $('#email-error').show();
                $('#email-error').html('This Email is already in our Records');
                $('#submitbutton').attr('disabled' , true);
            }else{
                $('#submitbutton').attr('disabled' , false);
                $('#company_name-error').hide();
            }
        }
    })
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
				$('#submitbutton').attr('disabled' , true);
            }else{
            	$('#submitbutton').attr('disabled' , false);
            	$('#company_name-error').hide();
            }
        }
    })
}
function checkemail(id)
{
    var email = id;
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
                $('#submitbutton').attr('disabled' , true);
                $('#email-error').html('This Email is already in our Records');
                $('#email-error').show();
            }else{
                $('#submitbutton').attr('disabled' , false);
                $('#email-error').hide();
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
                $('#submitbutton').attr('disabled' , true);
            }else{
                $('#submitbutton').attr('disabled' , false);
                $('#dot_number-error').hide();
            }
        }
    })
}

function formsubmit(id)
{
    $('#'+id).submit();
}
function declinecarrier(id)
{
    $('#declinerequest').modal('show');
    $('#declineid').val(id);
}
function editjobattribute(id)
{
    getattributenameandid(id);
    var app_url = geturl();
    $.ajax({
        url:app_url+"/admin/jobs/editattribute/"+id, 
        type:"get",
        success:function(res)
        {
            $('#kt_select2_11').html(res);
            $('#addAttributes').modal('show');
        }
    })
}

function getattributenameandid(id)
{
    var app_url = geturl();
    $.ajax({
        url:app_url+"/admin/jobs/getattributenameandid/"+id, 
        type:"get",
        success:function(res)
        {
            $('#namefields').html(res);
        }
    })
}
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

function printErrorMsg (msg) {
    $.each( msg, function( key, value ) {
        $("#"+key+"_err").html('<strong>'+value+'</strong>');
        $("#"+key+"_err").show();
        $('#'+key).addClass('is-invalid');
    });
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


