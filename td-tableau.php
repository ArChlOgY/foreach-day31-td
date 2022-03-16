<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <!-- BOOTSTRAP -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Classement Ligue</title>
        <!-- FONT AWESOME-->
        <script src="https://kit.fontawesome.com/6ebea31493.js" crossorigin="anonymous"></script>
        <!-- GOOGLE FONTS -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Serif:wght@100&display=swap" rel="stylesheet">
        <!-- JQUERY -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- BOOTSTRAP -->
        <!-- CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <!-- CSS INTERNAL -->
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <!-- SITE MAIN CONTENT -->
        <main>
            <section>
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h1 class="title text-center mt-3">PHP - Play with table !</h1>
                            </div>
                        </div>
                    </div>
            </section>
            <section>
                <div class="container mt-3">
                    <div class="row text-center mb-4">
                        <div class="school text-center mt-5 mb-3">
                            <img class="school-img" src="https://www.foreach-academy.fr/user/themes/foreach/images/image-png-jpg/logo-foreach-academy.png" alt="ForEach Academy">
                        </div>
                    </div>
                </div>      
                <div class="container mt-3 work-contents">
                    <div class="row enonce-top mb-3">
                        <div class="col-12 mb-3 mt-3 ennonce-title"><strong>TAB#1 - Exercice 1</strong></div>
                        <div class="col-12 enonce">
                            <ul>
                                <li>Déclarer un tableau $fruits qui contiendra six (6) fruits</li>
                                <li>Trier ce tableau en ordre croissant puis l’afficher avec la boucle foreach</li>
                                <li>Trier ce tableau en ordre décroissant puis l’afficher avec la boucle foreach</li>
                                <li>Vérifier si la pomme est dans ce tableau, si oui afficher la phrase « La pomme est est dans le tableau » sinon afficher « La pomme n’est pas dans le tableau »</li>
                                <li>Afficher ensuite la phrase : « Le tableaux $fruits contient …. Fruits >> Remplacer les points par la taille (le nombre d’éléments) du tableau</li>
                            </ul>
                        </div>
                        <div class="col-12 work mt-3">
                            <div class="step-work mb-2">Déclarer un tableau $fruits qui contiendra six (6) fruits</div>
                            <div class="result-work">
                                <?php
                                    $fruits = ["Peche", "Poire", "Pomme", "Framboise", "Banane", "Ananas"];
                                    var_dump($fruits);
                                ?>
                            </div>    
                        </div>
                        <div class="col-12 work mt-3">
                            <div class="step-work mb-2">Trier ce tableau en ordre croissant puis l’afficher avec la boucle foreach</div>
                            <div class="result-work">
                                <?php
                                    asort($fruits);
                                    foreach ($fruits as $fruit => $val) {
                                        echo "$fruit :: $val\n";
                                        echo "<br \>";
                                    }
                                ?>
                            </div>    
                        </div>
                        <div class="col-12 work mt-3">
                            <div class="step-work mb-2">Vérifier si la pomme est dans ce tableau</div>
                            <div class="result-work">
                                <?php
                                if (in_array('Pomme', $fruits)) {
                                    echo "La pomme est est dans le tableau";
                                } else {
                                    echo "La pomme n'est pas dans le tableau";
                                }
                                ?>
                            </div>    
                        </div>
                        <div class="col-12 work mt-3">
                            <div class="step-work mb-2">Trier ce tableau en ordre décroissant puis l’afficher avec la boucle foreach</div>
                            <div class="result-work">
                                <?php
                                    arsort($fruits);
                                    foreach ($fruits as $fruit => $val) {
                                        echo "$fruit :: $val\n";
                                        echo "<br \>";
                                    }
                                ?>
                            </div>    
                        </div>
                        <div class="col-12 work mt-3">
                            <div class="step-work mb-2">Afficher ensuite la phrase : « Le tableaux $fruits contient …. Fruits >></div>
                            <div class="result-work">
                                <?php
                                        echo "Le tableau \$fruits contient ".count($fruits)." fruits";
                                    ?>
                            </div>    
                        </div>
                    </div>
                    <div class="row enonce-top">
                        <div class="col-12 mb-3 mt-3 ennonce-title"><strong>TAB#2 - Exercice 2</strong></div>
                        <div class="col-12 enonce">On souhaite mettre en vente quatre (4) véhicules
                            <ul>
                                <li>
                                    Déclarer un tableau multidimensionnel, chaque élément de ce tableau sera un tableau associatif contenant un véhicule avec les caractéristiques suivantes : immatriculation, marque, type, couleur, prix
                                </li>
                                <li>
                                    Parcourir ce tableau avec la boucle foreach et afficher les véhicules comme ci-dessous
                                </li>
                                <li>
                                    1234 AA 60 Peugeot 208 Noir 8000€ <br \>
                                    6743 BA 54 Renault Clio Rouge 6000€
                                </li>
                            </ul>
                        </div>
                        <div class="col-12 work mt-3">
                            <div class="step-work mb-2">Déclarer un tableau multidimensionnel, chaque élément de ce tableau sera un tableau associatif</div>
                            <div class="result-work">
                                <?php
                                    $voitures = [
                                        ['immatriculation' => '1234 AA 80', 'marque' => 'Peugeot', 'type' => '208', 'couleur' => 'Noir', 'prix' => '8000€'],
                                        ['immatriculation' => '6743 BA 54', 'marque' => 'Renault', 'type' => 'Clio', 'couleur' => 'Rouge', 'prix' => '6000€'],
                                        ['immatriculation' => '9874 CC 59', 'marque' => 'Tesla', 'type' => 'Model Y', 'couleur' => 'Blanc', 'prix' => '68000'],
                                        ['immatriculation' => '6969 QQ 69', 'marque' => 'Audi', 'type' => 'Q8', 'couleur' => 'Noir', 'prix' => '16500€'],
                                    ];                                    
                                    var_dump($voitures);
                                ?>
                            </div>    
                        </div>
                        <div class="col-12 work mt-3">
                            <div class="step-work mb-2">Parcourir ce tableau avec la boucle foreach et afficher les véhicules comme suit</div>
                            <div class="result-work">
                                <?php
                                    foreach($voitures as $voiture => $detail){
                                        foreach ($detail as $x => $y){
                                            echo $y." ";
                                        }
                                        echo '<br>';
                                    }
                                ?>
                            </div>    
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <!-- SITE FOOTER -->
        <footer>
            <div class="container-fluid footer mt-5">
                <div class="row">
                    <div class="col-12 text-center">
                        <i class="fa-brands fa-html5"></i>
                        <i class="fa-brands fa-css3-alt"></i>
                        <i class="fa-brands fa-php"></i>
                        <i class="fa-brands fa-github"></i>
                    </div>
                </div>
            </div>

        </footer>
    <!-- JS INTERNAL -->
    <script type="text/javascript" src="./js/plugin.js"></script>
    </body>
</html>