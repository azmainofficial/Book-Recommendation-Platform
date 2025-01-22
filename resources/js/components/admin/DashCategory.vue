<template>
  <div class="container-fluid">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Category</h5>
        <!-- Add Category Modal -->
        <div class="modal fade" id="addCategoryModal" tabindex="-1" aria-labelledby="addCategoryModalLabel"
          aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="addCategoryModalLabel" @click="openEditModal()">Add Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form id="addCategoryForm" enctype="multipart/form-data" @submit.prevent="submitCategory">
                  <!-- Category Name -->
                  <div class="mb-3">
                    <label for="categoryName" class="form-label">Category Name</label>
                    <input v-model="categoryForm.categoryName" type="text" class="form-control" id="categoryName"
                      name="category_name" placeholder="Enter category name" required>
                  </div>
                  <!-- Relatable ID -->
                  <div class="mb-3">
                    <label for="relatableId" class="form-label">Relatable ID</label>
                    <input v-model="categoryForm.relatableId" type="number" class="form-control" id="relatableId"
                      name="relatable_id" placeholder="Enter relatable ID" required>
                  </div>
                  <!-- Image Upload -->
                  <div class="mb-3">
                    <label for="categoryImage" class="form-label">Image</label>
                    <input @change="onFileSelect" type="file" class="form-control" id="categoryImage" name="image"
                      accept="image/*" required>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" form="addCategoryForm" class="btn btn-primary">Add Category</button>
              </div>
            </div>
          </div>
        </div>

        <!-- Add Category Button to Trigger Modal -->
        <button type="button" @click="openEditModal()" class="btn btn-primary">
          Add Category
        </button>

        <div class="row">
          <div class="col-lg-12 d-flex align-items-stretch">
            <div class="card w-100">
              <div class="card-body p-4">
                <div class="table-responsive">
                  <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                      <tr>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Id</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Image</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Category Name</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Relatable ID</h6>
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
                      <tr v-for="(category, index) in categories" :key="category.id">
                        <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">{{ index + 1 }}</h6>
                        </td>
                        <td class="border-bottom-0">
                          <img :src="`/backend/images/users/${category.image}`" alt="User Image"
                            style="width: 50px; height: 50px;">
                        </td>
                        <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-1">{{ category.category_name }}</h6>
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal">{{ category.relatable_id }}</p>
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal">{{ formatDate(category.created_at) }}</p>
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal">{{ formatDate(category.updated_at) }}</p>
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


      </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios';
import { onMounted, ref } from 'vue';
import moment from "moment";

export default {
  name: "DashCategory",
  setup() {
    const file = ref('');
    const categoryForm = ref({
      categoryName: "",
      relatableId: "",
      image: "",

    });
    const categories = ref([]);
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
          categoryForm.value.image = e.target.result;
        };
        reader.readAsDataURL(file);
      }
    };
    const submitCategory = async () => {
      await axios.post('api/categories', categoryForm.value)
        .then((res) => {
          console.log(res)
        })
        .catch((err) => {
          console.log(err)
        })
    }
    const fetchCategory = async () => {
      await axios.get('/api/categories')
        .then((res) => {
          categories.value = res.data;
        })
        .catch((err) => {
          console.log(err);
        })
    }
    const openEditModal = () => {
      let myModal = new bootstrap.Modal(
        document.getElementById("addCategoryModal"),
        {}
      );
      myModal.show();
    }
    const formatDate = (dateString) => {
      return moment(dateString).format('DD/MM/YYYY');
    };
    onMounted(async () => {
      await fetchCategory();
    })
    return {
      openEditModal,
      categories,
      formatDate,
      categoryForm,
      onFileSelect,
      submitCategory

    };
  }
}
</script>

<style scoped></style>