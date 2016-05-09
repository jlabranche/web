<div class="panel panel-default card task" id="task-{{=task.id}}" data-id="{{=task.id}}">
	<div class="panel-body">
		<div class="task-id">
			<?php echo apply_filters( 'kanban_task_id_before', '' ); ?>

			<div class="task-id-menu">
				<div class="badge" data-toggle="dropdown">
					{{=task.id}}
				</div>
{{current_user_can_write}}
				<ul class="dropdown-menu">
					<li>
						<a href="#" class="delete-task text-danger">
							<?php echo __( 'Delete this task', 'kanban' ); ?>
						</a>
					</li>
					<?php echo apply_filters( 'kanban_card_id_dropdown', '' ); ?>
				</ul>
{{/current_user_can_write}}
			</div>

			<?php echo apply_filters( 'kanban_task_id_after', '' ); ?>
		</div><!-- task-id -->

		<div class="project">
			<input type="text" class="editable-input project_title" data-id="" value="" placeholder="<?php echo __( 'Task project', 'kanban' ); ?>" readonly>
{{current_user_can_write}}
			<ul class="list-group" style="display: none;">
				<li class="list-group-edit">
					<a href="#" class="btn btn-xs btn-edit-projects" data-toggle="modal" data-target="#modal-projects">
						<?php echo __( 'Edit', 'kanban' ); ?>
					</a>
				</li>
			</ul>
{{/current_user_can_write}}
		</div>

		<h3 class="h4 wrapper-task-title">
			<div contenteditable="{{current_user_can_write}}true{{:current_user_can_write}}false{{/current_user_can_write}}" class="task-title">{{=task.title}}</div>
		</h3>
		<h6 class="h6 wrapper-task-description">
			<div contenteditable="{{current_user_can_write}}true{{:current_user_can_write}}false{{/current_user_can_write}}" class="task-description" ng-bind-html>{{=task.description}}</div>
		</h6>

		<?php echo apply_filters( 'kanban_card_after_title', '' ); ?>

		<div class="row row-worked">
			<div class="col col-xs-4 col-task-hours">
				<div class="btn btn-default btn-task-hours">
				</div><!-- btn -->
{{current_user_can_write}}
				<div class="btn-group task-hours-operators">
					<button type="button" class="btn btn-default btn-sm" value="+{{=settings.hour_interval}}">
						<span class="glyphicon glyphicon-plus"></span>
					</button>
					<button type="button" class="btn btn-default btn-sm" value="-{{=settings.hour_interval}}">
						<span class="glyphicon glyphicon-minus"></span>
					</button>
				</div>
{{/current_user_can_write}}
			</div><!-- col -->

			<div class="col col-xs-4 col-assigned-to">
				<div class="btn btn-default btn-assigned-to" data-toggle="dropdown">
				</div>
{{current_user_can_write}}
				<ul class="dropdown-menu dropdown-menu-allowed-users">
				</ul>
{{/current_user_can_write}}
			</div><!-- col -->

			<div class="col col-xs-4 col-estimate">
				<div class="btn btn-default btn-estimate" data-toggle="dropdown">
				</div>
{{current_user_can_write}}
				<ul class="dropdown-menu dropdown-menu-estimates">
				</ul>
{{/current_user_can_write}}
			</div><!-- col -->
		</div><!-- row -->

		<div class="progress">
			<div class="progress-bar  progress-bar-success" style="width: 0%;">
			</div><!-- progress bar -->
		</div><!-- progress -->

	</div><!-- panel body -->

	<div class="task-handle" style="background: {{=task.status_color}};">
	</div>

	<?php echo apply_filters( 'kanban_card_append', '' ); ?>
</div>
