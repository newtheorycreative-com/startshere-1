if("undefined"==typeof jQuery)throw new Error("jquery");!function(s){function t(i,n){this.el=i,this.options=n,this._init()}t.prototype._init=function(){var n=s("body").height()-s(window).height(),i=this.options,t={position:"fixed",top:0,left:0,width:"100%",height:"2px",backgroundColor:"#eee",zIndex:9999},o={width:0,backgroundColor:"#50bcb6",height:"100%",transitionProperty:"width",transitionDuration:".3s",transitionTimingFunction:"linear"},e=["size","position","wapperBg"].concat(["innerBg","duration","effect"]);for(var r in i)switch(e.includes(r)||delete i[r],r){case"size":t.height=i.size;break;case"position":"bottom"===i.position&&(delete t.top,t.bottom=0);break;case"wapperBg":t.backgroundColor=i.wapperBg;break;case"innerBg":o.backgroundColor=i.innerBg;break;case"duration":o.transitionDuration=i.duration;break;case"effect":o.transitionTimingFunction=i.effect}this.el.empty().css(t),s('<div class="inner"></div>').appendTo(this.el).css(o),s(window).scroll(function(i){window.requestAnimationFrame(function(){var i=Math.max(0,Math.min(1,s(window).scrollTop()/n));s(".inner").show().css("width",100*i+"%")})})},s.fn.progress=function(n){return this.each(function(i){new t(s(this),n||null)}),this}}(jQuery);