<?php
/**
 * Route Channels | routes/channels.php
 *
 * This route is where the event broadcasting channels
 * that the application supports are registered.
 * The given channel authorization callbacks are used to check
 * if an authenticated user can listen to the channel
 *
 * @package Route
 * @subpackage Channels
 * @author Christian Kyle Soriano <soriano.christian.kyle@gmail.com>
 * @version v1.2 (10/28/2020)
 */

/**
 *
 * Broadcast Channels
 *
 *
 * Here you may register all of the event broadcasting channels that your
 * application supports. The given channel authorization callbacks are
 * used to check if an authenticated user can listen to the channel.
 *
 */

Broadcast::channel('App.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});
