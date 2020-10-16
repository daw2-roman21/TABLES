<html>
 <head>
  <title>Fechas</title>
 </head>
 <body>
    <?php
        $ayer = date("d")-1;
        
        if(date("m")-1==0) {$mesAnterior = "Diciembre";
                            $diasTot=31;
                            $estacion = "Invierno";
                        }
        else if(date("m")-1==1) {$mesAnterior = "Enero";
                            $diasTot=28;
                            $estacion = "Invierno";
                        }
        else if(date("m")-1==2) {$mesAnterior = "Febrero";
                                $diasTot=31;
                                $estacion = "Primavera";
                        }
        else if(date("m")-1==3) {$mesAnterior = "Marzo";
                                $diasTot=30;
                                $estacion = "Primavera";
                            }
        else if(date("m")-1==4) {$mesAnterior = "Abril";
                                $diasTot=31;
                                $estacion = "Primavera";
                            }
        else if(date("m")-1==5) {$mesAnterior = "Mayo";
            $diasTot=30;
            $estacion = "Verano";
                            }
        else if(date("m")-1==6) {$mesAnterior = "Junio";
            $diasTot=31;
            $estacion = "Verano";
                            }
        else if(date("m")-1==7) {$mesAnterior = "Julio";
            $diasTot=30;
            $estacion = "Verano";
                            }
        else if(date("m")-1==8) {$mesAnterior = "Agosto";
            $diasTot=30;
            $estacion = "Otoño";
                            }
        else if(date("m")-1==9) {$mesAnterior = "Septiembre";
            $diasTot=31;
            $estacion = "Otoño";
                            }
        else if(date("m")-1==10) {$mesAnterior = "Octubre";
            $diasTot=30;
            $estacion = "Otoño";
                            }
        else if(date("m")-1==11) {$mesAnterior = "Noviembre";
            $diasTot=31;
            $estacion = "Invierno";
                            }
       
        $diasRes = $diasTot-date("j");
        $mesRes = 12-date("m");
        echo "Ayer fue ";
        echo $ayer;
        echo "\n";
        echo "El mes anterior es ", $mesAnterior;
        echo "\nQuedan ", $diasRes, " dias este mes.\n";
        echo "Quedan ", $mesRes, " meses este año.\n";
        echo "Buen/a ", $estacion;
    ?>
 </body>
 <footer>
     <p> <span float="center">Site developed by: <a href="correo.html">ALEX ROMAN</a></span></p>
 </footer>
</html>