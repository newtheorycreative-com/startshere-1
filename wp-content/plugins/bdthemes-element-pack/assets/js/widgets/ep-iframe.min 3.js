!function(t,e){"use strict";var n=function(t,e){var n=t.find(".bdt-iframe > iframe"),o=n.data("auto_height");n.length&&(o&&e(n).load(function(){e(this).height(e(this).contents().find("html").height())}),e(n).recliner({throttle:n.data("throttle"),threshold:n.data("threshold"),live:n.data("live")}))};jQuery(window).on("elementor/frontend/init",function(){elementorFrontend.hooks.addAction("frontend/element_ready/bdt-iframe.default",n)})}(jQuery,window.elementorFrontend);