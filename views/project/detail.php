<?php
$this->renderPartial('../default/panels/toolbar'); 
?>
<div class="row">
	<div class=" col-md-12 col-sm-12 col-xs-12">
		<div class="col-md-12">
			<div class="panel panel-white col-md-8 no-padding">
				<?php 
				$this->renderPartial('pod/ficheInfo', array( "project" => $project, 
																	"tags" => $tags, 
																	"countries" => $countries,
																	"isAdmin"=> $admin,
																	"tasks" =>$tasks,
																	"imagesD" => $images
																	//"events" => $events
																	));
				?>
				
			</div>


			<div class="col-md-4 col-xs-12 no-padding pull-right">
				<div class="col-md-12 col-xs-12">
					<?php  	$this->renderPartial('../pod/usersList', array(  "project"=> $project,
															"users" => $contributors,
															"userCategory" => Yii::t("common","COMMUNITY"), 
															"countStrongLinks" => $countStrongLinks,
															"countLowLinks" => $countLowLinks,
															"contentType" => Project::COLLECTION,
															"admin" => $admin	));
					?>
					<?php 
						if(!empty($properties) || $admin==true){
							$this->renderPartial('pod/projectChart',array("itemId" => (string)$project["_id"], "itemName" => $project["name"], "properties" => $properties, "admin" =>$admin,"isDetailView" => 1)); 
						}
					?>
				</div>
				<?php if((@$project["links"]["needs"] && !empty($project["links"]["needs"])) || $admin==true){ ?> 
				<div class="col-md-12 col-xs-12 needsPod">	
					<?php 
					$this->renderPartial('../pod/needsList',array( 	
						"needs" => $needs, 
						"parentId" => (String) $project["_id"],
						"parentType" => Project::COLLECTION,
						"isAdmin" => $admin,
						"parentName" => $project["name"]
					  )); ?>
				</div>
				<?php } 
				if((@$project["links"]["events"] && !empty($project["links"]["events"])) || $admin==true){ ?>
				<div class="col-md-12 col-xs-12">
					<?php 
							if(!isset($eventTypes)) $eventTypes = array();
							$this->renderPartial('../pod/eventsList',array( "events" => $events, 
																	"contextId" => (String) $project["_id"],
																	"contextType" => Project::CONTROLLER,
																	"list" => $eventTypes,
																	"authorised" => $admin
																  )); ?>
				</div>
				<?php } ?>
			</div>

			<div class="col-md-8 col-sm-12 no-padding timesheetphp pull-left"></div>
			
			<div class="col-md-8 col-sm-12 no-padding pull-left" id="podCooparativeSpace">
				<div id="pod-room" class="panel panel-white">

					<div class="panel-heading border-light bg-azure">
						<h4 class="panel-title">
								<i class="fa fa-connectdevelop"></i> 
								<span class="homestead"><?php echo Yii::t("rooms","COOPERATIVE SPACE",null,Yii::app()->controller->module->id); ?></span>
						</h4>		
					</div>

					<div class="panel-body no-padding">
						<blockquote>
						Pour accéder à cet espace, connectez-vous !<br>
						<span class="text-azure">
			   				<i class="fa fa-check-circle"></i> Discuter<br>
			   				<i class="fa fa-check-circle"></i> Débattre<br>
			   				<i class="fa fa-check-circle"></i> Proposer<br>
			   				<i class="fa fa-check-circle"></i> Voter<br>
			   				<i class="fa fa-check-circle"></i> Agir
			   			</span>
			   			</blockquote>
					</div>   
						
				</div>
			</div>
		</div>	
	</div>
</div>
<?php 
	//var_dump($project);
	// $geoProject = $project["geo"];
	// foreach ($contributors as $key => $value) {
	// 	$contributors[$key]["geo"] = $geoProject;
	// }
	$contextMap = array_merge($events, $contributors);
	$contextMap["thisProject"] = array($project);
?>
<script type="text/javascript">
var contextMap = <?php echo json_encode($contextMap)?>;
jQuery(document).ready(function() {
	$(".moduleLabel").html("<i class='fa fa-circle text-purple'></i> <i class='fa fa-lightbulb-o'></i> <?php echo addslashes($project["name"]) ?> ");
	//getAjax(".needsPod",baseUrl+"/"+moduleId+"/needs/index/type/<?php echo Project::COLLECTION ?>/id/<?php echo $project["_id"]?>/isAdmin/<?php echo $admin?>",null,"html");
	
	<?php if((@$project["tasks"] && !empty($project["tasks"])) || $admin==true){ ?>
	getAjax(".timesheetphp",baseUrl+"/"+moduleId+"/gantt/index/type/<?php echo Project::COLLECTION ?>/id/<?php echo $project["_id"]?>/isAdmin/<?php echo $admin?>/isDetailView/1",null,"html");
	<?php } ?>

	<?php //if((@$project["links"]["needs"] && !empty($project["links"]["needs"])) || $admin==true){ ?>
	//getAjax(".needsPod",baseUrl+"/"+moduleId+"/needs/index/type/<?php echo Project::COLLECTION ?>/id/<?php echo $project["_id"]?>/isAdmin/<?php echo $admin?>/isDetailView/1",null,"html");
	<?php //} ?>

	<?php if (isset(Yii::app()->session["userId"])) { ?>
	$("#podCooparativeSpace").html("<i class='fa fa-spin fa-refresh text-azure'></i>");
	   		var id = "<?php echo (String) $project['_id']; ?>";
	   		getAjax('#podCooparativeSpace',baseUrl+'/'+moduleId+"/rooms/index/type/projects/id/"+id+"/view/pod",
	   			function(){}, "html");
	<?php } ?>

	Sig.restartMap();
	Sig.showMapElements(Sig.map, contextMap);		
});

</script>