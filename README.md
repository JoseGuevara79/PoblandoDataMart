# Proyecto de Población de Base de Datos - LimpioBE

Este proyecto tiene como objetivo poblar una base de datos con información de ventas para la empresa "LimpioBE" en un período de 5 años. Se generaron 20,000 registros de ventas, incluyendo datos de clientes, productos, empleados y fechas.

## Requisitos

- Servidor web (por ejemplo, Apache) con soporte para PHP
- Sistema de gestión de base de datos (por ejemplo, MySQL, MariaDB)

## Instrucciones de Uso

1. Clona este repositorio en tu servidor web local.

```shell
git clone https://github.com/JoseGuevara79/PoblandoDataMart
```

2. Asegúrate de tener un servidor web y un sistema de gestión de base de datos configurados y en ejecución.

3. Configura los parámetros de conexión a la base de datos en el archivo `configuraciones/bd.php`. Asegúrate de proporcionar el nombre de usuario, contraseña y nombre de la base de datos correspondientes.

```php
// Archivo: configuraciones/bd.php

class BD {
    private static $servidor = 'localhost';
    private static $nombreBD = 'nombre_basedatos';
    private static $usuario = 'nombre_usuario';
    private static $contrasena = 'contrasena_usuario';

    // ...
}
```

4. Ejecuta el archivo `index.php` en tu navegador para iniciar el proceso de población de la base de datos.

5. Observa los mensajes en pantalla para verificar que los datos se inserten correctamente en la base de datos. Si aparecen errores, verifica la configuración de la base de datos y asegúrate de tener los permisos necesarios para realizar las inserciones.

## Resultado

Después de ejecutar el proceso de población de la base de datos, tendrás una base de datos poblada con 20,000 registros de ventas para la empresa "LimpioBE". Los datos incluirán información de clientes, productos, empleados y fechas de venta.

Estos datos podrán ser utilizados para análisis, pruebas y evaluaciones en el sistema de gestión de la empresa. Además, se generaron datos aleatorios pero coherentes para crear un conjunto de datos realista y representativo.

## Contribuciones

¡Las contribuciones son bienvenidas! Si tienes sugerencias, mejoras o correcciones para este proyecto, por favor crea un *issue* o envía una *pull request*.

## Licencia

Este proyecto está bajo la Licencia MIT. Consulta el archivo `LICENSE` para obtener más información.
