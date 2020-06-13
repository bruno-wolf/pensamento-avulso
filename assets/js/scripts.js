// DOWN BTN
var $down_btn = document.querySelector('#go-down'),
	$target_section = document.querySelector('.container');

$down_btn.addEventListener('click', () => {
	$target_section.scrollIntoView();
});

// SCROLL TOP TOP
var btnTop = document.querySelector('#go-top');

window.onscroll = function() {
	scrollFunction();
};

function scrollFunction() {
	if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
		btnTop.classList.add('show');
		// btnTop.style.opacity = '1';
	} else {
		btnTop.classList.remove('show');
		// btnTop.style.opacity = '0';
	}
}

btnTop.addEventListener('click', () => {
	document.body.scrollTop = 0; // For Safari
	document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
});

// CHECKED NAV
const nav = document.querySelectorAll('header nav a'),
	bodyClass = document.querySelector('body').classList.value;

nav.forEach((element) => {
	if (element.href == bodyClass) {
		element.classList.add('selected');
	}
});
