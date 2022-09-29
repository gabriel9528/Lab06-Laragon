<?php
    $importeVentas=$_POST['ventas'];
    $cantidadHijos=$_POST['hijos'];
    $sueldoBasico=600;
    $descuneto=0.11*$sueldoBasico;
    $comision=0.075*$importeVentas;
    $bonificacionPorHijos=50*$cantidadHijos;

    
    $recibir=$bonificacionPorHijos+$sueldoBasico+$comision-$descuneto;

    echo "El descuento es: ".$descuneto;
    echo "La comision de ventas es: ".$comision;
    echo "La bonificacion por hijos es: ".$bonificacionPorHijos;

    echo "El total bruto a recibir es: ".$recibir;
?>