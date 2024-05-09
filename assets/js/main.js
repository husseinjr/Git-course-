
// navbar togller
const menu_btn = document.querySelector('.hambrgerIcon');
const show = document.querySelector('.header ul');
const head = document.querySelector(".header");
const navItems = document.querySelectorAll('.header ul li');

menu_btn.addEventListener('click', function () {
   head.classList.toggle("header-active");
   menu_btn.classList.toggle('is-active');
   show.classList.toggle('show');
});

function updateActiveNavLink() {
   const currentPage = window.location.href;
   console.log(currentPage);
   navItems.forEach(item => {
      const link = item.querySelector('a');
      if (link.href === currentPage) {
         item.classList.add('active');
      } else {
         item.classList.remove('active');
      }
   });
}
document.addEventListener('DOMContentLoaded', function () {
   updateActiveNavLink();
});

/////////////////////////////////////////
