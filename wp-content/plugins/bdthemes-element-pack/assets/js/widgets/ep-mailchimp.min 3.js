!function(t,n){"use strict";var i=function(t,n){var i=t.find(".bdt-mailchimp");if(i.length){var e=window.ElementPackConfig.mailchimp;return i.submit(function(){var t=n(this);return bdtUIkit.notification({message:"<span bdt-spinner></span> "+e.subscribing,timeout:!1,status:"primary"}),n.ajax({url:t.attr("action"),type:"POST",data:t.serialize(),success:function(t){bdtUIkit.notification.closeAll(),bdtUIkit.notification({message:t,status:"success"})}}),!1}),!1}};jQuery(window).on("elementor/frontend/init",function(){elementorFrontend.hooks.addAction("frontend/element_ready/bdt-mailchimp.default",i)})}(jQuery,window.elementorFrontend);