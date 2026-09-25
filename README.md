# Personal Task Manager

Project Code: WST21-PM-2026-SF
Student Name: KENT BERNARD A. VILLONA
Course & Year: BSIT
Database Used: SQLite

## Features
- Add Task
- View Tasks
- Edit Task
- Delete Task
- Update Status

## How It Works
Built using Laravel's MVC structure:
- **Routes** (`routes/web.php`) define the URLs
- **Controller** (`app/Http/Controllers/TaskController.php`) handles the logic
- **Model** (`app/Models/Task.php`) represents the tasks table
- **Database**: SQLite (`database/database.sqlite`)
- **Blade Views** (`resources/views/tasks/`) render the UI

## Setup Instructions
1. Clone the repository
2. Run `composer install`
3. Copy `.env.example` to `.env`
4. Run `php artisan key:generate`
5. Create the database file: `touch database/database.sqlite`
6. Run `php artisan migrate`
7. Run `php artisan serve`
8. Visit the app in your browser
