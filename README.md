# Laravel SBAdmin2 Pro

<div align="center">

![Laravel](https://img.shields.io/badge/Laravel-10.x-FF2D20?style=flat-square&logo=laravel)
![PHP](https://img.shields.io/badge/PHP-8.1+-777BB4?style=flat-square&logo=php)
![License](https://img.shields.io/badge/License-MIT-blue?style=flat-square)
![SQLite](https://img.shields.io/badge/Database-SQLite-003B57?style=flat-square&logo=sqlite)

**Enterprise-Grade Admin Dashboard Solution**

_A sophisticated Laravel administration panel featuring role-based access control and modern UI components_

</div>

## 📋 Table of Contents

-   [Overview](#overview)
-   [Features](#features)
-   [Requirements](#requirements)
-   [Installation](#installation)
-   [Configuration](#configuration)
-   [Architecture](#architecture)
-   [Usage](#usage)
-   [Deployment](#deployment)
-   [API Documentation](#api-documentation)
-   [Testing](#testing)
-   [Security](#security)
-   [Support](#support)

# Laravel SBAdmin2 Pro

<div align="center">

![Laravel](https://img.shields.io/badge/Laravel-10.x-FF2D20?style=flat-square&logo=laravel)
![PHP](https://img.shields.io/badge/PHP-8.1+-777BB4?style=flat-square&logo=php)
![License](https://img.shields.io/badge/License-MIT-blue?style=flat-square)
![SQLite](https://img.shields.io/badge/Database-SQLite-003B57?style=flat-square&logo=sqlite)

**Enterprise-Grade Admin Dashboard Solution**

</div>

## Table of Contents

-   Overview
-   Features
-   Requirements
-   Installation
-   Configuration
-   Architecture
-   Usage
-   Deployment
-   API Documentation
-   Testing
-   Security
-   Support
-   License

## Overview

Laravel SBAdmin2 Pro is an admin dashboard built on Laravel with the SB Admin 2 Bootstrap theme. It includes role-based access (admin/user), migrations, and seeders to get started quickly.

## Features

-   Role-based auth (admin/user)
-   SB Admin 2 UI
-   Blade templates
-   Database migrations & seeders

## Requirements

-   PHP 8.1+
-   Composer 2+
-   SQLite (dev) or MySQL/Postgres (prod)

## Installation

```bash
git clone https://github.com/kevindoni/Laravel-SBAdmin2-Pro.git
cd Laravel-SBAdmin2-Pro
composer install
cp .env.example .env
php artisan key:generate
touch database/database.sqlite
php artisan migrate --seed
php artisan serve
```

Open http://127.0.0.1:8000

## Configuration

Edit `.env` for database and credentials. For production, use a managed DB and secure `.env`.

## Architecture

Standard Laravel layout: `app/`, `config/`, `database/`, `public/`, `resources/`, `routes/`, `storage/`.

## Usage

-   Admin dashboard: `/admin/dashboard`
-   User dashboard: `/user/dashboard`

## Deployment

Cache config and routes and optimize composer for production:

```bash
php artisan config:cache
php artisan route:cache
composer install --optimize-autoloader --no-dev
```

## API Documentation

-   POST `/login` — authenticate
-   POST `/register` — create account
-   POST `/logout` — logout

## Testing

Run tests:

```bash
./vendor/bin/phpunit
```

## Security

-   CSRF, XSS protection via Blade, bcrypt password hashing.

## Support

Open issues on GitHub and include environment details and reproduction steps.

## Contributing

See `CONTRIBUTING.md` for contribution guidelines.

## Code of Conduct

See `CODE_OF_CONDUCT.md` for community standards.

## License

MIT — see `LICENSE`.

---

If you'd like additional sections (screenshots, examples, or installation variants for Windows/Laragon), tell me and I will add them.
| **Password** | `password` |

> **SECURITY ADVISORY**: Immediately update these credentials following initial deployment in production environments.

## ⚙️ Configuration

### Environment Variables

Configure your application environment in the `.env` file:

```env
# Application Configuration
APP_NAME="Laravel SBAdmin2 Pro"
APP_ENV=production
APP_DEBUG=false
APP_KEY=base64:...
APP_URL=http://your-domain.com
APP_TIMEZONE=Asia/Jakarta

# Database Configuration
DB_CONNECTION=sqlite
# DB_CONNECTION=mysql
# DB_HOST=127.0.0.1
# DB_PORT=3306
# DB_DATABASE=laravel_sbadmin
# DB_USERNAME=username
# DB_PASSWORD=password

# Session Configuration
SESSION_DRIVER=file
SESSION_LIFETIME=120
```

### Timezone Configuration

The application utilizes the timezone specified in the `APP_TIMEZONE` environment variable. Adjust this setting according to your operational requirements.

## 🏗 Architecture

### Project Structure

```
Laravel-SBAdmin2-Pro/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   └── Auth/                 # Authentication controllers
│   │   └── Middleware/
│   │       ├── AdminMiddleware.php    # Administrative access control
│   │       └── Authenticate.php       # Authentication handling
│   └── Models/
│       └── User.php                   # User model with role management
├── config/                           # Application configuration files
├── database/
│   ├── migrations/                   # Database schema definitions
│   └── seeders/
│       └── AdminSeeder.php           # Administrator account initialization
├── public/
│   └── template/                     # SB Admin 2 static assets
├── resources/
│   └── views/
│       ├── admin/                    # Administrative interface views
│       ├── user/                     # Standard user interface views
│       ├── auth/                     # Authentication views
│       └── layouts/                  # Reusable layout templates
├── routes/
│   └── web.php                       # Application route definitions
└── storage/                          # File storage and logs
```

### Core Components

1. **Authentication System**

    - Custom registration and login controllers
    - Role-based authentication middleware
    - Secure session management

2. **Administrative Interface**

    - Dedicated admin dashboard
    - Role-specific navigation
    - Administrative functionality

3. **User Interface**
    - Standard user dashboard
    - Role-appropriate feature set
    - User-centric design

## 📊 Usage

### Administrative Access

Administrators can access the administrative dashboard through the following endpoint:

```
/admin/dashboard
```

**Administrative Privileges Include:**

-   Full system access
-   User management capabilities
-   System configuration
-   Administrative reporting

### Standard User Access

Standard users are directed to the user dashboard:

```
/user/dashboard
```

**Standard User Features:**

-   Basic application functionality
-   Role-appropriate feature access
-   Personal account management

### Authentication Workflow

1. **Registration**: New users create accounts through the registration interface
2. **Authentication**: Users authenticate using email and password credentials
3. **Role-Based Routing**: System directs users to appropriate dashboards based on role
4. **Access Control**: Middleware enforces role-based permissions

## 🚀 Deployment

### Production Environment Setup

#### Database Configuration

For production deployments, transition to a robust database solution:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=production_database
DB_USERNAME=secure_username
DB_PASSWORD=complex_password
```

#### Performance Optimization

```bash
# Cache configuration for performance
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Optimize autoloader
composer install --optimize-autoloader --no-dev
```

#### Security Hardening

```env
# Production security settings
APP_DEBUG=false
APP_ENV=production

# Secure session configuration
SESSION_DRIVER=database
SESSION_SECURE_COOKIE=true
```

## 🔌 API Documentation

### Authentication Endpoints

| Method | Endpoint    | Description           |
| ------ | ----------- | --------------------- |
| `POST` | `/login`    | User authentication   |
| `POST` | `/register` | New user registration |
| `POST` | `/logout`   | Session termination   |

### Dashboard Endpoints

| Method | Endpoint           | Description              | Access              |
| ------ | ------------------ | ------------------------ | ------------------- |
| `GET`  | `/admin/dashboard` | Administrative dashboard | Admin only          |
| `GET`  | `/user/dashboard`  | Standard user dashboard  | Authenticated users |

## 🧪 Testing

### Test Execution

```bash
# Execute PHPUnit test suite
./vendor/bin/phpunit

# Generate test coverage report
./vendor/bin/phpunit --coverage-html coverage/
```

### Test Coverage

The application includes comprehensive test coverage for:

-   Authentication functionality
-   Role-based access control
-   Middleware protection
-   Dashboard accessibility

## 🔒 Security

### Security Features

-   **Cross-Site Request Forgery (CSRF) Protection**
-   **SQL Injection Prevention** through Laravel Eloquent ORM
-   **XSS Protection** via Blade template engine
-   **Secure Password Hashing** using bcrypt
-   **Session Security** with configurable timeouts

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
    - Principle of least privilege
    - Regular access reviews
    - Session management

## 📞 Support

### Documentation Resources

-   [Laravel Documentation](https://laravel.com/docs)
-   [SB Admin 2 Documentation](https://startbootstrap.com/theme/sb-admin-2)
-   [PHP Documentation](https://www.php.net/docs.php)

### Issue Resolution

For technical support and issue reporting:

1. **Review Documentation**: Consult this README and inline code documentation
2. **Search Issues**: Check existing GitHub issues for similar problems
3. **Create Issue**: Provide detailed information including:
    - Environment specifications
    - Error messages and logs
    - Steps to reproduce
    - Expected vs. actual behavior

### Community Resources

-   [Laravel Community Forums](https://laravel.io/forum)
-   [Stack Overflow](https://stackoverflow.com/questions/tagged/laravel)
-   [Laravel News](https://laravel-news.com)

## 📄 License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for complete licensing details.

## 🙏 Acknowledgments

-   [Laravel Framework](https://laravel.com) - The foundational PHP framework
-   [SB Admin 2](https://startbootstrap.com/theme/sb-admin-2) - Bootstrap admin template
-   [Bootstrap](https://getbootstrap.com) - Frontend component library
-   Project contributors and maintainers

---

<div align="center">

**Laravel SBAdmin2 Pro** - _Enterprise Administration Solution_

_Built with precision for professional deployment_

</div>
