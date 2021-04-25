=== Longer Permalinks ===
Contributors: antithesisgr
Author link: http://www.antithesis.gr
Tags: permalinks, long, slugs, slugs length, long title, post_name size, titles, non-latin, url, permalinks limitation, long url, long slug
Requires at least: 4.0
Tested up to: 5.7
Stable tag: 1.25
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Allow long permalinks in your WordPress. Useful especially for using non-latin characters in permalinks. 
Respects future relevant core updates.

== Description ==

This plugin allows you to use longer URLs (permalinks), by allowing much more characters in your titles and slug. Done in a way that is future compatible as much as possible with future updates of WordPress core. 
There is a 200 characters limitation on WordPress core nowadays. This limit is raised to 3000. 
Plugin is always extending only your current WordPress core code, even after core updates.
Your long permalinks will now work. 
This plugin is really useful especially in non-latin slugs because of the required url escaping that increases the length of your permalinks a lot.


= Features =
* Uppon activation the available slug length (post title) will become 3000, allowing long permalinks.
* Required functionality is automatically applied in your current core code (even after future WordPress updates).
* Plugin requires at least MySQL 5.0.3

== Installation ==

1. Upload plugin folder to the `/wp-content/plugins/longer-permalinks/` directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. That's it!

== Changelog ==

= 1.25 = 
* Bugfix: correct handling of autosaves and revisions on WP core updates

= 1.24 =
* Bug fixes for WordPress Multi-site compatibility

= 1.23 =
* Tested on WP 5.5.1 

= 1.22 = 
* Bugfix: lock name should not exceed 64 chars for some MySQL flavors/versions
* Tested on WP 5.4

= 1.21 =
* Important bugfixes.

= 1.20 & 1.19 =
* Important changes to handle extra load on database upgrades and first installation.
We now use explicit db locks to handle concurrent requests on those situations gracefully.
(not tested on active database clusters like Galera Cluster or any STATEMENT based replication setups)

= 1.18 =
* Tested on 5.3.2

= 1.17 =
* Fix for WordPress upgrade process that needs a separate step for the database upgrade - "Database Update Required" cases (credits: @margroup for investigating the problem and testing the solution)
* Proper handling on WordPress upgrades to avoid unnecessary database locks
* Source code refactoring
* Uninstall actions update

= 1.16 =
* Minor regex adjustment

= 1.15 =
* IMPORTANT: Please update plugin to latest version BEFORE upgrading your WordPress to 5.x if you want to avoid truncated long permalinks.
* Plugin Major update: long permalinks suvrive the WordPress 5.0 upgrade.

= 1.14 =
* Provide more thorough admin output on edge cases
* Icon added
* FAQ updated
* Minor speed improvement
* Tested on 4.9.1

= 1.13 =
* Bug fix, fclose was not needed.

= 1.12 =
* Bug fix, $wpdb was not global (credits: @takisbig).

= 1.11 =
* Minor changes

= 1.1 =
* Tested on 4.7.3

= 1.0 =
* Initial release


== Frequently Asked Questions ==

= What can I do with this plugin? =
You can enjoy a lot more characters in your slugs and permalinks, without the default core limitation and have future core compatibility at the same time.
= What do you mean by "future core compatibility"? =
The plugin is using PHP reflection to dynamically apply the required changes in WordPress core every time you update your WordPress. It automatically detects any WordPress updates and reapplies the required changes anytime this is needed.

== Screenshots ==

No screenshots.


