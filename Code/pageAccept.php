<!DOCTYPE html>
	<html lang="fr">
	<head>
	  <meta charset="utf-8">
	  <title>Sélection dossiers</title>
      <script src="script.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
    <script type="text/javascript">
    (function() {
    emailjs.init("zEZg4qgYbCpBjv8kq");
    })();
    </script>
	  <link rel="stylesheet" href="style2.css">
	  <meta name="viewport" content="width=device-width">

	</head>
	<body>
<button onclick="window.location.href='evaluateur.php'" class="btnReturn">Accueil</button> </br>

<h1>Sélection dossiers Parcoursup BTS SIO - Rentrée X</h1>
<div style="display:flex;justify-content:center;align-items:center;flex-direction:column;">
    <button  style="background-color: #4CAF50;border: none;color: white;margin-left:20px;padding: 15px 32px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;" onclick="sendEmail()">La saisie est terminée !</button>
	<br>
    <button type="button" onclick="tableToCSV()">Télecharger le tableau en CSV</button>
</div>



<div class=container1>
	<div class="container2c" >
		<table>
		    <thead>
		        <tr>
		            <th colspan="4">Dossiers Acceptés</th>
		        </tr>
		    </thead>
		    <tbody>
		        <tr>
		            <td>Numéro candidat</td>
		            <td>Total de points</td>
		            <td>remarque</td>	
		        </tr>
<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=selection;charset=utf8', '20courtot', '20courtot');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query('SELECT numcand,total_point,remarque FROM grille WHERE statut_dossier=\'accepte\'');
while ($donnees = $reponse->fetch())
{

?>	
			
		          <tr>
		            <td><?php echo $donnees['numcand'] ?></td>
		            <td><?php echo $donnees['total_point'] ?></td>
		            <td><?php echo $donnees['remarque'] ?></td>
		        </tr>
				<?php
}
?>
		    </tbody>
		</table>
		
	</div>

        
</div>

<div>
<div class="btnsb">
	<button onclick="window.location.href='pageAccept.php'" class="btnAccept" type="button">Dossier accepté</button>
	<button onclick="window.location.href='pageExa.php'" class="btnExa" type="button">Dossier à ré-examiner</button>
	<button class="btnRef" type="button">Dossier refusé</button>
</div>
<!-- 
<script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js">
</script> -->
<script type="text/javascript">
        // function tableToCSV() {
        //     // Variable to store the final csv data
        //     var csv_data = [];
 
        //     // Get each row data
        //     var rows = document.getElementsByTagName('tr');
        //     for (var i = 0; i < rows.length; i++) {
 
        //         // Get each column data
        //         var cols = rows[i].querySelectorAll('td,th');
 
        //         // Stores each csv row data
        //         var csvrow = [];
        //         for (var j = 0; j < cols.length; j++) {
 
        //             // Get the text data of each cell
        //             // of a row and push it to csvrow
        //             csvrow.push(cols[j].innerHTML);
        //         }
 
        //         // Combine each column value with comma
        //         csv_data.push(csvrow.join(";"));
        //     }
 
        //     // Combine each row data with new line character
        //     csv_data = csv_data.join('\n');
 
        //     // Call this function to download csv file 
        //     downloadCSVFile(csv_data);
 
        // }
 
        // function downloadCSVFile(csv_data) {
 
        //     // Create CSV file object and feed
        //     // our csv_data into it
        //     CSVFile = new Blob([csv_data], {
        //         type: "text/csv"
        //     });
 
        //     // Create to temporary link to initiate
        //     // download process
        //     var temp_link = document.createElement('a');
 
        //     // Download csv file
        //     temp_link.download = "GfG.csv";
        //     var url = window.URL.createObjectURL(CSVFile);
        //     temp_link.href = url;
 
        //     // This link should not be displayed
        //     temp_link.style.display = "none";
        //     document.body.appendChild(temp_link);
 
        //     // Automatically click the link to
        //     // trigger download
        //     temp_link.click();
        //     document.body.removeChild(temp_link);
        // }
        function emailtest(){
            var templateParams = {
                toname:'secrétaire'
                name: 'James',
                message: 'Check this out!'
            };
            emailjs.send('service_so8z9nx', 'template_qmhp4ru', templateParams)
                .then(function(response) {
                console.log('SUCCESS!', response.status, response.text);
                }, function(error) {
                console.log('FAILED...', error);
                });
        }
</script>
</body>
</html>