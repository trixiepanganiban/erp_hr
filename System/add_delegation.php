<!-- Button to trigger modal -->
<a href="#add_cat" role="button" class="btn btn-info" data-toggle="modal"><i class="fa fa-plus"></i>&nbsp;Add Delegation</a>
<br>
<br>
<!-- Modal -->
<div id="add_cat" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <div class="alert alert-info" style="background-color: rgb(15, 15, 87);">Add Delegation</div>
    </div>
    <div class="modal-body">
        <form class="form-horizontal" method="POST">
            <div class="control-group">
                <label class="control-label" for="inputEmail">Department</label>
                <div class="controls">
                    <input type="text" name="dep" id="inputEmail" placeholder="Location..." required>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputEmail">Employee ID</label>
                <div class="controls">
                    <input type="text" name="emp_id" id="inputEmail" placeholder="Employee..." required>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputEmail">Employee Name</label>
                <div class="controls">
                    <input type="text" name="emp_name" id="inputEmail" placeholder="Employee..." required>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputEmail">Type</label>
                <div class="controls">
                    <input type="radio" id="show" name="type" style="margin-bottom: 5px;">Temporary <input id="hide" style="margin-bottom: 5px;" type="radio" name="type">Permanent
                </div>
            </div>

            <div id="date" hidden>
            <div class="control-group" >
                <label class="control-label" for="inputEmail">Start Date</label>
                <div class="controls">
                    <input type="date" name="sdate" id="inputEmail">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputEmail">End Date</label>
                <div class="controls">
                    <input type="date" name="edate" id="inputEmail">
                </div>
            </div>
            </div>

            <div class="control-group">
                <div class="controls">
                    <button type="submit" name="dele" class="btn btn-info">Save</button>
                </div>
            </div>
        </form>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    </div>
</div>

<?php
$conn=mysqli_connect("localhost","root","","hrm_erp")or die(mysql_error());
if (isset($_POST['dele'])) {
    $cat = $_POST['cat'];

    mysqli_query($conn,"insert into training (employee_id,date_start,date_end) values('$cat')")or die(mysqli_error($conn));
    ?>
    <script>
        window.location = "delegation.php";
    </script>
    <?php
}
?>

<script>
$(document).ready(function(){
    $("#hide").click(function(){
        $("#date").hide();
    });
    $("#show").click(function(){
        $("#date").show();
    });
});
</script>