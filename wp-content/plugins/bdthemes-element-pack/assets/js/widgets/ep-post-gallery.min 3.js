!function(t,n){"use strict";var e=function(t,i){var n=t.find(".bdt-post-gallery-wrapper").find(".bdt-ep-grid-filters-wrapper");if(n.length){var e=n.data("hash-settings"),o=(e.activeHash,e.hashTopOffset),r=e.hashScrollspyTime;"yes"==e.activeHash&&(i(window).on("load",function(){d(n,r=1500,o)}),i(n).find(".bdt-ep-grid-filter").off("click").on("click",function(t){window.location.hash=i.trim(i(this).context.innerText.toLowerCase()).replace(/\s+/g,"-")}),i(window).on("hashchange",function(t){d(n,r,o)}))}function d(t,n,e){if(window.location.hash&&i(t).find("[bdt-filter-control=\"[data-filter*='"+window.location.hash.substring(1)+"']\"]").length){var o=i("[bdt-filter-control=\"[data-filter*='"+window.location.hash.substring(1)+"']\"]").closest(t).attr("id");i("html, body").animate({easing:"slow",scrollTop:i("#"+o).offset().top-e},n,function(){}).promise().then(function(){i("[bdt-filter-control=\"[data-filter*='"+window.location.hash.substring(1)+"']\"]").trigger("click")})}}};jQuery(window).on("elementor/frontend/init",function(){elementorFrontend.hooks.addAction("frontend/element_ready/bdt-post-gallery.default",e),elementorFrontend.hooks.addAction("frontend/element_ready/bdt-post-gallery.bdt-abetis",e),elementorFrontend.hooks.addAction("frontend/element_ready/bdt-post-gallery.bdt-fedara",e),elementorFrontend.hooks.addAction("frontend/element_ready/bdt-post-gallery.bdt-trosia",e)})}(jQuery,window.elementorFrontend);