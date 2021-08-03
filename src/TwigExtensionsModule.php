<?php
/**
 * Twig Extensions plugin for Craft CMS 3.x
 *
 * Adds the extra filters and functions from Twig Extensions
 *
 */

namespace squirreldev\twigextensions;

use Craft;
use craft\base\Plugin;
use squirreldev\twigextensions\extensions\CamelToHypenExtension;

class TwigExtensionsModule extends Plugin {

	public function init() {
		parent::init();
        if (Craft::$app->request->getIsSiteRequest()) {
            // Add in our Twig extension
            Craft::$app->view->registerTwigExtension(new CamelToHypenExtension());
        }
	}

}
