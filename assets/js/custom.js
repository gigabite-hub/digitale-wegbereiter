"use strict";

(function ($) {

    $(document).ready(function () {
        var currentURL = window.location.href;
        console.log("🚀 ~ currentURL:", currentURL);
        console.log("Ready");


        function showPopup() {
            $('#custom-popup').fadeIn(500);
        }

        // Show the popup when the page loads
        showPopup();

        // Close the popup when the close button is clicked
        $('.popup-close').click(function () {
            $('#custom-popup').fadeOut(500, function () {
                // Reopen the popup after 3 seconds
                setTimeout(showPopup, 3600000);
            });
        });

        // Close the popup when clicking outside the content area
        // $(document).click(function (event) {
        //   if (!$(event.target).closest('.popup-content').length && !$(event.target).is('.popup-content')) {
        //     $('#custom-popup').fadeOut(500, function () {
        //       // Reopen the popup after 3 seconds
        //       setTimeout(showPopup, 3000);
        //     });
        //   }
        // });

        // $('.main-menu ul li:first-child a font font').text('Home');
        $('.main-menu #menu-main-menu li:first-child a font font').text('Home');

        $("#searchIcon").click(function () {
            $("#searchWrapper").toggleClass("open__search-bar");
        });

        $("#flyout-search").click(function () {
            $("#flyoutWrapper").toggleClass("open__search-bar");
        });

        var swiper = new Swiper(".banner__slider", {
            loop: true,
            effect: "fade",
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });

        $("#openSideBarButton").click(function () {
            openSideBar();
        });

        $(".menu__layer-wrapper").click(function () {
            closeLayerSideBar();
        });

        $(".menu__sidebar-close--btn").click(function () {
            closeSideBar();
        });

        function openSideBar() {
            $("body").addClass('open__sidebar-menu');
        }
        function closeSideBar() {
            $("body").removeClass('open__sidebar-menu');
        }
        function closeLayerSideBar() {
            $("body").removeClass('open__sidebar-menu');
        }

    });

}(jQuery));
