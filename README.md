# Super Simple MVC PHP
<p align="center">
<img src="https://i.ibb.co/mVp1LGqk/ss.png" alt="ss" border="0">
</p>
**SuperSimpleMVCPHP** is a minimalist PHP project designed to demonstrate the core principles of the **MVC (Model–View–Controller)** architecture. This project is ideal for beginners who want to understand how routing, controllers, models, and views work in a PHP environment — without the overhead of a full framework.

---

## 🎯 Purpose

The main purpose of this project is to **learn and understand MVC architecture** in PHP. The code is written to be as clear and simple as possible, making it easy for newcomers to follow and experiment.

---

## 📁 Project Structure

```
SuperSimpleMVCPHP/
├── app/
│   ├── controllers/
│   ├── core/
│   ├── models/
│   └── views/
├── public/
│   └── index.php
├── .htaccess
└── README.md
```

- `public/index.php` – Entry point of the application (bootstrap)
- `core/` – Core classes: App (router), Controller (base controller)
- `controllers/` – Your controller classes (e.g., Home.php)
- `models/` – Data access logic
- `views/` – HTML rendering files

---

## 🚀 Quick Start

1. Clone the repository:

```bash
git clone https://github.com/ifet4u/SuperSimpleMVCPHP.git
```

2. Start the built-in PHP server:

```bash
cd SuperSimpleMVCPHP/public
php -S localhost:8000
```

3. Open in your browser: [http://localhost:8000](http://localhost:8000)

---

## 🧠 How It Works

### 1. `index.php`

The application's entry point. Loads the `App` class and starts routing based on the URL.

### 2. `App.php`

Parses the URL and dynamically calls the corresponding controller and method.

Example URL:
```
/home/about
```
→ Calls the `Home` controller and its `about()` method.

### 3. Controllers

```php
class Home extends Controller {
    public function index() {
        $this->view('home/index');
    }
}
```

### 4. Views

Views are simple `.php` files located in the `app/views/` directory. You can pass data from the controller to the view using an associative array.

#### Example: Passing variables to a view

**Controller:**
```php
class Home extends Controller {
    public function index() {
        $data = [
            'title' => 'Welcome Page',
            'message' => 'Hello from the controller!',
            'users' => ['Alice', 'Bob', 'Charlie']
        ];

        $this->view('home/index', $data);
    }
}
```

**View (`app/views/home/index.php`):**
```php
<h1><?php echo $title; ?></h1>
<p><?php echo $message; ?></p>

<ul>
<?php foreach ($users as $user): ?>
    <li><?php echo $user; ?></li>
<?php endforeach; ?>
</ul>
```

The `view()` method automatically extracts the array into variables, so you can use `$title`, `$message`, or even loop through `$users` directly in your view.

You can pass both **single values** and **arrays**, depending on what your view needs to display.

---

## 🧪 Example: Creating a Route

URL: `/home/hello/Marko`

Controller method:
```php
public function hello($name = '') {
    echo "Hello, $name!";
}
```

---

## 🔐 Security Note

- This project is **not suitable for production** — it lacks protections like SQL injection prevention, CSRF, XSS, etc.
- There's no session management, authentication, or templating engine — it's built to stay as minimal as possible for learning purposes.

---

## 🤝 Contributing

If you'd like to improve this educational project:

1. Fork the repository
2. Create your branch (`git checkout -b feature/your-feature`)
3. Submit a pull request

---

## 🙌 Acknowledgements

Special thanks to [Dave Hollingworth](https://davehollingworth.com) ([GitHub profile](https://github.com/daveh)), whose tutorials and teaching style greatly helped shape this project and made learning MVC in PHP much easier.

The name **SuperSimpleMVCPHP** is a nod to [Super Simple Songs](https://supersimple.com/super-simple-songs), whose approach to learning — simple, clear, and effective — inspired the naming style of this project. While the content is entirely different, the philosophy of making learning easy and enjoyable is shared.

---

## 📄 License

MIT License — free to use, modify, and distribute for educational purposes.

---

## 📬 Contact

Author: [ifet4u](https://github.com/ifet4u)

Feel free to reach out if you have questions, suggestions, or want to use this in your course or classroom.
