<?php

namespace Drupal\dsfr;

/**
 * DSFR class.
 */
class Dsfr {

  /**
   * DSFR library version.
   */
  const string DSFR_VERSION = '1.14.3';

  /**
   * DSFR or Drupal modules requiring attention.
   */
  const array DSFR_MODULES = [
    'dsfr_core',
    'dsfr_menu',
    'dsfr_paragraph',
    'dsfr_twig_components',
    'dsfr_views',
    'search_api',
    'simple_styleguide',
  ];

}
