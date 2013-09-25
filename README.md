login_rest
==========

Servicio Restful al que se pueden realizar diferentes tipos de peticiones HTTP para interactuar con usuarios.

- GET: http://localhost/login_restful/usuarios para obtener información de los usuarios registrados en el sistema
- POST: http://localhost/login_restful/login (+ datos) para recibir información de si existe o el usuario.
- POST: http://localhost/login_restful/crearUsuario (+ datos) para crear un usuario no existente.
- PUT: http://localhost/login_restful/actualizarNombre/12 (+ datos) para actualizar un usuario existente.
- DELETE: http://localhost/login_restful/borrarUsuario/12 para borrar un usuario existente.



Características:

- 'user-friendly' URL's para hacer las peticiones.
- Reescritura de URL mediante .htaccess.
- Consulta a la Base de datos mediante la extensión PDO.
- Las respuestas serán un conjunto de datos JSON. Incluyendo el estado de la respuesta.
- index.php muestra ejemplos de las peticiones utilizando libCurl de PHP.

Explicación un poco más detallada en http://programandolo.blogspot.com/2013/08/ejemplo-php-de-servicio-restful-parte-1.html
