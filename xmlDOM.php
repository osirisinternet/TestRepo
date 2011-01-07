<?php
    //kreira se DOMDocument objekat
    $xmlDoc = new DOMDocument();

    //u xml objekat se ucitava xml fajl
    $xmlDoc->load("mobiles.xml");

    //dodeljuje se promenljivoj koreni element
    $x = $xmlDoc->documentElement;

    $telefons = $x->getElementsByTagName( "telefon" );
  foreach( $telefons as $telefon )
  {
  $model = $telefon->getElementsByTagName( "model" );
  $proiz = $telefon->getElementsByTagName( "proizvodjac" );
  $cena = $telefon->getElementsByTagName( "cena" );


  echo $model->item(0)->nodeName .': '. $model->item(0)->nodeValue.' <br> '.$proiz->item(0)->nodeName .':'.$proiz->item(0)->nodeValue.'<br> '.$cena->item(0)->nodeName.':'.$cena->item(0)->nodeValue.' <br><br>';

  }
    //prolazi se kroz petlju tako sto se ispisuje informacija o podelementima
  
?>