# Creating First Laravel Project

## Creation of project repository
### 1. Open Powershell on a specific folder you want to insert the project
```
compose create-project laravel/laravel [project name]

cd [project name]
```

### 2. Project Structure
This automatically generates these folders in the project files
```
my-first-app/
├── app/                    ← Your application code
│   └── Http/
│       └── Controllers/    ← Controllers (like LoginController)
├── resources/
│   └── views/              ← Blade templates (.blade.php files)
├── routes/
│   └── web.php             ← URL routes
├── database/
│   ├── migrations/         ← Database structure
│   └── seeders/            ← Sample data
├── .env                    ← Environment config (like your PCED project)
└── composer.json           ← Project dependencies
```

### 3. Configure .env file
This is where you configure your database
```
DB_CONNECTION=sqlsrv
DB_HOST=DESKTOPNAME
DB_PORT=
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
```

### 4. Create Your First Page
1. Open VS Code
2. Open the project folder
3. Click **Terminal** -> **New Terminal** or shortcut for `Ctrl + ~`
4. Run the following code

#### Generate a controller
```
php artisan make:controller PageController
```

#### Generate a view
```
php artisan make:view Welcome
```