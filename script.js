function toggleMenu() {
	if (document.getElementById("menu-menu").getAttribute('class') === 'show-nav') {
	document.getElementById("menu-menu").className = "hide-nav";
} else {
	document.getElementById("menu-menu").className = "show-nav";
}
}