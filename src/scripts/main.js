var WOW_APP = {
	// Break points
	xs: 0,
	sm: 576,
	md: 768,
	lg: 992,
	xl: 1200,
	xxl: 1400,
	wow_admin_toolbar: function wow_admin_toolbar() {
		if ($('body.admin-control').length) {
			$('#page').append('<div id="admin-space"></div>')
		}
	},
	wow_clear_canvas_menu: function wow_clear_canvas_menu(e) {
		$('header.site-header .menu-offcanvas-'+e).removeAttr('style')
	},
	wow_gen_canvas_menu: function wow_gen_canvas_menu(e) {
		// Off canvas menu toggle
		var getHeaderNormal = $('header#header').outerHeight(true)
		if($('header#header .navbar').hasClass('navbar-expand-'+e)){
			$('header.site-header .menu-offcanvas-'+e).css({
				'top': getHeaderNormal+'px'
			})
		} else {
			$('header.site-header .menu-offcanvas-'+e).removeAttr('style')
		}
	},
	wow_hover_menu: function wow_hover_menu(e) {
		// Menu hover with breakpoint
		$('header.site-header .navbar-expand-'+e+' #site-navigation li.menu-item-has-children').hover(function(){
			$(this).addClass('menu-hover')
		}, function(){
			$(this).removeClass('menu-hover')
		})
	},
	wow_fixed_header: function wow_fixed_header() {
		// Fixed header will be add padding to the html element
		var getHeader = $('header#header.fixed-top').outerHeight(true)
		if (getHeader) {
			$('html').css({
				'padding-top': getHeader + 'px'
			})
		}
	},
	wow_toggle_ofcanvas: function wow_toggle_ofcanvas() {
		// When toggle menu scrolled
		if($('header#header:not(.fixed-top)')) {
			$('header#header .navbar-toggler.navbar-offcanvas').addClass('collapsed')
			$('header#header .primary-menu-container').removeClass('open')
		}
	},
	wow_active_header: function wow_active_header() {
		// When window is scrolled
		var st = $(window).scrollTop();
		if (st > 0) {
			$('header#header.fixed-top').addClass('active')
			WOW_APP.wow_toggle_ofcanvas()
		} else {
			$('header#header.fixed-top').removeClass('active')
		}
	},
	wow_canvas_header: function wow_canvas_header() {
		WOW_APP.wow_gen_canvas_menu('all')
		if($(window).width() < WOW_APP.sm){
			WOW_APP.wow_gen_canvas_menu('sm')
		} else {
			WOW_APP.wow_clear_canvas_menu('sm')
		}
		if($(window).width() <= WOW_APP.md){
			WOW_APP.wow_gen_canvas_menu('md')
		} else {
			WOW_APP.wow_clear_canvas_menu('md')
		}
		if($(window).width() <= WOW_APP.lg){
			WOW_APP.wow_gen_canvas_menu('lg')
		} else {
			WOW_APP.wow_clear_canvas_menu('lg')
		}
		if($(window).width() <= WOW_APP.xl){
			WOW_APP.wow_gen_canvas_menu('xl')
		} else {
			WOW_APP.wow_clear_canvas_menu('xl')
		}
		if($(window).width() <= WOW_APP.xxl){
			WOW_APP.wow_gen_canvas_menu('xxl')
		} else {
			WOW_APP.wow_clear_canvas_menu('xxl')
		}
	},
	wow_get_header_hover: function wow_get_header_hover() {
		// TODO: read this one again 
		if($(window).width() > 0){
			WOW_APP.wow_hover_menu('keep')
		}
		if($(window).width() >= WOW_APP.sm){
			WOW_APP.wow_hover_menu('sm')
		}
		if($(window).width() >= WOW_APP.md){
			WOW_APP.wow_hover_menu('md')
		}
		if($(window).width() >= WOW_APP.lg){
			WOW_APP.wow_hover_menu('lg')
		}
		if($(window).width() >= WOW_APP.xl){
			WOW_APP.wow_hover_menu('xl')
		}
		if($(window).width() >= WOW_APP.xxl){
			WOW_APP.wow_hover_menu('xxl')
		}
	}
}

///////////////////////////////////////////////////
// INIT APP 
///////////////////////////////////////////////////
wowDOMChange(() => {
});

$(function() {
	WOW_APP.wow_fixed_header()
});

$( document ).ready(function() {
	WOW_APP.wow_fixed_header()
	WOW_APP.wow_canvas_header()
	WOW_APP.wow_get_header_hover()
	WOW_APP.wow_admin_toolbar()
});

$(window).scroll(function () {
	WOW_APP.wow_active_header()
});

$(window).resize(function () {
	WOW_APP.wow_fixed_header()
	WOW_APP.wow_canvas_header()
	WOW_APP.wow_get_header_hover()
});