/*
 * Welcome to your app's main JavaScript file!
 *
 * This file will be included onto the page via the importmap() Twig function,
 * which should already be in your base.html.twig.
 */
import './styles/app.css';
import './styles/responsive.css';

import $ from 'jquery';

import 'bootstrap/dist/css/bootstrap.css';
import 'bootstrap';

import 'typeface-roboto';

import 'owl.carousel/dist/assets/owl.carousel.css';
import 'owl.carousel';
$(document).ready(function(){
    $(".owl-carousel").owlCarousel({
        loop: true,
        margin: 0,
        navText: [],
        center: true,
        autoplay: true,
        autoplayHoverPause: true,
        responsive: {
          0: {
            items: 1
          },
          1000: {
            items: 3
          }
        }
    });
});