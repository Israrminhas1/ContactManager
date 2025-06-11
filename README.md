# Contact Manager

A simple Contact Manager web application built with Laravel - MVP version of a CRM tool.

## About

Contact Manager is a web-based application that allows you to manage your contacts efficiently. It provides essential contact management features including adding, editing, deleting, and searching contacts.

### Features

- ✅ Add new contacts with name, email, phone, and tags
- ✅ Edit existing contact information
- ✅ Delete contacts with confirmation
- ✅ Search contacts by name or tags (partial match support)
- ✅ View all contacts in a clean, paginated interface
- ✅ Tag-based organization system
- ✅ Responsive design (works on desktop and mobile)
- ✅ Form validation and error handling
- ✅ Success/error flash messages

### Tech Stack

- **Backend:** Laravel 12
- **Frontend:** Blade Templates + Tailwind CSS
- **Database:** SQLite (default) / MySQL / PostgreSQL
- **Architecture:** MVC with Eloquent ORM

## Installation & Setup

### Prerequisites

- PHP 8.2 or higher
- Composer
- Node.js (optional, for asset compilation)

### Installation Steps

1. **Clone the repository**
   ```bash
   git clone https://github.com/Israrminhas1/ContactManager.git
   cd ContactManager
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Environment setup**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Database setup**
   ```bash
   php artisan migrate
   ```

5. **Seed sample data (optional)**
   ```bash
   php artisan db:seed --class=ContactSeeder
   ```

6. **Start the development server**
   ```bash
   php artisan serve
   ```

7. **Access the application**
   Open your browser and navigate to: `http://localhost:8000`

## Usage

1. **View Contacts:** The homepage displays all your contacts in a table format
2. **Add Contact:** Click "Add New Contact" to create a new contact
3. **Search:** Use the search bar to find contacts by name or tags
4. **Edit:** Click "Edit" next to any contact to modify their information
5. **View Details:** Click "View" to see full contact details
6. **Delete:** Use the delete button to remove contacts (with confirmation)

## Database Structure

### Contacts Table
- `id` - Primary key
- `name` - Contact name (required)
- `email` - Email address (optional)
- `phone` - Phone number (optional)
- `tags` - Comma-separated tags (optional)
- `created_at` - Creation timestamp
- `updated_at` - Last update timestamp

## Sample Data

The application includes a seeder with 8 sample contacts to help you get started. Run the seeder command to populate your database with test data.

## Contributing

1. Fork the repository
2. Create a feature branch
3. Make your changes
4. Submit a pull request

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
