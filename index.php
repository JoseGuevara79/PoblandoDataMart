<?php
ini_set('max_execution_time', 300);
include_once "configuraciones/bd.php";
$conexionBD = BD::crearInstancia();

// Función para generar una cadena aleatoria
function generarCadenaAleatoria($longitud) {
    $caracteres = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $cadenaAleatoria = "";

    for ($i = 0; $i < $longitud; $i++) {
        $cadenaAleatoria .= $caracteres[rand(0, strlen($caracteres) - 1)];
    }

    return $cadenaAleatoria;
}

function generarNombreAleatorio() {
    $nombres = array(
        "Juan", "María", "Carlos", "Laura", "Pedro", "Ana", "Luis", "Mónica", "Fernando", "Gabriela",
        "Sofía", "Andrés", "Valentina", "Diego", "Camila", "Javier", "Isabella", "Mateo", "Lucía", "Samuel",
        "Ximena", "Daniel", "Mía", "Sebastián", "Sara", "Nicolás", "Julia", "Alejandro", "Emma", "David",
        "Abril", "Miguel", "Valeria", "Benjamín", "Victoria", "Emilio", "Daniela", "Adrián", "Martina", "Tomás",
        "Renata", "Lucas", "María José", "Matías", "Emily", "Simón", "Catalina", "Martín", "Antonella", "Emmanuel",
        "Jimena", "Gonzalo", "Daniella", "Leonardo", "Paula", "Juan Pablo", "René", "Agustín", "Isabel", "Roberto",
        "Romina", "Eduardo", "Carolina", "Raúl", "Claudia", "Óscar", "Carmen", "Héctor", "Patricia", "Marco",
        "Lorena", "Ricardo", "Gabriela", "Felipe", "Angélica", "Víctor", "Marisol", "Jorge", "Monica", "Hugo",
        "Alicia", "Rafael", "Constanza", "Andrea", "Óscar", "Juliana", "Renato", "Carla", "Emilio",
        "Valentina", "Ricardo", "Verónica", "Nicolás", "Mariana", "Hernán", "Karen", "José", "Jimena", "Mauricio",
        "Luisa", "Juan José", "Amanda", "Ramón", "Daniela", "Gustavo", "Florencia", "Santiago", "Gabriela",
        "Roberto", "Camila", "Javier", "Isabel", "Nicolás", "Catalina", "Martín", "Antonia", "Felipe",
        "Valeria", "Alberto", "Ana María", "Omar", "Patricia", "Rogelio", "Paulina", "Ernesto", "Marcela",
        "Alex", "Karla", "Lorenzo", "Estefanía", "Ricardo", "Tatiana", "Víctor", "María Fernanda", "Rodrigo",
        "Giselle", "Alonso", "Natalia", "César", "Brenda", "Jonathan", "Luz", "Héctor", "Vanessa", "Francisco",
        "Gloria", "Armando", "Pamela", "Enrique", "Isidora", "Miguel Ángel", "Ivonne", "Fernando", "Rosa",
        "Guillermo", "Melissa", "Adrián", "Valentina", "Eduardo", "María José", "Raúl", "Javiera", "José Antonio",
        "Claudia", "Jorge", "Cecilia", "Leonardo", "Laura", "Julián", "Andrea", "Abel", "Gabriela",
        "Ezequiel", "Mónica", "Rafael", "Daniela", "Gustavo", "Carolina", "Alejandro", "Verónica", "Sergio",
        "María Victoria", "Matías", "Margarita", "Mauricio", "Adriana", "Martín", "Lorena", "Salvador", "Nancy"
    );
    return $nombres[array_rand($nombres)];
}

function generarApellidoAleatorio() {
    $apellidos = array(
        "Gómez", "Chafloque", "Llontop", "Gutierres", "Falen", "Davila", "Arrobas", "Hurtado", "Caceres",
        "López", "Rodríguez", "Pérez", "Martínez", "González", "Sánchez", "Fernández", "Torres", "Rivera",
        "Cruz", "Ramírez", "Hernández", "García", "Romero", "Soto", "Vargas", "Rojas", "Mendoza", "Silva",
        "Pereira", "Cordero", "Navarro", "Vega", "Gallardo", "Molina", "Quispe", "Cabrera", "Montoya", "Guerrero",
        "Ríos", "Peña", "Morales", "Maldonado", "Campos", "Vargas", "Castillo", "Ortega", "Herrera", "Fuentes",
        "Cruzado", "Álvarez", "Chávez", "Carrasco", "Salazar", "Andrade", "Tapia", "Miranda", "Trujillo", "Calderón",
        "Villanueva", "Aguilar", "Ayala", "Delgado", "Vera", "Lara", "Paredes", "Arias", "Valenzuela", "Santos",
        "Torres", "Reyes", "Guzmán", "Herrera", "Flores", "Castro", "Núñez", "López", "Figueroa", "Cáceres",
        "Vargas", "Vargas", "Chacón", "Araníbar", "Escudero", "Valdivia", "Becerra", "Lagos", "Escobar", "Rojas",
        "Aranda", "Vallejos", "Díaz", "Bravo", "Villar", "Landa", "Dominguez", "Leiva", "Cisternas", "Báez"
    );    
    return $apellidos[array_rand($apellidos)];
}

function generarNombreEmpresaAleatorio() {
    
    $nombresEmpresas = array(
        "Acme Corporation", "Globex Corporation", "Wayne Enterprises", "Stark Industries", "Umbrella Corporation",
        "LexCorp", "Oscorp", "Weyland-Yutani Corporation", "Tyrell Corporation", "Aperture Science",
        "Cyberdyne Systems", "InGen", "Virtucon Industries", "Spacely Sprockets", "Soylent Corporation",
        "Dunder Mifflin", "Prestige Worldwide", "Sirius Cybernetics Corporation", "Gringotts Wizarding Bank",
        "Monsters, Inc.", "Buy N Large", "Hooli", "Pied Piper", "Warbucks Industries", "Wonka Industries",
        "Gekko & Co.", "Strickland Propane", "Vandelay Industries", "Spectre", "Springfield Nuclear Power Plant",
        "Ollivander's Wand Shop", "Gringotts Wizarding Bank", "Stark Industries", "Weyland-Yutani Corporation",
        "Tyrell Corporation", "Oceanic Airlines", "Bluth Company", "Hogwarts School of Witchcraft and Wizardry",
        "Abstergo Industries", "Monarch Sciences", "Weyland Industries", "Encom", "Gekko & Co.", "Dharma Initiative",
        "Los Pollos Hermanos", "Virtucon Industries", "Hooli", "Pied Piper", "Dunder Mifflin", "Stark Industries",
        "Inversiones Perú S.A.", "Minería y Energía del Perú", "Agroindustrias del Sur", "Consultora Estrategia Empresarial",
        "Servicios Contables Inka", "Energía Renovable Perú", "Transportes del Cusco", "Grupo Constructor Lima",
        "Textiles Andinos", "Inversiones Amazónicas", "Comercializadora de Frutas y Verduras", "Turismo Peruano",
        "Industrias Alimenticias Inka", "Ingeniería y Construcción del Norte", "Consultoría Ambiental Sur",
        "Productos Químicos Peruanos", "Laboratorios Farmacéuticos Lima", "Desarrollo Tecnológico Andino",
        "Distribuidora de Electrodomésticos", "Asesoría Legal y Financiera Perú", "Marketing Digital Cusco",
        "Agencia de Publicidad Lima", "Software Solutions Perú", "Seguridad y Vigilancia Integral",
        "Arquitectura y Diseño de Interiores", "Distribuidora de Maquinaria Industrial", "Fabricación de Muebles Lima",
        "Agencia de Viajes Machu Picchu", "Exportaciones Textiles Perú", "Almacenamiento y Logística Lima",
        "Servicios de Limpieza y Mantenimiento", "Consultoría de Recursos Humanos", "Comercializadora de Joyas y Accesorios",
        "Constructora de Viviendas Lima", "Transporte de Carga y Logística", "Servicios Odontológicos Lima",
        "Inmobiliaria del Sur", "Desarrollo de Software Lima", "Agencia de Modelos y Eventos", "Comercializadora de Productos Naturales",
        "Estudio de Abogados Lima", "Servicios de Catering y Eventos", "Desarrollo Web y Marketing Digital",
        "Consultoría Financiera y Tributaria", "Distribución de Bebidas y Licores", "Servicios Médicos Especializados"
        );
    return $nombresEmpresas[array_rand($nombresEmpresas)];
}

function generarNombreClienteAleatorio($tipoCliente) {
    if ($tipoCliente == 'P') {
        $nombreEmpresa = generarNombreEmpresaAleatorio();
        return $nombreEmpresa;
    } else {
        $nombre = generarNombreAleatorio();
        $apellido = generarApellidoAleatorio();
        return $nombre . ' ' . $apellido;
    }
}

function generarRUCAleatorio($tipoCliente) {
    $ruc = ($tipoCliente == 'P') ? "20" : "10";
    for ($i = 2; $i <= 11; $i++) {
        $ruc .= rand(0, 9);
    }
    return $ruc;
}

function generarDNIAleatorio() {
    $dni = "";
    for ($i = 0; $i < 8; $i++) {
        $dni .= rand(0, 9);
    }
    return $dni;
}

function generarTelefonoAleatorio() {
    $telefono = "9";
    for ($i = 1; $i < 9; $i++) {
        $telefono .= rand(0, 9);
    }
    return $telefono;
}

function generarDireccionAleatoria() {
    $calles = array(
        "Avenida Grau", "Avenida Sánchez Cerro", "Avenida Guillermo Billinghurst", "Calle Tacna", "Calle Ayacucho", "Calle Lima",
        "Avenida Los Cocos", "Avenida Arequipa", "Avenida Bolognesi", "Calle Piura", "Calle Libertad", "Calle San Martín",
        "Jirón Lambayeque", "Jirón Cuzco", "Jirón Tumbes", "Jirón Huancabamba", "Jirón Sullana", "Jirón Chulucanas",
        "Avenida Grau", "Avenida Sánchez Cerro", "Avenida Guillermo Billinghurst", "Calle Tacna", "Calle Ayacucho", "Calle Lima",
        "Avenida Los Cocos", "Avenida Arequipa", "Avenida Bolognesi", "Calle Piura", "Calle Libertad", "Calle San Martín",
        "Jirón Lambayeque", "Jirón Cuzco", "Jirón Tumbes", "Jirón Huancabamba", "Jirón Sullana", "Jirón Chulucanas",
        "Avenida Grau", "Avenida Sánchez Cerro", "Avenida Guillermo Billinghurst", "Calle Tacna", "Calle Ayacucho", "Calle Lima",
        "Avenida Los Cocos", "Avenida Arequipa", "Avenida Bolognesi", "Calle Piura", "Calle Libertad", "Calle San Martín",
        "Jirón Lambayeque", "Jirón Cuzco", "Jirón Tumbes", "Jirón Huancabamba", "Jirón Sullana", "Jirón Chulucanas",
        "Avenida Balta", "Avenida Bolognesi", "Avenida Saenz Peña", "Calle Santa Victoria", "Calle San José", "Calle Libertad",
        "Jirón Pedro Ruiz", "Jirón Elías Aguirre", "Jirón San Martín", "Calle 2 de Mayo", "Calle 28 de Julio", "Calle San Miguel",
        "Avenida Bolognesi", "Avenida Balta", "Avenida Saenz Peña", "Calle Santa Victoria", "Calle San José", "Calle Libertad",
        "Jirón Pedro Ruiz", "Jirón Elías Aguirre", "Jirón San Martín", "Calle 2 de Mayo", "Calle 28 de Julio", "Calle San Miguel",
        "Avenida Bolognesi", "Avenida Balta", "Avenida Saenz Peña", "Calle Santa Victoria", "Calle San José", "Calle Libertad",
        "Jirón Pedro Ruiz", "Jirón Elías Aguirre", "Jirón San Martín", "Calle 2 de Mayo", "Calle 28 de Julio", "Calle San Miguel",
        "Avenida España", "Avenida Larco", "Avenida Mansiche", "Calle Orbegoso", "Calle Gamarra", "Calle Pizarro",
        "Jirón Independencia", "Jirón Almagro", "Jirón Bolívar", "Calle San Martín", "Calle Junín", "Calle Ayacucho",
        "Avenida Larco", "Avenida España", "Avenida Mansiche", "Calle Orbegoso", "Calle Gamarra", "Calle Pizarro",
        "Jirón Independencia", "Jirón Almagro", "Jirón Bolívar", "Calle San Martín", "Calle Junín", "Calle Ayacucho",
        "Avenida Larco", "Avenida España", "Avenida Mansiche", "Calle Orbegoso", "Calle Gamarra", "Calle Pizarro",
        "Jirón Independencia", "Jirón Almagro", "Jirón Bolívar", "Calle San Martín", "Calle Junín", "Calle Ayacucho"
    );
    
    $ciudades = array(
        "Lima", "Arequipa", "Trujillo", "Cusco", "Piura", "Iquitos", "Chiclayo", "Huancayo", "Tacna", "Pucallpa",
        "Lambayeque", "Ayacucho", "Chimbote", "Ica", "Huaraz", "Puno", "Juliaca", "Tumbes", "Chincha Alta", "Tarapoto",
        "Cajamarca", "Huánuco", "Cerro de Pasco", "Moyobamba", "Barranca", "Puerto Maldonado", "Huaral", "Máncora", "Cajabamba", "Jaén",
        "Huacho", "Tarma", "Pisco", "Sullana", "Moquegua", "Bagua Grande", "Chachapoyas", "Huarmey", "Yurimaguas", "Satipo",
        "Andahuaylas", "Marcavelica", "Chota", "Chulucanas", "Churubamba", "Coronel Portillo", "La Merced", "Rioja", "Chachapoyas", "Bellavista",
        "Chiclayo", "Monsefú", "Pátapo", "Picsi", "Reque", "Santa Rosa", "Eten", "Lambayeque", "La Victoria", "Tumán", "Ferreñafe", "Mochumí", "Mórrope", "Pítipo", "Pueblo Nuevo"
    );
    return $calles[array_rand($calles)] . ", " . $ciudades[array_rand($ciudades)];
}

function generarCorreoClienteAleatorio($nombreCliente, $tipoCliente) {
    $dominios = array(
        "@gmail.com",
        "@yahoo.com",
        "@hotmail.com",
        "@outlook.com",
        "@aol.com",
        "@protonmail.com",
        "@icloud.com",
        "@mail.com",
        "@live.com",
        "@msn.com"
    );

    $dominio = $dominios[array_rand($dominios)];

    if ($tipoCliente == 'E') {
        $nombreCliente = str_replace(' ', '', $nombreCliente);
        $nombreCliente = addslashes($nombreCliente); // Escapar las comillas simples en el nombre de la empresa
        return strtolower($nombreCliente) . $dominio;
    } else {
        $nombreCliente = str_replace(' ', '.', $nombreCliente);
        $nombreCliente = addslashes($nombreCliente); // Escapar las comillas simples en el nombre de la persona
        return strtolower($nombreCliente) . $dominio;
    }
}

function generarDescripcionProductoAleatorio() {
    $estados = array(
        "Nuevo y sellado",
        "Producto ligero",
        "Disponible a domicilio",
        "En buen estado",
        "No disponible a domicilio",
        "Para entregas inmediatas",
        "Para recojo en tienda"
    );

    return $estados[array_rand($estados)];
}



// Generar datos para la tabla dim_productos
$categoriasProductos = array(
    "Linea cocinas",
    "Linea ambientes",
    "Línea de Limpieza"
);

$preciosProductos = array(
    10.00, 15.00, 10.00, 14.00, 11.00, 14.00, 12.00, 40.00, 15.00, 25.00, 35.00, 30.00, 20.00, 18.00, 13.00, 24.00
);

// Datos adicionales para la categoría "Linea cocinas"
$lineaCocinasProductos = array(
    "QUITAGRASA" => 10.00,
    "LAVAVAJILLA" => 15.00
);

// Datos adicionales para la categoría "Linea ambientes"
$lineaAmbientesProductos = array(
    "LIMPIATODO AROMATIZANTE" => 10.00,
    "DESINFECTANTE PINO" => 14.00,
    "LEJÍA" => 11.00,
    "SACASARRO" => 14.00,
    "LIMPIAVIDRIO" => 12.00,
    "SILICONA" => 40.00
);

// Datos adicionales para la categoría "Línea de Limpieza"
$lineaLimpiezaProductos = array(
    "JABÓN LÍQUIDO" => 15.00,
    "ALCOHOL PURO 96°" => 25.00,
    "ALCOHOL EN GEL" => 35.00,
    "ALCOHOL DE EUCALIPTO" => 30.00,
    "DETERGENTE LÍQUIDO" => 20.00,
    "SUAVIZANTE DE ROPA" => 18.00,
    "CLOROBE COLOR" => 13.00,
    "CHAMPOO PARA AUTOS" => 24.00
);

// Generar datos para la tabla dim_productos
$idProducto = 1;

foreach ($categoriasProductos as $categoria) {
    switch ($categoria) {
        case "Linea cocinas":
            $nombresProductos = $lineaCocinasProductos;
            break;
        case "Linea ambientes":
            $nombresProductos = $lineaAmbientesProductos;
            break;
        case "Línea de Limpieza":
            $nombresProductos = $lineaLimpiezaProductos;
            break;
        default:
            $nombresProductos = array();
    }

    foreach ($nombresProductos as $nombreProducto => $precioProducto) {
        $descripcionProducto = generarDescripcionProductoAleatorio();

        $sql = "INSERT INTO dim_productos (IdProducto, NombresProductos, PrecioProductos, DescripcionProductos, Categorias)
                VALUES ($idProducto, '$nombreProducto', $precioProducto, '$descripcionProducto', '$categoria')";

        if ($conexionBD->query($sql) === TRUE) {
            echo "Datos insertados correctamente en la tabla dim_productos<br>";
        } else {
            echo "Error al insertar datos en la tabla dim_productos: " . $conexionBD->error;
        }

        $idProducto++;
    }
}

// Generar datos para la tabla dim_clientes
for ($i = 1; $i <= 250; $i++) {
    $ruc = generarRUCAleatorio($tipoCliente);
    $nombreCliente = generarNombreClienteAleatorio($tipoCliente);
    $tipoCliente = ($i % 2 == 0) ? 'E' : 'P';
    $direccionCliente = generarDireccionAleatoria();
    $telefonoCliente = generarTelefonoAleatorio();
    $correoCliente = generarCorreoClienteAleatorio($nombreCliente, $tipoCliente);

    $sql = "INSERT INTO dim_clientes (IdCliente, RUC, NombreCliente, TipoCliente, DireccionCliente, TelefonoCliente, CorreoCliente)
    VALUES ($i, '$ruc', '".addslashes($nombreCliente)."', '$tipoCliente', '$direccionCliente', '$telefonoCliente', '".addslashes($correoCliente)."')";


    if ($conexionBD->query($sql) === TRUE) {
    echo "Datos insertados correctamente en la tabla dim_clientes<br>";
    } else {
    echo "Error al insertar datos en la tabla dim_clientes: " . $conexionBD->error;
    }
}


// Verificar si ya existen registros en la tabla dim_empleados
$sqlVerificarRegistros = "SELECT COUNT(*) AS count FROM dim_empleados";
$resultado = $conexionBD->query($sqlVerificarRegistros);
$registrosExistentes = $resultado->fetch(PDO::FETCH_ASSOC)['count'];

if ($registrosExistentes < 20) {
    // Generar datos para la tabla dim_empleados (solo si hay menos de 20 registros)
    for ($i = 1; $i <= 20; $i++) {
        $nombresEmpleado = generarNombreAleatorio();
        $apellidosEmpleado = generarApellidoAleatorio();
        $dniEmpleado = generarDNIAleatorio();
        $telefonoEmpleado = generarTelefonoAleatorio();

        $sql = "INSERT INTO dim_empleados (IdEmpleado, Nombres, Apellidos, Dni, Telefono)
                VALUES ($i, '$nombresEmpleado', '$apellidosEmpleado', '$dniEmpleado', '$telefonoEmpleado')";

        if ($conexionBD->query($sql) === TRUE) {
            echo "Datos insertados correctamente en la tabla dim_empleados<br>";
        } else {
            echo "Error al insertar datos en la tabla dim_empleados: " . $conexionBD->error;
        }
    }
} else {
    echo "Ya existen registros en la tabla dim_empleados. No se generaron nuevos datos.<br>";
}
// Generar datos para la tabla dim_fechas
$startDate = date('Y-m-d', strtotime('-5 years'));
$endDate = date('Y-m-d');

$currentDate = $startDate;
$idFecha = 1;

while ($currentDate <= $endDate) {
    $anio = date('Y', strtotime($currentDate));
    $mes = date('m', strtotime($currentDate));
    $dia = date('d', strtotime($currentDate));
    $nombreMes = date('F', strtotime($currentDate));
    $nombreDia = date('l', strtotime($currentDate));

    $sql = "INSERT INTO dim_fechas (IdFecha, FechaVenta, Anio, Mes, Dia, NombreMes, NombreDia)
            VALUES ($idFecha, '$currentDate', $anio, $mes, $dia, '$nombreMes', '$nombreDia')";

    if ($conexionBD->query($sql) === TRUE) {
        echo "Datos insertados correctamente en la tabla dim_fechas<br>";
    } else {
        echo "Error al insertar datos en la tabla dim_fechas: " . $conexionBD->error;
    }

    $idFecha++;
    $currentDate = date('Y-m-d', strtotime($currentDate . ' + 1 day'));
}



// Generar datos para la tabla hechos_ventas
for ($i = 1; $i <= 20000; $i++) {
    // Obtener un ID de cliente existente aleatoriamente
    $sqlClienteExistente = "SELECT IdCliente FROM dim_clientes ORDER BY RAND() LIMIT 1";
    $resultadoClienteExistente = $conexionBD->query($sqlClienteExistente);
    $idClienteExistente = $resultadoClienteExistente->fetch(PDO::FETCH_ASSOC)['IdCliente'];

    // Obtener un ID de producto existente aleatoriamente
    $sqlProductoExistente = "SELECT IdProducto FROM dim_productos ORDER BY RAND() LIMIT 1";
    $resultadoProductoExistente = $conexionBD->query($sqlProductoExistente);
    $idProductoExistente = $resultadoProductoExistente->fetch(PDO::FETCH_ASSOC)['IdProducto'];

    // Obtener un ID de empleado existente aleatoriamente
    $sqlEmpleadoExistente = "SELECT IdEmpleado FROM dim_empleados ORDER BY RAND() LIMIT 1";
    $resultadoEmpleadoExistente = $conexionBD->query($sqlEmpleadoExistente);
    $idEmpleadoExistente = $resultadoEmpleadoExistente->fetch(PDO::FETCH_ASSOC)['IdEmpleado'];

    // Obtener un ID de fecha existente aleatoriamente
    $sqlFechaExistente = "SELECT IdFecha FROM dim_fechas ORDER BY RAND() LIMIT 1";
    $resultadoFechaExistente = $conexionBD->query($sqlFechaExistente);
    $idFechaExistente = $resultadoFechaExistente->fetch(PDO::FETCH_ASSOC)['IdFecha'];

    $idCliente = $idClienteExistente;
    $idProducto = $idProductoExistente;
    $idEmpleado = $idEmpleadoExistente;
    $idFecha = $idFechaExistente;
    $cantidadVendida = rand(1, 10);
    $total = $cantidadVendida * $preciosProductos[array_rand($preciosProductos)];

    $sql = "INSERT INTO hechos_ventas (IdVenta, IdCliente, IdProducto, IdEmpleado, IdFecha, CantidadVendida, Total)
            VALUES ($i, $idCliente, $idProducto, $idEmpleado, $idFecha, $cantidadVendida, $total)";

    if ($conexionBD->query($sql) === TRUE) {
        echo "Datos insertados correctamente en la tabla hechos_ventas<br>";
    } else {
        echo "Error al insertar datos en la tabla hechos_ventas: " . $conexionBD->error;
    }
}

$conexionBD = null;
?>
