<?php
// Array
$db = [
  'Faq_1' => [
    'title' => "Come state implementando la recente decisione della Corte di giustizia dell'Unione europea (CGUE) relativa al diritto all'oblio?",
    'text' => "La recente decisione della Corte di giustizia dell'Unione europea ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi.
    
    Da quando questa decisione è stata pubblicata il 13 maggio 2014, abbiamo lavorato incessantemente per uniformarci a essa. Si tratta di una procedura complessa perché dobbiamo valutare ogni singola richiesta e effettuare un bilanciamento tra il diritto dell'individuo a controllare i suoi dati personali ed il diritto di tutti di conoscere e distribuire le informazioni.

    Per presentare una richiesta di rimozione, compila questo modulo web. Riceverai una risposta automatica che conferma la ricezione della tua richiesta. Dopodiché valuteremo il tuo caso (tieni presente che potrebbe occorrere un po' di tempo perché abbiamo già ricevuto tante richieste simili). Nel valutare la richiesta, considereremo se i risultati includono informazioni obsolete relative alla tua vita privata. Considereremo inoltre se vi è un interesse pubblico a che le informazioni rimangano nei nostri risultati delle ricerche, ad esempio se riguardano frodi finanziarie, negligenza professionale, condanne penali o la tua condotta pubblica in relazione a un pubblico ufficio (eletto o non eletto). Queste valutazioni sono complesse e, in quanto organizzazione privata, potremmo non essere nella posizione giusta per prendere decisioni in merito al tuo caso. Se non sei d'accordo con la nostra valutazione, puoi rivolgerti all'Autorità garante per la protezione dei dati personali nel tuo paese.

    Nei prossimi mesi lavoreremo a stretto contatto con le autorità per la protezione dei dati e con altre autorità per perfezionare il nostro approccio. La decisione della CGUE rappresenta un cambiamento significativo per i motori di ricerca. Siamo preoccupati per le sue conseguenze, ma riteniamo anche che sia importante rispettare la decisione della Corte e ci stiamo adoperando per predisporre una procedura conforme alla legge.

    Quando cerchi un nome, potresti trovare una notifica in cui viene spiegato che i risultati potrebbero essere stati modificati nel rispetto delle leggi europee per la protezione dei dati. Mostriamo questa notifica agli utenti europei quando cercano la maggior parte dei nomi, non soltanto le pagine che sono state soggette a una rimozione."
  ],


];
// var_dump($db);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <title>Google FAQ</title>
  </head>
  <body>
    <!-- Header -->
    <header>
      <div class="header-top clearfix">
        <a class="logo float" href="#">
          <img src="img/download.png" alt="logo Google">
        </a>
        <h2 class="float">
          <a href="#">Privacy e termini</a>
        </h2>
      </div>
      <div class="header-bottom clearfix">
        <ul>
          <li>
            <a href="#">Introduzione</a>
          </li>
          <li>
            <a href="#">Norme sulla privacy</a>
          </li>
          <li>
            <a href="#">Termini di servizio</a>
          </li>
          <li>
            <a href="#">Tecnologie</a>
          </li>
          <li>
            <a class="color_blue" href="#">Domande frequenti</a>
          </li>
          <li>
            <a href="#">Account Google</a>
          </li>
        </ul>
      </div>
    </header>
    <!-- /Header -->
    <!-- Main -->
    <main>
      <div class="wrapper">

        <ul>
          <?php foreach ($db as $key => $value) { ?>
            <li>
              <h2>
                <?php echo $value['title']; ?>
              </h2>
              <p>
                <?php echo $value['text']; ?>
              </p>
            </li>
          <?php } ?>
        </ul>

      </div>

    </main>
    <!-- /Main -->
    <!-- Footer -->
    <footer></footer>
    <!-- /Footer -->


  </body>
</html>
