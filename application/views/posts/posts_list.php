<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Post</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                DataTables Advanced Tables
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="dataTable_wrapper">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Title</th>
                                <th>Writer</th>
                                <th>Category</th>
                                <th>Tag</th>
                                <th>Date</th>
                                <th>Edit</th>
                                <th>Delete</th>
                                <th>Preview</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                              foreach ($data_posts as $key => $value) {
                                $css_odd = (($key % 2 == 0)?'odd':'even');
                                echo
                                    '<tr class="'.$css_odd.'">
                                        <td></td>
                                        <td>'.$value["post_title"].'</td>
                                        <td>'.$value['display_name'].'</td>
                                        <td>'.$value['category'].'</td>
                                        <td class="center">'.$value['post_tag'].'</td>
                                        <td class="center">'.$value['post_date'].'</td>
                                        <td>Edit</td>
                                        <td>Delete</td>
                                        <td>Preview</td>
                                    </tr>';
                              }
                            ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.table-responsive -->

            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
