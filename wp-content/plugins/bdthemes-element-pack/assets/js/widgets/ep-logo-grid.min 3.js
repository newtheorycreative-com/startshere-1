!function(n,t){"use strict";var e=function(t,n){var e=t.find(".bdt-logo-grid-wrapper");e.length&&e.find("> .bdt-tippy-tooltip").each(function(n){tippy(this,{appendTo:t[0]})})};jQuery(window).on("elementor/frontend/init",function(){elementorFrontend.hooks.addAction("frontend/element_ready/bdt-logo-grid.default",e)})}(jQuery,window.elementorFrontend);