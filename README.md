# Laravel SBAdmin2 Pro

<div align="center">

![Laravel](https://img.shields.io/badge/Laravel-10.x-FF2D20?style=for-the-badge&logo=laravel)
![PHP](https://img.shields.io/badge/PHP-8.1+-777BB4?style=for-the-badge&logo=php)
![License](https://img.shields.io/badge/License-MIT-blue?style=for-the-badge)
![SQLite](https://img.shields.io/badge/Database-SQLite-003B57?style=for-the-badge&logo=sqlite)

## Professional Administration Dashboard

_Built with ❤️ using Laravel and SB Admin 2_

[Quick Start](#-quick-start) • [Features](#-features) • [Documentation](#-documentation)

</div>

## 📖 Overview

Laravel SBAdmin2 Pro is a sophisticated administration dashboard built on the Laravel framework, featuring the professional SB Admin 2 Bootstrap theme. This enterprise-grade solution provides robust role-based access control, separate admin and user dashboards, and a modern, responsive interface suitable for business applications.

## ✨ Features

### 🔐 Security & Authentication

-   **Multi-role Authentication System** (Admin/User)
-   **Role-based Middleware Protection**
-   **CSRF & XSS Protection**
-   **Secure Session Management**
-   **Password Hashing with Bcrypt**

### 🎨 User Experience

-   **SB Admin 2 Template** - Professional Bootstrap admin theme
-   **Fully Responsive Design** - Mobile-first approach
-   **Separate Dashboards** - Tailored experiences for admin and users
-   **Modern UI Components** - Cards, charts, and widgets
-   **Blade Templating** - Clean and maintainable views

### ⚡ Performance & Architecture

-   **Optimized Laravel Structure** - Following best practices
-   **Efficient Database Queries** - Eloquent ORM implementation
-   **Migration System** - Version-controlled database schema
-   **Seeder Classes** - Easy setup with sample data

## 🛠 Requirements

### System Requirements

-   **PHP 8.1+** with extensions: BCMath, Ctype, JSON, Mbstring, OpenSSL, PDO, Tokenizer, XML
-   **Composer 2.0+**
-   **SQLite3** (development) or **MySQL 5.7+** / **PostgreSQL 9.5+** (production)
-   **Web Server** (Apache/Nginx) or PHP built-in server for development

## 🚀 Quick Start

### Installation Steps

1. **Clone the repository**

    ```bash
    git clone https://github.com/kevindoni/Laravel-SBAdmin2-Pro.git
    cd Laravel-SBAdmin2-Pro
    ```

2. **Install PHP dependencies**

    ```bash
    composer install
    ```

3. **Configure environment**

    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

4. **Setup database**

    ```bash
    touch database/database.sqlite
    php artisan migrate --force
    php artisan db:seed --class=AdminSeeder
    ```

5. **Start development server**
    ```bash
    php artisan serve
    ```
    Access your application at: `http://localhost:8000`

### Default Admin Account

-   **Email**: `admin@example.com`
-   **Password**: `password`

> ⚠️ **Security Notice**: Change these credentials immediately after first login in production environments.

## 📁 Project Structure

```
Laravel-SBAdmin2-Pro/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   └── Auth/          # Authentication controllers
│   │   └── Middleware/
│   │       └── AdminMiddleware.php
│   └── Models/
│       └── User.php           # User model with admin flag
├── config/                    # Application configuration
├── database/
│   ├── migrations/            # Database schema definitions
│   └── seeders/
│       └── AdminSeeder.php    # Default admin user
├── public/
│   └── template/              # SB Admin 2 static assets
├── resources/
│   └── views/
│       ├── admin/             # Administrative interface views
│       ├── user/              # Standard user interface views
│       ├── auth/              # Authentication views
│       └── layouts/           # Reusable layout templates
├── routes/
│   └── web.php                # Application route definitions
└── storage/                   # File storage and logs
```

## 🎯 Usage

### Dashboard Access

<<<<<<< HEAD
| Role | Dashboard URL | Access Level | Features |
|------|---------------|--------------|----------|
| **Admin** | `/admin/dashboard` | Full system access | User management, system configuration, reports |
| **User** | `/user/dashboard` | Limited access | Personal dashboard, profile management |
=======
| Role | Dashboard URL | Access Level | Features |
| --------- | ------------------ | ------------------ | ---------------------------------------------- |
| **Admin** | `/admin/dashboard` | Full system access | User management, system configuration, reports |
| **User** | `/user/dashboard` | Limited access | Personal dashboard, profile management |

> > > > > > > 1439154 (Guard Chart.js demo initializers against missing canvas elements; avoid Chart(null) TypeError)

### Authentication Workflow

1. **Registration** - New users create accounts through the registration interface
2. **Authentication** - Users authenticate with email and password credentials
3. **Role Detection** - System automatically directs users to appropriate dashboard
4. **Access Control** - Middleware enforces role-based permissions on all routes

## ⚙️ Configuration

### Environment Setup

Update your `.env` file for production:

```env
APP_NAME="Laravel SBAdmin2 Pro"
APP_ENV=production
APP_DEBUG=false
APP_KEY=base64:your-generated-key
APP_URL=https://your-domain.com
APP_TIMEZONE=UTC

# Database Configuration
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_secure_password

# Session Configuration
SESSION_DRIVER=database
SESSION_LIFETIME=120
```

## 📦 Deployment

### Production Optimization

```bash
# Cache configuration for performance
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Optimize autoloader
composer install --optimize-autoloader --no-dev

# Cache events and bootstrap files
php artisan event:cache
```

### Security Hardening

<<<<<<< HEAD

-   Set `APP_DEBUG=false` in production
-   Use `SESSION_DRIVER=database` for better security
-   Implement SSL/HTTPS
-   Regular security updates
-   # Strong database credentials
-   Set `APP_DEBUG=false` in production
-   Use `SESSION_DRIVER=database` for better security
-   Implement SSL/HTTPS
-   Regular security updates
-   Strong database credentials
    > > > > > > > 1439154 (Guard Chart.js demo initializers against missing canvas elements; avoid Chart(null) TypeError)

## 🧪 Testing

### Test Execution

```bash
# Run PHPUnit test suite
./vendor/bin/phpunit

# Generate test coverage report
./vendor/bin/phpunit --coverage-html coverage/

# Run specific test groups
./vendor/bin/phpunit --group=auth
./vendor/bin/phpunit --group=admin
```

## 🔒 Security Features

### Built-in Protection

<<<<<<< HEAD

-   **CSRF Protection** - Automatic token validation
-   **XSS Prevention** - Blade template escaping
-   **SQL Injection Protection** - Eloquent ORM parameter binding
-   **Secure Password Hashing** - Bcrypt algorithm
-   # **Session Security** - Configurable timeouts and encryption
-   **CSRF Protection** - Automatic token validation
-   **XSS Prevention** - Blade template escaping
-   **SQL Injection Protection** - Eloquent ORM parameter binding
-   **Secure Password Hashing** - Bcrypt algorithm
-   **Session Security** - Configurable timeouts and encryption
    > > > > > > > 1439154 (Guard Chart.js demo initializers against missing canvas elements; avoid Chart(null) TypeError)

### Security Best Practices

1. **Credential Management**

    - Change default administrator credentials immediately
    - Implement strong password policies
    - Regular credential rotation

2. **Environment Security**

    - Restrict `.env` file access
    - Secure database credentials
    - Regular security updates

3. **Access Control**
   <<<<<<< HEAD
    - Principle of least privilege
    - Regular access reviews
    - Secure session management

## 🔌 API Endpoints

| Method | Endpoint           | Description           | Access        |
| ------ | ------------------ | --------------------- | ------------- |
| `POST` | `/login`           | User authentication   | Public        |
| `POST` | `/register`        | New user registration | Public        |
| `POST` | `/logout`          | Session termination   | Authenticated |
| `GET`  | `/admin/dashboard` | Admin dashboard       | Admin only    |
| `GET`  | `/user/dashboard`  | User dashboard        | Authenticated |

## 🤝 Contributing

# We welcome contributions from the community!

    - Principle of least privilege
    - Regular access reviews
    - Secure session management

## 🔌 API Endpoints

| Method | Endpoint           | Description           | Access        |
| ------ | ------------------ | --------------------- | ------------- |
| `POST` | `/login`           | User authentication   | Public        |
| `POST` | `/register`        | New user registration | Public        |
| `POST` | `/logout`          | Session termination   | Authenticated |
| `GET`  | `/admin/dashboard` | Admin dashboard       | Admin only    |
| `GET`  | `/user/dashboard`  | User dashboard        | Authenticated |

## 🤝 Contributing

We welcome contributions from the community!

> > > > > > > 1439154 (Guard Chart.js demo initializers against missing canvas elements; avoid Chart(null) TypeError)

### Development Workflow

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

### Code Standards

<<<<<<< HEAD

-   Follow PSR-12 coding standards
-   Write clear commit messages
-   Add tests for new features
-   # Update documentation accordingly
-   Follow PSR-12 coding standards
-   Write clear commit messages
-   Add tests for new features
-   Update documentation accordingly
    > > > > > > > 1439154 (Guard Chart.js demo initializers against missing canvas elements; avoid Chart(null) TypeError)

## 📞 Support

### Documentation Resources

<<<<<<< HEAD

-   [Laravel Documentation](https://laravel.com/docs)
-   [SB Admin 2 Documentation](https://startbootstrap.com/theme/sb-admin-2)
-   # [Bootstrap Documentation](https://getbootstrap.com/docs)
-   [Laravel Documentation](https://laravel.com/docs)
-   [SB Admin 2 Documentation](https://startbootstrap.com/theme/sb-admin-2)
-   [Bootstrap Documentation](https://getbootstrap.com/docs)
    > > > > > > > 1439154 (Guard Chart.js demo initializers against missing canvas elements; avoid Chart(null) TypeError)

### Issue Resolution

For technical support and issue reporting:

1. **Review Documentation** - Check this README and inline code comments
2. **Search Issues** - Look for existing solutions in GitHub Issues
3. **Create New Issue** - Provide detailed information including:
   <<<<<<< HEAD
    - Environment specifications (PHP version, Laravel version)
    - Error messages and logs
    - Steps to reproduce the issue
    - # Expected vs. actual behavior
    - Environment specifications (PHP version, Laravel version)
    - Error messages and logs
    - Steps to reproduce the issue
    - Expected vs. actual behavior
        > > > > > > > 1439154 (Guard Chart.js demo initializers against missing canvas elements; avoid Chart(null) TypeError)

## 📄 License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for complete licensing details.

## 🙏 Acknowledgments

<<<<<<< HEAD

-   [Laravel Framework](https://laravel.com) - The fantastic PHP framework that makes development enjoyable
-   [SB Admin 2](https://startbootstrap.com/theme/sb-admin-2) - Clean and professional Bootstrap admin theme
-   [Bootstrap](https://getbootstrap.com) - The world's most popular front-end component library
-   # All contributors and community members who help improve this project
-   [Laravel Framework](https://laravel.com) - The fantastic PHP framework that makes development enjoyable
-   [SB Admin 2](https://startbootstrap.com/theme/sb-admin-2) - Clean and professional Bootstrap admin theme
-   [Bootstrap](https://getbootstrap.com) - The world's most popular front-end component library
-   All contributors and community members who help improve this project
    > > > > > > > 1439154 (Guard Chart.js demo initializers against missing canvas elements; avoid Chart(null) TypeError)

---

<div align="center">

## 📊 Project Stats

![Stars](https://img.shields.io/github/stars/kevindoni/Laravel-SBAdmin2-Pro?style=social)
![Forks](https://img.shields.io/github/forks/kevindoni/Laravel-SBAdmin2-Pro?style=social)
![Issues](https://img.shields.io/github/issues/kevindoni/Laravel-SBAdmin2-Pro)
![Last Commit](https://img.shields.io/github/last-commit/kevindoni/Laravel-SBAdmin2-Pro)

**Professional administration solutions for modern web applications**

</div>
