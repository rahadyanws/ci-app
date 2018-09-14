<h2>Project Lists</h2>
<p class="bg-success">
    <?php 
        if ($this->session->flashdata('project_created')):
            echo $this->session->flashdata('project_created');
        endif;
    ?>
</p>
<p class="bg-success">
    <?php 
        if ($this->session->flashdata('project_updated')):
            echo $this->session->flashdata('project_updated');
        endif;
    ?>
</p>
<p class="bg-success">
    <?php 
        if ($this->session->flashdata('project_deleted')):
            echo $this->session->flashdata('project_deleted');
        endif;
    ?>
</p>
<a class="btn btn-primary pull-right" href="<?php echo base_url(); ?>projects/create">Create Project</a>
<table class="table table-hover">
    <thead class="thead-light">
        <tr>
            <th>Project Name</th>
            <th>Project Body</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($projects as $value) {
            echo '<tr>';
            echo "<td><a href='" . base_url() . "projects/display/" . $value->id . "'>" . $value->project_name . "</a></td>";
            echo "<td>" . $value->project_body . "</td>";
            echo '</tr>';
        }
        ?>
    </tbody>
</table>
