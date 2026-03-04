# Checkout Page — Frontend Skills Test

## Task

Build a checkout page based on the provided Figma design (a free Figma account is required to view design specifications).

## Requirements

- **Responsive layout** — the page must work seamlessly on both mobile and desktop.
- **Countdown banner** — the "The offer expires in" banner should count down from 15 minutes.
 - **Click logging** — element that was clicked by the users last should be sent to the log-click endpoint defined in `routes/api.php`.
- **Order links** — all CTA must point to the `order` route.
- **Tech stack** — use **Alpine.js** and **Tailwind CSS** for interactivity and styling.
- **Translations** — use Laravel's built-in translations system for all user-facing strings (multilanguage support).
- **Version control** — use Git throughout your work.
- **Controllers** — the provided controllers should not need to be modified.
- **Future proofing** — consider the further extensibility of the checkout, maintainability

## Getting Started

```bash
# 1. Install PHP dependencies
composer install

# 2. Set up environment
cp .env.example .env && php artisan key:generate

# 3. Run migrations
php artisan migrate

# 4. Install JS dependencies and build assets
npm install && npm run dev   # or: npm run build

# 5. Start the development server
php artisan serve

# App available at http://127.0.0.1:8000
```

> Add any additional packages you deem necessary.

