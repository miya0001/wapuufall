var jq = jQuery.noConflict();

jq(window).load(function(){
  jq('body').snowfall({image :wapuufall_plugin_url + "/images/wck-wapuu.png", minSize: 10, maxSize:30});  
  jq('body').snowfall({image :wapuufall_plugin_url + "/images/wct2012.png", minSize: 10, maxSize:40});
  jq('body').snowfall({image :wapuufall_plugin_url + "/images/wct2013.png", minSize: 5, maxSize:60});
  jq('body').snowfall({image :wapuufall_plugin_url + "/images/wctokyo_wapuu.png", minSize: 1, maxSize:100});  
});

