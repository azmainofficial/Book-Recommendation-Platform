<template>
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <div
            class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
            <div class="d-flex align-items-center justify-content-center w-100">
                <div class="row justify-content-center w-100">
                    <div class="col-md-8 col-lg-6 col-xxl-3">
                        <div class="card mb-0">
                            <div class="card-body">
                                <a href="./index.html" class="text-nowrap logo-img text-center d-block py-3 w-100">
                                    <img src="../assets/images/logos/dark-logo.svg" width="180" alt="">
                                </a>
                                <p class="text-center">BOI PECHA</p>
                                <form @submit.prevent="adminLogin">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Email</label>
                                        <input type="email" v-model="form.email" class="form-control"
                                            id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-4">
                                        <label for="exampleInputPassword1" class="form-label">Password</label>
                                        <input type="password" v-model="form.password" class="form-control"
                                            id="exampleInputPassword1">
                                    </div>
                                    <button class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">SignIn</button>
                                </form>
                                <div class="d-flex align-items-center justify-content-center">
                                    <p class="fs-4 mb-0 fw-bold">New to Modernize?</p>
                                    <router-link to="/admin-register" class="text-primary fw-bold ms-2">Create an
                                        account</router-link>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios';
import { ref } from 'vue';
import { useRouter } from 'vue-router';
export default {
    name: "Login",
    setup() {
        const router = useRouter();
        const form = ref({
            email: '',
            password: ''
        })
        const adminLogin = async () => {
            await axios.post('/api/admin/login', form.value)
                .then((res) => {
                    console.log(res.data)
                    if (res.data && res.status === 200) {
                        router.push({ name: "BackDashboard" });
                        form.value.email = "",
                            form.value.password = "";
                        localStorage.setItem('admin_id', res.data.admin.id);
                        localStorage.setItem('admin_email', res.data.admin.email);
                        localStorage.setItem('profile_img', res.data.admin.profile_img);
                        Toast.fire({
                            icon: "success",
                            title: "Admin Successfully Loggedin"
                        });
                    }
                })
                .catch((err) => {
                    Toast.fire({
                        icon: "warning",
                        title: "invalid email or password or input value"
                    });
                })
        }
        return {
            form,
            adminLogin
        }
    }
}
</script>

<style></style>