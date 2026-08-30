document.addEventListener('click', function (e) {
  var link = e.target.closest('a[href^="#"]');
  if (!link) return;
  var id = link.getAttribute('href');
  if (id.length < 2) return;
  var target = document.querySelector(id);
  if (!target) return;
  e.preventDefault();
  window.scrollTo({ top: target.getBoundingClientRect().top + window.scrollY - 80, behavior: 'smooth' });
});

/* Menu responsivo (hamburguer) */
(function () {
  var btn = document.querySelector('.nav-toggle');
  var bar = document.querySelector('.topbar');
  if (!btn || !bar) return;
  function close() {
    bar.classList.remove('is-open');
    btn.setAttribute('aria-expanded', 'false');
  }
  btn.addEventListener('click', function () {
    var open = bar.classList.toggle('is-open');
    btn.setAttribute('aria-expanded', open ? 'true' : 'false');
  });
  var links = document.querySelectorAll('#riscotex-nav a');
  for (var i = 0; i < links.length; i++) {
    links[i].addEventListener('click', close);
  }
  window.addEventListener('resize', function () {
    if (window.innerWidth >= 1100) close();
  });
})();
