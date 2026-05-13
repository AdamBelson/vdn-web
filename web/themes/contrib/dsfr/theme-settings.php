<?php

/**
 * @file
 * Add custom theme settings to the DSFR base theme.
 */

declare(strict_types=1);

use Drupal\Core\Form\FormStateInterface;

/**
 * Implements hook_form_system_theme_settings_alter().
 */
function dsfr_form_system_theme_settings_alter(array &$form, FormStateInterface $form_state, $form_id = NULL) {
  $official_dsfr_link = '<a href="https://systeme-de-design.gouv.fr/" target="_blank">' . t('French State DESIGN SYSTEM') . '</a>';
  $form['dsfr'] = [
    '#title' => t('Customize the DSFR Theme based on') . ' ' . $official_dsfr_link,
    '#type' => 'vertical_tabs',
    '#default_tab' => 'edit-dsfr-general',
    '#weight' => -10,
  ];

  $form['general'] = [
    '#type' => 'details',
    '#title' => t('General'),
    '#group' => 'dsfr',
    '#tree' => TRUE,
    '#description' => t('Contains recurring elements throughout the theme.'),
  ] + _dsfr_general_settings();

  $form['header'] = [
    '#type' => 'details',
    '#title' => t('Header'),
    '#group' => 'dsfr',
    '#tree' => TRUE,
  ] + _dsfr_header_settings();

  $form['navigation'] = [
    '#type' => 'details',
    '#title' => t('Main menu'),
    '#group' => 'dsfr',
    '#tree' => TRUE,
    'container' => [
      '#type' => 'checkbox',
      '#title' => t('The navigation will take up the FULL WIDTH of the page.'),
      '#default_value' => _dsfr_theme_get_setting('navigation.container'),
    ],
    'megamenu' => [
      '#type' => 'checkbox',
      '#title' => t('Use the megamenu.'),
      '#default_value' => _dsfr_theme_get_setting('navigation.megamenu'),
    ],
    'max_items_in_lvl3_by_col' => [
      '#type' => 'number',
      '#title' => t('Max items in level 3 by column.'),
      '#default_value' => _dsfr_theme_get_setting('navigation.max_items_in_lvl3_by_col'),
      '#states' => [
        'visible' => [':input[name="navigation[megamenu]"]' => ['checked' => TRUE]],
      ],
    ],
  ];

  $form['hero'] = [
    '#type' => 'details',
    '#title' => t('Hero'),
    '#group' => 'dsfr',
    '#tree' => TRUE,
  ] + _dsfr_hero_settings();

  $form['breadcrumb'] = [
    '#type' => 'details',
    '#title' => t('Breadcrumb'),
    '#group' => 'dsfr',
    '#tree' => TRUE,
  ] + _dsfr_breadcrumb_settings();

  $form['content'] = [
    '#type' => 'details',
    '#title' => t('Content'),
    '#group' => 'dsfr',
    '#tree' => TRUE,
  ] + _dsfr_content_settings();

  $form['footer_top'] = [
    '#type' => 'details',
    '#title' => t('Footer Top'),
    '#group' => 'dsfr',
    '#tree' => TRUE,
    'container' => [
      '#type' => 'checkbox',
      '#title' => t('The footer top will take up the FULL WIDTH of the page.'),
      '#default_value' => _dsfr_theme_get_setting('footer_top.container'),
    ],
  ];

  $form['footer'] = [
    '#type' => 'details',
    '#title' => t('Footer'),
    '#group' => 'dsfr',
    '#tree' => TRUE,
  ] + _dsfr_footer_settings();

  $form['code'] = [
    '#type' => 'details',
    '#title' => t('Advanced'),
    '#group' => 'dsfr',
    '#tree' => TRUE,
  ] + _dsfr_code_settings();
}

/**
 * General settings tab.
 *
 * @return array
 *   General settings form tab content render array.
 */
function _dsfr_general_settings(): array {
  return [
    'institution' => [
      '#type' => 'textarea',
      '#title' => t('Name of official (or parent) institution.'),
      '#description' => t('Mandatory label that will appear <strong>under</strong> the <strong><em>Marianne</em> logo</strong>.
      <br>By default or empty, the label will be the example.
      <br><strong>Note:</strong> the line crossing will be preserved, but you can add the tag &lt;br&gt; for a new line.'),
      '#default_value' => _dsfr_theme_get_setting('general.institution'),
      '#attributes' => [
        'placeholder' => 'République
                Française',
      ],
    ],
    'mourning' => [
      '#type' => 'checkbox',
      '#title' => t('Mourning mode'),
      '#default_value' => _dsfr_theme_get_setting('general.mourning'),
    ],
    'version' => [
      'name' => [
        '#type' => 'textfield',
        '#prefix' => '<hr>',
        '#title' => t('Version'),
        '#description' => t('Displays a version badge next to the site title (example: beta, dev, etc.). If the field is not filled in, the badge will not appear.'),
        '#default_value' => _dsfr_theme_get_setting('general.version.name'),
        '#maxlength' => 30,
        '#attributes' => ['placeholder' => t('Example : preview')],
      ],
      'color' => [
        '#type' => 'select',
        '#title' => t('Version badge color'),
        '#default_value' => _dsfr_theme_get_setting('general.version.color'),
        '#options' => [
          'blue-ecume' => t('Blue Ecume'),
          'blue-cumulus' => t('Blue Cumulus'),
          'green-archipel' => t('Green Archipel'),
          'green-menthe' => t('Green Menthe'),
          'green-emeraude' => t('Green Emeraude'),
          'green-bourgeon' => t('Green Bourgeon'),
          'green-tilleul-verveine' => t('Green Tilleul Verveine'),
          'yellow-tournesol' => t('Yellow Tournesol'),
          'yellow-moutarde' => t('Yellow Moutarde'),
          'brown-cafe-creme' => t('Brown Cafe Creme'),
          'brown-caramel' => t('Brown Caramel'),
          'brown-opera' => t('Brown Opera'),
          'pink-macaron' => t('Pink Macaron'),
          'pink-tuile' => t('Pink Tuile'),
          'purple-glycine' => t('Purple Glycine'),
          'beige-gris-galet' => t('Beige Gris Galet'),
        ],
      ],
      'only' => [
        '#type' => 'checkbox',
        '#title' => t('SHOW badge only'),
        '#default_value' => _dsfr_theme_get_setting('general.version.only'),
      ],
    ],
  ];
}

/**
 * Header settings tab.
 *
 * @return array
 *   Header tab form content render array.
 */
function _dsfr_header_settings(): array {
  return [
    '#type' => 'fieldset',
    '#title' => t('Size'),
    'container' => [
      '#type' => 'checkbox',
      '#title' => t('The header will take up the FULL WIDTH of the page.'),
      '#default_value' => _dsfr_theme_get_setting('header.container'),
    ],
    'logo' => [
      '#type' => 'fieldset',
      '#title' => t('Logo'),
      'img' => [
        '#type' => 'checkbox',
        '#title' => t('HIDE your personal logo IMAGE (header only)'),
        '#default_value' => _dsfr_theme_get_setting('header.logo.img'),
      ],
      'text' => [
        '#type' => 'checkbox',
        '#title' => t('HIDE your personal logo TEXT -name/service- (header only)'),
        '#default_value' => _dsfr_theme_get_setting('header.logo.text'),
      ],
    ],
    'settings' => [
      '#type' => 'fieldset',
      '#title' => t('Display settings'),
      'visible' => [
        '#type' => 'checkbox',
        '#title' => t('Activate display settings'),
        '#default_value' => _dsfr_theme_get_setting('header.settings.visible'),
      ],
      'label' => [
        '#type' => 'textfield',
        '#title' => t("Display parameters label (also works with the default account menu)"),
        '#description' => t('If the field is not filled in, the label will be set to « Display settings »'),
        '#default_value' => _dsfr_theme_get_setting('header.settings.label'),
        '#maxlength' => 30,
        '#attributes' => ['placeholder' => t('Example : Display settings')],
      ],
    ],
    'search' => [
      '#type' => 'fieldset',
      '#title' => t('Search'),
      'label' => [
        '#type' => 'textfield',
        '#prefix' => '<hr>',
        '#title' => t('Placeholder'),
        '#description' => t('If the field is not filled in, the label will be set to « @search »', ['@search' => t('Search')]),
        '#default_value' => _dsfr_theme_get_setting('header.search.label'),
        '#attributes' => ['placeholder' => t('Example : Search')],
      ],
    ],
  ];
}

/**
 * Breadcrumb settings tab.
 *
 * @return array
 *   The render array.
 */
function _dsfr_breadcrumb_settings(): array {
  return [
    '#type' => 'fieldset',
    '#title' => t('Breadcrumb'),
    'margin' => [
      'top' => [
        '#type' => 'select',
        '#title' => t('Top margin'),
        '#description' => t('Distance between the header or the hero and the main content.'),
        '#default_value' => _dsfr_theme_get_setting('breadcrumb.margin.top'),
        '#options' => _dsfr_margin_options(),
      ],
      'bottom' => [
        '#type' => 'select',
        '#title' => t('Bottom margin'),
        '#description' => t('Distance between the main content and the footer.'),
        '#default_value' => _dsfr_theme_get_setting('breadcrumb.margin.bottom'),
        '#options' => _dsfr_margin_options(),
      ],
    ],
  ];
}

/**
 * Hero settings tab.
 *
 * @return array
 *   The render array.
 */
function _dsfr_hero_settings(): array {
  return [
    '#type' => 'fieldset',
    '#title' => t('Size'),
    'container' => [
      '#type' => 'checkbox',
      '#title' => t('The Hero will take up the FULL WIDTH of the page.'),
      '#default_value' => _dsfr_theme_get_setting('hero.container'),
    ],
    'margin' => [
      'top' => [
        '#type' => 'select',
        '#title' => t('Top margin'),
        '#description' => t('Distance between the header and the hero.'),
        '#default_value' => _dsfr_theme_get_setting('hero.margin.top'),
        '#options' => _dsfr_margin_options(),
      ],
      'bottom' => [
        '#type' => 'select',
        '#title' => t('Bottom margin'),
        '#description' => t('Distance between the hero and the main content.'),
        '#default_value' => _dsfr_theme_get_setting('hero.margin.bottom'),
        '#options' => _dsfr_margin_options(),
      ],
    ],
  ];
}

/**
 * Hero settings tab.
 *
 * @return array
 *   The render array.
 */
function _dsfr_content_settings(): array {
  return [
    '#type' => 'fieldset',
    '#title' => t('Size'),
    'container' => [
      '#type' => 'checkbox',
      '#title' => t('The main content will take up the FULL WIDTH of the page.'),
      '#default_value' => _dsfr_theme_get_setting('content.container'),
    ],
    'margin' => [
      'top' => [
        '#type' => 'select',
        '#title' => t('Top margin'),
        '#description' => t('Distance between the header or the hero and the main content.'),
        '#default_value' => _dsfr_theme_get_setting('content.margin.top'),
        '#options' => _dsfr_margin_options(),
      ],
      'bottom' => [
        '#type' => 'select',
        '#title' => t('Bottom margin'),
        '#description' => t('Distance between the main content and the footer.'),
        '#default_value' => _dsfr_theme_get_setting('content.margin.bottom'),
        '#options' => _dsfr_margin_options(),
      ],
    ],
  ];
}

/**
 * Footer settings tab.
 *
 * @return array
 *   The render array.
 */
function _dsfr_footer_settings(): array {
  return [
    '#type' => 'fieldset',
    '#title' => t('Footer'),
    'container' => [
      '#type' => 'checkbox',
      '#title' => t('The footer will take up the FULL WIDTH of the page.'),
      '#default_value' => _dsfr_theme_get_setting('footer.container'),
    ],
    'logo' => [
      '#type' => 'fieldset',
      '#title' => t('Logo'),
      'img' => [
        '#type' => 'checkbox',
        '#title' => t('HIDE your personal logo IMAGE (footer only)'),
        '#default_value' => _dsfr_theme_get_setting('footer.logo.image'),
      ],
    ],
    'last_line' => [
      '#type' => 'checkbox',
      '#title' => t('SHOW the line <strong>« Unless otherwise stated, all texts on this site are under licence etalab-2.0 »</strong>'),
      '#default_value' => _dsfr_theme_get_setting('footer.last_line'),
    ],
  ];
}

/**
 * Breadcrumb settings tab.
 *
 * @return array
 *   The render array.
 */
function _dsfr_code_settings(): array {
  $code = [
    'production' => [
      '#type' => 'checkbox',
      '#title' => t('DSFR production mode'),
      '#description' => t('Enable production mode.'),
      '#default_value' => _dsfr_theme_get_setting('code.production') ?? FALSE,
    ],
    'verbose' => [
      '#type' => 'checkbox',
      '#title' => t('DSFR verbose mode'),
      '#description' => t('Enable verbose mode.'),
      '#default_value' => _dsfr_theme_get_setting('code.verbose') ?? FALSE,
    ],
    'level' => [
      '#type' => 'select',
      '#title' => t('DSFR log level'),
      '#description' => t('Choose DSFR log level.'),
      '#default_value' => _dsfr_theme_get_setting('code.level') ?? 'info',
      '#options' => [
        'log' => 'log',
        'debug' => 'debug',
        'info' => 'info (default)',
        'warning' => 'warning',
        'error' => 'error',
      ],
    ],
    'mode' => [
      '#type' => 'select',
      '#title' => t('DSFR mode'),
      '#description' => t('Choose DSFR mode, auto is the default.'),
      '#default_value' => _dsfr_theme_get_setting('code.mode') ?? 'auto',
      '#options' => [
        'auto' => 'auto (default)',
        'manual' => 'manual',
        'runtime' => 'runtime',
        'loaded' => 'loaded',
        'vue' => 'vue',
        'angular' => 'angular',
        'react' => 'react',
      ],
    ],
    'prevent_flash' => [
      '#type' => 'checkbox',
      '#title' => t('Prevent flash effect'),
      '#description' => t('Prevent flash effect on page load (usually when user uses dark mode), works partially ...'),
      '#default_value' => _dsfr_theme_get_setting('code.prevent_flash') ?? FALSE,
    ],
    'gdpr' => [
      '#type' => 'radios',
      '#title' => t('GDPR Library'),
      '#description' => t('Library associated with this component (banner with accept/refuse/customize option + Cookies management panel'),
      '#default_value' => _dsfr_theme_get_setting('code.gdpr'),
      '#options' => [
        0 => t('None'),
        1 => t('Tacjs (Module based on Tarteaucitron)'),
        2 => t('Management proposed by the DSFR library (cookie support code to develop yourself)'),
      ],
    ],
    'newsletter' => [
      '#type' => 'radios',
      '#prefix' => '<hr>',
      '#title' => t('Newsletter (Library)'),
      '#default_value' => _dsfr_theme_get_setting('code.newsletter'),
      '#options' => [
        0 => t('None'),
        1 => t('Simplenews'),
        2 => t('Other (such as your own code)'),
      ],
    ],
    'w3c' => [
      '#prefix' => '<hr>',
      '#title_prefix' => '<h3>',
      '#title_suffix' => '<h3>',
      '#type' => 'checkbox',
      '#title' => t('Remove the role attribute if necessary for W3C validation.'),
      '#default_value' => _dsfr_theme_get_setting('footer.w3c'),
    ],
    'external_lib' => [
      '#type' => 'radios',
      '#prefix' => '<hr>',
      '#title' => t('Full or partial DSFR loading'),
      '#default_value' => _dsfr_theme_get_setting('code.external_lib'),
      '#options' => [
        1 => t('Using the library in the library folder (/libraries/dsfr/dist/dsfr.css)'),
        0 => t('By default (can be partially loaded)'),
      ],
      '#description' => t('You can force the presence of a specific DSFR library on all pages with the default mode.'),
      '#attached' => [
        'library' => ['dsfr/settings'],
      ],
    ],
  ];
  $code['components'] = [
    '#prefix' => '<div id="dsfr-components">',
    '#suffix' => '</div>',
  ];
  foreach (_dsfr_components() as $component_name) {
    $code['components'][$component_name] = [
      '#type' => 'checkbox',
      // Components names should not be translated.
      '#title' => ucfirst($component_name),
      '#default_value' => _dsfr_theme_get_setting(sprintf('code.components.%s', $component_name)),
      '#states' => [
        'visible' => [':input[name="code[external_lib]"]' => ['value' => '0']],
      ],
    ];
  }
  return $code;
}

/**
 * Generates margin options for DSFR components.
 *
 * @param int $default
 *   The default margin size (default: 3).
 *
 * @return array
 *   An array of margin options with translated labels.
 */
function _dsfr_margin_options(int $default = 3): array {
  $options = [t('None')];
  foreach (range(1, 32) as $index) {
    $options[$index] = t('@size x minimal size', ['@size' => $index]);
    if ($index === $default) {
      $options[$index] .= ' ' . t('(by default)');
    }
  }
  return $options;
}
