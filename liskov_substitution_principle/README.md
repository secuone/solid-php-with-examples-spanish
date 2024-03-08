Liskov Substitution Principle (LSP)
==================================
* * *

El Principio de Sustitución de Liskov (LSP) establece que los objetos de una superclase deben ser reemplazables por objetos de sus subclases sin afectar la corrección del programa. En otras palabras, una subclase debe comportarse de tal manera que no sorprenda al cliente que espera un comportamiento basado en la superclase.

Por ejemplo, si S es un subtipo de T, instancias de T deberían poderse sustituir por instancias de S sin alterar las propiedades del programa. Es decir, al tener una jerarquía nos supone que estamos estableciendo un contrato en el padre, por lo que, garantizar que se mantiene dicho contrato en el hijo, nos permitirá que podamos sustituir al padre y la aplicación seguirá funcionando perfectamente 👌

#### Finalidad del Principio de Sustitución de Liskov:
Aplicar el Principio de Sustitución de Liskov nos garantiza que podamos aplicar correctamente el principio de OCP (Open Closed Principle).

*   **Extensibilidad**: OCP promueve el diseño de software de manera que se pueda agregar nuevas funcionalidades sin necesidad de cambiar el código existente.
*   **Estabilidad**: Al evitar modificaciones directas en el código existente, OCP ayuda a mantener la estabilidad del sistema y a reducir el riesgo de introducir errores.
*   **Reusabilidad**: Al permitir la extensión de comportamiento sin modificar el código existente, OCP fomenta la reutilización de componentes de software.

#### Ventajas del Principio de Sustitución de Liskov:

1.  **Intercambiabilidad**: Al seguir LSP, las subclases pueden ser utilizadas en lugar de sus superclases, promoviendo la reutilización de código y la flexibilidad del diseño.
2.  **Consistencia de Comportamiento**: LSP garantiza que los clientes puedan confiar en un comportamiento consistente en todas las subclases, reduciendo el riesgo de errores y malentendidos.
3.  **Simplificación de Mantenimiento**: Al preservar la consistencia de comportamiento, LSP simplifica la tarea de mantener y actualizar el software, ya que las modificaciones en las subclases no afectan a otras partes del sistema.

### Ejemplo de Aplicación del Principio de Sustitución de Liskov:

Supongamos que tenemos una clase `Figura` con un método `calcularArea()`. Si creamos una subclase `Círculo` que extiende `Figura`, esta subclase debe implementar `calcularArea()` de una manera que cumpla con las expectativas del cliente sin romper la funcionalidad existente de `Figura`.

#### Beneficios del Principio de Sustitución de Liskov:

*   **Intercambiabilidad**: LSP garantiza que las subclases puedan ser utilizadas en lugar de sus superclases, promoviendo la reutilización de código y la flexibilidad del diseño.
*   **Consistencia de Comportamiento**: LSP asegura un comportamiento consistente en todas las subclases, reduciendo el riesgo de errores y malentendidos.
*   **Simplificación de Mantenimiento**: Al preservar la consistencia de comportamiento, LSP simplifica la tarea de mantener y actualizar el software, ya que las modificaciones en las subclases no afectan a otras partes del sistema.

En resumen, el Principio de Sustitución de Liskov promueve un diseño de software que garantiza la consistencia de comportamiento entre las superclases y sus subclases, lo que facilita la extensión y el mantenimiento del sistema.