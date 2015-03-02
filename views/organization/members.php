<div id="panel_members" class="tab-pane fade">

	<div class="col-md-12 padding-20 pull-right">
		<a href="javascript:;" onclick="openSubView('Add Members', '/communecter/organization/addMembers/id/<?php echo (string)$organization['_id']?>',null)" class="btn btn-xs btn-light-blue tooltips pull-right" data-placement="top" data-original-title="Edit"><i class="fa fa-plus"></i> Connect Members</a>
	</div>

	<h1>List of Members</h1>
    <p>An Organization can have People members</p>
    
    <table class="table table-striped table-bordered table-hover" id="members">
		<thead>
			<tr>
				<th>Name</th>
				<th class="hidden-xs">Type</th>
				<th class="hidden-xs center">Email</th>
				<th>To be Activated</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<?php
			if(isset($organization["members"]) && isset($organization["members"]["persons"])){
			foreach ($organization["members"]["persons"] as $id) 
			{
				$e = Person::getById($id);
			?>
			<tr id="person<?php echo $id;?>">
				<td><?php if(isset($e["name"]))echo $e["name"]?></td>
				<td><?php if(isset($e["type"]))echo $e["type"]?></td>
				<td><?php if(isset($e["email"]))echo $e["email"]?></td>
				<td><?php if(isset($e["tobeactivated"]))echo "true"?></td>
				<td class="center">
				<div class="visible-md visible-lg hidden-sm hidden-xs">
					<a href="#" class="btn btn-light-blue tooltips editBtn" data-id="<?php echo $id;?>" data-placement="top" data-original-title="Edit"><i class="fa fa-edit"></i></a>
					<a href="#" class="btn btn-red tooltips delBtn" data-id="<?php echo $id;?>" data-name="<?php echo (string)$e["name"];?>" data-placement="top" data-original-title="Remove"><i class="fa fa-times fa fa-white"></i></a>
				</div>
				</td>
			</tr>
			<?php
			}
		}
			?>
		</tbody>
	</table>
</div>