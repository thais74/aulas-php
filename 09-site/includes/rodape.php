</main>
    <body>
        
    <footer>
        <p>Site criado para o curso <b>Téc. Informática para Internet</b></p>
    </footer>

<?php
date_default_timezone_set("America/Sao_Paulo");
$currentdatetime = date("d-m-y");
$currentHour = date("H:i");
?>

<p><?=$currentdatetime?></p>
<p><?=$currentHour?></p> 

</body>
</html>