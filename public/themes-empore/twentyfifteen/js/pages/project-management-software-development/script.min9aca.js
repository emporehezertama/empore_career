(function(c){var e=c(window),k=function(f,a,b){if(f.hasClass("active"))return!1;var c=e.height();window.pageYOffset+c-f.offset().top>=b&&(f.addClass("active"),a())},l=c(".js-switch-section"),b=c(".js-switch"),g=c(".js-switch-btn"),n=c(".js-switch-elem"),p=g.length,d=-1,a,m=function(a){g.removeClass("active");n.removeClass("active");b.find(".js-switch-btn").eq(a).addClass("active");b.find(".js-switch-elem").eq(a).addClass("active");d=a},h=function(){a&&clearInterval(a);a=setInterval(function(){d++;
	d>=p&&(d=0);m(d)},4E3)},q=function(){b.removeClass("static");b.find(".js-switch-btn:first-child").addClass("active");b.find(".js-switch-elem:first-child").addClass("active");g.on("click",function(){var b=c(this),d=b.index();if(b.hasClass("active"))return!1;a&&clearInterval(a);m(d)});b.on("mouseenter",function(){a&&clearInterval(a)});b.on("mouseleave",function(){a&&clearInterval(a);h()})};e.load(function(){q();k(l,h,50);e.scroll(function(){k(l,h,50)})})})(jQuery);