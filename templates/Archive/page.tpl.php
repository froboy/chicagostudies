<?php
// $Id: page.tpl.php,v 1.1.2.2.4.2 2011/01/11 01:08:49 dvessel Exp $
?>
<div id="page" class="container-16 clearfix">

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
    <div id="navbar" class="container-16">
      <div id="main-menu" class="region grid-12">    
	      <?php print $main_menu_links; ?>
      </div>
	  <?php if ($page['search_box']): ?>
        <div id="search" class="region grid-4">
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


  <div id="main" class="column <?php print ns('grid-16', $page['sidebar_first'], 4, $page['sidebar_second'], 3) . ' ' . ns('push-4', !$page['sidebar_first'], 4); ?>">
    <?php print $breadcrumb; ?>
    <?php print render($title_prefix); ?>
    <?php if ($title): ?>
      <h1 class="title" id="page-title"><?php print $title; ?></h1>
    <?php endif; ?>
    <?php print render($title_suffix); ?>      
    <?php if ($tabs): ?>
      <div class="tabs"><?php print render($tabs); ?></div>
    <?php endif; ?>
    <?php print $messages; ?>
    <?php print render($page['help']); ?>

    <div id="main-content" class="region clearfix">
    	<h2>Inherited from Content.</h2>
      <?php print render($page['content']); ?>
    </div>

    <?php print $feed_icons; ?>
  </div>

<?php if ($page['sidebar_first']): ?>
  <div id="sidebar-left" class="column sidebar region grid-4 <?php print ns('pull-12', $page['sidebar_second'], 3); ?>">
    <?php print render($page['sidebar_first']); ?>
  </div>
<?php endif; ?>

<?php if ($page['sidebar_second']): ?>
  <div id="sidebar-right" class="column sidebar region grid-3">
    <?php print render($page['sidebar_second']); ?>
  </div>
<?php endif; ?>


  <div id="footer" class="container-16">
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
