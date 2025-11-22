Portafolio Web Personal - Contacto 
Descripción 
Proyecto de portafolio web personal con formulario de contacto. Implementa un sitio simple con página de inicio, formulario de contacto y procesamiento básico en PHP con MySQL. Incluye medidas básicas de seguridad para el envío de mensajes.

Manifestación
https://juanprac.infinityfreeapp.com/

Tecnologías
PHP (con mysqli)
MySQL
HTML5
CSS3 (estilos personalizados)
Hospedaje: InfinityFree (opcional)
Estructura 
/sitio-web-personal
/fotos foto 1.jpg
Contacto.php 
index.html 
procesar.php 
stylos.css 

Conexión a la base de datos
Archivo:procesar.php

Cambiar por los datos del host al momento de subirlo a un hosting
$ conexión = new mysqli( "sql303.infinityfree.com", "if0_40460672", "UK2U57yQTyJC", "if0_40460672_prácts" );

Validaciones y seguridad implementadas.
Sanitización (XSS): htmlspecialchars antes de mostrar datos.

Validaciones de entrada: nombres (solo letras y espacios, patrón regex), correo electrónico (filter_var), límites de longitud para nombre/mensaje.

Declaraciones preparadas (mejoradas): En la versión correcta, se usan declaraciones preparadas para evitar la inyección SQL (aunque el original usa concatenación directa).

Prevención básica de spam: Validaciones de longitud y tipo de datos.

Configuración mysqli: Verificación de errores de conexión.

Cómo funciona
index.html muestra la página principal con información personal y un enlace al formulario.

Contacto.php carga el formulario de contacto.

procesar.php valida y sanitiza datos, conecta a la BD y guarda el mensaje. Muestra una página de confirmación.

stylos.css aplica estilos responsivos y animaciones.

Creación del dominio o subdom ⬤
Ingrese al panel de InfinityFree.

Crear un subdominio o dominio gratuito desde Subdomains o Addon Domains.

InfinityFree asigna automáticamente una carpeta /htdocs donde se alojarán los archivos del proyecto.

Creación ⬤
En el panel, abra Bases de datos MySQL.

Crear una nueva base de datos (InfinityFree agregará un prefijo obligatorio al nombre).

Guardar los datos generados.

Importación de la base de datos
Abrir phpMyAdmin desde el mismo panel.

Seleccione la base de datos creada.

Cree la tabla manualmente con la consulta SQL proporcionada en el README anterior, o importe un archivo .sql si lo tiene.

Subida de archivos del proyecto
Abrir Administrador de archivos o usar un cliente FTP.

Ingresar a la carpeta /htdocs.

Eliminar archivos predeterminados creados por InfinityFree (por ejemplo index2.html).

Subir todos los archivos del proyecto, incluyendo la carpeta fotos/.

Prueba del sitio en línea
Acceder al proyecto mediante el dominio creado.

https://juanprac.infinityfreeapp.com/