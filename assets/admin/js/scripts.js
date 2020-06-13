// ADMIN

// real-time update H1
var titleInput = document.querySelector('#form form input'),
	titleHeading = document.querySelector('h1#title');

if (titleInput) {
	titleInput.addEventListener('focus', () => {
		window.setInterval(() => {
			titleHeading.innerText = titleInput.value;
		}, 5000);
	});
}

window.setInterval(() => {
	if (document.activeElement === titleInput) {
		titleHeading.innerText = titleInput.value;
	}
}, 100);

// fade out effect
// var fadeActive = true;
// var logoutBtn = document.querySelector('header nav a:last-of-type');

// if (document.querySelector('#fade')) {
// 	let fade = document.querySelector('#fade');
// 	window.onload = function() {
// 		if (fadeActive) {
// 			fade.classList.add('out');
// 		}
// 	};
// 	fadeActive = false;
// 	console.log(fadeActive);
// }

// logoutBtn.addEventListener('click', () => {
// 	fadeActive = true;
// 	fade.classList.remove('out');
// });
