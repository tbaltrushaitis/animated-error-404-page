<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Error 404 Page">
  <meta name="author" content="tbaltrushaitis@gmail.com">
  <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <![endif]-->
  <title>Oops, seems that Error 404 occurs. It means the page requested is not exist on this server. </title>
   <!--REQUIRED STYLE SHEETS-->
  <!-- Bootstrap Style sheet-->
  <link href="assets/css/bootstrap.css" rel="stylesheet" />
  <!-- font awesome Style sheet-->
  <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Simple text rotator plugin Style sheet-->
  <link href="assets/css/simpletextrotator.css" rel="stylesheet" />
  <!-- Social Button Style sheet-->
  <link href="assets/css/social-buttons.css" rel="stylesheet" />
  <!-- Custom Style sheet-->
  <link href="assets/css/style.css" rel="stylesheet" />
  <!-- Google Font-->
  <link href="assets/css/fonts.css" rel="stylesheet" />
  <!-- Google web font link-->
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <script src="assets/js/lib/html5shiv.js"></script>
    <script src="assets/js/lib/respond.min.js"></script>
  <![endif]-->
</head>
<!--/
<body class="striped">
/-->
<body>
  <div id="wrapper"><!--Page Wrapper start-->
      <div class="container">  <!--Page container start-->
          <div class="row">
              <div class="col-md-9" ><!--Main Headings And Links Start-->
                  <h1 class="error">OOPS! Error 404</h1>
                  <h3 class="not-found">RESOURCE NOT FOUND</h3>
                  <!--/ <h2 class="go-back"><a href="#"><i class="fa fa-mail-reply"></i>&nbsp;PLEASE GO BACK</a></h2> /-->
                  <h2><i class="fa fa-mail-reply">&nbsp;</i> <a class="go-back" href="#">GO BACK</a></h2>
                  <div class="row" data-scroll-reveal="enter bottom move 250px">
                      <a class="btn btn-danger" id="home_page"><i class="fa fa-home fa-2x"></i> Home Page</a>
                      <a class="btn btn-primary" id="about"><i class="fa fa-info-circle fa-2x"></i> About Us</a>
                      <a class="btn btn-warning" id="services"><i class="fa fa-thumbs-o-up fa-2x"></i> Services</a>
                      <a class="btn btn-info" id="career"><i class="fa fa-users fa-2x"></i> Career</a>
                      <a class="btn btn-success" id="contacts"><i class="fa fa-comments-o fa-2x"></i> Contact Us</a>
                  </div>
              </div>  <!--Main Headings And Links End-->

              <div class="col-md-3"> <!--Right bar Start-->
                  <div class="social-link" data-scroll-reveal="enter right move 250px">
                      <a class="btn btn-block btn-social btn-header" href="#">
                          <i class="fa fa-refresh fa-spin"></i>Social profiles
                      </a>
                      <a class="btn btn-block btn-social btn-facebook" href="https://www.facebook.com/integrity.vision" target="_blank">
                          <i class="fa fa-facebook"></i>Connect with Facebook
                      </a>
                      <a class="btn btn-block btn-social btn-youtube" href="http://www.youtube.com/user/integrityvision" target="_blank">
                          <i class="fa fa-youtube"></i>Connect with YouTube
                      </a>
                      <a class="btn btn-block btn-social btn-linkedin" href="http://www.linkedin.com/company/integrity-vision" target="_blank">
                          <i class="fa fa-linkedin"></i>Connect with LinkedIn
                      </a>
                      <a class="btn btn-block btn-social btn-google-plus">
                          <i class="fa fa-google-plus"></i>Connect with Google
                      </a>
                      <a class="btn btn-block btn-social btn-twitter">
                          <i class="fa fa-twitter"></i>Connect with Twitter
                      </a>
                      <a class="btn btn-block btn-social btn-vimeo" href="https://vimeo.com/user6635065" target="_blank">
                          <i class="fa fa-vimeo-square"></i>Connect with Vimeo
                      </a>
                      <a class="btn btn-block btn-social btn-vk">
                          <i class="fa fa-vk"></i>Connect with VK
                      </a>
                  </div>
              </div> <!--Right bar end-->
          </div>
          <div class="row">
              <div class="col-md-12 move-right" data-scroll-reveal="enter top move 250px">
                  <i class="fa fa-hand-o-right fa-1x"></i> <strong class="company"> Integrity Vision</strong>
              </div>
          </div>
      </div> <!--Page container End-->
  </div><!--Page Wrapper End-->

  <!--REQUIRED SCRIPTS-->
  <!-- Script files at the bootom to reduce loading time-->
  <script src="assets/js/lib/jquery.min.js"></script>
  <script src="assets/js/lib/jquery.flipping_text.js"></script>
  <script src="assets/js/lib/jquery.simple-text-rotator.js"></script>
  <script src="assets/js/lib/scrollReveal.js"></script>
    <!--Custom Script File-->
  <script src="assets/js/front/custom-script.js"></script>

  <script>
    var httpBase      = location.protocol + '//' + location.host
      , pageHome      = httpBase
      , pageAbout     = httpBase + '/' + 'about'
      , pageServices  = httpBase + '/' + 'services'
      , pageCareer    = httpBase + '/' + 'carier'
      , pageContacts  = httpBase + '/' + 'contacts';

    $('#home_page').attr({'href': httpBase});
    $('#about').attr({'href': pageAbout});
    $('#services').attr({'href': pageServices});
    $('#career').attr({'href': pageCareer});
    $('#contacts').attr({'href': pageContacts});
  </script>

</body>
</html>

<!--/
<a class="btn btn-block btn-social btn-flickr">
    <i class="fa fa-flickr"></i>Connect with Flickr
</a>
<a class="btn btn-block btn-social btn-pinterest">
    <i class="fa fa-pinterest"></i>Connect with Pinterest
</a>
<a class="btn btn-block btn-social btn-bitbucket">
    <i class="fa fa-bitbucket"></i>Connect with Bitbucket
</a>

<a class="btn btn-block btn-social btn-tumblr">
    <i class="fa fa-tumblr"></i>Connect with Tumblr
</a>
<a class="btn btn-block btn-social btn-instagram">
    <i class="fa fa-instagram"></i>Connect with Instagram
</a>
 <a class="btn btn-block btn-social btn-github">
    <i class="fa fa-github"></i>Connect with Github
</a>
 <a class="btn btn-block btn-social btn-dropbox">
    <i class="fa fa-dropbox"></i>Connect with Dropbox
</a>
/-->
