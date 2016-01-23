<?php
/**
 *
 *
 * @copyright (c) Paul Sohier <http://www.phpbbextensions.io>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace paul999\browsernotification;


/**
 * browser notification method class
 * This class handles sending browser messages for notifications
 */

class browser extends \phpbb\notification\method\messenger_base
{
    /**
     * Get notification method name
     *
     * @return string
     */
    public function get_type()
    {
        return 'paul999.browsernotification.notification.method.browser';
    }

    /**
     * Is this method available for the user?
     * This is checked on the notifications options
     */
    public function is_available()
    {
        return true;
    }

    /**
     * Is this method available at all?
     * This is checked before notifications are sent
     */
    public function global_available()
    {
        return true;
    }

    public function notify()
    {
        if ($this->global_available())
        {
            // Notify.
        }
    }
}