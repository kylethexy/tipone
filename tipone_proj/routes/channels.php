<?php
/**
 * Route Channels | routes/channels.php
 * php version 7.3.23
 *
 * This route is where the event broadcasting channels
 * that the application supports are registered.
 * The given channel authorization callbacks are used to check
 * if an authenticated user can listen to the channel
 *
 * @category   PHP
 * @package    Route
 * @subpackage Channels
 * @author     Christian Kyle Soriano <soriano.christian.kyle@gmail.com>
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @version    GIT: @1.0.0@
 * @link       http://127.0.0.1:8000
 */

/**
 * Broadcast Channels
 * Here you may register all of the event broadcasting channels that your
 * application supports. The given channel authorization callbacks are
 * used to check if an authenticated user can listen to the channel.
 */

Broadcast::channel(
    'App.User.{id}', function ($user, $id) {
        return (int) $user->id === (int) $id;
    }
);
