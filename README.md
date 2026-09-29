# Personal Task Manager

## Project Code
WST21-PM-2026-SF

## Student Name
KENT BERNARD A. VILLONA

## Course & Year
BSIT 2nd Year

## Database Used
SQLite

## Features
- Add Task
- View Tasks
- Edit Task
- Delete Task
- Update Status

## UI
<img width="1280" height="561" alt="image" src="https://github.com/user-attachments/assets/7f0c46de-f7bf-4c88-90da-45cc1563c094" />
<img width="1280" height="561" alt="image" src="https://github.com/user-attachments/assets/63f3adc0-a986-4f9e-8d45-ab0f7bfb230c" />

s
## How It Works
Built using Laravel's MVC structure:
- **Routes** (`routes/web.php`) define the URLs
- **Controller** (`app/Http/Controllers/TaskController.php`) handles the logic
- **Model** (`app/Models/Task.php`) represents the tasks table
- **Database**: SQLite (`database/database.sqlite`)
- **Blade Views** (`resources/views/tasks/`) render the UI

### Example: Adding a Task
1. Click "+ Add Task" → shows the form (`tasks.create` route)
2. Fill in the form and submit → goes to `tasks.store` route
3. Controller validates the data, then saves it using the Model
4. Model inserts the new task into the SQLite database
5. Page redirects back to the task list, now showing the new task

The same flow applies to Editing, Deleting, and Updating Status.

