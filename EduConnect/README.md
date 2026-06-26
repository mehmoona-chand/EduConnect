# EduConnect — Online Tutoring Platform

A web-based platform that connects students with tutors, allowing users to browse courses, submit inquiries, and manage tutor profiles through a clean and responsive interface.

---

## Features

- **Student Portal** — Browse available tutors and courses, submit inquiries, and view tutor profiles
- **Tutor Dashboard** — Manage personal course listings, track student inquiries, and update profile info
- **Admin Panel** — Full control over users, tutors, courses, and inquiry management
- **Session-based Authentication** — Separate login flows for admin and tutors with secure session handling
- **Responsive UI** — Built with AdminLTE and Bootstrap for a clean, mobile-friendly experience

---

## Tech Stack

| Layer | Technology |
|---|---|
| Backend | PHP 8.x |
| Database | MySQL / MariaDB |
| Frontend | HTML, CSS, JavaScript, Bootstrap |
| Admin UI | AdminLTE 3 |
| Local Server | XAMPP / WAMP |

---

## Project Structure

```
EduConnect/
├── admin/              # Admin panel pages (users, tutors, courses, inquiries)
├── tutor/              # Tutor dashboard and course management
├── classes/            # PHP classes (DBConnection, Login, Master, Users, SystemSettings)
├── inc/                # Shared includes (header, footer, navigation)
├── assets/             # Custom CSS and JS
├── database/           # SQL dump file
├── uploads/            # Uploaded images (tutor/course photos)
├── plugins/            # Third-party JS/CSS plugins
├── config.php          # Database and app configuration
└── index.php           # Main entry point
```

---

## Getting Started

### Requirements

- XAMPP, WAMP, or any PHP/MySQL local server
- PHP 8.0 or higher
- MySQL / MariaDB

### Installation

1. **Clone or download** this repository into your server's root directory (e.g., `htdocs` for XAMPP)

   ```bash
   git clone https://github.com/your-username/EduConnect.git
   ```

2. **Import the database**

   - Open phpMyAdmin
   - Create a new database named `otps_db`
   - Import the file located at `database/otps_db.sql`

3. **Configure the database connection**

   Open `classes/DBConnection.php` and update your credentials:

   ```php
   $host = "localhost";
   $dbname = "otps_db";
   $username = "root";
   $password = "";
   ```

4. **Start your local server** and navigate to:

   ```
   http://localhost/EduConnect/
   ```

---

## Default Login Credentials

| Role | Username | Password |
|---|---|---|
| Admin | `admin` | `admin123` |
| Tutor | (register via admin panel) | — |

> **Note:** Change these credentials immediately after setup.

---

## Screenshots

> Add screenshots here once the project is running locally.

---

## License

This project is for educational purposes.


