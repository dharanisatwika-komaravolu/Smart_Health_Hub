# Smart Health

Smart Health is a web-based application designed to provide users with access to medical services, allowing them to book appointments, manage health records, and communicate with healthcare providers. The project is built with a Laravel backend and a React frontend, ensuring a modern and responsive user interface with robust backend functionality.

## Table of Contents
- [Features](#features)
- [Tech Stack](#tech-stack)
- [Installation](#installation)
- [Usage](#usage)
- [API Endpoints](#api-endpoints)
- [Contributing](#contributing)
- [License](#license)

## Features

- **User Authentication**: Patients and doctors can sign up and log in securely.
- **Appointment Booking**: Patients can book appointments with available doctors.
- **Doctor Management**: Admins can add and manage doctor profiles.
- **Health Records**: Patients can access and update their medical records.
- **Appointment Management**: Doctors can view and manage patient appointments.
- **Notifications**: Users are notified about upcoming appointments and changes.
- **Responsive Design**: Works across various devices for easy access.

## Tech Stack

- **Frontend**: React, HTML5, CSS3, JavaScript
- **Backend**: Laravel, PHP
- **Database**: MySQL
- **API**: RESTful API
- **Authentication**: JWT (JSON Web Tokens)

## Installation

Follow these steps to set up the project locally:

### Prerequisites

- PHP >= 7.3
- Node.js & npm
- Composer
- MySQL

### Backend (Laravel Setup)

1. Clone the repository:
    ```bash
    git clone https://github.com/Akhil188/smart_health.git
    cd smart_health/backend
    ```

2. Install the dependencies:
    ```bash
    composer install
    ```

3. Create a `.env` file:
    ```bash
    cp .env.example .env
    ```

4. Generate the application key:
    ```bash
    php artisan key:generate
    ```

5. Update the `.env` file with your database credentials:
    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=smart_health
    DB_USERNAME=root
    DB_PASSWORD=your_password
    ```

6. Run the migrations and seed the database:
    ```bash
    php artisan migrate --seed
    ```

7. Start the Laravel server:
    ```bash
    php artisan serve
    ```

### Frontend (React Setup)

1. Navigate to the frontend folder:
    ```bash
    cd ../frontend
    ```

2. Install the dependencies:
    ```bash
    npm install
    ```

3. Start the React development server:
    ```bash
    npm start
    ```

## Usage

1. Open the browser and go to `http://localhost:8000` for the backend.
2. For the frontend, visit `http://localhost:3000`.

### User Roles

- **Admin**: Can manage doctors, appointments, and users.
- **Doctor**: Can manage appointments and access patient health records.
- **Patient**: Can book appointments and access personal health records.

## API Endpoints

### Authentication
- `POST /api/register`: Register a new user (Admin, Doctor, or Patient).
- `POST /api/login`: Log in with email and password to receive a JWT token.

### Patients
- `GET /api/patients`: Get all patients (Admin only).
- `POST /api/patients`: Create a new patient profile.

### Appointments
- `POST /api/appointments`: Book an appointment with a doctor.
- `GET /api/appointments`: Retrieve appointments based on user type.

## Contributing

If you'd like to contribute, please fork the repository and use a feature branch. Pull requests are warmly welcome.

1. Fork the project.
2. Create your feature branch:
    ```bash
    git checkout -b feature/AmazingFeature
    ```
3. Commit your changes:
    ```bash
    git commit -m 'Add some AmazingFeature'
    ```
4. Push to the branch:
    ```bash
    git push origin feature/AmazingFeature
    ```
5. Open a pull request.

## License

Distributed under the MIT License. See `LICENSE` for more information.
