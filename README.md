# Aruu Falls Safaris

Aruu Falls Safaris is a PHP/MySQL tourism website for promoting East African safari packages and vehicle hire. The site provides public booking and enquiry forms backed by a PHP administration portal for managing the site's content and reservations.

> **Preview the interface:** [Open the static GitHub Pages showcase](https://steveviko.github.io/aruusafaris/)

The showcase is a static, responsive representation of the public-facing experience. It is designed for visual review and does not execute PHP, submit bookings, or connect to MySQL.

## Features

### Public website

- Homepage with promotional banners, featured tour packages, testimonials, and special offers.
- Tour package listing and package detail pages.
- Safari reservation form collecting traveller and trip information.
- Vehicle hire catalogue with vehicle detail pages and rental booking form.
- Search across tour packages and vehicles.
- Contact, enquiry, quotation, and informational page forms.
- Responsive interface built with Bootstrap, jQuery, FlexSlider, Font Awesome, and custom CSS/Sass.
- Static showcase in [`docs/`](docs/) for reviewing the public UI on GitHub Pages.

### Administration portal

The `/admin` directory contains a session-protected dashboard for:

- Viewing booking, enquiry, message, package, vehicle, and customer totals.
- Creating and managing tour packages.
- Creating and managing vehicle brands and vehicles.
- Reviewing safari bookings and changing their status.
- Reviewing vehicle bookings as new, confirmed, or canceled.
- Managing enquiries, contact messages, website pages, users, images, and special offers.
- Changing the administrator password.

## Application structure

```text
.
├── index.php                 # Public homepage
├── packages.php              # Tour package catalogue
├── details.php              # Tour package details
├── cars_list.php             # Vehicle catalogue
├── v_details.php             # Vehicle details
├── book.php                  # Safari booking form
├── car_booking.php           # Vehicle booking form
├── booking.php               # Vehicle booking submission handler
├── contact.php               # Contact form and submission handler
├── enquire.php               # Enquiry submission handler
├── quotes.php                # Quotation request form
├── includes/                 # Shared public configuration and layout
├── admin/                    # Administration portal
├── css/, js/, fonts/, sass/  # Front-end assets and Sass sources
└── images/                   # Logos, banners, package, vehicle, and content images
```

## Technology

- PHP
- MySQL
- PDO for database access
- Bootstrap and jQuery
- Sass source files for custom styling

## Requirements

- PHP with the PDO MySQL extension enabled
- MySQL or a compatible MariaDB server
- A web server such as Apache or Nginx configured to serve PHP

No Composer or Node.js package manifest is included. Front-end libraries are committed in the repository.

## Static GitHub Pages preview

The repository includes a self-contained static preview under [`docs/`](docs/). It uses the project's existing logo and photography while presenting the main customer journey as a responsive landing page:

- Hero carousel and primary calls to action.
- Safari, culture, slow-travel, and vehicle-hire experience cards.
- Brand story and service differentiators.
- Testimonials and contact details.
- A non-submitting enquiry form that explains the preview limitation.

The workflow in [`.github/workflows/pages.yml`](.github/workflows/pages.yml) publishes `docs/` automatically whenever the preview changes on `main`. GitHub Pages cannot run the PHP/MySQL application itself; use a PHP-enabled web server for the live application.

## Local setup

1. Clone the repository into the document root of a PHP-enabled web server.

   ```bash
   git clone https://github.com/steveviko/aruusafaris.git
   cd aruusafaris
   ```

2. Create the application's MySQL database and tables. The repository does not include a database dump, so the schema must be supplied separately or created to match the queries used by the application.

3. Configure the database connection in:

   ```text
   includes/config.php
   admin/includes/config.php
   ```

   Use environment-specific credentials and do not commit secrets to the repository.

4. Point the web server's document root at the repository directory and open the site's `index.php`.

5. Open `/admin/index.php` to sign in to the administration portal.

## Data entities

The application expects tables for administration users, tour packages, vehicles and brands, safari bookings, vehicle bookings, enquiries, messages/issues, pages, and special offers. The exact columns are defined by the SQL statements in the PHP files that create and read these records.

## Important notes

- This is a traditional server-rendered PHP application; there is no build or migration command.
- Form submissions write directly to MySQL through PDO.
- The production deployment should move database credentials out of tracked PHP files, use HTTPS, and review authentication and input-validation settings before exposing the admin portal publicly.
- Some asset and route names are historical or misspelled; preserve existing paths when deploying unless the corresponding references are updated together.

## Contact

The public site is configured for Aruu Falls Safaris in Uganda. Contact details and other editable content are surfaced through the website and administration portal.
