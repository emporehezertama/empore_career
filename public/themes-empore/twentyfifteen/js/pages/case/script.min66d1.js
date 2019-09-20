(function ($) {
	var $document = $(document),
		$window = $(window);

	var casePopupOpen = $(".js-case-popup-open"),
		popupSection = $(".js-popup-section"),
		popupContainer = $(".js-popup-container"),
		closePopupSection = $(".js-close-popup-section");

	var popupFormReset = function(){
		var fields = popupSection.find(".js-material-field");

		fields.each(function(){
			var field = $(this);

			field.removeClass("material-field--focus material-field--filled");
			field.find("input").blur();
		});
	};

	var closeCasePopup = function(){
		popupSection.removeClass("visible");

		setTimeout(function(){
			popupFormReset();

			popupSection.removeClass("active");
			popupSection.find(".js-after-case-download").removeClass("active");
		}, 310);
	};

	casePopupOpen.on("click", function(){
		popupSection.addClass("active");
		popupSection.width();
		popupSection.addClass("visible");
	});

	closePopupSection.on("click", function(){
		closeCasePopup();
	});

	$document.click(function (e) {
		if ($(e.target).closest(".js-popup-container").length || $(e.target).closest(".js-case-popup-open").length){
			return;
		}

		closeCasePopup();

		e.stopPropagation();
	});

	//
	var openCaseFormBtn = $(".js-open-case-form-btn"),
		caseForm = $(".js-case-form");

	var caseFormHeightRecalc = function () {
		if (caseForm.hasClass("active")) {
			var caseFormHeight = caseForm.children().innerHeight();

			caseForm.height(caseFormHeight);
		}
	};

	openCaseFormBtn.on("click", function (e) {
		e.preventDefault();

		if (!caseForm.hasClass("active")) {
			var caseFormHeight = caseForm.children().innerHeight();

			caseForm.height(caseFormHeight);
		} else {
			caseForm.height(0);
		}

		caseForm.toggleClass("active");
	});

	if (caseForm.length) {
		$window.resize(caseFormHeightRecalc);
	}

})(jQuery);