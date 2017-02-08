window.onload = function() {

	document.onclick = function() {
		// Close the nav onclick anywere else
		if (event.target.getAttribute('id') != 'nav-toggle' && document.querySelector('nav').getAttribute('class') == 'open') {
			document.querySelector('nav').setAttribute('class', 'closed');
		}
	}

	// Toggle the nav menu to visible on click of 'nav-toggle' element
	document.getElementById('nav-toggle').onclick = function () {
		toggleNavMenu();
	}
}

// function to toggle the nav menu with classes 'open' and 'closed'
function toggleNavMenu() {
	var nav = document.querySelector('nav');
	var status = nav.getAttribute('class');

	if (status == 'open') {
		nav.setAttribute('class', 'closed');
	} else {
		nav.setAttribute('class', 'open');
	}
}