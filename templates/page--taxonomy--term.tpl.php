<?php
// $Id: page.tpl.php,v 1.1.2.2.4.2 2011/01/11 01:08:49 dvessel Exp $
$current = taxonomy_term_load(arg(2));
?>
<div id="page" class="container">
<div id="header">
  <div id="site-header" class="clearfix">
    <?php if ($linked_logo_img): ?>
      <a id="logo" href="<?php echo $base_path ?>" class="<?php echo "category-".arg(2); ?>"><?php if($linked_site_name) {print $linked_site_name;} ?></a>
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

<?php if(!empty($current->field_home_photo)): ?>
<div id="term-header" class="clearfix resource">
	  <div id="quote">
	  <?php print $current->field_quote['und'][0]['value']; ?>
	  </div>
	  <img src="<? echo $base_path."sites/default/files/images/resources/".$current->field_home_photo['und'][0]['filename']; ?>" alt="<? echo $base_path."sites/default/files/images/resources/".$current->field_home_photo['und'][0]['alt']; ?>" />
</div>
<?php endif; ?>
<div class="container-16 clearfix article"">
  <div id="sidebar-left" class="region clearfix grid-4">
	<div id="resources-navigation">
	    <?php print render($page["sidebar_first"]); ?>
    </div>
  </div>
  <div id="main" class="region clearfix grid-8">
    <?php if ($tabs): ?>
      <div class="tabs"><?php print render($tabs); ?></div>
    <?php endif; ?>      
    <?php print $messages; ?>
    <?php print render($page['help']); ?>
    <div id="content">
        <h1 class="title" id="page-title"><?php print $title; ?></h1>
	    <?php print $current->description; ?>
	</div>
  </div> 
  <div id="sidebar-right" class="region sidebar clearfix grid-4">
	<?php if(!empty($current->field_sidebar_title)): ?>
	<div class="block resource" id="sidebar-content">
      <h2><?php print $current->field_sidebar_title['und'][0]['value'];?></h2>
      <div class="content"><?php print $current->field_sidebar_content['und'][0]['value']; ?></div>
    </div>
	<?php endif; ?>
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