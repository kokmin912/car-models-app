<template>
  <div>
    <h2>Available Models</h2>

    <!-- Show "Fetching car brands..." while loading brands -->
    <p v-if="loadingBrands" class="loading">Fetching car brands...</p>

    <select v-model="selectedBrand" @change="fetchModels">
      <option value="" disabled selected>Select a brand</option>
      <option v-for="brand in brands" :key="brand.codigo" :value="brand.codigo">
        {{ brand.nome }}
      </option>
    </select>

    <!-- Show "Loading models..." while fetching models -->
    <p v-if="loadingModels" class="loading">Loading models...</p>

    <!-- Show "No models found" ONLY when a brand is selected and models list is empty -->
    <p v-if="!loadingModels && selectedBrand && models.length === 0" class="error">No models found.</p>

    <ul v-if="!loadingModels && models.length > 0">
      <li v-for="model in models" :key="model.codigo">
        {{ model.nome }}
      </li>
    </ul>
  </div>
</template>


<script>
import axios from 'axios';

export default {
  data() {
    return {
      brands: [],
      models: [],
      selectedBrand: null,
      loadingBrands: true, // Separate loading state for brands
      loadingModels: false, // Separate loading state for models
    };
  },
  mounted() {
    this.fetchBrands();
  },
  methods: {
    fetchBrands() {
      this.loadingBrands = true;
      axios.get("http://127.0.0.1:8000/brands")
        .then(response => {
          this.brands = response.data;
          this.loadingBrands = false;
        })
        .catch(error => {
          console.error("Error fetching brands:", error);
          this.loadingBrands = false;
        });
    },
    fetchModels() {
      this.loadingModels = true; // Show "Loading models..."
      this.models = []; // Clear previous selection
      axios.get(`http://127.0.0.1:8000/models/${this.selectedBrand}`)
        .then(response => {
          this.models = response.data.modelos;
          this.loadingModels = false; // Stop loading once data is received
        })
        .catch(error => {
          console.error("Error fetching models:", error);
          this.loadingModels = false;
        });
    },
  },
};
</script>
