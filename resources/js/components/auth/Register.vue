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
                                <form @submit.prevent="addAdmin">
                                    <div class="mb-2">
                                        <label for="exampleInputtext1" class="form-label mb-0">Name</label>
                                        <input type="text" v-model="form.name" class="form-control"
                                            id="exampleInputtext1" aria-describedby="textHelp">
                                    </div>
                                    <div class="mb-2">
                                        <label for="exampleInputEmail1" class="form-label mb-0">Email Address</label>
                                        <input type="email" v-model="form.email" class="form-control"
                                            id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-2">
                                        <label for="exampleInputPassword1" class="form-label mb-0">Password</label>
                                        <input type="password" v-model="form.password" class="form-control"
                                            id="exampleInputPassword1">
                                    </div>
                                    <div class="mb-2">
                                        <label for="exampleInputPassword1" class="form-label mb-0">Confirm
                                            Password</label>
                                        <input type="password" v-model="form.password_confirmation" class="form-control"
                                            id="exampleInputPassword1">
                                    </div>
                                    <div class="mb-2">
                                        <label for="exampleInputtext1" class="form-label mb-0">bio</label>
                                        <input type="text" v-model="form.bio" class="form-control mb-0"
                                            id="exampleInputtext1" aria-describedby="textHelp">
                                    </div>
                                    <div class="mb-3">
                                        <label for="img_url" class="form-label mb-0">Profile image</label>
                                        <input type="file" @change="onFileSelect" class="form-control" id="img_url"
                                            placeholder="Enter Image URL">
                                    </div>
                                    <button class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Sign Up</button>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <p class="fs-4 mb-0 fw-bold">Already have an Account?</p>
                                        <router-link to="/admin-login" class="text-primary fw-bold ms-2">Sign
                                            In</router-link>
                                    </div>
                                </form>
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
    name: "Register",
    setup() {
        const router = useRouter();
        const form = ref({
            name: "",
            email: "",
            password: "",
            password_confirmation: "",
            bio: "",
            profile_img: ""
        })

        const onFileSelect = (event) => {
            const file = event.target.files[0];
            if (file.size > 1048576) {
                Toast.fire({
                    icon: "warning",
                    title: "Image must be less than 1 MB!",
                });
            } else {
                const reader = new FileReader();
                reader.onload = (e) => {
                    form.value.profile_img = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        };

        const addAdmin = async () => {
            await axios.post('/api/admins', form.value)
                .then((res) => {
                    console.log(res)
                    if (res.data && res.status === 201) {
                        router.push({ name: 'Login' });
                        form.value.name = "",
                            form.value.email = "",
                            form.value.password = "",
                            form.value.password_confirmation = "",
                            form.value.bio = "",
                            form.value.profile_img = "",
                            Toast.fire({
                                icon: "success",
                                title: "Admin Successfully Registered"
                            });
                    }
                })
                .catch((err) => {
                    Toast.fire({
                        icon: "warning",
                        title: "some of problem for input"
                    });
                })
        }
        return {
            form,
            onFileSelect,
            addAdmin
        }
    }
}
</script>

<style></style>