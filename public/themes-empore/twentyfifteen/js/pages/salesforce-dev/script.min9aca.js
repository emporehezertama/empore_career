(function(a){var b=a(window),g=function(a,c,e){if(a.hasClass("active"))return!1;var d=b.height();window.pageYOffset+d-a.offset().top>=e&&(a.addClass("active"),c())},h=function(){a(".js-list").removeClass("static");a(".js-list-row").addClass("active")};(function(){for(var b=a(".js-line"),c=b.parent().find(".js-list-row"),e=c.length-1,d=0,f=0;f<e;f++)d+=a(c[f]).outerHeight(!0);b.height(d+25)})();var k=a(".js-sdcapability-section");g(k,h,550);b.scroll(function(){g(k,h,550)})})(jQuery);