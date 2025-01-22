<template>
  <div class="container-fluid">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Users</h5>
        <div class="row">
          <div class="col-lg-12 d-flex align-items-stretch">
            <div class="card w-100">
              <div class="card-body p-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                  <button class="btn btn-primary" @click="openEditModal()">Add New User</button>
                </div>
                <div class="table-responsive">
                  <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                      <tr>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Id</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Name</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Email</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Bio</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Profile Image</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Created At</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Updated At</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Action</h6>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr v-for="(user, index) in users" :key="user.id">
                        <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">{{ index + 1 }}</h6>
                        </td>
                        <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">{{ user.name }}</h6>
                        </td>
                        <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">{{ user.email }}</h6>
                        </td>

                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal">{{ user.bio }}</p>
                        </td>
                        <td class="border-bottom-0">
                          <img :src="user.profile_img" alt="Profile Image" class="rounded-circle"
                            style="width: 50px; height: 50px;">
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal">{{ formatDate(user.created_at) }}</p>
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal">{{ formatDate(user.updated_at) }}</p>
                        </td>
                        <td class="border-bottom-0">
                          <button class="btn btn-sm btn-primary">Edit</button>
                          <button class="btn btn-sm btn-danger ms-2">Delete</button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Modal for Adding a New User -->
        <div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="addUserModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="addUserModalLabel">Add New User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form @submit.prevent="addUser">
                  <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" v-model="form.name" class="form-control" id="name" placeholder="Enter Name">
                  </div>
                  <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" v-model="form.email" class="form-control" id="email" placeholder="Enter Email">
                  </div>
                  <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" v-model="form.password" class="form-control" id="password"
                      placeholder="Enter Password">
                  </div>
                  <div class="mb-3">
                    <label for="bio" class="form-label">Bio</label>
                    <textarea class="form-control" v-model="form.bio" id="bio" rows="3"
                      placeholder="Enter Bio"></textarea>
                  </div>
                  <div class="mb-3">
                    <label for="profile_img" class="form-label">Profile Image URL</label>
                    <input type="file" @change="onFileSelect" class="form-control" id="profile_img"
                      placeholder="Enter Profile Image URL">
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button class="btn btn-primary">Save</button>
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
import { onMounted, ref } from 'vue';
import moment from "moment";
export default {
  name: "DashUser",
  setup() {
    const form = ref({
      name: '',
      email: "",
      password: '',
      bio: '',
      profile_img: ''
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

    const addUser = async () => {
      await axios.post('/api/users', form.value)
        .then((res) => {
          if (res.data && res.status === 201) {
            form.value.name = "",
              form.value.email = "",
              form.value.password = "",
              form.value.bio = "",
              form.value.profile_img = ""

            Toast.fire({
              icon: "success",
              title: "user created Successfully"
            });
            let myModal = bootstrap.Modal.getInstance(
              document.getElementById("addUserModal")
            );
            myModal.hide();
            fetchUser()
          }
        })
        .catch((err) => {
          console.log(err)
        })
    }
    const users = ref([]);
    const fetchUser = async () => {
      await axios.get('/api/users')
        .then((res) => {
          console.log(res);
          users.value = res.data;
        })
        .catch((err) => {
          console.log(err);
        })
    }
    const openEditModal = () => {
      let myModal = new bootstrap.Modal(
        document.getElementById("addUserModal"),
        {}
      );
      myModal.show();
    }
    const formatDate = (dateString) => {
      return moment(dateString).format('DD/MM/YYYY'); // Format to dd/mm/yyyy
    };
    onMounted(async () => {
      await fetchUser();
    })
    return {
      addUser,
      form,
      openEditModal,
      users,
      formatDate,
      onFileSelect
    };
  }
}
</script>

<style></style>