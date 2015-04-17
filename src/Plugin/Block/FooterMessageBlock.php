<?php
/**
 * @file
 * Contains \Drupal\footer_message\Plugin\Block\FooterMessageBlock.
 */

namespace Drupal\footer_message\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Session\AccountInterface;

/**
 * Provides a 'Footer Message' block.
 *
 * @Block(
 *   id = "footer_message_block",
 *   admin_label = @Translation("Footer Message"),
 * )
 */
class FooterMessageBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return array('#markup' => $this->t('Hello World!');
  }

  /**
   * {@inheritdoc}
   */
  public function access(AccountInterface $account) {
    return $account->hasPermission('access content');
  } 

}