'use strict';

var $       = require('jquery');
var fitVids = require('fitvids');
var popup   = require('magnific-popup');

var blog = {

    init: function() {

        var blog = this;

        this.addImageLightBox();

        $(document).ready(function() {
            blog.addFitVideos();
            blog.addMagnifiquePopup();
            blog.addResponsiveMenu();
        });
    },

    /**
     * Add handlers to apply the responsive menu bar and handle the show/close of the menu itself
     * @addResponsiveMenu
     */

    addResponsiveMenu: function() {

        // Add the click listener to toggle the responsive menu class
        $('.menu-toggle').on('click', function(){
            $('.categories-list').toggleClass('responsive');
        });

        // This will make sure that we submit the form to add emails when we click anywhere outside of the email input field
        $(document).mouseup(function(e) {

            var container = $(".navigation-bar");

            if (!container.is(e.target) // if the target of the click isn't the container...
                && container.has(e.target).length === 0) // ... nor a descendant of the container
            {
                $('.categories-list').removeClass('responsive');
            }
        });
    },

    /**
     * Add CSS class to all image links by checking the href of <a> tags and known image extension types
     * the image-popup class is picked up by the magnific popup afterwards
     * @addImageLightBox
     */

    addImageLightBox: function() {
        return $(`a[href$='.jpg'],
            a[href$='.jpeg'],
            a[href$='.JPG'],
            a[href$='.png'],
            a[href$='.gif']`
        ).addClass("image-popup");
    },

    /**
     * lets your videos be responsive by keeping an intrinsic aspect ratio
     * Reference: https://github.com/rosszurowski/vanilla-fitvids
     *
     * @addFitVideos
     */

    addFitVideos: function() {
        return fitVids(".blog-post");

    },

    /**
     * Fast, light and responsive lightbox plugin, for jQuery and Zepto.js
     * Reference: http://dimsemenov.com/plugins/magnific-popup/documentation.html
     *
     * @addMagnifiquePopup
     *
     * @option {String} type    : The type of the popup galery
     * @option {String} tLoading: Text that is displayed during loading. Can contain %curr% and %total% keys
     * @option {Object} gallery : The gallery module allows you to switch the content of the popup and adds navigation arrows.
     *                            It can switch and mix any types of content, not just images
     *  @option {Boolean} enabled           : Enable gallery
     *  @option {Boolean} navigateByImgClick: Flip through gallery by clicking on the image itself
     *  @option {Array} preload             : Preloader in Magnific Popup is used as an indicator of current status.
     *                                        If option enabled, it’s always present in DOM only text inside of it changes.
     *                                        Below you can see explanation of CSS names that are applied to container that holds preloader
     *                                        and content area depending on the state of current item
     * @option {Object} image   :
     *  @option {String} tError: Error message when image could not be loaded
     * @option {Integer} removalDelay: Delay before popup is removed from DOM. Used for the animation
     * @option {String} mainClass    : String that contains classes that will be added to the root element of popup wrapper and to dark overlay
     */

    addMagnifiquePopup: function() {
        if (!!$('.image-popup').length) {
            $('.image-popup').magnificPopup({
                type    : 'image',
                tLoading: 'Loading image #%curr%...',
                gallery : {
                  enabled           : true,
                  navigateByImgClick: true,
                  preload           : [0,1]
                },
                image: {
                  tError      : '<a href="%url%">Image #%curr%</a> could not be loaded.',
                },
                removalDelay: 300,
                mainClass   : 'mfp-fade'
            });
        }
    }
}

blog.init();