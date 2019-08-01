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
        echo "<br><br><br><hr>";
        echo("11) GET NUMERO DEL ULTIMO COMPROBANTE");
        echo "<br><hr>";                
        ?>
        <form method="POST">
            <div class="datagrid2">
                <table>
                    <tr>
                        <td><div class="campos">Punto de Venta</div></td>
                        <td><input type="text" id="pto_venta" name="pto_venta" class="textin" value=""/></td>
                    </tr>
                    <tr>
                        <td><div class="campos">Tipo de Comprobante</div></td>
                        <td>
                            <select name="tipo_comp" id="tipo_comp" class="textin2">
                                <option value="0">Seleccione Tipo de Comprobante</option>
                                <?php
                                $voucher_types = $afip->ElectronicBilling->GetVoucherTypes();
                                foreach ($voucher_types as $key => $value){?>
                                    <option value="<?php echo $value->Id; ?>"><?php
                                        print_r($value->Id);
                                        print_r(" - ");
                                        print_r($value->Desc);
                                        ?>
                                    </option>
                                    <?php
                                }?>                                
                            </select>
                        </td>
                    </tr>
                </table>
                <div class="botones">
                    <button type="submit" class="botin">
                        Consultar
                    </button>
                </div>
            </div>
        </form>
        <?php
        if(isset($_REQUEST["tipo_comp"]) AND isset($_REQUEST["pto_venta"])){
            //Devuelve el número del último comprobante creado para el punto de venta $_REQUEST["pto_venta"] y el tipo de comprobante $_REQUEST["tipo_comp"]
            $last_voucher = $afip->ElectronicBilling->GetLastVoucher($_REQUEST["pto_venta"], $_REQUEST["tipo_comp"]); 
            echo 'Este es el número del último comprobante:';
            echo '<br><br>';
            var_dump($last_voucher);
        }?>
    </div>
</div>
<?php  
include("pie.php");
?>