 <template>
    <!-- start section our product -->
    <section class="sec-our-product">
        <div class="container">
            <div class="enwan-Deal">
                <h3>Our Products</h3>
            </div>
            <div class="row">
                <div v-if="loading" >
                <img style="background-color:red;" src="assets/images/circles.svg" />
                </div>
                <div  v-else :key="product.id" v-for="product in items"  class="col-sm-4 col-md-4 col-lg-2">

                    <a href="productPage.html">
                        <img :src="product.photo" alt= />
                        <p>
                         {{ product.name }}
                        </p>
                        <p>
                            <p style="color: #e91c23">SAR {{product.price}}</p>
                        </p>
                    </a>
                </div>
             </div>
</div>
    </section>
    <!-- end section our product --></template>

<script>
import axios from "axios";

export default {
  data() {
    return {
      items: [],
      loading: true,
    };
  },

  methods: {
    getProductsGrid() {
      axios.get("/api/products-grid").then((response) => {
        this.items = response.data.data;
        this.loading = false;
      });
    },
  },
  mounted() {
    this.getProductsGrid();
  },
};
</script>