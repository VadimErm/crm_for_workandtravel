if (typeof FORUM === "undefined" || !FORUM) {
	var FORUM = {};
}

FORUM.toggleCats = function() {
	return {
		init : function() {
			$("#brd-index div.main-head").css({
				cursor : "pointer"
			}).prepend('<p class="options toggler"><span><!-- --></span></p>');
			
			var listToggled = $.cookie("fancy_toggle_cats");
			if (!listToggled || listToggled == undefined || listToggled.length < 1) {
				listToggled = new Array();
			} else {
				listToggled = listToggled.split(":");
				listToggled = _.map(listToggled, function(num) {
					return parseInt(num, 10);
				});
			}

			$("#brd-index div.main-head")
				.click(
					function() {
						var cid = parseInt($(this).next().next().attr("id").split("category")[1], 10) || 0, cookie = '';
						
						if (!cid) {
							return;
						}
						
						if ($(this).hasClass("catToggled")) {
							$(this).show(function() {
								$("#category"+cid).animate({
									height : "show"
								}, 100, "swing", function(){
									$(this).prev().animate({height : "show"}, 50, "swing");
								});
								$(this).removeClass("catToggled");
							});
							listToggled = _.without(listToggled,cid);
						} else {
							$("#category"+cid).animate({
								height : "hide"
							}, 100, "swing",function(){
								$(this).prev().animate({
									height : "hide"	}, 50, "swing", function(){
										$(this).prev().addClass("catToggled");
									});
							});
							
							listToggled.push(cid);

						}						
						if (listToggled.length > 0) {
							cookie = _.uniq(listToggled)
									.join(":");
						} else {
							cookie = null;
						}
						$.cookie("fancy_toggle_cats", cookie, {
							expires : 99999,
							path : "/"
						});						
			});
		}
	};
}();
jQuery(function() {
	FORUM.toggleCats.init();
});