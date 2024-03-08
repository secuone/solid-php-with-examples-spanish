Nuestro caso de uso no tiene por qué conocer qué hace la implementación por detrás, de modo que simplemente llamaría al método `save`.

Así, nuestra interface tampoco tendría por qué aludir al método `flush`, sino que será nuestra implementación de `UserRepositoryMySql` la que se encargue de manera interna de que el usuario persista correctamente en BD.

Aunque el código inicial podríamos pensar que estaba desacoplado de la implementación gracias a la interface, si que estaba acoplado estructuralmente 🧩:

- Desde nuestro caso de uso sabíamos que debíamos de llamar primero al método save y después al método flush

Ojo! 👀, con este cambio conseguimos cumplir con el ISP, pero a cambio estamos perdiendo las ventajas que puede ofrecernos la Unit of work, si dado el caso necesitásemos aprovecharla en nuestra aplicación, tendríamos que plantear un diseño diferente.