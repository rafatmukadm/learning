// All custom codes with comment
	// number valdation
    function isNumber(evt) {
        var iKeyCode = (evt.which) ? evt.which : evt.keyCode;
        //alert(iKeyCode);
        if (iKeyCode > 31 && (iKeyCode < 39 || iKeyCode > 57 || iKeyCode == 42 || iKeyCode == 43 || iKeyCode == 45 || iKeyCode == 47 || iKeyCode == 46) && iKeyCode != 32 && iKeyCode !== 39 && iKeyCode !== 37 && iKeyCode !== 46) {
            return false;
        }
        return true;
    }
 function checkmobile() {
        var mobile = document.getElementById("mobile");
        if (mobile.value.length < 10) {
            mobile.value = "";
            alert("Enter 10 digit Number");
        }
    }

//        text c space
    function keycheckval(evt) {
        evt = (evt) ? evt : event;
        var charCode = (evt.charCode) ? evt.charCode : ((evt.keyCode) ? evt.keyCode :
            ((evt.which) ? evt.which : 0));
        if (charCode > 31 && (charCode < 65 || charCode > 90) &&
            (charCode < 97 || charCode > 122) && charCode != 32) {
            alert("Enter letters only.");
            return false;
        }
        return true;
    }

//email format
function validateForm() {
    var x = document.forms["myForm"]["email"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("Not a valid e-mail address");
        return false;
    }
}

/*$('.valmail-js').change(function () {
        
       var exmail = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
        if (exmail.test($(this).val().trim())) {
            $(this).closest('form').find('.falert').slideUp(200);
            $(this).css({
                'border-color': '#FCB606 '
            });
            return true;
        } else {
            $(this).val('');
            $(this).css({
                'border-color': 'red'
            });
            $(this).closest('form').find('.falert').slideDown(200).html("<span style='color: red'><i class='fa fa-exclamation-circle'></i> Please check your Email-id</span>");
            return false;
        }

   });*/
// animation on scroll
$(document).ready(function () {
    var $animation_elements = $('.effect2');
    var $window = $(window);

    function check_if_in_view() {
        var window_height = $window.height();
        var window_top_position = $window.scrollTop();
        var window_bottom_position = (window_top_position + window_height);
        $.each($animation_elements, function () {
            var $element = $(this);
            var element_height = $element.outerHeight();
            var element_top_position = $element.offset().top;
            var element_bottom_position = (element_top_position + element_height);
            //check to see if this current container is within viewport
            if ((element_bottom_position >= window_top_position) &&
                (element_top_position <= window_bottom_position)) {
                $element.addClass('animated rotateInUpRight');
            } else {
                $element.removeClass('animated rotateInUpRight');
            }
        });
    }
    $window.on('scroll resize', check_if_in_view);
    $window.trigger('scroll');
   

 // Add scrollspy to <services tabs and indes circle tabs>
    if ($(window).width() < 783) {

        $('.first').on('click', function () {
             $('html,body').animate({
                    scrollTop: $('#myScrollspy').offset().top - 0
                }, 'slow');
            });
 

        $('.first1').on('click', function () {
                $('html,body').animate({
                    scrollTop: $('#myScrollspyIn').offset().top - 80
                }, 'slow');
            });
        }
    });









