(function(c){var r=c("body");c(document);var e=c(window),t=c(".js-portfolio-loader-before"),u=c(".js-portfolio-loader-after"),q=c(".js-cases-section"),g=!1,v=c(".js-loadcases-link"),m=0,d="all",h=!1,w=function(a,b){b?"show"==a&&c(".forward-cases").removeClass("forward-cases"):"hide"==a?c(".js-case-item").addClass("forward-cases"):c(".forward-cases").removeClass("forward-cases")},n=function(a,b){"hide"==b?(a.removeClass("go-loading"),setTimeout(function(){a.removeClass("loading")},360)):(a.addClass("loading"),
	a.width(),a.addClass("go-loading"))},l=function(a){var b=c(".js-tags-switch .js-loadcases-link"),d=b.length;b.removeClass("active");for(var k=0;k<d;k++){var x=c(b[k]);x.attr("href").split("#")[1]==a&&x.addClass("active")}},f=function(a,b){if(!g){g=!0;h=!1;var e=0;c.ajax({url:ajaxUrl,data:{action:"loadcases",page_id:pageId,section_count:b,post_tag:a},type:"POST",success:function(a){a=JSON.parse(a);a.loading_done&&(h=!0);e=a.cases?a.cases:"&nbsp;"}});0==b&&c(".js-case-item").length&&w("hide",!1);n(t,
	"show");0!=b&&n(u,"show");var k=setInterval(function(){e&&(n(t,"hide"),0!=b&&n(u,"hide"),setTimeout(function(){0==b?q.html("").append(e):q.append(e);q.width();w("show",!1);setTimeout(function(){g=!1;a!=d&&f(d,0)},400)},400),clearInterval(k))},50)}};e.on("hashchange",function(){var a=window.location.href,b=a.indexOf("#");d="all";-1<b&&(d=a.substring(b+1));l(d);f(d,0)});r.on("click",".load-case-link",function(){var a=c(this);g=!0;r.ScrollTo({easing:"easeInOutCubic",duration:900,callback:function(){m=
	0;h=g=!1;d=a.attr("href").split("#")[1];l(d);f(d,0)}})});v.on("click",function(){var a=c(this);a.hasClass("active")||(v.removeClass("active"),a.addClass("active"),m=0,h=!1,d=a.attr("href").split("#")[1],l(d),f(d,0))});var z=function(){var a=window.location.href,b=a.indexOf("#");d="all";-1<b&&(d=a.substring(b+1));l(d);f(d,0)};e.load(function(){z();var a=e.height();e.scroll(function(){if(!g&&!h){var b=c(".js-case-item:last-child").offset().top;e.scrollTop()+a>=b&&(m++,f(d,m))}})});var y=c(".js-tags-switch-btn"),
	A=c(".js-more-tags-btn"),p=function(){var a=c(".js-tags-switch-tab.active");a.parent().height(a.innerHeight())};y.on("click",function(){var a=c(this);a.hasClass("active");y.removeClass("active");a.addClass("active");var b=a.closest(".js-tags-switch").find(".js-tags-switch-tab");b.removeClass("active");c(b[a.index()]).addClass("active");p();a=window.location.href;b=a.indexOf("#");-1<b&&(a=a.substring(b+1),"all"!=a&&(a="all",window.location.hash="#all",f(a,0),l(a)))});A.on("click",function(){var a=
	c(this),b=a.nextAll(),d=b.length,e=0,f=setInterval(function(){e>=d&&(p(),clearInterval(f));c(b[e]).removeClass("hide");e++},20);a.remove()});e.load(function(){p()});e.resize(function(){p()})})(jQuery);