<?php
/**
 * Template Name: Homepage
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

// Exit if accessed directly.  

error_reporting(0);
      
if (($_FILES['my_file']['name']!="")){
  // Where the file is going to be stored
      $target_dir = "wp-content/zip/caresfile ";
      $file = $_FILES['my_file']['name'];
      $path = pathinfo($file);
      $filename = $path['filename'];
      $ext = $path['extension'];
      $temp_name = $_FILES['my_file']['tmp_name'];
      $path_filename_ext = $target_dir.$filename.".".$ext;
      $file_size = $_FILES['my_file']['size'];
      $file_type = $_FILES['my_file']['type'];
      $maxsize = 157286400;

    $allowed = array("application/x-zip-compressed", "application/octet-stream");

    
   
  // Check if file already exists
  if (file_exists($path_filename_ext)) {

   }else if(!in_array($file_type, $allowed)) {

    }else if ($file_size > $maxsize || $file_size == 0){      
        $message = 'File too large. File must be less than 2 megabytes.'; 
        echo '<script type="text/javascript">alert("'.$message.'");</script>'; 
    }else{
   move_uploaded_file($temp_name,$path_filename_ext);
   }
  }

 






defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );


?>

<form name="form" method="post" enctype="multipart/form-data" style="display:none;">
<input id="myInput" name="my_file" type="file"/>
<input type="submit" name="submit" id="uploadfile">
</form>




<section id="banner">
    <div class="banner-image" style="background: url('<?php echo get_template_directory_uri().'/assets/stir2.png'; ?>') center center no-repeat;">
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
            <div class="col-md-7">
                <div class="video"><iframe width="424" height="238" src="https://www.youtube.com/embed/n-xbUI2zL74" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
            </div>
            <div class="col-md-5">
                <div class="content">
                <p>Acadèmia supporta il CARE’s Young ethical Chef Award by Monograno Felicetti, il nuovo premio istituito da Acadèmia e CARE’s - The ethical Chef Days. L’ evento è stato creato da Norbert Niederkofler, Chef 3 stelle Michelin del St. Hubertus (BZ) e stella verde per la sostenibilità, e Paolo Ferretti. Ha come missione quella di raggruppare i migliori Chef del mondo che fanno dell’approccio etico la propria filosofia di cucina, e diffondere così un messaggio di sostenibilità e attenzione per l’ambiente che ci circonda.</p>
                </div>
            </div>
        </div>
        </div>      
    </div>
</section>

<div class="container">
<div class="row justify-content-md-center">
    <div class="info col-md-7 text-center">
    <p>Il concorso sarà valido fino al 01.09.2021. Il vincitore verrà contattato entro 
                l'08.09.2021 e proclamato ufficialmente vincitore proprio durante la 
                manifestazione che si terrà a Brunico dal 24/09 al 03/10 2021.</p>
                <?php 


if (isset($_POST['submit'])) {
    $file_name = $FILES['myFile'];
    echo($file_name);
}


?>
    </div>
</div>
</div>


<section id="cards">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="content">
                    <h2>Il vincitore riceverà:</h2>
                </div>
            </div>
        </div>
        <div class="cards-row row">
            <div class="col-sm">
                <img src="<?php echo get_template_directory_uri().'/assets/first.png'; ?>" alt="">
                <h3 class="card-title">Ospite all'evento CARE’s - The ethical Chef Days 2021</h3>
                <p class="card-description">Ospite all'evento a Brunico (BZ) per 2 giorni con pernottamento incluso. Parteciperai a tutte le attività programmate, inclusa la cena al ristorante "AlpiNN - Food Space & Restaurant” dove chef stellati daranno vita ad un’esperienza unica.</p>
            </div>
            <div class="col-sm">
                <img src="<?php echo get_template_directory_uri().'/assets/second.png'; ?>" alt="">
                <h3 class="card-title">Registrazione della tua ricetta</h3>
                <p class="card-description">Avrai la possibilità di registrare la tua ricetta negli studios a Milano e con lo staff di Acadèmia. Il tuo contenuto verrà poi pubblicato sui profili social di Acadèmia, proprio affianco agli Chef protagonisti dei corsi sulla piattaforma. </p>
            </div>
            <div class="col-sm"> 
                <img src="<?php echo get_template_directory_uri().'/assets/third.png'; ?>" alt="">
                <h3 class="card-title">Fornitura per 1 anno Pasta Monograno Felicetti</h3>
                <p class="card-description">Ma non finisce qui! Riceverai una fornitura di pasta Monograno Felicetti per realizzare i tuoi piatti.</p>
            </div>
        </div>
        <div class="links row">
            <div class="col-12">
                <p class="gray-color text-center" >Per maggiori informazioni leggi il </p>
                <a href="#" class="d-flex justify-content-center" >regolamento</a>
            </div>
        </div>
    </div>

</section>
<section id="list">
    <div class="container">
        <div class="title row">
           <div class="col-md-12">
              <h2>Come partecipare?</h2>
           </div>
        </div>
        <div class="item row">
            <div class="col-md-2"></div>
            <div class="col-md-2">
            <div class="center-div">
            <p class="number">1</p>
            </div>
            </div>
            <div class="col-md-6">
               <p class="text">Registra un video (max 60 sec) in cui racconti: <br>
                1) In 30 sec, cosa è per te la sostenibilità e come questa fa parte della tua filosofia di cucina/vita tutti i giorni. <br> 
                2) Nei restanti 30sec. racconta l’idea e gli ingredienti dietro il tuo piatto</p>
            </div>
            <div class="col-md-2"></div>
        </div>
        <div class="item row">
            <div class="col-md-2"></div>
            <div class="col-md-2">
            <div class="center-div">
            <p class="number">2</p>
            </div>

            </div>
            <div class="col-md-6">
               <p class="text">Crea una cartella sul tuo computer e rinominala NOME_COGNOME_ETà_città.<br>
                              Inserisci all'interno:<br>
                              - una tua foto professionale (dim max 5mb)<br>
                              - la foto del piatto da te creato nel video<br>
                              - il video da te creato (dim max 100mb)</p>
            </div>
            <div class="col-md-2"></div>
        </div>
        <div class="item row">
            <div class="col-md-2"></div>
            <div class="col-md-2">
            <div class="center-div">
            <p class="number">3</p>
            </div>
            </div>
            <div class="col-md-6">
               <p class="text">Comprimi la cartella da te creata in un formato a scelta tra .zip e .rar
                          (ti basterà fare click col tasto destro del mouse e selezionare l'opzione di 
                          compressione).</p>
            </div>
            <div class="col-md-2"></div>
        </div>
        <div class="item row">
            <div class="col-md-2"></div>
            <div class="col-md-2">
            <div class="center-div">
            <p class="number">4</p>
            </div>
            </div>
            <div class="col-md-6">
               <p class="text">Inserisci la tua email e numero di cellulare e usa il form qui in basso per caricare la tua cartella sulla piattaforma! Verrai contattato dal nostro team che ti 
                  darà un feedback al più presto.</p>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>       
</section>

<section id="form">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
          <h3 class="text-center text-white">Inserisci</h3>
      </div>
      <div class="form-style col-md-12">
      <style>
 #_form_9_ { font-size:14px; line-height:1.6; font-family:arial, helvetica, sans-serif; margin:0; }
 #_form_9_ * { outline:0; }
 ._form_hide { display:none; visibility:hidden; }
 ._form_show { display:block; visibility:visible; }
 #_form_9_._form-top { top:0; }
 #_form_9_._form-bottom { bottom:0; }
 #_form_9_._form-left { left:0; }
 #_form_9_._form-right { right:0; }
 #_form_9_ input[type="text"],#_form_9_ input[type="date"],#_form_9_ textarea { padding:6px; height:auto; border:#979797 1px solid; border-radius:4px; color:#000 !important; font-size:14px; -webkit-box-sizing:border-box; -moz-box-sizing:border-box; box-sizing:border-box; }
 #_form_9_ textarea { resize:none; }
 #_form_9_ ._submit { -webkit-appearance:none; cursor:pointer; font-family:arial, sans-serif; font-size:14px; text-align:center; background:#fe0136 !important; border:0 !important; -moz-border-radius:10px !important; -webkit-border-radius:10px !important; border-radius:10px !important; color:#fff !important; padding:10px !important; }
 #_form_9_ ._close-icon { cursor:pointer; background-image:url('https://d226aj4ao1t61q.cloudfront.net/esfkyjh1u_forms-close-dark.png'); background-repeat:no-repeat; background-size:14.2px 14.2px; position:absolute; display:block; top:11px; right:9px; overflow:hidden; width:16.2px; height:16.2px; }
 #_form_9_ ._close-icon:before { position:relative; }
 #_form_9_ ._form-body { margin-bottom:30px; }
 #_form_9_ ._form-image-left { width:150px; float:left; }
 #_form_9_ ._form-content-right { margin-left:164px; }
 #_form_9_ ._form-branding { color:#fff; font-size:10px; clear:both; text-align:left; margin-top:30px; font-weight:100; }
 #_form_9_ ._form-branding ._logo { display:block; width:130px; height:14px; margin-top:6px; background-image:url('https://d226aj4ao1t61q.cloudfront.net/hh9ujqgv5_aclogo_li.png'); background-size:130px auto; background-repeat:no-repeat; }
 #_form_9_ .form-sr-only { position:absolute; width:1px; height:1px; padding:0; margin:-1px; overflow:hidden; clip:rect(0, 0, 0, 0); border:0; }
 #_form_9_ ._form-label,#_form_9_ ._form_element ._form-label { font-weight:bold; margin-bottom:5px; display:block; }
 #_form_9_._dark ._form-branding { color:#333; }
 #_form_9_._dark ._form-branding ._logo { background-image:url('https://d226aj4ao1t61q.cloudfront.net/jftq2c8s_aclogo_dk.png'); }
 #_form_9_ ._form_element { position:relative; margin-bottom:10px; font-size:0; max-width:100%; }
 #_form_9_ ._form_element * { font-size:14px; }
 #_form_9_ ._form_element._clear { clear:both; width:100%; float:none; }
 #_form_9_ ._form_element._clear:after { clear:left; }
 #_form_9_ ._form_element input[type="text"],#_form_9_ ._form_element input[type="date"],#_form_9_ ._form_element select,#_form_9_ ._form_element textarea:not(.g-recaptcha-response) { display:block; width:100%; -webkit-box-sizing:border-box; -moz-box-sizing:border-box; box-sizing:border-box; font-family:inherit; }
 #_form_9_ ._field-wrapper { position:relative; }
 #_form_9_ ._inline-style { float:left; }
 #_form_9_ ._inline-style input[type="text"] { width:150px; }
 #_form_9_ ._inline-style:not(._clear) + ._inline-style:not(._clear) { margin-left:20px; }
 #_form_9_ ._form_element img._form-image { max-width:100%; }
 #_form_9_ ._form_element ._form-fieldset { border:0; padding:0.01em 0 0 0; margin:0; min-width:0; }
 #_form_9_ ._clear-element { clear:left; }
 #_form_9_ ._full_width { width:100%; }
 #_form_9_ ._form_full_field { display:block; width:100%; margin-bottom:10px; }
 #_form_9_ input[type="text"]._has_error,#_form_9_ textarea._has_error { border:#f37c7b 1px solid; }
 #_form_9_ input[type="checkbox"]._has_error { outline:#f37c7b 1px solid; }
 #_form_9_ ._error { display:block; position:absolute; font-size:14px; z-index:10000001; }
 #_form_9_ ._error._above { padding-bottom:4px; bottom:39px; right:0; }
 #_form_9_ ._error._below { padding-top:4px; top:100%; right:0; }
 #_form_9_ ._error._above ._error-arrow { bottom:0; right:15px; border-left:5px solid transparent; border-right:5px solid transparent; border-top:5px solid #f37c7b; }
 #_form_9_ ._error._below ._error-arrow { top:0; right:15px; border-left:5px solid transparent; border-right:5px solid transparent; border-bottom:5px solid #f37c7b; }
 #_form_9_ ._error-inner { padding:8px 12px; background-color:#f37c7b; font-size:14px; font-family:arial, sans-serif; color:#fff; text-align:center; text-decoration:none; -webkit-border-radius:4px; -moz-border-radius:4px; border-radius:4px; }
 #_form_9_ ._error-inner._form_error { margin-bottom:5px; text-align:left; }
 #_form_9_ ._button-wrapper ._error-inner._form_error { position:static; }
 #_form_9_ ._error-inner._no_arrow { margin-bottom:10px; }
 #_form_9_ ._error-arrow { position:absolute; width:0; height:0; }
 #_form_9_ ._error-html { margin-bottom:10px; }
 .pika-single { z-index:10000001 !important; }
 #_form_9_ input[type="text"].datetime_date { width:69%; display:inline; }
 #_form_9_ select.datetime_time { width:29%; display:inline; height:32px; }
 @media all and (min-width:320px) and (max-width:667px) { ::-webkit-scrollbar { display:none; }
 #_form_9_ { margin:0; width:100%; min-width:100%; max-width:100%; box-sizing:border-box; }
 #_form_9_ * { -webkit-box-sizing:border-box; -moz-box-sizing:border-box; box-sizing:border-box; font-size:1em; }
 #_form_9_ ._form-content { margin:0; width:100%; }
 #_form_9_ ._form-inner { display:block; min-width:100%; }
 #_form_9_ ._form-title,#_form_9_ ._inline-style { margin-top:0; margin-right:0; margin-left:0; }
 #_form_9_ ._form-title { font-size:1.2em; }
 #_form_9_ ._form_element { margin:0 0 20px; padding:0; width:100%; }
 #_form_9_ ._form-element,#_form_9_ ._inline-style,#_form_9_ input[type="text"],#_form_9_ label,#_form_9_ p,#_form_9_ textarea:not(.g-recaptcha-response) { float:none; display:block; width:100%; }
 #_form_9_ ._row._checkbox-radio label { display:inline; }
 #_form_9_ ._row,#_form_9_ p,#_form_9_ label { margin-bottom:0.7em; width:100%; }
 #_form_9_ ._row input[type="checkbox"],#_form_9_ ._row input[type="radio"] { margin:0 !important; vertical-align:middle !important; }
 #_form_9_ ._row input[type="checkbox"] + span label { display:inline; }
 #_form_9_ ._row span label { margin:0 !important; width:initial !important; vertical-align:middle !important; }
 #_form_9_ ._form-image { max-width:100%; height:auto !important; }
 #_form_9_ input[type="text"] { padding-left:10px; padding-right:10px; font-size:16px; line-height:1.3em; -webkit-appearance:none; }
 #_form_9_ input[type="radio"],#_form_9_ input[type="checkbox"] { display:inline-block; width:1.3em; height:1.3em; font-size:1em; margin:0 0.3em 0 0; vertical-align:baseline; }
 #_form_9_ button[type="submit"] { padding:20px; font-size:1.5em; }
 #_form_9_ ._inline-style { margin:20px 0 0 !important; }
 }
 #_form_9_ { position:relative; text-align:left; margin:25px auto 0; padding:20px; -webkit-box-sizing:border-box; -moz-box-sizing:border-box; box-sizing:border-box; *zoom:1; background:transparent !important; border:0px solid #b0b0b0 !important; width:500px; -moz-border-radius:0px !important; -webkit-border-radius:0px !important; border-radius:0px !important; color:#000 !important; }
 #_form_9_._inline-form,#_form_9_._inline-form ._form-content,#_form_9_._inline-form input,#_form_9_._inline-form ._submit { font-family:"IBM Plex Sans", Helvetica, sans-serif, 'IBM Plex Sans', arial, sans-serif; }
 #_form_9_ ._form-title { font-size:22px; line-height:22px; font-weight:600; margin-bottom:0; }
 #_form_9_:before,#_form_9_:after { content:" "; display:table; }
 #_form_9_:after { clear:both; }
 #_form_9_._inline-style { width:auto; display:inline-block; }
 #_form_9_._inline-style input[type="text"],#_form_9_._inline-style input[type="date"] { padding:10px 12px; }
 #_form_9_._inline-style button._inline-style { position:relative; top:27px; }
 #_form_9_._inline-style p { margin:0; }
 #_form_9_._inline-style ._button-wrapper { position:relative; margin:27px 12.5px 0 20px; }
 #_form_9_ ._form-thank-you { position:relative; left:0; right:0; text-align:center; font-size:18px; }
 @media all and (min-width:320px) and (max-width:667px) { #_form_9_._inline-form._inline-style ._inline-style._button-wrapper { margin-top:20px !important; margin-left:0 !important; }
 }

</style>
<link href="https://fonts.googleapis.com/css2?family=Lato&family=Montserrat&family=Roboto&display=swap" rel="stylesheet">
  <form method="post" action="https://chefincamicia.activehosted.com/proc.php" id="_form_9_" class="_form _form_9 _inline-form  _dark" name="form" enctype="multipart/form-data" novalidate>
    <input type="hidden" name="u" value="9" />
    <input type="hidden" name="f" value="9" />
    <input type="hidden" name="s" />
    <input type="hidden" name="c" value="0" />
    <input type="hidden" name="m" value="0" />
    <input type="hidden" name="act" value="sub" />
    <input type="hidden" name="v" value="2" />
    <div class="_form-content">
      <div class="_form_element _x42005758 _full_width _clear" >
        <div class="_form-title">
          Inserisci
        </div>
      </div>
      <div class="_form_element _x41037402 _full_width " >
        <label for="email" class="_form-label">
          Email*
        </label>
        <div class="_field-wrapper">
          <input type="text" id="email" name="email" placeholder="" required/>
        </div>
      </div>
      <div class="_form_element _x33123900 _full_width " >
        <label for="phone" class="_form-label">
          Numero di cellulare
        </label>
        <div class="_field-wrapper">
          <input type="text" id="phone" name="phone" placeholder="" />
        </div>
      </div>

      <div class="_button-wrapper _full_width">

        <div id="button" onclick="$('#myInput').click();$('#button').remove();$('.submit-hide').css('display', 'none');$('.submit-show').css('display', 'block');"><button id="_form_9_submit" class="_submit submit-hide" type="submit" >
            Seleziona File
        </button></div>
        <button id="_form_9_submit" onclick="$('#uploadfile').click();" class="_submit submit-show" name="submit" type="submit" style="display: none;">
            Carica File
        </button>
      </div>
      <div class="_clear-element">
      </div>
    </div>
    <div class="_form-thank-you" style="display:none;">
    </div>
    <div class="_form-branding">
      <div class="_marketing-by">
        Marketing by
      </div>
      <a href="https://www.activecampaign.com/?utm_medium=referral&utm_campaign=acforms" class="_logo">
        <span class="form-sr-only">
          ActiveCampaign
        </span>
      </a>
    </div>
  </form><script type="text/javascript">
window.cfields = [];
window._show_thank_you = function(id, message, trackcmp_url, email) {
  var form = document.getElementById('_form_' + id + '_'), thank_you = form.querySelector('._form-thank-you');
  form.querySelector('._form-content').style.display = 'none';
  thank_you.innerHTML = message;
  thank_you.style.display = 'block';
  const vgoAlias = typeof visitorGlobalObjectAlias === 'undefined' ? 'vgo' : visitorGlobalObjectAlias;
  var visitorObject = window[vgoAlias];
  if (email && typeof visitorObject !== 'undefined') {
    visitorObject('setEmail', email);
    visitorObject('update');
  } else if (typeof(trackcmp_url) != 'undefined' && trackcmp_url) {
    // Site tracking URL to use after inline form submission.
    _load_script(trackcmp_url);
  }
  if (typeof window._form_callback !== 'undefined') window._form_callback(id);
};
window._show_error = function(id, message, html) {
  var form = document.getElementById('_form_' + id + '_'), err = document.createElement('div'), button = form.querySelector('button'), old_error = form.querySelector('._form_error');
  if (old_error) old_error.parentNode.removeChild(old_error);
  err.innerHTML = message;
  err.className = '_error-inner _form_error _no_arrow';
  var wrapper = document.createElement('div');
  wrapper.className = '_form-inner';
  wrapper.appendChild(err);
  button.parentNode.insertBefore(wrapper, button);
  document.querySelector('[id^="_form"][id$="_submit"]').disabled = false;
  if (html) {
    var div = document.createElement('div');
    div.className = '_error-html';
    div.innerHTML = html;
    err.appendChild(div);
  }
};
window._load_script = function(url, callback) {
  var head = document.querySelector('head'), script = document.createElement('script'), r = false;
  script.type = 'text/javascript';
  script.charset = 'utf-8';
  script.src = url;
  if (callback) {
    script.onload = script.onreadystatechange = function() {
      if (!r && (!this.readyState || this.readyState == 'complete')) {
        r = true;
        callback();
      }
    };
  }
  head.appendChild(script);
};
(function() {
  if (window.location.search.search("excludeform") !== -1) return false;
  var getCookie = function(name) {
    var match = document.cookie.match(new RegExp('(^|; )' + name + '=([^;]+)'));
    return match ? match[2] : null;
  }
  var setCookie = function(name, value) {
    var now = new Date();
    var time = now.getTime();
    var expireTime = time + 1000 * 60 * 60 * 24 * 365;
    now.setTime(expireTime);
    document.cookie = name + '=' + value + '; expires=' + now + ';path=/';
  }
      var addEvent = function(element, event, func) {
    if (element.addEventListener) {
      element.addEventListener(event, func);
    } else {
      var oldFunc = element['on' + event];
      element['on' + event] = function() {
        oldFunc.apply(this, arguments);
        func.apply(this, arguments);
      };
    }
  }
  var _removed = false;
  var form_to_submit = document.getElementById('_form_9_');
  var allInputs = form_to_submit.querySelectorAll('input, select, textarea'), tooltips = [], submitted = false;

  var getUrlParam = function(name) {
    var regexStr = '[\?&]' + name + '=([^&#]*)';
    var results = new RegExp(regexStr, 'i').exec(window.location.href);
    return results != undefined ? decodeURIComponent(results[1]) : false;
  };

  for (var i = 0; i < allInputs.length; i++) {
    var regexStr = "field\\[(\\d+)\\]";
    var results = new RegExp(regexStr).exec(allInputs[i].name);
    if (results != undefined) {
      allInputs[i].dataset.name = window.cfields[results[1]];
    } else {
      allInputs[i].dataset.name = allInputs[i].name;
    }
    var fieldVal = getUrlParam(allInputs[i].dataset.name);

    if (fieldVal) {
      if (allInputs[i].dataset.autofill === "false") {
        continue;
      }
      if (allInputs[i].type == "radio" || allInputs[i].type == "checkbox") {
        if (allInputs[i].value == fieldVal) {
          allInputs[i].checked = true;
        }
      } else {
        allInputs[i].value = fieldVal;
      }
    }
  }

  var remove_tooltips = function() {
    for (var i = 0; i < tooltips.length; i++) {
      tooltips[i].tip.parentNode.removeChild(tooltips[i].tip);
    }
    tooltips = [];
  };
  var remove_tooltip = function(elem) {
    for (var i = 0; i < tooltips.length; i++) {
      if (tooltips[i].elem === elem) {
        tooltips[i].tip.parentNode.removeChild(tooltips[i].tip);
        tooltips.splice(i, 1);
        return;
      }
    }
  };
  var create_tooltip = function(elem, text) {
    var tooltip = document.createElement('div'), arrow = document.createElement('div'), inner = document.createElement('div'), new_tooltip = {};
    if (elem.type != 'radio' && elem.type != 'checkbox') {
      tooltip.className = '_error';
      arrow.className = '_error-arrow';
      inner.className = '_error-inner';
      inner.innerHTML = text;
      tooltip.appendChild(arrow);
      tooltip.appendChild(inner);
      elem.parentNode.appendChild(tooltip);
    } else {
      tooltip.className = '_error-inner _no_arrow';
      tooltip.innerHTML = text;
      elem.parentNode.insertBefore(tooltip, elem);
      new_tooltip.no_arrow = true;
    }
    new_tooltip.tip = tooltip;
    new_tooltip.elem = elem;
    tooltips.push(new_tooltip);
    return new_tooltip;
  };
  var resize_tooltip = function(tooltip) {
    var rect = tooltip.elem.getBoundingClientRect();
    var doc = document.documentElement, scrollPosition = rect.top - ((window.pageYOffset || doc.scrollTop)  - (doc.clientTop || 0));
    if (scrollPosition < 40) {
      tooltip.tip.className = tooltip.tip.className.replace(/ ?(_above|_below) ?/g, '') + ' _below';
    } else {
      tooltip.tip.className = tooltip.tip.className.replace(/ ?(_above|_below) ?/g, '') + ' _above';
    }
  };
  var resize_tooltips = function() {
    if (_removed) return;
    for (var i = 0; i < tooltips.length; i++) {
      if (!tooltips[i].no_arrow) resize_tooltip(tooltips[i]);
    }
  };
  var validate_field = function(elem, remove) {
    var tooltip = null, value = elem.value, no_error = true;
    remove ? remove_tooltip(elem) : false;
    if (elem.type != 'checkbox') elem.className = elem.className.replace(/ ?_has_error ?/g, '');
    if (elem.getAttribute('required') !== null) {
      if (elem.type == 'radio' || (elem.type == 'checkbox' && /any/.test(elem.className))) {
        var elems = form_to_submit.elements[elem.name];
        if (!(elems instanceof NodeList || elems instanceof HTMLCollection) || elems.length <= 1) {
          no_error = elem.checked;
        }
        else {
          no_error = false;
          for (var i = 0; i < elems.length; i++) {
            if (elems[i].checked) no_error = true;
          }
        }
        if (!no_error) {
          tooltip = create_tooltip(elem, "Please select an option.");
        }
      } else if (elem.type =='checkbox') {
        var elems = form_to_submit.elements[elem.name], found = false, err = [];
        no_error = true;
        for (var i = 0; i < elems.length; i++) {
          if (elems[i].getAttribute('required') === null) continue;
          if (!found && elems[i] !== elem) return true;
          found = true;
          elems[i].className = elems[i].className.replace(/ ?_has_error ?/g, '');
          if (!elems[i].checked) {
            no_error = false;
            elems[i].className = elems[i].className + ' _has_error';
            err.push("Checking %s is required".replace("%s", elems[i].value));
          }
        }
        if (!no_error) {
          tooltip = create_tooltip(elem, err.join('<br/>'));
        }
      } else if (elem.tagName == 'SELECT') {
        var selected = true;
        if (elem.multiple) {
          selected = false;
          for (var i = 0; i < elem.options.length; i++) {
            if (elem.options[i].selected) {
              selected = true;
              break;
            }
          }
        } else {
          for (var i = 0; i < elem.options.length; i++) {
            if (elem.options[i].selected && !elem.options[i].value) {
              selected = false;
            }
          }
        }
        if (!selected) {
          elem.className = elem.className + ' _has_error';
          no_error = false;
          tooltip = create_tooltip(elem, "Please select an option.");
        }
      } else if (value === undefined || value === null || value === '') {
        elem.className = elem.className + ' _has_error';
        no_error = false;
        tooltip = create_tooltip(elem, "This field is required.");
      }
    }
    if (no_error && elem.name == 'email') {
      if (!value.match(/^[\+_a-z0-9-'&=]+(\.[\+_a-z0-9-']+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i)) {
        elem.className = elem.className + ' _has_error';
        no_error = false;
        tooltip = create_tooltip(elem, "Enter a valid email address.");
      }
    }
    if (no_error && /date_field/.test(elem.className)) {
      if (!value.match(/^\d\d\d\d-\d\d-\d\d$/)) {
        elem.className = elem.className + ' _has_error';
        no_error = false;
        tooltip = create_tooltip(elem, "Enter a valid date.");
      }
    }
    tooltip ? resize_tooltip(tooltip) : false;
    return no_error;
  };
  var needs_validate = function(el) {
        if(el.getAttribute('required') !== null){
            return true
        }
        if(el.name === 'email' && el.value !== ""){
            return true
        }
        return false
  };
  var validate_form = function(e) {
    var err = form_to_submit.querySelector('._form_error'), no_error = true;
    if (!submitted) {
      submitted = true;
      for (var i = 0, len = allInputs.length; i < len; i++) {
        var input = allInputs[i];
        if (needs_validate(input)) {
          if (input.type == 'text') {
            addEvent(input, 'blur', function() {
              this.value = this.value.trim();
              validate_field(this, true);
            });
            addEvent(input, 'input', function() {
              validate_field(this, true);
            });
          } else if (input.type == 'radio' || input.type == 'checkbox') {
            (function(el) {
              var radios = form_to_submit.elements[el.name];
              for (var i = 0; i < radios.length; i++) {
                addEvent(radios[i], 'click', function() {
                  validate_field(el, true);
                });
              }
            })(input);
          } else if (input.tagName == 'SELECT') {
            addEvent(input, 'change', function() {
              validate_field(this, true);
            });
          } else if (input.type == 'textarea'){
            addEvent(input, 'input', function() {
              validate_field(this, true);
            });
          }
        }
      }
    }
    remove_tooltips();
    for (var i = 0, len = allInputs.length; i < len; i++) {
      var elem = allInputs[i];
      if (needs_validate(elem)) {
        if (elem.tagName.toLowerCase() !== "select") {
          elem.value = elem.value.trim();
        }
        validate_field(elem) ? true : no_error = false;
      }
    }
    if (!no_error && e) {
      e.preventDefault();
    }
    resize_tooltips();
    return no_error;
  };
  addEvent(window, 'resize', resize_tooltips);
  addEvent(window, 'scroll', resize_tooltips);
  window._old_serialize = null;
  if (typeof serialize !== 'undefined') window._old_serialize = window.serialize;
  _load_script("//d3rxaij56vjege.cloudfront.net/form-serialize/0.3/serialize.min.js", function() {
    window._form_serialize = window.serialize;
    if (window._old_serialize) window.serialize = window._old_serialize;
  });
  var form_submit = function(e) {
    e.preventDefault();
    if (validate_form()) {
      // use this trick to get the submit button & disable it using plain javascript
      document.querySelector('#_form_9_submit').disabled = true;
            var serialized = _form_serialize(document.getElementById('_form_9_'));
      var err = form_to_submit.querySelector('._form_error');
      err ? err.parentNode.removeChild(err) : false;
      _load_script('https://chefincamicia.activehosted.com/proc.php?' + serialized + '&jsonp=true');
    }
    return false;
  };
  addEvent(form_to_submit, 'submit', form_submit);
})();

</script>
      </div>
    </div>
    <div class="row">
        <div class="col-md-12 d-flex justify-content-center">
            <div class="checkbox">
                <div class="row">
                    <div class="col-md-1"><input type="checkbox" class="checkbox-style"></div>
                    <div class="col-md-11"><p>Informativa trattamento dei dati personali Ai sensi dell'art. 6 del Reg. 
                EU/2016/679 esprimo il consenso al trattamento dei dati conferiti</p></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
       <div class="col-md-12 text-center">
          <img class="upload" src="<?php echo get_template_directory_uri().'/assets/upload.png'; ?>" alt="">
       </div>
    </div>
    <div class="row">
        <div class="format-text col-md-12 text-center">
            <p>(formato .zip o .rar, dim. max 150mb) </p>
        </div>
    </div>
  </div>
</section>
<!-- <section id="errors">
   <div class="container justify-content-center">
       <div class="row">
           <div class="col-md-8"></div>
           <div class="col-md-4">
           <div class="graybox details">

          <div class="row">
                <div class="col-sm-2">
            <img class="cross" src="<?php echo get_template_directory_uri().'/assets/cross.png'; ?>" alt="">
            <img class="check" src="<?php echo get_template_directory_uri().'/assets/check.png'; ?>" alt="">
            
                </div>
                <div class="col-sm-10">
                <p>Non hai inserito tutti i dati richiesti! <br>
                Verifica di averli inseriti correttamente.</p>
                </div>
            </div>
           </div>
       </div>
       <div class="row">
           <div class="col-md-4">
           <div class="graybox details">
          <div class="row">
                <div class="col-sm-2">
            <img class="cross" src="<?php echo get_template_directory_uri().'/assets/cross.png'; ?>" alt="">
            <img class="check" src="<?php echo get_template_directory_uri().'/assets/check.png'; ?>" alt="">
            
                </div>
                <div class="col-sm-10">
                <p>Non hai inserito tutti i dati richiesti! <br>
                Verifica di averli inseriti correttamente.</p>
                </div>
            </div>
       </div>
           </div>
           <div class="col-md-4">
           <div class="graybox details">
          <div class="row">
                <div class="col-sm-2">
            <img class="cross" src="<?php echo get_template_directory_uri().'/assets/cross.png'; ?>" alt="">
            <img class="check" src="<?php echo get_template_directory_uri().'/assets/check.png'; ?>" alt="">
            
                </div>
                <div class="col-sm-10">
                <p>Non hai inserito tutti i dati richiesti! <br>
                Verifica di averli inseriti correttamente.</p>
                </div>
            </div>
       </div>
           </div>
           <div class="col-md-4">
           <div class="graybox details">
          <div class="row">
                <div class="col-sm-2">
            <img class="cross" src="<?php echo get_template_directory_uri().'/assets/cross.png'; ?>" alt="">
            <img class="check" src="<?php echo get_template_directory_uri().'/assets/check.png'; ?>" alt="">
            
                </div>
                <div class="col-sm-10">
                <p>Non hai inserito tutti i dati richiesti! <br>
                Verifica di averli inseriti correttamente.</p>
                </div>
            </div>
       </div>
           </div>
       </div>
   </div>
</section> -->

<section id="sponsors">
    <div class="container">
       <div class="item row">
          <div class="col-md-1"></div>
          <div class="col-md-3">
             <img class="sponsor-image" src="<?php echo get_template_directory_uri().'/assets/academia.png'; ?>" alt="">
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-6">
              <p>La prima piattaforma italiana di e-learning dedicata interamente al mondo della cucina. Lasciati guidare da maestri del calibro di Iginio Massari o Norbert Niederkofler, frequenta i loro corsi dove e quando vuoi, supera i test e ricevi il certificato firmato dal maestro stesso.</p>
              <nav class="links">
                  <a href="#"><img src="<?php echo get_template_directory_uri().'/assets/facebook.png'; ?>" alt=""></a>
                  <a href="#"><img src="<?php echo get_template_directory_uri().'/assets/insta.png'; ?>" alt=""></a>
                  <a href="#"><img src="<?php echo get_template_directory_uri().'/assets/www.png'; ?>" alt=""></a>
              </nav>
          </div>
          <div class="col-md-1"></div>
       </div>
       <div class="item row">
          <div class="col-md-1"></div>
          <div class="col-md-3">
             <img class="sponsor-image" src="<?php echo get_template_directory_uri().'/assets/cares.png'; ?>" alt="">
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-6">
              <p>Un progetto ideato da uno chef per gli chef, che riunisce aziende e professionisti enogastronomici con lo stesso obiettivo: prendersi cura dell'ambiente, delle comunità locali e del ritmo della natura, promuovendo un approccio alla cucina etico e sostenibile.</p>
              <nav class="links">
                  <a href="#"><img src="<?php echo get_template_directory_uri().'/assets/facebook.png'; ?>" alt=""></a>
                  <a href="#"><img src="<?php echo get_template_directory_uri().'/assets/insta.png'; ?>" alt=""></a>
                  <a href="#"><img src="<?php echo get_template_directory_uri().'/assets/www.png'; ?>" alt=""></a>
              </nav>
          </div>
          <div class="col-md-1"></div>
       </div>
       <div class="item row">
          <div class="col-md-1"></div>
          <div class="col-md-3">
             <img class="sponsor-image" src="<?php echo get_template_directory_uri().'/assets/monograno.png'; ?>" alt="">
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-6">
              <p>La linea top di gamma del Pastificio Felicetti, nata con l’obiettivo di coniugare materie prime biologiche d’eccellenza – pregiate varietà di grano, acqua di sorgente e aria delle Dolomiti – e le esigenze di tutti i professionisti del settore ristorazione o dei cultori del buon cibo, sensibili ai temi di etica ambientale.</p>
              <nav class="links">
                  <a href="#"><img src="<?php echo get_template_directory_uri().'/assets/facebook.png'; ?>" alt=""></a>
                  <a href="#"><img src="<?php echo get_template_directory_uri().'/assets/insta.png'; ?>" alt=""></a>
                  <a href="#"><img src="<?php echo get_template_directory_uri().'/assets/www.png'; ?>" alt=""></a>
              </nav>
          </div>
          <div class="col-md-1"></div>
       </div>
    </div>
</section>
<section id="footer">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-3"></div>
            <div class="col-md-6 text-center">
                <p>Iscriviti sui canali social di Acadèmia, CARE’s - The ethical Chef Days e Felicetti e rimani aggiornato sull’evento!</p>
            </div>
            <div class="col-md-3"></div>
            <div class="center">
                <a href="#" class="button">Convidi</a>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-md-6">
                <p class="bottom">Condividi la nostra iniziativa con i tuoi amici!
               Non pensarci due volte, il rispetto per il pianeta ha fretta.</p>
            </div>
        </div>
    </div>
</section>