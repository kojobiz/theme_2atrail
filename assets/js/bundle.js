(function (global, factory) {
	typeof exports === 'object' && typeof module !== 'undefined' ? factory() :
	typeof define === 'function' && define.amd ? define(factory) :
	(factory());
}(this, (function () { 'use strict';

var scrollTopY = 0;

jQuery(document).ready(function() {
  localNavi();
  activeNav();
  addHeaderClass();
  onscrollHeadFollow();
  onClickNav();
  onClickSearchIcon();
  privacy_policy_class();
  localNavi();
});

function activeNav() {
  var url = window.location.href;
  var global_menu_path = getGlobalMenuPath();
  var page_id = jQuery('.page-main').attr('id');
  var body_class = jQuery('body').attr( 'class' );
  const base_url = getBaseUrl();
  jQuery('.global-nav a').addClass('nav-link');
  if( global_menu_path == '' ) {
  	jQuery('.global-nav a[href="'+url+'"]').addClass('active');
  }
  else if( global_menu_path == 'archives' && page_id == 'pg-contribution' || body_class.indexOf('contribution-template') != -1 ) {
  	url = base_url + '/contribution/';
  	jQuery('.global-nav a[href="'+url+'"]').addClass('active');
  }
  // else if( global_menu_path == 'archives' && ['pg-news', 'pg-newsDetail'].includes(page_id) ) {
  // 	url = base_url + '/archives/category/news/';
  // 	jQuery('.global-nav a[href="'+url+'"]').addClass('active');
  // }

  // ↑newsでなくinfoを使用した場合
  else if( global_menu_path == 'archives' && ['pg-info', 'pg-infoDetail'].includes(page_id) ) {
  	url = base_url + '/archives/category/info/';
  	jQuery('.global-nav a[href="'+url+'"]').addClass('active');
  }
  else if( url.match(global_menu_path) ) {
	var url = base_url + '/' + global_menu_path + '/';
  	jQuery('.global-nav a').addClass('nav-link');
  	jQuery('.global-nav a[href="'+url+'"]').addClass('active');
  }
}

function addHeaderClass(){
	var path_url = location.href.split('/');
	if( path_url[3] ){
  		jQuery('header').addClass('header standby fixed js-header');
	} 
	else {
  		jQuery('header').addClass('header js-fix-header js-header');
	}
}

function privacy_policy_class() {
  if( getGlobalMenuPath() == 'privacy-policy' ) {
    jQuery('body').addClass('privacy');
  }
}

function getGlobalMenuPath() {
  const path = location.pathname.split('/')
  if (isLocalhost()) return path[2];
  return path;
}


/**
 * スクロールに応じたヘッダー固定切り替え
 */
function onscrollHeadFollow() {
  var $header = jQuery('.js-fix-header');
  var headerH = $header.outerHeight();
  var overplus = jQuery(window).outerWidth() * 0.1;
  jQuery(window).on('scroll', function() {
    if (jQuery(window).scrollTop() > headerH + overplus) {
      // 固定ヘッダー時
      $header.css({ 'transition': 'transform .5s ease-out' });
      $header.addClass('standby').addClass('fixed');
    } else if (jQuery(window).scrollTop() > headerH) {
      // 固定ヘッダー準備時
      if ($header.hasClass('standby')) {
        $header.css({ 'transition': 'transform .5s ease-out' });
      } else {
        $header.css({ 'transition': '' });
      }
      $header.addClass('standby').removeClass('fixed');
    } else {
      // 通常時
      $header.css({ 'transition': '' });
      $header.removeClass('standby fixed');
    }
  });
}

/**
 * SPハンバーガーメニュー押下時のイベントをセット
 */
function onClickNav() {
  var $toggleNav = jQuery('.js-toggoleNav');
  var $header = jQuery('.js-header');
  $toggleNav.on('click', function() {
    if ($header.hasClass('open')) {
      $header.removeClass('open');
      fixedBase('close');
    } else {
      $header.addClass('open');
      fixedBase('open');
    }
    
  });
}

/**
 * メニュー押下時に背景を固定する
 */
function fixedBase(toggle) {
  var $window = jQuery(window);
  var $body = jQuery('body');

  switch(toggle) {
    case 'open':
      // 現在のスクロール位置を保管
      scrollTopY = $window.scrollTop();
      // 下層コンテナの固定化
      $body.css({
        'position': 'fixed',
        'top': -1 * scrollTopY
      });
      break;
    case 'close':
      $body.attr({ style: '' });
      $window.scrollTop(scrollTopY);
      break;
  }
}

/**
 * PC検索アイコン押下時のイベントをセット
 */
function onClickSearchIcon() {
  var $searchIcon = jQuery('.js-searchIcon');
  var $header = jQuery('.js-header');
  $searchIcon.on('click', function() {
    if ($header.hasClass('search-mode')) {
      $header.removeClass('search-mode');
    } else {
      $header.addClass('search-mode');
      jQuery(document).click(function(event) {
        if(!$(event.target).closest($header).length) {
          $header.removeClass('search-mode');
        }
      });
    }
  });
}

/**
 *  ローカルでhtmlを確認した際に、headerにclassを付与する
 */
function localNavi() {
  var protocol = location.protocol
  if( protocol == "file:" ){
    var path_ary = location.pathname.split('/');
    var file_name = path_ary.pop();
    if( file_name == 'start.html' ){
  		jQuery('header').addClass('header js-fix-header js-header');
    } else {
  		jQuery('header').addClass('header standby fixed js-header');
    }
	} 
}

})));
