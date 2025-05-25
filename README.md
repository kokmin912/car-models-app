# 🚗 Car Models Selection App

## Overview
The **Car Models Selection App** is a web application built using **Laravel** and **Vue.js** that allows users to:
- Select a car brand from a dropdown  
- Automatically fetch available models  
- Display models dynamically with Vue  
- Show loading indicators for a better user experience  

## Tech Stack
- **Backend:** Laravel 10  
- **Frontend:** Vue.js 3  
- **Build Tool:** Vite  
- **Database:** MySQL (or any compatible Laravel database)  
- **API:** Laravel RESTful API  

## 🔧 Installation
### Clone the Repository
git clone https://github.com/kokmin912/car-models-app.git 
cd car-models-app


### Install Dependencies
composer install 
npm install


### Configure Environment Variables
cp .env.example .env 
php artisan key:generate

Edit `.env` to set database connection details.

### Run Migrations
php artisan migrate


### Start the Server
php artisan serve


### Build the Frontend
npm run dev

Now, visit **http://127.0.0.1:8000/** in your browser. 🚀  

## 🔥 Features
- **Dynamic Brand & Model Selection** – Select a brand and get models instantly  
- **Loading Indicators** – Displays *"Fetching car brands..."* and *"Loading models..."*  
- **Error Handling** – Shows *"No models found"* only when necessary  
- **Laravel API Integration** – Uses RESTful API for fetching data  

## 📜 API Endpoints
### Fetch All Brands
GET /brands

### Fetch Models by Brand
GET /models/{brand}


## 🏗 Project Structure
car-models-app/ │── app/ │── bootstrap/ │── config/ │── database/ │── public/ │── resources/ │ ├── js/ │ │ ├── components/ │ │ │ ├── FipeModels.vue │ │ ├── app.js │ ├── views/ │ │ ├── welcome.blade.php │── routes/ │── vite.config.js │── package.json │── README.md


## ⚡ Troubleshooting
### Fix: Missing `manifest.json`
npm run build

### Fix: Vue "Template Missing" Error
Update `vite.config.js`:
resolve: { alias: { vue: 'vue/dist/vue.esm-bundler.js', } }


## 📜 License
This project is licensed under the **MIT License**.
