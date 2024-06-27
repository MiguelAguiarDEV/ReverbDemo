
# Chat Application

Esta es una aplicación de chat en tiempo real construida con Laravel, Livewire y Laravel Echo.

## Requisitos previos

Antes de comenzar, asegúrate de tener instalados los siguientes componentes:

- PHP >= 7.3
- Composer
- Node.js
- NPM (Node Package Manager)
- Pusher (o Laravel Websockets) para la funcionalidad de broadcasting

## Instalación

Sigue estos pasos para configurar y ejecutar el proyecto:

1. **Clonar el repositorio:**

   ```sh
   git clone https://github.com/tu-usuario/tu-repositorio.git
   cd tu-repositorio
   ```

2. **Instalar las dependencias de PHP:**

   ```sh
   composer install
   ```

3. **Instalar las dependencias de Node.js:**

   ```sh
   npm install
   ```

4. **Configurar el archivo `.env`:**

   Copia el archivo `.env.example` a `.env` y configura tus variables de entorno. Asegúrate de configurar las variables de Pusher (o Laravel Websockets) correctamente.

   ```sh
   cp .env.example .env
   ```

   Abre el archivo `.env` y asegúrate de que las siguientes variables están configuradas correctamente:

   ```env
   PUSHER_APP_ID=your-app-id
   PUSHER_APP_KEY=your-app-key
   PUSHER_APP_SECRET=your-app-secret
   PUSHER_APP_CLUSTER=your-app-cluster
   BROADCAST_DRIVER=pusher
   ```

5. **Generar la clave de la aplicación:**

   ```sh
   php artisan key:generate
   ```

6. **Migrar la base de datos:**

   Asegúrate de que tienes una base de datos configurada y que las variables DB_* en tu archivo `.env` están configuradas correctamente. Luego ejecuta:

   ```sh
   php artisan migrate
   ```

7. **Compilar los assets de frontend:**

   ```sh
   npm run dev
   ```

8. **Iniciar el servidor de desarrollo:**

   ```sh
   php artisan serve
   ```

9. **Iniciar el servidor de broadcasting (Pusher o Laravel Websockets):**

   Si estás utilizando Pusher, no necesitas hacer nada más aquí. Si estás utilizando Laravel Websockets, asegúrate de que el servidor de websockets esté funcionando:

   ```sh
   php artisan websockets:serve
   ```

10. **Abrir la aplicación en tu navegador:**

    Abre tu navegador y ve a `http://localhost:8000` para ver la aplicación en funcionamiento.

## Prueba de la aplicación

Para probar la funcionalidad de chat en tiempo real con dos usuarios diferentes:

1. Abre una ventana de navegador normal e inicia sesión como un usuario.
2. Abre una ventana de navegador en modo incógnito/privado e inicia sesión como otro usuario.
3. Envía mensajes desde ambos usuarios y verifica que se actualizan en tiempo real.

## Recursos adicionales

- [Laravel Documentation](https://laravel.com/docs)
- [Livewire Documentation](https://laravel-livewire.com/docs)
- [Laravel Echo Documentation](https://laravel.com/docs/8.x/broadcasting)
- [Pusher Documentation](https://pusher.com/docs)

## Contribuir

Las contribuciones son bienvenidas. Por favor, abre un issue o envía un pull request para mejoras y correcciones de errores.

## Licencia

Este proyecto está licenciado bajo la licencia MIT. Consulta el archivo [LICENSE](LICENSE) para obtener más información.
