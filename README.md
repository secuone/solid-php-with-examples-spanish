S O L I D
===================================
* * *

Este repositorio contiene ejemplos prácticos en PHP que ilustran los principios SOLID en la programación orientada a objetos. Los principios SOLID son un conjunto de reglas de diseño de software que ayudan a crear código más limpio, mantenible y escalable.

¿Qué es SOLID?
--------------

SOLID es un acrónimo que representa cinco principios básicos de diseño de software:

*   **S - Principio de Responsabilidad Única (SRP)**: Una clase debe tener una única responsabilidad y motivación para cambiar.
    
*   **O - Principio de Abierto/Cerrado (OCP)**: Una clase debe estar abierta para su extensión pero cerrada para su modificación.
    
*   **L - Principio de Sustitución de Liskov (LSP)**: Los objetos de un programa deben ser sustituibles por instancias de sus subtipos sin afectar la corrección del programa.
    
*   **I - Principio de Segregación de Interfaces (ISP)**: Los clientes no deben ser forzados a depender de interfaces que no usan.
    
*   **D - Principio de Inversión de Dependencia (DIP)**: Los módulos de alto nivel no deben depender de los detalles de los módulos de bajo nivel. Ambos deben depender de abstracciones.
    

Estos principios fueron acuñados por Robert C. Martin, también conocido como "Uncle Bob".

¿Por qué es importante seguir los principios SOLID?
---------------------------------------------------

Seguir los principios SOLID tiene varios beneficios:

*   **Mantenibilidad**: El código es más fácil de entender y modificar, lo que reduce el tiempo y el riesgo asociado con las actualizaciones y correcciones de errores.
    
*   **Escalabilidad**: Los sistemas basados en SOLID son más fáciles de extender y adaptar a medida que los requisitos cambian.
    
*   **Reutilización de código**: Los componentes que siguen los principios SOLID son más modulares y pueden ser reutilizados en diferentes partes del sistema.
    

¿Por qué hay que huir de STUPID?
--------------------------------

El acrónimo STUPID representa características opuestas a los principios SOLID:

*   **S - Singleton**: El patrón Singleton crea objetos globales compartidos, lo que dificulta la prueba y el mantenimiento del código.
    
*   **T - Tight Coupling (Acoplamiento Estrecho)**: Las clases altamente acopladas son difíciles de probar y modificar, ya que los cambios en una clase pueden afectar a otras clases.
    
*   **U - Untestability (Falta de Pruebas)**: El código que no se puede probar fácilmente es propenso a errores y dificulta la refactorización y la evolución del sistema.
    
*   **P - Premature Optimization (Optimización Prematura)**: La optimización prematura puede conducir a un código complicado y difícil de entender, lo que afecta negativamente a la mantenibilidad y la claridad del código.
    
*   **I - Indescriptive Naming (Nomenclatura Indescriptiva)**: Los nombres de variables y funciones poco descriptivos dificultan la comprensión del código y la colaboración entre los miembros del equipo.
    
*   **D - Duplication (Duplicación)**: La duplicación de código aumenta la complejidad y el riesgo de errores, ya que los cambios deben realizarse en múltiples lugares.


Evitar estas características ayuda a mantener un código limpio, claro y fácil de mantener.
