<p align="center"><h1>uDeck</h1></p>

<p align="center">
A modern web application for managing digital content with a beautiful user interface.
</p>

<p align="center">
<a href="#features">Features</a> •
<a href="#installation">Installation</a> •
<a href="#usage">Usage</a> •
<a href="#contributing">Contributing</a> •
<a href="#license">License</a>
</p>

## About uDeck

uDeck is a web application built with Laravel that provides a seamless user experience for managing digital content. With its modern, responsive design and intuitive interface, uDeck makes it easy to organize, share, and collaborate on digital assets.

## Features

- **User Authentication**: Secure registration and login system
- **Beautiful UI/UX**: Modern and responsive design
- **Content Management**: Easily organize and manage digital content
- **Personalized Experience**: Customizable user profiles and preferences
- **Premium Features**: Access to advanced functionalities
- **Mobile Responsive**: Works seamlessly on all devices

## Installation

### Prerequisites

- PHP >= 7.4
- Composer
- MySQL or PostgreSQL
- Node.js and NPM

### Setup

1. Clone the repository
   ```
   git clone https://github.com/yourusername/udeck.git
   cd udeck
   ```

2. Install dependencies
   ```
   composer install
   npm install
   ```

3. Configure environment
   ```
   cp .env.example .env
   php artisan key:generate
   ```

4. Configure your database in the `.env` file
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=udeck
   DB_USERNAME=root
   DB_PASSWORD=
   ```

5. Run migrations and seeders
   ```
   php artisan migrate --seed
   ```

6. Compile assets
   ```
   npm run dev
   ```

7. Start the development server
   ```
   php artisan serve
   ```

## Usage

After installation, you can access the application at `http://localhost:8000`.

### User Registration

New users can register by navigating to the registration page and filling out the form with their details.

### Managing Content

Once logged in, users can start managing their digital content through the intuitive dashboard interface.

## Contributing

Contributions are welcome! Please feel free to submit a Pull Request.

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add some amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

## License

This project is licensed under the MIT License - see the LICENSE file for details.
