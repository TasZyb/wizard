


const carouselElement = document.querySelector("#carousel")

const carousel = new bootstrap.Carousel(carouselElement, {
    interval: false,
    ride: false,
})

let crumbIndex = 0 


function validateForm() {
    const activeSlide = document.querySelector('.carousel-item.active');
    const form = activeSlide.querySelector('form');
    // Перевірка валідності форми
    // console.log(form.checkValidity());
    if (form && !form.checkValidity()) {
      form.classList.add('was-validated');
      return false; // Перехід заборонено
    }
    return true; // Перехід дозволено
}


carouselElement.addEventListener('slide.bs.carousel', function (event) {
    if (!validateForm()) {
      event.preventDefault(); 
    } 
});

const nextCarousel = document.querySelector("#nextCarousel")
const prevCarousel = document.querySelector("#prevCarousel")

// nextCarousel.addEventListener("click", () => {
//   if (validateForm()) {
//     const breadcrumb_item = document.querySelectorAll(".breadcrumb-item")
//     breadcrumb_item[crumbIndex].classList.remove("active")
//     crumbIndex += 1
//     breadcrumb_item[crumbIndex].classList.add("active")
//   } 
// })

// prevCarousel.addEventListener("click", () => {
  
//   if (validateForm()) {
//     const breadcrumb_item = document.querySelectorAll(".breadcrumb-item")
//     breadcrumb_item[crumbIndex].classList.remove("active")
//     crumbIndex -= 1
//     breadcrumb_item[crumbIndex].classList.add("active")
//   } 
  

// })
function updateNavigationButtons() {
  const breadcrumbItems = document.querySelectorAll(".breadcrumb-item");
  const activeItem = document.querySelector('.carousel-item.active');
  const items = document.querySelectorAll('.carousel-item');
  const activeIndex = Array.from(items).indexOf(activeItem);
  const n = parseInt(document.querySelector('#number').value)
  document.querySelector('#prices').innerHTML = n > 0 && n < 11 ? "$1" : n > 10 && n < 101 ? "$10" : n > 100 && n < 1000 ? "$100" : "$1000"
  document.querySelector('#pricesHidden').value = document.querySelector('#number').value
  // Очищаємо всі активні класи
  breadcrumbItems.forEach(item => item.classList.remove("active"));

  // Додаємо активний клас для поточного індексу
  if (breadcrumbItems[activeIndex]) {
    breadcrumbItems[activeIndex].classList.add("active");
  }

  // Оновлення кнопок навігації
  if (prevCarousel) {
    prevCarousel.style.display = activeIndex === 0 ? 'none' : 'block';
  }

  if (nextCarousel) {
    nextCarousel.style.display = activeIndex === items.length - 1 ? 'none' : 'block';
  }
}

carouselElement.addEventListener('slid.bs.carousel', updateNavigationButtons);

updateNavigationButtons();

