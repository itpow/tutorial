// Pollux template scripts
document.addEventListener('DOMContentLoaded', function(){

  // window width
  var wWidth = window.innerWidth;
  // window height
  var wHeight = window.innerHeight;
  window.addEventListener('resize', function() {
    wWidth = window.innerWidth;
  });

  // body
  var body = document.body
  // navbar toggler
  var headerNavbar = document.getElementById('headerNavbar'),
      headerNavbarTogglerHamburger = document.getElementById('navbar-toggler-hamburger');

  headerNavbar.addEventListener('show.bs.offcanvas', function () {
    headerNavbarTogglerHamburger.classList.add('open')
    body.classList.add('offsetcanvas-open')
  })

  headerNavbar.addEventListener('hide.bs.offcanvas', function () {
    headerNavbarTogglerHamburger.classList.remove('open')
    body.classList.remove('offsetcanvas-open')
  })


  // terminal height trigger workspace height

  var workspaceBody = document.getElementById('workspace-body'),
      terminalBody = document.getElementById('terminal-body');
  workspaceBody.style.height = wHeight - 110 + 'px'
  terminalBody.style.height = wHeight - 110 + 'px'

  
});