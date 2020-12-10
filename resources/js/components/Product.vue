<template>
    <div class="container" :class="{'loading':loading}">
        <div class="row justify-content-center">
            <h3>Product List</h3>
            <pagination :total-pages="11"
                :total="113"
                :per-page="10"
                :current-page="currentPage"
                @pagechanged="onPageChange"
            />
            <search/>
        </div>
        <div class="card-columns">
            <div class="card" v-for="product in products">
                <img class="card-img-top" src="holder.js/100x180/" alt="">
                <div class="card-body">
                    <h4 class="card-title">{{ product.name }}</h4>
                    <p class="card-text">{{ product.description}}</p>
                </div>
            </div>

        </div>
    </div>
</template>

<script>
import Pagination from './Pagination.vue';
import Search from './Seach.vue';
    export default {
        components: {
            Pagination,
            Search
        },
        data: function() {
            return {
                products: []
            }
        },
        mounted() {
            this.loadProducts();
        },
        methods: {
            loadProducts: function() {
                axios.get('/api/products')
                .then((response) => {
                    this.products = response.data.data;
                    this.loading = false;
                })
                .catch(function(error) {
                    console.log(error);
                });
            }
        },
    };
</script>
