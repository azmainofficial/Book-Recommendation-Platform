export const loadStylesheets = () => {
    const link = document.createElement('link');
    link.rel = 'stylesheet';
    link.href = '/user/css/user.css';
    document.head.appendChild(link);

    const link2 = document.createElement('link');
    link2.rel = 'stylesheet';
    link2.href = '/user/css/all.min.css';
    document.head.appendChild(link2);
};

export const initializeInteractions = () => {
    const searchForm = document.querySelector('.search-form');
    document.querySelector('#search-btn').onclick = () => {
        searchForm.classList.toggle('active');
    };

    const loginForm = document.querySelector('.login-form-container');
    document.querySelector('#login-btn').onclick = () => {
        loginForm.classList.toggle('active');
    };
    document.querySelector('#close-login-btn').onclick = () => {
        loginForm.classList.remove('active');
    };

    window.onscroll = () => {
        searchForm.classList.remove('active');
        if (window.scrollY > 80) {
            document.querySelector('.header .header-2').classList.add('active');
        } else {
            document.querySelector('.header .header-2').classList.remove('active');
        }
    };

    window.onload = () => {
        if (window.scrollY > 80) {
            document.querySelector('.header .header-2').classList.add('active');
        } else {
            document.querySelector('.header .header-2').classList.remove('active');
        }
    };

    const profileToggle = document.getElementById("profile-toggle");
    const dropdownMenu = document.getElementById("dropdown-menu");

    profileToggle.addEventListener("click", () => {
        dropdownMenu.classList.toggle("active");
    });

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
    });

    loginBtn.addEventListener('click', () => {
        container.classList.remove('active');
    });

    window.toggleReplyForm = (id) => {
        const replyForm = document.getElementById(id);
        if (replyForm.style.display === "none" || replyForm.style.display === "") {
            replyForm.style.display = "block";
        } else {
            replyForm.style.display = "none";
        }
    };
};
