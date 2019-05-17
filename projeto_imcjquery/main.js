$(document).ready(function() {
	$('button').bind('click', function() {
		var height = $('#height').val();
		var weight = $('#weight').val();

		height = height.replace(',', '.');
		weight = weight.replace(',', '.');

		var bmi = weight / (height * height);
		bmi = bmi.toFixed(2);

		if (bmi < 16) {
			var description = 'Extremely low underweight';
		} else if (bmi >= 16 && bmi < 16.99) {
			var description = 'Very underweight';
		} else if (bmi >= 17 && bmi < 18.49) {
			var description = 'Underweight';
		} else if (bmi >= 18.50 && bmi < 24.99) {
			var description = 'Ideal weight';
		} else if (bmi >= 25 && bmi < 29.99) {
			var description = 'Overweight';
		} else if (bmi >= 30 && bmi < 34.99) {
			var description = 'Obesity I';
		} else if (bmi >= 35 && bmi < 39.99) {
			var description = 'Obesity II';
		} else if (bmi >= 40) {
			var description = 'Obesity III';
		}

		$('#result').html('Your BMI is equal to: ' + bmi + ' kg/m² and your status is: ' + description);
	});
});