🚗 Car Models Selection App
Overview
The Car Models Selection App is a web application built using Laravel and Vue.js that allows users to: ✅ Select a car brand from a dropdown ✅ Automatically fetch available models ✅ Display models dynamically with Vue ✅ Show loading indicators for better user experience

Tech Stack
Backend: Laravel 10

Frontend: Vue.js 3

Build Tool: Vite

Database: MySQL (or any compatible Laravel database)

API: Laravel RESTful API

🔧 Installation
1. Clone the Repository
bash
git clone https://github.com/YOUR_USERNAME/car-models-app.git
cd car-models-app
2. Install Dependencies
bash
composer install
npm install
3. Configure Environment Variables
bash
cp .env.example .env
php artisan key:generate
Edit .env to set database connection details.

4. Run Migrations
bash
php artisan migrate
5. Start the Server
bash
php artisan serve
6. Build the Frontend
bash
npm run dev
Now, visit http://127.0.0.1:8000/ in your browser. 🚀

🔥 Features
✅ Dynamic Brand & Model Selection – Select a brand and get models instantly ✅ Loading Indicators – Shows "Fetching car brands..." and "Loading models..." ✅ Error Handling – Displays "No models found" when a brand has no models ✅ Laravel API Integration – Uses REST API to fetch brand & model data

🏗 Project Structure
car-models-app/
│── app/
│── bootstrap/
│── config/
│── database/
│── public/
│── resources/
│   ├── js/
│   │   ├── components/
│   │   │   ├── FipeModels.vue
│   │   ├── app.js
│   ├── views/
│   │   ├── welcome.blade.php
│── routes/
│── vite.config.js
│── package.json
│── README.md
⚡ API Routes
1. Fetch All Brands
http
GET /brands
2. Fetch Models by Brand
http
GET /models/{brand}
🛠 Troubleshooting
Fix: Missing manifest.json
Run:

bash
npm run build
Fix: Vue "Template Missing" Error
Update vite.config.js:

js
resolve: {
  alias: {
    vue: 'vue/dist/vue.esm-bundler.js',
  }
}
📜 License
This project is licensed under the MIT License.
