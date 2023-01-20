<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conta Bancaria</title>
</head>

<body>
    <pre>
        <?php
        require_once "ContaBanco.php";

        $p1 = new bankAccount(); //Flavio   
        $p2 = new bankAccount(); //Nichollas

        $p1->openAccount("CC");
        $p1->setAccNum(123123);
        $p1->setOwner("Flavio");
        $p2->openAccount("CP");
        $p2->setAccNum(985172);
        $p2->setOwner("Nichollas");

        $p1->deposit(300);
        $p2->deposit(500);

        $p2->withdrawn(100); //Sacou 100 conto pra comprar coca e margarina

        $p1->monthlyDebit();
        $p2->monthlyDebit();

        $p1->withdrawn(338);
        $p2->withdrawn(530);

        $p1->closeAccount();
        $p2->closeAccount();


        print_r($p1);
        print_r($p2);


        ?>
    </pre>
</body>

</html>l