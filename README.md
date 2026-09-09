# Analy's Librería

Backend de la aplicación de gestión de productos, pedidos y ventas de una librería. Está construido con Laravel 12 y expone una API REST autenticada con Laravel Sanctum.

## Tecnologías

- PHP 8.2 o superior
- Laravel 12
- SQLite
- Laravel Sanctum

## Requisitos previos

Antes de comenzar, instala y verifica:

- PHP 8.2 o superior con las extensiones requeridas por Laravel
- Composer
- Git, si clonas el repositorio

Comprueba las versiones con:

```bash
php -v
composer --version
npm --version
```

## Instalación

### 1. Instalar dependencias

```bash
composer install
```

### 2. Crear y configurar el entorno

```bash
cp .env.example .env
php artisan key:generate
```

En Linux y macOS, crea la base de datos SQLite:

```bash
touch database/database.sqlite
```

En Windows PowerShell:

```powershell
New-Item database/database.sqlite -ItemType File
```

El archivo `.env.example` ya configura SQLite. Si necesitas indicar una ruta diferente, establece `DB_DATABASE` con una ruta absoluta:

```env
DB_CONNECTION=sqlite
DB_DATABASE=/ruta/absoluta/al/proyecto/database/database.sqlite
```

### 3. Ejecutar migraciones y datos de prueba

```bash
php artisan migrate --seed
```

El seeder crea las tablas, un usuario de prueba y registros iniciales de productos, pedidos y ventas. Para reiniciar completamente la base de datos durante el desarrollo:

```bash
php artisan migrate:fresh --seed
```

## Ejecución en desarrollo

Abre dos terminales desde la raíz del proyecto.

Terminal 1, servidor Laravel:

```bash
php artisan serve --host=127.0.0.1 --port=8000
```

La aplicación Laravel estará disponible en `http://127.0.0.1:8000` 

## Usuario de prueba

Después de ejecutar `php artisan migrate --seed`, puedes autenticarte con:

```text
Correo:     bascarrunz@prueba.com
Contraseña: password
```

## API

La API base es `http://127.0.0.1:8000/api`.

## Estructura principal

```text
app/Http/Controllers/Api/   # Controladores de autenticación y recursos
app/Models/                 # Modelos Eloquent
database/migrations/        # Estructura de la base de datos
database/seeders/           # Datos iniciales y usuario de prueba
routes/api.php              # Rutas de la API
routes/web.php              # Ruta web principal
```