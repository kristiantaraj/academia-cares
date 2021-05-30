<?php
/**
 * Template Name: Homepage
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>


<section id="banner">
    <div class="banner-image" style="background: url('<?php echo get_template_directory_uri().'/assets/stir2.png'; ?>') center no-repeat;">
    <div class="shade">
                <h2>
                Acadèmia supporta il <br>
                CARE’s Young ethical Chef Award <br>
                by Monograno Felicetti
                </h2>
                <p>Seminiamo talento e raccogliamo capolavori</p>
            </div>
    </div>
</section>

<section id="slogan">
    <div class="redirect container">
        <div class="row">
            <div class="col-12">
            <h2>Partecipa al concorso!</h2>
        <p class="text">Sei uno chef under 30 che ha a cuore la sostenibilità? <br> Carica il tuo video e diventa il nuovo <span class="bold"> Young CARE’s Chef's 2021!</span></p>
        <div class="center">
            <a href="#" class="button">Partecipa ora!</a>
        </div>
        <p class="date">concorso valido dal 05/06/2021 <br> fino al 01/09/2021</p>
            </div>
        </div>
    </div>
</section>

<section id="description">
    <div class="video-flex">
        <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="video"><iframe width="424" height="238" src="https://www.youtube.com/embed/n-xbUI2zL74" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-5">
                <div class="content">
                <p>Acadèmia supporta il CARE’s Young ethical Chef Award by Monograno Felicetti, il nuovo premio istituito da Acadèmia e CARE’s - The ethical Chef Days. L’ evento è stato creato da Norbert Niederkofler, Chef 3 stelle Michelin del St. Hubertus (BZ) e stella verde per la sostenibilità, e Paolo Ferretti. Ha come missione quella di raggruppare i migliori Chef del mondo che fanno dell’approccio etico la propria filosofia di cucina, e diffondere così un messaggio di sostenibilità e attenzione per l’ambiente che ci circonda.</p>
                </div>
            </div>
        </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="info">
                    <p>Il concorso sarà valido fino al 01.09.2021. Il vincitore verrà contattato entro <br>
                        l'08.09.2021 e proclamato ufficialmente vincitore proprio durante la <br>
                        manifestazione che si terrà a Brunico dal 24/09 al 03/10 2021.</p>
                </div>
            </div>
        </div>
        

    </div>
</section>

<section id="cards">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="content">
                    <h2>Il vincitore riceverà:</h2>
                </div>
            </div>
        </div>
    </div>
</section>