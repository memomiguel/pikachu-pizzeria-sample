# Pikachu's Pizzeria — Sitio web de ejemplo

> [English version](README.md)

Sitio web multipágina básico creado como muestra de portfolio. Simula un negocio local (una pizzería) y demuestra habilidades fundamentales de desarrollo web adecuadas para un CV de desarrollador.

## Qué incluye este proyecto

| Área | Detalles |
|------|----------|
| **Páginas** | Inicio, Quiénes somos, Menú y Contacto |
| **Backend** | PHP con includes reutilizables (`header.php`, `footer.php`) |
| **Internacionalización** | Español (por defecto) e italiano mediante parámetros `?lang=es` / `?lang=it` |
| **Estilos** | CSS personalizado con maquetación, tipografía, efectos hover y estilos de formulario |
| **Formularios** | Formulario de contacto con validación HTML5 (`required`, `email`, `select`, `textarea`) |
| **Contenido** | Contenido estático de negocio: historia, valores, platos del menú con imágenes y datos de contacto |

## Habilidades demostradas

- **PHP** — Includes del lado del servidor, renderizado condicional y año dinámico en el pie de página
- **HTML5** — Estructura semántica (`header`, `nav`, `main`, `section`, `footer`), etiquetas accesibles y elementos de formulario
- **CSS3** — Maquetación con Flexbox, degradados, transiciones, estados de foco y sección de contacto adaptable (`flex-wrap`)
- **Estructura del proyecto** — Separación de layout (cabecera/pie), estilos y contenido de cada página en archivos distintos
- **i18n básico** — Cambio de idioma sin framework, manteniendo la navegación entre páginas
- **UX** — Navegación clara, jerarquía visual y diseño práctico del formulario de contacto

## Estructura del proyecto

```
├── index.php           # Página de inicio
├── quienes-somos.php   # Quiénes somos
├── servicios.php       # Menú
├── contacto.php        # Formulario de contacto e información del negocio
├── header.php          # Cabecera y navegación compartida
├── footer.php          # Pie de página compartido
├── style.css           # Estilos globales
└── imagenes/           # Logo, banderas, fondos e imágenes de pizzas
```

## Ejecución en local

Requiere tener PHP instalado en el equipo.

```bash
cd sitio-web-offline
php -S localhost:8000
```

Después abre [http://localhost:8000](http://localhost:8000) en el navegador.

Cambia el idioma con los iconos de bandera en la barra de navegación, o añade `?lang=it` / `?lang=es` a la URL de cualquier página.

## Notas

- Es un **proyecto de ejemplo estático** — el formulario de contacto no envía correos ni guarda datos.
- Las imágenes están incluidas localmente para que el sitio funcione completamente sin conexión.
- Desarrollado como parte de mi formación en el IES El Álamo (Madrid).
- Este proyecto se desarrolló **sin asistencia de IA** — solo emplea prácticas básicas de desarrollo web. Otros proyectos más complejos de mi portfolio indican explícitamente dónde se utilizó IA.

## Autor

**Miguel** — [github.com/memomiguel](https://github.com/memomiguel)
