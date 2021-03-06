<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_dasboard.php') ?>

    <div class="row">   
        <div class="span2">
            <?php include('sidebar.php'); ?>
        </div>
        <div class="span11"><br>
            
            <div class="alert alert-info" style="background-color: skyblue; color: white;">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong><i class="fa fa-book"></i>&nbsp;Leaves Table</strong>
            </div>
            <?php include('add_leaves.php'); ?>
            <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">

                <thead>
                    <tr>
                        <th>Employee ID</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Reason</th>
                        <th>Department Approval</th>
                        <th>Hr Supervisor Approval</th>
                        <th>Head HR Approval</th>                            
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php

                    $emp_query = mysqli_query($conn,"select * from employee where id = $session_id")or die(mysql_error());
                    $row_emp = mysqli_fetch_array($emp_query);
                    $emp=$row_emp['employee_id'];

                    $lev_query = mysqli_query($conn,"select * from leaves where employee_id = '$emp' ")or die(mysql_error());
                    while ($row_lev = mysqli_fetch_array($lev_query)) {
                        $id = $row_lev['id'];
                        $emp_id = $row_lev['employee_id'];

                        ?>
                        <tr class="del<?php echo $id ?>">
                            <td><?php echo $row_lev['employee_id']; ?></td>
                            <td><?php echo $row_lev['date_start']; ?></td>
                            <td><?php echo $row_lev['date_end']; ?></td>
                            <td><?php echo $row_lev['reason']?></td>
                            <td><?php echo $row_lev['dep_status']; ?></td>
                            <td><?php echo $row_lev['hr_status']; ?></td>
                            <td><?php echo $row_lev['headhr_status']; ?></td>
                            <td width="100">
                                <a rel="tooltip"  title="Delete" id="<?php echo $id; ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php } ?>

                </tbody>
            </table>

            <script type="text/javascript">
                $(document).ready(function() {
                    $('.btn-danger').click(function() {
                        var id = $(this).attr("id");
                        if (confirm("Are you sure you want to delete this Data?")) {
                            $.ajax({
                                type: "POST",
                                url: "delete_leave.php",
                                data: ({id: id}),
                                cache: false,
                                success: function(html) {
                                    $(".del" + id).fadeOut('slow');
                                }
                            });
                        } else {
                            return false;
                        }
                    });
                });
            </script>

        </div>
    </div>
<!-- <?php include('footer.php') ?> -->