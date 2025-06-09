<script setup>
    import Layout from '../Shared/Layout.vue';
    import Paginator from '../Shared/Paginator.vue';

    defineOptions({
        layout: Layout,
    });

    defineProps({
        tasks: Object,
    });
</script>

<template>
    <!-- Create Modal -->
    <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="createModalLabel">Product Information</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div>
                        <label for="productName" class="d-block">Enter Product Name</label>
                        <input type="text" id="productName" class="form-control"
                               placeholder="Enter Product Name">
                        <div id="nameError" class="d-none invalid-feedback">name can contain letters,
                            numbers, dots, apostrophes, hyphens</div>
                    </div>
                    <div>
                        <label for="productPrice" class="d-block">Enter Product Price</label>
                        <input type="text" id="productPrice" class="form-control"
                               placeholder="Enter Product Price">
                        <div id="priceError" class="d-none invalid-feedback">price must be between 1000 &
                            10000</div>
                    </div>
                    <div>
                        <label for="productCategory" class="d-block">Enter Product Category</label>
                        <input type="text" id="productCategory" class="form-control"
                               placeholder="Enter Product Category">
                        <div id="categoryError" class="d-none invalid-feedback">category can have letters,
                            numbers,
                        </div>
                    </div>
                    <div>
                        <label for="productDesc" class="d-block">Enter Product Desc</label>
                        <input type="text" id="productDesc" class="form-control"
                               placeholder="Enter Product Desc">
                        <div id="descError" class="d-none invalid-feedback">description can contain
                            letters,numbers, symbols</div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" id="closeButton" data-bs-dismiss="modal"
                            onclick="resetForm()">Close</button>
                    <button type="button" class="btn btn-primary" id="createButton"
                            onclick="createProduct()">Create Product</button>
                    <button type="button" class="btn btn-primary d-none" id="updateButton"
                            onclick="updateProduct()">Update Product</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Product Content -->
    <h1>Product CRUD Operations</h1>
    <div class="d-flex justify-content-between text-center my-4">
        <input oninput="searchProduct()" type="search" id="searchInput"
               class="form-control w-50" placeholder="Search">
        <button class="btn btn-dark" id="newButton" data-bs-toggle="modal"
                data-bs-target="#createModal">New Product</button>
    </div>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">name</th>
            <th scope="col">priority</th>
            <th scope="col">status</th>
            <th scope="col">desc</th>
            <th scope="col">actions</th>
        </tr>
        </thead>
        <tbody id="tableBody">
            <tr v-for="t in tasks.data" :key="t.id" data-id="{{ t.id }}">
                <th scope="row">{{ t.id }}</th>
                <td>{{ t.name }}</td>
                <td>{{ t.priority }}</td>
                <td>{{ t.status }}</td>
                <td>{{ t.description }}</td>
                <td>
                    <button class="btn btn-warning me-1 update-btn" data-bs-toggle="modal" data-bs-target="#createModal">Edit</button>
                    <button class="btn btn-danger delete-btn">Delete</button>
                </td>
            </tr>
        </tbody>
    </table>

    <!-- paginator -->
    <Paginator :links="tasks.links" />
</template>

<style scoped>
    tbody {
        font-size: 0.75rem;
    }

    tbody button {
        font-size: 0.75rem;
    }
</style>
