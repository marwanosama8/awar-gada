require('./bootstrap');

import { createApp } from 'vue';
import ProductsGrid from './components/ProductsGrid'
import FeatureProduct from './components/FeatureProduct'
import CartWidget from './components/CartWidget'

const app = createApp({})
app.component('products-grid', ProductsGrid);
app.component('feature-product', FeatureProduct);
app.component('cart-widget', CartWidget);

app.mount('#app')