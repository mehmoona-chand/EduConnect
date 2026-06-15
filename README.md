<div align="center">

# 🎓 EduConnect

### Online Tutoring Platform

*Connecting students with tutors — seamlessly, smartly.*

![PHP](https://img.shields.io/badge/PHP-8.x-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-5-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white)
![AdminLTE](https://img.shields.io/badge/AdminLTE-3-00ADB5?style=for-the-badge)
![License](https://img.shields.io/badge/License-Educational-green?style=for-the-badge)

</div>

---

## 📌 About

**EduConnect** is a full-stack web application. It provides a complete tutoring management ecosystem — from student inquiry to tutor course management — all through a clean, role-based interface.

> Built with ❤️ using PHP, MySQL, Bootstrap, and AdminLTE 3.

---

## ✨ Features

### 👩‍🎓 Student / Visitor Portal
- Browse all available tutors and courses
- Submit inquiries directly to tutors
- View detailed tutor profiles

### 👨‍🏫 Tutor Dashboard
- Manage personal course listings
- View and respond to student inquiries
- Update profile and contact information

### 🔐 Admin Panel
- Full CRUD control over users, tutors, and courses
- Manage all incoming inquiries
- System settings and configuration

### ⚙️ Technical Highlights
- **Session-based authentication** with separate login flows per role
- **Secure DB connection** via PHP OOP class
- **Responsive UI** — works on desktop and mobile
- Clean **MVC-like structure** separating logic, UI, and DB layers

---

## 🛠️ Tech Stack

| Layer        | Technology                        |
|--------------|-----------------------------------|
| Backend      | PHP 8.x                           |
| Database     | MySQL / MariaDB                   |
| Frontend     | HTML5, CSS3, JavaScript, Bootstrap |
| Admin UI     | AdminLTE 3                        |
| Local Server | XAMPP / WAMP                      |
| Auth         | PHP Sessions                      |

---

## 📁 Project Structure

```
EduConnect/
├── admin/              # Admin panel — users, tutors, courses, inquiries
├── tutor/              # Tutor dashboard and course management
├── classes/
│   ├── DBConnection.php    # Database connection (PDO)
│   ├── Login.php           # Authentication logic
│   ├── Master.php          # Core CRUD operations
│   ├── Users.php           # User management
│   └── SystemSettings.php  # App-wide settings
├── inc/                # Shared partials (header, footer, nav)
├── assets/             # Custom CSS and JS
├── database/           # SQL dump — otps_db.sql
├── uploads/            # Tutor and course images
├── plugins/            # Third-party JS/CSS (AdminLTE, Chart.js etc.)
├── config.php          # DB credentials & app config
└── index.php           # Main entry point / homepage
```

---

## 🚀 Getting Started

### Prerequisites
- [XAMPP](https://www.apachefriends.org/) or WAMP installed
- PHP 8.0+
- MySQL / MariaDB

### Installation Steps

**1. Clone the repository**
```bash
git clone https://github.com/mehmoona-chand/EduConnect.git
```

**2. Move to your server root**
```
# For XAMPP:
C:/xampp/htdocs/EduConnect
```

**3. Import the database**
- Open `phpMyAdmin` → Create a new database named `otps_db`
- Import the file: `database/otps_db.sql`

**4. Configure database credentials**

Open `classes/DBConnection.php` and update:
```php
$host     = "localhost";
$dbname   = "otps_db";
$username = "root";
$password = "";
```

**5. Run the app**
```
http://localhost/EduConnect/
```

---

## 🔑 Default Login Credentials

| Role  | Username | Password  |
|-------|----------|-----------|
| Admin | `admin`  | `admin123` |
| Tutor | Register via Admin Panel | — |

> ⚠️ **Security Note:** Change these credentials immediately after setup. Never use default passwords in production.

---

## 📸 Screenshots

> *Coming soon — screenshots will be added after UI polish pass.*

| Page | Preview |
|------|---------|
| Home / Visitor Portal | 
| Tutor Dashboard | 
| Admin Panel | 

---

## 🗺️ Roadmap

- [ ] Add screenshot gallery
- [ ] Student login & personal dashboard
- [ ] Online booking / scheduling system
- [ ] Email notifications for inquiries
- [ ] Rating & review system for tutors
- [ ] Deploy to live server (Railway / Render)

---

## 👩‍💻 Author

**Mehmoona Chand **


[![LinkedIn](https://img.shields.io/badge/LinkedIn-Connect-0A66C2?style=flat&logo=linkedin)](https://linkedin.com/in/mehmoonachand)
[![GitHub](https://img.shields.io/badge/GitHub-Follow-181717?style=flat&logo=github)](https://github.com/mehmoona-chand)

---

## 📄 License

This project was developed for educational .

---

</div>

