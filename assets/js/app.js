window.FModal = {
    create: function($widgetObject) {
        $widgetObject.attr("data-reveal-id", $widgetObject.attr("id") + "_modal");
        $widgetObject
        .find(".reveal-modal")
        .attr("id", $widgetObject.attr("id") + "_modal");
    }
};

$(function() {
	$(document).foundation();
});