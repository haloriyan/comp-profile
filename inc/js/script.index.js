function munculPopup(selector) {
	$(function() {
		$(".bg,"+selector).fadeIn(300);
		$(selector+" .popup").fadeIn(300).css({"top":"0px"});
	});
}
function hilangPopup(selector) {
	$(function() {
		$(".bg,"+selector).fadeOut(300);
		$(selector+" .popup").fadeOut(300).css({"top":"-150%"});
		window.history.pushState("a", "b", "./");
	});
}
$(function() {
	$("#tblContact").click(function() {
		munculPopup("#formContact");
	});
	$("#xPopup").click(function(){
		hilangPopup("#formContact");
	});
	$(".tblHome").click(function() {
		document.location = "../";
	});
	$("#tblMenu").click(function() {
		var aksi = $("#tblMenu").attr("aksi");
		if(aksi == "bkMenu") {
			$(".menu").css({"left":"0px"});
			$("#tblMenu").attr("aksi", "xMenu");
		}else {
			$(".menu").css({"left":"-110%"});
			$("#tblMenu").attr("aksi", "bkMenu");
		}
	});
});
$(document).keydown(function(e) {
	if(e.which == 27) {
		$(".bg,.popupWrapper").fadeOut(290);
		$(".popup").css({"top":"-150%"}).fadeOut(200);
		window.history.pushState("a", "b", "./");
	}
});