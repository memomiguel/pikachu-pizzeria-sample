# Pikachu's Pizzeria — Sample Website

> Hay [una versión en español](README.es.md) de este README.

A basic multi-page website built as a portfolio sample. It simulates a small local business (a pizzeria) and demonstrates foundational web development skills suitable for a developer CV.

## What this project covers

| Area | Details |
|------|---------|
| **Pages** | Home, About Us, Menu, and Contact |
| **Backend** | PHP with reusable includes (`header.php`, `footer.php`) |
| **Internationalization** | Spanish (default) and Italian via `?lang=es` / `?lang=it` query parameters |
| **Styling** | Custom CSS with layout, typography, hover effects, and form styling |
| **Forms** | Contact form with HTML5 validation (`required`, `email`, `select`, `textarea`) |
| **Content** | Static business content: story, values, menu items with images, and contact details |

## Skills demonstrated

- **PHP** — Server-side includes, conditional rendering, and dynamic footer year
- **HTML5** — Semantic structure (`header`, `nav`, `main`, `section`, `footer`), accessible labels, and form elements
- **CSS3** — Flexbox layout, gradients, transitions, focus states, and a responsive contact section (`flex-wrap`)
- **Project structure** — Separation of layout (header/footer), styles, and page content across multiple files
- **i18n basics** — Language switching without a framework, preserving navigation across pages
- **UX** — Clear navigation, visual hierarchy, and a practical contact form layout

## Project structure

```
├── index.php           # Home page
├── quienes-somos.php   # About Us
├── servicios.php       # Menu
├── contacto.php        # Contact form and business info
├── header.php          # Shared header and navigation
├── footer.php          # Shared footer
├── style.css           # Global styles
└── imagenes/           # Logo, flags, backgrounds, and pizza images
```

## Running locally

Requires PHP installed on your machine.

```bash
cd sitio-web-offline
php -S localhost:8000
```

Then open [http://localhost:8000](http://localhost:8000) in your browser.

Switch language with the flag icons in the navigation bar, or append `?lang=it` / `?lang=es` to any page URL.

## Notes

- This is a **static sample project** — the contact form does not send emails or persist data.
- Images are included locally so the site works fully offline.
- Built as part of my learning path at IES El Álamo (Madrid).
- This project was built **without AI assistance** — it relies on basic web development practices only. Other, more complex portfolio projects explicitly document where AI was used.

## Author

**Miguel** — [github.com/memomiguel](https://github.com/memomiguel)
