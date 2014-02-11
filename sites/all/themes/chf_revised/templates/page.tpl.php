<?php
/**
 * @file
 * Zen theme's implementation to display a single Drupal page.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $secondary_menu_heading: The title of the menu used by the secondary links.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['header']: Items for the header region.
 * - $page['navigation']: Items for the navigation region, below the main menu (if any).
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['footer']: Items for the footer region.
 * - $page['bottom']: Items to appear at the bottom of the page below the footer.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see zen_preprocess_page()
 * @see template_process()
 */
?>
<?php global $base_url; ?>
 
<div id="wrapper">
        <div class="navbar navbar-default navbar-fixed-top" role="navigation" id="main-nav">
            <div class="container header-container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="http://checkherefirst.com/" id="main-nav-brand" class="navbar-brand">
                        Check Here First
                    </a>
                </div> 
                <div class="navbar-collapse collapse">
					<!-- Main Menu -->
					<?php if ($main_menu): ?>
					<?php          
					  print theme('links__system_main_menu', array(
						'links' => $main_menu,
						'attributes' => array(
						  'class' => array('nav', 'navbar-nav', 'col-md-offset-3'),
						    ), 
					  ));					   
					?>
					<!-- Main Menu Ends --> 
				  <?php endif; ?>                   
                    <form class="navbar-form navbar-right" role="search" id="main-nav-search-form">
                        <div class="form-group"><input type="text" class="form-control" id="main-nav-search-input" placeholder="search"></div
                        ><button class="btn btn-primary" type="submit" id="main-nav-search-btn"><span class="glyphicon glyphicon-search"></span></button>
                    </form>
                </div><!--/.nav-collapse -->
            </div>            
          </div><!--/.container -->
          <div id="navigation">
          	<nav id="main-menu" role="navigation">
                 <?php print $header_menu; ?>
            </nav>
          </div>
      <div class="main-container">   
      	      <?php print render($page['navigation']); ?>
	      <!-- Main Content -->
	      <div id="content" class="column" role="main">  
		<?php print render($page['highlighted']); ?>
	      <?php //print $breadcrumb; ?>
	      <a id="main-content"></a>
	      <?php print render($title_prefix); ?>
	      <?php if ($title): ?>
	      <h1 class="title" id="page-title"><?php print $title; ?></h1>
	      <?php endif; ?>      
	      <?php print render($title_suffix); ?>
		    
	      <?php print $messages; ?>  
	      
	      <?php print render($tabs); ?>
	      <?php print render($page['help']); ?>
	      <?php if ($action_links): ?>
		<ul class="action-links"><?php print render($action_links); ?></ul>
	      <?php endif; ?>
		  <div class="dashed_h" style="clear:both;height:1px;"></div>
	      <?php print render($page['content']); ?>
	      <?php //print $feed_icons; ?>
	      </div><!-- /#content -->
	      <!-- Main Content Ends -->
	      <?php print render($page['sidebar_second']); ?>
      </div>
      <div class='clear'></div> 





<!-- BEGIN FOOTER -->
 </div> <!-- /#wrapper -->
    <div id="footer">
        <div class="container">
            
            <div class="col-sm-4 navigation-section footer-section">
                <div class="navigation-section-inner">
                    <h3 class="hidden-xs">Navigation</h3>
                     <?php print $footer_menu; ?>
                </div>
                <p class="copyright" style="margin-left:-15px">
                    <a href="<?php print $base_url; ?>/privacy-policy">Privacy&nbsp;Policy</a> | <a href="<?php print $base_url; ?>/terms-of-use">Terms&nbsp;of&nbsp;Use</a>
                    <br> <span class="copyright-text">&copy;2013 Checkherefirst </span>
                </p>
            </div>

            <div class="col-sm-4 follow-us-section footer-section">
                <h3 class="hidden-xs">Follow Us</h3>
                <a href="#" class="col-md-6">
                    <i class="follow-link follow-facebook"></i> <span class="follow-text">facebook</span>
                </a>
                <a href="#" class="col-md-6">
                    <i class="follow-link follow-tumblr"></i> <span class="follow-text">tumblr</span>
                </a>
                <a href="#" class="col-md-6">
                    <i class="follow-link follow-twitter"></i> <span class="follow-text">twitter</span>
                </a>
                <a href="#" class="col-md-6">
                    <i class="follow-link follow-google"></i> <span class="follow-text">Google+</span>
                </a>
            </div>

        </div>
    </div>





