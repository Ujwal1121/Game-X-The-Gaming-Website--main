Game‑X — The Gaming Website
A modern, responsive eSports/gaming website built with HTML, CSS, and JavaScript. It features a hero section, game highlights, tournaments, news/blog cards, a shop CTA, and a contact/footer area, optimized for performance and mobile-first layouts.​

Features
Responsive layout for mobile, tablet, and desktop using semantic HTML and modern CSS utilities.​

Reusable components: navbar, hero banner, card grids, callouts, and footer.​

Basic interactivity in vanilla JavaScript (menu toggle, sliders, sticky header).​

SEO-friendly structure with meta tags and social sharing preview tags.​

Lightweight, no framework build suitable for GitHub Pages or any static host.​

Tech Stack
HTML5 for semantic structure.​

CSS3 with flexbox/grid for layout and responsive utilities.​

Vanilla JavaScript for interactive behavior.​

Project Structure
text
Game-X-The-Gaming-Website--main/
├─ index.html
├─ assets/
│  ├─ css/
│  │  └─ styles.css
│  ├─ js/
│  │  └─ main.js
│  └─ images/
│     ├─ logo.svg
│     ├─ hero.jpg
│     └─ thumbnails/
└─ README.md
index.html: Landing page with hero, sections, and links.​

assets/css/styles.css: Global styles, variables, and responsive rules.​

assets/js/main.js: Navigation toggles, sliders, and small UI helpers.​

assets/images: Logos, hero assets, and game thumbnails.​

Getting Started
Prerequisites
Any modern browser.​

Optional: Git for cloning and a static server for local dev.​

Clone
text
git clone https://github.com/Ujwal1121/Game-X-The-Gaming-Website--main.git
cd Game-X-The-Gaming-Website--main
If you prefer SSH, ensure keys are configured before cloning.​

Run Locally
Option A: Open index.html directly in your browser.​

Option B: Use a simple static server to enable relative asset paths and future API stubs:​

Python 3:

macOS/Linux: python3 -m http.server 8080

Windows: py -m http.server 8080

Visit http://localhost:8080​

Node (serve): npx serve . and open the printed URL.​

Customization
Branding: Replace assets/images/logo.svg and hero.jpg. Update title and meta tags in index.html.​

Colors/Fonts: Edit CSS variables and font stacks in assets/css/styles.css.​

Sections: Duplicate or remove feature/tournament/news cards in index.html as needed.​

JS Behavior: Toggle mobile nav, add sliders, or lazy-load images in assets/js/main.js.
