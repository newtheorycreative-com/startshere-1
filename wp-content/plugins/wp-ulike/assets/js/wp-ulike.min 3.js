!function(i){"use strict";var s="WordpressUlikeNotifications",n={messageType:"success",messageText:"Hello World!",messageElement:"wpulike-message",notifContainer:"wpulike-notification"};function e(t,e){this.element=t,this.$element=i(t),this.settings=i.extend({},n,e),this._defaults=n,this._name=s,this.init()}i.extend(e.prototype,{init:function(){this._message(),this._container(),this._append(),this._remove()},_message:function(){this.$messageElement=i("<div/>").addClass(this.settings.messageElement+" wpulike-"+this.settings.messageType).text(this.settings.messageText)},_container:function(){i("."+this.settings.notifContainer).length||this.$element.append(i("<div/>").addClass(this.settings.notifContainer)),this.$notifContainer=this.$element.find("."+this.settings.notifContainer)},_append:function(){this.$notifContainer.append(this.$messageElement).trigger("WordpressUlikeNotificationAppend")},_remove:function(){var t=this;this.$messageElement.click(function(){i(this).fadeOut(300,function(){i(this).remove(),i("."+t.settings.messageElement).length||t.$notifContainer.remove()}).trigger("WordpressUlikeRemoveNotification")}),setTimeout(function(){t.$messageElement.fadeOut(300,function(){i(this).remove(),i("."+t.settings.messageElement).length||t.$notifContainer.remove()}).trigger("WordpressUlikeRemoveNotification")},8e3)}}),i.fn[s]=function(t){return this.each(function(){new e(this,t)})}}(jQuery,window,document),function(n,t,i){"use strict";var l="WordpressUlike",e=(n(t),n(i)),a={ID:0,nonce:0,type:"",append:"",appendTimeout:2e3,displayLikers:!1,disablePophover:!0,isTotal:!1,factor:"",template:"",counterSelector:".count-box",generalSelector:".wp_ulike_general_class",buttonSelector:".wp_ulike_btn",likersSelector:".wp_ulike_likers_wrapper"},o={"ulike-id":"ID","ulike-nonce":"nonce","ulike-type":"type","ulike-append":"append","ulike-is-total":"isTotal","ulike-display-likers":"displayLikers","ulike-disable-pophover":"disablePophover","ulike-append-timeout":"appendTimeout","ulike-factor":"factor","ulike-template":"template"};function s(t,e){for(var i in this.element=t,this.$element=n(t),this.settings=n.extend({},a,e),this._defaults=a,this._name=l,this._refreshTheLikers=!1,this.buttonElement=this.$element.find(this.settings.buttonSelector),this.generalElement=this.$element.find(this.settings.generalSelector),this.counterElement=this.generalElement.find(this.settings.counterSelector),o){var s=this.buttonElement.data(i);void 0!==s&&(this.settings[o[i]]=s)}this.init()}n.extend(s.prototype,{init:function(){this.buttonElement.click(this._initLike.bind(this)),this.generalElement.one("mouseenter",this._updateLikers.bind(this))},_ajax:function(t,e){n.ajax({url:wp_ulike_params.ajax_url,type:"POST",cache:!1,dataType:"json",data:t}).done(e)},_initLike:function(t){t.stopPropagation(),this._maybeUpdateElements(t),this._updateSameButtons(),this.buttonElement.prop("disabled",!0),e.trigger("WordpressUlikeLoading",this.element),this.generalElement.addClass("wp_ulike_is_loading"),this._ajax({action:"wp_ulike_process",id:this.settings.ID,nonce:this.settings.nonce,factor:this.settings.factor,type:this.settings.type,template:this.settings.template},function(t){this.generalElement.removeClass("wp_ulike_is_loading"),t.success?(this._updateMarkup(t),this._appendChild()):this._sendNotification("error",t.data),this.buttonElement.prop("disabled",!1),e.trigger("WordpressUlikeUpdated",this.element)}.bind(this))},_maybeUpdateElements:function(t){this.buttonElement=n(t.currentTarget),this.generalElement=this.buttonElement.closest(this.settings.generalSelector),this.counterElement=this.generalElement.find(this.settings.counterSelector),this.settings.factor=this.buttonElement.data("ulike-factor")},_appendChild:function(){if(""!==this.settings.append){var t=n(this.settings.append);this.buttonElement.append(t),this.settings.appendTimeout&&setTimeout(function(){t.detach()},this.settings.appendTimeout)}},_updateMarkup:function(t){this._setSbilingElement(),this._setSbilingButtons(),this._updateGeneralClassNames(t.data.status),null!==t.data.data&&(t.data.status<5&&(this.__updateCounter(t.data.data),this._refreshTheLikers=!0),this._updateButton(t.data.btnText,t.data.status)),this._sendNotification(t.data.messageType,t.data.message),this._refreshTheLikers&&this._updateLikers()},_updateGeneralClassNames:function(t){var e="wp_ulike_is_not_liked",i="wp_ulike_is_liked",s="wp_ulike_is_unliked",n="wp_ulike_click_is_disabled";switch(this.siblingElement.length&&this.siblingElement.removeClass(this._arrayToString([i,s])),t){case 1:this.generalElement.addClass(i).removeClass(e),this.generalElement.children().first().addClass(n);break;case 2:this.generalElement.addClass(s).removeClass(i);break;case 3:this.generalElement.addClass(i).removeClass(s);break;default:this.generalElement.addClass(n),this.siblingElement.length&&this.siblingElement.addClass(n)}},_arrayToString:function(t){return t.join(" ")},_setSbilingElement:function(){this.siblingElement=this.generalElement.siblings()},_setSbilingButtons:function(){this.siblingButton=this.buttonElement.siblings(this.settings.buttonSelector)},__updateCounter:function(t){"object"!=typeof t?this.counterElement.text(t):this.settings.isTotal&&void 0!==t.sub?this.counterElement.text(t.sub):"down"===this.settings.factor?(this.counterElement.text(t.down),this.siblingElement.length&&this.siblingElement.find(this.settings.counterSelector).text(t.up)):(this.counterElement.text(t.up),this.siblingElement.length&&this.siblingElement.find(this.settings.counterSelector).text(t.down)),e.trigger("WordpressUlikeCounterUpdated",[this.buttonElement])},_updateLikers:function(){this.likersElement=this._getLikersElement(),!this.settings.displayLikers||this.likersElement.length&&!this._refreshTheLikers||(this.generalElement.addClass("wp_ulike_is_getting_likers_list"),this._ajax({action:"wp_ulike_get_likers",id:this.settings.ID,nonce:this.settings.nonce,type:this.settings.type,displayLikers:this.settings.displayLikers,disablePophover:this.settings.disablePophover,refresh:this._refreshTheLikers?1:0},function(t){this.generalElement.removeClass("wp_ulike_is_getting_likers_list"),t.success&&(this.likersElement.length||(this.likersElement=n("<div>",{class:t.data.class}).appendTo(this.$element)),t.data.template?this.likersElement.show().html(t.data.template):this.likersElement.hide()),this._refreshTheLikers=!1}.bind(this)))},_updateSameButtons:function(){var t=void 0!==this.settings.factor?this.settings.factor:"";this.sameButtons=e.find(".wp_"+this.settings.type.toLowerCase()+t+"_"+this.settings.ID),1<this.sameButtons.length&&(this.buttonElement=this.sameButtons,this.generalElement=this.buttonElement.closest(this.settings.generalSelector),this.counterElement=this.generalElement.find(this.settings.counterSelector))},_getLikersElement:function(){return this.$element.find(this.settings.likersSelector)},_updateButton:function(t,e){this.buttonElement.hasClass("wp_ulike_put_image")?(this.buttonElement.toggleClass("image-unlike wp_ulike_btn_is_active"),this.siblingElement.length&&this.siblingElement.find(this.settings.buttonSelector).removeClass("image-unlike wp_ulike_btn_is_active"),this.siblingButton.length&&this.siblingButton.removeClass("image-unlike wp_ulike_btn_is_active")):this.buttonElement.hasClass("wp_ulike_put_text")&&null!==t&&("object"!=typeof t?this.buttonElement.find("span").html(t):"down"===this.settings.factor?(this.buttonElement.find("span").html(t.down),this.siblingElement.length&&this.siblingElement.find(this.settings.buttonSelector).find("span").html(t.up)):(this.buttonElement.find("span").html(t.up),this.siblingElement.length&&this.siblingElement.find(this.settings.buttonSelector).find("span").html(t.down)))},_sendNotification:function(t,e){"1"===wp_ulike_params.notifications&&n(i.body).WordpressUlikeNotifications({messageType:t,messageText:e})}}),n.fn[l]=function(t){return this.each(function(){n.data(this,"plugin_"+l)||n.data(this,"plugin_"+l,new s(this,t))})}}(jQuery,window,document),function(e){e(function(){e(this).bind("DOMNodeInserted",function(t){e(".wpulike").WordpressUlike()})}),e(".wpulike").WordpressUlike()}(jQuery);