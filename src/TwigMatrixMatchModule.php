<?php
/**
 * Twig Extensions plugin for Craft CMS 3.x
 *
 * Adds the extra filters and functions from Twig Extensions
 *
 */

namespace squirreldev\twigmatrixmatch;

use Craft;
use craft\base\Plugin;
use squirreldev\twigmatrixmatch\extensions\CamelToHypenExtension;

class TwigMatrixMatchModule extends Plugin {

	public function init() {
		parent::init();
        if (Craft::$app->request->getIsSiteRequest()) {
            // Add in our Twig extension
            Craft::$app->view->registerTwigExtension(new CamelToHypenExtension());
        }
	}

}
