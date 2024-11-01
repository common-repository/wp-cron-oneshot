=== WP-Cron Oneshot ===
Contributors: codegeode
Donate link:
Website: http://www.webprogrammingblog.com/
Tags: wp-cron
Requires at least: 3.0.1
Tested up to: 3.0.1
Stable tag: 1.0.1

WP-Cron Oneshot Job Scheduler for Wordpress.

== Description ==

When activated, the WP-Cron Oneshot plugin will add a single "do nothing" task
to wp-cron. This task will be scheduled to run immediately.

The task that gets added to wp-cron literally does nothing at all. It simply
places something in the wp-cron queue so you can trigger a wp-cron run.

This can be useful for troubleshooting problems such as "Access Denied" errors in your Apache logs
whenever wp-cron tries to run.  If your XML-Sitemaps never seem to build
automatically or your posts won't post at the scheduled time, it could be that
the wp-cron job isn't running.

Once the task has finished, you can either leave the plugin activated or simply
deactivate it.

If you ever need another task, just activate the plugin again.

== Installation ==

1.  Upload the entire `wp-cron-oneshot` folder to the `/wp-content/plugins/` directory.
1.  Activate the plugin through the 'Plugins' menu in WordPress.
1.  Upon activation, a "do nothing" task will be scheduled in wp-cron.  This task will
be scheduled to be run immediately.
1.  To schedule another task, deactivate the plugin, the activate it again.

== Frequently Asked Questions ==

= Q. So why would I need this? =

A. This is a troubleshooting plugin.  This plugin will add a task to the wp-cron queue
   which will trigger an immediate wp-cron run.

   This helps if you ever need to troubleshoot access-denied type errors in your
   Apache access logs.  For example, a 403 error like the following:

    xxx.yyy.com - - [07/Dec/2010:11:27:42 -0500] "POST /wp-cron.php?doing_wp_cron HTTP/1.0" 403 5432 "-" "WordPress/3.0.1; http://www.example.com"

   This plugin will add a task to the wp-cron queue so you don't have to wait
   12 hours until the next natural cycle.

= Q. I've activated the plugin.  When does the task run? =

A. It's scheduled to run immediately.  To kick it off, all you have to do is navigate
   to another page within WordPress Administration and wp-cron will run.  For example,
   just click over to the Dashboard or Posts screens.  This will trigger an immediate wp-cron run.

= Q. I thought it was a cron job.  Why do I have to click on screens to get it to run? =

A. Because wp-cron is not a *true* cron in the Linux sense of the word.  There's no
   timer running in the background for wp-cron jobs like there is for Linux's cron.

   The mechanism is this: whenever someone clicks on your site (or you move between pages
   in wp-admin), then WordPress checks the wp-cron queue.  If it finds a job there, it
   checks the current time.  If the clock time is past the time that the job is scheduled to run,
   WordPress runs it.

= Q. Any hints on troubleshooting wp-cron errors? =

A. The problem might have something to do with your .htaccess file.  If you're
   filtering out certain user agents in your .htaccess, check for one that could
   be interfering with WordPress - things such as 'wordp' or 'press' or something.
   You can comment out portions of your .htaccess, then use this plugin to schedule
   wp-cron tasks so you can see if you've found the problem.


== Screenshots ==

== Upgrade Notice ==

== Changelog ==

**1.0.0 - December 9, 2010**
Initial release.
