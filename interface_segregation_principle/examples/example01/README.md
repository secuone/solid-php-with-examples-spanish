Supongamos que estamos construyendo un sistema de gestión de dispositivos electrónicos que pueden ser encendidos y apagados, pero no todos los dispositivos tienen las mismas capacidades. Algunos dispositivos también pueden tener funciones adicionales, como ajustar el brillo o el volumen. Queremos aplicar el principio ISP para asegurarnos de que los clientes no estén obligados a depender de métodos que no usan.

1.  **Device.php:** Define la interfaz `Device` que contiene los métodos comunes para encender y apagar un dispositivo.


```  
interface Device {     
    public function turnOn();
    public function turnOff(); 
} 
```

1.  **Light.php:** Implementa la clase `Light`, que representa una bombilla. Las bombillas solo pueden ser encendidas y apagadas.

```  
class Light implements Device {
    public function turnOn() {
        echo "Light is turned on\n";
    }

    public function turnOff() {
        echo "Light is turned off\n";
    }
}
```

1.  **Television.php:** Implementa la clase `Television`, que representa una televisión. Las televisiones pueden ser encendidas, apagadas y ajustar el volumen.

```  
class Television implements Device {
    public function turnOn() {
        echo "Television is turned on\n";
    }

    public function turnOff() {
        echo "Television is turned off\n";
    }

    public function adjustVolume($level) {
        echo "Volume adjusted to level $level\n";
    }
}
```

4.  **index.php:** Utiliza las clases `Light` y `Television` para demostrar el funcionamiento de los dispositivos.

```  
// Encender y apagar una bombilla
$light = new Light();
$light->turnOn(); // Output: Light is turned on
$light->turnOff(); // Output: Light is turned off

// Encender, apagar y ajustar el volumen de una televisión
$tv = new Television();
$tv->turnOn(); // Output: Television is turned on
$tv->turnOff(); // Output: Television is turned off
$tv->adjustVolume(10); // Output: Volume adjusted to level 10
```

Este ejemplo muestra cómo aplicar el principio de segregación de interfaces al diseñar un sistema de gestión de dispositivos electrónicos. Las interfaces se diseñan de manera que los clientes (como las aplicaciones que controlan los dispositivos) solo dependan de los métodos que realmente necesitan, lo que mejora la cohesión y la reutilización del código.