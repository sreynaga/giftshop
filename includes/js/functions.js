$(document).ready(function () {
	oFunctions.start();
});

var oFunctions = (function functionClousure () {

	function initListeners () {
		$('#select-per-page').on('change', function () {
			var numPerPage = $(this).val();
			window.location.href = $('#base-url').val() + '/' + $('#category').val() + '/' + numPerPage;
		});
	}

	return {
		start : function () {
			initListeners();
		}
	}

}) ();