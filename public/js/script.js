$('.carousel.carousel-multi-item.v-2 .carousel-item').each(function(){
	var next = $(this).next();
	if (!next.length) {
		next = $(this).siblings(':first');
	}
	next.children(':first-child').clone().appendTo($(this));

	for (var i=0;i<3;i++) {
		next=next.next();
		if (!next.length) {
			next = $(this).siblings(':first');
		}
		next.children(':first-child').clone().appendTo($(this));
	}
});	
$('.carousel').carousel({
interval: 3000
});
$('#description').summernote({
	height: 200,                 // set editor height
	minHeight: null,             // set minimum height of editor
	maxHeight: null,             // set maximum height of editor
	focus: false,
});
//tags
$('.chips-placeholder').materialChip({
  placeholder: 'Enter a tag',
  secondaryPlaceholder: '+Tag',
});

$(document).on("submit", "#add_blog", function(e) {
	var tags = $('.chips').materialChip('data');
	var str = "";
	var i;
	for(i =0; i< tags.length; i++) {
		if(i != 0)
			str += ",";
		str += tags[i]['tag'];
	}
	$('#tags').val(str);
	//e.preventDefault();
	$('#add_blog').submit();
});

// Material Select Initialization
$(document).ready(function() {
$('.mdb-select').materialSelect();
});

function appendError(e, errMsg) {
  var classname = "inp-error"+e.substring(1);
  $('<div class="'+classname+'">' + errMsg + "</div>").insertAfter(e);
  $(e)
  .removeClass("valid")
  .addClass("invalid");
}

function clearErrorMsgField(e){
  var errorclass = ".inp-error"+e.substring(1);
  $(e).removeClass("invalid");
  $(errorclass).remove();
}

function clearErrorMsg() {
  $("input, select, textarea").removeClass("invalid");
  $(".inp-error").remove();
}

$(document).on("submit", "#form_register", function(e) {
	var flag = 0;
	e.preventDefault();
	var data = {};
	data['name'] = $('#name1').val().trim();
	data['email'] = $('#email1').val().trim();
    data['contact_no1'] = $('#contact_no1').val().trim();
	data['password'] = $('#password1').val().trim();
	data['password_confirmation'] = $('#password_confirmation').val().trim();
	if(data['name'] == ""){
		clearErrorMsgField('#name1');
		appendError("#name1", "Name of user is required");
        flag = -1;
	}

	if (data['email'] == "" && data['contact_no']=="") {
		clearErrorMsgField('#email1');
        clearErrorMsgField('#contact_no1');
        appendError("#email1", "Input Email or contact no");
        appendError("#contact_no1", "Input Email or contact no");
        flag = -1;
    }

    if (data['email'] != "") {
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if (!filter.test(data['email'])) {
        	clearErrorMsgField('#email1');
          	appendError("#email1", "Invalid email format");
          	flag = -1;
        }
    }

	if (data['password'] == "") {
		clearErrorMsgField('#password1');
        appendError("#password1", "Password of user is required");
        flag = -1;
    }

    if (data['password'] != "" && data['password'].length < 6) {
		clearErrorMsgField('#password1');
        appendError("#password1", "Password should be min of 6 characters");
        flag = -1;
    }

    if (data['password_confirmation'] == "") {
    	clearErrorMsgField('#password_confirmation');
        appendError("#password_confirmation", "Confirm password of user is required");
        flag = -1;
    }
    // if (data['password_confirmation'] != "" && (data['password_confirmation'].localeCompare(data['password']) == 0)) {
    // 	clearErrorMsgField('#password_confirmation');
    //     appendError("#password_confirmation", "Passwords do not match");
    //     flag = -1;
    // } 
    if (flag != 0) {
        return;
    }
    console.log(flag);
    if(flag == 0){
		$.ajaxSetup({
	  	headers: {
	    	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	  	}
		});
		$.ajax({
        	type: "POST",
        	url: '/register',
        	data: data, 
        	success: function( data ) {
                location.reload();
        	}
    	});
	}
});

$(document).on("submit", "#form_login", function(e) {
	var flag = 0;
	e.preventDefault();
	var data = {};
	data['email'] = $('#email').val().trim();
    data['contact_no'] = $('#contact_no').val().trim();
	data['password'] = $('#password').val().trim();

	if (data['email'] == "" && data['contact_no']=="") {
		clearErrorMsgField('#email');
        clearErrorMsgField('#contact_no');
        appendError("#email", "Input Email or contact no");
        appendError("#contact_no", "Input Email or contact no");
        flag = -1;
    }

    if (data['email'] != "") {
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if (!filter.test(data['email'])) {
        	clearErrorMsgField('#email');
          	appendError("#email", "Invalid email format");
          	flag = -1;
        }
    }

	if (data['password'] == "") {
		clearErrorMsgField('#password');
        appendError("#password", "Password of user is required");
        flag = -1;
    }

    if (data['password'] != "" && data['password'].length < 6) {
		clearErrorMsgField('#password');
        appendError("#password", "Password should be min of 6 characters");
        flag = -1;
    }
    // if (data['password_confirmation'] != "" && (data['password_confirmation'].localeCompare(data['password']) == 0)) {
    // 	clearErrorMsgField('#password_confirmation');
    //     appendError("#password_confirmation", "Passwords do not match");
    //     flag = -1;
    // } 
    if (flag != 0) {
        return;
    }
    console.log(flag);
    if(flag == 0){
		$.ajaxSetup({
	  	headers: {
	    	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	  	}
		});
		$.ajax({
        	type: "POST",
        	url: '/login',
        	data: data, 
        	success: function( data ) {
            	location.reload();
        	}
    	});
	}
});




