Este ejemplo viola el principio de Inversión de Dependencias ya que tiene una clase de alto nivel que depende directamente de una clase de bajo nivel, en lugar de depender de una abstracción.

En este caso, la clase `SomeService` depende directamente de la clase concreta `FileLogger`. Esto hace que `SomeService` esté fuertemente acoplada a `FileLogger`, lo que dificulta la sustitución de `FileLogger` por otra implementación de logger en el futuro. Además, la clase `SomeService` no puede reutilizarse fácilmente en otros contextos que requieran diferentes implementaciones de logger.
