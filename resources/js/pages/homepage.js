import { Cart } from '../components/cart.js';
import { Core } from '../components/core.js';

class Homepage {
    constructor() {
        const $this = this;
        $this.initializeAnimation();
        $this.initializeCounters();
        $this.initializeSliders();

        $this.cart = new Cart();
    }

    initializeAnimation() {
        AOS.init({
            duration: 800,
            easing: 'slide'
        });
    }

    initializeCounters() {
        const $this = this;
        const numberCounters = function () {

            $('#section-counter').waypoint(function (direction) {

                if (direction === 'down' && !$(this.element).hasClass('ftco-animated')) {
                    let numberStep = $.animateNumber.numberStepFactories.separator(',');
                    $('.number').each(function () {
                        const $this = $(this),
                            num = $this.data('number');
                        $this.animateNumber(
                            {
                                number: num,
                                numberStep: numberStep
                            }, 2000
                        );
                    });

                }

            }, {offset: '95%'});

        }();

        const contentWayPoint = function () {
            let i = 0;
            $('.ftco-animate').waypoint(function (direction) {
                if (direction === 'down' && !$(this.element).hasClass('ftco-animated')) {
                    i++;
                    $(this.element).addClass('item-animate');
                    setTimeout(function () {

                        $('body .ftco-animate.item-animate').each(function (k) {
                            const el = $(this);
                            setTimeout(function () {
                                const effect = el.data('animate-effect');
                                if (effect === 'fadeIn') {
                                    el.addClass('fadeIn ftco-animated');
                                } else if (effect === 'fadeInLeft') {
                                    el.addClass('fadeInLeft ftco-animated');
                                } else if (effect === 'fadeInRight') {
                                    el.addClass('fadeInRight ftco-animated');
                                } else {
                                    el.addClass('fadeInUp ftco-animated');
                                }
                                el.removeClass('item-animate');
                            }, k * 50, 'easeInOutExpo');
                        });

                    }, 100);

                }
            }, {offset: '95%'});
        }();
    }

    initializeSliders() {
        const $this = this;
        $this.homeSlider = function () {
            $('.home-slider').owlCarousel({
                loop: true,
                autoplay: true,
                margin: 0,
                animateOut: 'fadeOut',
                animateIn: 'fadeIn',
                nav: false,
                autoplayHoverPause: true,
                items: 1,
                navText: ["<span class='ion-md-arrow-back'></span>", "<span class='ion-chevron-right'></span>"]
            });

        }();
    }
}
Core.init();
Core.Homepage = new Homepage();
