# Pikachu's Pizzeria — Sample Website

**A multi-page business website for a local pizzeria**, built as the first project of an Erasmus+ formative internship. It demonstrates foundational web development: server-side includes, bilingual content, and clean CSS layout.

> **Language:** English | [Español](README.es.md)

---

## Project context

|              |                                                                          |
| ------------ | ------------------------------------------------------------------------ |
| **Author**   | Miguel Eduardo Marcano Ordaz                                             |
| **Context**  | Erasmus+ formative internship at TR Consulting Group (TR CONSULTINGROUP SRL), Avezzano, Italy — **project #1 of 4** (increasing complexity) |
| **Role**     | Software Technician (full-time intern)                                   |
| **Year**     | 2026                                                                     |
| **Languages**| Spanish (default) and Italian                                           |

---

## Screenshots

![Home page — Pikachu's Pizzeria](Pizzeria1.PNG)

![Menu page — pizza options](Pizzeria2.PNG)

---

## Overview

Pikachu's Pizzeria is a static multi-page site simulating a small local business. It was the entry point of the internship's progressive web track (pizza page → library → property rental → clinic SaaS MVP) and focuses on the fundamentals: reusable PHP includes, a two-language interface, and hand-written CSS with no framework.

| Area                     | Details                                                                     |
| ------------------------ | --------------------------------------------------------------------------- |
| **Pages**                | Home, About Us, Menu, and Contact                                           |
| **Backend**              | PHP with reusable includes (`header.php`, `footer.php`)                     |
| **Internationalization** | Spanish (default) and Italian via `?lang=es` / `?lang=it` query parameters  |
| **Styling**              | Custom CSS with layout, typography, hover effects, and form styling         |
| **Forms**                | Contact form with HTML5 validation (`required`, `email`, `select`, `textarea`) |
| **Content**              | Static business content: story, values, menu items with images, contact details |

---

## Features

- **PHP** — server-side includes, conditional rendering, and dynamic footer year
- **HTML5** — semantic structure (`header`, `nav`, `main`, `section`, `footer`), accessible labels, and form elements
- **CSS3** — Flexbox layout, gradients, transitions, focus states, and a responsive contact section (`flex-wrap`)
- **Project structure** — separation of layout (header/footer), styles, and page content across multiple files
- **i18n basics** — language switching without a framework, preserving navigation across pages
- **UX** — clear navigation, visual hierarchy, and a practical contact form layout

---

## Tech stack

| Layer            | Technology                          |
| ---------------- | ----------------------------------- |
| Backend          | PHP (no framework)                  |
| Frontend         | HTML5, CSS3                         |
| Internationalization | Query-parameter language switch (`?lang=`) |
| Local server     | PHP built-in server                 |

---

## Project structure

```
sitio-web-offline/
├── index.php           # Home page
├── quienes-somos.php   # About Us
├── servicios.php       # Menu
├── contacto.php        # Contact form and business info
├── header.php          # Shared header and navigation
├── footer.php          # Shared footer
├── style.css           # Global styles
└── imagenes/           # Logo, flags, backgrounds, and pizza images
```

---

## Getting started

Requires PHP installed on your machine.

```bash
cd sitio-web-offline
php -S localhost:8000
```

Then open [http://localhost:8000](http://localhost:8000) in your browser.

Switch language with the flag icons in the navigation bar, or append `?lang=it` / `?lang=es` to any page URL.

**Notes**

- This is a **static sample project** — the contact form does not send emails or persist data.
- Images are included locally so the site works fully offline.

---

## Author

**Miguel Eduardo Marcano Ordaz**

|          |                                                                                           |
| -------- | ----------------------------------------------------------------------------------------- |
| GitHub   | [github.com/memomiguel](https://github.com/memomiguel)                                    |
| LinkedIn | [Miguel Eduardo Marcano Ordaz](https://www.linkedin.com/in/miguel-eduardo-marcano-ordaz/) |
| Email    | [memomiguel@proton.me](mailto:memomiguel@proton.me)                                       |

---

## License

Released under the **MIT License**. See [LICENSE](LICENSE) for details.
