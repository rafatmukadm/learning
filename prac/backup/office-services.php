<!doctype html>
<html lang="en-US">

<head>
    <title>Webpage Title</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <?php include '_partial/head.php' ?>
    <style>
      .nav1 ul li:nth-child(3) a,
      .nav1 ul li a:hover,
      .nav1 ul li a:focus {
            color: #23bcc5;
            border-bottom: 2px solid #23bcc5;
            border-top: 2px solid #23bcc5;
        }
        
        .btng {
            text-transform: capitalize;
        }
        
        .tabcontent {
            display: none;
        }
        
        .btn.active,
        .btn:active {
            background-color: #BED62F !important;
        }
        
        .btng:hover {
            background-color: #BED62F !important;
        }

    </style>
</head>

<body>
    <header>
        <?php include '_partial/header.php' ?>
        <div class="col-md-12  p-none p-b-lg">

            <span><img src="img/ser.jpg" class="  img-responsive"> </span>

        </div>
    </header>
    <!--<div class="col-md-12  p-none  container-fluid p-b-lg">
        <div class="col-md-12 ">
		<span><img src="img/images.jpg" class="cont-background  img-responsive"></span>
            <div class="faqbackground-ov"></div>
            <div class="col-md-11 col-sm-offset-1">
            </div>
        </div>
    </div>-->

    <div class="clearfix"></div>
    <section id="section-home1" class="container-fluid p-lr-none m-b-md bg-f1f">
        <div class=" page-wrapper container-fluid">
            
<div class="container">
    <div class="row">
     <div class="col-md-12 p-b-md">
           <h1 class="">SERVICES</h1> <span class="doubleline"></span>
      </div>
   </div>
<!--    services tabs start-->
    <ul class="nav nav-1 nav-tabs nav-tabs-1">
    <li class="active"><a data-toggle="tab" href="#s-home">Sofa</a></li>
    <li><a data-toggle="tab" href="#menu1">Sofa</a></li>
    <li><a data-toggle="tab" href="#menu2">Chairs</a></li>
    <li><a data-toggle="tab" href="#menu3">Carpet</a></li>
     <li><a data-toggle="tab" href="#menu4">Mattress</a></li>
    <li><a data-toggle="tab" href="#menu5">Car Cleaning</a></li>
  </ul>
    
    <!--    services tabs ends-->
    <div class="clearfix"></div>
<div class="p-t-md"> <!--home-office tabs start-->
  <ul class="nav nav-pills nav-justified">
    <li class="active"><a data-toggle="pill" href="#home-ser">Home</a></li>
    <li><a data-toggle="pill" href="#office">Office</a></li>
   </ul>
  
  <div class="tab-content">
    <div id="s-home" class="tab-pane fade in active">
      <h3>HOME</h3>
<!--      Sofa start-->
        
    </div>
    <div id="office" class="tab-pane fade">
      <h3>Office</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
   </div>
</div>
    <!--home-office-tabs ends-->
</div>
 <!--  container ends-->
        <div class="clearfix  ">
        </div>


        </div>
    </section>

    <div class="clearfix"></div>

    <div class="clearfix"></div>
    <footer>
        <?php include '_partial/footer.php' ?>
    </footer>
    <?php include '_partial/footer-scripts.php' ?>

<!--    jump to section-->
    <script>

    $(document).ready(function(){
                            
    var url = document.location.toString();
    
        if ( url.match('#') ) {
            var $this=$('#'+url.split('#')[1].trim());
             $('html,body').animate({scrollTop: $this.offset().top},'slow');
               
        }
    });

    </script>


    <script>
        
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }
//        document.getElementById("defaultOpen").click();
        

        
$(document).ready(function () {
    var $animation_elements = $('.effect-zoom');
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
                $element.addClass('animated rotateInDownLeft');
            } else {
                $element.removeClass('animated rotateInDownLeft');
            }
        });
    }
    $window.on('scroll resize', check_if_in_view);
    $window.trigger('scroll');
});


    </script>


    <!--   // jump to section-->
</body>

</html>
