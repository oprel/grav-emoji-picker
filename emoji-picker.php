<?php
namespace Grav\Plugin;

use Grav\Common\GPM\GPM;
use Grav\Common\Grav;
use Grav\Common\Page\Page;
use Grav\Common\Page\Pages;
use Grav\Common\Plugin;

class EmojiPickerPlugin extends Plugin
{
    /**
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return [
            'onTwigSiteVariables' => ['onTwigSiteVariables', 0]
        ];
    }

    public function onTwigSiteVariables()
    {
        if ($this->isAdmin()) {
          $this->grav['assets']->add('plugin://emoji-picker/admin/picker.js');
          $this->grav['assets']->add('plugin://emoji-picker/admin/picker.css');
        }
    }
}
