<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <?php
        
        include 'Coin.php';
        include 'Phone.php';
        $moneta1 = new Coin(null, null, null, null);
        $moneta1->setCountry("Lietuva");
        $moneta1->setValue(10);
        $moneta1->setYearofmanufacture(2010);
        $moneta1->setMaterial("Sidabras");

        $moneta2 = new Coin(null, null, null, null);
        $moneta2->setCountry("Lietuva");
        $moneta2->setValue(20);
        $moneta2->setYearofmanufacture(2017);
        $moneta2->setMaterial("Sidabras");

        $moneta3 = new Coin(null, null, null, null);
        $moneta3->setCountry("Lietuva");
        $moneta3->setValue(50);
        $moneta3->setYearofmanufacture(2021);
        $moneta3->setMaterial("Sidabras");

        $moneta4 = new Coin(null, null, null, null);
        $moneta4->setCountry("Lietuva");
        $moneta4->setValue(1);
        $moneta4->setYearofmanufacture(2018);
        $moneta4->setMaterial("Auksas");

        $moneta5 = new Coin(null, null, null, null);
        $moneta5->setCountry("Lietuva");
        $moneta5->setValue(2);
        $moneta5->setYearofmanufacture(2022);
        $moneta5->setMaterial("Auksas");

        
        $monetos = [$moneta1, $moneta2, $moneta3, $moneta4, $moneta5];
        
        echo "Pirmas sarasas:"."<br>";
        foreach ($monetos as $moneta) {
            echo $moneta->getCountry(). " " . $moneta->getValue(). " " . $moneta->getYearofmanufacture(). " " . $moneta->getMaterial()."<br>";
        }
        



    ?>
    <div class="container">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Country</th>
                        <th scope="col">Value</th>
                        <th scope="col">Yearofmanufacture</th>
                        <th scope="col">Material</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php  foreach ($monetos as $moneta) { ?>
                        <tr>
                    
                            <td><?php echo $moneta->getCountry(); ?> </td>
                            <td><?php echo $moneta->getValue(); ?> </td>
                            <td><?php echo $moneta->getYearofmanufacture(); ?> </td>
                            <td><?php echo $moneta->getMaterial(); ?> </td>
                    
                        </tr>
                    <?php } ?>
                
                    </tbody>
                </table>
            </div>
            <div class="col-2"></div>
        </div>
    </div>

    <?php 
        $telefonas1 = new Phone("Nokia", 2010, false);
        $telefonas2 = new Phone("Samsung", 2022, true);
        $telefonas3 = new Phone("Huawei", 2015, false);
        $telefonas4 = new Phone("IPhone", 2022, true);

        $telefonas = [$telefonas1, $telefonas2, $telefonas3, $telefonas4];
    
    
    
    
        echo "Antras sarasas:"."<br>";
        foreach ($telefonas as $telefon) {
            echo $telefon->manufacturer. " " . $telefon->year. " " . $telefon->model."<br>";
        }
        



    ?>
    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Manufacturer</th>
                        <th scope="col">Year</th>
                        <th scope="col">Model</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php  foreach ($telefonas as $telefon) { ?>
                        <tr>
                    
                            <td><?php echo $telefon->manufacturer; ?> </td>
                            <td><?php echo $telefon->year; ?> </td>
                            <td><?php echo (boolval($telefon->model) ? 'true' : 'false') ; ?> </td>
                
                        </tr>
                    <?php } ?>
                
                    </tbody>
                    
                </table>
            </div>
            <div class="col-3"></div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
</body>
</html>