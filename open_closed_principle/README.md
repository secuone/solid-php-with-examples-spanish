Open - Closed Principle (OCP)
============================
* * *

El Principio de Abierto/Cerrado (OCP) establece que las entidades de software (clases, módulos, funciones, etc.) deben estar abiertas para su extensión pero cerradas para su modificación. En otras palabras, se debe poder extender el comportamiento de una entidad sin modificar su código fuente.

#### Finalidad del Principio de Abierto/Cerrado:

*   **Extensibilidad**: OCP promueve el diseño de software de manera que se pueda agregar nuevas funcionalidades sin necesidad de cambiar el código existente.
*   **Estabilidad**: Al evitar modificaciones directas en el código existente, OCP ayuda a mantener la estabilidad del sistema y a reducir el riesgo de introducir errores.
*   **Reusabilidad**: Al permitir la extensión de comportamiento sin modificar el código existente, OCP fomenta la reutilización de componentes de software.

#### Ventajas del Principio de Abierto/Cerrado:

1.  **Facilita la Extensión**: Al diseñar componentes que pueden ser extendidos sin modificar su implementación existente, OCP facilita la introducción de nuevas funcionalidades.
2.  **Mejora la Mantenibilidad**: Al evitar la modificación directa del código existente, OCP simplifica la tarea de mantener y actualizar el software.
3.  **Fomenta la Reutilización de Código**: Al diseñar componentes que pueden ser extendidos y reutilizados en diferentes contextos, OCP promueve la reutilización de código y la modularidad del sistema.

### Ejemplo de Aplicación del Principio de Abierto/Cerrado:

Imaginemos una clase `Forma` que tiene un método `calcularArea()`. Si queremos agregar una nueva forma geométrica sin modificar la implementación existente de `Forma`, podríamos crear una nueva clase `Círculo` que extienda `Forma` y anule el método `calcularArea()` para calcular el área específica del círculo.

#### Beneficios del Principio de Abierto/Cerrado:

*   **Facilita la Extensión**: OCP permite agregar nuevas funcionalidades sin modificar el código existente, lo que facilita la extensión del software.
*   **Mejora la Mantenibilidad**: Al evitar la modificación directa del código existente, OCP simplifica la tarea de mantener y actualizar el software.
*   **Fomenta la Reutilización de Código**: Al diseñar componentes que pueden ser extendidos y reutilizados en diferentes contextos, OCP promueve la reutilización de código y la modularidad del sistema.

En resumen, el Principio de Abierto/Cerrado promueve el diseño de software que es extensible y fácil de mantener al permitir la adición de nuevas funcionalidades sin modificar el código existente.

### Interfaces 🆚 Abstract Class

#### Beneficios de Interface:
- No modifica el árbol de jerarquía
- Permite implementar N Interfaces

#### Beneficios de Abstract Class:
- Permite desarrollar el patrón Template Method[^1] empujando la lógica al modelo
- Problema: Dificultad de trazar
- Getters privados (Tell don’t ask)[^2]

#### Conclusión
- ¿Cuándo usamos Interfaces?: Cuando vayamos a desacoplar entre capas
- ¿Cuándo usamos Abstract?: En determinados casos para Modelos de dominios

[^1]: El patrón Template Method es un patrón de diseño de software que define el esqueleto de un algoritmo en una operación, postergando algunos pasos a las subclases. Permite que las subclases redefinan ciertos pasos de un algoritmo sin cambiar su estructura.

[^2]: "Getters privados (Tell don’t ask)" es una referencia al principio de diseño de software que sugiere que los objetos deberían decirle a otros objetos qué hacer en lugar de preguntarles por su estado interno. En el contexto de los getters (métodos para obtener el valor de un atributo), "privados" se refiere a que los getters no deben ser públicos y accesibles desde fuera del objeto. En lugar de exponer directamente los atributos de un objeto mediante getters públicos, se promueve la encapsulación del estado interno del objeto y el diseño de métodos que realicen acciones basadas en ese estado interno, evitando así la necesidad de exponer directamente los detalles internos del objeto. Por ejemplo, en lugar de tener un getter público para obtener el valor de un atributo `saldo` de una clase `CuentaBancaria`, se podrían tener métodos públicos como `depositar` y `retirar`, que interactúan con el saldo interno de la cuenta sin necesidad de exponerlo directamente. Esto sigue el principio de "Tell don’t ask", donde los objetos le dicen a otros objetos qué hacer en lugar de preguntarles por su estado interno.
