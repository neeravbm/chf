<?php

/**
 * @file
 * template.php
 */


function bootstrap_experiment_preprocess_page(&$vars) {
  // Add information about the number of sidebars.
  if (!empty($vars['page']['sidebar_first']) && !empty($vars['page']['sidebar_second'])) {
    $vars['content_column_class'] = ' class="col-sm-4"';
  }
  elseif (!empty($vars['page']['sidebar_first']) || !empty($vars['page']['sidebar_second'])) {
    $vars['content_column_class'] = ' class="col-sm-8"';
  }
  else {
    $vars['content_column_class'] = ' class="col-sm-12"';
  }

  $header_menu = theme('links', array(
    'links' => menu_navigation_links('menu-header'),
    'attributes' => array('class' => array('links', 'site-menu'))
  ));
  $vars['header_menu'] = $header_menu;

  /* Footer Menu */
  $fmenu = menu_navigation_links('menu-footer');
  $footer_menu = '';
  foreach ($fmenu as $menu) {
    global $base_url;
    $link = $menu['href'];
    $title = $menu['title'];
    $attributes = !empty($menu['attributes']) ? $menu['attributes'] : array();
    $footer_menu .= '<div class="footer-link-ctnr col-sm-6"><a href="' . $base_url . '/' . $link . '" ' .
      drupal_attributes($attributes) . '>' . $title . '</a></div>';
  }
  $vars['footer_menu'] = $footer_menu;
}


/**
 * Override or insert variables into the node templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("node" in this case.)
 */
function bootstrap_experiment_preprocess_node(&$variables, $hook) {
  // Add $unpublished variable.
  $variables['unpublished'] = (!$variables['status']) ? TRUE : FALSE;

  // Add pubdate to submitted variable.
  $variables['pubdate'] = format_date($variables['created'], 'very_short');
  //$variables['pubdate'] = '<time pubdate datetime="' . format_date($variables['node']->created, 'custom', 'c') . '">' . $variables['date'] . '</time>';
  if ($variables['display_submitted']) {
    $variables['submitted'] = t('Submitted by !username on !datetime', array(
      '!username' => $variables['name'],
      '!datetime' => $variables['pubdate']
    ));
  }

  // Add a class for the view mode.
  if (!$variables['teaser']) {
    $variables['classes_array'][] = 'view-mode-' . $variables['view_mode'];
  }

  // Add a class to show node is authored by current user.
  if ($variables['uid'] && $variables['uid'] == $GLOBALS['user']->uid) {
    $variables['classes_array'][] = 'node-by-viewer';
  }

  $variables['title_attributes_array']['class'][] = 'node-title';

  if (isset($variables['content']['links']['node']['#links']['node-readmore'])) {
    // make a copy of the old link and change the link's title
    $readmore = $variables['content']['links']['node']['#links']['node-readmore'];
    $readmore['title'] = t('Full Story');
    // remove the old link
    unset($variables['content']['links']['node']['#links']['node-readmore']);
    // creat a new link under a different name
    $variables['content']['links']['node']['#links']['node-readmore-custom'] = $readmore;
  }

  $author = user_load($variables['uid']);
  $author_name = format_username($author);
  $variables['submitted_short'] = 'By ' . l($author_name, 'user/' . $variables['uid']) . '  |  ' . $variables['pubdate'];

  if ($variables['view_mode'] == 'full') {
    $variables['user_info'] = views_embed_view('user_info', 'default', $variables['uid']);
    drupal_add_js(drupal_get_path('theme', 'bootstrap_experiment') . '/js/twitter.js', array('scope' => 'footer'));
  }
}

/**
 * Implementation of HOOK_pager().
 * $variables: An associative array containing:
 *  tags: An array of labels for the controls in the pager.
 *  element: An optional integer to distinguish between multiple pagers on one page.
 *  parameters: An associative array of query string parameters to append to the pager links.
 *  quantity: The number of pages in the list.
 */
/*function bootstrap_experiment_pager($variables) {
    $tags = $variables['tags'];
    $element = $variables['element'];
    $parameters = $variables['parameters'];
    global $pager_total;

    $li_previous = theme('pager_previous', array('text' => (isset($tags[1]) ? $tags[1] : t('‹ Newer')), 'element' => $element, 'interval' => 1, 'parameters' => $parameters));
    $li_next = theme('pager_next', array('text' => (isset($tags[3]) ? $tags[3] : t('Older ›')), 'element' => $element, 'interval' => 1, 'parameters' => $parameters));

    if ($pager_total[$element] > 1) {

        // PREVIOUS
        if ($li_previous) {
            $items[] = array(
                'class' => array('pager-previous'),
                'data' => $li_previous,
            );
        }

        // NEXT
        if ($li_next) {
            $items[] = array(
                'class' => array('pager-next'),
                'data' => $li_next,
            );
        }

        // OUTPUT
        return '<h2 class="element-invisible">' . t('Pages') . '</h2>' . theme('item_list', array(
            'items' => $items,
            'attributes' => array('class' => array('pager')),
        ));
    }
}*/


function bootstrap_experiment_username_alter(&$name, $account) {
  $first_name = field_get_items('user', $account, 'field_first_name');
  $first_name = !empty($first_name) ? $first_name[0]['safe_value'] : '';

  $last_name = field_get_items('user', $account, 'field_last_name');
  $last_name = !empty($last_name) ? $last_name[0]['safe_value'] : '';

  $full_name = $first_name . ((!empty($first_name) && !empty($last_name)) ? ' ' : '') . $last_name;

  $name = !empty($full_name) ? $full_name : $account->name;
}