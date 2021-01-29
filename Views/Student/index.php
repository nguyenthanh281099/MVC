<h1>Student</h1>
<div class="row col-md-12 centered">
    <table class="table table-striped custab">
        <thead>
        <a href="/mvc/student/create/" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new student</a>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th class="text-center">Action</th>
        </tr>
        </thead>
        <?php
      // var_dump($student); die();
        foreach ($student as $sv)
        {
            echo '<tr>';
            echo "<td>" . $sv['id'] . "</td>";
            echo "<td>" . $sv['sinhvien_name'] . "</td>";
            echo "<td class='text-center'><a class='btn btn-info btn-xs' href='/mvc/student/edit/" . $sv['id'] . "' >
            <span class='glyphicon glyphicon-edit'></span> Edit</a> <a href='/mvc/student/delete/" . $sv['id'] . "' class='btn btn-danger btn-xs'>
            <span class='glyphicon glyphicon-remove'></span> Del</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>
<!-- /MVC_todo/tasks/create/ -->