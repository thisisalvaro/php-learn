# php-learn

# PHP Database Project

Este repositorio contiene un proyecto en PHP diseñado para interactuar con bases de datos de manera eficiente. Utiliza MySQLi o PDO para realizar consultas seguras y optimizadas.

# Requisitos

- Para ejecutar este proyecto, asegúrate de tener instalado:

```

PHP >= 7.4

```

- Composer (opcional, si gestionas dependencias)

- Servidor web (Apache, Nginx, etc.)

- Base de datos MySQL o compatible

# Extensiones PHP habilitadas:

- pdo_mysql para PDO

- mysqli para MySQLi

# Instalación

- Clonar el repositorio:

```
git clone https://github.com/tu-usuario/tu-repositorio.git
cd tu-repositorio
```

# Configurar la base de datos:

## Crea una base de datos MySQL.

Importa el archivo database.sql incluido en el proyecto para inicializar las tablas necesarias:
```
mysql -u usuario -p nombre_base_datos < database.sql
```
## Configurar las credenciales:

Copia el archivo de ejemplo de configuración:
```
cp config.example.php config.php
```
Edita config.php con tus credenciales de base de datos.

## Configurar dependencias (opcional, si usas Composer):
```
composer install
```
## Inicia el servidor:

1 Usando el servidor de desarrollo de PHP:
```
php -S localhost:8000
```
2 configura tu servidor web favorito (por ejemplo, Apache o Nginx).

### Uso

Abre tu navegador y visita: http://localhost:8000.

Realiza las operaciones disponibles (crear, leer, actualizar, eliminar registros, etc.).
