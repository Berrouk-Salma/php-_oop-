
<?php

$patient1 = new Patient("Salma", "Berrouk", "Patient");
$patient1->make_a_date("2024-12-30 10:00");

$doc = new Doctor("oussama", "benoujja", "Medecin", "NeuroSurgeon");
$consultation = $doc->consult($patient1);

echo $patient1->getname() . "\n";
echo $medecin1->getname() . "\n";
echo $consultation . "\n";


?>