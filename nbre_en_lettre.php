<?php
require("abatheader.php");
require("../controller/abatfonction.php");

if (!empty($_GET["id"])) {
  # code qui permet de recuperer l'id passer dans l'URL...
  $depense = getDepense($_GET["id"]);
}
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$limit = 500; // Nombre d'abattage par page
$offset = ($page - 1) * $limit;


$start_date = isset($_GET['date_debut']) ? $_GET['date_debut'] : null;
$end_date = isset($_GET['date_fin']) ? $_GET['date_fin'] : null;

?>

<div class="home-content">
  <div class="overview-boxes">
  <div class="box-bloc-un">
      <form action="<?= !empty($_GET["id"]) ? "../controller/abatModifDepense.php" : "../controller/abatAjoutDepense.php" ?>" method="post">

        <label for="beneficiaire">Bénéficiaire</label>
        <input value="<?= !empty($_GET["id"]) ? $depense["beneficiaire"] : "" ?>" type="text" name="beneficiaire" id="beneficiaire" placeholder="saisir votre nom" autocomplete="off">
        <input value="<?= !empty($_GET["id"]) ? $depense["id"] : "" ?>" type="hidden" name="id" id="id" autocomplete="off">
 
        <label for="montant_chiffre">Montant en chiffre</label>
        <input value="<?= !empty($_GET["id"]) ? $depense["montant_chiffre"] : "" ?>" type="number" name="montant_chiffre" id="montant_chiffre" placeholder="saisir le montant en chiffre" autocomplete="off" onKeyUp=" keyUpHandler(this)">

        <label for="montant_lettre">Montant en lettre</label>
        <input value="<?= !empty($_GET["id"]) ? $depense["montant_lettre"] : "" ?>" type="text" name="montant_lettre" id="montant_lettre" autocomplete="off" readonly placeholder="montant en lettre">

        <label for="motif_operation">Motif de la depense</label>
        <input value="<?= !empty($_GET["id"]) ? $depense["motif_operation"] : "" ?>" type="text" name="motif_operation" id="motif_operation" placeholder="donner le motif" autocomplete="off">

        <input value="depense" type="hidden" name="type_operation" id="type_operation" autocomplete="off">

        <input type="submit" value="<?= !empty($_GET["id"]) ? "Modifier" : "Enregistrer" ?>">
        <div>MONTANT :</div>
	<input name="montant" id="montant" type="text" size="25" placeholder="saisir un nombre" onKeyUp=" keyUpHandler(this)">
	<div id="conversion" style="background-color:silver;border-color:gold;border-width:1px;border-style:solid">&nbsp;</div>
<input type="text" id="conversion-input" placeholder="en lettre" onKeyUp=" keyUpHandler(this)">

        <?php

        if (!empty($_SESSION['message']['text'])) {
        ?>
          <div class="alert <?= $_SESSION['message']['type'] ?>">
            <?= $_SESSION['message']['text'] ?>
          </div>
        <?php
          unset($_SESSION['message']);
        }

        ?>

      </form>

    </div>

    <div class="box-bloc-deux" style="display: block;">

      <form action="abatdepense.php" method="get">
        <table class="mtable">
          <tr>
            <th></th>
            <th></th>
            <th> 

              <div class="solde" style="height:50px; width:60%; margin:0px auto;text-align: center; display:flex; flex-direction:column; ">
                <p style="font-size: 16px; display:flex; flex-direction:column; border-radius:15px 15px 15px 15px;
          box-shadow:0px 2px 2px black; height:50px; padding:5px ; color:white;background:#0a2558; margin-bottom:10px;
          ">
                  <i class='bx bxs-file-export' style="position: absolute; font-size:25px; border:1px solid white; 
background:rgb(142, 142, 21); border-radius:10px 10px 10px 10px;  transform: translate(-70%, -30%); padding:3px;"></i>

                  <span style="border:none;;
          padding: 5px 0px; color: black;font-size: 13px; font-weight:bold;color:white;">
                    <?php
                    $nombredepenses = getNombreDepensesAbat();

                    echo "( " . number_format($nombredepenses, 0, ",", " ") . " )"
                    ?>
                    depenses enregistré
                  </span>
                </p>
              </div>

            </th>
          </tr>

        </table>

      </form>
      <br>




      </table>


      <form action="abatdepense.php" method="get">
        <table class="mtable">
          <tr>
            <th>Date de debut</th>
            <th>Date de fin</th>
          </tr>
          <tr>
            <td>
              <input type="date" name="date_debut" id="date_debut" autocomplete="off">
            </td>
            <td>
              <input type="date" name="date_fin" id="date_fin" autocomplete="off">
            </td>
            <td>
              <button type="submit">Valider</button>
            </td>
          </tr>
        </table>
      </form>


      <br>

      <table class="mtable">
        <tr>
          <th>N°</th>
          <th>Déposant</th>
          <th>Montant</th>
          <th>Motif</th>
          <th>Date</th>
          <th>Modifier</th>
        </tr>
        <?php
        $total_depense = 0;
        $total_pages = 0;
        if (!empty($_GET)) {
          $depenses = getDepense(null, $_GET, $limit, $offset);

          $count = countDepense($_GET);
          $total_depense = $count['total'];
          $total_pages = ceil($total_depense / $limit);
        } else {
          $depenses = getDepense(null, null, $limit, $offset);

          $count = countDepense(null);
          $total_depense = $count['total'];
          $total_pages = ceil($total_depense / $limit);
        }





        if (!empty($depenses) && is_array($depenses)) {
          foreach ($depenses as $key => $value) {
        ?>
            <tr>
              <td> <?= $value["id"] ?></td>
              <td> <?= $value["beneficiaire"] ?></td>
              <td> <?= $value["montant_chiffre"] ?></td>
              <td> <?= $value["motif_operation"] ?></td>
              <td> <?= date("d/m/Y", strtotime($value["date_operation"])) ?></td>

              <td style="text-align: center;" title="Modifier"><a href="?id=<?= $value["id"] ?>"><i class='bx bxs-edit-alt' style="font-size: 20px; color:green;"></i></a></td>
            </tr>
        <?php
          } 
        }
        ?>
      </table>
      <br>
      <a href="recuEtatDepense.php?ids=<?= implode(',', array_column($depenses, 'id')) ?>&start_date=<?= urlencode($start_date) ?>&end_date=<?= urlencode($end_date) ?>" title="Voir" style="color:#0a2558; font-size:23px; font-weight: bold;  text-decoration:none; ">
        <button><i class='bx bx-printer' style="font-size: 20px;margin-right:5px;"></i>Tout imprimer</button> </a>

      <?php
      echo "<div class='pagination'>";
      if ($page > 1) {
        $prev_page = $page - 1;
        echo "<a href='?page=$prev_page'>&laquo; Précédent</a> ";
      }

      for ($i = 1; $i <= $total_pages; $i++) {

        if ($i == $page) $active = "active";
        else $active = "";
        echo "<a class='$active' href='?page=$i'>$i</a> ";
      }

      // Lien vers la page suivante
      if ($page < $total_pages) {
        $next_page = $page + 1;
        echo "<a href='?page=$next_page'>Suivant &raquo;</a> ";
      }
      echo "</div>";

      ?>
    </div>
  </div>
  </section>


  <?php require("abatfooter.php"); ?>


  <script language="javascript" src="../public/script/nombre_en_lettre.js"></script>
	<script language="javascript">
	
		function keyUpHandler(obj){
		let nombreLettre=	document.getElementById("conversion").firstChild.nodeValue	=	NumberToLetter(obj.value);
		document.getElementById("conversion-input").value	=	NumberToLetter(obj.value);
    document.getElementById("montant_lettre").value = NumberToLetter(obj.value);


		}//fin de keypressHandler
		 var montantChiffre = document.getElementById("montant_chiffre").value;
      var montantLettre = convertirEnLettres(montantChiffre);
      document.getElementById("montant_lettre").value = montantLettre;
	</script>