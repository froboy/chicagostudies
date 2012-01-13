<?php
// $Id: page.tpl.php,v 1.1.2.2.4.2 2011/01/11 01:08:49 dvessel Exp $
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
</div>
<div class="container-16 clearfix article"">
  <div id="main" class="region clearfix grid-11">
    <?php if ($tabs): ?>
      <div class="tabs"><?php print render($tabs); ?></div>
    <?php endif; ?>      
    <?php print $messages; ?>
    <?php print render($page['help']); ?>
    <div id="content">
	    <?php
	     print "<div id=\"article-header\"><div id=\"title\"><h2>".$title."</h2>";
	     $subtitle = $node->field_subtitle;
	     if (isset($subtitle['und'][0]['safe_value'])) {
	       print "<h3>".$subtitle['und'][0]['safe_value']."</h3>";
	     }
	     print "</div><span class=\"date\">".date("F j, Y", $node->revision_timestamp)."</span></div>"; 
	     print "<div class=\"article-body\">".$node->body['und'][0]['safe_value']."</div>";
		?>
	</div>
  </div>

  <div id="sidebar" class="region clearfix grid-5">
	<?php if(!empty($node->field_article_photo)): ?>
    <div class="photo">
      <?php
        $photo_url = file_create_url("public://images/features/".$node->field_article_photo['und'][0]['filename']);
	    $photo_alt = $node->field_article_photo['und'][0]['alt'];
	  ?>
      <img src="<?php print $photo_url; ?>" alt="<?php print $photo_alt; ?>" />
      <p><?php print $photo_alt; ?></p>
    </div>
    <?php endif; ?>
	<div id="featured-stories">
	    <?php print render($page["sidebar_second"]); ?>
    </div>
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