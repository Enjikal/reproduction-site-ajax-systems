<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/main.css">
    <title>Homepage</title>
</head>

<body>
    <header>
        <div class="header_top">
            <div class="container_country">
                <div class="textcountry">
                    Region
                    :

                    <div class="dropdown">
                        <button class="country_link" type="button">
                            <img class="flags" src="/assets/drapeaux/Flag_of_France_(bordered).svg" alt="">
                        </button>
                        France
                        <select id="countries" name="countries" class="select_countries">
                            <?php
                            $fichier = __DIR__ . DIRECTORY_SEPARATOR . 'listepays.txt';

                            $tab = file($fichier);
                            print_r($tab);

                            foreach ($var as $key => $value) {
                                $result = explode(':', $value);


                                echo '<option value= "' . strtolower($result[0]) . '">' . $result[1] . '</option></br>';
                            }



                            ?>

                        </select>
                    </div>
                    <div class="selected_language">
                        Language
                        :

                        <select>
                            <option value="eng">Eng</option>
                            <option value="ykp">Ykp</option>
                            <option value="es">Es</option>
                            <option value="fr">Fr</option>
                            <option value="de">De</option>
                            <option value="nl">Nl</option>
                            <option value="pl">Pl</option>
                            <option value="pt">Pt</option>
                            <option value="tr">Tr</option>
                            <option value="pyc">Pyc</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="navbar">

        <div class="navbar_brand">AJAX
            <div class="categories">
                <div class="category">Products</div>
                <div class="category">Solutions</div>
                <div class="category">Company</div>
                <div class="category">Support</div>
                <div class="category">For partners</div>
                <div class="category">Blog</div>
                <div class="category">Where to buy</div>
            </div>
            <div class="assemble_kit"><button type="button" class="btn">Assemble kit</button></div>
        </div>


    </div>

</body>

</html>