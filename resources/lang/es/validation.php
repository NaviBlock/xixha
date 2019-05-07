<? php
devolver [
    / *
    | ------------------------------------------------- -------------------------
    | Validación de líneas de lenguaje
    | ------------------------------------------------- -------------------------
    |
    | Las siguientes líneas de idioma contienen los mensajes de error predeterminados utilizados por
    | La clase validadora. Algunas de estas reglas tienen múltiples versiones tales
    | como las reglas de tamaño. Siéntase libre de modificar cada uno de estos mensajes aquí.
    |
    * /
    ' aceptado '              =>  ' El campo: atributo debe ser aceptado. ' ,
    ' active_url '            =>  ' El campo: attribute no es una URL válida. ' ,
    ' después '                 =>  ' El campo: atributo debe ser una fecha posterior a: fecha. ' ,
    ' after_or_equal '        =>  ' El campo: atributo debe ser una fecha posterior o igual a: fecha. ' ,
    ' alpha '                 =>  ' El campo: attribute solo puede contener letras. ' ,
    ' alpha_dash '            =>  ' El campo: atributo solo puede contener letras, números, guiones y guiones bajos. ' ,
    ' alpha_num '             =>  ' El campo: atributo solo puede contener letras y números. ' ,
    ' array '                 =>  ' El campo: attribute debe ser un array. ' ,
    ' antes '                =>  ' El campo: atributo debe ser una fecha anterior a: fecha. ' ,
    ' before_or_equal '       =>  ' El campo: atributo debe ser una fecha anterior o igual a: fecha. ' ,
    ' entre '               => [
        ' numérico '  =>  ' El campo: atributo debe ser un valor entre: min y: max. ' ,
        ' archivo '     =>  ' El archivo: atributo debe pesar entre: min y: max kilobytes. ' ,
        ' string '   =>  ' El campo: attribute debe contener entre: min y: max caracteres. ' ,
        ' array '    =>  ' El campo: attribute debe contener entre: min y: max elementos. ' ,
    ]
    ' boolean '               =>  ' El campo: atributo debe ser verdadero o falso. ' ,
    ' confirmado '             =>  ' El campo confirmación de: atributo no coincide. ' ,
    ' fecha '                  =>  ' El campo: atributo no corresponde con una fecha válida. ' ,
    ' date_equals '           =>  ' El campo: attribute debe ser una fecha igual a: date. ' ,
    ' date_format '           =>  ' El campo: atributo no corresponde con el formato de fecha: formato. ' ,
    ' diferente '             =>  ' Los campos: atributo y: otros deben ser diferentes. ' ,
    ' dígitos '                =>  ' El campo: atributo debe ser un número de: dígitos dígitos. ' ,
    ' digit_between '        =>  ' El campo: attribute debe contener entre: min y: max dígitos. ' ,
    ' dimensiones '            =>  ' El campo: atributo tiene dimensiones de imagen inválidas. ' ,
    ' distinto '              =>  ' El campo: atributo tiene un valor duplicado. ' ,
    ' email '                 =>  ' El campo: atributo debe ser una dirección de correo válido. ' ,
    ' existe '                =>  ' El campo: atributo seleccionado no existe. ' ,
    ' file '                  =>  ' El campo: attribute debe ser un archivo. ' ,
    ' relleno '                =>  ' El campo: atributo debe tener un valor. ' ,
    ' gt '                    => [
        ' numérico '  =>  ' El campo: atributo debe ser mayor a: valor. ' ,
        ' archivo '     =>  ' El archivo: atributo debe pesar más de: valor en kilobytes. ' ,
        ' string '   =>  ' El campo: attribute debe contener más de: value caracteres. ' ,
        ' array '    =>  ' El campo: attribute debe contener más de: value elementos. ' ,
    ]
    ' gte '                   => [
        ' numérico '  =>  ' El campo: atributo debe ser mayor o igual a: valor. ' ,
        ' archivo '     =>  ' El archivo: atributo debe pesar: valor o más kilobytes. ' ,
        ' string '   =>  ' El campo: attribute debe contener: value o más caracteres. ' ,
        ' array '    =>  ' El campo: attribute debe contener: value o más elementos. ' ,
    ]
    ' imagen '                 =>  ' El campo: atributo debe ser una imagen. ' ,
    ' in '                    =>  ' El campo: atributo es inválido. ' ,
    ' in_array '              =>  ' El campo: attribute no existe en: other. ' ,
    ' integer '               =>  ' El campo: attribute debe ser un número entero. ' ,
    ' ip '                    =>  ' El campo: atributo debe ser una dirección IP válida. ' ,
    ' ipv4 '                  =>  ' El campo: attribute debe ser una dirección IPv4 válido. ' ,
    ' ipv6 '                  =>  ' El campo: attribute debe ser una dirección IPv6 válido. ' ,
    ' json '                  =>  ' El campo: atributo debe ser una cadena de texto JSON válida. ' ,
    ' lt '                    => [
        ' numérico '  =>  ' El campo: atributo debe ser menor a: valor. ' ,
        ' archivo '     =>  ' El archivo: atributo debe pesar menos de: valor en kilobytes. ' ,
        ' string '   =>  ' El campo: attribute debe contener menos of: value caracteres. ' ,
        ' array '    =>  ' El campo: attribute debe contener menos of: value elementos. ' ,
    ]
    ' lte '                   => [
        ' numérico '  =>  ' El campo: atributo debe ser menor o igual a: valor. ' ,
        ' archivo '     =>  ' El archivo: atributo debe pesar: valor o menos kilobytes. ' ,
        ' string '   =>  ' El campo: attribute debe contener: value o menos caracteres. ' ,
        ' array '    =>  ' El campo: attribute debe contener: value o menos elementos. ' ,
    ]
    ' max '                   => [
        ' numérico '  =>  ' El campo: atributo no debe ser mayor a: máx. ' ,
        ' file '     =>  ' El archivo: attribute no debe pesar más de: max kilobytes. ' ,
        ' string '   =>  ' El campo: atributo no debe contener más de: max caracteres. ' ,
        ' array '    =>  ' El campo: atributo no debe contener más de: max elementos. ' ,
    ]
    ' mimes '                 =>  ' El campo: atributo debe ser un archivo de tipo:: valores. ' ,
    ' mimetypes '             =>  ' El campo: atributo debe ser un archivo de tipo:: valores. ' ,
    ' min '                   => [
        ' numeric '  =>  ' El campo: attribute debe ser al menos: min. ' ,
        ' file '     =>  ' El archivo: attribute debe pesar al menos: min kilobytes. ' ,
        ' string '   =>  ' El campo: attribute debe contener al menos: min caracteres. ' ,
        ' array '    =>  ' El campo: attribute debe contener al menos: min elementos. ' ,
    ]
    ' not_in '                =>  ' El campo: atributo seleccionado es inválido. ' ,
    ' not_regex '             =>  ' El formato del campo: atributo es inválido. ' ,
	' numérico '               =>  ' El campo: atributo debe ser un número. ' ,
    ' presente '               =>  ' El campo: atributo debe estar presente. ' ,
    ' regex '                 =>  ' El formato del campo: atributo es inválido. ' ,
    ' requerido '              =>  ' El campo: atributo es obligatorio. ' ,
    ' required_if '           =>  ' El campo: atributo es obligatorio cuando el campo: otro es: valor. ' ,
    ' required_unless '       =>  ' El campo: atributo es requerido a menos que: otros se encuentran en: valores. ' ,
    ' required_with '         =>  ' El campo: attribute es obligatorio cuando: values ​​está presente. ' ,
    ' required_with_all '     =>  ' El campo: attribute es obligatorio cuando: values ​​están presentes. ' ,
    ' required_without '      =>  ' El campo: atributo es obligatorio cuando: valores no está presente. ' ,
    ' required_without_all '  =>  ' El campo: atributo es obligatorio cuando ninguno de los campos: valores están presentes. ' ,
    ' same '                  =>  ' Los campos: atributo y: otros deben coincidir. ' ,
    ' tamaño '                  => [
        ' numérico '  =>  ' El campo: atributo debe ser: tamaño. ' ,
        ' archivo '     =>  ' El archivo: atributo debe pesar: tamaño kilobytes. ' ,
        ' string '   =>  ' El campo: attribute debe contener: size caracteres. ' ,
        ' array '    =>  ' El campo: attribute debe contener: size elementos. ' ,
    ]
    ' starts_with '           =>  ' El campo: atributo debe comenzar con uno de los siguientes valores:: valores ' ,
    ' string '                =>  ' El campo: attribute debe ser una cadena de caracteres. ' ,
    ' zona horaria '              =>  ' El campo: atributo debe ser una zona horaria válida. ' ,
    ' único '                =>  ' El valor del campo: atributo ya está en uso. ' ,
    ' subido '              =>  ' El campo: atributo no se pudo subir. ' ,
    ' url '                   =>  ' El formato del campo: atributo es inválido. ' ,
    ' uuid '                  =>  ' El campo: attribute debe ser un UUID válido. ' ,
    / *
    | ------------------------------------------------- -------------------------
    | Validación personalizada de líneas de lenguaje
    | ------------------------------------------------- -------------------------
    |
    | Aquí puede especificar mensajes de validación personalizados para atributos utilizando la
    | convención "attribute.rule" para nombrar las líneas. Esto hace que sea rápido
    | especifique una línea de idioma personalizada específica para una regla de atributo dada.
    |
    * /
    ' custom '  => [
        ' nombre-atributo '  => [
            ' rule-name '  =>  ' custom-message ' ,
        ]
    ]
    / *
    | ------------------------------------------------- -------------------------
    | Atributos de validación personalizados
    | ------------------------------------------------- -------------------------
    |
    | Las siguientes líneas de idioma se utilizan para intercambiar los marcadores de posición de atributo.
    | con algo más fácil de leer, como la dirección de correo electrónico.
    | de "email". Esto simplemente nos ayuda a hacer los mensajes un poco más limpios.
    |
    * /
    ' atributos '  => [],
];