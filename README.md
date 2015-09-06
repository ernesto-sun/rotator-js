# rotator-js
Simple Rotator made in JavaScript (cumulus, tag-cloud)

Using jQuery for initialization and (a little bit) jQuery-mobile to support touch-screens.
Designed for simplicity and performance. Using only Javascript at the movement-routine.

Open Source
@copyright (C) 2015 Ing. Ernst Johann Peterec
@license AGPL <http://www.gnu.org/licenses/agpl.txt>

## Features:

* nice performance because of lookup-tables
* smooth movement up and down. (left and right is not smooth)
* realized with 7 rings that form a 'ball'
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
* smoothing the left-right-movement
* make pure multi-browser-javascript (skipping jQuery as need)

Ideas, bug-reports, improvements or any comments welcome. Thanks!!

## Installation:

Just download the files and open the 'rotator.html' in any browser. Should work straight away.

Edit rotator.html to configure your own entries. Edit custom.css to make it look as you want it. 

## Minimal needed files:

* jQuery and jQuery Mobile (only the event-support) 
* rotator.html
* rotator.css
* custom.css
* rotator.js  (needs to be included at last)

Note for developers: Of course the jQuery-includes can be redirected to link to a prominent online-version (speeds up because of HTTP- and Browser-caching)












