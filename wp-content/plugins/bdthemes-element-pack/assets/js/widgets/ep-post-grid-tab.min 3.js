!function(t,n){"use strict";var e=function(t,n){var e=t.find(".bdt-post-grid-tab"),d=e.find("> .gridtab");e.length&&n(d).gridtab(e.data("settings"))};jQuery(window).on("elementor/frontend/init",function(){elementorFrontend.hooks.addAction("frontend/element_ready/bdt-post-grid-tab.default",e)})}(jQuery,window.elementorFrontend);