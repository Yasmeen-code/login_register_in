# 🔐 Login & Register System (PHP + MySQL)

A secure and modern login/register system developed using **PHP**, **MySQL**, and **custom CSS**.  
This is my **second full-stack project** as part of my learning journey.

---

## 🔧 Features

- 📝 User registration with form validation  
- 🔒 Secure login using hashed passwords (`password_hash`)  
- 🚪 Logout functionality with session management  
- 🚨 Error handling for incorrect credentials  
- 📄 Responsive and stylish UI (glassmorphism + purple theme)

---

## 💻 Tech Stack

- `PHP` (server-side logic)
- `MySQL` (Database: `login_register_in`, Table: `users`)
- `HTML/CSS` (fully styled with a modern glassmorphism design)
- `XAMPP` for local development (Apache + MySQL)

---

## 🗃️ Database Structure

**Database:** `login_register_in`  
**Table:** `users`

| Field       | Type           | Description            |
|-------------|----------------|------------------------|
| `id`        | INT (AI, PK)   | User ID                |
| `name`      | VARCHAR(100)   | Full Name              |
| `email`     | VARCHAR(255)   | Unique Email Address   |
| `password`  | VARCHAR(255)   | Hashed Password        |
| `created_at`| TIMESTAMP      | Registration timestamp |

