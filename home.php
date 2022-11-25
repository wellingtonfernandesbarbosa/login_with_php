<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">
    <title>Home</title>
</head>
<body>
    <h1 class="logo">Logo</h1>
    <div class="home">
<?php
    $name = $_POST["user"];
    $password = $_POST["password"];
    if ($name == "") {
        $name = "Anônimo";
    }
    echo "<p class='welcome'>Seja bem vindo <p class='name'>". $name. "</p></p>";
    echo "<br>";
    if ($password == ""){
        echo "<p>Parece que não digitou sua senha, mas fique a vontade e conheça nosso site.</p>";
        echo "<br>";
    }
    echo "<p>Lorem ipsum dolor sit amet. Ut deserunt facere et culpa reprehenderit in modi esse. Est dignissimos similique in harum laboriosam qui voluptas omnis eum architecto illum qui cumque exercitationem aut consectetur aperiam. Qui pariatur reiciendis quo facilis laudantium ut obcaecati earum qui repudiandae eveniet. Ut ducimus delectus et assumenda sint sed velit porro quo consequatur nihil.
<br><br>
          Sed ipsam sunt aut iusto eligendi quo magni provident in consequuntur voluptates quo voluptatem autem? Ex eius exercitationem est provident odit vel repellendus reprehenderit qui accusamus libero.
<br><br>
        A temporibus ipsum aut voluptate excepturi ut repudiandae galisum est suscipit reprehenderit. Qui provident exercitationem eos voluptatem sequi aut corporis eius. Et error galisum aut odit quasi eos voluptatem adipisci eos impedit cupiditate quo consequatur porro At magni nulla. Ea nulla animi aut enim recusandae ut repellendus voluptatem aut accusamus iure ut ipsam consequuntur in neque ducimus ut ipsam nihil.
<br><br>
        Qui sunt ipsum et molestiae galisum et laborum voluptatem. Et cupiditate fuga non amet saepe ut unde quaerat et galisum mollitia hic fugiat magnam. Nam similique exercitationem eum odio porro eos quis similique et magnam excepturi sed blanditiis accusamus At numquam repudiandae ut soluta omnis? Aut sapiente dolor rem beatae minima ut nostrum exercitationem.</p>";
?>
</div>
</body>
</html>