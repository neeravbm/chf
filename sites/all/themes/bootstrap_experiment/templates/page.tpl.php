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
        <!--<form class="navbar-form navbar-right" role="search" id="main-nav-search-form">
          <div class="form-group"><input type="text" class="form-control" id="main-nav-search-input"
                                         placeholder="search"></div
            >
          <button class="btn btn-primary" type="submit" id="main-nav-search-btn"><span
              class="glyphicon glyphicon-search"></span></button>
        </form>-->

        <form accept-charset="UTF-8" id="views-exposed-form-search-page-page main-nav-search-form"
              class="navbar-form navbar-right" role="search" method="get" action="/blog/search">
          <div class="views-exposed-form">
            <div class="views-exposed-widgets clearfix">
              <div class="views-exposed-widget views-widget-filter-search_api_views_fulltext"
                   id="edit-search-api-views-fulltext-wrapper">
                  <div class="views-widget">
                    <div class="form-type-textfield form-item-search-api-views-fulltext form-item form-group">
                      <input type="text" maxlength="128" value="" placeholder="search"
                             name="search_api_views_fulltext" id="edit-search-api-views-fulltext main-nav-search-input"
                             class="form-control form-text">
                    </div>
                  </div>
              </div>
              <div class="views-exposed-widget views-submit-button">
                <button type="submit" value="Apply" name="" id="edit-submit-search-page main-nav-search-btn"
                        class="btn btn-info form-submit btn-primary"><span class="glyphicon glyphicon-search"></span>
                </button>
              </div>
            </div>
          </div>
        </form>

      </div>
      <!--/.nav-collapse -->
    </div>
  </div>
  <!--/.container -->
  <div id="navigation" class="container">
    <nav id="main-menu" role="navigation">
      <?php print $header_menu; ?>
    </nav>
  </div>
  <div id="main-page-content" class="main-container container">

    <header role="banner" id="page-header">
      <?php if (!empty($site_slogan)): ?>
        <p class="lead"><?php print $site_slogan; ?></p>
      <?php endif; ?>

      <?php print render($page['header']); ?>
    </header> <!-- /#page-header -->

    <div class="row">

      <?php if (!empty($page['sidebar_first'])): ?>
        <aside class="col-sm-3" role="complementary">
          <?php print render($page['sidebar_first']); ?>
        </aside>  <!-- /#sidebar-first -->
      <?php endif; ?>

      <section<?php print $content_column_class; ?>>
        <?php if (!empty($page['highlighted'])): ?>
          <div class="highlighted jumbotron"><?php print render($page['highlighted']); ?></div>
        <?php endif; ?>
        <?php if (!empty($breadcrumb)): print $breadcrumb; endif;?>
        <a id="main-content"></a>
        <?php print render($title_prefix); ?>
        <?php if (!empty($title)): ?>
          <h1 class="page-header"><?php print $title; ?></h1>
        <?php endif; ?>
        <?php print render($title_suffix); ?>
        <?php print $messages; ?>
        <?php if (!empty($tabs)): ?>
          <?php print render($tabs); ?>
        <?php endif; ?>
        <?php if (!empty($page['help'])): ?>
          <?php print render($page['help']); ?>
        <?php endif; ?>
        <?php if (!empty($action_links)): ?>
          <ul class="action-links"><?php print render($action_links); ?></ul>
        <?php endif; ?>
        <?php print render($page['content']); ?>
      </section>

      <?php if (!empty($page['sidebar_second'])): ?>
        <aside class="col-sm-3" role="complementary">
          <?php print render($page['sidebar_second']); ?>
        </aside>  <!-- /#sidebar-second -->
      <?php endif; ?>

    </div>
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
        <a href="<?php print $base_url; ?>/privacy-policy">Privacy&nbsp;Policy</a> | <a
          href="<?php print $base_url; ?>/terms-of-use">Terms&nbsp;of&nbsp;Use</a>
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
