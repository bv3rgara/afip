<?php  
@session_start();
include("cabecera.php");
include("Afip.php");
?>
<div id="site_content">
    <?php  
    include("menu.php");
    ?>
    <div id="content">
        <?php
        $afip = new Afip(array('CUIT' => 20056602349));
        // echo "CUIT: ".$afip->CUIT."<br>";
        // echo $afip->CERT."<br>";
        // echo $afip->WSAA_WSDL."<br>";
        // echo $afip->WSAA_URL."<br>";
        // echo $afip->PASSPHRASE."<br>";
        // echo $afip->RES_FOLDER."<br>";
        // echo $afip->TA_FOLDER."<br>";
        ?>
        <div style="margin: 15px" class="mensaje">
            <form method="POST">
                <select name="select" id="select" class="textin2">
                    <option value="0">Seleecione Opción</option>
                    <option value="1">1) Comprobantes disponibles</option>
                    <option value="2">2) Conceptos disponibles</option>
                    <option value="3">3) Documentos disponibles</option>
                    <option value="4">4) Alicuotas disponibles</option>
                    <option value="5">5) Monedas disponibles</option>
                    <option value="6">6) Opciones disponibles para el comprobante</option>
                    <option value="7">7) Tributos disponibles</option>
                    <option value="8">8) Formato de fecha yyyymmdd => yyyy-mm-dd</option>
                    <option value="9">9) Estado del servidor</option>
                    <option value="10">10) Obtener información de un comprobanmte</option>
                    <option value="11">11) Obtener el número del último comprobante</option>
                    <option value="12">12) Crear y asignar CAE a un comprobante</option>
                    <option value="13">13) Crear y asignar CAE a siguiente comprobante</option>
                </select>
                <button type="submit" class="botin">
                    Consultar
                </button>
            </form>
        </div>
        <?php
        if (isset($_REQUEST["select"])){
            if ($_REQUEST["select"] == 1){
                // 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1
                echo "<br><hr>";
                echo("1) GET TIPOS DE COMPROBANTES DISPONIBLES");
                echo "<br><hr>";
                $voucher_types = $afip->ElectronicBilling->GetVoucherTypes();
                var_dump($voucher_types);
            }elseif($_REQUEST["select"] == 2){
                // 2 2 2 2 2 2 2 2 2 2 2 2 2 2 2 2 2 2 2 2 2 2 2 2 2 2 2 2 2 2 2 2 2 2 2 2 2 2 2 2
                echo "<br><hr>";
                echo("2) GET TIPOS DE CONCEPTOS DISPONIBLES");
                echo "<br><hr>";
                $concept_types = $afip->ElectronicBilling->GetConceptTypes();
                var_dump($concept_types);
            }elseif($_REQUEST["select"] == 3){
                // 3 3 3 3 3 3 3 3 3 3 3 3 3 3 3 3 3 3 3 3 3 3 3 3 3 3 3 3 3 3 3 3 3 3 3 3 3 3 3 3
                echo "<br><hr>";
                echo("3) GET TIPOS DE DOCUMENTOS DISPONIBLES");
                echo "<br><hr>";
                $document_types = $afip->ElectronicBilling->GetDocumentTypes();
                var_dump($document_types);
            }elseif($_REQUEST["select"] == 4){
                // 4 4 4 4 4 4 4 4 4 4 4 4 4 4 4 4 4 4 4 4 4 4 4 4 4 4 4 4 4 4 4 4 4 4 4 4 4 4 4 4
                echo "<br><hr>";
                echo("4) GET ALICUOTAS DISPONIBLES");
                echo "<br><hr>";
                $aloquot_types = $afip->ElectronicBilling->GetAliquotTypes();
                var_dump($aloquot_types);
            }elseif($_REQUEST["select"] == 5){
                // 5 5 5 5 5 5 5 5 5 5 5 5 5 5 5 5 5 5 5 5 5 5 5 5 5 5 5 5 5 5 5 5 5 5 5 5 5 5 5 5
                echo "<br><hr>";
                echo("5) GET TIPOS DE MONEDAS DISPONIBLES");
                echo "<br><hr>";
                $currencies_types = $afip->ElectronicBilling->GetCurrenciesTypes();
                var_dump($currencies_types);
            }elseif($_REQUEST["select"] == 6){
                // 6 6 6 6 6 6 6 6 6 6 6 6 6 6 6 6 6 6 6 6 6 6 6 6 6 6 6 6 6 6 6 6 6 6 6 6 6 6 6 6
                echo "<br><hr>";
                echo("6) GET TIPOS DE OPCIONES DISPONIBLES PARA EL COMOPROBANTE");
                echo "<br><hr>";
                $option_types = $afip->ElectronicBilling->GetOptionsTypes();
                var_dump($option_types);
            }elseif($_REQUEST["select"] == 7){
                // 7 7 7 7 7 7 7 7 7 7 7 7 7 7 7 7 7 7 7 7 7 7 7 7 7 7 7 7 7 7 7 7 7 7 7 7 7 7 7 7
                echo "<br><hr>";
                echo("7) GET TIPOS DE TRIBUTOS DISPONIBLES");
                echo "<br><hr>";
                $tax_types = $afip->ElectronicBilling->GetTaxTypes();
                var_dump($tax_types);
            }elseif($_REQUEST["select"] == 8){
                // 8 8 8 8 8 8 8 8 8 8 8 8 8 8 8 8 8 8 8 8 8 8 8 8 8 8 8 8 8 8 8 8 8 8 8 8 8 8 8 8
                echo "<br><hr>";
                echo("8) FORMATO DE FECHA yyyymmdd => yyyy-mm-dd");
                echo "<br><hr>";
                $date = $afip->ElectronicBilling->FormatDate('20190427'); //Nos devuelve 1997-05-08
                var_dump($date);
            }elseif($_REQUEST["select"] == 9){
                // 9 9 9 9 9 9 9 9 9 9 9 9 9 9 9 9 9 9 9 9 9 9 9 9 9 9 9 9 9 9 9 9 9 9 9 9 9 9 9 9
                echo "<br><hr>";
                echo("9) ESTADO DEL SERVIDOR");
                echo "<br><hr>";
                $server_status = $afip->ElectronicBilling->GetServerStatus();
                var_dump($server_status);
            }elseif($_REQUEST["select"] == 10){
                // 10 10 10 10 10 10 10 10 10 10 10 10 10 10 10 10 10 10 10 10 10 10 10 10 10 10 10
                echo "<br><hr>";
                echo("10) GET INFORMACION DE UN COMPROBANTE");
                echo "<br><hr>";
                $voucher_info = $afip->ElectronicBilling->GetVoucherInfo(19,1,6); //Devuelve la información del comprobante 1 para el punto de venta 1 y el tipo de comprobante 6 (Factura B)
                if($voucher_info === NULL){
                    echo 'El comprobante no existe';
                }
                else{
                    echo 'Esta es la información del comprobante:';
                    echo '<pre>';
                    print_r($voucher_info);
                    echo '</pre>';
                }
                echo "***************************************************************************";
                var_dump($voucher_info);
            }elseif($_REQUEST["select"] == 11){
                // 11 11 11 11 11 11 11 11 11 11 11 11 11 11 11 11 11 11 11 11 11 11 11 11 11 11 11
                echo "<br><hr>";
                echo("11) GET NUMERO DEL ULTIMO COMPROBANTE");
                echo "<br><hr>";
                $last_voucher = $afip->ElectronicBilling->GetLastVoucher(1,6); //Devuelve el número del último comprobante creado para el punto de venta 1 y el tipo de comprobante 6 (Factura B)
                var_dump($last_voucher);
            }elseif($_REQUEST["select"] == 12){
                // 12 12 12 12 12 12 12 12 12 12 12 12 12 12 12 12 12 12 12 12 12 12 12 12 12 12 12
                echo "<br><hr>";
                echo("12) CREAR Y ASIGNAR CAE A UN COMPROBANTE");
                echo "<br><hr>";
                $id_ult_comp = $afip->ElectronicBilling->GetLastVoucher(1,6);
                $new_id_comp = $id_ult_comp + 1;
                $data = array(
                    'CantReg'   => 1,  // Cantidad de comprobantes a registrar
                    'PtoVta'    => 1,  // Punto de venta
                    'CbteTipo'  => 6,  // Tipo de comprobante (ver tipos disponibles) 
                    'Concepto'  => 1,  // Concepto del Comprobante: (1)Productos, (2)Servicios, (3)Productos y Servicios
                    'DocTipo'   => 99, // Tipo de documento del comprador (99 consumidor final, ver tipos disponibles)
                    'DocNro'    => 0,  // Número de documento del comprador (0 consumidor final)
                    'CbteDesde' => $new_id_comp,  // Número de comprobante o numero del primer comprobante en caso de ser mas de uno
                    'CbteHasta' => $new_id_comp,  // Número de comprobante o numero del último comprobante en caso de ser mas de uno
                    'CbteFch'   => intval(date('Ymd')), // (Opcional) Fecha del comprobante (yyyymmdd) o fecha actual si es nulo
                    'ImpTotal'  => 121, // Importe total del comprobante
                    'ImpTotConc'=> 0,   // Importe neto no gravado
                    'ImpNeto'   => 100, // Importe neto gravado
                    'ImpOpEx'   => 0,   // Importe exento de IVA
                    'ImpIVA'    => 21,  //Importe total de IVA
                    'ImpTrib'   => 0,   //Importe total de tributos
                    'MonId'     => 'PES', //Tipo de moneda usada en el comprobante (ver tipos disponibles)('PES' para pesos argentinos) 
                    'MonCotiz'  => 1,     // Cotización de la moneda usada (1 para pesos argentinos)  
                    'Iva'       => array( // (Opcional) Alícuotas asociadas al comprobante
                        array(
                            'Id'     => 5, // Id del tipo de IVA (5 para 21%)(ver tipos disponibles) 
                            'BaseImp'=> 100, // Base imponible
                            'Importe'=> 21 // Importe 
                        )
                    ), 
                );
                $res = $afip->ElectronicBilling->CreateVoucher($data, TRUE);
                var_dump($res);
                //$res['CAE']; //CAE asignado el comprobante
                //$res['CAEFchVto']; //Fecha de vencimiento del CAE (yyyy-mm-dd)                
            }elseif($_REQUEST["select"] == 13){
                // 13 13 13 13 13 13 13 13 13 13 13 13 13 13 13 13 13 13 13 13 13 13 13 13 13 13 13
                echo "<br><hr>";
                echo("13) CREAR Y ASIGNAR CAE A SIGUIENTE COMPROBANTE");
                echo "<br><hr>";
                $id_ult_comp = $afip->ElectronicBilling->GetLastVoucher(1,6);
                $new_id_comp = $id_ult_comp + 1;
                $data = array(
                    'CantReg'   => 1,  // Cantidad de comprobantes a registrar
                    'PtoVta'    => 1,  // Punto de venta
                    'CbteTipo'  => 6,  // Tipo de comprobante (ver tipos disponibles) 
                    'Concepto'  => 1,  // Concepto del Comprobante: (1)Productos, (2)Servicios, (3)Productos y Servicios
                    'DocTipo'   => 99, // Tipo de documento del comprador (99 consumidor final, ver tipos disponibles)
                    'DocNro'    => 0,  // Número de documento del comprador (0 consumidor final)
                    'CbteDesde' => $new_id_comp,  // Número de comprobante o numero del primer comprobante en caso de ser mas de uno
                    'CbteHasta' => $new_id_comp,  // Número de comprobante o numero del último comprobante en caso de ser mas de uno
                    'CbteFch'   => intval(date('Ymd')), // (Opcional) Fecha del comprobante (yyyymmdd) o fecha actual si es nulo
                    'ImpTotal'  => 121, // Importe total del comprobante
                    'ImpTotConc'=> 0,   // Importe neto no gravado
                    'ImpNeto'   => 100, // Importe neto gravado
                    'ImpOpEx'   => 0,   // Importe exento de IVA
                    'ImpIVA'    => 21,  //Importe total de IVA
                    'ImpTrib'   => 0,   //Importe total de tributos
                    'MonId'     => 'PES', //Tipo de moneda usada en el comprobante (ver tipos disponibles)('PES' para pesos argentinos) 
                    'MonCotiz'  => 1,     // Cotización de la moneda usada (1 para pesos argentinos)  
                    'Iva'       => array( // (Opcional) Alícuotas asociadas al comprobante
                        array(
                            'Id'     => 5, // Id del tipo de IVA (5 para 21%)(ver tipos disponibles) 
                            'BaseImp'=> 100, // Base imponible
                            'Importe'=> 21 // Importe 
                        )
                    ), 
                );
                $res = $afip->ElectronicBilling->CreateNextVoucher($data);
                var_dump($res);
                //$res['CAE']; //CAE asignado el comprobante
                //$res['CAEFchVto']; //Fecha de vencimiento del CAE (yyyy-mm-dd)
                //$res['voucher_number']; //Número asignado al comprobante
            }
        }
        ?>
    </div>
</div>
<?php  
include("pie.php");
?>