/*
  ﻿==============================================================================
  Authour URI: http://www.binarytheme.com
  License: MIT
  100% Free To use For Personal And Commercial Use.
  ==============================================================================
 */

(function ($) {
  'use strict';
  var mainApp = {

      animation_text: function () {

        // These Codes Used To Flipping Text
        $('.error').flipping_text(); // Used for ERROR 404 !
        $('.not-found').flipping_text(); // Used for RESOURCE NOT FOUND

        // These Codes Used To Rotate Text
        $('.company').textrotator({ // Used for Please Go Back
            animation:  'spin'  // You Can Change Its Values To dissolve, flip, fade, flipCube, flipCubeUp, flipUp and spin also. You can pass more words by using , seprator
          , speed:      2750    // time in miliseconds till the next word will wait 1250
        });
        $('.error').textrotator({   // Used  for ERROR 404 !
            animation:  'flipCube'  // You Can Change Its Values To dissolve, fade, flipCube, flipCubeUp, flipUp, flip and spin also. You can pass more words by using , seprator
          , speed:      3750        // time in miliseconds till the next word will wait 1750
        });

        $('.go-back').textrotator({ // Used for Please Go Back
            animation:  'dissolve'
          , speed:      1750
        });

        //scroll reveal Script Function calling.
        window.scrollReveal = new scrollReveal();

      }
    , initialization: function () {
        mainApp.animation_text();
      }

    /*=============================================================
      CUSTOM SCRIPTS HERE

    ========================================================  */
  }

  // Initializing ///

  $(document).ready(function () {
    mainApp.animation_text();
  });

}(jQuery));
