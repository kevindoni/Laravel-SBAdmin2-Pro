# Laravel SBAdmin2 Pro

<div align="center">

![Laravel](https://img.shields.io/badge/Laravel-10.x-FF2D20?style=for-the-badge&logo=laravel)
![PHP](https://img.shields.io/badge/PHP-8.1+-777BB4?style=for-the-badge&logo=php)
![License](https://img.shields.io/badge/License-MIT-blue?style=for-the-badge)
![SQLite](https://img.shields.io/badge/Database-SQLite-003B57?style=for-the-badge&logo=sqlite)

## Enterprise-Grade Administration Dashboard

**Professional Laravel solution with role-based access control and modern UI components**

[Installation](#-installation) • [Demo](#-demo) • [Documentation](#-documentation)

</div>

## ✨ Features

### 🔐 Security & Authentication
- **Multi-role Authentication System** (Admin/User)
- **Role-based Middleware Protection**
- **CSRF & XSS Protection**
- **Secure Session Management**

### 🎨 User Interface
- **SB Admin 2 Template** - Professional Bootstrap theme
- **Fully Responsive Design** - Mobile-first approach
- **Separate Dashboards** - Tailored experiences per role
- **Modern UI Components** - Cards, charts, and widgets

### ⚡ Performance
- **Optimized Laravel Structure**
- **Efficient Database Queries**
- **Caching Ready**
- **Asset Optimization**

## 🚀 Quick Start

### Prerequisites

- **PHP 8.1+** with extensions: BCMath, Ctype, JSON, Mbstring, OpenSSL, PDO, Tokenizer, XML
- **Composer 2.0+**
- **SQLite3** (development) or **MySQL 5.7+** / **PostgreSQL 9.5+** (production)

### Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/kevindoni/Laravel-SBAdmin2-Pro.git
   cd Laravel-SBAdmin2-Pro
   ```

2. **Install dependencies**
   ```bash
   composer install --no-dev --optimize-autoloader
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

5. **Launch application**
   ```bash
   php artisan serve
   ```
   Visit: `http://localhost:8000`

### Default Admin Account
- **Email**: `admin@example.com`
- **Password**: `password`

> ⚠️ **Security Notice**: Change these credentials immediately after first login.

## 📁 Project Structure

```
app/
├── Http/
│   ├── Controllers/
│   │   └── Auth/          # Authentication controllers
│   └── Middleware/
│       └── AdminMiddleware.php
├── Models/
│   └── User.php           # User model with admin flag
database/
├── migrations/            # Database schema
└── seeders/
    └── AdminSeeder.php    # Default admin user
resources/
└── views/
    ├── admin/             # Admin-specific views
    ├── user/              # User-specific views
    ├── auth/              # Authentication views
    └── layouts/           # Reusable templates
public/template/           # SB Admin 2 assets
```

## ⚙️ Configuration

### Environment Setup

Update your `.env` file:

```env
APP_NAME="Laravel SBAdmin2 Pro"
APP_ENV=local
APP_DEBUG=true
APP_KEY=base64:...
APP_URL=http://localhost:8000
APP_TIMEZONE=Asia/Jakarta

DB_CONNECTION=sqlite
# DB_CONNECTION=mysql
# DB_HOST=127.0.0.1
# DB_PORT=3306
# DB_DATABASE=homestead
# DB_USERNAME=homestead
# DB_PASSWORD=secret

SESSION_DRIVER=file
SESSION_LIFETIME=120
```

## 🎯 Usage

### Dashboard Access

| Role | Dashboard URL | Access Level |
|------|---------------|--------------|
| **Admin** | `/admin/dashboard` | Full system access |
| **User** | `/user/dashboard` | Limited features |

### Authentication Flow

1. **Registration** - New users register through the sign-up form
2. **Login** - Users authenticate with email and password
3. **Role Detection** - System redirects to appropriate dashboard
4. **Access Control** - Middleware protects routes based on role

## 🛠 Development

### Adding New Features

1. **Create Controller**
   ```bash
   php artisan make:controller Admin/NewFeatureController
   ```

2. **Define Routes** in `routes/web.php`
   ```php
   Route::get('/admin/new-feature', [NewFeatureController::class, 'index'])
        ->middleware(['auth', 'admin']);
   ```

3. **Create Views** in `resources/views/admin/`

### Database Management

```bash
# Create migration
php artisan make:migration create_feature_table

# Run migrations
php artisan migrate

# Rollback
php artisan migrate:rollback
```

## 📦 Production Deployment

### Optimization

```bash
# Cache configuration
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Optimize autoloader
composer install --optimize-autoloader --no-dev
```

### Database Configuration

Switch to MySQL/PostgreSQL in production:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=production_db
DB_USERNAME=username
DB_PASSWORD=secure_password
```

### Security Hardening

```env
APP_DEBUG=false
APP_ENV=production
SESSION_DRIVER=database
```

## 🧪 Testing

```bash
# Run tests
./vendor/bin/phpunit

# Test with coverage
./vendor/bin/phpunit --coverage-html coverage/
```

## 🔒 Security Features

- **CSRF Protection** - Built-in Laravel security
- **XSS Prevention** - Blade template escaping
- **SQL Injection Protection** - Eloquent ORM
- **Password Hashing** - Bcrypt algorithm
- **Session Security** - Configurable timeouts

## 📚 Documentation

### API Endpoints

| Method | Endpoint | Description | Access |
|--------|----------|-------------|--------|
| `POST` | `/login` | User authentication | Public |
| `POST` | `/register` | New user registration | Public |
| `POST` | `/logout` | Session termination | Authenticated |
| `GET` | `/admin/dashboard` | Admin dashboard | Admin only |
| `GET` | `/user/dashboard` | User dashboard | Authenticated |

## 🤝 Contributing

We welcome contributions! Please see our [Contributing Guidelines](CONTRIBUTING.md) for details.

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

## 📄 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 🆘 Support

- **Documentation**: [Laravel Docs](https://laravel.com/docs)
- **Issues**: [GitHub Issues](https://github.com/kevindoni/Laravel-SBAdmin2-Pro/issues)
- **Email**: Support team contact

## 🙏 Acknowledgments

- [Laravel](https://laravel.com) - The fantastic PHP framework
- [SB Admin 2](https://startbootstrap.com/theme/sb-admin-2) - Bootstrap admin theme
- Contributors and community members

---

<div align="center">

### **Ready to get started?**

[View Demo](https://demo.example.com) • [Report Issue](https://github.com/kevindoni/Laravel-SBAdmin2-Pro/issues) • [Request Feature](https://github.com/kevindoni/Laravel-SBAdmin2-Pro/issues)

**Built with ❤️ using Laravel and SB Admin 2**

</div>
