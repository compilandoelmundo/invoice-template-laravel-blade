<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Orden</title>
</head>

<body>
    <!--HEADER-->
    <table class="div-1Header">
        <tr>
            <td class="logotd">
                <img id="" src="{{base_path('public/img/logoex.jpg')}}" alt="logo">
            </td>
            <td class="datos-grales-td">
                <table class="table_h_factura">
                    <thead>
                        <th class="headerDatosh titulos">Remision: <span class="titulos">51</span></th>
                    </thead>
                    <tr>
                        <td class="titulos">
                            <p class="titulos">nombre de tu empresa</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>
                                RFC: <span>BHUTMHTFP8</span>
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>TELEFONO: <span>5897485106</span> </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>E-MAIL: <span>contacto@tuempresa.com</span> </p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <!--DATOS-->
    <table class="div-1Datos">
        <tr>
            <td class="receptor">
                <table class="table_receptor">
                    <tr>
                        <td class="titulos">
                            <p class="titulos tituloRec">receptor</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequat</span>
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>RFC: <span>5897485106</span> </p>
                        </td>
                    </tr>
                </table>
            </td>
            <td class="datosGral">
                <table class="table_datos">
                    <tr>
                        <td>
                            <p>
                                FECHA DE CREACIÓN:
                            </p>
                        </td>
                        <td>
                            <p>
                               25-08-2022
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>
                                FECHA DE VENCIMIENTO:
                            </p>
                        </td>
                        <td>
                            <p>
                               31-12-2022
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>
                                SUCURSAL:
                            </p>
                        </td>
                        <td>
                            <p>
                               CDMX
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>
                                ALMACÉN:
                            </p>
                        </td>
                        <td>
                            <p>
                               8
                            </p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <!--MATERIAL/PRODUCTO-->
    <table class="table_materiales">
        <thead>
            <tr>
                <td>Código</td>
                <td>Cantidad</td>
                <td>Unidad</td>
                <td>Descripción</td>
                <td>Precio unitario</td>
                <td>Importe</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>005</td>
                <td>3.00</td>
                <td>Pieza</td>
                <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. asperiores illum dolore aliquid dicta rem tenetur hic.</td>
                <td>550.00</td>
                <td>1650.00</td>
            </tr>
        </tbody>
    </table>
     <!--DATOS FINALES-->
     <table class="div-1Datos">
        <tr>
            <td class="">
                <table class="table_datosFtxt">
                    <tr>
                        <td>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum maxime eos minus illum dignissimos voluptas? Expedita optio eligendi hic pariatur quisquam ratione, ipsam ipsa temporibus perspiciatis, alias iure sequi sit.</p>
                        </td>
                    </tr>
                </table>
            </td>
            <td class="datosFinales">
                <table class="table_datosfinales">
                    <tr>
                        <td>
                            <p>
                                Subtotal:
                            </p>
                        </td>
                        <td>
                            <p>
                               $1650.00
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>
                                Descuento:
                            </p>
                        </td>
                        <td>
                            <p>
                               $0.00
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>
                                IVA:
                            </p>
                        </td>
                        <td>
                            <p>
                               $264.00
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>
                                Total:
                            </p>
                        </td>
                        <td>
                            <p>
                               $1914.00
                            </p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <!--FIRMA-->
    <div class="firma">
        Firma del cliente
    </div>
    <!--FOOTER-->
    <footer>
        <p>Obten tu factura en: https://tuempresa.com/facturacion | Empresa: 558525 | Referencia: 55a885dvs </p>
    </footer>
</body>

</html>
<style>
    /*ESTILOS GRALES*/
    * {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 12px;
    }

    .titulos {
        font-size: 15px;
        text-transform: uppercase;
    }

    /*HEADER*/
    .div-1Header, .div-1Datos {
        width: 100%;
    }

    .logotd {
        width: 50%;
        height: auto;
    }

    .datos-grales-td, .receptor{
        width: 50%;
    }

    .table_h_factura{
        width: 50%;
        height: 150px;
        background-color: #FFF;
        width: 100%;
        margin: 0px;
        padding: 0px;
    }
    .headerDatosh {
        text-align: right;
        color: #FFF;
        padding: 5px;
        background-color: rgb(24, 140, 207);
    }

    .table_h_factura tr td p {
        margin: 0px;
        padding: 2px;
        text-align: right;
        padding-right: 5px;
    }
    /*DATOS*/
    .table_receptor, .table_datos {
        width: 42%;
        height: 100px;
        background-color: rgba(243, 243, 243, 0.521);
        width: 100%;
        margin: 0px;
        padding: 10px;
        border-radius: 5px;
    }
    .table_receptor tr td p{
        margin: 0px;
        padding: 2px;
        text-align: left;
    }
    .tituloRec{
        color: rgb(24, 140, 207);
    }
    .table_datos tr td p{
        margin: 0px;
        padding: 2px;
        text-align: left;
    }
    /*MATERIALES*/
    .table_materiales{
        width: 100%;
        margin-top: 10px;
        margin-bottom: 10px;
    }
    .table_materiales thead tr{
        background-color:rgb(24, 140, 207);
        color: #FFF;
    }
    .table_materiales thead tr td{
        padding: 5px;
        text-align: center;
        font-size: 14px;
    }
    .table_materiales tr td{
        text-align: center;
        padding: 5px;
        border-bottom: 1px solid rgba(20, 20, 20, 0.096);
    }
    /*DATOS FINALES*/
    .table_datosFtxt{
        width: 70%;
        height: 100px;
        width: 100%;
        margin: 0px;
    }
    .datosFinales{
        width: 30%;
    }
    .datosFinales .table_datosfinales{
        width: 42%;
        height: 100px;
        width: 100%;
        margin: 0px;
        padding: 10px;
        border: 1px solid rgba(20, 20, 20, 0.096);
    }
    .datosFinales .table_datosfinales tr td p{
        margin: 0px;
        padding: 2px;
        text-align: left;
    }
    /*FIRMA*/
    .firma{
        border-top: 1px solid rgba(20, 20, 20, 0.5);
        text-align: center;
        width: 30%;
        margin-left: 70%;
        margin-top: 80px;
        padding-top:5px;
    }
    /*FOOTER*/
    footer{
        width: 100%;
        text-align: center;
        position: absolute;
        bottom: 0px;
    }
</style>
