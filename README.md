
# Sistema de Gestión de Biblioteca Virtual Basica (VLMSb)

<p align="left" style="display: flex; justify-content: space-between; align-items: center;">
  <a href="https://forthebadge.com">
    <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMTMuOTY4NzU3NjI5Mzk0NTMiIGhlaWdodD0iMzUiIHZpZXdCb3g9IjAgMCAxMTMuOTY4NzU3NjI5Mzk0NTMgMzUiPjxyZWN0IHdpZHRoPSI2MC42NTYyNTM4MTQ2OTcyNjYiIGhlaWdodD0iMzUiIGZpbGw9IiM1NTU1NTUiLz48cmVjdCB4PSI2MC42NTYyNTM4MTQ2OTcyNjYiIHdpZHRoPSI1My4zMTI1MDM4MTQ2OTcyNjYiIGhlaWdodD0iMzUiIGZpbGw9IiMwODYzYjMiLz48dGV4dCB4PSIzMC4zMjgxMjY5MDczNDg2MzMiIHk9IjIxLjUiIGZvbnQtc2l6ZT0iMTIiIGZvbnQtZmFtaWx5PSInUm9ib3RvJywgc2Fucy1zZXJpZiIgZmlsbD0iI0ZGRkZGRiIgdGV4dC1hbmNob3I9Im1pZGRsZSIgbGV0dGVyLXNwYWNpbmc9IjIiPlVTRVM8L3RleHQ+PHRleHQgeD0iODcuMzEyNTA1NzIyMDQ1OSIgeT0iMjEuNSIgZm9udC1zaXplPSIxMiIgZm9udC1mYW1pbHk9IidNb250c2VycmF0Jywgc2Fucy1zZXJpZiIgZmlsbD0iI2VjZWZmMSIgdGV4dC1hbmNob3I9Im1pZGRsZSIgZm9udC13ZWlnaHQ9IjkwMCIgbGV0dGVyLXNwYWNpbmc9IjIiPlBIUDwvdGV4dD48L3N2Zz4=" />
  </a>
  <a href="https://forthebadge.com">
    <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxODMuNjI1MDM4MTQ2OTcyNjYiIGhlaWdodD0iMzUiIHZpZXdCb3g9IjAgMCAxODMuNjI1MDM4MTQ2OTcyNjYgMzUiPjxyZWN0IHdpZHRoPSIxMDYuODQzNzcyODg4MTgzNiIgaGVpZ2h0PSIzNSIgZmlsbD0iIzU1NTU1NSIvPjxyZWN0IHg9IjEwNi44NDM3NzI4ODgxODM2IiB3aWR0aD0iNzYuNzgxMjY1MjU4Nzg5MDYiIGhlaWdodD0iMzUiIGZpbGw9IiMwMDc1OGYiLz48dGV4dCB4PSI1My40MjE4ODY0NDQwOTE4IiB5PSIyMS41IiBmb250LXNpemU9IjEyIiBmb250LWZhbWlseT0iJ1JvYm90bycsIHNhbnMtc2VyaWYiIGZpbGw9IiNGRkZGRkYiIHRleHQtYW5jaG9yPSJtaWRkbGUiIGxldHRlci1zcGFjaW5nPSIyIj5CVUlMVCBXSVRIPC90ZXh0Pjx0ZXh0IHg9IjE0NS4yMzQ0MDU1MTc1NzgxMiIgeT0iMjEuNSIgZm9udC1zaXplPSIxMiIgZm9udC1mYW1pbHk9IidNb250c2VycmF0Jywgc2Fucy1zZXJpZiIgZmlsbD0iI2ZmZmZmZiIgdGV4dC1hbmNob3I9Im1pZGRsZSIgZm9udC13ZWlnaHQ9IjkwMCIgbGV0dGVyLXNwYWNpbmc9IjIiPk1ZU1FMPC90ZXh0Pjwvc3ZnPg==" />
  </a>
  <a href="https://img.shields.io">
    <img src="https://img.shields.io/github/downloads/trbureiyan/App-web-BibliotecaVirtual/total?style=for-the-badge&color=8ac7ff" alt="GitHub Downloads (all assets, all releases)" />
  </a>
</p>



## Descripción General

Este **Sistema de Gestión de Biblioteca Virtual** es una aplicación transaccional web basica diseñada para gestionar el catálogo de una biblioteca, permitiendo realizar operaciones CRUD (Crear, Leer, Actualizar, Eliminar) de manera segura y eficiente. El sistema cuenta con un backend robusto desarrollado en **PHP** y **MySQL**, con un enfoque en la **integridad de los datos** y la **seguridad**. Al utilizar **sentencias preparadas** y código modularizado, este proyecto garantiza una experiencia fluida tanto para desarrolladores como para los usuarios finales.

---

## Funcionalidades Clave

### 1. **Manejo Seguro de Datos**
   - Se implementaron **sentencias preparadas** en las consultas SQL para proteger contra las vulnerabilidades de **inyección SQL**. Esto asegura la integridad y seguridad de la base de datos, evitando ataques maliciosos que podrían comprometer la información sensible.

### 2. **Operaciones CRUD Eficientes**
   - El sistema maneja de manera eficiente las operaciones **CRUD** para la gestión de los recursos de la biblioteca, incluyendo libros, autores, editores y traductores. Las transacciones en la base de datos se ejecutan de manera fluida, garantizando escalabilidad y confiabilidad del sistema.

### 3. **Estructura de Código Optimizada**
   - El código está estructurado para ser **modular** y **reutilizable**. Al utilizar `include()` de PHP para manejar conexiones a la base de datos y lógica externa, el proyecto se mantiene organizado y fácil de mantener. Por ejemplo, el archivo `conexion.php` se encarga de las conexiones a la base de datos, permitiendo que otros scripts tengan código limpio y conciso.

### 4. **Retroalimentación para los Usuarios**
   - Para una mejor experiencia de usuario, el sistema proporciona retroalimentación visual y textual después de realizar operaciones, como el registro de nuevos libros. Esto incluye mensajes de éxito y error, junto con íconos relevantes (e.g., marcas de verificación para el éxito y cruces rojas para errores).

---

## Ejemplo de Mejoras

### Antes: Uso Directo de Consultas SQL
   ```php
   $sql = "INSERT INTO libros (Titulo, Tipo, genero, ID_autor, ID_editor, ID_traductor) 
           VALUES ('$Titulo', '$Tipo', '$genero', '$ID_autor', '$ID_editor', '$ID_traductor')";
   ```

   - **Problema**: Este método es vulnerable a **inyecciones SQL** ya que los datos del usuario se insertan directamente en la consulta sin validación ni saneamiento.

### Después: Uso de Sentencias Preparadas
   ```php
   $stmt = $conn->prepare("INSERT INTO libros (Titulo, Tipo, genero, ID_autor, ID_editor, ID_traductor) 
                           VALUES (?, ?, ?, ?, ?, ?)");
   $stmt->bind_param("ssssss", $Titulo, $Tipo, $genero, $ID_autor, $ID_editor, $ID_traductor);
   ```

   - **Mejora**: Este método no solo asegura la base de datos, sino que también mejora el rendimiento al **precompilar** la consulta SQL, lo que permite ejecuciones repetidas más rápidas y seguras.

### Optimización de la Conexión
   - Se movió la lógica de conexión a la base de datos a un archivo separado (`conexion.php`) y se reutilizó en diferentes scripts. Esto reduce la redundancia en el código y facilita el mantenimiento en el futuro.

---

## Próximos Pasos

El proyecto está en su fase inicial, pero se planean las siguientes características y mejoras para futuras versiones:

- **Opciones avanzadas de búsqueda y filtrado** para facilitar la navegación en la base de datos de la biblioteca.
- Implementación de **funcionalidad API** para integrar operaciones completas de CRUD.
- Capacidades de **informes y análisis de datos** para una mejor toma de decisiones y seguimiento del rendimiento.
- Interfaz grafica mas intuitiva y moderna.
- Documentacion y explicaciones de la aplicación.

---

## Contribuciones

Si tienes sugerencias o mejoras, no dudes en hacer un fork del repositorio y enviar un pull request. El proyecto está diseñado para evolucionar con el tiempo, y tus contribuciones pueden ayudar a mejorarlo aún más.

---

## Autor

Este proyecto fue desarrollado por mi, **@trbureiyan**, en el curso de Bases de Datos con la ayuda del profesor Miller Cerquera Garcia con el objetivo de crear una plataforma eficiente y segura para gestionar una biblioteca virtual. El código está optimizado para ser escalable y facilitar futuras mejoras.