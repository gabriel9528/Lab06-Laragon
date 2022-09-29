<?php
    $precioGaseosa=$_POST['precio'];
    $cantidadGaseosa=$_POST['cantidad'];
    $descuento1=0.05*$precioGaseosa;
    $descuento2=0.07*$precioGaseosa;
    $obsequios=2*$cantidadGaseosa;

    $nuevoPrecio=$precioGaseosa-$descuento1-$descuento2;
    $totalDescuentos=$descuento1+$descuento2;
    $importePagar=$nuevoPrecio*$cantidadGaseosa;


    echo "El total de descuentos es: ".$totalDescuentos;
    echo "El nuevo precio de la gaseosa es: ".$nuevoPrecio;
    echo "El importe toal a pagar es: ".$importePagar;
    echo "La cantidad de obsequios es: ".$obsequios;
?>