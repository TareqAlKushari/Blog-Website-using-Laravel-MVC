# 📝 Laravel Blog Website

![Laravel](https://img.shields.io/badge/Laravel-10.x-red?style=flat&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-8.x-blue?style=flat&logo=php&logoColor=white)
![License](https://img.shields.io/github/license/TareqAlKushari/Laravel-Blog-Website?style=flat)
![Maintenance](https://img.shields.io/badge/Maintained-yes-brightgreen?style=flat)
![Issues](https://img.shields.io/github/issues/TareqAlKushari/Laravel-Blog-Website?style=flat)

---

A full-featured blog platform built using **Laravel 10**. This project demonstrates clean architecture, modern web design, authentication, CRUD operations, and scalable Laravel practices.

---

## 🚀 Features

- 🔐 User Authentication & Authorization
- ✍️ Rich-text post editor
- 🏷 Category & Tag management
- 📊 Admin Dashboard
- 🌐 SEO-friendly URLs & meta tags
- 🔎 Search functionality
- 💬 Comments system (optional)
- 📱 Responsive and mobile-first design
- 🔒 Security best practices implemented
- 📦 Easily extendable structure for future features

---

## 📸 Demo Preview

### Homepage

![Homepage Screenshot](https://via.placeholder.com/800x400?text=Blog+Homepage+Screenshot)

### Admin Dashboard

> Index Screenshot

![Index Screenshot](/public/images/Screenshot1.png)

> View Screenshot

![View Screenshot](/public/images/Screenshot2.png)

> Create Screenshot

![Create Screenshot](/public/images/Screenshot3.png)

> Edit Screenshot

![Edit Screenshot](/public/images/Screenshot4.png)

---

## 🛠 Tech Stack

| Technology  | Description         |
| ------------| --------------------|
| Laravel     | PHP Framework       |
| PHP         | Backend Language    |
| MySQL       | Database            |
| Blade       | Laravel Templating  |
| Bootstrap   | Frontend Framework  |
| JavaScript  | Interactivity       |
| Composer    | PHP Dependency Manager |

---

## ⚙️ Installation Guide

> Make sure you have PHP, Composer, Node.js, MySQL installed on your machine.

```bash
# Clone the repository
git clone https://github.com/TareqAlKushari/Laravel-Blog-Website.git
cd Laravel-Blog-Website

# Install PHP dependencies
composer install

# Copy .env and set your environment variables
cp .env.example .env
php artisan key:generate

# Install Node dependencies (optional if you use frontend assets)
npm install && npm run dev

# Set up your database credentials inside `.env`
php artisan migrate --seed

# Start the local server
php artisan serve
````

Access your application at: [http://127.0.0.1:8000](http://127.0.0.1:8000)

---

## 📄 API Documentation (Future Enhancement)

* `GET /posts` — List all blog posts
* `POST /posts` — Create a new post
* `PUT /posts/{id}` — Update a post
* `DELETE /posts/{id}` — Delete a post
* `GET /categories` — List all categories

> *More detailed API documentation can be generated with tools like Laravel API Resources, Swagger, or Postman collections.*

---

## 🤝 Contributing

Contributions, issues, and feature requests are welcome!

* Fork the repository
* Create a new branch (`git checkout -b feature-branch`)
* Commit your changes (`git commit -m "Add some feature"`)
* Push to the branch (`git push origin feature-branch`)
* Open a pull request

---

## Author 🙋‍♂️

**Tareq Al-Kushari**
[GitHub](https://github.com/TareqAlKushari) • [LinkedIn](https://www.linkedin.com/) • [Facebook](https://www.facebook.com/profile.php?id=61562736475116&mibextid=ZbWKwL) • [Instagram](https://www.instagram.com/tareq.al.kushari?igsh=MTBhZjRuYnFoMWw1YQ==) • [Twitter (X)](https://x.com/Al_Kushari?t=gU61bcmlDbtf3KV4kqGULA&s=09) • [tareq.al.kushari@gmail.com](mailto:tareq.al.kushari@gmail.com) • [+967773350540](tel:+967773350540) • [Portfolio Website](#)

## License 📜

This project is open-source and available under the [MIT License](LICENSE).

---

⭐ If you found this project helpful, please give it a star!
📢 Feel free to fork and contribute to this project.
