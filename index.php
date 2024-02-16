<?php
require "vendor/autoload.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<link rel="stylesheet" href="css/style.css">

	<link href="fonts/fontawesome-free-6.5.1-web/css/all.css" rel="stylesheet">

	<script src="js/jquery.js"></script>

	<script src="js/jquery-ui-1.13.2/jquery-ui.js"></script>
	<link rel="stylesheet" href="js/jquery-ui-1.13.2/jquery-ui.css">

	<link rel="stylesheet" href="./ratingsystem-master/ratingsystem-master/style.css">

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
					<div>header</div>
				</li>
				<li>
					<div>Úvod</div>
				</li>
				<li>
					<div>neco</div>
				</li>
				<li>
					<div>Galerie</div>
				</li>
				<li>
					<div>Kontakt</div>
				</li>
				<li>
					<div>Kde sídlíme</div>
				</li>
				<li>
					<div>Recenze</div>
				</li>
			</ul>
		</div>

		<div class="wrapper">
			<div class="container">



				<section class="section1" id="section1">
					<div class="section11" id="section11">
						<div class="logo">
							<img src="img/logo.png" alt="lešti to">

							<div class="site">
								<div class="instagram"><a href="https://www.instagram.com/lestito_car_detailing/" target="blank"><i class="fa-brands fa-instagram"></i> #LEŠTI TO - Car detailing</a></div>
							</div>
						</div>
					</div>
				</section>

				<section class="section2" id="section2">
					<div class="blok3">
						<div class="blok33"></div>
					</div>

					<div class="section22" id="section22">


						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil voluptatibus dolorem reiciendis accusantium atque magnam aperiam est impedit molestiae, sequi vitae repudiandae, nulla minus fugiat facere animi unde consectetur, ipsum natus fugit ratione. Consequatur officia molestias quidem, laudantium consectetur vel molestiae, recusandae voluptate deserunt, quae similique accusamus eius? Itaque exercitationem quibusdam quam assumenda</p>
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
								</div>

							</div>
						</div>
						<div class="kontent1" id="kontent1">
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil voluptatibus dolorem reiciendis accusantium atque magnam aperiam est impedit molestiae, sequi vitae repudiandae, nulla minus fugiat facere animi unde consectetur, ipsum natus fugit ratione. Consequatur officia molestias quidem, laudantium consectetur vel molestiae, recusandae voluptate deserunt, quae similique accusamus eius? Itaque exercitationem quibusdam quam assumenda facilis corporis fuga a esse tenetur, voluptatibus libero minus expedita perspiciatis nostrum eos? Odio nostrum consectetur inventore est incidunt! At distinctio ipsam, dolores id dolorem minus odio beatae eum sit. Odit labore repellendus qui sint aspernatur dignissimos sapiente, earum obcaecati maiores eius laudantium iste unde nulla ipsa.</p>
						</div>

						<div class="karta1">
							<div class="fotka2">

								<input type="checkbox" id="tlacitko2" class="tlacitko1input">
								<div class="tlacitko2">
									<label for="tlacitko2">
										<i class="fa-solid fa-angle-right"></i>
									</label>
								</div>

							</div>
						</div>
						<div class="kontent2" id="kontent2">
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil voluptatibus dolorem reiciendis accusantium atque magnam aperiam est impedit molestiae, sequi vitae repudiandae, nulla minus fugiat facere animi unde consectetur, ipsum natus fugit ratione. Consequatur officia molestias quidem, laudantium consectetur vel molestiae, recusandae voluptate deserunt, quae similique accusamus eius? Itaque exercitationem quibusdam quam assumenda facilis corporis fuga a esse tenetur, voluptatibus libero minus expedita perspiciatis nostrum eos? Odio nostrum consectetur inventore est incidunt! At distinctio ipsam, dolores id dolorem minus odio beatae eum sit. Odit labore repellendus qui sint aspernatur dignissimos sapiente, earum obcaecati maiores eius laudantium iste unde nulla ipsa.</p>
						</div>

						<div class="karta1">
							<div class="fotka3">

								<input type="checkbox" id="tlacitko3" class="tlacitko1input">
								<div class="tlacitko3">
									<label for="tlacitko3">
										<i class="fa-solid fa-angle-right"></i>
									</label>
								</div>

							</div>
						</div>
						<div class="kontent3" id="kontent3">
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil voluptatibus dolorem reiciendis accusantium atque magnam aperiam est impedit molestiae, sequi vitae repudiandae, nulla minus fugiat facere animi unde consectetur, ipsum natus fugit ratione. Consequatur officia molestias quidem, laudantium consectetur vel molestiae, recusandae voluptate deserunt, quae similique accusamus eius? Itaque exercitationem quibusdam quam assumenda facilis corporis fuga a esse tenetur, voluptatibus libero minus expedita perspiciatis nostrum eos? Odio nostrum consectetur inventore est incidunt! At distinctio ipsam, dolores id dolorem minus odio beatae eum sit. Odit labore repellendus qui sint aspernatur dignissimos sapiente, earum obcaecati maiores eius laudantium iste unde nulla ipsa.</p>
						</div>

						<div class="karta1">
							<div class="fotka4">

								<input type="checkbox" id="tlacitko4" class="tlacitko1input">
								<div class="tlacitko4">
									<label for="tlacitko4">
										<i class="fa-solid fa-angle-right"></i>
									</label>
								</div>

							</div>
						</div>
						<div class="kontent4" id="kontent4">
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil voluptatibus dolorem reiciendis accusantium atque magnam aperiam est impedit molestiae, sequi vitae repudiandae, nulla minus fugiat facere animi unde consectetur, ipsum natus fugit ratione. Consequatur officia molestias quidem, laudantium consectetur vel molestiae, recusandae voluptate deserunt, quae similique accusamus eius? Itaque exercitationem quibusdam quam assumenda facilis corporis fuga a esse tenetur, voluptatibus libero minus expedita perspiciatis nostrum eos? Odio nostrum consectetur inventore est incidunt! At distinctio ipsam, dolores id dolorem minus odio beatae eum sit. Odit labore repellendus qui sint aspernatur dignissimos sapiente, earum obcaecati maiores eius laudantium iste unde nulla ipsa.</p>
						</div>

						<div class="karta1">
							<div class="fotka5">

								<input type="checkbox" id="tlacitko5" class="tlacitko1input">
								<div class="tlacitko5">
									<label for="tlacitko5">
										<i class="fa-solid fa-angle-right"></i>
									</label>
								</div>

							</div>
						</div>
						<div class="kontent5" id="kontent5">
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil voluptatibus dolorem reiciendis accusantium atque magnam aperiam est impedit molestiae, sequi vitae repudiandae, nulla minus fugiat facere animi unde consectetur, ipsum natus fugit ratione. Consequatur officia molestias quidem, laudantium consectetur vel molestiae, recusandae voluptate deserunt, quae similique accusamus eius? Itaque exercitationem quibusdam quam assumenda facilis corporis fuga a esse tenetur, voluptatibus libero minus expedita perspiciatis nostrum eos? Odio nostrum consectetur inventore est incidunt! At distinctio ipsam, dolores id dolorem minus odio beatae eum sit. Odit labore repellendus qui sint aspernatur dignissimos sapiente, earum obcaecati maiores eius laudantium iste unde nulla ipsa.</p>
						</div>

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

					</div>
				</section>
			</div>

			<div class="section44">

				<div class="blok6"></div>
				<div class="section4">
					<div class="gallery">
						<div class="nadpisgallery">
							<h1>Gallery</h1>
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
					require("kontaktni-formular.php")
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
							<tr>
								<th><i class="fa-solid fa-map-location-dot"></i> Adresa:</th>
								<td>djfnskjff</td>
							</tr>
						</table>
					</div>
				</div>

				<div class="section4" id="padding">
					<?php
					require("./ratingsystem-master/ratingsystem-master/index.php")
					?>
				</div>

				<div class="blok7"></div>
			</div>



		</div>
	</div>

	<script src="js/gsap.js"></script>
	<script src="js/scrolltrigger.js"></script>

	<script src='js/fslightbox-basic-3.4.1/fslightbox.js'></script>

	<script src="./ratingsystem-master/ratingsystem-master/main.js"></script>

	<script>
		const container = document.querySelector(".container")
		const sections = gsap.utils.toArray(".container section")

		let scrollTween = gsap.to(sections, {
			xPercent: -100 * (sections.length - 1),
			ease: "none",
			scrollTrigger: {
				trigger: ".container",
				pin: true,
				scrub: 0,
				end: `+=2000`, //${offsetleft()}
				//snap: 1 / (sections.length - 1)
			}
		})

		console.log(scrollTween.scrollTrigger.end);

		//-----------------------------------------------------------------------------------------------------------------

		const horizontalsnap = document.querySelector(".horizontal-snap");
		const firstimg = document.querySelectorAll(".wrapper2 img")[0];
		const arrowicon = document.querySelectorAll(".wrapper2 i");

		let isdragstart = false,
			prevpagex, prevscrollleft, positiondiff;

		const showhideicons = () => {

			scrollwidth = Math.round(horizontalsnap.scrollWidth - horizontalsnap.clientWidth);

			scrollleftzaokrouhleno = Math.round(horizontalsnap.scrollLeft);

			let scrollwidth2 = scrollwidth + 1
			let scrollwidth3 = scrollwidth - 1

			arrowicon[0].style.display = horizontalsnap.scrollLeft == 0 ? "none" : "flex";

			if (scrollleftzaokrouhleno == scrollwidth) {
				arrowicon[1].style.display = scrollleftzaokrouhleno == scrollwidth ? "none" : "flex";
			} else if (scrollleftzaokrouhleno == scrollwidth2) {
				arrowicon[1].style.display = scrollleftzaokrouhleno == scrollwidth2 ? "none" : "flex";
			} else if (scrollleftzaokrouhleno == scrollwidth3) {
				arrowicon[1].style.display = scrollleftzaokrouhleno == scrollwidth3 ? "none" : "flex";
			} else {
				arrowicon[1].style.display = "flex";
			}
		}

		arrowicon.forEach(icon => {
			icon.addEventListener("click", () => {
				let firstimgwidth = firstimg.clientWidth + 20

				horizontalsnap.scrollLeft += icon.id == "left" ? -firstimgwidth : firstimgwidth
				setTimeout(() => {
					showhideicons();
				}, 60)
			})
		})

		horizontalsnap.addEventListener("mousemove", (udalost) => {

			if (!isdragstart) return;
			udalost.preventDefault();
			horizontalsnap.classList.add("dragging")
			positiondiff = udalost.pageX - prevpagex;
			horizontalsnap.scrollLeft = prevscrollleft - positiondiff;
			showhideicons();
		});

		horizontalsnap.addEventListener("mousedown", (udalost) => {
			prevpagex = udalost.pageX;
			prevscrollleft = horizontalsnap.scrollLeft
			isdragstart = true;
		})

		horizontalsnap.addEventListener("mouseup", (udalost) => {
			isdragstart = false;
			horizontalsnap.classList.remove("dragging")
		})

		horizontalsnap.addEventListener("mouseleave", (udalost) => {
			isdragstart = false;
			horizontalsnap.classList.remove("dragging")
		})

		//-----------------------------------------------------------------

		horizontalsnap.addEventListener("touchstart", (udalost) => {
			prevpagex = udalost.touches[0].pageX
			prevscrollleft = horizontalsnap.scrollLeft
			isdragstart = true;
		})

		horizontalsnap.addEventListener("touchmove", (udalost) => {
			if (!isdragstart) return;
			udalost.preventDefault();
			horizontalsnap.classList.add("dragging")
			let positiondiff = (udalost.touches[0].pageX) - prevpagex;
			horizontalsnap.scrollLeft = prevscrollleft - positiondiff;
			showhideicons();
		});

		horizontalsnap.addEventListener("touchend", (udalost) => {
			isdragstart = false;
			horizontalsnap.classList.remove("dragging")
		})

		//--------------------------------------------------------------------

		const menus = document.querySelectorAll("#menu li");

		const sections2 = gsap.utils.toArray(".section4")

		sectionspole = sections.concat(sections2);

		console.log(sectionspole)

		const delkapole = sections.length - 1;

		menus.forEach((menu, index) => {

			menu.addEventListener("click", (udalost) => {

				if (index <= delkapole) {

					procenta = (index / delkapole) * 100

					console.log(procenta);

					console.log(scrollTween.scrollTrigger.end);

					const jednoprocento = scrollTween.scrollTrigger.end / 100;

					const finalnicislo = procenta * jednoprocento;

					console.log(finalnicislo);

					window.scrollTo({
						left: 0,
						top: finalnicislo,
						behavior: "smooth",
					})
				} else {
					console.log(sectionspole[index].offsetTop)

					window.scrollTo({
						left: 0,
						top: sectionspole[index].offsetTop,
						behavior: "smooth",
					})
				}
			})
		})

		//--------------------------------------------------------

		const tlacitko = document.getElementById("menu-toggle");
		const menu = document.getElementById("menu2");

		tlacitko.addEventListener("change", (udalost) => {
			if (tlacitko.checked) {
				menu.classList.add("menucheck");
			} else {
				menu.className = "menu";
			}
		})

		//------------------------------------------------------------

		const tlacitko1 = document.getElementById("tlacitko1");
		const kontent1 = document.getElementById("kontent1");
		const tlacitko11 = document.querySelector(".tlacitko1 i")
		const section3 = document.getElementById("section33")

		section3.style.height = "min-content"

		const nevim = document.querySelectorAll(".kontent1 p")

		console.log(nevim);


		tlacitko1.addEventListener("change", (udalost) => {
			if (tlacitko1.checked) {
				kontent1.classList.add("kontent1check");
				tlacitko11.classList.add("tlacitko1check")
			} else {
				kontent1.className = "kontent1";
				tlacitko11.className = "fa-solid fa-angle-right"
			}
		})

		const tlacitko2 = document.getElementById("tlacitko2");
		const kontent2 = document.getElementById("kontent2");
		const tlacitko22 = document.querySelector(".tlacitko2 i")

		const nevim2 = document.querySelectorAll(".kontent2 p")

		console.log(nevim);


		tlacitko2.addEventListener("change", (udalost) => {
			if (tlacitko2.checked) {
				kontent2.classList.add("kontent2check");
				tlacitko22.classList.add("tlacitko2check")
			} else {
				kontent2.className = "kontent2";
				tlacitko22.className = "fa-solid fa-angle-right"
			}
		})

		const tlacitko3 = document.getElementById("tlacitko3");
		const kontent3 = document.getElementById("kontent3");
		const tlacitko33 = document.querySelector(".tlacitko3 i")

		const nevim3 = document.querySelectorAll(".kontent3 p")

		console.log(nevim);


		tlacitko3.addEventListener("change", (udalost) => {
			if (tlacitko3.checked) {
				kontent3.classList.add("kontent3check");
				tlacitko33.classList.add("tlacitko3check")
			} else {
				kontent3.className = "kontent3";
				tlacitko33.className = "fa-solid fa-angle-right"
			}
		})

		const tlacitko4 = document.getElementById("tlacitko4");
		const kontent44 = document.getElementById("kontent4");
		const tlacitko44 = document.querySelector(".tlacitko4 i")

		const nevim4 = document.querySelectorAll(".kontent4 p")

		console.log(nevim);


		tlacitko4.addEventListener("change", (udalost) => {
			if (tlacitko4.checked) {
				kontent4.classList.add("kontent4check");
				tlacitko44.classList.add("tlacitko4check")
			} else {
				kontent4.className = "kontent4";
				tlacitko44.className = "fa-solid fa-angle-right"
			}
		})

		const tlacitko5 = document.getElementById("tlacitko5");
		const kontent5 = document.getElementById("kontent5");
		const tlacitko55 = document.querySelector(".tlacitko5 i")

		const nevim5 = document.querySelectorAll(".kontent5 p")

		console.log(nevim);


		tlacitko5.addEventListener("change", (udalost) => {
			if (tlacitko5.checked) {
				kontent5.classList.add("kontent5check");
				tlacitko55.classList.add("tlacitko5check")
			} else {
				kontent5.className = "kontent5";
				tlacitko55.className = "fa-solid fa-angle-right"
			}
		})

		const tlacitko6 = document.getElementById("tlacitko6");
		const kontent6 = document.getElementById("kontent6");
		const tlacitko66 = document.querySelector(".tlacitko6 i")

		const nevim6 = document.querySelectorAll(".kontent6 p")

		console.log(nevim);


		tlacitko6.addEventListener("change", (udalost) => {
			if (tlacitko6.checked) {
				kontent6.classList.add("kontent6check");
				tlacitko66.classList.add("tlacitko6check")
			} else {
				kontent6.className = "kontent6";
				tlacitko66.className = "fa-solid fa-angle-right"
			}
		})

		//--------------------------------------------------------------

		const body = document.getElementById("body")

		let velikostbody = body.getBoundingClientRect();

		if (velikostbody.width <= 1700) {
			console.log(velikostbody.width);

			body.style.gridTemplateColumns = `${velikostbody.width}px`;
			body.style.gridTemplateAreas = "'grid'";
		} else {
			body.style.gridTemplateColumns = `1fr 1700px 1fr`
			body.style.gridTemplateAreas = "'blok1 grid blok2'"
		}

		window.addEventListener("resize", (udalost) => {
			velikostbody = body.getBoundingClientRect();

			if (velikostbody.width <= 1700) {
				console.log(velikostbody.width);

				body.style.gridTemplateColumns = `${velikostbody.width}px`;
				body.style.gridTemplateAreas = "'grid'";
			} else {
				body.style.gridTemplateColumns = `1fr 1700px 1fr`
				body.style.gridTemplateAreas = "'blok1 grid blok2'"
			}

		})

		//-----------------------------------------------------------------

		const blok2 = document.getElementById("blok2")
		const menu2 = document.getElementById("menubutton")
		const menu3 = document.getElementById("menu2")


		let blok2velikost = blok2.getBoundingClientRect();

		blok2velikost2 = blok2velikost.width + 20;

		menu2.style.top = `20px`
		menu2.style.right = `${blok2velikost2}px`
		menu3.style.right = `${blok2velikost.width}px`

		window.addEventListener("resize", (udalost) => {
			blok2velikost = blok2.getBoundingClientRect();

			blok2velikost2 = blok2velikost.width + 20;

			menu2.style.top = `20px`
			menu2.style.right = `${blok2velikost2}px`
			menu3.style.right = `${blok2velikost.width}px`
		})

		//----------------------------------------------------------

		const obrazky = ["fotka1.JPG", "fotka2.jpeg", "fotka3.jpg", "fotka4.JPG", "fotka5.jpg", "fotka6.JPG"]

		const section11 = document.getElementById("section11")

		console.log(obrazky[0])

		section11.style.backgroundImage = `url('img/uvodni-fotky/${obrazky[0]}')`;

		cislo = 0;
		setInterval((udalost) => {
			cislo++

			if (cislo == 1) {
				section11.className = "section11";
				section11.style.backgroundImage = `url('img/uvodni-fotky/${obrazky[1]}')`;
			} else if (cislo == 2) {
				section11.className = "section11";
				section11.style.backgroundImage = `url('img/uvodni-fotky/${obrazky[2]}')`;

			} else if (cislo == 3) {
				section11.className = "section11";
				section11.style.backgroundImage = `url('img/uvodni-fotky/${obrazky[3]}')`;

			} else if (cislo == 4) {
				section11.className = "section11";
				section11.style.backgroundImage = `url('img/uvodni-fotky/${obrazky[4]}')`;

			} else if (cislo == 5) {
				section11.className = "section11";
				section11.style.backgroundImage = `url('img/uvodni-fotky/${obrazky[5]}')`;

			} else if (cislo == 6) {
				section11.className = "section11";
				section11.style.backgroundImage = `url('img/uvodni-fotky/${obrazky[0]}')`;
				cislo = 0;
			}

		}, 6000)

		//-----------------------------------------------------------------------

		let container2 = document.getElementsByClassName("container")

		container2[0].style.overflow = "visible";

		let pinspacer = document.getElementsByClassName("pin-spacer")

		console.log(pinspacer)

		let kontent1velikost = 0;

		// create an Observer instance
		const resizeObserver = new ResizeObserver(entries => {
			console.log(entries[0].target.offsetHeight)

			if (entries[0].target.offsetHeight > 20) {
				let velikostsection3 = document.querySelectorAll("#section33")

				console.log(velikostsection3[0].offsetHeight)

				let vypocet = entries[0].target.offsetHeight + pinspacer[0].offsetHeight;

				console.log(vypocet)

				pinspacer[0].style.height = `${vypocet}px`;

				container2[0].style.height = `${velikostsection3[0].offsetHeight}px`;

				kontent1velikost = entries[0].target.offsetHeight;

				container2[0].style.overflow = "visible";

			} else if (entries[0].target.offsetHeight <= 20) {
				let velikostsection3 = document.querySelectorAll("#section33")

				console.log(velikostsection3[0].offsetHeight)

				let vypocet = pinspacer[0].offsetHeight - kontent1velikost;

				console.log(vypocet)

				pinspacer[0].style.height = `${vypocet}px`;

				container2[0].style.height = `${velikostsection3[0].offsetHeight}px`;

				container2[0].style.overflow = "visible";

			}
		})


		// start observing a DOM node
		resizeObserver.observe(document.getElementById("kontent1"))


		// create an Observer instance
		const resizeObserver2 = new ResizeObserver(entries => {
			console.log(entries[0].target.offsetHeight)

			if (entries[0].target.offsetHeight > 20) {
				let velikostsection3 = document.querySelectorAll("#section33")

				console.log(velikostsection3[0].offsetHeight)

				let vypocet = entries[0].target.offsetHeight + pinspacer[0].offsetHeight;

				console.log(vypocet)

				pinspacer[0].style.height = `${vypocet}px`;

				container2[0].style.height = `${velikostsection3[0].offsetHeight}px`;

				kontent1velikost = entries[0].target.offsetHeight;
			} else if (entries[0].target.offsetHeight <= 20) {
				let velikostsection3 = document.querySelectorAll("#section33")

				console.log(velikostsection3[0].offsetHeight)

				let vypocet = pinspacer[0].offsetHeight - kontent1velikost;

				console.log(vypocet)

				pinspacer[0].style.height = `${vypocet}px`;

				container2[0].style.height = `${velikostsection3[0].offsetHeight}px`;
			}
		})


		// start observing a DOM node
		resizeObserver2.observe(document.getElementById("kontent2"))


		// create an Observer instance
		const resizeObserver3 = new ResizeObserver(entries => {
			console.log(entries[0].target.offsetHeight)

			if (entries[0].target.offsetHeight > 20) {
				let velikostsection3 = document.querySelectorAll("#section33")

				console.log(velikostsection3[0].offsetHeight)

				let vypocet = entries[0].target.offsetHeight + pinspacer[0].offsetHeight;

				console.log(vypocet)

				pinspacer[0].style.height = `${vypocet}px`;

				container2[0].style.height = `${velikostsection3[0].offsetHeight}px`;

				kontent1velikost = entries[0].target.offsetHeight;
			} else if (entries[0].target.offsetHeight <= 20) {
				let velikostsection3 = document.querySelectorAll("#section33")

				console.log(velikostsection3[0].offsetHeight)

				let vypocet = pinspacer[0].offsetHeight - kontent1velikost;

				console.log(vypocet)

				pinspacer[0].style.height = `${vypocet}px`;

				container2[0].style.height = `${velikostsection3[0].offsetHeight}px`;
			}
		})


		// start observing a DOM node
		resizeObserver3.observe(document.getElementById("kontent3"))


		// create an Observer instance
		const resizeObserver4 = new ResizeObserver(entries => {
			console.log(entries[0].target.offsetHeight)

			if (entries[0].target.offsetHeight > 20) {
				let velikostsection3 = document.querySelectorAll("#section33")

				console.log(velikostsection3[0].offsetHeight)

				let vypocet = entries[0].target.offsetHeight + pinspacer[0].offsetHeight;

				console.log(vypocet)

				pinspacer[0].style.height = `${vypocet}px`;

				container2[0].style.height = `${velikostsection3[0].offsetHeight}px`;

				kontent1velikost = entries[0].target.offsetHeight;
			} else if (entries[0].target.offsetHeight <= 20) {
				let velikostsection3 = document.querySelectorAll("#section33")

				console.log(velikostsection3[0].offsetHeight)

				let vypocet = pinspacer[0].offsetHeight - kontent1velikost;

				console.log(vypocet)

				pinspacer[0].style.height = `${vypocet}px`;

				container2[0].style.height = `${velikostsection3[0].offsetHeight}px`;
			}
		})


		// start observing a DOM node
		resizeObserver4.observe(document.getElementById("kontent4"))


		// create an Observer instance
		const resizeObserver5 = new ResizeObserver(entries => {
			console.log(entries[0].target.offsetHeight)

			if (entries[0].target.offsetHeight > 20) {
				let velikostsection3 = document.querySelectorAll("#section33")

				console.log(velikostsection3[0].offsetHeight)

				let vypocet = entries[0].target.offsetHeight + pinspacer[0].offsetHeight;

				console.log(vypocet)

				pinspacer[0].style.height = `${vypocet}px`;

				container2[0].style.height = `${velikostsection3[0].offsetHeight}px`;

				kontent1velikost = entries[0].target.offsetHeight;
			} else if (entries[0].target.offsetHeight <= 20) {
				let velikostsection3 = document.querySelectorAll("#section33")

				console.log(velikostsection3[0].offsetHeight)

				let vypocet = pinspacer[0].offsetHeight - kontent1velikost;

				console.log(vypocet)

				pinspacer[0].style.height = `${vypocet}px`;

				container2[0].style.height = `${velikostsection3[0].offsetHeight}px`;
			}
		})


		// start observing a DOM node
		resizeObserver5.observe(document.getElementById("kontent5"))


		// create an Observer instance
		const resizeObserver6 = new ResizeObserver(entries => {
			console.log(entries[0].target.offsetHeight)

			if (entries[0].target.offsetHeight > 20) {
				let velikostsection3 = document.querySelectorAll("#section33")

				console.log(velikostsection3[0].offsetHeight)

				let vypocet = entries[0].target.offsetHeight + pinspacer[0].offsetHeight;

				console.log(vypocet)

				pinspacer[0].style.height = `${vypocet}px`;

				container2[0].style.height = `${velikostsection3[0].offsetHeight}px`;

				kontent1velikost = entries[0].target.offsetHeight;
			} else if (entries[0].target.offsetHeight <= 20) {
				let velikostsection3 = document.querySelectorAll("#section33")

				console.log(velikostsection3[0].offsetHeight)

				let vypocet = pinspacer[0].offsetHeight - kontent1velikost;

				console.log(vypocet)

				pinspacer[0].style.height = `${vypocet}px`;

				container2[0].style.height = `${velikostsection3[0].offsetHeight}px`;
			}
		})


		// start observing a DOM node
		resizeObserver6.observe(document.getElementById("kontent6"))
	</script>
</body>

</html>