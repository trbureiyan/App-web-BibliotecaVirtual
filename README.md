
# Sistema de Gestión de Biblioteca Virtual Basica (VLMSb)

| ![Badge 1](https://github.com/user-attachments/assets/4ee7973c-9dbd-42ec-8cb0-27d68999e824) | ![Badge 2](https://github.com/user-attachments/assets/0b35c9b8-b12d-4073-8efa-584f8dbdcb6f) | ![Downloads](https://img.shields.io/github/downloads/trbureiyan/App-web-BibliotecaVirtual/total?style=for-the-badge&color=8ac7ff) |
|---|---|---|


## Descripción General

Este **Sistema de Gestión de Biblioteca Virtual** es una aplicación transaccional web basica diseñada para gestionar el catálogo de una biblioteca, permitiendo realizar operaciones CRUD (Crear, Leer, Actualizar, Eliminar) de manera segura y eficiente. El sistema cuenta con un backend robusto desarrollado en **PHP** y **MySQL**, con un enfoque en la **integridad de los datos**, la **seguridad** e incorpora nuevas funcionalidades de análisis y generación de informes mediante herramientas OLAP (Procesamiento Analítico en Línea) e informes en Excel con PhpSpreadsheet. Al utilizar **sentencias preparadas** y código modularizado, este proyecto garantiza una experiencia fluida tanto para desarrolladores como para los usuarios finales y se prioriza la integridad de los datos y la seguridad mediante el uso de sentencias preparadas en consultas SQL y una arquitectura de código modular para facilitar su mantenimiento.

---

## Funcionalidades Clave

### 1. **Manejo Seguro de Datos**
   - Se implementaron **sentencias preparadas** en las consultas SQL para proteger contra las vulnerabilidades de **inyección SQL**. Esto asegura la integridad y seguridad de la base de datos, evitando ataques maliciosos que podrían comprometer la información sensible.

### 2. **Operaciones CRUD Eficientes**
   - La aplicación gestiona eficazmente recursos de la biblioteca (como libros, autores, editores y traductores) mediante operaciones CRUD optimizadas, asegurando que el sistema sea escalable y confiable.

### 3. **Estructura de Código Optimizada**
   - El código está estructurado para ser **modular** y **reutilizable**. Al utilizar `include()` de PHP para manejar conexiones a la base de datos y lógica externa, el proyecto se mantiene organizado y fácil de mantener. Por ejemplo, el archivo `conexion.php` se encarga de las conexiones a la base de datos, permitiendo que otros scripts tengan código limpio y conciso.

### 4. **Retroalimentación para los Usuarios**
   - Para una mejor experiencia de usuario, el sistema proporciona retroalimentación visual y textual después de realizar operaciones, como el registro de nuevos libros. Esto incluye mensajes de éxito y error, junto con íconos relevantes (e.g., marcas de verificación para el éxito y cruces rojas para errores).

### 5. Nuevas Características de Análisis OLAP e Informes en Excel con PhpSpreadsheet

#### Generación de Informes en Excel con PhpSpreadsheet
- El sistema incluye una funcionalidad de exportación de informes en formato Excel, lo que permite generar reportes de los datos de la biblioteca.
- Los informes son fáciles de manipular y permiten a los administradores de la biblioteca realizar un análisis más detallado, con tablas y gráficos integrados para una mejor toma de decisiones.
- Esta funcionalidad facilita el seguimiento de tendencias, optimización del inventario y gestión de recursos.

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

<!--- - Implementación de **funcionalidades API** para integrar operaciones completas de CRUD. --->
- [x] Capacidades de **informes y análisis de datos** para una mejor toma de decisiones y seguimiento del rendimiento.
- [x] ~~Interfaz grafica mas intuitiva y moderna.~~
- [ ] Documentacion y explicaciones de la aplicación.

---

## Contribuciones

Si tienes sugerencias o mejoras, no dudes en hacer un fork del repositorio y enviar un pull request. El proyecto está diseñado para evolucionar con el tiempo, y tus contribuciones pueden ayudar a mejorarlo aún más.

---

## Autor

Este proyecto fue desarrollado por mi, **@trbureiyan**, en el curso de Bases de Datos con la ayuda del profesor Miller Cerquera Garcia con el objetivo de crear una plataforma eficiente y segura para gestionar una biblioteca virtual. El código está optimizado para ser escalable y facilitar futuras mejoras.
