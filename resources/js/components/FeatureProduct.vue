<template>
    <!-- start section Deal of the weak -->
    <section class="Deal-of-weak">
        <div class="container">
            <div class="enwan-Deal">
                <h3>Deal Of The Week</h3>
            </div>
            <div :key="product.id" v-for="product in products" class="Deal-img-text-all">
                <div class="Deal-img">
                    <img :src="product.photo" alt= />
                </div>
                <div class="Deal-text">
                    <div class="enwan-deal-text">
                        <h3>
                            {{ product.name }}
                        </h3>
                        <p>
                            <span class="change-color-2">{{product.brand}}</span> <span>/</span>
                            <span>SKU: {{product.sku}}</span>
                        </p>
                    </div>
                    <div class="price text-flex">
                        <p class="change-color">Price:</p>
                        <p style="color: #e91c23">SAR {{product.price}}</p>
                    </div>
                    <div class="Available text-flex">
                        <p class="change-color">Available:</p>
                        <p class="change-color-2">{{product.availability}}</p>
                    </div>
                    <div class="Check text-flex">
                        <p><i class="fa-solid fa-check"></i></p>
                        <p class="change-color-2">{{product.warranty}} Year Warranty</p>
                    </div>
                    <div class="Quantity text-flex">
                        <p class="change-color">Quantity</p>
                        <select v-model="quantity" name="" id="">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </div>
                    <div class="btn-Deal">
                        <a @click="addToCart()">
                            Add to cart
                        </a>
                        <a href="./payment.html">
                            Buy now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section Deal of the weak -->
</template>

<script>
import axios from 'axios'
export default{
    data() {
        return {
            products: [],
            quantity: '',
            id: ''
        }
    },
    methods:{
        getFeatureProd(){
            axios.get('/api/feature-prod')
            .then((res) => {
                this.products = res.data.data;
                this.id = res.data.data[0].id;
            });
        },
        addToCart(){
            axios.post('/api/add-to-cart', {
                id: this.id ,
            })
            .then((res) => {
                this.$root.$emit('updateCart',{id:this.id,quantity:this.quantity})
            })
        }
    },
    mounted(){
        this.getFeatureProd();
        this.addToCart();
    }
}
</script>