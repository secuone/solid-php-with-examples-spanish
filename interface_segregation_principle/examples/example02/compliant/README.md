Si tuvieramos una clase `PaymentGateway` que implementase las interfaces `CreditCardProcessor` y `PayPalProcessor` y gestionase ambos métodos de pago estaríamos cumpliendo con el ISP pero no con el SRP, ya que la clase `PaymentGateway` tendría varias responsabilidades.

Para solucionar esto y mantener el cumplimiento de ambos principios, podemos aplicar el patrón de diseño de delegación.

**CreditCardProcessor.php:** Define la interfaz `CreditCardProcessor` con el método `processCreditCardPayment()` para procesar pagos con tarjeta de crédito.
**PayPalProcessor.php:** Define la interfaz `PayPalProcessor` con el método `processPayPalPayment()` para procesar pagos a través de PayPal.
**CreditCardPaymentGateway.php:** Implementa la interfaz `CreditCardProcessor` en una clase dedicada `CreditCardPaymentGateway`, que se encarga exclusivamente de procesar pagos con tarjeta de crédito.
**PayPalPaymentGateway.php:** Implementa la interfaz `PayPalProcessor` en una clase dedicada `PayPalPaymentGateway`, que se encarga exclusivamente de procesar pagos a través de PayPal.

Ahora, cada clase tiene una sola responsabilidad: una se encarga de procesar pagos con tarjeta de crédito y la otra se encarga de procesar pagos a través de PayPal. Esto mantiene el cumplimiento del SRP y del ISP al mismo tiempo.

**Importante:** hay veces que es mejor tener código duplicado que una mala abstracción.