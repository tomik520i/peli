<?php
require "db.inc.php";

$mydate = getdate(date('U'));
$date = "$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]";

$sqlr = $conn->query("SELECT id FROM rate");
$numR = $sqlr->num_rows;


$sqlr = $conn->query("SELECT SUM(userReview) AS total FROM rate");
$rData = $sqlr->fetch_array();
$total = $rData['total'];

$avg = '';
if ($numR != 0) {
    if (is_nan(round(($total / $numR), 1))) {
        $avg = 0;
    } else {
        $avg = round(($total / $numR), 1);
    }
} else {
    $avg = 0;
}

$prikaz = $conn->query("SELECT * FROM rate");
$recenze = $prikaz->fetch_all();

$cislo1 = 0;
$cislo2 = 0;
$cislo3 = 0;
$cislo4 = 0;
$cislo5 = 0;
$procenta1 = 0;
$procenta2 = 0;
$procenta3 = 0;
$procenta4 = 0;
$procenta5 = 0;

if ($recenze == true) {

    foreach ($recenze as $recenze2) {
        if ($recenze2[2] == 1) {
            //var_dump($recenze2);
            $cislo1++;
        }
        if ($recenze2[2] == 2) {
            //var_dump($recenze2);
            $cislo2++;
        }
        if ($recenze2[2] == 3) {
            //var_dump($recenze2);
            $cislo3++;
        }
        if ($recenze2[2] == 4) {
            //var_dump($recenze2);
            $cislo4++;
        }
        if ($recenze2[2] == 5) {
            //var_dump($recenze2);
            $cislo5++;
        }
    }


    //var_dump($cislo1);
    //var_dump($cislo2);
    //var_dump($cislo3);
    //var_dump($cislo4);
    //var_dump($cislo5);

    $celek = $cislo1 + $cislo2 + $cislo3 + $cislo4 + $cislo5;

    //var_dump($celek);

    $procenta1 = ($cislo1 / $celek) * 100;

    //var_dump($procenta1);
    $procenta2 = ($cislo2 / $celek) * 100;

    //var_dump($procenta2);
    $procenta3 = ($cislo3 / $celek) * 100;

    //var_dump($procenta3);
    $procenta4 = ($cislo4 / $celek) * 100;

    //var_dump($procenta4);
    $procenta5 = ($cislo5 / $celek) * 100;
}
//var_dump($procenta5);
?>
<section class="rating-review" id="ratingSection">
    <div class="tri table-flex">
        <table>
            <tbody>
                <tr>
                    <td>
                        <div class="rnb rvl">
                            <h3><?php echo $avg; ?>/5.0</h3>
                        </div>
                        <div class="pdt-rate">
                            <div class="pro-rating">
                                <div class="clearfix rating marT8 ">
                                    <div class="rating-stars ">
                                        <div class="grey-stars"></div>
                                        <div class="filled-stars" style="width:<?php echo ($avg * 20) ?>%"> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="rnrn">
                            <p class="rars"> <?php if ($numR == 0) {
                                                    echo "No";
                                                } else {
                                                    echo $numR;
                                                }; ?>x Hodnoceno</p>
                        </div>
                    </td>
                    <td>
                        <div class="rpb">
                            <div class="rnpb">
                                <label>5 <i class="fa fa-star"></i></label>
                                <div class="ropb">
                                    <div class="ripb" style="width:<?php echo $procenta5 ?>%"></div>
                                </div>
                                <label>(<?php echo $cislo5; ?>)</label>
                            </div>
                            <div class="rnpb">
                                <label>4 <i class="fa fa-star"></i></label>
                                <div class="ropb">
                                    <div class="ripb" style="width:<?php echo $procenta4 ?>%"></div>
                                </div>
                                <label>(<?php echo $cislo4; ?>)</label>
                            </div>
                            <div class="rnpb">
                                <label>3 <i class="fa fa-star"></i></label>
                                <div class="ropb">
                                    <div class="ripb" style="width:<?php echo $procenta3 ?>%"></div>
                                </div>
                                <label>(<?php echo $cislo3; ?>)</label>
                            </div>
                            <div class="rnpb">
                                <label>2 <i class="fa fa-star"></i></label>
                                <div class="ropb">
                                    <div class="ripb" style="width:<?php echo $procenta2 ?>%"></div>
                                </div>
                                <label>(<?php echo $cislo2; ?>)</label>
                            </div>
                            <div class="rnpb">
                                <label>1 <i class="fa fa-star"></i></label>
                                <div class="ropb">
                                    <div class="ripb" style="width:<?php echo $procenta1 ?>%"></div>
                                </div>
                                <label>(<?php echo $cislo1; ?>)</label>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="rrb">
                            <p>Zanechte prosím hodnocení!</p>
                            <button class="rbtn opmd">Napsat hodnocení</button>
                        </div>
                    </td>
                </tr>

            </tbody>
        </table>
        <div class="review-modal" style="display:none">
            <div class="review-bg"></div>
            <div class="rmp">

                <div class="rpc">
                    <span><i class="fa-solid fa-xmark"></i></span>
                </div>
                <div class="rps" align="center">
                    <i class="fa fa-star" data-index="0" style="display:none"></i>
                    <i class="fa fa-star" data-index="1"></i>
                    <i class="fa fa-star" data-index="2"></i>
                    <i class="fa fa-star" data-index="3"></i>
                    <i class="fa fa-star" data-index="4"></i>
                    <i class="fa fa-star" data-index="5"></i>
                </div>
                <input type="hidden" value="" class="starRateV">
                <input type="hidden" value="<?php echo $date ?>" class="rateDate">

                <div class="rptf" align="center">
                    <input type="text" class="raterName" placeholder="Zadejte jméno">
                </div>

                <div class="rptf" align="center">
                    <textarea name="rate-field" id="rate-field" class="rateMsg" placeholder="Zde napiště vaše hodnocení."></textarea>
                </div>
                <div class="rate-error" align="center"></div>
                <div class="rpsb" align="center">
                    <button class="rpbtn">přidat hodnocení</button>
                </div>

            </div>
        </div>
    </div>

    <div class="bri">
        <div class="uscm">
            <?php
            $sqlp = "SELECT * FROM rate ORDER BY dateReviewed ASC, userReview DESC ";
            $resultp = $conn->query($sqlp);


            if (mysqli_num_rows($resultp) > 0) {
                while ($row = $resultp->fetch_assoc()) {
            ?>

                    <div class="uscm-secs">
                        <div class="us-img">
                            <p><?= substr($row['userName'], 0, 1); ?></p>
                        </div>
                        <div class="uscms">
                            <div class="us-rate">
                                <div class="pdt-rate">
                                    <div class="pro-rating">
                                        <div class="clearfix rating marT8 ">
                                            <div class="rating-stars ">
                                                <div class="grey-stars"></div>
                                                <div class="filled-stars" style="width:<?= $row['userReview'] * 20 ?>%">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="us-cmt">
                                <p><?= $row['userMessage'] ?></p>
                            </div>
                            <div class="us-nm">
                                <p><i> By <span class="cmnm"><?= $row['userName'] ?></span> on <span class="cmdt"><?= $row['dateReviewed'] ?></span> </i></p>
                            </div>
                        </div>
                    </div>


            <?php
                }
            }

            ?>
        </div>
    </div>

    <div class="list-container">
            <div id="data-list"></div>
        </div>

        <div class="buttons">
            <button id="prev">Prev</button>
            <input type="number" id="page-number" />
            <button id="next">Next</button>
        </div>
</section>

<script>
    
    let dataSet = document.querySelectorAll(".uscm-secs");

    let recenze = [];

    dataSet.forEach((kontent, index) => {
        recenze.push(dataSet[index].innerHTML);
    })

    console.log(recenze);


    const list = document.querySelector("#data-list");
const prevButton = document.querySelector("#prev");
const nextButton = document.querySelector("#next");
const pageNumberValue = document.querySelector("#page-number")

let startIndex = 0;
let endIndex = 5;
let pageNumber = 0;

pageNumberValue.value = pageNumber

const mapData = () => {
  const slicedData = recenze
    .slice(startIndex, endIndex)
    .map((row) => {
      return `<div class="uscm-secs">${row}</div>`;
    })
    .join("");

  list.innerHTML = slicedData;
}

mapData();

prevButton.addEventListener("click", () => {
  if (endIndex < 10) {
    startIndex = 0;
    endIndex = 5;
  } else {
    startIndex -= 5;
    endIndex -= 5;
    pageNumber -= 1;
  }
  pageNumberValue.value = pageNumber;
  mapData();
});

nextButton.addEventListener("click", () => {
  if (endIndex < recenze.length) {
    startIndex += 5;
    endIndex += 5;
    pageNumber += 1;
  }
  pageNumberValue.value = pageNumber;
  mapData();
});


pageNumberValue.addEventListener("change",(e) => {
  let currentPageNumber = Number.parseInt(e.target.value)
  let maxPageNumber = Math.floor(recenze.length/5)
  if(currentPageNumber > maxPageNumber){
   currentPageNumber = maxPageNumber;
    e.target.value = value
  }
  else if(currentPageNumber < 0){
    currentPageNumber = 0;
    e.target.value = value
  }
   startIndex = currentPageNumber * 5;
   endIndex = startIndex + 5
   pageNumber = currentPageNumber
   mapData();
})
</script>