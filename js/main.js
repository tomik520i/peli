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

//console.log(scrollTween.scrollTrigger.end);

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

//console.log(sectionspole)

const delkapole = sections.length - 1;

menus.forEach((menu, index) => {

	menu.addEventListener("click", (udalost) => {

		if (index <= delkapole) {

			procenta = (index / delkapole) * 100

			//console.log(procenta);

			//console.log(scrollTween.scrollTrigger.end);

			const jednoprocento = scrollTween.scrollTrigger.end / 100;

			const finalnicislo = procenta * jednoprocento;

			//console.log(finalnicislo);

			window.scrollTo({
				left: 0,
				top: finalnicislo,
				behavior: "smooth",
			})
		} else {
			//console.log(sectionspole[index].offsetTop)

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

//console.log(nevim);


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

//console.log(nevim);


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

//console.log(nevim);


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

//console.log(nevim);


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

//console.log(nevim);


tlacitko5.addEventListener("change", (udalost) => {
	if (tlacitko5.checked) {
		kontent5.classList.add("kontent5check");
		tlacitko55.classList.add("tlacitko5check")
	} else {
		kontent5.className = "kontent5";
		tlacitko55.className = "fa-solid fa-angle-right"
	}
})

//	const tlacitko6 = document.getElementById("tlacitko6");
//	const kontent6 = document.getElementById("kontent6");
//	const tlacitko66 = document.querySelector(".tlacitko6 i")
//	
//	const nevim6 = document.querySelectorAll(".kontent6 p")
//	
//	//console.log(nevim);
//	
//	
//	tlacitko6.addEventListener("change", (udalost) => {
//		if (tlacitko6.checked) {
//			kontent6.classList.add("kontent6check");
//			tlacitko66.classList.add("tlacitko6check")
//		} else {
//			kontent6.className = "kontent6";
//			tlacitko66.className = "fa-solid fa-angle-right"
//		}
//	})

//--------------------------------------------------------------

const body = document.getElementById("body")

let velikostbody = body.getBoundingClientRect();

if (velikostbody.width <= 1700) {
	//console.log(velikostbody.width);

	body.style.gridTemplateColumns = `${velikostbody.width}px`;
	body.style.gridTemplateAreas = "'grid'";
} else {
	body.style.gridTemplateColumns = `1fr 1700px 1fr`
	body.style.gridTemplateAreas = "'blok1 grid blok2'"
}

window.addEventListener("resize", (udalost) => {
	velikostbody = body.getBoundingClientRect();

	if (velikostbody.width <= 1700) {
		//console.log(velikostbody.width);

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

//console.log(obrazky[0])

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

//console.log(pinspacer)

let kontent1velikost = 0;

// create an Observer instance
const resizeObserver = new ResizeObserver(entries => {
	//console.log(entries[0].target.offsetHeight)

	if (entries[0].target.offsetHeight > 20) {
		let velikostsection3 = document.querySelectorAll("#section33")

		//console.log(velikostsection3[0].offsetHeight)

		let vypocet = entries[0].target.offsetHeight + pinspacer[0].offsetHeight;

		//console.log(vypocet)

		pinspacer[0].style.height = `${vypocet}px`;

		container2[0].style.height = `${velikostsection3[0].offsetHeight}px`;

		kontent1velikost = entries[0].target.offsetHeight;

		container2[0].style.overflow = "visible";

	} else if (entries[0].target.offsetHeight <= 20) {
		let velikostsection3 = document.querySelectorAll("#section33")

		//console.log(velikostsection3[0].offsetHeight)

		let vypocet = pinspacer[0].offsetHeight - kontent1velikost;

		//console.log(vypocet)

		pinspacer[0].style.height = `${vypocet}px`;

		container2[0].style.height = `${velikostsection3[0].offsetHeight}px`;

		container2[0].style.overflow = "visible";

	}
})


// start observing a DOM node
resizeObserver.observe(document.getElementById("kontent1"))


// create an Observer instance
const resizeObserver2 = new ResizeObserver(entries => {
	//console.log(entries[0].target.offsetHeight)

	if (entries[0].target.offsetHeight > 20) {
		let velikostsection3 = document.querySelectorAll("#section33")

		//console.log(velikostsection3[0].offsetHeight)

		let vypocet = entries[0].target.offsetHeight + pinspacer[0].offsetHeight;

		//console.log(vypocet)

		pinspacer[0].style.height = `${vypocet}px`;

		container2[0].style.height = `${velikostsection3[0].offsetHeight}px`;

		kontent1velikost = entries[0].target.offsetHeight;
	} else if (entries[0].target.offsetHeight <= 20) {
		let velikostsection3 = document.querySelectorAll("#section33")

		//console.log(velikostsection3[0].offsetHeight)

		let vypocet = pinspacer[0].offsetHeight - kontent1velikost;

		//console.log(vypocet)

		pinspacer[0].style.height = `${vypocet}px`;

		container2[0].style.height = `${velikostsection3[0].offsetHeight}px`;
	}
})


// start observing a DOM node
resizeObserver2.observe(document.getElementById("kontent2"))


// create an Observer instance
const resizeObserver3 = new ResizeObserver(entries => {
	//console.log(entries[0].target.offsetHeight)

	if (entries[0].target.offsetHeight > 20) {
		let velikostsection3 = document.querySelectorAll("#section33")

		//console.log(velikostsection3[0].offsetHeight)

		let vypocet = entries[0].target.offsetHeight + pinspacer[0].offsetHeight;

		//console.log(vypocet)

		pinspacer[0].style.height = `${vypocet}px`;

		container2[0].style.height = `${velikostsection3[0].offsetHeight}px`;

		kontent1velikost = entries[0].target.offsetHeight;
	} else if (entries[0].target.offsetHeight <= 20) {
		let velikostsection3 = document.querySelectorAll("#section33")

		//console.log(velikostsection3[0].offsetHeight)

		let vypocet = pinspacer[0].offsetHeight - kontent1velikost;

		//console.log(vypocet)

		pinspacer[0].style.height = `${vypocet}px`;

		container2[0].style.height = `${velikostsection3[0].offsetHeight}px`;
	}
})


// start observing a DOM node
resizeObserver3.observe(document.getElementById("kontent3"))


// create an Observer instance
const resizeObserver4 = new ResizeObserver(entries => {
	//console.log(entries[0].target.offsetHeight)

	if (entries[0].target.offsetHeight > 20) {
		let velikostsection3 = document.querySelectorAll("#section33")

		//console.log(velikostsection3[0].offsetHeight)

		let vypocet = entries[0].target.offsetHeight + pinspacer[0].offsetHeight;

		//console.log(vypocet)

		pinspacer[0].style.height = `${vypocet}px`;

		container2[0].style.height = `${velikostsection3[0].offsetHeight}px`;

		kontent1velikost = entries[0].target.offsetHeight;
	} else if (entries[0].target.offsetHeight <= 20) {
		let velikostsection3 = document.querySelectorAll("#section33")

		//console.log(velikostsection3[0].offsetHeight)

		let vypocet = pinspacer[0].offsetHeight - kontent1velikost;

		//console.log(vypocet)

		pinspacer[0].style.height = `${vypocet}px`;

		container2[0].style.height = `${velikostsection3[0].offsetHeight}px`;
	}
})


// start observing a DOM node
resizeObserver4.observe(document.getElementById("kontent4"))


// create an Observer instance
const resizeObserver5 = new ResizeObserver(entries => {
	//console.log(entries[0].target.offsetHeight)

	if (entries[0].target.offsetHeight > 20) {
		let velikostsection3 = document.querySelectorAll("#section33")

		//console.log(velikostsection3[0].offsetHeight)

		let vypocet = entries[0].target.offsetHeight + pinspacer[0].offsetHeight;

		//console.log(vypocet)

		pinspacer[0].style.height = `${vypocet}px`;

		container2[0].style.height = `${velikostsection3[0].offsetHeight}px`;

		kontent1velikost = entries[0].target.offsetHeight;
	} else if (entries[0].target.offsetHeight <= 20) {
		let velikostsection3 = document.querySelectorAll("#section33")

		//console.log(velikostsection3[0].offsetHeight)

		let vypocet = pinspacer[0].offsetHeight - kontent1velikost;

		//console.log(vypocet)

		pinspacer[0].style.height = `${vypocet}px`;

		container2[0].style.height = `${velikostsection3[0].offsetHeight}px`;
	}
})


// start observing a DOM node
resizeObserver5.observe(document.getElementById("kontent5"))


//	// create an Observer instance
//	const resizeObserver6 = new ResizeObserver(entries => {
//		//console.log(entries[0].target.offsetHeight)
//	
//		if (entries[0].target.offsetHeight > 20) {
//			let velikostsection3 = document.querySelectorAll("#section33")
//	
//			//console.log(velikostsection3[0].offsetHeight)
//	
//			let vypocet = entries[0].target.offsetHeight + pinspacer[0].offsetHeight;
//	
//			//console.log(vypocet)
//	
//			pinspacer[0].style.height = `${vypocet}px`;
//	
//			container2[0].style.height = `${velikostsection3[0].offsetHeight}px`;
//	
//			kontent1velikost = entries[0].target.offsetHeight;
//		} else if (entries[0].target.offsetHeight <= 20) {
//			let velikostsection3 = document.querySelectorAll("#section33")
//	
//			//console.log(velikostsection3[0].offsetHeight)
//	
//			let vypocet = pinspacer[0].offsetHeight - kontent1velikost;
//	
//			//console.log(vypocet)
//	
//			pinspacer[0].style.height = `${vypocet}px`;
//	
//			container2[0].style.height = `${velikostsection3[0].offsetHeight}px`;
//		}
//	})
//	
//	
//	// start observing a DOM node
//	resizeObserver6.observe(document.getElementById("kontent6"))

//-----------------------------------------------------------------------

const uvod = document.getElementById("uvodobsah")

const uvodtlacitko1 = document.getElementById("uvodtlacitko1")
const uvodtlacitko2 = document.getElementById("uvodtlacitko2")

let uvodcislo = 0;

uvodtlacitko2.style.opacity = "0"

uvod.innerHTML = '<div class="stranka1"><p>Naše detailingová dílna vznikla v roce 2017 za jediným účelem – pečování o vlastní vozy. Tehdy ještě nenesla žádné jméno. Výsledné práce sklízely kladné ohlasy a tak jsem se rozhodl nabídnout leštění laku i svým (nejbližším) kamarádům.</p><p>Postupné zlepšování a získávání zkušeností přineslo v roce 2019 prvního zákazníka. Ve stejnou chvíli se spojilo příjemné s užitečným.</p></div>'

uvodtlacitko1.addEventListener("click", (udalost) => {
	uvodcislo ++
	uvodtlacitko2.style.opacity = "1"

	if (uvodcislo == 1) {
		uvod.innerHTML = '<div class="stranka2"><p>Rozhodující byl konec roku 2021, kdy jsem ve své dílně uspořádal oslavu svých narozenin. Tehdy vznikl nápad, že by nebylo špatné zrekonstruovat podlahu. Následující den už vznikaly nápady, jaký materiál na to použít. Netrvalo dlouho a k rekonstrukci podlahy se přidala nová elektroinstalace, oprava zdí a nové osvětlení. Ihned poté došlo k rozšíření detailingové výbavy.</p><p>Po zdlouhavém přemýšlení se v únoru roku 2022 zrodil název #LEŠTI TO – Car detailing a zároveň došlo k výrobě našeho prvního reklamního banneru. Obratem jsem založil instagramový účet, na který pravidelně přidávám drobné ukázky z mé práce.</p></div>'
	}
	else if (uvodcislo == 2) {
		uvod.innerHTML = '<div class="stranka3"><p>V únoru roku 2022 byla naše nabídka služeb rozšířena o kompletní čištění interiérů, které s sebou neslo nákup další detailingové výbavy.</p><p>V současné době se zabýváme především renovací a leštěním laků, aplikací keramických ochran a vosků, čištěním interiérů a měření tloušťky laků.</p></div>'
	}
	else if (uvodcislo == 3) {
		uvod.innerHTML = '<div class="stranka4"><p>Při naší práci se snažíme zaměřit na sebemenší detail. Ke každému zákazníkovi přistupujeme individuálně a snažíme se vytvořit program na míru s důrazem na jeho maximální spokojenost.</p><p>V případě, že máte zájem o naše služby, neváhejte nás kontaktovat. Rádi Vám poradíme třeba jen ohledně správné údržby Vašeho vozu. Nezávazné cenové nabídky jsou ZDARMA a rádi je dokážeme vytvořit i na dálku z poskytnutých fotek.</p></div>'
		uvodcislo = 3
		uvodtlacitko1.style.opacity = "0"
	}
	else {
		uvodcislo = 3
	}
})

uvodtlacitko2.addEventListener("click", (udalost) => {
	uvodcislo --
	uvodtlacitko1.style.opacity = "1"

	if (uvodcislo <= 0) {
		uvodcislo = 0
		uvodtlacitko2.style.opacity = "0"
	}

	if (uvodcislo == 0) {
		uvod.innerHTML = '<div class="stranka1"><p>Naše detailingová dílna vznikla v roce 2017 za jediným účelem – pečování o vlastní vozy. Tehdy ještě nenesla žádné jméno. Výsledné práce sklízely kladné ohlasy a tak jsem se rozhodl nabídnout leštění laku i svým (nejbližším) kamarádům.</p><p>Postupné zlepšování a získávání zkušeností přineslo v roce 2019 prvního zákazníka. Ve stejnou chvíli se spojilo příjemné s užitečným.</p></div>'
		uvodcislo = 0
	}
	else if (uvodcislo == 1) {
		uvod.innerHTML = '<div class="stranka2"><p>Rozhodující byl konec roku 2021, kdy jsem ve své dílně uspořádal oslavu svých narozenin. Tehdy vznikl nápad, že by nebylo špatné zrekonstruovat podlahu. Následující den už vznikaly nápady, jaký materiál na to použít. Netrvalo dlouho a k rekonstrukci podlahy se přidala nová elektroinstalace, oprava zdí a nové osvětlení. Ihned poté došlo k rozšíření detailingové výbavy.</p><p>Po zdlouhavém přemýšlení se v únoru roku 2022 zrodil název #LEŠTI TO – Car detailing a zároveň došlo k výrobě našeho prvního reklamního banneru. Obratem jsem založil instagramový účet, na který pravidelně přidávám drobné ukázky z mé práce.</p></div>'
	}
	else if (uvodcislo == 2) {
		uvod.innerHTML = '<div class="stranka3"><p>V únoru roku 2022 byla naše nabídka služeb rozšířena o kompletní čištění interiérů, které s sebou neslo nákup další detailingové výbavy.</p><p>V současné době se zabýváme především renovací a leštěním laků, aplikací keramických ochran a vosků, čištěním interiérů a měření tloušťky laků.</p></div>'
	}
})