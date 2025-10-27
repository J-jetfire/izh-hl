$(document).ready(
                function() {
                    //$('.sl').slick();
                    
                    $('.center').slick({
                        centerMode: true,
                        infinite: false,
                        adaptiveheight: false,
                        initialSlide: jj,
                        slidesToShow: 3,
                        speed: 1000,
                        variableWidth: true
                    });
                    $('.center').on('beforeChange', function(event, slick, currentSlide, nextSlide) {
                        console.log('beforeChange', currentSlide, nextSlide);
                    });
                    $('.center').on('afterChange', function(event, slick, currentSlide) {
                        console.log('afterChange', currentSlide);
                    });
                });