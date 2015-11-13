$(document).ready(function () {
	oFunctions.start();
});

var oFunctions = (function functionClousure () {

	function initListeners () {
		$('#select-per-page').on('change', function () {
			var numPerPage = $(this).val();
			
			$('#input-products-per-page').val(numPerPage);
			$('#show-products-per-page').submit();
		});
	}

	return {
		start : function () {
			initListeners();
		}
	}

}) ();