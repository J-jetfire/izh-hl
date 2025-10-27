<script src='js/preloader.js'></script>
       
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
    <!-- Include all compiled plugins (below), or include individual files as needed -->

<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
         
    </script>
    <!-- Inclins (below), or include individual files as needasdasded -->
    <script type="text/javascript">
        $(document).ready(
                function() {
                    
            $('.owl-carousel').owlCarousel({
                items: 3,
                startPosition: keys1,
                nav:true,
                navText: ["",""],
                //navText: ['<i class="fa fa-angle-left fa-2x" aria-hidden="true"></i>',
                          //'<i class="fa fa-angle-right fa-2x" aria-hidden="true"></i>'],
                center: true
            });
            
            $('.open').on('click', function(event) {
                if (!$(".mover").hasClass("is-visible")) {
                    $(".mover").addClass("is-visible");
                } else if ($(".mover").hasClass("is-visible")) {
                    $(".mover").removeClass("is-visible");
                }
                //$('.mover').removeClass('is-visible');
            });
            $('.closeds').on('click', function(event) {
                if ($(".mover").hasClass("is-visible")) {
                    $(".mover").removeClass("is-visible");
                }
                //$('.mover').removeClass('is-visible');
            });
            $(document).mouseup(function(e) {
                var $target = $(e.target);
                if ($target.closest(".mover").length == 0) {
                    $(".mover").removeClass("is-visible");
                }
            });
            
                });
    </script>