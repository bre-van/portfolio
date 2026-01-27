# Codebase Guidelines

## Core Technologies
- **Framework:** Laravel 12.x
- **Admin Panel:** Filament 4.x
- **Frontend Interaction:** Livewire
- **Templating:** Blade Components
- **Styling:** Tailwind CSS

## Architectural Patterns

### Filament Resource Organization
To keep Filament Resource classes clean, we follow a modular pattern for forms and tables:
- **Schemas:** Form definitions are extracted into `App\Filament\Resources\{ResourceName}\Schemas\{ResourceName}Form.php`.
- **Tables:** Table definitions are extracted into `App\Filament\Resources\{ResourceName}\Tables\{ResourceName}Table.php`.
- The main Resource class calls these static `configure` methods.

### Frontend Structure
- **Layouts:** Managed via Blade components (e.g., `<x-app>`).
- **Sections:** Page sections are organized as Blade components in `resources/views/components/sections/`.
- **Pages:** View files are located in `resources/views/pages/` and are typically thin, delegating to sections.
- **Interactivity:** Complex or interactive elements (like filtering/loading more) should use Livewire components.

### Data Modeling
- **Enums:** Use PHP Enums for fixed sets of values (e.g., `App\Enums\SkillLevel`).
- **Models:** Keep models focused on relationships and simple accessors/mutators. Use `HasFactory` for testing/seeding.

## Naming Conventions
- **Controllers:** Follow standard Laravel naming (e.g., `IndexController`).
- **Filament Resources:** Singular name + `Resource` (e.g., `CompanyResource`).
- **Blade Components:** Kebab-case for tags (`<x-sections.hero />`).

## Development Workflow
- **Setup:** A `setup` script is available in `composer.json` to initialize the environment.
- **Deployment:** 
    - Ensure `storage/framework` subdirectories exist and are writable.
    - Deployment specific notes for Vimexx (public folder in `public_html`, app in `laravel-app`).
