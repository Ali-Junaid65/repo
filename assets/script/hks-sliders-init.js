// Bootstrap 5 only – no jQuery needed
(function () {
  if (!window.bootstrap || !bootstrap.Carousel) return;

  document.querySelectorAll('.carousel').forEach(function (el) {
    // if data-bs-interval present, use it; else defaults to 2600
    var intAttr = el.getAttribute('data-bs-interval');
    var interval = intAttr ? parseInt(intAttr, 10) : 2600;

    new bootstrap.Carousel(el, {
      interval: interval,
      ride: false,
      pause: 'hover',
      touch: true,
      wrap: true,
      keyboard: true
    });
  });
})();
