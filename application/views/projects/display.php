
<div class="col-xs-9">
    <?php 
        echo "<h1>Project Name: " . $project_data->project_name . "</h1>";
        echo "<p>Date Created: " . $project_data->date_created . "</p>";
        echo "<h3>Description</h3>";
        echo "<p>" .$project_data->project_body. "</p>";
    ?>
</div>
<div class="col-xs-3 pull-right">
    <ul class="list-group">
        <h4>Project Action</h4>
        <li class="list-group-item"><a href="<?php echo base_url();  ?>tasks/create/<?php echo $project_data->id; ?>">Create Task</a></li>
        <li class="list-group-item"><a href="<?php echo base_url();  ?>projects/edit/<?php echo $project_data->id; ?>">Edit Project</a></li>
        <li class="list-group-item"><a href="<?php echo base_url();  ?>projects/delete/<?php echo $project_data->id; ?>">Delete Project</a></li>
    </ul>
</div>