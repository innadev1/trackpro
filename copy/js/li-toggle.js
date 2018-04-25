$(document).ready(function(){	
	var button = document.getElementById('this-menu');
	var actions = {
		1: function() {
			$( "#menu-content" ).slideToggle( "slow", function() {
			});
		},
		2: function() {
			$( "#menu-content" ).slideToggle( "slow", function() {
			});
		}
	};
	var counter = 0;
	button.onclick = function() {
		actions[counter = (counter % 2) + 1]();
	}
});