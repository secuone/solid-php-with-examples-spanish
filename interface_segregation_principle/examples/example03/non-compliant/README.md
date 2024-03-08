La presencia del método `flush` en la interfaz `UserRepository` puede ser problemática porque algunos sistemas de almacenamiento no tienen un concepto directo de "flush", como en el caso de Redis.

Cuando diseñamos interfaces, debemos tener en cuenta el principio de segregación de interfaces (ISP), que establece que los clientes no deben depender de métodos que no utilizan. En este caso, si una implementación de repositorio de usuario necesita implementar la interfaz `UserRepository`, se verá obligada a proporcionar una implementación vacía o lanzar una excepción para el método `flush`, lo cual no es ideal.

Finalmente, nuestro caso de uso se vería de esta manera, podemos observar que una vez llamado al método `invoke`, buscará al usuario en BD para incrementar el total de videos creados y posteriormente persistir este nuevo estado con los métodos definidos previamente.

Si quisiéramos implementar ciertas bases de datos como Redis, que no contemplan el patrón `Unit of work`, nos estaría sobrando la llamada al método `flush`.
