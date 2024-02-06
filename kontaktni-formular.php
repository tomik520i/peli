<?php
$chyby = [];
$jmeno = "";
$telefon = "";
$email = "";
$zprava = "";
$odeslano = false;
$formularodeslan = false;

	if (array_key_exists("odeslat", $_POST))
	{
		$formularodeslan = true;
		$jmeno = $_POST["jmeno"];
		$telefon = $_POST["telefon"];
		$email = $_POST["email"];
		$zprava = $_POST["zprava"];

		if(mb_strlen($jmeno) < 5)
		{
			$chyby["jmeno"] = "Jméno musí být zadáno";
		}
		if(mb_strlen($telefon) < 9)
		{
			$chyby["telefon"] = "Telefonní číslo musí být zadáno";
		}
		if(!preg_match("/.+@.+\\..+/" ,$email))
		{
			$chyby["email"] = "Neplatný email";
		}
		if(mb_strlen($zprava) < 5)
		{
			$chyby["zprava"] = "Zpráva musí být zadána";
		}

		if(count($chyby) == 0)
		{
			$odeslano = true;

			$mail = new PHPMailer\PHPMailer\PHPMailer(true);

			$mail->CharSet = "utf-8";

			$mail->setFrom("$email");
			$mail->addAddress("Info@lestito.cz");

			$mail->isHTML(true);
        	$mail->Subject = 'Kontaktní formulář #LEŠTI TO - Car detailing';

			$mail->Body = "
            <h1>Kontaktní formulář #LEŠTI TO - Car detailing</h1>
            <div><b>Jméno:</b> $jmeno</div>
            <div><b>Telefon:</b> $telefon</div>
            <div><b>Email:</b> $email</div>
            <div><b>Zpráva:</b> $zprava</div>
        	";

			$mail->send();

		}
	}
?>

<div class="obsah" id="kontaktni-formular">
      <div class="nadpis"><h2>Napište nám</h2></div>
      <div class="formular">

<?php
if ($odeslano == false)
{
?>
        <form method="post" action="#kontaktni-formular">
          <div class="radka"><input class="prvek" type="text" name="jmeno" id="jmeno" placeholder=" " value="<?php echo htmlspecialchars($jmeno); ?>"> <label for="jmeno">Jméno</label>
		<?php
			$status = "";
			if ($formularodeslan == true)
			{
				$status = "ok";

				if (array_key_exists("jmeno", $chyby))
				{
					$status = "chyba";
					echo "<div class='chyba'>{$chyby['jmeno']}</div>";
				}
			}
		?>

		<div class="status <?php echo $status?>">
			<i class="spravne fa-solid fa-check"></i>
			<i class="spatne fa-solid fa-xmark"></i>
		</div>

		</div>
          <div class="radka"><input class="prvek" type="text" name="telefon" id="telefon" placeholder=" " value="<?php echo htmlspecialchars($telefon); ?>"> <label for="telefon">Telefon</label>
		  <?php
			$status = "";
			if ($formularodeslan == true)
			{
				$status = "ok";

				if (array_key_exists("telefon", $chyby))
				{
					$status = "chyba";
					echo "<div class='chyba'>{$chyby['telefon']}</div>";
				}
			}
		?>

		<div class="status <?php echo $status?>">
			<i class="spravne fa-solid fa-check"></i>
			<i class="spatne fa-solid fa-xmark"></i>
		</div>
		</div>
          <div class="radka"><input class="prvek" type="text" name="email" id="email" placeholder=" " value="<?php echo htmlspecialchars($email); ?>"> <label for="email">Email</label>
		  <?php
			$status = "";
			if ($formularodeslan == true)
			{
				$status = "ok";

				if (array_key_exists("email", $chyby))
				{
					$status = "chyba";
					echo "<div class='chyba'>{$chyby['email']}</div>";
				}
			}
		?>

		<div class="status <?php echo $status?>">
			<i class="spravne fa-solid fa-check"></i>
			<i class="spatne fa-solid fa-xmark"></i>
		</div>
		</div>
          <div class="radka"><textarea class="prvek" name="zprava" id="zprava" placeholder=" " rows="3"><?php echo htmlspecialchars($zprava); ?></textarea> <label for="zprava">Zpráva</label>
		  <?php
			$status = "";
			if ($formularodeslan == true)
			{
				$status = "ok";

				if (array_key_exists("zprava", $chyby))
				{
					$status = "chyba";
					echo "<div class='chyba'>{$chyby['zprava']}</div>";
				}
			}
		?>

		<div class="status <?php echo $status?>">
			<i class="spravne fa-solid fa-check"></i>
			<i class="spatne fa-solid fa-xmark"></i>
		</div>
		</div>
          <div class="radka"><button name="odeslat">Odeslat</button></div>
        </form>
		<?php
			}
			else
			{
				echo "<h1>Kontaktní formulář byl úspěšně odeslán</h1>";
			}
			?>
      </div>
  </div>


<style>
	.chyba 	{color: red;
			font-weight: bold;
			font-size: 4vh;
			padding: 7px;}
</style>

<script>
	$("#kontaktni-formular [name]").on("input", (udalost) => {
		const input = udalost.currentTarget;
		const nazevinputu = input.getAttribute("name");
		const hodnotainputu = input.value;
		console.log(nazevinputu);

		let ok = true;
		if (nazevinputu == "jmeno")
		{
			if (hodnotainputu.length < 5)
			{
				ok = false;
			}
		}
		else if (nazevinputu == "telefon")
		{
			if (hodnotainputu.length < 9)
			{
				ok = false;
			}
		}
		else if (nazevinputu == "email")
		{
			if (hodnotainputu.match(/.+@.+\..+/) == null)
			{
				ok = false;
			}
		}
		else if (nazevinputu == "zprava")
		{
			if (hodnotainputu.length < 5)
			{
				ok = false;
			}
		}

		const statuselement = document.querySelector(`#kontaktni-formular [name=${nazevinputu}]~.status`)
		if (ok)
		{
			statuselement.className = "status ok";
		}
		else
		{
			statuselement.className = "status chyba";
		}
	})
</script>