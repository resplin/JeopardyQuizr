// IIFE - Immediately Invoked Function Expression
(function(yourcode) {
	// The global jQuery object is passed as a parameter
	yourcode(window.jQuery, window, document);

}(function($, window, document) {
	// $ is now locally scoped
	$(function() {
		// Event handler for button click
		$('#buttonRandom').on('click', getRandom);

		$('#answer-outer').hover(function() {
			$('#answer-inner').removeClass('invisible');
		}, function() {
			$('#answer-inner').addClass('invisible');
		});

		// Dom ready code
		getRandom();
	});

	var monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

	// Rest of code
	function getRandom() {
		$.ajax({
			url:      'http://jservice.io/api/random',
			type:     'GET',
			dataType: 'json',
			success:  function(data) {
				handleResponse(data);
			}
		});
	}

	function handleResponse(data) {
		data = data[0];

		// Air Date
		//var airDate = new Date(data.airdate);
		//var monthText = monthNames[airDate.getMonth()];
		//var dateText = monthText + " " + airDate.getDate() + ", " + airDate.getFullYear();
		//$('#airDate').text(dateText);

		// Category
		$('#category').text(data.category.title);

		// Question
		$('#question').text(data.question);

		// Answer
		$('#answer-inner').html(data.answer);
	}
}));
