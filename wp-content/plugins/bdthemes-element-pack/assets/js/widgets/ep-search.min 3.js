!function(l,t){"use strict";var e;window.elementPackAjaxSearch=function(t){var a=l(".bdt-ajax-search"),r=l(a).find(".bdt-search-result");clearTimeout(e),e=setTimeout(function(){l(a).addClass("bdt-search-loading"),jQuery.ajax({url:window.ElementPackConfig.ajaxurl,type:"post",data:{action:"element_pack_search",s:t},success:function(t){if(0<(t=l.parseJSON(t)).results.length){var e='<div class="bdt-search-result-inner">';e+='<h3 class="bdt-search-result-header">SEARCH RESULT</h3>',e+='<ul class="bdt-list bdt-list-divider">';for(var s=0;s<t.results.length;s++)e+='<li class="bdt-search-item" data-url="'+t.results[s].url+'">                                          <a href="'+t.results[s].url+'" target="_blank">                                              <div class="bdt-search-title">'+t.results[s].title+'</div>                                              <div class="bdt-search-text">'+t.results[s].text+"</div>                                          </a>                                      </li>                                    ";e+="</ul>",e+='<a class="bdt-search-more">More Results</a>',e+="</div>",r.html(e),bdtUIkit.drop(r,{pos:"bottom-justify"}).show(),l(a).removeClass("bdt-search-loading"),l(".bdt-search-more").on("click",function(t){t.preventDefault(),l(a).submit()})}}})},450)}}(jQuery,window.elementorFrontend);