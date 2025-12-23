<!-- Partie 1 : Tableaux indexés (ordonnés)
Exercice 1.1 – Création et affichage
Consigne :
Créez un tableau $fruits contenant les éléments suivants : "pomme",
"banane", "orange".
Affichez chaque fruit sur une ligne différente à l'aide d'une boucle foreach .-->
<?php
$fruits = ["pomme", "banane", "orange"];
foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}
?><br>

<!-- Exercice 1.2 – Accès par index
Consigne :
Reprenez le tableau $fruits de l'exercice précédent.
Affichez uniquement le premier et le dernier élément du tableau à l'aide de
leur index numérique.-->
<?php
$fruits = ["pomme", "banane", "orange"];
echo $fruits[0] . "<br>";
echo $fruits[2] . "<br>";
?><br>

<!--Exercice 1.3 – Ajout dʼéléments
Consigne :
Ajoutez deux nouveaux fruits à la fin du tableau $fruits à l'aide de la syntaxe
[] = .
Affichez de nouveau tout le tableau avec une boucle.-->
<?php
$fruits = ["pomme", "banane", "orange"];
$fruits[] = "kiwi";
$fruits[] = "fraise";
foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}
?><br>

<!-- Exercice 1.4 – Compter les éléments
Consigne :
À partir du tableau $fruits , affichez le nombre total dʼéléments contenus
dans le tableau.
Indication : Utilisez la fonction count() .-->
<?php
$fruits = ["pomme", "banane", "orange", "kiwi", "fraise"];
echo count($fruits) . "<br>";
?><br>

<!-- Partie 2 : Tableaux associatifs
Exercice 2.1 – Création et lecture
Consigne :
Créez un tableau associatif $personne avec les clés suivantes :
"nom" → "Durand"
"prenom" → "Alice"
"age"  28
Affichez une phrase du type :
Alice Durand a 28 ans. -->
<?php
$personne = ["nom" => "Durand", "prenom" => "Alice", "age" => 28];
echo $personne["prenom"] . " " . $personne["nom"] . " a " . $personne["age"] . " ans.";
?><br>

<!-- Exercice 2.2 – Boucle sur tableau associatif
Consigne :
Parcourez le tableau $personne avec une boucle foreach .
Affichez chaque paire clé/valeur sous la forme :
nom : Durand , etc. -->
<?php
$personne = ["nom" => "Durand", "prenom" => "Alice", "age" => 28];
foreach ($personne as $cle => $valeur) {
    echo $cle . " : " . $valeur . "<br>";
}
?><br>

<!-- Exercice 2.3 – Modification de valeur
Consigne :
Modifiez la valeur de lʼâge dans le tableau $personne et remplacez-la par 30.
Affichez de nouveau toutes les données. -->
<?php
$personne = ["nom" => "Durand", "prenom" => "Alice", "age" => 28];
$personne["age"] = 30;
foreach ($personne as $cle => $valeur) {
    echo $cle . " : " . $valeur . "<br>";
}
?><br>


<!-- Exercice 2.4 – Ajout de nouvelle entrée
Consigne :
Ajoutez une nouvelle clé "ville" avec la valeur "Paris" dans le tableau
$personne .
Affichez la phrase complète :
Alice Durand a 30 ans et habite à Paris. -->
<?php
$personne = ["nom" => "Durand", "prenom" => "Alice", "age" => 30];
$personne["ville"] = "Paris";
echo $personne["prenom"] . " " . $personne["nom"] . " a " . $personne["age"] . " ans et habite à " . $personne["ville"] . ".";
?><br>

<!-- Partie 3 : Applications combinées
Exercice 3.1 – Liste de prénoms
Consigne :
Créez un tableau indexé $prenoms contenant cinq prénoms.
Affichez un message pour chacun sous la forme :
Bonjour, [prénom] ! -->
<?php
$prenoms = ["Alice", "Bob", "Charlie", "David", "Eve"];
foreach ($prenoms as $prenom) {
    echo "Bonjour, " . $prenom . " !<br>";
}
?><br>


<!-- Exercice 3.2 – Afficher une fiche utilisateur
Consigne :
Créez un tableau associatif $utilisateur avec les clés "nom" , "prenom" , "email" ,
"age" .
Affichez chaque information dans un paragraphe séparé. -->
<?php
$utilisateur = ["nom" => "Durand", "prenom" => "Alice", "email" => "alice-durand@gmail.com", "age" => "30 ans"];
foreach ($utilisateur as $cle => $valeur) {
    echo $cle . " : " . $valeur . "<br>";
}
?><br>

<!-- Exercice 3.3 – Déboguer un tableau
Consigne :
Créez un tableau $livre contenant :
"titre" : "1984"
"auteur" : "George Orwell"
"annee" : 1949
Utilisez la fonction var_dump() pour afficher toutes les informations du
tableau.
Pour formater un tableau affiché avec
var_dump() :
echo "<pre>";
var_dump($monTableau);
echo "</pre>";
Affichez ensuite chaque valeur du tableau. -->
<?php
$livre = ["titre" => "1984", "auteur" => "George Orwell", "annee" => 1949];
echo "<pre>";
var_dump($livre);
echo "</pre>";
foreach ($livre as $cle => $valeur) {
    echo $cle . " : " . $valeur . "<br>";
}
?><br>