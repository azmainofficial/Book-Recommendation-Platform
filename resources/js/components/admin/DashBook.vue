<template>
  <div class="container-fluid">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Books</h5>
        <!-- Add Category Modal -->
        <div class="modal fade" id="addBookModal" tabindex="-1" aria-labelledby="addBookModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content" style="width: 700px;">
              <div class="modal-header">
                <h5 class="modal-title" id="addBookModalLabel">Add New Book</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form @submit.prevent="addBooks">
                  <div class="mb-1">
                    <label for="series" class="form-label mb-0">Series</label>
                    <input type="text" v-model="form.series" class="form-control" id="series"
                      placeholder="Enter Series">
                  </div>
                  <div class="mb-1">
                    <label for="title" class="form-label mb-0">Title</label>
                    <input type="text" v-model="form.title" class="form-control" id="title" placeholder="Enter Title">
                  </div>
                  <div class="mb-1">
                    <label for="sub_title" class="form-label mb-0">Sub Title</label>
                    <input type="text" v-model="form.sub_title" class="form-control" id="sub_title"
                      placeholder="Enter Sub Title">
                  </div>
                  <div class="mb-1">
                    <label for="author_id" class="form-label mb-0">Author ID</label>
                    <select class="form-select" v-model="form.author_id">
                      <option selected value=" " disabled>Open this select menu</option>
                      <option v-for="author in authors" :key="author.id" :value="author.id">
                        {{ author.name }}
                      </option>
                    </select>
                  </div>
                  <div class="mb-1">
                    <label for="category_id" class="form-label mb-0">Category ID</label>
                    <select class="form-select" v-model="form.categories" multiple>
                      <option selected value=" " disabled>Open this select menu</option>
                      <option v-for="category in categories" :key="category.id" :value="category.id">
                        {{ category.category_name }}
                      </option>
                    </select>
                  </div>
                  <div class="mb-1">
                    <label for="img_url" class="form-label mb-0">Image URL</label>
                    <input type="file" @change="onFileSelect" class="form-control" id="img_url"
                      placeholder="Enter Image URL">
                  </div>
                  <div class="mb-1">
                    <label for="pdf_url" class="form-label mb-0">PDF URL</label>
                    <input type="file" @change="onFileSelect2" class="form-control" id="pdf_url"
                      placeholder="PDF">
                  </div>
                  <div class="mb-1">
                    <label for="language" class="form-label mb-0">Language</label>
                    <input type="text" v-model="form.language" class="form-control" id="language"
                      placeholder="Enter Language">
                  </div>
                  <div class="mb-1">
                    <label for="bio" class="form-label mb-0">Bio</label>
                    <textarea class="form-control" v-model="form.bio" id="bio" rows="3"
                      placeholder="Enter Bio"></textarea>
                  </div>
                  <div class="mb-1">
                    <label for="pages" class="form-label mb-0">Pages</label>
                    <input type="text" v-model="form.page" class="form-control" id="pages"
                      placeholder="Enter Number of Pages">
                  </div>
                  <div class="mb-1">
                    <label for="publish_date" class="form-label mb-0">Publish Date</label>
                    <input type="date" v-model="form.publish_date" class="form-control" id="publish_date">
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button class="btn btn-primary">Save</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- Add Category Button to Trigger Modal -->
        <div class="d-flex justify-content-between align-items-center mb-4">
          <button class="btn btn-primary" @click="openEditModal()">Add New Book</button>
        </div>
        <div class="row">
          <div class="col-lg-12 d-flex align-items-stretch">
            <div class="card w-100">
              <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4">Books Details</h5>
                <div class="table-responsive">
                  <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                      <tr>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Id</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Series</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Title</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Sub Title</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Author ID</h6>
                        </th>
                        <!-- <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Category ID</h6>
                        </th> -->
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Image</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">PDF URL</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Language</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Bio</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Pages</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Publish Date</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Total Views</h6>
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
                      <tr v-for="(book, index) in books" :key="book.id">
                        <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">{{ index + 1 }}</h6>
                        </td>
                        <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">{{ book.series }}</h6>
                        </td>
                        <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-1">{{ book.title }}</h6>
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal">{{ book.sub_title }}</p>
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal">{{ book.author.name }}</p>
                        </td>
                        <!-- <td class="border-bottom-0">
                          <p class="mb-0 fw-normal">{{ book.category.category_name }}</p>
                        </td> -->
                        <td class="border-bottom-0">
                          <img v-if="book.img_url" :src="book.img_url" alt="Book Image" class="rounded-circle"
                            style="width: 50px; height: 50px;">
                          <span v-else>No image available</span>
                        </td>
                        <td class="border-bottom-0">
                          <a v-if="book.pdf_url" :href="book.pdf_url" target="_blank" download>Download</a>
                          <span v-else>No PDF available</span>
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal">{{ book.language }}</p>
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal">{{ book.bio }}</p>
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal">{{ book.pages }}</p>
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal">{{ formatDate(book.publish_date) }}</p>
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal">{{ book.total_view }}</p>
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal">{{ formatDate(book.total_view) }}</p>
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal">{{ formatDate(book.updated_at) }}</p>
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
        <!-- Modal for Adding a New Book -->
      </div>
    </div>
  </div>

</template>

<script>
import axios from 'axios';
import { onMounted, ref } from 'vue';
import moment from "moment";
export default {
  name: "DashBook",
  setup() {
    const books = ref([]);
    const categories = ref([]);
    const form = ref({
      series: '',
      title: '',
      sub_title: '',
      author_id: '',
      img_url: "",
      pdf_url: '',
      language: '',
      bio: '',
      page: '',
      publish_date: '',
      categories: [],
    });

    const onFileSelect = (event) => {
      const file = event.target.files[0];
      if (file.size > 10485760000) {
        Toast.fire({
          icon: "warning",
          title: "Image must be less than 1 MB!",
        });
      } else {
        const reader = new FileReader();
        reader.onload = (e) => {
          form.value.img_url = e.target.result;
        };
        reader.readAsDataURL(file);
      }
    };

    const onFileSelect2 = (event) => {
      const file = event.target.files[0];
      if (file.size > 10485760000) {
        Toast.fire({
          icon: "warning",
          title: "Image must be less than 1 MB!",
        });
      } else {
        const reader = new FileReader();
        reader.onload = (e) => {
          form.value.pdf_url = e.target.result;
        };
        reader.readAsDataURL(file);
      }
    };

    const authors = ref([]);
    const addBooks = async () => {
      await axios.post('/api/books', form.value)
        .then((res) => {
          console.log(res)
          if(res.data && res.status===201){
            Toast.fire({
              icon: "success",
              title: "book created Successfully"
            });
            let myModal = bootstrap.Modal.getInstance(
              document.getElementById("addBookModal")
            );
            myModal.hide();
            fetchBook()
          }
        })
        .catch((err) => {
          Toast.fire({
              icon: "warning",
              title: "some of problem for input like image,pdf or etc"
            });
        })
    }
    const fetchBook = async () => {
      await axios.get('/api/books')
        .then((res) => {
          books.value = res.data;
        })
        .catch((err) => {
          console.log(err);
        })
    }
    const openEditModal = () => {
      let myModal = new bootstrap.Modal(
        document.getElementById("addBookModal"),
        {}
      );
      myModal.show();
    }
    const formatDate = (dateString) => {
      return moment(dateString).format('DD/MM/YYYY'); // Format to dd/mm/yyyy
    };
    const fetchCategory = async () => {
      await axios.get('/api/categories')
        .then((res) => {
          categories.value = res.data;
        })
        .catch((err) => {
          console.log(err)
        })
    }
    const fetchAuthor = async () => {
      await axios.get('/api/authors')
        .then((res) => {
          authors.value = res.data;
        })
        .catch((err) => {
          console.log(err)
        })
    }
    onMounted(async () => {
      await fetchBook();
      fetchCategory();
      fetchAuthor();
    })
    return {
      openEditModal,
      books,
      formatDate,
      categories,
      form,
      addBooks,
      authors,
      onFileSelect,
      onFileSelect2
    };
  }

}
</script>

<style scoped></style>