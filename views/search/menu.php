
<style>
	.lbl-btn-menu-name{
	    display: none;
		font-size: 17px;
		text-align: left;
		padding: 2px 2px;
		border-radius: 26px;
		z-index: 0;
		width: 100px;
		font-weight: 300;
		font-family: "homestead";
	}
	.text-green-success{
		color:#7ACF5B;
	}
	.hover-menu{
		width: 17%;
		height: 400px;
		position: fixed;
		top: 0px;
		left: 0px;
		z-index: 1;
		overflow: visible;
	}
	
</style>

<div class="hover-menu">

	<?php if(!isset(Yii::app()->session['userId'])){ ?>
	<button class="menu-button btn-menu btn-login tooltips" data-toggle="tooltip" data-placement="right" title="Connection" alt="Se connecter">
			<i class="fa fa-sign-in"></i>
	</button>
	<?php }else{ ?>
	<button class="menu-button btn-menu btn-logout tooltips" data-toggle="tooltip" data-placement="right" title="Déconnection" alt="Se déconnecter">
			<i class="fa fa-sign-out"></i>
	</button>
	<?php } ?>

	<button class="menu-button menu-button-title btn-menu btn-menu0 bg-red tooltips" 
			data-toggle="tooltip" data-placement="right" title="Accueil" alt="Accueil">
			<i class="fa fa-home"></i>
	</button>
	<?php if(!isset(Yii::app()->session['userId'])){ ?>
	<button class="menu-button menu-button-title btn-register btn-menu btn-menu1  <?php echo ($page == 'add') ? 'selected':'';?>" 
			data-toggle="tooltip" data-placement="right" title="S'inscrire" alt="S'inscrire">
			<i class="fa fa-plus-circle"></i>
			<span class="lbl-btn-menu-name">S'inscrire</span>
	</button>
	<?php } ?>
	<button class="menu-button menu-button-title btn-menu btn-menu2 bg-azure <?php echo ($page == 'directory') ? 'selected':'';?>" 
			data-toggle="tooltip" data-placement="right" title="L'Annuaire Communecté">
			<i class="fa fa-connectdevelop"></i>
			<span class="lbl-btn-menu-name">Annuaire</span>
	</button>

	<button class="menu-button menu-button-title btn-menu btn-menu3 bg-azure <?php echo ($page == 'agenda') ? 'selected':'';?>" 
			data-toggle="tooltip" data-placement="right" title="L'Agenda Communecté" alt="L'Agenda Communecté">
		<i class="fa fa-calendar"></i>
			<span class="lbl-btn-menu-name">Agenda</span>
	</button>

	<button class="menu-button menu-button-title btn-menu btn-menu4 bg-azure <?php echo ($page == 'news') ? 'selected':'';?>" 
			data-toggle="tooltip" data-placement="right" title="L'Actu Communectée" alt="L'Actu Communectée">
			<i class="fa fa-rss"></i>
			<span class="lbl-btn-menu-name">Actualités</span>
	</button>

</div>

<?php if(isset(Yii::app()->session['userId'])){ ?>
<button class="menu-button btn-menu btn-menu5 tooltips " 
		data-toggle="tooltip" data-placement="left" title="Mon répertoire" alt="Mon répertoire">
	<i class="fa fa-bookmark fa-rotate-270"></i>
</button>
<?php } ?>


<!-- <button class="menu-button btn-menu btn-menu6 tooltips <?php echo ($page == 'agenda') ? 'selected':'';?>" 
		data-toggle="tooltip" data-placement="left" title="Ma messagerie" alt="Ma messagerie">
	<i class="fa fa-envelope"></i>
</button> -->


<script type="text/javascript">
jQuery(document).ready(function() {
	
	$('.btn-menu0').click(function(e){ loadByHash("#search.home");  	 });
    $('.btn-menu2').click(function(e){ loadByHash("#search.directory");  });
    $('.btn-menu3').click(function(e){ loadByHash("#search.news"); 		 });
   	$('.btn-menu4').click(function(e){ loadByHash("#search.agenda");	 });
    $('.btn-menu5').click(function(e){ showFloopDrawer(true);	 		 });
    
    $(".btn-login").click(function(){
		showPanel("box-login");
		$(".main-col-search").html("");
	});
    $(".btn-register").click(function(){
		showPanel("box-register");
		$(".main-col-search").html("");
	});

    var positionMouseMenu = "out";
	$(".hover-menu").mouseenter(function(){
		console.log("enter all");
		positionMouseMenu = "in";
		$(".main-col-search").animate({ opacity:0.3 }, 400 );
		$(".lbl-btn-menu-name").show(200);
		setTimeout(function(){$(".lbl-btn-menu-name").css("display", "inline");}, 200);
		$(".menu-button-title").addClass("large");
	});

	$(".hover-menu").mouseout(function(){
		console.log("out all");
		if(positionMouseMenu != "inBtn"){
			$(".main-col-search").animate({ opacity:1 }, 0 );
			$(".lbl-btn-menu-name").hide();
			$(".menu-button-title").removeClass("large");
		}else{
			positionMouseMenu = "in";
		}
	});

	$(".hover-menu .btn-menu").mouseenter(function(){
		console.log("enter btn");
		positionMouseMenu = "inBtn";
		$(".main-col-search").animate({ opacity:0.3 }, 0 );
		$(".lbl-btn-menu-name").css("display", "inline");
		$(".menu-button-title").addClass("large");

	});

	$(".main-col-search").mouseenter(function(){
		console.log("enter main col");
		positionMouseMenu = "out";
		$(".main-col-search").animate({ opacity:1 }, 0 );
		$(".lbl-btn-menu-name").hide();
		$(".menu-button").removeClass("large");
	});

	


});
</script>