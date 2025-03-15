# Discover Islam

Discover Islam is an Islamic Q&A platform built with Laravel 12 and PHP 8.2. The platform allows users to ask questions about Islam and receive answers from verified sources. It includes features like categories, comments, admin controls, and multi-language support.

## Features

- User-submitted questions on various Islamic topics.
- Verified users or admins can post answers.
- Categories like Namaz, Hadees, Tableegh, and Fiqh.
- Comment and reply system.
- Admin panel for managing content and users.
- Multi-language support.

## Requirements

- PHP 8.2
- Laravel 12
- Composer
- MySQL (or any other relational database)

## Installation

1. **Clone the repository**:
   
   ```bash
   git clone https://github.com/yourusername/askislam.git
   cd discoverIslam

2. **Install backend dependencies:**

  ```bash
  composer install
3. **Set up environment variables:**

Copy the .env.example file to .env and configure your environment:

4. **Generate application key:**

  ```bash
  php artisan key:generate

5. **Run migrations and seed the database:**

  ```bash
  php artisan migrate --seed

6. **Serve the application:**

  ```bash
  php artisan serve
- The application will be accessible at http://localhost:8000.

7. **License**
This project is open-source and licensed under the MIT License.
