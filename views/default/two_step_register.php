<?php 
	if(!isset(Yii::app()->session['userId'])) return "oups";
	
	$userConnected = Person::getById(Yii::app()->session['userId']);

	$inseeCommunexion 	 = isset( Yii::app()->request->cookies['inseeCommunexion'] ) ? 
	   			    			  Yii::app()->request->cookies['inseeCommunexion'] : "";
	
	$cpCommunexion 		 = isset( Yii::app()->request->cookies['cpCommunexion'] ) ? 
	   			    			  Yii::app()->request->cookies['cpCommunexion'] : "";
	
	$cityNameCommunexion = isset( Yii::app()->request->cookies['cityNameCommunexion'] ) ? 
	   			    			  Yii::app()->request->cookies['cityNameCommunexion'] : "";
?>

<style>
	.main-col-search{
		padding-left:0px;
		padding-right:0px;
		padding-top:50px;
		background-color: rgba(43, 176, 198, 0.3) !important;
	}
	.menu-button, .menu-info-profil, .globale-announce {
		display:none;
	}
	.btn-menu0{
		display: inline;
	}

	.section-tsr{ /*tsr = two step register*/
		 width:100%;
		 padding:1px 0px 1px 0%; 
		 padding-bottom:15px;
	}
	.bg-azure-light-1{
		background-color: rgba(43, 176, 198, 0.3) !important;
	}
	.bg-azure-light-2{
		background-color: rgba(43, 176, 198, 0.7) !important;
	}
	input.input-communexion-twostep, input.input-street-twostep{
		border-radius: 30px !important;
		width: 50%;
		min-width: 300px;
		padding: 15px;
		font-size: 20px;
		text-align: center;
	}

	#TSR-communexion, #TSR-street{
		display: none;
	}
</style>
<div class="col-md-12 no-padding" id="whySection" style="max-width:100%;">

	<div class="col-md-12 center bg-dark section-tsr">
		<h1 class="homestead" style="color:#7ACF5B;">
			<i class="fa fa-thumbs-up fa-2x"></i>
			 Félicitation <span class="text-yellow"><?php echo $userConnected["name"]; ?></span>
		</h1>

		<span class="text-center text-white" style="font-size:15px; font-weight:300;">
			Votre compte personnel sera bientôt activé !<br>
			Merci de suivre les dernières étapes d'inscription ...
		</span>
	</div>

	<div class="col-md-12 center bg-azure-light-2 section-tsr">
		<h1 class="homestead text-white">
			<i class="fa fa-circle"></i>
			 Étape 1 : Votre addresse
		</h1>
		<div class="col-md-8 col-md-offset-2">
		<span class="text-center text-white" style="font-size:15px; font-weight:300;">
			Afin d'utiliser tout le potentiel du réseau <strong>Communecter</strong>, <br>
			nous aurions besoin de quelques informations sur votre position géographique ...
			<br><br>
			Rassurez-vous ! Ces informations ne seront jamais utilisées à d'autres fins que le bon fonctionnement du réseau <strong>Communecter</strong>.
			<br><a href="javascript:" class="text-dark strong">En savoir + sur l'utilisation de vos données</a>
			<br><br>
			Elles serviront à vous positionner plus précisément sur notre carte partagée, 
			et ainsi donner à chacun la possibilité de visualiser son réseau local réel.

			<br><br>Votre position finale sur la carte reste libre, 
			<br>vous pourrez (à tout moment) déplacer votre icône sur la position de votre choix.

			<br><br>Merci de rester fidèle (autant que possible) à la réalité !

		</span>
		</div>
	</div>

	<?php if(!isset($inseeCommunexion)){ ?>
		<div class="col-md-12 center section-tsr bg-azure-light-1" id="TSR-begin-zone">
			<h1 class="homestead text-dark">Pour commencer :</h1>
			<h2 class="homestead text-dark">Dans quelle zone vous situez-vous ?</h2>
		</div>
	<?php }else{ ?>
		<div class="col-md-12 center section-tsr bg-azure-light-1" id="TSR-begin-communexion">
			<h1 class="homestead text-dark">Pour commencer :</h1>
			<h3 class=" text-dark">
				Vous êtes actuellement communecté à <span class="text-red"><?php echo $cityNameCommunexion.", ".$cpCommunexion; ?></span>
			</h3>
			<h3 class=" text-dark">
				Souhaitez-vous conserver cette commune pour vous géolocaliser ?<br><br>
				<button class="btn btn-success" onclick="showTwoStep('street');">Oui, j'habite ici</button>
				<button class="btn btn-danger" onclick="showTwoStep('communexion');">Non, j'habite ailleurs</button>
			</h3>
		</div>	
		<div class="col-md-12 center section-tsr bg-azure-light-1" id="TSR-communexion">
			<h1 class="homestead text-dark">Où habitez-vous ?</h1>
			<button class="btn btn-danger" onclick="geolocAutoTSR();"><i class="fa fa-crosshairs"></i> Localisation automatique</button>
			<h3 class=" text-dark">
				Saisissez le nom de votre commune, ou votre code postal ...
			</h3>
			<input type="text" class="input-communexion-twostep" placeholder="commune / code postal"/><br>
		</div>	
		<div class="col-md-12 center section-tsr bg-azure-light-1" id="TSR-street">
			<h1 class="homestead text-dark">
				<i class="fa fa-thumbs-up fa-2x"></i> 
				Commune identifiée : <span id="tsr-commune-name-cp"><?php echo $cityNameCommunexion.", ".$cpCommunexion; ?></span>
			</h1>
			<h3 class=" text-dark">
				Saisissez le nom de votre rue ...
			</h3>
			<input type="text" class="input-street-twostep" placeholder="ex : 11, rue des peupliers"/><br>
			<h4 class="center text-red" id="error_street"></h4>
			<button id="btn-start-street-search" class="btn btn-success" onclick="startStreetSearch();"><i class="fa fa-search"></i> Rechercher ma position</button>
			
		</div>	
	<?php } ?>
			
</div>





<script type="text/javascript">

	jQuery(document).ready(function() {
		
		$(".moduleLabel").html("<i class='fa fa-user'></i> <span id='main-title-menu'>Bienvenue sur</span> <span class='text-red'>COMMUNE</span>CTER");
  		
  		<?php if(!isset($inseeCommunexion)){ ?>
  			showTwoStep("begin-zone");
  		<?php }else{ ?>
  			showTwoStep("begin-communexion");
  		<?php } ?>
  		
  		var timeoutSearch = setTimeout(function(){}, 0);
  		$(".input-communexion-twostep").keyup(function(e){
  			$("#searchBarPostalCode").val($(".input-communexion-twostep").val());
  			clearTimeout(timeoutSearch);
      		timeoutSearch = setTimeout(function(){ 
      			showMapLegende("info-circle", "Sélectionnez la commune où vivez actuellement,<br><strong>en cliquant sur \"communecter\"</strong> ...")
      			startNewCommunexion(); 
      		}, 1200);
  		});
  	});


  	function showTwoStep(id){
  		console.log("showTwoStep(#TSR-"+id+")");
  		$("#TSR-begin-zone,#TSR-begin-communexion,#TSR-communexion,#TSR-street").hide();
  		$("#TSR-"+id).show(400);
  		setTimeout(function(){ $("#TSR-"+id).show(400); }, 300);
  	}

  	function startStreetSearch(){

  		if($(".input-street-twostep").val() == ""){
  			$("#error_street").html("Aucun nom de rue");
  			return;
  		}

  		if($(".input-street-twostep").val().length < 2){
  			$("#error_street").html("Nom de rue trop court (minimum 2 caractères)");
  			return;
  		}

  		$("#btn-start-street-search").html('<i class="fa fa-spin fa-circle-o-notch"></i> Recherche en cours');

  		var requestPart = $(".input-street-twostep").val() + ", " + $("#tsr-commune-name-cp").html();
  		console.log("requestPart", requestPart);
  		$.ajax({
			url: "//nominatim.openstreetmap.org/search?q=" + requestPart + "&format=json&polygon=0&addressdetails=1",
			type: 'POST',
			dataType: 'json',
			async:false,
			crossDomain:true,
			complete: function () {},
			success: function (result){
				console.log("nominatim success", result.length);
				console.dir(obj);
				$("#btn-start-street-search").html('<i class="fa fa-search"></i> Rechercher');

				//var obj = null;
				if(result.length > 0){ 
					$("#error_street").html("Nous avons trouvé votre rue");
					var obj = result[0];
					var coords = Sig.getCoordinates(obj, "markerSingle");
					//si on a une geoShape on l'affiche
					if(typeof obj.geoShape != "undefined") Sig.showPolygon(obj.geoShape);
					var coords = L.latLng(obj.lat, obj.lon);
					userConnected["geo"] = { latitude : obj.lat, longitude : obj.lon };
					showGeoposFound(coords, Sig.getObjectId(userConnected), "person", userConnected);
				}else{
					$("#error_street").html("Nous n'avons trouvé votre rue. Recherche google");
				
				}
			},
			error: function (error) {
				console.log("nominatim error");
				console.dir(obj);
				$("#error_street").html("Aucun résultat");
				$("#btn-start-street-search").html('<i class="fa fa-search"></i> Rechercher');
			}
		});
  	}


  	function achiveTSR(){
  		console.log("achiveTSR");
  		showMap(false);
  		var address = {
  			"streetAddress" : $(".input-street-twostep").val(),
  			"postalCode" : cpCommunexion,
  			"addressLocality" : cityNameCommunexion,
  			"codeInsee" : inseeCommunexion
  		}
  		$.ajax({
			url: baseUrl+"/"+moduleId+"/person/updatefield",
			type: 'POST',
			data: "pk=<?php echo Yii::app()->session['userId']; ?>"+"&name=address&value="+address,
    		success: function (obj){
    			

    			toastr.success("Votre addresse a été mise à jour avec succès");
			},
			error: function(error){
				console.log("Une erreur est survenue pendant l'enregistrement de la nouvelle addresse");
				//console.log("entityType="+entityType+"&entityId="+entityId+"&latitude="+latitude+"&longitude="+longitude);
			}
		});
  		//showTwoStep("last-step-communexion");
  	}


  	function geolocAutoTSR(){
  		initHTML5Localisation('communexion_tsr'); 
  		showMap(true);
  	}
</script>