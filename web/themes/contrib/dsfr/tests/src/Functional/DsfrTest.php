<?php

namespace Drupal\Tests\dsfr\Functional;

use Drupal\Tests\BrowserTestBase;

/**
 * Tests the DSFR theme.
 *
 * @group dsfr
 */
class DsfrTest extends BrowserTestBase {

  /**
   * Modules to enable.
   *
   * @var string[]
   */
  protected static $modules = ['shortcut'];

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'dsfr';


  /**
   * Test Dsfr's configuration schema.
   */
  public function testConfigSchema() {
    $this->drupalLogin($this->rootUser);
    $this->drupalGet('admin/appearance/settings/' . $this->defaultTheme);
    $this->submitForm([], 'Save configuration');
    $this->assertSession()->statusCodeEquals(200);
  }

}
