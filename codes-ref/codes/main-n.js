$(document).ready(function () {
	$(window).scroll(function () {
		var headHeight = $('#logo-bar').outerHeight();
		if ($(window).scrollTop() > headHeight) {
			$('.navbar-brand').addClass('fixed');
			$('header').addClass('fixed-color');
		} else {
			$('.navbar-brand').removeClass('fixed');
			$('header').removeClass('fixed-color');
		}
	});
});

$(document).ready(function () {
	$('.toggle-form').click(function () {
		var checker = $(this).attr('id');
		if (checker == 'active') {
			$('.toggle-form').attr('id', 'inactive');
			$('.contact-information').css('transform', 'translateX(100%)');
			$('i.toggle-form').text('arrow_back');
		} else {
			$('.toggle-form').attr('id', 'active');
			$('.contact-information').css('transform', 'translateX(0)');
			$('i.toggle-form').text('email');
		}
	});
});


$(document).ready(function () {
	// Add scrollspy to <body>

	
	if($(window).width() < 992){
	var url = document.location.toString().split('?')[1];
//		url.split('=')[1];
	//	var offset= $('.navbar-main').innerHeight();
	if (url.length > 0) {

		$('html,body').animate({
			scrollTop: $('#myScrollspy').offset().top - 85
		}, 'slow');
	}
	
	}
	// Add smooth scrolling on all links inside the navbar
	$(".causes-page-categories ul li a").on('click', function (event) {
		// Make sure this.hash has a value before overriding default behavior
		//    event.preventDefault();


		//	var offset= $('.navbar-main').innerHeight();

		// Using jQuery's animate() method to add smooth page scroll
		// The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
		//      $('html, body').animate({
		//        scrollTop: -100000000
		//      }, 800);
		//	  alert('sdsds');
		// End if
	});
	
	$('#resume').on( 'change', function(){
    myfile= $( this ).val();
    var ext = myfile.split('.').pop();
    if(ext=="pdf" || ext=="docx" || ext=="doc"){
        
    }
    else{
        alert('Invalid File Type !');
        $("#resume").val('');
    }
});


	
	$.validator.addMethod("lettersonly", function(value, element) {
  		return this.optional(element) || /^[a-zA-Z][a-zA-Z ]+$/i.test(value);
	});

	$.validator.addMethod("emailtest", function(value, element) {
  	return this.optional(element) || /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/i.test(value);
	});


	 

	$("#name").keypress(function(event){
        var inputValue = event.charCode;
        if(!(inputValue >= 65 && inputValue <= 120) && (inputValue != 32 && inputValue != 0)){
            event.preventDefault();
        }
    });

    $("#feedback_name").keypress(function(event){
        var inputValue = event.charCode;
        if(!(inputValue >= 65 && inputValue <= 120) && (inputValue != 32 && inputValue != 0)){
            event.preventDefault();
        }
    });

    $("#career_name").keypress(function(event){
        var inputValue = event.charCode;
        if(!(inputValue >= 65 && inputValue <= 120) && (inputValue != 32 && inputValue != 0)){
            event.preventDefault();
        }
    });

    // Contact Page form validation
	$("#login_form").validate({
			rules: {
		        "name": {
		            required: true,
		            lettersonly:true
		        },  
		        "email": {
		            required: true,
		            emailtest: true
		        },
		        "phone": {
		            required: true,
		            number: true,
		            maxlength: 10,
		            minlength: 10
		        },
		        "message": {
		            required: true
		        }
		    },
		    messages: {
		        "name": {
		            required: "You must enter your full name",
		            lettersonly:"must enter character only"
		        },  
		        "email": {
		            required: "You must enter your Email Id",
		            emailtest: "Please enter valid Email Id"
		        },
		        "phone": {
		            required: "You must enter your phone",
		            number: "must contain digits only",
		            maxlength: "Phone Number must contain maximum 10 digits",
		            minlength: "Phone Number must contain minimum 10 digits"
		        },
		        "message": {
		            required: "You must enter your message"
		        }
		    },
		    submitHandler: function(form) {
	        $.ajax({
	            url: form.action,
	            type: form.method,
	            data: $(form).serialize(),
	            success: function(response) {
	                //console.log(response);
		                if(response == 1){  
		                	$("#login_form")[0].reset();
		                    window.location.href= "thankyou.php";
		                }
		                else
		                {
		                	$('.msg').html(response);
		                	$("#login_form")[0].reset();
		                }
	            	}            
	        	});
	    	}
	});

	//Feedback Validation
	$("#feedback").validate({
			rules: {
		        "name": {
		            required: true,
		            lettersonly:true
		        },  
		        "email": {
		            required: true,
		            emailtest: true
		        },
		        "feedback": {
		            required: true
		        }
		    },
		    messages: {
		        "name": {
		            required: "You must enter your Name",
		            lettersonly:"must enter character only"
		        },  
		        "email": {
		            required: "You must enter your Email Id",
		            emailtest: "Please enter valid Email Id"
		        },
		        "feedback": {
		            required: "You must enter your Feedback"
		        },
		    },
		    submitHandler: function(form) {
	        $.ajax({
	            url: form.action,
	            type: form.method,
	            data: $(form).serialize(),
	            success: function(response) {
	                //console.log(response);
		                if(response == 1){  
		                	$("#feedback")[0].reset();
		                    window.location.href= "thankyou.php";
		                }
		                else
		                {
		                	$('.msg').html(response);
		                	$("#feedback")[0].reset();
		                }
	            	}            
	        	});
	    	}
	});

	//Career Form Validation
	$("#career_form").validate({
			rules: {
		        "name": {
		            required: true,
		            lettersonly:true
		        },  
		        "email": {
		            required: true,
		            emailtest: "Please enter valid Email Id"
		        },
		        "phone": {
		            required: true,
		            number: true,
		            maxlength: 10,
		            minlength: 10
		        },
		        "message": {
		            required: true
		        },
		        "file": {
		            required: true,
		            extension: "pdf"
		        }
		    },
		    messages: {
		        "name": {
		            required: "You must enter your Name",
		            lettersonly:"must enter character only"
		        },  
		        "email": {
		            required: "You must enter your Email Id",
		            emailtest: "Please enter valid Email Id"
		        },
		        "file": "Please Upload PFD file",
		         "phone": {
		            required: "You must enter your phone",
		            number: "must contain digits only",
		            maxlength: "Phone Number must contain maximum 10 digits",
		            minlength: "Phone Number must contain minimum 10 digits"
		        },
		        "message": {
		            required: "You must enter your message"
		        }
		    }
		    
	});
	
});



