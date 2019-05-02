# Afip
## Proyecto de facturación de CMC usando [SDK-AFIP](https://github.com/AfipSDK/afip.php)
### Pasos para el desarrollo en prueba:
- Ingresar al sitio web de la [AFIP](http://www.afip.gob.ar/sitio/externos/default.asp) con número de ***CUIT*** y ***clave fiscal***.
- Acceder en la sección de ***Administrador de Relaciones de Clave Fiscal***.
- Seleccionar el contribuyente como operador del servicio y presionar en el botón ***Adherir Servicio***.
- Ingresar a la sección de AFIP y seleccionar ***WSASS - Autogestión Certificados Homologación*** y confirmar.
- Cerrar sesión y volver a acceder al sitio con CUIT y clave fiscal.
- Generar una clave privada ***privada.key*** a través de algún cliente SSH ([MINGW32](https://osdn.net/projects/mingw/downloads/68260/mingw-get-setup.exe/) o [OpenSSL](http://www.slproweb.com/products/Win32OpenSSL.html))  ejecutando el siguiente comando: 
>     openssl genrsa -out privada.key 2048
- Generar el certificado de seguridad ***certificado.csr*** ejecutando el siguiente comando:
>     openssl req -new -key privada.key -subj "//C=AR\O=nombre_empresa\CN=servidor_local\serialNumber=CUIT 000000000" -out certificado.csr
- Ingresar a la nueva aplicación habilitada WASS y acceder a la sección ***Nuevo Certificado*** [(ayuda).](https://www.youtube.com/watch?v=-gMH2N3RCzc)
  - Definir el ***1-Nombre Simbólico del Distinguished Name (DN)*** .
  - Copiar el código del certificado.csr dentro de ***3-Solicitud de certificado en formato PKCS#10***
  - Presionar el botón ***Crear DN y obtener el certificado*** y asociar al web service requerido (ejemplo: wsfe - Factura electrónica).
- Habilitar en el php.ini las extensiones de SOAP y OpenSSL.
>     extension=php_soap.dll 
>     extension=php_openssl.dll
