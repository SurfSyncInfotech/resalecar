# Laravel 12x Axemobile Template - Installation Guide

Welcome to Laravel 12x Axemobile Template! This guide will walk you through the steps required to get the project up and running on your local machine.

---

## 🧰 Requirements

- **PHP Version:** >= 8.2
- **Composer Version:** >= 2.2
- **Recommended Servers:** XAMPP, WAMP, or LAMPP

---

## ⚙️ Installation Steps

### 1. Install a Local Server

Make sure you have XAMPP/WAMP/LAMPP installed and running on your system. If your current PHP version is **greater than 8.2**, you may skip this step.

---

### 2. Install Composer

Ensure [Composer](https://getcomposer.org/) is installed and available in your terminal. You can check this by running:

```bash
composer --version
```

---

### 3. Install Dependencies

Run the following command to install all required PHP packages:

```bash
composer install
```

Alternatively:

```bash
composer i
```

---

### 4. Create Environment File

Copy `.env.example` to `.env`:

#### On Unix/macOS:

```bash
cp .env.example .env
```

#### On Windows CMD:

```cmd
copy .env.example .env
```

---

### 5. Generate Application Key

Run the Artisan command to generate your app key:

```bash
php artisan key:generate
```

---

### 6. Configure Database

Open your `.env` file and update the following lines based on your database setup:

#### For SQLite:
```env
DB_CONNECTION=sqlite
```

#### For MySQL:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_db_user
DB_PASSWORD=your_db_password
```

---

### 7. Run Migrations (Optional)

If your project uses migrations, execute:

```bash
php artisan migrate
```

---

### 8. Start Development Server

To start the Laravel server:

```bash
php artisan serve
```

Access your site at: [http://localhost:8000](http://localhost:8000)

Want to use a different port? Example:

```bash
php artisan serve --port=8001
```

---

## ✍️ Customizing the Template

Before deploying, make sure to **edit the demo content** and insert your own content.

We recommend using a code editor like:

- [Visual Studio Code](https://code.visualstudio.com/)
- [Sublime Text](https://www.sublimetext.com/)

Replace all placeholder texts, images, and settings according to your brand or use case.

---

## 📄 No Vite or Node.js Required

This Laravel template does not use Vite, Node.js, or NPM. All CSS and JS static assets are included via Laravel's `asset()` helper pointing to the `public/` folder. This allows the template to work seamlessly on any shared hosting without extra build steps.

---

Thank You and Happy Coding! 🚀
