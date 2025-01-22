searchForm = document.querySelector('.search-form');

document.querySelector('#search-btn').onclick = () =>{
  searchForm.classList.toggle('active');
}

let loginForm = document.querySelector('.login-form-container');

document.querySelector('#login-btn').onclick = () =>{
  loginForm.classList.toggle('active');
}

document.querySelector('#close-login-btn').onclick = () =>{
  loginForm.classList.remove('active');
}

window.onscroll = () =>{

  searchForm.classList.remove('active');

  if(window.scrollY > 80){
    document.querySelector('.header .header-2').classList.add('active');
  }else{
    document.querySelector('.header .header-2').classList.remove('active');
  }

}

window.onload = () =>{

  if(window.scrollY > 80){
    document.querySelector('.header .header-2').classList.add('active');
  }else{
    document.querySelector('.header .header-2').classList.remove('active');
  }

  fadeOut();

}

function loader(){
  document.querySelector('.loader-container').classList.add('active');
}

function fadeOut(){
  setTimeout(loader, 4000);
}

var swiper = new Swiper(".books-slider", {
  loop:true,
  centeredSlides: true,
  autoplay: {
    delay: 9500,
    disableOnInteraction: false,
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    1024: {
      slidesPerView: 3,
    },
  },
});

var swiper = new Swiper(".featured-slider", {
  spaceBetween: 30,
  loop:true,
  centeredSlides: true,
  autoplay: {
    delay: 3500,
    disableOnInteraction: false,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    0: {
      slidesPerView: 1, // 1 slide for very small screens
    },
    450: {
      slidesPerView: 2, // 2 slides for small screens
    },
    768: {
      slidesPerView: 3, // 3 slides for tablets
    },
    1024: {
      slidesPerView: 4, // 4 slides for desktops
    },
    1440: {
      slidesPerView: 5, // 5 slides for larger screens
    },
    1600: {
      slidesPerView: 6, // 6 slides for very large screens
    },
    1920: {
      slidesPerView: 7, // 7 slides for extra-large screens
    },    
  },
});

var swiper = new Swiper(".single-featured-slider", {
  spaceBetween: 10,
  loop:true,
  centeredSlides: true,
  autoplay: {
    delay: 3500,
    disableOnInteraction: false,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    0: {
      slidesPerView: 1, // 1 slide for very small screens
    },
    450: {
      slidesPerView: 2, // 2 slides for small screens
    },
    768: {
      slidesPerView: 3, // 3 slides for tablets
    },
    1024: {
      slidesPerView: 4, // 4 slides for desktops
    },
    1440: {
      slidesPerView: 5, // 5 slides for larger screens
    },
    1600: {
      slidesPerView: 6, // 6 slides for very large screens
    }, 
  },
});

var swiper = new Swiper(".arrivals-slider", {
  spaceBetween: 10,
  loop:true,
  centeredSlides: true,
  autoplay: {
    delay: 9500,
    disableOnInteraction: false,
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    450: {
      slidesPerView: 2, // 2 slides for small screens
    },
    768: {
      slidesPerView: 3,
    },
    1024: {
      slidesPerView: 4,
    },
    1440: {
      slidesPerView: 5, // 5 slides for larger screens
    },
  },
});

var swiper = new Swiper(".reviews-slider", {
  spaceBetween: 10,
  grabCursor:true,
  loop:true,
  centeredSlides: true,
  autoplay: {
    delay: 3300,
    disableOnInteraction: false,
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    450: {
      slidesPerView: 2, 
    },
    768: {
      slidesPerView: 3,
    },
    1024: {
      slidesPerView: 4,
    },
  },
});

var swiper = new Swiper(".blogs-slider", {
  spaceBetween: 10,
  grabCursor:true,
  loop:true,
  centeredSlides: true,
  autoplay: {
    delay: 9500,
    disableOnInteraction: false,
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    1024: {
      slidesPerView: 3,
    },
  },
});


// Get references to the toggle button and the dropdown menu
const profileToggle = document.getElementById("profile-toggle");
const dropdownMenu = document.getElementById("dropdown-menu");

// Toggle dropdown visibility on button click
profileToggle.addEventListener("click", () => {
  dropdownMenu.classList.toggle("active");
});

// Close the dropdown menu if clicked outside
document.addEventListener("click", (event) => {
  if (!profileToggle.contains(event.target) && !dropdownMenu.contains(event.target)) {
    dropdownMenu.classList.remove("active");
  }
});


const container = document.querySelector('.container-x');
const registerBtn = document.querySelector('.register-btn');
const loginBtn = document.querySelector('.login-btn-x');

registerBtn.addEventListener('click', () => {
    container.classList.add('active');
})

loginBtn.addEventListener('click', () => {
    container.classList.remove('active');
})


function toggleReplyForm(id) {
  const replyForm = document.getElementById(id);
  if (replyForm.style.display === "none" || replyForm.style.display === "") {
      replyForm.style.display = "block";
  } else {
      replyForm.style.display = "none";
  }
}