<?php
/**
 * Backdrop Core ( app/Sidebar/Component.php )
 *
 * @package   Backdrop Core
 * @copyright Copyright (C) 2019-2021. Benjamin Lu
 * @license   GNU General PUblic License v2 or later ( https://www.gnu.org/licenses/gpl-2.0.html )
 * @author    Benjamin Lu ( https://getbenonit.com )
 */


namespace Inheritance\Sidebar;
use Benlumia007\Backdrop\Theme\Sidebar\Component as SidebarContract;

class Component extends SidebarContract {
    public function sidebars() {
        return array(
            'primary' => [
                'name' => esc_html__( 'Primary Sidebar', 'inheritance' ),
                'desc' => esc_html__( 'test', 'inheritance' ),
            ],
            'secondary' => [
                'name' => esc_html__( 'Secondary Sidebar', 'inheritance' ),
                'desc' => esc_html__( 'test', 'inheritance' ),
            ]
        );
    }
}   