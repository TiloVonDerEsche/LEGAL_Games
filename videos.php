<?php
include("header.php");
?>


<!--Die Variable html definiert die Threads im allgemeinen Html Format. Anschließend werde die spezifischen Daten des jeweiligen Threads aus Data.js entnommen und eingefügt(siehe Z.29, Z.31, Z.35, Z.38)
. Die Variablen dafür fangen mit einem $ Zeichen an.-->
<!----------------------------------------------------------
-					  Forum-Header
----------------------------------------------------------->

<link rel="stylesheet" href="src/stylesheets/forum.css">                 <!-- Externe CSS -->
<div class="top-bar">
    <h1>
        LEGAL_Ipsum
    </h1>
</div>

<!----------------------------------------------------------
-					    Experiments
----------------------------------------------------------->
<!- //<a href="src/docs/2026-08-13 Studienbescheinigung.pdf" download> ->

<div class="main">
Mängelliste:
 
Fehlende Raumheizlastberechnung.
Zertifikat bzw Beleg der Zertifizierung des Energieberaters.
Hydraulischer Abgleich fragwürdig oder unsachgemäß.
Falsch eingestellte Heizkennlinie.
Falsch eingestellte Mindestwassertemperatur.
Fehlende Entlüftung durch Fachfirma.
Fehlende Hinweis auf Gefahr durch defekten Heizkörper  (Mieter-Wohnzimmer)! Zudem haben zwei weitere abgebrochene Entlüfter.
Heizungsfilter eingebaut statt zweitem Schlammabscheider.
Elektrische Schutzanode fehlt im 250l- Behälter inklusive des 239V-Daueranschlusses!
Filterkartusche zum Wasser-Eunfüllen erforderlich. Füllstation fehlt. Die Anlage kann somit nicht befüllt werden!
Bei Entleerung Wasserhärte innerhalb der Anlage prüfen.
Ablaufhahn im 250l-Behälter fehlt.
Kein Rohrtrenner BA eingebaut.
Isolierung stellenweise mit unzulässigem Material (hellgrau) ausgeführt.
Kaminloch wurde nicht geschlossen.
Hinweis auf fehlenden Kaminabschluss-Stein nicht gegeben.
Nur ein Heizkreis vorhanden.
Thermostat Zeichenkeller unzulässigerweise abgebaut.
Drei Thermostate müssen noch getauscht werden (zwei davon sind sogar die einzigen zuvor als defekt angegebenen) und mindestens drei haben immer noch keine voreinstellbaren Ventile.
 
Zudem funktioniert der Zugang zum kfw-Portal meine kfw weiterhin nicht.

Перелік недоліків:

Відсутній розрахунок навантаження на опалення приміщень.
Сертифікат або підтвердження сертифікації енергетичного консультанта.
Гідравлічне регулювання є сумнівним або виконано неналежним чином.
Неправильно налаштована характеристична крива опалення.
Неправильно налаштована мінімальна температура води.
Відсутнє видалення повітря з системи, виконане спеціалізованою компанією.
Відсутнє попередження про небезпеку через несправний радіатор (вітальня орендаря)! Крім того, ще два радіатори мають відламані вентиляційні клапани.
Встановлено фільтр опалювальної системи замість другого сепаратора шламу.
У 250-літровому резервуарі відсутній електричний захисний анод, включаючи постійне підключення до мережі 239 В!
Для наповнення водою необхідний фільтрувальний картридж. Станція наповнення відсутня. Отже, систему неможливо наповнити!
Під час зливу води перевірити її жорсткість усередині системи.
У резервуарі об’ємом 250 л відсутній зливний кран.
Не встановлено трубний розділювач BA.
Ізоляція місцями виконана з недопустимого матеріалу (світло-сірого кольору).
Отвір для димоходу не закрито.
Не вказано на відсутність каменю для закриття димоходу.
Наявний лише один опалювальний контур.
Термостат у підвалі демонтовано з порушенням вимог.
Ще потрібно замінити три термостати (два з яких є єдиними, що раніше були зазначені як несправні), а щонайменше три досі не мають клапанів з можливістю попереднього налаштування.



    <?php
        //chdir(__DIR__ . '/src/bin');
        //$output = shell_exec('./generate_track_list.bin');
        //echo "<pre>$output</pre>";
        //$output = shell_exec('./3d_track_visualizer.bin');
        //echo "<pre>$output</pre>";
    ?>
</div>

<?php
include("footer.php");
?>
