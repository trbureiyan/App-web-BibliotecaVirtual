
# Sistema de Gestión de Biblioteca Virtual Basica (VLMSb)

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