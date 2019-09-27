/* global $ */

// Original code from freeCodeCamp landing page tutorial @ https://medium.freecodecamp.org/learn-bootstrap-4-in-30-minute-by-building-a-landing-page-website-guide-for-beginners-f64e03833f33
// $(document).ready(function () {
//     $('.header').height($(window).height());
// });

$(".navbar a").click(function () {
	if ($(window).width() < 768) {
		$("body,html").animate({
			scrollTop:$("#" + $(this).data('value')).offset().top}, 1000)
	}
	else 
	$("body,html").animate({
		scrollTop:$("#" + $(this).data('value')).offset().top - 50 }, 1000)
});

$("button a").click(function () {
	if ($(window).width() < 768) {
		$("body,html").animate({
			scrollTop:$("#" + $(this).data('value')).offset().top - 50 }, 1000)
	}
	else 
	$("body,html").animate({
		scrollTop:$("#" + $(this).data('value')).offset().top - 30 }, 1000)
});

// Edited from codepen @ http://jsfiddle.net/rcdtest/HDQNs/
$(".navbar-link-toggle, ul li a").click(function () {
	$(".navbar-items").toggleClass("open");
});

// From jqueryscript.net Fullscreen Hamburger Overlay
$('#toggle').click(function() {
	$(this).toggleClass('toggle-active');
	$('#overlay').toggleClass('nav-active');
});

$('#nav-link').click(function() {
	$('#overlay').removeClass('nav-active');
	$('#toggle').toggleClass('toggle-active');
});

$('#foot-link').click(function() {
	$('#overlay').removeClass('nav-active');
	$('#toggle').toggleClass('toggle-active');
});

// Edited from codepan @ https://jsfiddle.net/3gLffpjw/2/

$(document).ready(function(){
	$('.hero-area').css('height', $(window).height());
});

$(window).resize(function(){
	$('.hero-area').css('height', $(window).height());
});

$(document).ready(function(){
	$('.hero-bg').css('height', $(window).height());
});

$(window).resize(function(){
	$('.hero-bg').css('height', $(window).height());
});

var linkdiv = document.getElementById("linkDiv");
var aTag = document.createElement('a');
var user = 'mario';
var site = 'anchortagdesign.com';
aTag.setAttribute('href',"mailto:" + user + '@' + site);
aTag.setAttribute('target',"_blank");
aTag.innerText = "mario@anchortagdesign.com";
linkdiv.appendChild(aTag);

// Email obfuscation from:
// https://www.hcidata.info/obfuscate-email-address.htm
// user = 'mario';
// site = 'anchortagdesign.com';
// document.write('<a href=\"mailto:' + user + '@' + site + '\">');
// document.write(user + '@' + site + '</a>');
