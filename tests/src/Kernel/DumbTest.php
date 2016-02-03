<?php

/**
 * @file
 * Contains
 *   \Drupal\Tests\dumb\Kernel\DumbTest.
 */

namespace Drupal\Tests\dumb\Kernel;

use Drupal\KernelTests\KernelTestBase;

/**
 * @coversDefaultClass \Drupal\dumb\Entity\Storage\DumbStorage
 * @group dumb
 */
class DumbTest extends KernelTestBase {

  /**
   * {@inheritDoc}
   */
  public static $modules = ['dumb', 'system'];

  /**
   * {@inheritDoc}
   */
  protected function setUp() {
    parent::setUp();

    $this->installSchema('system', ['sequences']); // is sequences necessary?
  }

  /**
   * @return \Drupal\dumb\Entity\Storage\DumbStorageInterface
   */
  protected function getStorage() {
    return \Drupal::entityManager()->getStorage('dumb');
  }

}
