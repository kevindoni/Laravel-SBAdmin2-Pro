# Laravel SBAdmin2 Pro

![Laravel Version](https://img.shields.io/badge/Laravel-10.x-FF2D20?style=for-the-badge&logo=laravel)
![PHP Version](https://img.shields.io/badge/PHP-8.1+-777BB4?style=for-the-badge&logo=php)
![License](https://img.shields.io/badge/License-MIT-blue?style=for-the-badge)

A professional Laravel admin dashboard built with SB Admin 2 template, featuring robust authentication and role-based access control.

## ✨ Features

### 🔐 Authentication & Security

-   **Multi-role Authentication** (Admin/User)
-   **Role-based Middleware** protection
-   **Secure session management**
-   **CSRF protection**

### 🎨 User Interface

-   **SB Admin 2 Template** - Modern Bootstrap admin theme
-   **Responsive Design** - Mobile-friendly interface
-   **Separate Dashboards** - Tailored experiences for admin and users
-   **Clean Layout** - Professional appearance

### ⚙️ Technical Features

-   **SQLite Database** (Development)
-   **MySQL/PostgreSQL** ready (Production)
-   **MVC Architecture**
-   **Blade Templating**
-   **Artisan Commands**

## 🚀 Quick Start

### Prerequisites

Ensure you have the following installed:

-   **PHP 8.1+**
-   **Composer**
-   **SQLite3** (for development)

### Installation

1. **Clone the repository**

    ```bash
    git clone https://github.com/kevindoni/Laravel-SBAdmin2-Pro.git
    cd Laravel-SBAdmin2-Pro
    ```

2. **Install PHP dependencies**

    ```bash
    composer install
    ```

3. **Environment Configuration**

    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

4. **Database Setup**

    ```bash
    # Create SQLite database file
    touch database/database.sqlite

    # Run migrations and seed admin user
    php artisan migrate --force
    php artisan db:seed --class=AdminSeeder
    ```

5. **Start Development Server**
    ```bash
    php artisan serve
    ```
    Access your application at: `http://localhost:8000`

## 👤 Default Admin Credentials

**Email:** `admin@example.com`  
**Password:** `password`

> ⚠️ **Security Note:** Change these credentials immediately after first login in production environments.

## 📁 Project Structure

```
Laravel-SBAdmin2-Pro/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   └── Auth/          # Authentication controllers
│   │   └── Middleware/
│   │       └── AdminMiddleware.php  # Role-based access control
│   └── Models/
│       └── User.php           # User model with admin flag
├── database/
│   ├── migrations/            # Database schema
│   └── seeders/
│       └── AdminSeeder.php    # Default admin user
├── public/
│   └── template/              # SB Admin 2 assets
├── resources/
│   └── views/
│       ├── admin/             # Admin-specific views
│       ├── user/              # User-specific views
│       ├── auth/              # Authentication views
│       └── layouts/           # Reusable layout templates
└── routes/
     └── web.php                # Application routes
```

## 🔧 Configuration

### Environment Variables

Key configuration options in `.env`:

```env
APP_NAME="Laravel SBAdmin2 Pro"
APP_ENV=local
APP_KEY=base64:...
APP_DEBUG=true
APP_TIMEZONE=Asia/Jakarta

# Database Configuration
DB_CONNECTION=sqlite
# DB_CONNECTION=mysql  # For production
```

### Timezone Configuration

The application uses the timezone specified in `APP_TIMEZONE` (default: Asia/Jakarta). Update this in your `.env` file as needed.

## 🎯 Usage Guide

### For Administrators

-   Access admin dashboard at `/admin/dashboard`
-   Manage users and application settings
-   Full system access

### For Regular Users

-   Access user dashboard at `/user/dashboard`
-   Limited permissions based on role
-   Basic application features

### Authentication Flow

1. **Registration** - New users can register accounts
2. **Login** - Users authenticate with email/password
3. **Role Detection** - System redirects to appropriate dashboard
4. **Middleware Protection** - Unauthorized access attempts are blocked

## 🛠 Development

### Adding New Features

1. Create controllers in `app/Http/Controllers/`
2. Define routes in `routes/web.php`
3. Create views in `resources/views/`
4. Run migrations for database changes

### Customizing Templates

-   Modify `resources/views/layouts/` for global changes
-   Admin-specific changes in `resources/views/admin/`
-   User-specific changes in `resources/views/user/`

### Database Management

```bash
# Create new migration
php artisan make:migration create_table_name

# Run migrations
php artisan migrate

# Rollback migrations
php artisan migrate:rollback
```

## 📦 Production Deployment

### Database Considerations

For production, switch to MySQL or PostgreSQL:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

### Optimization Steps

1. **Cache configuration**

    ```bash
    php artisan config:cache
    php artisan route:cache
    php artisan view:cache
    ```

2. **Environment optimization**

    ```env
    APP_DEBUG=false
    APP_ENV=production
    ```

3. **Security enhancements**
    - Change default admin credentials
    - Use strong app key
    - Configure secure session driver

## 🤝 Contributing

We welcome contributions! Please follow these steps:

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

### Code Standards

-   Follow PSR-12 coding standards
-   Write clear commit messages
-   Add comments for complex logic
-   Update documentation accordingly

## 🐛 Troubleshooting

### Common Issues

**Database errors:**

-   Ensure SQLite is enabled in PHP
-   Check file permissions for `database/database.sqlite`

**Authentication issues:**

-   Clear application cache: `php artisan cache:clear`
-   Reset sessions by clearing browser data

**Template not loading:**

-   Verify assets in `public/template/`
-   Check file permissions

### Debug Mode

For development, enable debug mode in `.env`:

```env
APP_DEBUG=true
```

## 📄 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 🙏 Acknowledgments

-   [Laravel](https://laravel.com) - The fantastic PHP framework
-   [SB Admin 2](https://startbootstrap.com/theme/sb-admin-2) - Bootstrap admin theme
-   Contributors and testers

---

## 📞 Support

If you encounter any issues or have questions:

1. Check the [troubleshooting](#-troubleshooting) section
2. Search existing [GitHub issues](https://github.com/kevindoni/Laravel-SBAdmin2-Pro/issues)
3. Create a new issue with detailed information

**Happy Coding!** 🚀

---

<div align="center">

_Built with ❤️ using Laravel and SB Admin 2_

</div>
