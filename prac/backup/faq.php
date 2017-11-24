<!doctype html>
<html lang="en-US">

<head>
    <title>Webpage Title</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <?php include '_partial/head.php' ?>
    <style>
       .nav1 ul li:nth-child(6) a,
       .nav1 ul li a:hover,
       .nav1 ul li a:focus {
            color: #23bcc5;
            border-bottom: 2px solid #23bcc5;
            border-top: 2px solid #23bcc5;
        }

    </style>
</head>

<body>
    <header>
        <?php include '_partial/header.php' ?>
    </header>
     <div class="col-md-12  p-none cont-b  p-b-lg mob-p">

            <span><img src="img/f1.jpg" class="  img-responsive"> </span>

        </div>

    <div class="clearfix"></div>
    <section id="section-home1" class="container-fluid p-lr-none m-b-md bg-f1f">
        <div class=" page-wrapper container-fluid p-lr-none  ">
            <div class="container mob-p">
                <div class="col-md-12">
                        <div class="col-md-12  p-b-lg">
                        <h1 class="mob-text">FAQ</h1> <span class="doubleline" style="width: 7%;"></span></div>
                    <!--     ---------   accordation-->
                    <div class="col-md-4 ">
                        <div class="">
                            <div class="catefaq p-b-md">
                                <h3 class="active" data-tom="c2">HOW TO START <i class="fa fa-arrow-right pull-right fa-chevron-right"></i></h3>
                                <h3 data-tom="c3" class="">IT <i class="fa fa-arrow-right pull-right fa-chevron-right"></i></h3>
                                <h3 data-tom="c4" class="">MARKETING <i class="fa fa-arrow-right pull-right fa-chevron-right"></i></h3>
                                <h3 data-tom="c5" class="">OPERATIONS <i class="fa fa-arrow-right pull-right fa-chevron-right"></i></h3>
                                <h3 data-tom="my-faq" class="">All <i class="fa fa-arrow-right pull-right fa-chevron-right"></i></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 ">
                        <div class="panel-group " id="accordion">
                <div class="panel panel-default my-faq c2" style="display: block;">
                    <div class="panel-heading collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="false">
                        <h4 class="panel-title">
                            <a href="javascript:void(0)"><span>1</span>. What Lorem Ipsum is simply dummy text?</a>
                            <span class="pull-right"><i class="fa fa-chevron-right"></i></span>
                        </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                        <div class="panel-body"> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley .
                        </div>
                    </div>
                </div>
                <div class="panel panel-default my-faq c2" style="display: block;">
                    <div class="panel-heading collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="false">
                        <h4 class="panel-title">
                            <a href="javascript:void(0)"><span>2</span>. Lorem Ipsum is simply dummy text?</a>
                            <span class="pull-right"><i class="fa fa-chevron-right"></i></span>
                        </h4>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse" aria-expanded="false">
                        <div class="panel-body"> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley .</div>
                    </div>
                </div>
                <div class="panel panel-default my-faq c2" style="display: block;">
                    <div class="panel-heading collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="false">
                        <h4 class="panel-title">
                            <a href="javascript:void(0)"><span>3</span>.Lorem Ipsum is simply dummy text?</a>
                            <span class="pull-right"><i class="fa fa-chevron-right"></i></span>
                        </h4>
                    </div>
                    <div id="collapse3" class="panel-collapse collapse" aria-expanded="false">
                        <div class="panel-body"> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley  .</div>
                    </div>
                </div>
                <div class="panel panel-default my-faq c3" style="display: none;">
                    <div class="panel-heading collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="false">
                        <h4 class="panel-title">
                            <a href="javascript:void(0)"><span>4</span> Lorem Ipsum has been the industry's  </a>
                            <span class="pull-right"><i class="fa fa-chevron-right"></i></span>
                        </h4>
                    </div>
                    <div id="collapse4" class="panel-collapse collapse" aria-expanded="false">
                        <div class="panel-body"> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley </div>
                    </div>
                </div>
                <div class="panel panel-default my-faq c3" style="display: none;">
                    <div class="panel-heading collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse5" aria-expanded="false">
                        <h4 class="panel-title">
                            <a href="javascript:void(0)"><span>5</span>.Lorem Ipsum is simply dummy text</a>
                            <span class="pull-right"><i class="fa fa-chevron-right"></i></span>
                        </h4>
                    </div>
                    <div id="collapse5" class="panel-collapse collapse" aria-expanded="false">
                        <div class="panel-body">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but al.</div>
                    </div>
                </div>
                <div class="panel panel-default my-faq c3" style="display: none;">
                    <div class="panel-heading collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse6" aria-expanded="false">
                        <h4 class="panel-title">
                            <a href="javascript:void(0)"><span>6</span>.Lorem Ipsum is simply dummy text?</a>
                            <span class="pull-right"><i class="fa fa-chevron-right"></i></span>
                        </h4>
                    </div>
                    <div id="collapse6" class="panel-collapse collapse" aria-expanded="false">
                        <div class="panel-body">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but al</div>
                    </div>
                </div>
                <div class="panel panel-default my-faq c4" style="display: none;">
                    <div class="panel-heading collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse7" aria-expanded="false">
                        <h4 class="panel-title">
                            <a href="javascript:void(0)"><span>7</span>.Lorem Ipsum is simply dummy text?</a>
                            <span class="pull-right"><i class="fa fa-chevron-right"></i></span>
                        </h4>
                    </div>
                    <div id="collapse7" class="panel-collapse collapse" aria-expanded="false">
                        <div class="panel-body">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</div>
                    </div>
                </div>
                <div class="panel panel-default my-faq c4" style="display: none;">
                    <div class="panel-heading collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse8" aria-expanded="false">
                        <h4 class="panel-title">
                            <a href="javascript:void(0)"><span>8</span>. Lorem Ipsum is simply dummy text?</a>
                            <span class="pull-right"><i class="fa fa-chevron-right"></i></span>
                        </h4>
                    </div>
                    <div id="collapse8" class="panel-collapse collapse" aria-expanded="false">
                        <div class="panel-body"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy .</div>
                    </div>
                </div>
                <div class="panel panel-default my-faq c4" style="display: none;">
                    <div class="panel-heading collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse9" aria-expanded="false">
                        <h4 class="panel-title">
                            <a href="javascript:void(0)"><span>9</span>. Lorem Ipsum is simply dummy text?</a>
                            <span class="pull-right"><i class="fa fa-chevron-right"></i></span>
                        </h4>
                    </div>
                    <div id="collapse9" class="panel-collapse collapse" aria-expanded="false">
                        <div class="panel-body">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy </div>
                    </div>
                </div>
                <div class="panel panel-default my-faq c5" style="display: none;">
                    <div class="panel-heading collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse10" aria-expanded="false">
                        <h4 class="panel-title">
                            <a href="javascript:void(0)"><span>10</span>. Lorem Ipsum is simply dummy text?</a>
                            <span class="pull-right"><i class="fa fa-chevron-right"></i></span>
                        </h4>
                    </div>
                    <div id="collapse10" class="panel-collapse collapse" aria-expanded="false">
                        <div class="panel-body">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy .
                        </div>
                    </div>
                </div>
                <div class="panel panel-default my-faq c5" style="display: none;">
                    <div class="panel-heading collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse11" aria-expanded="false">
                        <h4 class="panel-title">
                            <a href="javascript:void(0)"><span>11</span>.Lorem Ipsum is simply dummy text?</a>
                            <span class="pull-right"><i class="fa fa-chevron-right"></i></span>
                        </h4>
                    </div>
                    <div id="collapse11" class="panel-collapse collapse" aria-expanded="false">
                        <div class="panel-body">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy .
                        </div>
                    </div>
                </div>

            </div>
                      <!--  <div class="panel panel-default my-faq c2" style="display: block;">
                            <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true">
                                <h4 class="panel-title">
                                    <a href="javascript:void(0)"><span>1</span>. What is My Branch?</a>
                                    <span class="pull-right"><i class="fa fa-chevron-right"></i></span>
                                </h4>
                            </div>
                            <div id="collapse1" class="panel-collapse collapse in" aria-expanded="true">
                                <div class="panel-body">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley .
                                </div>
                            </div>
                        </div-->
                                <!--    ---------------  tab2-->
                       
                        <!-- ---------------  tab2-->
                        
                      <!--  <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="true">
                               <h4 class="panel-title">
                                    <a href="javascript:void(1)"><span>1</span>. What is My Branch?</a>
                                    <span class="pull-right"><i class="fa fa-chevron-right"></i></span>
                                </h4>
                            </div>
                            <div id="collapse2" class="panel-collapse collapse in">
                                <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Collapsible Group 3</a>
                                </h4>
                            </div>
                            <div id="collapse3" class="panel-collapse collapse">
                                <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                            </div>
                        </div>
                    </div>
                        nd-->

                    </div>
                </div>
            </div>
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
    <script>
    $(function() {
        $(".datepicker").datepicker({
            minDate: 0,
            maxDate: "+80Y +1M +10D"
        });
    });

</script>



    <!--Taken from jQuery CDN-->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <!--Taken from Bootstrap CDN-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('.my-navtoggle').addClass('st2');
        });


        $('#accordion').on('shown.bs.collapse', function() {

            $(this).parent().find(".fa").removeClass("fa-chevron-down").addClass("fa-chevron-right");

        });

        var toid = $('.catefaq h3.active').attr('data-tom');
        $('.my-faq').hide();
        $('.' + toid).show();

        var nos = $('#accordion').find('.' + toid).find('a>span');
        var i;
        nos.text("");
        for (i = 0; i < nos.length; i++) {
            nos.eq(i).text(i + 1);
        }

        $('.catefaq h3').on('click', function() {
            $('.catefaq h3').removeClass('active');
            $(this).addClass('active');


            var toid = '.' + $(this).attr('data-tom');
            $('.my-faq').hide();
            $('.panel-collapse').collapse('hide');

            $('#accordion').find(toid + '.my-faq').show();
            $('body,html').delay(200).animate({
                scrollTop: $('#accordion').offset().top - 138
            }, 800);
            $('#accordion').find(toid).eq(0).find('.panel-collapse').collapse('show');

            var nos = $('#accordion').find(toid).find('a>span');
            var i;
            nos.text("");
            for (i = 0; i < nos.length; i++) {
                nos.eq(i).text(i + 1);
            }

        });

    </script>

</body>

</html>
