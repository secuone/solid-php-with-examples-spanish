Single Responsability Principle (SRP)
===================================
* * *

Este principio establece que una clase debe tener una sola razón para cambiar, es decir, cada clase debe tener una única responsabilidad y debe estar encapsulada en esa responsabilidad. En otras palabras, una clase debe hacer solo una cosa y hacerla bien.

Finalidad del Principio de Responsabilidad Única:
------------------------------------------------

*   **Una sola responsabilidad**: Cada clase debe tener una responsabilidad específica y no debe asumir múltiples responsabilidades.

*   **Encapsulación de la responsabilidad**: La funcionalidad relacionada debe estar encapsulada dentro de la clase, lo que significa que todas las partes del código relacionadas con esa responsabilidad deben estar dentro de esa clase.

*   **Fácil de entender y mantener**: Al tener una sola responsabilidad, el código es más fácil de entender, ya que cada clase tiene un propósito claro y específico. Además, cualquier cambio en esa funcionalidad solo afectará a una clase, lo que facilita la modificación y el mantenimiento del código.   

#### Niveles de Granularidad

En el contexto del Principio de Responsabilidad Única (SRP), la granularidad se refiere al nivel de detalle o abstracción en el que se descompone una responsabilidad dentro de una clase. Una granularidad adecuada significa dividir una responsabilidad en unidades más pequeñas y coherentes, cada una de las cuales se puede entender, modificar y mantener de forma independiente.

### Importancia de la Granularidad en SRP:

1.  **Claridad y Cohesión**: Una granularidad adecuada garantiza que cada clase tenga una sola razón para cambiar y que esta razón esté claramente definida. Esto mejora la cohesión de la clase al agrupar funcionalidades relacionadas y aumenta la claridad del diseño.

2.  **Mantenibilidad**: Con una granularidad adecuada, los cambios en el código son más fáciles de realizar y menos propensos a tener efectos secundarios no deseados en otras partes del sistema. Esto facilita el mantenimiento del código a lo largo del tiempo.

3.  **Reutilización de código**: Al descomponer las responsabilidades en unidades más pequeñas y coherentes, se promueve la reutilización de código. Las unidades de código más pequeñas son más fáciles de entender y pueden ser extraídas y reutilizadas en otros contextos.

4.  **Escalabilidad**: Una granularidad adecuada facilita la extensión y escalabilidad del sistema. Las clases con responsabilidades bien definidas pueden ser extendidas y adaptadas más fácilmente para cumplir con nuevos requisitos o funcionalidades.

### Ejemplo de Granularidad en SRP:

Imaginemos una clase `GestorUsuarios` que actualmente se encarga de gestionar la creación, actualización y eliminación de usuarios en un sistema. Sin embargo, esta clase también maneja la lógica de autenticación de usuarios.

Si dividimos esta clase en dos, podríamos tener una clase `GestorUsuarios`, que se encarga exclusivamente de la gestión de usuarios, y una clase separada `AutenticadorUsuarios`, que se encarga de la lógica de autenticación.

Aun así `GestorUsuarios` seguiría violando el SRP ya que se sigue encargando de crear, modificar y eliminar usuarios con lo cual tiene más de una razón para cambiar. En lugar de eso, sería más adecuado dividir las responsabilidades en clases separadas, cada una con una única responsabilidad. Por ejemplo, podríamos tener una clase `CreadorUsuarios` para crear usuarios, una clase `ActualizadorUsuarios` para actualizar usuarios y una clase `EliminadorUsuarios` para eliminar usuarios. De esta manera, cada clase tendría una única razón para cambiar y cumpliría con el principio de SRP.

Esta división mejora la granularidad del código, ya que cada clase tiene una sola responsabilidad claramente definida y esto hace que el código sea más fácil de entender, modificar y mantener, en línea con el Principio de Responsabilidad Única.

#### Ventajas del Principio de Responsabilidad Única:

*   **Código más claro y organizad**: Al dividir la funcionalidad en clases con responsabilidades únicas, el código resultante es más claro y organizado. Esto facilita la comprensión del código y la identificación de posibles problemas.

*   **Mantenibilidad mejorada**: Cuando una clase tiene una sola responsabilidad, los cambios en esa funcionalidad son más fáciles de realizar y menos propensos a afectar otras partes del sistema. Esto mejora la mantenibilidad del código a lo largo del tiempo.

*   **Reutilización de código**: Las clases con una única responsabilidad tienden a ser más reutilizables en diferentes partes del sistema. Pueden ser extraídas y utilizadas en otros contextos sin preocuparse por su dependencia de otras funcionalidades.
   
*   **Facilita las pruebas unitarias**: Las clases con una sola responsabilidad son más fáciles de probar, ya que su comportamiento es más predecible y enfocado. Esto facilita la escritura de pruebas unitarias efectivas para garantizar la calidad del código.
   

En resumen, el Principio de Responsabilidad Única promueve un diseño de código más limpio, modular y mantenible al dividir la funcionalidad en clases con una sola responsabilidad. Esto conduce a un código más fácil de entender, probar y mantener a lo largo del ciclo de vida del proyecto.