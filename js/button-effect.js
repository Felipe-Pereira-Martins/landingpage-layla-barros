document.addEventListener('DOMContentLoaded', function () {
  const toggleBtn = document.querySelector('.navbar-toggle');
  const navCollapse = document.querySelector('#navbar-collapse-02');
  const navLinks = document.querySelectorAll('.navbar-nav li a');

  // Anima o botão ao clicar
  toggleBtn.addEventListener('click', function () {
    this.classList.toggle('active');
  });

  // Fecha o menu ao clicar em um link
  navLinks.forEach(function (link) {
    link.addEventListener('click', function () {
      $('#navbar-collapse-02').collapse('hide'); // Fecha o menu com jQuery
    });
  });

  // Quando o menu realmente fechar, remove a classe "active" do botão
  $('#navbar-collapse-02').on('hidden.bs.collapse', function () {
    toggleBtn.classList.remove('active');
  });
});
