(function(a){var g=a(window),p=function(a,b,c){if(a.hasClass("active"))return!1;var e=g.height();window.pageYOffset+e-a.offset().top>=c&&(a.addClass("active"),b())},q=a(".js-chat-v-section"),d=a(".js-chat-v"),r=a(".js-chat-v-preview"),t=a(".js-chat-v-content"),l=a(".js-chat-v-dot"),h=l.length,b=0,u=a(".js-chat-v-arr"),k=!1,c=!1,m=function(b){if(k)return!1;k=!0;var c=a(".js-chat-v-preview.active"),e=a(".js-chat-v-content.active"),d=a(".js-chat-v-dot.active"),f=a(r[b]),g=a(t[b]);b=a(l[b]);c.removeClass("active").addClass("hide");
	e.removeClass("active").addClass("hide");d.removeClass("active");f.addClass("active");g.addClass("active");b.addClass("active");setTimeout(function(){c.removeClass("hide");e.removeClass("hide");k=!1},600)},n=function(){c&&clearInterval(c);c=setInterval(function(){b++;b>=h&&(b=0);m(b)},5E3)},f=function(a){if(k)return!1;c&&clearInterval(c);"prev"==a?(b--,0>b&&(b=h-1)):(b++,b>=h&&(b=0));m(b)};g.load(function(){var e=a(".js-chat-v-preview:first-child"),h=a(".js-chat-v-content:first-child");d.removeClass("static");
	e.addClass("active");h.addClass("active");a(l[0]).addClass("active");u.on("click",function(){a(this).hasClass("prev")?f("prev"):f("next")});l.on("click",function(){if(k)return!1;c&&clearInterval(c);b=a(this).index();m(b)});p(q,n,50);g.scroll(function(){p(q,n,50)});d.on("mouseenter",function(){c&&clearInterval(c)});d.on("mouseleave",function(){n()});if("ontouchstart"in window||0<navigator.MaxTouchPoints||0<navigator.msMaxTouchPoints)d.on("swipeleft",function(){f("prev")}),d.on("swiperight",function(){f("next")})})})(jQuery);