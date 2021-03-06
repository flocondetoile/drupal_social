<?php
/**
 * @file
 * Contains \Drupal\bootstrap\Plugin\Setting\Advanced\Cdn\CdnCustomCss.
 */

namespace Drupal\bootstrap\Plugin\Setting\Advanced\Cdn;

use Drupal\bootstrap\Annotation\BootstrapSetting;
use Drupal\bootstrap\Plugin\Setting\SettingBase;
use Drupal\Core\Annotation\Translation;

/**
 * The "cdn_custom_css" theme setting.
 *
 * @BootstrapSetting(
 *   cdn_provider = "custom",
 *   id = "cdn_custom_css",
 *   type = "textfield",
 *   weight = 1,
 *   title = @Translation("Bootstrap CSS URL"),
 *   defaultValue = "https://cdn.jsdelivr.net/bootstrap/3.3.5/css/bootstrap.css",
 *   description = @Translation("It is best to use <code>https</code> protocols here as it will allow more flexibility if the need ever arises."),
 *   groups = {
 *     "advanced" = @Translation("Advanced"),
 *     "cdn" = @Translation("CDN (Content Delivery Network)"),
 *     "custom" = false,
 *   },
 * )
 */
class CdnCustomCss extends SettingBase {

  /**
   * {@inheritdoc}
   */
  public function getCacheTags() {
    return ['library_info'];
  }

}
