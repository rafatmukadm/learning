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
                    <div class="col-md-12  p-b-lg">
                        <h1 class="">SERVICES</h1> <span class="doubleline"></span></div>
                    <!--     ---------   form-->
                       <div class=" col-md-12  p-b-md " id="hdc">
                    <!--third sec-->
                    <!-- First section-->
                    <div class=" col-md-6 sec1 effect-zoom" >
                        <span><h2>
							<i class="fa fa-chevron-circle-right m-r-sm f-20 siteA" aria-hidden="true" ></i>
								Deap Cleaning
                            </h2></span >
                            <p>
                                Let your home sparkle and gleam through our Deep Cleaning services. Our experts take the load off your shoulder by creating and maintaining a hygienic environment in every nook and corner of your house.

                            </p>
                         <div class="tab">
                             <button class="btn btng tablinks active" onclick="openCity(event, 'deep-h')">Home </button>
                             <button class="btn btng tablinks" onclick="openCity(event, 'd-o')">Office </button>
                        </div>
                            
                         <div id="deep-h" class="tabcontent" style="display:block;">
                            <p>
                                <span><h3><i class="fa fa-bullseye f-19 m-r-xxs" aria-hidden="true" style="color:#23bcc5;"></i>Home </h3></span> Our Kitchen Cleaning service takes utmost care and helps in making your home bacteria and germ-free. (Note: Does not include chimney cleaning and interior of cabinets).
                            </p>
                        </div>
                        
                         <div id="d-o" class="tabcontent">
                            <p>
                            <span><h3><i class="fa fa-bullseye f-19" aria-hidden="true" style="color:#23bcc5;"></i> Office</h3></span> An ideal Corporate Office is where your employees are at comfort, which is possible only if the office premises are neat and tidy. Our professional and efficient services ensure complete cleaning of the offices, including thorough cleaning of chairs, tables, desks and other upholstery. 
                        </p>
                    </div>


                </div>

                <div class=" col-md-6 effect2">
                    <span> <img src="img/dc.jpg" class="img-responsive p-t-xxl" style="width:500px;"></span>
                </div>
            </div>
                    <div class=" col-md-12  p-b-md " id="sm1">
                        <!-- First section-->
                        <div class=" col-md-6 effect-zoom">
                        <span> <img src="img/sofa.png" class="img-responsive p-t-xxl " style="width:500px;"></span>
                    </div>
                        <div class=" col-md-6 sec1 effect-zoom">
                            <span><h2>
							<i class="fa fa-chevron-circle-right m-r-sm f-20 siteA" aria-hidden="true" ></i>
								Sofa
                            </h2></span >
                            <p>
                                Let your home sparkle and gleam through our Deep Cleaning services. Our experts take the load off your shoulder by creating and maintaining a hygienic environment in every nook and corner of your house.

                            </p>
                            
                            <div class="tab">
                                
                             <button class="btn btng tablinks active" onclick="openCity(event, 'sh')">Home</button>
                             <button class="btn btng tablinks" onclick="openCity(event, 'sofah')">Hotels & Restaurants</button>
                             <button class="btn btng tablinks" onclick="openCity(event, 'sofal')">Lounges & Night Club</button>
                             </div>
                             
                            <div id="sh" class="tabcontent" style="display:block;">
                            <p>
                                <span><h3><i class="fa fa-bullseye f-19 m-r-xxs" aria-hidden="true" style="color:#23bcc5;"></i>Home</h3></span> Our Kitchen Cleaning service takes utmost care and helps in making your home bacteria and germ-free. (Note: Does not include chimney cleaning and interior of cabinets).
                            </p>
                        </div>
                             
                        <div id="sofah" class="tabcontent">
                            <p>
                                <span><h3><i class="fa fa-bullseye f-19" aria-hidden="true" style="color:#23bcc5;"></i> Hotels & Restaurants </h3></span> Our Kitchen Cleaning service takes utmost care and helps in making your home bacteria and germ-free. (Note: Does not include chimney cleaning and interior of cabinets).
                            </p>
                        </div>

                        <div id="sofal" class="tabcontent">
                            <p><span><h3><i class="fa fa-bullseye f-19 " aria-hidden="true" style="color:#23bcc5;"></i> Lounges & Night Clubs </h3></span> We provide comprehensive cleaning of bathrooms & toilets that will help in keeping your washrooms disinfeted and clean.
                            </p>
                        </div>

                    </div>

                    
                </div>
                <div class=" col-md-12  p-b-md" id="cm1">
                    <!-- 2nd sec-->
                    <!-- Second section-->
                    

                    <div class=" col-md-6 sec1 effect-zoom" >
                        <span><h2>
							<i class="fa fa-chevron-circle-right m-r-sm f-20 siteA" aria-hidden="true" ></i>
								Carpet
                            </h2></span >
                            <p><span><h3><i class="fa fa-bullseye f-19 m-r-xxs" aria-hidden="true" style="color:#23bcc5;"></i>Homes </h3></span> We specialize in offering professional office deep cleaning services. Our cleaning involves

                        </p>
                        <div class="tab">
                            <button class="btn btng tablinks active" onclick="openCity(event, 'carpet-h')">Home</button>
                            <button class="btn btng tablinks" onclick="openCity(event, 'carpet')">Hotels</button>
                             <button class="btn btng tablinks" onclick="openCity(event, 'carpet-sh')">Cinema Halls</button>
                            <button class="btn btng tablinks" onclick="openCity(event, 'carpet-off')">corporate Office</button>
                           
                        </div>
                        <div id="carpet-h" class="tabcontent" style="display:block;">
                            <p>
                                <span><h3><i class="fa fa-bullseye f-19 m-r-xxs" aria-hidden="true" style="color:#23bcc5;"></i>Home </h3></span> Our Kitchen Cleaning service takes utmost care and helps in making your home bacteria and germ-free. (Note: Does not include chimney cleaning and interior of cabinets).
                            </p>
                        </div>
                        
                        <div id="carpet" class="tabcontent">
                            <p>
                                <span><h3><i class="fa fa-bullseye f-19 m-r-xxs" aria-hidden="true" style="color:#23bcc5;"></i>Hotels</h3></span> Our Kitchen Cleaning service takes utmost care and helps in making your home bacteria and germ-free. (Note: Does not include chimney cleaning and interior of cabinets).
                            </p>
                        </div>
                        
                        <div id="carpet-sh" class="tabcontent">
                            <p>
                                <span><h3><i class="fa fa-bullseye f-19 m-r-xxs" aria-hidden="true" style="color:#23bcc5;"></i>Cinema Halls</h3></span> Our Kitchen Cleaning service takes utmost care and helps in making your home bacteria and germ-free. (Note: Does not include chimney cleaning and interior of cabinets).
                            </p>
                        </div>
                        <div id="carpet-off" class="tabcontent">
                            <p>
                                <span><h3><i class="fa fa-bullseye f-19 m-r-xxs" aria-hidden="true" style="color:#23bcc5;"></i> Corporate Office</h3></span> Our Kitchen Cleaning service takes utmost care and helps in making your home bacteria and germ-free. (Note: Does not include chimney cleaning and interior of cabinets).
                            </p>
                        </div>
                    </div>
                    <div class=" col-md-6 effect2">
                        <span> <img src="img/capt2.jpg" class="img-responsive p-t-xxl"></span>
                    </div>
                </div>
                <div class=" col-md-12  p-b-md">
                    <!--third sec-->
                    <!-- First section-->
                    <div class=" col-md-6 effect-zoom">
                    <span> <img src="img/mattress.png" class="img-responsive p-t-xxl" style="width:500px;"></span>
                </div>
                    <div class=" col-md-6 effect-zoom sec1 " id="mm1">
                        <span><h2>
							<i class="fa fa-chevron-circle-right m-r-sm f-20 siteA" aria-hidden="true" ></i>
								Mattress
                            </h2></span >
                            <p>
                                Let your home sparkle and gleam through our Deep Cleaning services. Our experts take the load off your shoulder by creating and maintaining a hygienic environment in every nook and corner of your house.

                            </p>
                         <div class="tab">
                             <button class="btn btng tablinks active" onclick="openCity(event, 'mat-h')">Home</button>
                             <button class="btn btng tablinks" onclick="openCity(event, 'm-h')">Hotels & Restaurants</button>
                        </div>
                            
                         <div id="mat-h" class="tabcontent" style="display:block;">
                            <p>
                                <span><h3><i class="fa fa-bullseye f-19 m-r-xxs" aria-hidden="true" style="color:#23bcc5;"></i>Home </h3></span> Our Kitchen Cleaning service takes utmost care and helps in making your home bacteria and germ-free. (Note: Does not include chimney cleaning and interior of cabinets).
                            </p>
                        </div>
                        
                          <div id="m-h" class="tabcontent">
                            <p>
                            <span><h3><i class="fa fa-bullseye f-19" aria-hidden="true" style="color:#23bcc5;"></i> Hotels & Restaurants</h3></span> Our Kitchen Cleaning service takes utmost care and helps in making your home bacteria and germ-free. (Note: Does not include chimney cleaning and interior of cabinets).
                        </p>
                    </div>


                </div>

                
            </div>
                     <div class=" col-md-12  p-b-md " id="ch">
                    <!--third sec-->
                    <!-- First section-->
                    <div class=" col-md-6 sec1 effect-zoom">
                        <span><h2>
							<i class="fa fa-chevron-circle-right m-r-sm f-20 siteA" aria-hidden="true" ></i>
								Chairs
                            </h2></span >
                            <p>
                                Complete Home service includes vacuuming of sofa, chairs and mattress, cleaning of blinds, window panes and channels, false ceiling & electricals, manual scrubbing/mopping of floor, dusting of gadgets & furniture, removal of cobwebs, etc..

                            </p>
                         <div class="tab">
                             <button class="btn btng tablinks active" onclick="openCity(event, 'chome')">Home</button>
                             <button class="btn btng tablinks" onclick="openCity(event, 'chm2')">Chairs</button>
                        </div>
                            
                         <div id="chome" class="tabcontent" style="display:block;">
                            <p>
                                <span><h3><i class="fa fa-bullseye f-19 m-r-xxs" aria-hidden="true" style="color:#23bcc5;"></i>Home </h3></span> Our Kitchen Cleaning service takes utmost care and helps in making your home bacteria and germ-free. (Note: Does not include chimney cleaning and interior of cabinets).
                            </p>
                        </div>
                        
                          <div id="chm2" class="tabcontent">
                            <p>
                            <span><h3><i class="fa fa-bullseye f-19" aria-hidden="true" style="color:#23bcc5;"></i> Chairs</h3></span> Our Kitchen Cleaning service takes utmost care and helps in making your home bacteria and germ-free. (Note: Does not include chimney cleaning and interior of cabinets).
                        </p>
                    </div>


                </div>

                <div class=" col-md-6 effect2">
                    <span> <img src="img/office-desk-two.png" class="img-responsive p-t-xxl" style="width:500px;"></span>
                </div>
            </div>
            <div class=" col-md-12  p-b-md" id="carm">
                <!-- 2nd sec-->
                <!-- Second section-->
                <div class=" col-md-6 effect-zoom">
                    <span> <img src="img/car-1.png" class="img-responsive p-t-xxl"></span>
                </div>

                <div class=" col-md-6 effect2">
                    <span><h2>
							<i class="fa fa-chevron-circle-right m-r-sm f-20 siteA" aria-hidden="true" ></i>
								Car Cleaning
                            </h2></span >
                            <p><span><h3><i class="fa fa-bullseye f-19 m-r-xxs" aria-hidden="true" style="color:#23bcc5;"></i>Homes </h3></span> Sparkle your Car with our professional cleaning services. Just like our home, our car also requires thorough cleaning and maintenance. So, sit back and relax while we make it look new.


                    </p>
                    <div class="tab">
                        <button class="btn btng tablinks active" onclick="openCity(event, 'car-h')">Individual </button>
                        <button class="btn btng tablinks" onclick="openCity(event, 'car-2')">Corporate</button>
                        
                    </div>
                    <div id="car-h" class="tabcontent" style="display:block;">
                        <p>
                            <span><h3><i class="fa fa-bullseye f-19 m-r-xxs" aria-hidden="true" style="color:#23bcc5;"></i>Individual </h3></span> Our Kitchen Cleaning service takes utmost care and helps in making your home bacteria and germ-free. (Note: Does not include chimney cleaning and interior of cabinets).
                        </p>
                    </div>
                    <div id="car-2" class="tabcontent">
                        <p>
                            <span><h3><i class="fa fa-bullseye f-19 m-r-xxs" aria-hidden="true" style="color:#23bcc5;"></i>  Corporate </h3></span> Our Kitchen Cleaning service takes utmost care and helps in making your home bacteria and germ-free. (Note: Does not include chimney cleaning and interior of cabinets).
                        </p>
                    </div>
                   
                </div>
            </div>

        </div>
        <!-- main12row end-->


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
