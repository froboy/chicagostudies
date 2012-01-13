<?php
// $Id: page.tpl.php,v 1.1.2.2.4.2 2011/01/11 01:08:49 dvessel Exp $
//variable_set('install_profile', 'standard');
?>
<div id="page" class="container">

<div id="header">
  <div id="site-header" class="clearfix">
    <?php if ($linked_logo_img): ?>
      <span id="logo"><?php print $linked_logo_img; ?></span>
    <?php endif; ?>
    <?php if ($linked_site_name || $site_slogan): ?>
	    <div id="branding" class="grid-4">    
	    <?php if ($linked_site_name): ?>
	      <h1 id="site-name" class="grid-3"><?php print $linked_site_name; ?></h1>
	    <?php endif; ?>
	    <?php if ($site_slogan): ?>
	      <div id="site-slogan" class="grid-3 omega"><?php print $site_slogan; ?></div>
	    </div>
		<?php endif; ?>
    <?php endif; ?>
  </div>
  <?php if ($main_menu_links): ?>
    <div id="navbar" class="nav-container">
      <div id="main-menu">    
	      <?php print $main_menu_links; ?>
      </div>
	  <?php if ($page['search_box']): ?>
        <div id="search">
		  <?php print render($page['search_box']); ?>
		</div>
	  <?php endif; ?>
	  <?php if ($secondary_menu_links): ?>      
        <div id="secondary-menu" class="container-16">
  	      <?php print $secondary_menu_links; ?>
        </div>
      <?php endif; ?>
    </div>
  <?php endif; ?>


  <div id="site-subheader" class="prefix-1 suffix-1 clearfix">
  <?php if ($page['highlighted']): ?>
    <div id="highlighted" class="<?php print ns('grid-14', $page['header'], 7); ?>">
      <?php print render($page['highlighted']); ?>
    </div>
  <?php endif; ?>

  <?php if ($page['header']): ?>
    <div id="header-region" class="region <?php print ns('grid-14', $page['highlighted'], 7); ?> clearfix">
      <?php print render($page['header']); ?>
    </div>
  <?php endif; ?>
  </div>
  <!-- New Field -->

  <?php if ($page['hero']): ?>
    <div id="featured-slider">
      <?php print render($page['hero']); ?>
    </div> <!-- End Featured Slider-->
  <?php endif; ?>

</div>

<div id="columns" class="container-16 clearfix">
  <div id="left" class="region grid-5">
  	<?php if ($page['sidebar_first']) {print render($page['sidebar_first']);} ?>
    <div id="events" class="block">
    	<h2><a href="calendar">Chicago Studies Events</a></h2>
		<div class="content">
			<script src="http://event.uchicago.edu/widgets/list.php?key=42cd996f0e7d19f06e2cbc203f157852&id=31"></script>
			<a class='more-link' href="calendar" title="View University events">View all Chicago Studies Events &#187;</a>
		</div>
	</div>
  </div>
  <div id="middle" class="region grid-6">
	<div class="block" id="facebook">
		<h2>Facebook</h2>
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
		<fb:like-box href="https://www.facebook.com/pages/Chicago-Studies/274095788037" width="340" show_faces="false" border_color="#FFF" stream="true" header="false"></fb:like-box>
	</div>
  	<?php if ($page['sidebar_mid']) {print render($page['sidebar_mid']);} ?>
  </div>
  <div id="right" class="region grid-5">
	<?php if ($page['sidebar_mid']) {print render($page['sidebar_second']);} ?>
  </div>
</div>

  <div id="footer" class="container">
  <div class="container-16">
    <div id="uchicago" class="region grid-5">
    	<a href="http://uchicago.edu">The University of Chicago</a>
    </div>
    <?php if ($page['footer']): ?>
      <div id="footer-text" class="region grid-7">
        <?php print render($page['footer']); ?>
      </div>
    <?php endif; ?>
    <?php if ($page['footer_links']): ?>
      <div id="footer-links" class="region grid-4">
        <?php print render($page['footer_links']); ?>
      </div>
    <?php endif; ?>
  </div>
  </div>
</div>