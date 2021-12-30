$(document).ready(function() { 
    $('[data-toggle="tooltip"]').tooltip();
	$(".loginModal").on("click", function() { 
	    $('#loginModal').modal('show'); 
	});
	$(".sign_up").on("click", function(){
	  $('#login').addClass('d-none');
	  $('#signup').removeClass('d-none');
	  $('#forgat').addClass('d-none');
	  $('#loginotp').addClass('d-none'); 
    });
	$(".signin").on("click", function() {
	  $('#login').removeClass('d-none');
	  $('#signup').addClass('d-none');
	  $('#forgat').addClass('d-none'); 
	});
	// <>
	$(".forget_pass").on("click", function() {
	  $('#forgat').removeClass('d-none');
	  $('#login').addClass('d-none');
	  $('#signup').addClass('d-none'); 
	});
	// <>
	$(".otpsent").on("click", function() {
	  $('#loginotp').removeClass('d-none');
	  $('#login').addClass('d-none');
      $('#forgat').addClass('d-none');
      $('#signup').addClass('d-none'); 
	  // $('#signup').addClass('d-none'); 
	});
    $(".cls1").click(function(){
	$(".sec1").addClass("d-none")
	});
	$(".cls2").click(function(){
	$(".sec2").addClass("d-none")
	});
	$(".cls3").click(function(){
	$(".sec3").addClass("d-none")
	});
	$(".close_btn").click(function(){
	$(".ddd").css("display", "none");
	});
	$(".cart").click(function(){
		$(".ddd").css("display", "block");
	});

	


    $(".submitloginbypassword").on("click", function(){
        $("#loginformpassword .submitloginbypassword").attr('disabled', true);
        $("#loginformpassword .submitloginbypassword").addClass('buttonload'); 
        $("#loginformpassword .submitloginbypassword").html('<i class="fa fa-spinner fa-spin"></i>Loading');
        // Initiate Variables With Form Content
        var loginmoibleno = $(".loginmoibleno").val();
        var loginpassword = $(".loginpassword").val();
        var clickbutton = $(".clickbutton").val();
        // alert(first_name);
        var href = base_url+"home/loginbypassword";
        $.ajax({
            type: "POST",
            dataType: "json",
            url: href,
            data: { 
                    mobile_no:loginmoibleno,
                    password:loginpassword
                },
            success : function(data){
                if (data.status == 1){
                    $.notify(data.msg, "success");
                    if(clickbutton == "continueshipping"){
                        // var current_page_url = base_url+"addshippinginfo";
                        setTimeout(function(){window.location.href=base_url+"addshippinginfo"},1000);
                    }else{
                        setTimeout(function(){window.location.href=current_page_url},1000);
                    }
                    // $('#signup').addClass('d-none');
                    // $('#registerotp').removeClass('d-none');

                } else {
                    $.notify(data.msg, "error");
                    
                }
            },
            error: function(data) {
                $.notify(data.msg, "error");
            },
        });
    });
    
    $("#contact").on("click", function(){
      var form = $("#contactinfoform")[0];
      
      $("#contactinfoform #contact").attr('disabled', true);
      $("#contactinfoform #contact").addClass('buttonload'); 
      $("#contactinfoform #contact").html('<i class="fa fa-spinner fa-spin"></i>Loading');
          
        // alert(form);
        var href = base_url+"admissionopen";
        var data = new FormData(form);
        // alert(data);

        $.ajax({
        enctype: 'multipart/form-data',
        processData: false,  // Important!
        contentType: false,
        cache: false,
        type: "POST",
        url: href,
        data:data,
        dataType: "json",
        success : function(data){
        // alert(data);
        // $.notify(data, "success");
        // setTimeout(function(){ window.location.href = base_url+"thankyou"; }, 3000);
        // window.location.href = "base_url().thankyou"; 
            if(data.status==1){
                $.notify(data.msg, "success");
                setTimeout(function(){ window.location.href = base_url+"thankyou"; }, 3000);
            }else{
                $("#contact").removeAttr('disabled');
                $("#contact").removeClass('buttonload');
                $("#contact").html('Submit');
                $.notify(data.msg, "error");
            }
        
          
        },
        error: function(data) {
            $("#contact").removeAttr('disabled');
            $("#contact").removeClass('buttonload');
            $("#contact").html('Submit');
        },
      });
    });

    // $("#contactus").on("click", function(){
    //   var form = $("#contactinfoform")[0];
      
    //   $("#contactinfoform #contactus").attr('disabled', true);
    //   $("#contactinfoform #contactus").addClass('buttonload'); 
    //   $("#contactinfoform #contactus").html('<i class="fa fa-spinner fa-spin"></i>Loading');
          
    //     // alert(form);
    //     var href = base_url+"contact";
    //     var data = new FormData(form);
    //     // alert(data);

    //     $.ajax({
    //     enctype: 'multipart/form-data',
    //     processData: false,  // Important!
    //     contentType: false,
    //     cache: false,
    //     type: "POST",
    //     url: href,
    //     data:data,
    //     dataType: "html",
    //     success : function(data){
    //     // alert(data);
    //     // $.notify(data, "success");
    //     setTimeout(function(){ window.location.href = base_url+"thankyou"; }, 3000);
    //     // window.location.href = "base_url().thankyou";   
    //     exit();
          
    //     },
    //     error: function(data) {
    //         $("#contactus").removeAttr('disabled');
    //         $("#contactus").removeClass('buttonload');
    //         $("#contactus").html('Submit');
    //     },
    //   });
    // });
})

    