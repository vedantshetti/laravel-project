# 📖 Laravel Blog Management System — Project Overview

Welcome to your **OG Laravel Blog Management System**!  
This is a lightweight, modern Laravel 12.x application for managing blog posts, with a clean UI, SQLite database, and easy-to-extend structure.

---

## 🚩 Project Highlights

- **Framework:** Laravel 12.x  
- **Database:** SQLite (MySQL-ready if needed)  
- **UI:** Bootstrap 5 with vibrant custom styles  
- **Features:** Full CRUD for blog posts, validation, error handling, and a MySQL backup script

---

## 📁 Project Structure

| Folder/File                                | Purpose                                           |
|:-------------------------------------------|:--------------------------------------------------|
| `app/Http/Controllers/PostController.php`  | Handles all blog post CRUD logic                  |
| `app/Models/Post.php`                      | Blog post model, fillable for mass assignment     |
| `database/migrations/xxxx_create_posts...` | Migration for posts table                         |
| `database/database.sqlite`                 | SQLite database file                              |
| `resources/views/layouts/app.blade.php`    | Main layout, includes Bootstrap and custom CSS    |
| `resources/views/posts/`                   | All Blade views for posts (index, create, edit…)  |
| `routes/web.php`                           | Defines resource routes for posts                 |
| `.env`                                     | Environment configuration (set to SQLite)         |
| `backup.sh`                                | MySQL backup script (optional)                    |

---

## 🛠️ How to Run the Project

1. **Install dependencies**
   ```bash
   composer install


## 🛠️ How to Run the Project (continued)

2. **Create SQLite database**
   ```bash
   touch database/database.sqlite
   chmod 664 database/database.sqlite



