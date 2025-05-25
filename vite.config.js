import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
  plugins: [
    laravel({
      input: ['resources/js/app.js'],
      refresh: true,
    }),
    vue(),
  ],
  build: {
    manifest: true, // Enables manifest.json generation
  },
  resolve: {
    alias: {
      vue: 'vue/dist/vue.esm-bundler.js', // Fix runtime compilation issue
    },
  },
});
