
# rotator-js V0.2
Simple Rotator made in JavaScript (cumulus, tag-cloud)

Using jQuery for initialization and events from jQuery-mobile to support touch-screens.
Designed for simplicity and performance.

Open Source
@copyright (C) 2015 Ing. Ernst Johann Peterec
@license AGPL <http://www.gnu.org/licenses/agpl.txt>

@demo http://ernesto-sun.com/demo/rotator/index.html

## Features:

* nice performance because of lookup-tables
* smooth movement
* realized with rings that form a ''sphere'
* full HTML-support (you can add whatever into the rotator, links, images, video, ...)
* basic touch-screen support
* automatic size-initialization whatever size the div-rotator gets per CSS
* font-size and any special designs customizeable in CSS
* works over any background and with any character-set (because it's just HTML)
* any number of elements will fit


## To Do:

* testing, testing
* making possible the use of several rotators in one website 
* improving the touch-screen/mobile support
* creating a jQuery-plugin, Drupal-module, a.s.o.
* make pure multi-browser-javascript (skipping jQuery as need)

Ideas, bug-reports, improvements or any comments welcome. Thanks!!

## Some related or similar projects

* http://www.goat1000.com/tagcanvas.php
* http://dynamicguy.github.io/tagcloud/
* http://www.roytanck.com/tag-cloud/ (good old WP Cumulus plugin using Flash)
* http://www.iangeorge.net/snippets/tags/ (I really like this one)
* https://github.com/jerone/JS-Cumulus
* http://jstagsphere.sourceforge.net/ (very nice and seems quite fast)
 
## Installation:

Just download the files and open the 'index.html' in any browser. Should work straight away.

Edit index.html to configure your own entries. Edit custom.css to make it look as you want it. 

## Minimal needed files:

* jQuery and jQuery Mobile (only the event-support) 
* index.html
* custom.css
* rotator.css
* rotator.js 

Note for developers: Of course the jQuery-includes can be redirected to link to a prominent online-version (speeds up because of HTTP- and Browser-caching)












