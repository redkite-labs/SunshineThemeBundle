<?php
/**
 * This file is part of the BusinessWebsiteThemeBundle theme and it is distributed
 * under the MIT License. In addiction, to use this bundle, you must leave
 * intact this copyright notice.
 *
 * (c) Since 2011 RedKiteCms
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * For extra documentation and help please visit http://alphalemon.com
 *
 * @license    GPL LICENSE Version 2.0
 *
 */

namespace  RedKiteCms\Theme\SunshineThemeBundle\DependencyInjection;

use RedKiteLabs\ThemeEngineBundle\Core\Rendering\DependencyInjection\BaseExtension;

class SunshineThemeExtension extends BaseExtension
{
    public function configureTheme()
    {
        return
            array(
                array(
                    'path' => __DIR__.'/../Resources/config',
                    'configFiles' =>
                    array(
                        'sunshine_theme.xml',
                    ),
                    'configuration' =>
                    array(
                        array(
                            'path' => __DIR__.'/../Resources/config/templates',
                            'configFiles' =>
                            array(
                                'home.xml',
                                'internal.xml',
                            ),
                            'configuration' =>
                            array(
                                array(
                                    'path' => __DIR__.'/../Resources/config/templates/slots',
                                    'configFiles' =>
                                    array(
                                        'home.xml',
                                        'base.xml',
                                        'internal.xml',
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
            );
    }

    public function getAlias()
    {
        return 'sunshine_theme';
    }
}