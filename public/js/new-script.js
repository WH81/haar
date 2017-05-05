// JavaScript Document
$(document).ready(function(){
$(function() {
	
	"use strict";
	
	var topoffset = 50; // Variable for menu height
	
// Activate Scrollspy
/*	$('body').scrollspy({
		target: 'header .navbar',
		offset: topoffset
	});
	
	var hash = $(this).find('li.active a').attr('href');
		if (hash !== 'index.html') {
			$('header nav').addClass('inbody');	
		} else {
			$('header nav').removeClass('inbody');		
		} 
*/	
	
// Add an inbody class to nav when scrollspy event 
/*	$('.navbar-fixed-top').on('activate.bs.scrollspy', function() {
		var hash = $(this).find('li.active a').attr('href');
		if (hash !== 'index.html') {
			$('header nav').addClass('inbody');	
		} else {
			$('header nav').removeClass('inbody');		
		} 
	});
*/ 
// Change positioning of mobile menu icon based on screen size.
/*$(document).ready(function(){
    if($(window).width()<768)
    {
        $('button#mobile-nav').css('float','left');
    }
    $(window).on('resize',function(){
        if($(window).width()<768)
        {
            console.log('here');
              $('button#mobile-nav').css('float','left');
        }
    });
});	
*/	
// Carousel
$('.carousel').carousel({
	interval: 4000,
	wrap: true
	});

});








// Push content down when open mobile menu
/*var selectBody = $('body');
var selectNavbarCollapse = $('.navbar-collapse');

var heightNavbarCollapsed = $('.navbar').outerHeight(true);
var heightNavbarExpanded = 0;

paddingSmall();

selectNavbarCollapse.on('show.bs.collapse', function () {
  if (heightNavbarExpanded == 0 ) heightNavbarExpanded = heightNavbarCollapsed + $(this).outerHeight(true);
  paddingGreat();
})

selectNavbarCollapse.on('hide.bs.collapse', function () {
  paddingSmall();
})

$(window).resize( function () {
  if (( document.documentElement.clientWidth > 767 ) && selectNavbarCollapse.hasClass('in') ) {
    selectNavbarCollapse.removeClass('in').attr('aria-expanded','false');
    paddingSmall();
  }
});

function paddingSmall() {
  selectBody.css('padding-top', heightNavbarCollapsed + 'px');
}

function paddingGreat() {
  selectBody.css('padding-top', heightNavbarExpanded + 'px');
}

*/


// Closes mobile menu when anchor link is clicked
$(document).on('click','.navbar-collapse.in',function(e) {
    if( $(e.target).is('a') && $(e.target).attr('class') != 'dropdown-toggle' ) {
        $(this).collapse('hide');
    }
});



// usage: log('inside coolFunc', this, arguments);
// paulirish.com/2009/log-a-lightweight-wrapper-for-consolelog/
/*window.log = function f(){ log.history = log.history || []; log.history.push(arguments); if(this.console) { var args = arguments, newarr; args.callee = args.callee.caller; newarr = [].slice.call(args); if (typeof console.log === 'object') log.apply.call(console.log, console, newarr); else console.log.apply(console, newarr);}};*/

// make it safe to use console.log always
/*(function(a){function b(){}for(var c="assert,count,debug,dir,dirxml,error,exception,group,groupCollapsed,groupEnd,info,log,markTimeline,profile,profileEnd,time,timeEnd,trace,warn".split(","),d;!!(d=c.pop());){a[d]=a[d]||b;}})
(function(){try{console.log();return window.console;}catch(a){return (window.console={});}}());

});*/ // close tag from line one $(document).ready(function()) on this sheet

// Change the up and down menu arrows in before and after panel-title section
        $(document).ready(function() {
            $('.collapse').on('shown.bs.collapse', function () {
                $(this).parent().find('.glyphicon-menu-down').removeClass('glyphicon-menu-down').addClass('glyphicon-menu-up');
                }).on('hidden.bs.collapse', function () {
                $(this).parent().find('.glyphicon-menu-up').removeClass('glyphicon-menu-up').addClass('glyphicon-menu-down');
                });
// End change the up and down menu arrows in before and after panel-title section
// Create a functional Open and Close All buttons within the before and after accordion section		
		/*$('#btnOpenAll').click(function(){
				$('.panel-collapse.collapse').collapse('show');
			});
		$('#btnCloseAll').click(function() {
				$('.panel-collapse.collapse.in').collapse('hide');		
			});*/
		});
// End create a functional Open and Close All buttons within the before and after accordion section			
    
	

