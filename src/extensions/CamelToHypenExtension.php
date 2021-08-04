<?php

namespace squirreldev\twigmatrixmatch\extensions;

use Twig\Extension\AbstractExtension;
use yii\helpers\Inflector;

class CamelToHypenExtension extends AbstractExtension {

    /**
     * @return string
     */
    public function getName() {
        return Craft::t('twigmatrixmatch', 'Camel to hypen');
    }

    public function getFilters() {
        return [
            new \Twig_SimpleFilter('camelToHypens', [Inflector::class, 'camel2id'])
        ];
    }

}