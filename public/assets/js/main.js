/**
* Template Name: NiceAdmin - v2.2.2
* Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/
$(function() {
  "use strict";

  /**
   * Easy selector helper function
   */
  const select = (el, all = false) => {
    el = el.trim()
    if (all) {
      return [...document.querySelectorAll(el)]
    } else {
      return document.querySelector(el)
    }
  }

  /**
   * Easy event listener function
   */
  const on = (type, el, listener, all = false) => {
    if (all) {
      select(el, all).forEach(e => e.addEventListener(type, listener))
    } else {
      select(el, all).addEventListener(type, listener)
    }
  }

  /**
   * Easy on scroll event listener
   */
  const onscroll = (el, listener) => {
    el.addEventListener('scroll', listener)
  }

  /**
   * Sidebar toggle
   */
  if (select('.toggle-sidebar-btn')) {
    on('click', '.toggle-sidebar-btn', function(e) {
      select('body').classList.toggle('toggle-sidebar')
    })
  }

  /**
   * Navbar links active state on scroll
   */
  let navbarlinks = select('#navbar .scrollto', true)
  const navbarlinksActive = () => {
    let position = window.scrollY + 200
    navbarlinks.forEach(navbarlink => {
      if (!navbarlink.hash) return
      let section = select(navbarlink.hash)
      if (!section) return
      if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
        navbarlink.classList.add('active')
      } else {
        navbarlink.classList.remove('active')
      }
    })
  }
  window.addEventListener('load', navbarlinksActive)
  onscroll(document, navbarlinksActive)

  /**
   * Toggle .header-scrolled class to #header when page is scrolled
   */
  let selectHeader = select('#header')
  if (selectHeader) {
    const headerScrolled = () => {
      if (window.scrollY > 100) {
        selectHeader.classList.add('header-scrolled')
      } else {
        selectHeader.classList.remove('header-scrolled')
      }
    }
    window.addEventListener('load', headerScrolled)
    onscroll(document, headerScrolled)
  }

  /**
   * Back to top button
   */
  let backtotop = select('.back-to-top')
  if (backtotop) {
    const toggleBacktotop = () => {
      if (window.scrollY > 100) {
        backtotop.classList.add('active')
      } else {
        backtotop.classList.remove('active')
      }
    }
    window.addEventListener('load', toggleBacktotop)
    onscroll(document, toggleBacktotop)
  }

  // Active menu link

  let url = window.location.href;

    if(url.indexOf('/create') < -1){
        $('#sidebar .nav-link').addClass('collapsed');
        $('#sidebar #Add-stu').removeClass('collapsed');
    }
    else if(url.includes('list')){
        $('#sidebar .nav-link').addClass('collapsed');
        $('#sidebar #showList').removeClass('collapsed');
    }
    else if(url.indexOf('index-escape') > -1){
        $('#sidebar .nav-link').addClass('collapsed');
        $('#sidebar #index-escape').removeClass('collapsed');
    }
    else if(url.indexOf('index-escape/create') < -1){
        $('#sidebar .nav-link').addClass('collapsed');
        $('#sidebar #index-escape-create').removeClass('collapsed');
    }
    else if(url.indexOf('index-exit/index') > -1){
        $('#sidebar .nav-link').addClass('collapsed');
        $('#sidebar #index-exit-index').removeClass('collapsed');
    }
    else if(url.indexOf('index-exit/create') > -1){
        $('#sidebar .nav-link').addClass('collapsed');
        $('#sidebar #index-exit-create').removeClass('collapsed');
    }

 // calcAge()
    $('.form-field #Birdth').change(function(){

        let date = new Date();

        let Birdth = new Date($('.form-field #Birdth').val());

        $('.form-field #Age').val(( date.getFullYear() - Birdth.getFullYear() ));

    });

    $("#print").on('click', function(){
        window.print();
    });

});
