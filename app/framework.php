<?php
/**
 * Theme bootstrap file.
 *
 * @package   Inheritance
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright 2022. Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://github.com/benlumia007/inheritance
 */

# ------------------------------------------------------------------------------
# Create a new application.
# ------------------------------------------------------------------------------
#
# Creates the one true instance of the Backdrop application.

$inheritance = new Benlumia007\Backdrop\Framework();

# ------------------------------------------------------------------------------
# Register default providers.
# ------------------------------------------------------------------------------
#
# Register default providers for the theme.

$inheritance->provider( Benlumia007\Backdrop\FontAwesome\Provider::class );
$inheritance->provider( Benlumia007\Backdrop\Fonts\Provider::class );
$inheritance->provider( Benlumia007\Backdrop\Mix\Manifest\Provider::class );
$inheritance->provider( Benlumia007\Backdrop\Template\Hierarchy\Provider::class );
$inheritance->provider( Benlumia007\Backdrop\Template\Manager\Provider::class );
$inheritance->provider( Benlumia007\Backdrop\Template\View\Provider::class );

# ------------------------------------------------------------------------------
# Add additional providers.
# ------------------------------------------------------------------------------
#
# Add additional providers specifically for the theme.

$inheritance->provider( Inheritance\Menu\Provider::class );
$inheritance->provider( Inheritance\Sidebar\Provider::class );

# ------------------------------------------------------------------------------
# Perform bootstrap actions.
# ------------------------------------------------------------------------------
#
# Creates an action hook for child themes (or even plugins) to hook into the
# bootstrapping process and add their own bindings before the app is booted by
# passing the application instance to the action callback.

do_action( 'inheritance/bootstrap', $inheritance );

# ------------------------------------------------------------------------------
# Bootstrap the application.
# ------------------------------------------------------------------------------
#
# Calls the application `boot()` method, which launches the application. Pat
# yourself on the back for a job well done.

$inheritance->boot();