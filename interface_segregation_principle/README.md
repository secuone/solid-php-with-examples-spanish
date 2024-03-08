Interface Segregation Principle (ISP)
===================================
* * *

El Principio de Segregación de la Interfaz (ISP) establece que ningún cliente debería ser forzado a depender de métodos que no utiliza. En otras palabras, las interfaces deben ser específicas para los clientes que las utilizan, evitando interfaces grandes y poco cohesivas.

#### Finalidad del Principio de Segregación de la Interfaz:
Garantizar que ningún cliente esté obligado a depender de métodos que no utiliza diseñando contratos de interfaces según las necesidades de los clientes, en lugar de basarse en las implementaciones disponibles. Las interfaces deben reflejar las necesidades de los clientes. Además, evitar las Interfaces de Cabecera (Header Interfaces[^1]) y preferir las Interfaces de Rol (Role Interfaces[^2]).

*   **Evitar Interfaces Monolíticas**: ISP promueve la creación de interfaces pequeñas y cohesivas que satisfagan las necesidades específicas de los clientes.
*   **Reducir el Acoplamiento**: Al dividir interfaces en partes más pequeñas y específicas, ISP reduce el acoplamiento entre componentes de software, facilitando la modularidad y la extensibilidad del sistema.
*   **Facilitar la Implementación y Mantenimiento**: Al proporcionar interfaces más específicas, ISP hace que la implementación y el mantenimiento sean más simples y menos propensos a errores.

#### Ventajas del Principio de Segregación de la Interfaz:

1.  **Mayor Coherencia y Claridad**: ISP promueve interfaces más específicas y cohesivas, lo que mejora la coherencia y la claridad del diseño de software.
2.  **Reducción del Acoplamiento**: Al dividir interfaces en partes más pequeñas y específicas, ISP reduce el acoplamiento entre componentes de software, facilitando la modularidad y la extensibilidad del sistema.
3.  **Facilita la Implementación y Mantenimiento**: Al proporcionar interfaces más específicas, ISP hace que la implementación y el mantenimiento sean más simples y menos propensos a errores.

### Ejemplo de Aplicación del Principio de Segregación de la Interfaz:

Supongamos que tenemos una interfaz `Impresora` que define un método `imprimirDocumento()` y un método `escanearDocumento()`. Si tenemos un cliente que solo necesita imprimir documentos, no debería ser obligado a implementar el método `escanearDocumento()`. En cambio, podríamos dividir la interfaz en `Impresora` y `Escáner` para satisfacer las necesidades específicas de los clientes.

#### Beneficios del Principio de Segregación de la Interfaz:

*   **Mayor Coherencia y Claridad**: ISP promueve interfaces más específicas y cohesivas, lo que mejora la coherencia y la claridad del diseño de software.
*   **Reducción del Acoplamiento**: Al dividir interfaces en partes más pequeñas y específicas, ISP reduce el acoplamiento entre componentes de software, facilitando la modularidad y la extensibilidad del sistema.
*   **Facilita la Implementación y Mantenimiento**: Al proporcionar interfaces más específicas, ISP hace que la implementación y el mantenimiento sean más simples y menos propensos a errores.

En resumen, el Principio de Segregación de la Interfaz promueve un diseño de software que proporciona interfaces específicas y cohesivas, lo que mejora la coherencia, la modularidad y la facilidad de mantenimiento del sistema.

[^1]: Header Interfaces (Interfaces de Cabecera): En este enfoque, las interfaces se diseñan para incluir todos los métodos que podrían ser necesarios para cualquier implementación posible de esa interfaz. Esto significa que una interfaz puede contener una gran cantidad de métodos, algunos de los cuales pueden no ser relevantes para todas las clases que la implementan. Esto puede llevar a la "fat interface problem" (problema de interfaces infladas), donde las clases implementadoras deben proporcionar implementaciones para métodos que no utilizan.

[^2]: Role Interfaces (Interfaces de Rol): En contraste, las "Role Interfaces" se diseñan centrándose en los roles o responsabilidades específicas que una clase debe desempeñar. En lugar de incluir todos los métodos posibles, una interfaz de rol contiene solo los métodos necesarios para cumplir con un rol específico en el sistema. Esto promueve una mejor cohesión y un acoplamiento más bajo, ya que las clases solo necesitan implementar los métodos relevantes para el rol que desempeñan. En resumen, mientras que las "Header Interfaces" tienden a ser más genéricas y abarcativas, las "Role Interfaces" son más específicas y están diseñadas para promover un diseño más modular y enfocado en las responsabilidades.
