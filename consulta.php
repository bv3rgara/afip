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
                    <option value="0">Seleccione Opción</option>
                    <option value="1">1) Comprobantes disponibles</option>
                    <option value="2">2) Conceptos disponibles</option>
                    <option value="3">3) Documentos disponibles</option>
                    <option value="4">4) Alicuotas disponibles</option>
                    <option value="5">5) Monedas disponibles</option>
                    <option value="6">6) Opciones disponibles para el comprobante</option>
                    <option value="7">7) Tributos disponibles</option>
                    <option value="8">8) Formato de fecha yyyymmdd => yyyy-mm-dd</option>
                    <option value="9">9) Estado del servidor</option>
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
            }
        }
        ?>
    </div>
</div>
<?php  
include("pie.php");
?>