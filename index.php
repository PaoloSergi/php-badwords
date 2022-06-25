 <!-- Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.  -->

<?php
    $text = "Nel mezzo del cammin di nostra vita
    mi ritrovai per una selva oscura,
    ché la diritta via era smarrita.
    
    Ahi quanto a dir qual era è cosa dura
    esta selva selvaggia e aspra e forte
    che nel pensier rinova la paura!
    
    Tant' è amara che poco è più morte;
    ma per trattar del ben ch'i' vi trovai,
    dirò de l'altre cose ch'i' v'ho scorte.
    
    Io non so ben ridir com' i' v'intrai,
    tant' era pien di sonno a quel punto
    che la verace via abbandonai.
    
    Ma poi ch'i' fui al piè d'un colle giunto,
    là dove terminava quella valle
    che m'avea di paura il cor compunto,
    
    guardai in alto e vidi le sue spalle
    vestite già de' raggi del pianeta
    che mena dritto altrui per ogne calle.
    
    Allor fu la paura un poco queta,
    che nel lago del cor m'era durata
    la notte ch'i' passai con tanta pieta.
    
    E come quei che con lena affannata,
    uscito fuor del pelago a la riva,
    si volge a l'acqua perigliosa e guata,
    
    così l'animo mio, ch'ancor fuggiva,
    si volse a retro a rimirar lo passo
    che non lasciò già mai persona viva.";

    $censoredWord = $_GET['censoredWord'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First PHP</title>
</head>
<body>
    
    <h2>Testo originale</h2>
    <p><?= $text ?></p>
    <h4>Lunghezza: <?= strlen($text) . ' caratteri'?></h4>

    <form action="" method="get">
        <label for="word">Parola da censurare:</label>
        <input type="text" name="censoredWord" id="word">
        <button>Sostituisci</button>
    </form>

    <h2>Testo censurato</h2>
    <p><?= $censoredText = str_ireplace($censoredWord,'***',$text) ?></p>
    <h4>Lunghezza: <?= strlen($censoredText) . ' caratteri'?></h4>

</body>
</html>