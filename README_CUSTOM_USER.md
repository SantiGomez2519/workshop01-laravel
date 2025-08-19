# Sistema de Gestión de CustomUser

Este proyecto implementa un sistema completo de gestión de usuarios personalizados (CustomUser) basado en el diagrama UML proporcionado, con una interfaz moderna y atractiva.

## Características Implementadas

### Página de Inicio Principal
- **Diseño moderno y responsive** con Bootstrap 5 y Font Awesome
- **Navegación intuitiva** con navbar consistente en todas las páginas
- **Estadísticas en tiempo real** del sistema
- **Sección de características** que explica las funcionalidades
- **Usuarios recientes** mostrados en cards atractivas
- **Resumen de actividades** del taller implementadas

### Actividad 1: Vista Inicial
- Página principal con dos botones que llevan a las actividades 2 y 4
- Diseño moderno y responsive usando Bootstrap 5
- Navegación consistente con el resto del sistema

### Actividad 2: Formulario de Creación
- Formulario completo para crear nuevos usuarios
- Incluye todos los atributos primitivos del diagrama UML:
  - Nombre
  - Teléfono
  - Email
  - Contraseña
  - Método de Pago
- Validación de datos en el frontend y backend
- Mensajes de error claros con iconos
- Diseño mejorado con iconos y mejor UX

### Actividad 3: Inserción de Objetos
- Almacenamiento seguro en base de datos
- Encriptación de contraseñas
- Validación completa de datos
- Mensaje de éxito: "Elemento creado satisfactoriamente"

### Actividad 4: Listar Objetos
- Tabla que muestra ID y nombre de todos los usuarios
- Enlaces en el ID que llevan a la actividad 5
- Diseño responsive y profesional con iconos
- Estado vacío mejorado con call-to-action

### Actividad 5: Ver un Objeto
- Muestra todos los atributos del usuario seleccionado
- Incluye fechas de creación y actualización
- Botón para eliminar el usuario (Actividad 6)
- Diseño mejorado con iconos descriptivos

### Actividad 6: Borrar Objeto
- Eliminación segura con confirmación
- Redirección automática a la lista de usuarios
- Mensaje de confirmación

## Instalación y Configuración

1. **Clonar el proyecto** (si aplica)
2. **Instalar dependencias**:
   ```bash
   composer install
   npm install
   ```

3. **Configurar variables de entorno**:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Configurar la base de datos** en el archivo `.env`:
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=tu_base_de_datos
   DB_USERNAME=tu_usuario
   DB_PASSWORD=tu_contraseña
   ```

5. **Ejecutar migraciones**:
   ```bash
   php artisan migrate
   ```

6. **Ejecutar seeders** (opcional, para datos de prueba):
   ```bash
   php artisan db:seed
   ```

7. **Iniciar el servidor**:
   ```bash
   php artisan serve
   ```

## Uso del Sistema

1. **Acceder al sistema**: Navegar a `http://localhost:8000/`
   - Verás la página de inicio con estadísticas y navegación

2. **Navegar por el sistema**:
   - **Inicio**: Página principal con información del sistema
   - **Crear Usuario**: Formulario de creación
   - **Listar Usuarios**: Vista de todos los usuarios

3. **Crear usuario**: Hacer clic en "Crear Usuario" o "Actividad 2"

4. **Ver lista**: Hacer clic en "Listar Usuarios" o "Actividad 4"

5. **Ver detalles**: Hacer clic en el ID de cualquier usuario en la lista

6. **Eliminar usuario**: En la vista de detalles, hacer clic en "Eliminar Usuario"

## Estructura del Proyecto

```
app/
├── Http/Controllers/
│   ├── HomeController.php              # Controlador de la página de inicio
│   └── CustomUserController.php        # Controlador de CustomUser
├── Models/
│   └── CustomUser.php                  # Modelo de datos
database/
├── factories/
│   └── CustomUserFactory.php           # Factory para datos de prueba
├── migrations/
│   └── 2024_01_01_000000_create_custom_users_table.php
└── seeders/
    └── DatabaseSeeder.php              # Seeder actualizado
public/
└── css/
    └── app.css                         # Estilos personalizados
resources/views/
├── layouts/
│   └── app.blade.php                   # Layout principal con navbar y footer
├── home/
│   └── index.blade.php                 # Página de inicio principal
└── custom_users/
    ├── create.blade.php                # Formulario creación (Actividad 2)
    ├── list.blade.php                  # Lista usuarios (Actividad 4)
    └── show.blade.php                  # Detalles usuario (Actividad 5)
routes/
└── web.php                             # Rutas del sistema
```

## Tecnologías Utilizadas

- **Laravel 10**: Framework PHP
- **Bootstrap 5**: Framework CSS para el diseño
- **Font Awesome**: Iconos vectoriales
- **Google Fonts**: Tipografías personalizadas
- **MySQL**: Base de datos
- **Eloquent ORM**: Para el manejo de datos
- **Blade**: Motor de plantillas

## Características de Diseño

### Paleta de Colores
- **Verde primario**: #4caf50 (fresco y moderno)
- **Verde secundario**: #2e7d32 (profesional)
- **Amarillo acento**: #fbc02d (cálido)
- **Fondo claro**: #f5f5f5 (limpio)
- **Texto oscuro**: #212121 (legible)

### Elementos de Diseño
- **Layout unificado** con navbar y footer consistentes
- **Cards con hover effects** para mejor interactividad
- **Iconos descriptivos** para mejor UX
- **Botones personalizados** con estados hover
- **Diseño responsive** para todos los dispositivos

## Notas Importantes

- El sistema está diseñado para ser fácil de mantener y evolucionar
- Se siguen las mejores prácticas de Laravel
- No se utilizan generadores automáticos de código
- Se enfoca únicamente en atributos primitivos (sin relaciones)
- El nombre "CustomUser" evita conflictos con el modelo User de Laravel
- **Nuevo**: Interfaz moderna y atractiva con navegación mejorada
- **Layout unificado**: Todas las vistas usan el mismo layout base

## Rutas Disponibles

- `GET /` - Página de inicio principal
- `GET /custom-users/create` - Formulario de creación
- `POST /custom-users` - Almacenar nuevo usuario
- `GET /custom-users/list` - Listar usuarios
- `GET /custom-users/{id}` - Ver detalles de usuario
- `DELETE /custom-users/{id}` - Eliminar usuario

## Mejoras Implementadas

### Interfaz de Usuario
- ✅ Diseño moderno y profesional
- ✅ Navegación intuitiva y consistente
- ✅ Iconos descriptivos en toda la aplicación
- ✅ Estados hover y efectos visuales
- ✅ Mensajes de confirmación mejorados
- ✅ Diseño responsive para móviles

### Experiencia de Usuario
- ✅ Página de inicio informativa
- ✅ Estadísticas en tiempo real
- ✅ Navegación clara entre secciones
- ✅ Feedback visual en todas las acciones
- ✅ Estados vacíos informativos
- ✅ Confirmaciones de seguridad

### Arquitectura del Sistema
- ✅ **Layout unificado** - Todas las vistas usan el mismo layout base
- ✅ **Separación de responsabilidades** - Home y CustomUser en controladores separados
- ✅ **Código reutilizable** - Navbar y footer en el layout
- ✅ **Estructura organizada** - Vistas organizadas por funcionalidad
