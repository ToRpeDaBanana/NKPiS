

function Burger() {
	if (window.innerWidth < 1200){
	// const node = document.getElementById("down-nav-menu").childNodes;
	// document.getElementById("up-nav-menu").appendChild(node);
	const parent = document.getElementById('down-nav-menu');
	const children = parent.querySelectorAll('.app-header-nav-menu-1');
	const upNavMenu = document.getElementById("up-nav-menu");
	children.forEach(child => {
		upNavMenu.appendChild(child);
	  });
	console.log(children);
	}
  }




$(document).ready(function() {
	$('.header__burger').click(function(event) {
		$('.header__burger,.header__menu,.nav-footer').toggleClass('active');
		$('body').toggleClass('lock');
		Burger();
	});
});

