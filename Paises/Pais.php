<?php
$pais= array();
$pais["Mexico"]=array("Guadalajara","Monterrey","Puebla","Nayarit","Veracruz");
$pais["Colombia"]=array("Bogot�","Medellin","Bucaramanga","Barranquilla","Cali");
$pais["Venezuela"]=array("Maracaibo","Barquisimeto","Caracas","Barcelona","M�rida");
$pais["Per�"]=array("Lima","Chimbote","Tarapoto","Iquitos","Cuzco");
$pais["Argentina"]=array("Cordoba","Mendoza","Santa rosa","Bahia blanca","Mercedez");
$pais["Francia"]=array("Le mans","Borgo�a","Paris","Picard�a","Lorena");
$pais["Espa�a"]=array("Valladolid","Madrid","Valencia","C�rdoba","Sevilla");
$pais["Portugal"]=array("Setubal","Braga","�vora","Torres vedras","Porto");
$pais["Alemania"]=array("Hamburgo","Munich","Berlin","Stuttgart","Munchen");
$pais["Japom"]=array("Hirosima","Kumamoto","Sendai","Okayama","Toyama");

echo "<ul>";
foreach($pais as $pais=>$ciudades){
echo "<li>".$pais."<ul>";

foreach($ciudades as $ciudad){
echo "<li>". $ciudad."</il>";
}
 echo "</ul></li>";
}
 
?>