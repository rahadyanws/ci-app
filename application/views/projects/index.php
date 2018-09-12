<h2>Porject index.php</h2>
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
            echo "<td><a href=''>" . $value->project_name . "</a></td>";
            echo "<td>" . $value->project_body . "</td>";
            echo '</tr>';
        }
        ?>
    </tbody>
</table>
