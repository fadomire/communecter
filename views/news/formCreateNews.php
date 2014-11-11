<style>
	.label-info{
		margin-right:4px !important;
		margin-bottom:4px !important;
		font-size:12px !important;
		display:inline-block !important;
	}
	.label-inverse{
		margin-right:4px;
		font-size:12px !important;
	}
	.li-dropdown-scope{
		padding:3px;
	}
</style>
<!-- start: SUBVIEW SAMPLE CONTENTS -->
<!-- *** NEW NOTE *** -->
<div id="newNote" style="display:block;">
	<div class="noteWrap col-md-10 col-md-offset-1">
		
		<h3>Publier un message :</h3>
		<form novalidate="novalidate" class="form-note">
			
			<div class="form-group">
					<label class="control-label"><h4> Titre :</h4></label>
					<input class="form-control" name="noteTitle" placeholder="Votre titre..." type="text" id="title_news">		
			</div>
			<div class="alert alert-info" id="config_dest">
			<div class="form-group">
				<label class="control-label" style="width:100%;">
					<h4 style="max-width:130px; float:left; margin-right:10px;"> Destinataires :</h4> 
					<div id="hashtags_list" style="width:75%;max-width:75%; float:left;"></div>
					<div id="hashtags_list_json"></div>
				
				</label>
				<table>
					<tr> 
					<td style="width:45%;">
											<!-- 			CONTACTS					 -->
					
					<i class="fa fa-navicon"></i><b> Parmis mes contacts : </b></br>
					
					<div class="btn-group">
					<a class="btn btn-blue btn-sm" id="btn_group_contact_contact" href="javascript:showDestInput('contact', 'contact')">
						<i class="fa fa-user"></i>
						Contact
					</a>
					<a class="btn btn-info btn-sm" id="btn_group_contact_groupe" href="javascript:showDestInput('contact', 'groupe')">
						<i class="fa fa-users"></i>
						Groupe
					</a>
					<a class="btn btn-info btn-sm" id="btn_group_contact_tous" href="javascript:showDestInput('contact', 'tous')">
						<i class="fa fa-asterisk"></i>
						Tous
					</a>
					</div>
					<div class="input-group" style="width:250px;">
						<input id="scope_news_contact" placeholder="@contact..." class="form-control input-mask-product" type="text">
						<span class="input-group-btn">
							<button type="button" class="btn btn-blue" id="btn_add_contact" onclick="javascript:addToListDest('contact')">
								<i class="fa fa-plus"></i>
							</button>
						</span>
					</div>
					
					
					<ul class="dropdown-menu" id="dropdown_contact" style="width:250px;">
					<li class="li-dropdown-scope"><a href="javascript:setChoice('@Tristan Goguet', 'contact')">@Tristan Goguet</a></li>
					<li class="li-dropdown-scope"><a href="javascript:setChoice('@Tibor Katelback', 'contact')">@Tibor Katelback</a></li>
					<li class="li-dropdown-scope"><a href="javascript:setChoice('@Houssama Benladen', 'contact')">@Houssama Benladen</a></li>
					</ul>
				</td>
				<td style="width:50%;">
										<!-- 			GEOGRAPIQUE					 -->

				
					<b><i class="fa fa-map-marker"></i> Géographique : </b></br>
					<div class="btn-group">
					<a class="btn btn-info btn-sm" id="btn_group_geo_quartier" href="javascript:showDestInput('geo', 'quartier')">
						<i class="fa fa-home"></i>
						Quartier
					</a>
					<a class="btn btn-blue btn-sm" id="btn_group_geo_ville" href="javascript:showDestInput('geo', 'ville')">
						<i class="fa fa-building"></i>
						Ville
					</a>
					<a class="btn btn-info btn-sm" id="btn_group_geo_departement" href="javascript:showDestInput('geo', 'departement')">
						<i class="fa fa-puzzle-piece"></i>
						Département
					</a>
					<a class="btn btn-info btn-sm" id="btn_group_geo_pays" href="javascript:showDestInput('geo', 'pays')">
						<i class="fa fa-globe"></i>
						Pays
					</a>
					</div>								
					<div class="input-group" style="width:335px;">
						<input id="scope_news_geo" placeholder="@ville" class="form-control input-mask-product" type="text">
						<span class="input-group-btn">
							<button type="button" class="btn btn-blue" id="btn_add_geo" onclick="javascript:addToListDest('geo')">
								<i class="fa fa-plus"></i>
							</button>
						</span>
					</div>
					
					<ul class="dropdown-menu" id="dropdown_geo" style="width:335px; left:45%;">
					<li class="li-dropdown-scope"><a href="javascript:setChoice('@Paris', 'geo')">@Paris</a></li>
					<li class="li-dropdown-scope"><a href="javascript:setChoice('@Pekin', 'geo')">@Pekin</a></li>
					<li class="li-dropdown-scope"><a href="javascript:setChoice('@Houagadougou', 'geo')">@Houagadougou</a></li>
					</ul>
				</td>
				</tr>
				</table>
				</div>
			</div>
			
<!-- 	TEXT EDIT		 -->

			<div class="form-group">
				<textarea id="noteEditor" name="noteEditor" class="hide"></textarea>
				<textarea style="display: none;" class="summernote" placeholder="Write note here..."></textarea>
				<div class="note-editor">
					<div class="note-dropzone">
						<div class="note-dropzone-message">
						</div>
					</div>
					<div class="note-dialog"><div class="note-image-dialog modal" aria-hidden="false"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" aria-hidden="true" tabindex="-1">×</button><h4>Insert Image</h4></div><div class="modal-body"><div class="row-fluid"><h5>Select from files</h5><input class="note-image-input" name="files" accept="image/*" type="file"><h5>Image URL</h5><input class="note-image-url form-control span12" type="text"></div></div><div class="modal-footer"><button href="#" class="btn btn-primary note-image-btn disabled" disabled="disabled">Insert Image</button></div></div></div></div><div class="note-link-dialog modal" aria-hidden="false"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" aria-hidden="true" tabindex="-1">×</button><h4>Insert Link</h4></div><div class="modal-body"><div class="row-fluid"><div class="form-group"><label>Text to display</label><input class="note-link-text form-control span12" disabled="" type="text"></div><div class="form-group"><label>To what URL should this link go?</label><input class="note-link-url form-control span12" type="text"></div><div class="checkbox"><label><input checked="" type="checkbox"> Open in new window</label></div></div></div><div class="modal-footer"><button href="#" class="btn btn-primary note-link-btn disabled" disabled="disabled">Insert Link</button></div></div></div></div><div class="note-video-dialog modal" aria-hidden="false"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" aria-hidden="true" tabindex="-1">×</button><h4>Insert Video</h4></div><div class="modal-body"><div class="row-fluid"><div class="form-group"><label>Video URL?</label>&nbsp;<small class="text-muted">(YouTube, Vimeo, Vine, Instagram, or DailyMotion)</small><input class="note-video-url form-control span12" type="text"></div></div></div><div class="modal-footer"><button href="#" class="btn btn-primary note-video-btn disabled" disabled="disabled">Insert Video</button></div></div></div></div><div class="note-help-dialog modal" aria-hidden="false"><div class="modal-dialog"><div class="modal-content"><div class="modal-body"><a class="modal-close pull-right" aria-hidden="true" tabindex="-1">Close</a><div class="title">Keyboard shortcuts</div><p class="text-center"><a href="//hackerwins.github.io/summernote/" target="_blank">Summernote 0.5.1</a> · <a href="//github.com/HackerWins/summernote" target="_blank">Project</a> · <a href="//github.com/HackerWins/summernote/issues" target="_blank">Issues</a></p><table class="note-shortcut-layout"><tbody><tr><td><table class="note-shortcut"><thead><tr><th></th><th>Action</th></tr></thead><tbody><tr><td>⌘ + Z</td><td>Undo</td></tr><tr><td>⌘ + ⇧ + Z</td><td>Redo</td></tr><tr><td>⌘ + ]</td><td>Indent</td></tr><tr><td>⌘ + [</td><td>Outdent</td></tr><tr><td>⌘ + ENTER</td><td>Insert Horizontal Rule</td></tr></tbody></table></td><td><table class="note-shortcut"><thead><tr><th></th><th>Text formatting</th></tr></thead><tbody><tr><td>⌘ + B</td><td>Bold</td></tr><tr><td>⌘ + I</td><td>Italic</td></tr><tr><td>⌘ + U</td><td>Underline</td></tr><tr><td>⌘ + ⇧ + S</td><td>Strike</td></tr><tr><td>⌘ + \</td><td>Remove Font Style</td></tr></tbody></table></td></tr><tr><td><table class="note-shortcut"><thead><tr><th></th><th>Document Style</th></tr></thead><tbody><tr><td>⌘ + NUM0</td><td>Normal</td></tr><tr><td>⌘ + NUM1</td><td>Header 1</td></tr><tr><td>⌘ + NUM2</td><td>Header 2</td></tr><tr><td>⌘ + NUM3</td><td>Header 3</td></tr><tr><td>⌘ + NUM4</td><td>Header 4</td></tr><tr><td>⌘ + NUM5</td><td>Header 5</td></tr><tr><td>⌘ + NUM6</td><td>Header 6</td></tr></tbody></table></td><td><table class="note-shortcut"><thead><tr><th></th><th>Paragraph formatting</th></tr></thead><tbody><tr><td>⌘ + ⇧ + L</td><td>Align left</td></tr><tr><td>⌘ + ⇧ + E</td><td>Align center</td></tr><tr><td>⌘ + ⇧ + R</td><td>Align right</td></tr><tr><td>⌘ + ⇧ + J</td><td>Justify full</td></tr><tr><td>⌘ + ⇧ + NUM7</td><td>Ordered list</td></tr><tr><td>⌘ + ⇧ + NUM8</td><td>Unordered list</td></tr></tbody></table></td></tr></tbody></table></div></div></div></div></div><div class="note-handle"><div style="display: none;" class="note-control-selection"><div class="note-control-selection-bg"></div><div class="note-control-holder note-control-nw"></div><div class="note-control-holder note-control-ne"></div><div class="note-control-holder note-control-sw"></div><div class="note-control-sizing note-control-se"></div><div class="note-control-selection-info"></div></div></div><div class="note-popover"><div class="note-link-popover popover bottom in" style="display: none;"><div class="arrow"></div><div class="popover-content note-link-content"><a href="http://www.google.com" target="_blank">www.google.com</a>&nbsp;&nbsp;<div class="note-insert btn-group"><button data-original-title="Edit" type="button" class="btn btn-default btn-sm btn-small" title="" data-event="showLinkDialog" tabindex="-1"><i class="fa fa-edit icon-edit"></i></button><button data-original-title="Unlink" type="button" class="btn btn-default btn-sm btn-small" title="" data-event="unlink" tabindex="-1"><i class="fa fa-unlink icon-unlink"></i></button></div></div></div><div class="note-image-popover popover bottom in" style="display: none;"><div class="arrow"></div><div class="popover-content note-image-content"><div class="btn-group"><button data-original-title="Resize Full" type="button" class="btn btn-default btn-sm btn-small" title="" data-event="resize" data-value="1" tabindex="-1"><span class="note-fontsize-10">100%</span> </button><button data-original-title="Resize Half" type="button" class="btn btn-default btn-sm btn-small" title="" data-event="resize" data-value="0.5" tabindex="-1"><span class="note-fontsize-10">50%</span> </button><button data-original-title="Resize Quarter" type="button" class="btn btn-default btn-sm btn-small" title="" data-event="resize" data-value="0.25" tabindex="-1"><span class="note-fontsize-10">25%</span> </button></div><div class="btn-group"><button data-original-title="Float Left" type="button" class="btn btn-default btn-sm btn-small" title="" data-event="floatMe" data-value="left" tabindex="-1"><i class="fa fa-align-left icon-align-left"></i></button><button data-original-title="Float Right" type="button" class="btn btn-default btn-sm btn-small" title="" data-event="floatMe" data-value="right" tabindex="-1"><i class="fa fa-align-right icon-align-right"></i></button><button data-original-title="Float None" type="button" class="btn btn-default btn-sm btn-small" title="" data-event="floatMe" data-value="none" tabindex="-1"><i class="fa fa-align-justify icon-align-justify"></i></button></div><div class="btn-group"><button data-original-title="Remove Image" type="button" class="btn btn-default btn-sm btn-small" title="" data-event="removeMedia" data-value="none" tabindex="-1"><i class="fa fa-trash-o icon-trash"></i></button></div></div></div></div><div class="note-toolbar btn-toolbar"><div class="note-style btn-group"><button data-original-title="Bold (⌘+B)" type="button" class="btn btn-default btn-sm btn-small" title="" data-shortcut="Ctrl+B" data-mac-shortcut="⌘+B" data-event="bold" tabindex="-1"><i class="fa fa-bold icon-bold"></i></button><button data-original-title="Italic (⌘+I)" type="button" class="btn btn-default btn-sm btn-small" title="" data-shortcut="Ctrl+I" data-mac-shortcut="⌘+I" data-event="italic" tabindex="-1"><i class="fa fa-italic icon-italic"></i></button><button data-original-title="Underline (⌘+U)" type="button" class="btn btn-default btn-sm btn-small" title="" data-shortcut="Ctrl+U" data-mac-shortcut="⌘+U" data-event="underline" tabindex="-1"><i class="fa fa-underline icon-underline"></i></button><button data-original-title="Remove Font Style (⌘+\)" type="button" class="btn btn-default btn-sm btn-small" title="" data-shortcut="Ctrl+\" data-mac-shortcut="⌘+\" data-event="removeFormat" tabindex="-1"><i class="fa fa-eraser icon-eraser"></i></button></div><div class="note-color btn-group"><button data-original-title="Recent Color" type="button" class="btn btn-default btn-sm btn-small note-recent-color" title="" data-event="color" data-value="{&quot;backColor&quot;:&quot;yellow&quot;}" tabindex="-1"><i class="fa fa-font icon-font" style="color:black;background-color:yellow;"></i></button><button data-original-title="More Color" type="button" class="btn btn-default btn-sm btn-small dropdown-toggle" title="" data-toggle="dropdown" tabindex="-1"><span class="caret"></span></button><ul class="dropdown-menu"><li><div class="btn-group"><div class="note-palette-title">BackColor</div><div class="note-color-reset" data-event="backColor" data-value="inherit" title="Transparent">Set transparent</div><div class="note-color-palette" data-target-event="backColor"><div><button data-original-title="#000000" type="button" class="note-color-btn" style="background-color:#000000;" data-event="backColor" data-value="#000000" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#424242" type="button" class="note-color-btn" style="background-color:#424242;" data-event="backColor" data-value="#424242" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#636363" type="button" class="note-color-btn" style="background-color:#636363;" data-event="backColor" data-value="#636363" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#9C9C94" type="button" class="note-color-btn" style="background-color:#9C9C94;" data-event="backColor" data-value="#9C9C94" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#CEC6CE" type="button" class="note-color-btn" style="background-color:#CEC6CE;" data-event="backColor" data-value="#CEC6CE" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#EFEFEF" type="button" class="note-color-btn" style="background-color:#EFEFEF;" data-event="backColor" data-value="#EFEFEF" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#F7F7F7" type="button" class="note-color-btn" style="background-color:#F7F7F7;" data-event="backColor" data-value="#F7F7F7" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#FFFFFF" type="button" class="note-color-btn" style="background-color:#FFFFFF;" data-event="backColor" data-value="#FFFFFF" title="" data-toggle="button" tabindex="-1"></button></div><div><button data-original-title="#FF0000" type="button" class="note-color-btn" style="background-color:#FF0000;" data-event="backColor" data-value="#FF0000" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#FF9C00" type="button" class="note-color-btn" style="background-color:#FF9C00;" data-event="backColor" data-value="#FF9C00" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#FFFF00" type="button" class="note-color-btn" style="background-color:#FFFF00;" data-event="backColor" data-value="#FFFF00" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#00FF00" type="button" class="note-color-btn" style="background-color:#00FF00;" data-event="backColor" data-value="#00FF00" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#00FFFF" type="button" class="note-color-btn" style="background-color:#00FFFF;" data-event="backColor" data-value="#00FFFF" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#0000FF" type="button" class="note-color-btn" style="background-color:#0000FF;" data-event="backColor" data-value="#0000FF" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#9C00FF" type="button" class="note-color-btn" style="background-color:#9C00FF;" data-event="backColor" data-value="#9C00FF" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#FF00FF" type="button" class="note-color-btn" style="background-color:#FF00FF;" data-event="backColor" data-value="#FF00FF" title="" data-toggle="button" tabindex="-1"></button></div><div><button data-original-title="#F7C6CE" type="button" class="note-color-btn" style="background-color:#F7C6CE;" data-event="backColor" data-value="#F7C6CE" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#FFE7CE" type="button" class="note-color-btn" style="background-color:#FFE7CE;" data-event="backColor" data-value="#FFE7CE" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#FFEFC6" type="button" class="note-color-btn" style="background-color:#FFEFC6;" data-event="backColor" data-value="#FFEFC6" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#D6EFD6" type="button" class="note-color-btn" style="background-color:#D6EFD6;" data-event="backColor" data-value="#D6EFD6" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#CEDEE7" type="button" class="note-color-btn" style="background-color:#CEDEE7;" data-event="backColor" data-value="#CEDEE7" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#CEE7F7" type="button" class="note-color-btn" style="background-color:#CEE7F7;" data-event="backColor" data-value="#CEE7F7" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#D6D6E7" type="button" class="note-color-btn" style="background-color:#D6D6E7;" data-event="backColor" data-value="#D6D6E7" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#E7D6DE" type="button" class="note-color-btn" style="background-color:#E7D6DE;" data-event="backColor" data-value="#E7D6DE" title="" data-toggle="button" tabindex="-1"></button></div><div><button data-original-title="#E79C9C" type="button" class="note-color-btn" style="background-color:#E79C9C;" data-event="backColor" data-value="#E79C9C" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#FFC69C" type="button" class="note-color-btn" style="background-color:#FFC69C;" data-event="backColor" data-value="#FFC69C" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#FFE79C" type="button" class="note-color-btn" style="background-color:#FFE79C;" data-event="backColor" data-value="#FFE79C" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#B5D6A5" type="button" class="note-color-btn" style="background-color:#B5D6A5;" data-event="backColor" data-value="#B5D6A5" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#A5C6CE" type="button" class="note-color-btn" style="background-color:#A5C6CE;" data-event="backColor" data-value="#A5C6CE" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#9CC6EF" type="button" class="note-color-btn" style="background-color:#9CC6EF;" data-event="backColor" data-value="#9CC6EF" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#B5A5D6" type="button" class="note-color-btn" style="background-color:#B5A5D6;" data-event="backColor" data-value="#B5A5D6" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#D6A5BD" type="button" class="note-color-btn" style="background-color:#D6A5BD;" data-event="backColor" data-value="#D6A5BD" title="" data-toggle="button" tabindex="-1"></button></div><div><button data-original-title="#E76363" type="button" class="note-color-btn" style="background-color:#E76363;" data-event="backColor" data-value="#E76363" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#F7AD6B" type="button" class="note-color-btn" style="background-color:#F7AD6B;" data-event="backColor" data-value="#F7AD6B" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#FFD663" type="button" class="note-color-btn" style="background-color:#FFD663;" data-event="backColor" data-value="#FFD663" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#94BD7B" type="button" class="note-color-btn" style="background-color:#94BD7B;" data-event="backColor" data-value="#94BD7B" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#73A5AD" type="button" class="note-color-btn" style="background-color:#73A5AD;" data-event="backColor" data-value="#73A5AD" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#6BADDE" type="button" class="note-color-btn" style="background-color:#6BADDE;" data-event="backColor" data-value="#6BADDE" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#8C7BC6" type="button" class="note-color-btn" style="background-color:#8C7BC6;" data-event="backColor" data-value="#8C7BC6" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#C67BA5" type="button" class="note-color-btn" style="background-color:#C67BA5;" data-event="backColor" data-value="#C67BA5" title="" data-toggle="button" tabindex="-1"></button></div><div><button data-original-title="#CE0000" type="button" class="note-color-btn" style="background-color:#CE0000;" data-event="backColor" data-value="#CE0000" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#E79439" type="button" class="note-color-btn" style="background-color:#E79439;" data-event="backColor" data-value="#E79439" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#EFC631" type="button" class="note-color-btn" style="background-color:#EFC631;" data-event="backColor" data-value="#EFC631" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#6BA54A" type="button" class="note-color-btn" style="background-color:#6BA54A;" data-event="backColor" data-value="#6BA54A" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#4A7B8C" type="button" class="note-color-btn" style="background-color:#4A7B8C;" data-event="backColor" data-value="#4A7B8C" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#3984C6" type="button" class="note-color-btn" style="background-color:#3984C6;" data-event="backColor" data-value="#3984C6" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#634AA5" type="button" class="note-color-btn" style="background-color:#634AA5;" data-event="backColor" data-value="#634AA5" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#A54A7B" type="button" class="note-color-btn" style="background-color:#A54A7B;" data-event="backColor" data-value="#A54A7B" title="" data-toggle="button" tabindex="-1"></button></div><div><button data-original-title="#9C0000" type="button" class="note-color-btn" style="background-color:#9C0000;" data-event="backColor" data-value="#9C0000" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#B56308" type="button" class="note-color-btn" style="background-color:#B56308;" data-event="backColor" data-value="#B56308" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#BD9400" type="button" class="note-color-btn" style="background-color:#BD9400;" data-event="backColor" data-value="#BD9400" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#397B21" type="button" class="note-color-btn" style="background-color:#397B21;" data-event="backColor" data-value="#397B21" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#104A5A" type="button" class="note-color-btn" style="background-color:#104A5A;" data-event="backColor" data-value="#104A5A" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#085294" type="button" class="note-color-btn" style="background-color:#085294;" data-event="backColor" data-value="#085294" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#311873" type="button" class="note-color-btn" style="background-color:#311873;" data-event="backColor" data-value="#311873" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#731842" type="button" class="note-color-btn" style="background-color:#731842;" data-event="backColor" data-value="#731842" title="" data-toggle="button" tabindex="-1"></button></div><div><button data-original-title="#630000" type="button" class="note-color-btn" style="background-color:#630000;" data-event="backColor" data-value="#630000" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#7B3900" type="button" class="note-color-btn" style="background-color:#7B3900;" data-event="backColor" data-value="#7B3900" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#846300" type="button" class="note-color-btn" style="background-color:#846300;" data-event="backColor" data-value="#846300" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#295218" type="button" class="note-color-btn" style="background-color:#295218;" data-event="backColor" data-value="#295218" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#083139" type="button" class="note-color-btn" style="background-color:#083139;" data-event="backColor" data-value="#083139" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#003163" type="button" class="note-color-btn" style="background-color:#003163;" data-event="backColor" data-value="#003163" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#21104A" type="button" class="note-color-btn" style="background-color:#21104A;" data-event="backColor" data-value="#21104A" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#4A1031" type="button" class="note-color-btn" style="background-color:#4A1031;" data-event="backColor" data-value="#4A1031" title="" data-toggle="button" tabindex="-1"></button></div></div></div><div class="btn-group"><div class="note-palette-title">FontColor</div><div class="note-color-reset" data-event="foreColor" data-value="inherit" title="Reset">Reset to default</div><div class="note-color-palette" data-target-event="foreColor"><div><button data-original-title="#000000" type="button" class="note-color-btn" style="background-color:#000000;" data-event="foreColor" data-value="#000000" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#424242" type="button" class="note-color-btn" style="background-color:#424242;" data-event="foreColor" data-value="#424242" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#636363" type="button" class="note-color-btn" style="background-color:#636363;" data-event="foreColor" data-value="#636363" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#9C9C94" type="button" class="note-color-btn" style="background-color:#9C9C94;" data-event="foreColor" data-value="#9C9C94" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#CEC6CE" type="button" class="note-color-btn" style="background-color:#CEC6CE;" data-event="foreColor" data-value="#CEC6CE" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#EFEFEF" type="button" class="note-color-btn" style="background-color:#EFEFEF;" data-event="foreColor" data-value="#EFEFEF" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#F7F7F7" type="button" class="note-color-btn" style="background-color:#F7F7F7;" data-event="foreColor" data-value="#F7F7F7" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#FFFFFF" type="button" class="note-color-btn" style="background-color:#FFFFFF;" data-event="foreColor" data-value="#FFFFFF" title="" data-toggle="button" tabindex="-1"></button></div><div><button data-original-title="#FF0000" type="button" class="note-color-btn" style="background-color:#FF0000;" data-event="foreColor" data-value="#FF0000" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#FF9C00" type="button" class="note-color-btn" style="background-color:#FF9C00;" data-event="foreColor" data-value="#FF9C00" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#FFFF00" type="button" class="note-color-btn" style="background-color:#FFFF00;" data-event="foreColor" data-value="#FFFF00" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#00FF00" type="button" class="note-color-btn" style="background-color:#00FF00;" data-event="foreColor" data-value="#00FF00" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#00FFFF" type="button" class="note-color-btn" style="background-color:#00FFFF;" data-event="foreColor" data-value="#00FFFF" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#0000FF" type="button" class="note-color-btn" style="background-color:#0000FF;" data-event="foreColor" data-value="#0000FF" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#9C00FF" type="button" class="note-color-btn" style="background-color:#9C00FF;" data-event="foreColor" data-value="#9C00FF" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#FF00FF" type="button" class="note-color-btn" style="background-color:#FF00FF;" data-event="foreColor" data-value="#FF00FF" title="" data-toggle="button" tabindex="-1"></button></div><div><button data-original-title="#F7C6CE" type="button" class="note-color-btn" style="background-color:#F7C6CE;" data-event="foreColor" data-value="#F7C6CE" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#FFE7CE" type="button" class="note-color-btn" style="background-color:#FFE7CE;" data-event="foreColor" data-value="#FFE7CE" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#FFEFC6" type="button" class="note-color-btn" style="background-color:#FFEFC6;" data-event="foreColor" data-value="#FFEFC6" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#D6EFD6" type="button" class="note-color-btn" style="background-color:#D6EFD6;" data-event="foreColor" data-value="#D6EFD6" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#CEDEE7" type="button" class="note-color-btn" style="background-color:#CEDEE7;" data-event="foreColor" data-value="#CEDEE7" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#CEE7F7" type="button" class="note-color-btn" style="background-color:#CEE7F7;" data-event="foreColor" data-value="#CEE7F7" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#D6D6E7" type="button" class="note-color-btn" style="background-color:#D6D6E7;" data-event="foreColor" data-value="#D6D6E7" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#E7D6DE" type="button" class="note-color-btn" style="background-color:#E7D6DE;" data-event="foreColor" data-value="#E7D6DE" title="" data-toggle="button" tabindex="-1"></button></div><div><button data-original-title="#E79C9C" type="button" class="note-color-btn" style="background-color:#E79C9C;" data-event="foreColor" data-value="#E79C9C" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#FFC69C" type="button" class="note-color-btn" style="background-color:#FFC69C;" data-event="foreColor" data-value="#FFC69C" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#FFE79C" type="button" class="note-color-btn" style="background-color:#FFE79C;" data-event="foreColor" data-value="#FFE79C" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#B5D6A5" type="button" class="note-color-btn" style="background-color:#B5D6A5;" data-event="foreColor" data-value="#B5D6A5" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#A5C6CE" type="button" class="note-color-btn" style="background-color:#A5C6CE;" data-event="foreColor" data-value="#A5C6CE" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#9CC6EF" type="button" class="note-color-btn" style="background-color:#9CC6EF;" data-event="foreColor" data-value="#9CC6EF" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#B5A5D6" type="button" class="note-color-btn" style="background-color:#B5A5D6;" data-event="foreColor" data-value="#B5A5D6" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#D6A5BD" type="button" class="note-color-btn" style="background-color:#D6A5BD;" data-event="foreColor" data-value="#D6A5BD" title="" data-toggle="button" tabindex="-1"></button></div><div><button data-original-title="#E76363" type="button" class="note-color-btn" style="background-color:#E76363;" data-event="foreColor" data-value="#E76363" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#F7AD6B" type="button" class="note-color-btn" style="background-color:#F7AD6B;" data-event="foreColor" data-value="#F7AD6B" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#FFD663" type="button" class="note-color-btn" style="background-color:#FFD663;" data-event="foreColor" data-value="#FFD663" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#94BD7B" type="button" class="note-color-btn" style="background-color:#94BD7B;" data-event="foreColor" data-value="#94BD7B" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#73A5AD" type="button" class="note-color-btn" style="background-color:#73A5AD;" data-event="foreColor" data-value="#73A5AD" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#6BADDE" type="button" class="note-color-btn" style="background-color:#6BADDE;" data-event="foreColor" data-value="#6BADDE" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#8C7BC6" type="button" class="note-color-btn" style="background-color:#8C7BC6;" data-event="foreColor" data-value="#8C7BC6" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#C67BA5" type="button" class="note-color-btn" style="background-color:#C67BA5;" data-event="foreColor" data-value="#C67BA5" title="" data-toggle="button" tabindex="-1"></button></div><div><button data-original-title="#CE0000" type="button" class="note-color-btn" style="background-color:#CE0000;" data-event="foreColor" data-value="#CE0000" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#E79439" type="button" class="note-color-btn" style="background-color:#E79439;" data-event="foreColor" data-value="#E79439" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#EFC631" type="button" class="note-color-btn" style="background-color:#EFC631;" data-event="foreColor" data-value="#EFC631" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#6BA54A" type="button" class="note-color-btn" style="background-color:#6BA54A;" data-event="foreColor" data-value="#6BA54A" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#4A7B8C" type="button" class="note-color-btn" style="background-color:#4A7B8C;" data-event="foreColor" data-value="#4A7B8C" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#3984C6" type="button" class="note-color-btn" style="background-color:#3984C6;" data-event="foreColor" data-value="#3984C6" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#634AA5" type="button" class="note-color-btn" style="background-color:#634AA5;" data-event="foreColor" data-value="#634AA5" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#A54A7B" type="button" class="note-color-btn" style="background-color:#A54A7B;" data-event="foreColor" data-value="#A54A7B" title="" data-toggle="button" tabindex="-1"></button></div><div><button data-original-title="#9C0000" type="button" class="note-color-btn" style="background-color:#9C0000;" data-event="foreColor" data-value="#9C0000" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#B56308" type="button" class="note-color-btn" style="background-color:#B56308;" data-event="foreColor" data-value="#B56308" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#BD9400" type="button" class="note-color-btn" style="background-color:#BD9400;" data-event="foreColor" data-value="#BD9400" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#397B21" type="button" class="note-color-btn" style="background-color:#397B21;" data-event="foreColor" data-value="#397B21" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#104A5A" type="button" class="note-color-btn" style="background-color:#104A5A;" data-event="foreColor" data-value="#104A5A" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#085294" type="button" class="note-color-btn" style="background-color:#085294;" data-event="foreColor" data-value="#085294" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#311873" type="button" class="note-color-btn" style="background-color:#311873;" data-event="foreColor" data-value="#311873" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#731842" type="button" class="note-color-btn" style="background-color:#731842;" data-event="foreColor" data-value="#731842" title="" data-toggle="button" tabindex="-1"></button></div><div><button data-original-title="#630000" type="button" class="note-color-btn" style="background-color:#630000;" data-event="foreColor" data-value="#630000" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#7B3900" type="button" class="note-color-btn" style="background-color:#7B3900;" data-event="foreColor" data-value="#7B3900" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#846300" type="button" class="note-color-btn" style="background-color:#846300;" data-event="foreColor" data-value="#846300" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#295218" type="button" class="note-color-btn" style="background-color:#295218;" data-event="foreColor" data-value="#295218" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#083139" type="button" class="note-color-btn" style="background-color:#083139;" data-event="foreColor" data-value="#083139" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#003163" type="button" class="note-color-btn" style="background-color:#003163;" data-event="foreColor" data-value="#003163" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#21104A" type="button" class="note-color-btn" style="background-color:#21104A;" data-event="foreColor" data-value="#21104A" title="" data-toggle="button" tabindex="-1"></button><button data-original-title="#4A1031" type="button" class="note-color-btn" style="background-color:#4A1031;" data-event="foreColor" data-value="#4A1031" title="" data-toggle="button" tabindex="-1"></button></div></div></div></li></ul></div><div class="note-para btn-group"><button data-original-title="Unordered list (⌘+⇧+7)" type="button" class="btn btn-default btn-sm btn-small" title="" data-shortcut="Ctrl+Shift+8" data-mac-shortcut="⌘+⇧+7" data-event="insertUnorderedList" tabindex="-1"><i class="fa fa-list-ul icon-list-ul"></i></button><button data-original-title="Ordered list (⌘+⇧+8)" type="button" class="btn btn-default btn-sm btn-small" title="" data-shortcut="Ctrl+Shift+7" data-mac-shortcut="⌘+⇧+8" data-event="insertOrderedList" tabindex="-1"><i class="fa fa-list-ol icon-list-ol"></i></button><button data-original-title="Paragraph" type="button" class="btn btn-default btn-sm btn-small dropdown-toggle" title="" data-toggle="dropdown" tabindex="-1"><i class="fa fa-align-left icon-align-left"></i>  <span class="caret"></span></button><div class="dropdown-menu"><div class="note-align btn-group"><button data-original-title="Align left (⌘+⇧+L)" type="button" class="btn btn-default btn-sm btn-small active" title="" data-shortcut="Ctrl+Shift+L" data-mac-shortcut="⌘+⇧+L" data-event="justifyLeft" tabindex="-1"><i class="fa fa-align-left icon-align-left"></i></button><button data-original-title="Align center (⌘+⇧+E)" type="button" class="btn btn-default btn-sm btn-small" title="" data-shortcut="Ctrl+Shift+E" data-mac-shortcut="⌘+⇧+E" data-event="justifyCenter" tabindex="-1"><i class="fa fa-align-center icon-align-center"></i></button><button data-original-title="Align right (⌘+⇧+R)" type="button" class="btn btn-default btn-sm btn-small" title="" data-shortcut="Ctrl+Shift+R" data-mac-shortcut="⌘+⇧+R" data-event="justifyRight" tabindex="-1"><i class="fa fa-align-right icon-align-right"></i></button><button data-original-title="Justify full (⌘+⇧+J)" type="button" class="btn btn-default btn-sm btn-small" title="" data-shortcut="Ctrl+Shift+J" data-mac-shortcut="⌘+⇧+J" data-event="justifyFull" tabindex="-1"><i class="fa fa-align-justify icon-align-justify"></i></button></div><div class="note-list btn-group"><button data-original-title="Outdent (⌘+[)" type="button" class="btn btn-default btn-sm btn-small" title="" data-shortcut="Ctrl+[" data-mac-shortcut="⌘+[" data-event="outdent" tabindex="-1"><i class="fa fa-outdent icon-indent-left"></i></button><button data-original-title="Indent (⌘+])" type="button" class="btn btn-default btn-sm btn-small" title="" data-shortcut="Ctrl+]" data-mac-shortcut="⌘+]" data-event="indent" tabindex="-1"><i class="fa fa-indent icon-indent-right"></i></button></div></div></div></div>
					<textarea class="note-codable"></textarea>
					<div class="note-editable" contenteditable="true" id="txt_news"></div>
				</div>
			</div>
			
			<div class="pull-right">
				<div class="btn-group">
					<a href="javascript:showData()" class="btn btn-info close-subview-button">
						Close
					</a>
				</div>
				<div class="btn-group">
					<button class="btn btn-info save-note" type="submit">
						Save
					</button>
				</div>
			</div>
		</form>
	
	</div>
</div>

<script type="text/javascript">

$(document).ready( function() 
{ 	
	// ------- CONTACT + GEO
	function initDestTools(type){
		$("#scope_news_"+type).focusout( function (){
			//$("#dropdown_"+type).css({"display" : "none" });
		});
		$("#scope_news_"+type).focus( function (){
			$("#dropdown_"+type).css({"display" : "block" });
		});
		$("#scope_news_"+type).click( function (){
			if($("#scope_news_"+type).val() == "")
			$("#scope_news_"+type).val("@");
		});
		$("#scope_news_"+type).keyup( function (){
			var length = $("#scope_news_"+type).val().length;
			if(length == 0){
				$("#scope_news_"+type).val("@");
			}
			if(length <= 1){
				if($("#dropdown_"+type).css("display") != "none")
				$("#dropdown_"+type).css({"display" : "none" });
			}
			if(length > 1){
				if($("#dropdown_"+type).css("display") != "block")
				$("#dropdown_"+type).css({"display" : "block" });
			}
			if(length == 4){
				//alert("lancement de la recherche en BD");	
				findPlace();
			}
			$("#btn_add_"+type).removeClass('btn-green').addClass('btn-blue');
			
			
		});
	}
	
	initDestTools("contact");
	initDestTools("geo");
		
});


	//ON_CLICK_BUTTON + 
	var HASHTAGS_LIST = new Array();
	function addToListDest(type){
		//vérifie que le bouton + est activé (= vert)
		if( $("#btn_add_" + type).attr('class') != "btn btn-green" ) return;
		
		//récupère le contenu du champs de texte
		var value = $("#scope_news_" + type).val(); //alert(value);
		
		//récupère l'icon correspondant au type de scope choisi (contact, groupe, departement, etc)
		var ico = getIcoScope(typeSelected[type]); //alert(ico);
		
		//memorise le hashtag
		HASHTAGS_LIST.push({"value" : value, "type" : typeSelected[type]});
		$("#hashtags_list_json").html(JSON.stringify(HASHTAGS_LIST));		
		
		//rajoute l'élément dans la liste des destinataires
		$("#hashtags_list").append("<span class='label label-info'><i class='fa fa-"+ ico +"'></i> " + value + "</span>");
	}
	
	//ON CLICK ELEMENT LIST
	function setChoice(value, type){
		//remplace le contenu du champs de texte
		$("#scope_news_" + type).val(value);
		
		//ferme la liste déroulante
		$("#dropdown_" + type).css({"display" : "none" });
		
		//change la couleur du bouton + ("ajouter") en vert
		activateBtnAdd(true, type);
	}
	
	function activateBtnAdd(bool, type){
		//affiche le bouton + en vert = prêt à valider / ajouter à la liste des destinataires
		if(bool){ $("#btn_add_" + type).removeClass('btn-blue').addClass('btn-green'); }
		//ou affiche en bleu = desactivé
		else 	{ $("#btn_add_" + type).removeClass('btn-green').addClass('btn-blue'); }
	}
	

	var typeSelected = new Array("contact", "geo");
	typeSelected["contact"] = "contact";
	typeSelected["geo"] = "ville";
	
	//ON CLICK BTN_GROUP type = CONTACT/GEO, val |= contact, groupe, tous, quartier, ville, departement, pays
	function showDestInput(type, val){
	
		//raz champs texte
		$("#scope_news_" + type).val("");
		$("#scope_news_" + type).attr("placeholder", "@" + val);
		
		$("#btn_group_" + type + "_" + typeSelected[type]).removeClass('btn-blue').addClass('btn-info');
		$("#btn_group_" + type + "_" + val).removeClass('btn-info').addClass('btn-blue');
		
		//masque la dropdown
		if($("#dropdown_"+type).css("display") != "none")
		$("#dropdown_"+type).css({"display" : "none" });
		
		//memorise le nouveau choix (dans le tableau qui correspond à Contact ou Geo (type))
		typeSelected[type] = val;
				
		if(type == "contact"){
			if(val == "contact"){
			}
			if(val == "groupe"){
			}
			if(val == "tous"){
			}
			
		}
		else if(type == "geo"){
			if(val == "quartier"){
			}
			if(val == "ville"){
			}
			if(val == "departement"){
			}
			if(val == "region"){
			}
			if(val == "pays"){
			}
			
		}
	}
	
	var listIcoScope = {	"contact" 		: "user",
							"groupe" 		: "users",
							"tous" 			: "asterisk",
							"quartier"  	: "home",
							"ville" 		: "building",
							"departement" 	: "puzzle-piece",
							"pays" 			: "globe" };
							
	function getIcoScope(value){
		return listIcoScope[value];
	}
	
	function searchElementDropdown(){
	
	}
	
	function findPlace(){
	var lieu = $("#scope_news_geo".val();
	var type = typeSelected["geo"];
	var request = "";
	
	if(type == "ville") request = "city : " + lieu;
	if(type == "departement") request = "county : " + lieu;
	if(type == "pays") request = "country : " + lieu;
	
	alert(request);
	//request += "countrycodes=fr&limit=5";
	//var url = "search?q=135+pilkington+avenue,+birmingham&format=json&polygon=1&addressdetails=1";
	$.ajax({
		url: "http://nominatim.openstreetmap.org/search?" + request + "&format=json&polygon=0&addressdetails=1",
		type: 'POST',
		//data: { 'htmlViewType': htmlViewType },
		complete: function () { },
		success: function (obj) { alert(JSON.stringify(obj));
		if (obj.length > 0) {
			//document.getElementById('LblError').innerHTML = obj[0].display_name;
			alert(obj[0].address.city + " - " + obj[0].lat);
			//var markerslonLat = new OpenLayers.LonLat(obj[0].lon, obj[0].lat).transform(WGS84, map.getProjectionObject(), 0);
			//map.setCenter(markerslonLat, 10);
			//var icon = new OpenLayers.Icon('http://www.openlayers.org/dev/img/marker.png', size, offset);
			//var icon = new OpenLayers.Icon(' http://maps.google.com/mapfiles/ms/micons/blue.png', size, offset);
			//markers.addMarker(new OpenLayers.Marker(markerslonLat, icon));
			//map.addLayer(markers);
		}
		else {
			alert('no such address.');
		}
		},
		error: function (error) {
		alert(error);
		}
		});
	}
	
</script>