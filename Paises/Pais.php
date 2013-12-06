<?php
$pais= array();
$pais["Mexico"]=array("Guadalajara","Monterrey","Puebla","Nayarit","Veracruz");
$pais["Colombia"]=array("Bogotá","Medellin","Bucaramanga","Barranquilla","Cali");
$pais["Venezuela"]=array("Maracaibo","Barquisimeto","Caracas","Barcelona","Mérida");
$pais["Perú"]=array("Lima","Chimbote","Tarapoto","Iquitos","Cuzco");
$pais["Argentina"]=array("Cordoba","Mendoza","Santa rosa","Bahia blanca","Mercedez");
$pais["Francia"]=array("Le mans","Borgoña","Paris","Picardìa","Lorena");
$pais["España"]=array("Valladolid","Madrid","Valencia","Córdoba","Sevilla");
$pais["Portugal"]=array("Setubal","Braga","Évora","Torres vedras","Porto");
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