=== WordCamp Custom Fields for WP-API ===
Contributors: romuloctba
Tags: WP-API, JSON, WordCamp
Requires at least: 4.1
Tested up to: 4.0
Stable tag: 1.0.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This plugin hooks into WP-API and adds the Session Info custom fields to the output.

== Description ==

This plugin hooks into WP-API and adds the Session Info custom fields to the output.

They will be available in the outputed JSON as: 

```
...,
"session-info": {
	"date" : '',
	"hour": '',
	"minutes": '',
	"meridien": ''
},
...
```

The fetched fields are: wcpt-session-date, wcpt-session-hour, wcpt-session-minutes and wcpt-session-meridiem

== Installation ==

* Upload plugin files to your plugins folder, or install using WordPress built-in Add New Plugin installer;
* Activate the plugin;
* There are no settings required.

== Frequently Asked Questions ==

= What is the plugin license? =

* This plugin is released under a GPL license.

= What does it do under the hood? =

* It just uses the `json_prepare_post` hook from WP-API to insert the needed custom fields into the output.

== Screenshots ==

none

== Changelog ==

= 1.0 =

* Hook and put in the output.

== Upgrade Notice ==

= 1.0 =

* Initial Version.

== License ==

This file is part of WordCamp Show Custom Fields for WP-API.

WordCamp Show Custom Fields for WP-API is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.

WordCamp Show Custom Fields for WP-API is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

Get a copy of the GNU General Public License in <http://www.gnu.org/licenses/>.