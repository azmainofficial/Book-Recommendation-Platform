import './bootstrap';
import { createApp } from 'vue';
import App from './components/App.vue';
import router from './routes/router';

import Swal from 'sweetalert2';
window.Swal = Swal;

const Toast = Swal.mixin({
    toast: true,
    position: "top-end",
    showConfirmButton: false,
    timer: 1000,
    timerProgressBar: true,
    didOpen: (toast) => {
        toast.onmouseenter = Swal.stopTimer;
        toast.onmouseleave = Swal.resumeTimer;
    }
});
window.Toast = Toast;

const app =createApp(App);
app.use(router),
app.mount('#app');