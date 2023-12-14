# Leave Management System

## Introduction

This is a simple leave management system that allows users to apply for leave and view their leave history. The system
also allows the admin to view all leave applications and approve or reject them.
This system has dynamic approval levels. This means that the admin can set the approval levels for each leave type. For
example, the admin can set the approval level for annual leave to be 2. This means that the leave application will be
approved by the admin and the manager. The admin can also set the approval level for medical leave to be 1. This means
that the leave application will only be approved by the admin.

## Features

- User can apply for leave
- User can view leave history
- Admin can view all leave applications
- Admin can approve or reject leave applications
- Admin can set approval levels for each leave type
- Admin can add new leave types
- Admin can edit leave types
- Admin can delete leave types
- Admin can add new users
- Admin can edit users
- Admin can delete users
- Admin can view all users
- Admin can view all leave types
- Admin can view all leave history

## Technologies

- Laravel 10
- Bootstrap 5
- MySQL
- PHP 8
- HTML 5
- CSS 3
- JavaScript
- jQuery
- AJAX
- Font Awesome 5
- DataTables
- Select2
- SweetAlert2
- Toastr
- Chart.js
- FullCalendar
- Moment.js
- Flatpickr

## Installation

1. Clone the repository

```
git clone  https://github.com/CaMiMtoto/Leave-Management-System.git
```

2. Change directory

```
cd Leave-Management-System
```

3. Install composer dependencies

```
composer install
```

4. Install npm dependencies

```
npm install
```

5. Create a copy of your .env file

```
cp .env.example .env
```

6. Generate an app encryption key

```
php artisan key:generate
```

7. Create an empty database for our application
8. In the .env file, add database information to allow Laravel to connect to the database
9. Migrate the database

```
php artisan migrate
```

10. Seed the database

```
php artisan db:seed
```

11. Start the local development server

```
php artisan serve
```

12. Visit http://localhost:8000 in your browser to view the application

