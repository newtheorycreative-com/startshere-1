!function(s){s.fn.recliner=function(l){var n,o,r=s(window),a=this,i=this.selector;l=s.extend({attrib:"data-src",throttle:300,threshold:100,printable:!0,live:!0,getScript:!1},l);function e(t){t.removeClass("lazy-loading"),t.addClass("lazy-loaded"),t.trigger("lazyshow")}function d(){var i=void 0!==window.innerHeight?window.innerHeight:r.height(),e=window.innerHeight+window.scrollY>=document.body.offsetHeight,t=a.filter(function(){var t=s(this);if("none"!=t.css("display")){var n=r.scrollTop(),o=n+i,a=t.offset().top;return a+t.height()>=n-l.threshold&&a<=o+l.threshold||e}});n=t.trigger("lazyload"),a=a.not(n)}function c(t){t.one("lazyload",function(){!function(t){var n=s(t),o=n.attr(l.attrib),a=n.prop("tagName");o?(n.addClass("lazy-loading"),/^(IMG|IFRAME|AUDIO|EMBED|SOURCE|TRACK|VIDEO)$/.test(a)?(n.attr("src",o),n[0].onload=function(t){e(n)}):n.data("script")?s.getScript(o,function(t){e(n)}):n.load(o,function(t){e(n)})):e(n)}(this)}),d()}return r.on("scroll.lazy resize.lazy lookup.lazy",function(t){o&&clearTimeout(o),o=setTimeout(function(){r.trigger("lazyupdate")},l.throttle)}),r.on("lazyupdate.lazy",function(t){d()}),l.live&&s(document).on("ajaxSuccess.lazy",function(){var t=s(i).not(".lazy-loaded").not(".lazy-loading");a=a.add(t),c(t)}),l.printable&&window.matchMedia&&window.matchMedia("print").addListener(function(t){t.matches&&s(i).trigger("lazyload")}),c(this),this},s.fn.derecliner=function(t){var n=s(window);n.off("scroll.lazy resize.lazy lookup.lazy"),n.off("lazyupdate.lazy"),s(document).off("ajaxSuccess.lazy")}}(jQuery);