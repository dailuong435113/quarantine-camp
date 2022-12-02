<?php

session_start();

include("includes/db.php");
include("includes/header.php");


?>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <?php

        include("includes/navhead.php");

        ?>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Chat box start
        ***********************************-->
        <!--**********************************
            Chat box End
        ***********************************-->




        <!--**********************************
            Header start
        ***********************************-->
        <?php

        include("includes/main.php");

        ?>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <?php

        include("includes/sidebar.php");

        ?>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
                <div class="form-head align-items-center d-flex mb-sm-4 mb-3">
                    <div class="mr-auto">
                        <h2 class="text-black font-w600">Block B</h2>
                        <p class="mb-0"><a href="blocka.php" class="blockcolor">Block A</a> /<a href="blockb.php" class="blockcolor">Block B</a> /<a href="blockc.php" class="blockcolor">Block C</a></p>
                    </div>
                    <div>

                        <!-- <a href="javascript:void(0)" class="btn btn-primary mr-3" data-toggle="modal" data-target="#addOrderModal">+New Patient</a>
						<a href="index.php" class="btn btn-outline-primary"><i class="las la-calendar-plus scale5 mr-3"></i>Filter Date</a> -->
                    </div>
                </div>
                <!-- Add Order -->

                <!-- row -->


                <div class="row">

                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Room</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive card-table">
                                    <table id="example3" class="display min-w850 display dataTablesCard white-border table-responsive-xl">
                                        <thead>
                                            <tr>
                                                <!--<th></th>-->
                                                <th>Building</th>
                                                <th>Floor</th>
                                                <th>Room ID</th>
                                                <th>Room Type</th>
                                                <th>Date Check-in</th>
                                                <th>Limited Capacity</th>
                                                <th>Room ID (Changed)</th>
                                                <th>Room Type (Changed)</th>
                                                <th>Date Check-in (Changed)</th>
                                                <th>Limited Capacity (Changed)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>B</td>
                                                <td>1</td>
                                                <td>101</td>
                                                <td>Standard</td>
                                                <td>12/06/2022</td>
                                                <td>8</td>
                                                <td>None</td>
                                                <td>None</td>
                                                <td>None</td>
                                                <td>None</td>
                                            </tr>
                                            <tr>
                                                <td>B</td>
                                                <td>2</td>
                                                <td>201</td>
                                                <td>Standard</td>
                                                <td>17/08/2022</td>
                                                <td>10</td>
                                                <td>205</td>
                                                <td>Suite</td>
                                                <td>15/11/2022</td>
                                                <td>2</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <?php

        include("includes/footer.php");

        ?>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="./vendor/global/global.min.js"></script>
    <script src="./vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="./js/custom.min.js"></script>
    <script src="./js/deznav-init.js"></script>

    <!-- Datatable -->
    <script src="./vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script>
        (function($) {
            var table = $('#example3').DataTable({
                searching: true,
                paging: false,
                select: false,
                //info: false,         
                lengthChange: false

            });
            $('#example tbody').on('click', 'tr', function() {
                var data = table.row(this).data();

            });
        })(jQuery);
    </script>
    <script src="./js/plugins-init/datatables.init.js"></script>
</body>

</html>