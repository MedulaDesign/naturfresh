// Avoid `console` errors in browsers that lack a console
if (!(window.console && console.log)) {
    (function() {
        var noop = function() {};
        var methods = ['assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error', 'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log', 'markTimeline', 'profile', 'profileEnd', 'markTimeline', 'table', 'time', 'timeEnd', 'timeStamp', 'trace', 'warn'];
        var length = methods.length;
        var console = window.console = {};
        while (length--) {
            console[methods[length]] = noop;
        }
    }());
}
// Best isNumber evaluation ever By: CMS (Christian C. Salvadó) in http://stackoverflow.com/questions/18082/validate-numbers-in-javascript-isnumeric
// uncomment when needed
/*function isNumber(n) {
  return !isNaN(parseFloat(n)) && isFinite(n);
}//*/

/*! Picturefill - Responsive Images that work today. (and mimic the proposed Picture element with divs). Author: Scott Jehl, Filament Group, 2012 | License: MIT/GPLv2 */
(function(a){"use strict";a.picturefill=function(){for(var b=a.document.getElementsByTagName("div"),c=0,d=b.length;d>c;c++)if(b[c].getAttribute("data-picture")!==null){for(var e=b[c].getElementsByTagName("div"),f=[],g=0,h=e.length;h>g;g++){var i=e[g].getAttribute("data-media");(!i||a.matchMedia&&a.matchMedia(i).matches)&&f.push(e[g])}var j=b[c].getElementsByTagName("img")[0];f.length?(j||(j=a.document.createElement("img"),j.alt=b[c].getAttribute("data-alt"),b[c].appendChild(j)),j.src=f.pop().getAttribute("data-src")):j&&b[c].removeChild(j)}},a.addEventListener?(a.addEventListener("resize",a.picturefill,!1),a.addEventListener("DOMContentLoaded",function(){a.picturefill(),a.removeEventListener("load",a.picturefill,!1)},!1),a.addEventListener("load",a.picturefill,!1)):a.attachEvent&&a.attachEvent("onload",a.picturefill)})(this)

// place any jQuery/helper plugins in here, instead of separate, slower script files.
