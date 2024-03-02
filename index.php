<?php
require "vendor/autoload.php";
session_start();

$uzivatele = 	["admin" => "admin"];

$chyba = null;

if (array_key_exists("prihlasit", $_POST)) {
	$jmeno = $_POST["uzivatel"];
	$heslo = $_POST["heslo"];

	$uzivatelExistuje = array_key_exists($jmeno, $uzivatele);

	if ($uzivatelExistuje && $uzivatele[$jmeno] == $heslo) {
		$_SESSION["prihlasenyUzivatel"] = $jmeno;
		header("Location: ?");
	} else {
		$chyba = "Nesprávné přihlašovací údaje";
	}
}

if (array_key_exists("odhlasit", $_POST)) {
	unset($_SESSION["prihlasenyUzivatel"]);
	header("Location: ?");
}

if (array_key_exists("smazat", $_POST)) {

	$db = new PDO(
		"mysql:host=localhost;dbname=recenze;charset=utf8mb4",
		"root",
		"",
		array(
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		)
	);

	$id = $_POST["id"];

	$dotaz = $db->prepare("DELETE FROM rate WHERE id=?");
	$dotaz->execute([$id]);

	header("Location: ?");
}
?>
<!DOCTYPE html>
<html lang="cz">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>LeštiTO - auto detailing Havlíčkův Brod</title>
	<link rel="icon" type="image/x-icon" href="img/waxing.png">

	<link rel="stylesheet" href="css/style.css">

	<link href="fonts/fontawesome-free-6.5.1-web/css/all.css" rel="stylesheet">

	<script src="js/jquery.js"></script>

	<script src="js/jquery-ui-1.13.2/jquery-ui.js"></script>
	<link rel="stylesheet" href="js/jquery-ui-1.13.2/jquery-ui.css">

	<link rel="stylesheet" href="ratingsystem-master/ratingsystem-master/style.css">
</head>
<body id="body">
	<div class="blok1"></div>
	<div class="blok2" id="blok2"></div>


	<div class="grid">

		<div class="button" id="menubutton">
			<input id="menu-toggle" type="checkbox" />
			<label class='menu-button-container' for="menu-toggle">
				<div class='menu-button'></div>
			</label>
		</div>

		<div class="menu" id="menu2">
			<ul id="menu">
				<li>
					<div>Úvodní stránka</div>
				</li>
				<li>
					<div>O nás</div>
				</li>
				<li>
					<div>Nabízené služby</div>
				</li>
				<li>
					<div>Ukázky prací</div>
				</li>
				<li>
					<div>Recenze</div>
				</li>
				<li>
					<div>Kontakt</div>
				</li>
				<li>
					<div>Kontaktní formulář</div>
				</li>
			</ul>
		</div>

		<div class="wrapper">
			<div class="container">

				<section class="section1" id="section1">
					<div class="section11" id="section11">
						<div class="logo">
							<img src="img/logo.png" alt="lešti to">

							<?php
							if (array_key_exists("admin", $_GET) && array_key_exists("prihlasenyUzivatel", $_SESSION) == false) {
							?>
								<form method="post">
									Jméno: <input type="text" name="uzivatel">
									Heslo: <input type="password" name="heslo">
									<button name="prihlasit">Přihlásit</button>
								</form>
							<?php
								echo $chyba;
							} else if (array_key_exists("prihlasenyUzivatel", $_SESSION)) {
								echo "<div class='odhlasit'><div class='odhlasit2'>Jsi přihlášen jako: {$_SESSION["prihlasenyUzivatel"]}</div>";
							?>
								<form method="post">
									<button name="odhlasit">Odhlásit</button>
								</form>
						</div>
					<?php
							}
					?>

					<div class="site">
						<div class="instagram"><a href="https://www.instagram.com/lestito_car_detailing/" target="blank"><i class="fa-brands fa-instagram"></i> Sledujte naší tvorbu na instagramu</a></div>
					</div>
					</div>
			</div>
			</section>

			<section class="section2" id="section2">
				<div class="blok3">
					<div class="blok33"></div>
				</div>

				<div class="section22" id="section22">

					<div class="obsah" id="uvodobsah">

					</div>
					<div class="uvodtlacitka">
						<div class="uvodtlacitko1">
							<button id="uvodtlacitko1">Pokračovat</button>
						</div>

						<div class="uvodtlacitko2">
							<button id="uvodtlacitko2">Předchozí</button>
						</div>
					</div>


				</div>
				<div class="blok4"></div>

			</section>

			<section class="section3" id="section33">
				<div class="section33" id="section3">

					<div class="karta1">
						<div class="fotka1">
							<input type="checkbox" id="tlacitko1" class="tlacitko1input">

							<div class="tlacitko1">
								<label for="tlacitko1">
									<i class="fa-solid fa-angle-right"></i>
								</label>

								<h1>Renovace a leštění laků</h1>
							</div>

						</div>
					</div>
					<div class="kontent1" id="kontent1">
						<p>Leštění karoserie se provádí ve více krocích, které se odvíjí od několika faktorů. V tomto směru nezáleží jen na stáří a poškození laku, ale také na dané značce vozidla. Každý výrobce automobilu má jinou tvrdost laku, díky které je potřeba individuální a profesionální přístup. U nás se vždy snažíme z laku „vytáhnout“ nejvyšší možný lesk s důrazem na maximální šetrnost. K tomu nám slouží přesný měřič tloušťky laku, který používáme po celou dobu leštění karoserie. V případě zájmu se postaráme i o zádveří karoserie, ALU kola a lakované interiérové dekory.</p>

						<p>V případě zájmu o tuto službu si můžete vybrat z následujících variant:</p>

						<ul>
							<li><i class="fa-solid fa-angles-right"></i><b> Jednokrokové leštění laku</b> – rozzáří zašlý lak (odstraní pouze mikroškrábance a hologramy) -vhodné především pro zánovní a udržované laky.</li>
							<li><i class="fa-solid fa-angles-right"></i><b> Dvoukrokové leštění laku</b> – dodá laku hluboký lesk (odstraní mikroškrábance, hologramy a většinu hlubokých rýh v laku). </li>
							<li><i class="fa-solid fa-angles-right"></i><b> Tříkrokové leštění laku</b> – navrátí autu maximální možný lesk a sytost barev (odstraní veškeré škrábance, které nejsou až pod lakovou částí). </li>
						</ul>
					</div>

					<div class="karta1">
						<div class="fotka2">

							<input type="checkbox" id="tlacitko2" class="tlacitko1input">
							<div class="tlacitko2">
								<label for="tlacitko2">
									<i class="fa-solid fa-angle-right"></i>
								</label>

								<h1>Čištění interiérů</h1>

							</div>

						</div>
					</div>
					<div class="kontent2" id="kontent2">
						<p>Čištění interiérů provádíme jak po jednotlivých částech, tak jako celek, ve kterém je zahrnuto:</p>

						<ul>
							<li><i class="fa-solid fa-angles-right"></i> Vysátí interiéru, tepování sedaček, hloubkové čištění a impregnace kožených sedaček.</li>
							<li><i class="fa-solid fa-angles-right"></i> Parní čištění interiéru, čištění a impregnace plastových částí, čištění stropnic a skel.</li>
							<li><i class="fa-solid fa-angles-right"></i> Dezinfekce ozonem.</li>
						</ul>

						<p>Každý výrobce vozidla používá odlišné materiály pro výrobu interiérů. Na základě toho vybíráme vždy ty nejvhodnější a zároveň nejšetrnější chemické přípravky, díky kterým dokážeme navrátit použitým materiálům původní vzhled.</p>

					</div>

					<div class="karta1">
						<div class="fotka3">

							<input type="checkbox" id="tlacitko3" class="tlacitko1input">
							<div class="tlacitko3">
								<label for="tlacitko3">
									<i class="fa-solid fa-angle-right"></i>

								</label>

								<h1>Aplikace keramických ochran a vosků </h1>

							</div>

						</div>
					</div>
					<div class="kontent3" id="kontent3">
						<p>Ochrana laku je důležitá část, která bývá často podceňována. Neslouží jen pro zvýraznění lesku laku, ale také pro jeho ochranu například před chemikáliemi, UV zářením, nebo dokonce před poškrábáním. Další výhodou je bezesporu i to, že odpuzuje vodu i nečistoty, což značně usnadňuje mytí.</p>

						<p>Ochranné vosky:</p>

						<ul>
							<li><i class="fa-solid fa-angles-right"></i> Nejpopulárnější, nejrozšířenější a zároveň cenově dostupná ochrana karoserie.</li>
							<li><i class="fa-solid fa-angles-right"></i> Podtrhává lesk vozu.</li>
							<li><i class="fa-solid fa-angles-right"></i> Zakonzervuje lak, chrání před povětrnostními vlivy.</li>
							<li><i class="fa-solid fa-angles-right"></i> Dodá vozidlu hydrofobní vlastnosti (odpuzuje vodu) – usnadňuje mytí.</li>
							<li><i class="fa-solid fa-angles-right"></i> Výdrž při správné údržbě je v rozmezí 4-10 měsíců.</li>
							<li><i class="fa-solid fa-angles-right"></i> Cenově dostupné řešení.</li>
						</ul>

						<p>Keramické ochrany:</p>

						<ul>
							<li><i class="fa-solid fa-angles-right"></i> Nejlepší možné řešení ochrany laku, pokud na něj nechcete lepit ochranou PPF fólii.</li>
							<li><i class="fa-solid fa-angles-right"></i> Jedná se o tenkou, ale tvrdou vrstvu připomínající sklo.</li>
							<li><i class="fa-solid fa-angles-right"></i> Díky své tvrdosti lak snáze odolává proti tvorbě hologramů a drobných škrábanců.</li>
							<li><i class="fa-solid fa-angles-right"></i> Perfektní odvod vody a samočistící schopnosti dodávají mytí auta úplně jiný směr.</li>
							<li><i class="fa-solid fa-angles-right"></i> Zakonzervuje lak a chrání ho před kyselým a zásaditým deštěm, UV zářením a tak dále.</li>
							<li><i class="fa-solid fa-angles-right"></i> Dodá vozu perfektní a hluboký lesk.</li>
							<li><i class="fa-solid fa-angles-right"></i> Výdrž při správné údržbě je v rozmezí 1-5 let v závislosti na použité keramické ochraně.</li>
							<li><i class="fa-solid fa-angles-right"></i> Pro maximální využití všech vlastností doporučujeme provést strojní leštění laku.</li>
							<li><i class="fa-solid fa-angles-right"></i> Cenově dražší, ale nejodolnější varianta.</li>
						</ul>
					</div>

					<div class="karta1">
						<div class="fotka4">

							<input type="checkbox" id="tlacitko4" class="tlacitko1input">
							<div class="tlacitko4">
								<label for="tlacitko4">
									<i class="fa-solid fa-angle-right"></i>
								</label>

								<h1>Měření tloušťky laku</h1>

							</div>

						</div>
					</div>
					<div class="kontent4" id="kontent4">
					<p>Měření tloušťky laku bezesporu patří mezi nedílnou část při leštění karoserie. Každý výrobce má jinou tloušťku laku. Obvykle to však bývá kolem 90-110 mikronů. Na základě hodnot z celého auta je možné určit, zda je na autě původní, nebo opravovaný lak.</p>

					<p>Je nutné podotknout, že leštitelný je pouze bezbarvý lak, který je silný +- 40 mikronů. Běžným, tříkrokovým leštěním odebereme přibližně 5mikronů z celkové tloušťky Vašeho laku.</p>

					<ul>
						<li><i class="fa-solid fa-angles-right"></i> V případě zájmu můžeme provést pouze měření tloušťky laku (ideální jako předprodejní prohlídka). K této službě Vám dáme mimo jiné i protokol z měření.</li>
					</ul>
					</div>

					<div class="karta1">
						<div class="fotka5">

							<input type="checkbox" id="tlacitko5" class="tlacitko1input">
							<div class="tlacitko5">
								<label for="tlacitko5">
									<i class="fa-solid fa-angle-right"></i>
								</label>

								<h1>Příprava vozu na prodej</h1>

							</div>

						</div>
					</div>
					<div class="kontent5" id="kontent5">
						<p>Chystáte se prodat svůj vůz s co možná nejmenší finanční ztrátou? Leštění karoserie laku a vyčištění interiéru je jedna z nejdůležitějších bodů při prodeji. Na vozidle bude provedeno jednokrokové leštění laku a v interiéru bude provedeno čištění jen toho nejnutnějšího – tato služba je zaměřena především pro ty, kteří chtějí oživit lesk a uklidit / provonět interiér. Po domluvě je možné naměřit tloušťku laku a předat Vám protokol z měření, který ocení nejeden kupce. V případě zájmu je možné nafotit prodejní fotky vč. drobné porady ohledně textu do inzerátu.</p>
					</div>

					<!--
					<div class="karta1">
						<div class="fotka6">

							<input type="checkbox" id="tlacitko6" class="tlacitko1input">
							<div class="tlacitko6">
								<label for="tlacitko6">
									<i class="fa-solid fa-angle-right"></i>
								</label>
							</div>

						</div>
					</div>
					<div class="kontent6" id="kontent6">
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil voluptatibus dolorem reiciendis accusantium atque magnam aperiam est impedit molestiae, sequi vitae repudiandae, nulla minus fugiat facere animi unde consectetur, ipsum natus fugit ratione. Consequatur officia molestias quidem, laudantium consectetur vel molestiae, recusandae voluptate deserunt, quae similique accusamus eius? Itaque exercitationem quibusdam quam assumenda facilis corporis fuga a esse tenetur, voluptatibus libero minus expedita perspiciatis nostrum eos? Odio nostrum consectetur inventore est incidunt! At distinctio ipsam, dolores id dolorem minus odio beatae eum sit. Odit labore repellendus qui sint aspernatur dignissimos sapiente, earum obcaecati maiores eius laudantium iste unde nulla ipsa.</p>
					</div>
-->

				</div>
			</section>
		</div>

		<div class="section44">

			<div class="blok6"></div>
			<div class="section4">
				<div class="gallery">
					<div class="nadpisgallery">
						<h1>Ukázky prací</h1>
					</div>
					<div class="wrapper2">
						<div class="horizontal-snap">

							<?php
							$slozka = "img/galerie-img";
							$slozka2 = "img/galerie-odkaz";

							$soubory = scandir($slozka);
							$soubory2 = scandir($slozka2);

							foreach ($soubory as $index => $soubor) {
								if ($soubor[0] == ".") {
									continue;
								}
								if ($soubor[1] == "..") {
									continue;
								}

								$celacesta = "$slozka/$soubor";
								$celacesta2 = "$slozka2/{$soubory2[$index]}";

								$info = pathinfo($celacesta);

								if ($info["extension"] == "jpg" || $info["extension"] == "jpeg") {
									echo 	"<a href='$celacesta2'
							data-fslightbox='gallery'>
							<img src='$celacesta' draggable='false'
							alt='lešti to'>
							</a>";
								}
							}

							?>
						</div>
						<div class="sipky">
							<div class="left"><i id="left" class="fa-solid fa-angle-left"></i></div>
							<div class="right"><i id="right" class="right fa-solid fa-angle-right"></i></div>

						</div>
					</div>
				</div>
			</div>
			<div class="blok5"></div>

			<div class="section4" id="padding">
				<?php
				require("ratingsystem-master/ratingsystem-master/index.php")
				?>
			</div>

			<div class="section4" id="padding">
				<div class="mapa">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57106.60044442795!2d15.584266257123677!3d49.59899981944226!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470d0095c8596857%3A0xdfe8fd8510ec6cdb!2zSGF2bMOtxI1rxa92IEJyb2QsIDU4MCAwMSBIYXZsw63EjWvFr3YgQnJvZCAx!5e0!3m2!1sen!2scz!4v1707069414392!5m2!1sen!2scz" width="100%" height="300px" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
				<div class="kontakt">
					<table>
						<tr>
							<th><i class="fa-solid fa-envelope"></i> Email:</th>
							<td><a href="mailto: info@lestito.cz">Info@lestito.cz</a></td>
						</tr>
						<tr>
							<th><i class="fa-solid fa-phone"></i> Telefon:</th>
							<td><a href="tel:+420601106211">+420 601 106 211</a></td>
						</tr>
					</table>
				</div>
			</div>


			<div class="section4" id="padding">
				<?php
				require("kontaktni-formular.php")
				?>
			</div>

			<div class="blok7"></div>
		</div>



	</div>
	</div>

	<script src="js/gsap.js"></script>
	<script src="js/scrolltrigger.js"></script>
	<script src='js/fslightbox-basic-3.4.1/fslightbox.js'></script>
	<script src="ratingsystem-master/ratingsystem-master/main.js"></script>
	<script src="js/main.js"></script>
</body>

</html>