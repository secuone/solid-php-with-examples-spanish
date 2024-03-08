Supongamos que estamos desarrollando un sistema de procesamiento de pagos que puede manejar pagos con tarjeta de crédito y pagos a través de PayPal. En este sistema, hay una interfaz llamada `PaymentProcessor` que define métodos para procesar pagos con tarjeta de crédito y PayPal.

1.  **PaymentProcessor.php:** Define la interfaz `PaymentProcessor` con métodos para procesar pagos con tarjeta de crédito y PayPal.
2.  **PaymentGateway.php:** Implementa la clase `PaymentGateway`, que implementa la interfaz `PaymentProcessor`. Esta clase maneja tanto los pagos con tarjeta de crédito como los pagos a través de PayPal.

En este ejemplo, la clase `PaymentGateway` implementa la interfaz `PaymentProcessor` y proporciona implementaciones para los métodos `processCreditCardPayment()` y `processPayPalPayment()`. Sin embargo, esto viola el principio de segregación de interfaces porque los clientes pueden depender de métodos que no utilizan.

Por ejemplo, si un cliente solo necesita procesar pagos con tarjeta de crédito, todavía debe depender de la implementación de `processPayPalPayment()` en la clase `PaymentGateway`, lo que introduce una dependencia innecesaria y potencialmente confusa.