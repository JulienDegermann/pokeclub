# Pokeclub

## Project Overview

**Pokeclub** is a web application built with WordPress, designed to bring together Pokemon enthusiasts and provide a community platform.

## Technology Stack

- **CMS**: WordPress
- **Backend**: PHP
- **Database**: MySQL
- **Frontend**: HTML, CSS, JavaScript
- **Containerization**: Docker & Docker Compose
- **CI-CD**: GiHub Action (auto-update)

## Project Structure

- `/wp-admin/` - WordPress admin files
- `/wp-content/` - Themes, plugins, and media uploads
  - `/themes/pokeclublorientais/` - Main theme
  - `/plugins/` - Custom and third-party plugins
  - `/languages/` - Localization files
- `/wp-includes/` - WordPress core includes
- `docker-compose.yaml` - Docker configuration

## Getting Started

### Prerequisites

- Docker & Docker Compose
- Internet connection for image downloads

### Installation

1. Clone or navigate to the project directory
2. Build and start containers:
   ```bash
   docker-compose up -d
   ```
3. Access WordPress at `http://localhost:8000`
4. Complete the WordPress installation wizard

## Features

- Pokemon club community platform
- Partner management
- Event management 
- Responsive theme design

## Development

### Theme Development

Main theme is located in `/wp-content/themes/pokeclublorientais/`

Key template files:
- `archive-partner.php` & `single-partner.php` - partner dynamic templates (list and details)
- `archive-event.php` & `single-event.php` - event dynamic templates (list and details)
- `page-play.php`, `page-contact.php`, `page-present.php`, `front-page.php` - static page templates