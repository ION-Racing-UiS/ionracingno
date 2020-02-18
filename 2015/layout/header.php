<link rel="stylesheet" href="../layout/headerstyle.css">

<div class="whole-header">

  <div class="super-header">
    <div class="container">
      <a href="mailto:post@ionracing.no" class="mail">
        <i class="fa fa-envelope"></i> post@ionracing.no
      </a>

      <ul class="social">
        <li><a title="Facebook" href="https://www.facebook.com/IONRACING" target="_blank"><i class="fa fa-facebook"></i></a></li>
        <li><a title="Instagram" href="https://instagram.com/ionracinguis/" target="_blank"><i class="fa fa-instagram"></i></a></li>
        <li><a title="YouTube" href="https://www.youtube.com/channel/UCza4jI-tc7DvYRx11vej4Ug/feed" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
        <li><a title="Flickr" href="https://www.flickr.com/photos/120225568@N03/" target="_blank"><i class="fa fa-flickr"></i></a></li>
        <li><a title="LinkedIn" href="https://www.linkedin.com/company/ion-racing-uis" target="_blank"><i class="fa fa-linkedin"></i></a></li>
      </ul>
    </div>
  </div>

  <div class="header">
    <div class="container">
      <a href="../" class="logo-icon">
        <img src="../images/ION.png" alt="ION Logo">
      </a>

      <ul class="menu">
        <?php /*
        <li><a href="../join/" <?php if( $page == "join") echo 'class="this-page"' ?> >Join us!</a></li>
        */ ?>
        <li><a href="../" <?php if( $page == "home") echo 'class="this-page"' ?> >Home</a></li>
        <li><a href="../blog/" <?php if( $page == "blog") echo 'class="this-page"' ?> >Blog</a></li>
        <li><a href="../news/" <?php if( $page == "news") echo 'class="this-page"' ?> >News</a></li>
        <li><a href="../sponsor/" <?php if( $page == "sponsor") echo 'class="this-page"' ?> >Sponsors</a></li>
        <li class="dropdown">
          <a href="#0" class="dropdown-toggle <?php if( $page == "team" || $page == "garage" || $page == "model" || $page == "contact" ) echo ' this-page' ?>">More <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="../team/" <?php if( $page == "team") echo 'class="this-page"' ?> >The team</a></li>
            <li><a href="../garage/" <?php if( $page == "garage") echo 'class="this-page"' ?> >Garage</a></li>
            <li><a href="../model/" <?php if( $page == "model") echo 'class="this-page"' ?> >Model</a></li>
            <li><a href="../sensor/" <?php if( $page == "sensor") echo 'class="this-page"' ?> >Sensors</a></li>
            <li class="divider"></li>
            <li><a href="../contact/" <?php if( $page == "contact") echo 'class="this-page"' ?> >Contact us</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>

</div>

<div class="header-space" style="height: 88px;"></div>
