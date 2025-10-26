# Game-X — The Gaming Website  
A modern, responsive eSports/gaming website built with HTML, CSS, JS and PHP by Ujwal Warad.

## Table of Contents
1. [About](#about)  
2. [Features](#features)  
3. [Tech Stack](#tech-stack)  
4. [Project Structure](#project-structure)  
5. [Getting Started](#getting-started)  
6. [How to Use / Customize](#how-to-use-customize)  
7. [Contributing](#contributing)  
8. [Contact](#contact)  


## About  
Game-X is a gaming website template oriented towards esports, tournaments, gaming community showcases, and game-media content. The website offers:  
- Hero banner + featured games section  
- Tournament or event highlight cards  
- News/blog cards for gaming updates  
- Shop call-to-action area  
- Contact & footer sections  
- Responsive design across mobile, tablet, desktop  

## Features  
- Responsive layout using semantic HTML5 and modern CSS (Flexbox/Grid)  
- Reusable UI components: navbar, hero section, card grids, call-to-action, footer  
- Basic interactivity via vanilla JavaScript (mobile nav toggle, sliders, sticky header)  
- Lightweight build (no heavy JS frameworks) suitable for static hosting or PHP-backed hosting  
- SEO-friendly structure with meta tags + social sharing preview (if implemented)  

## Tech Stack  
- HTML5 — semantic markup  
- CSS3 — Flexbox & Grid layout, responsive utilities  
- JavaScript — vanilla JS for UI behaviour (no framework)  
- PHP — (as indicated by files in repo) for server-side tasks (e.g., contact form, login/signup)  
- Optional: MySQL or other database backend if you extend login/signup/store features  

## Project Structure  
Game-X-The-Gaming-Website/
└── main/
    ├── index.php
    ├── assets/
    │   ├── css/
    │   │   ├── style.css
    │   │   └── utility.css
    │   ├── js/
    │   │   ├── script.js
    │   │   └── pages.js
    │   └── img/
    ├── components/
    │   ├── header.php
    │   ├── footer.php
    │   ├── card-game.php
    │   └── product-card.php
    ├── pages/
    │   ├── home.php
    │   ├── tournaments.php
    │   ├── shop.php
    │   └── about.php
    ├── data/
    │   ├── tournaments.json
    │   └── products.json
    ├── api/
    │   ├── tournaments.php
    │   └── products.php
    └── README.md

*(Adjust the folder names exactly as in your repo)*  

## Getting Started  
### Prerequisites  
- A modern web browser (Chrome, Firefox, Edge, Safari)  
- [Optional] Git for cloning the repo  
- [Optional] A local static server or PHP-enabled web server for full functionality (e.g., login)  

### Clone the repository  
```bash
git clone https://github.com/Ujwal1121/Game-X-The-Gaming-Website--main.git
cd Game-X-The-Gaming-Website--main
Run locally

Option A – Static mode
Just open index.php (or index.html if you rename) in your browser.
Option B – Local server

For Python (static files):

python3 -m http.server 8080


Then open http://localhost:8080

For PHP:
Run a PHP built-in server from the root folder:

php -S localhost:8000


Then open http://localhost:8000

How to Use / Customize

Replace the logo (e.g., assets/img/logo.svg) and hero image to reflect your brand.

Edit index.php (or .html) for changing sections, adding/removing feature cards, tournaments, news items.

Modify CSS variables and font stacks in style.css / utility styles to adjust theming (colours, typography).

In script.js, you can extend behaviour: mobile nav toggles, lazy-loading images, sliders/carousels etc.

If you have a backend (PHP + database) for login/signup, update configuration, sanitization and security accordingly.

Contributing

Feel free to fork the repository, make improvements or add features (e.g., a blog engine, admin dashboard, API integration). When submitting pull requests:

Follow consistent code style (indentation, naming)

Ensure responsiveness and cross-browser compatibility

Add comments and documentation where necessary

Contact

Author: Ujwal Warad

Email: ujwalwarad086@gmail.com

LinkedIn: https://www.linkedin.com/in/ujwal-warad-ba655b249

GitHub: https://github.com/Ujwal1121
