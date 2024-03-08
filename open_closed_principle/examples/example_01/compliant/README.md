Estas tres clases cumplen con el principio abierto/cerrado (Open/Closed Principle) porque son extensibles para su modificación sin necesidad de modificar su código fuente original.

1.  La interfaz `Measurable` define un contrato que las clases pueden implementar para proporcionar funcionalidad de medición. Si necesitamos agregar nuevas clases que implementen `Measurable`, podemos hacerlo sin modificar la interfaz en sí misma.
    
2.  La clase `Song` implementa la interfaz `Measurable` y proporciona una implementación concreta de los métodos `getTotalLength` y `getSentLength`. Si necesitamos agregar funcionalidades específicas para canciones, podemos hacerlo extendiendo esta clase sin modificar su código original.
    
3.  La clase `Progress` utiliza la interfaz `Measurable` en su método `getSentLengthPercentage`, lo que le permite calcular el porcentaje de longitud enviada para cualquier objeto que implemente `Measurable`. Si necesitamos calcular el progreso para nuevos tipos de objetos medibles, podemos hacerlo sin modificar la clase `Progress`.
    

En resumen, estas clases están abiertas para la extensión (podemos agregar nuevas funcionalidades sin modificarlas) pero cerradas para la modificación (no necesitamos cambiar su código fuente original para extender su funcionalidad), lo que cumple con el principio abierto/cerrado.