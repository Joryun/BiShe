<!Doctype>
<head>
    <meta charset='utf-8'>
    <meta content='IE=edge,chrome=1' http-equiv='X-UA-Compatible'>
    <title>Graduation Design</title>
    <meta content='lab2023' name='author'>
    <meta content='' name='description'>
    <meta content='' name='keywords'>
    <link rel="stylesheet" href="<?= $base_url ?>bishe/user_guide/_static/css/bootstrap.min.css">
    <link href="<?= $base_url ?>bishe/user_guide/_static/css/application-a07755f5.css" rel="stylesheet"
          type="text/css"/>
    <link href="<?= $base_url ?>bishe/user_guide/_static/css/font-awesome.min.css" rel="stylesheet"
          type="text/css"/>

</head>
<!-- Content -->
<div id='content'>


    <div class='panel panel-default grid'>
        <div class='panel-heading'>
            <i class='icon-table icon-large'></i>
            <b>Optional topics</b>
            <!--<div class='panel-tools'>
                <div class='btn-group'>
                    <a class='btn' href='#'>
                        <i class='icon-wrench'></i>
                        Settings
                    </a>
                    <a class='btn' href='#'>
                        <i class='icon-filter'></i>
                        Filters
                    </a>
                    <a class='btn' data-toggle='toolbar-tooltip' href='#' title='Reload'>
                        <i class='icon-refresh'></i>
                    </a>
                </div>
                <div class='badge'>3 record</div>
            </div>-->
        </div>


        <div class='panel-body filters'>
            <div class='row'>
                <div class='col-md-9'>
                    Remark：Press the Details button to view the details...
                </div>

                <!-- 查询框 -->
                <div class='col-md-3'>
                    <div class='input-group'>
                        <input class='form-control' placeholder='Quick search...' type='text'>
                  <span class='input-group-btn'>
                    <button class='btn' type='button'>
                        <i class='icon-search'></i>
                    </button>
                  </span>
                    </div>
                </div>

            </div>
        </div>

        <table class='table'>
            <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Teacher</th>
                <th class='actions'>
                    Details
                </th>
            </tr>
            </thead>


            <tbody>



            <?php foreach ($topic as $topic_item):

                if($topic_item->topid % 2 == 0){
                    ?>
                    <tr class='default'>
                        <td><?php echo $topic_item->topid; ?></td>
                        <td><?php echo $topic_item->ttitle; ?></td>
<!--                    <td>Otto</td>-->
<!--                        <td>--><?php //echo $topic_item->tid; ?><!--</td>-->
                        <td><?php echo $topic_item->tname; ?></td>

                        <td class='action'>
                            <a class='btn btn-success' data-toggle='tooltip'
                               href='#' title='Zoom'>
                                <i class='icon-zoom-in'></i>
                            </a>
                            <!--<a class='btn btn-info' href='#'>
                                <i class='icon-edit'></i>
                            </a>
                            <a class='btn btn-danger' href='#'>
                                <i class='icon-trash'></i>
                            </a>-->
                        </td>
                    </tr>
            <?php
                }else{
                    ?>
                    <tr class='success'>
                        <td><?php echo $topic_item->topid; ?></td>
                        <td><?php echo $topic_item->ttitle; ?></td>
                        <!--                <td>Thornton</td>-->
<!--                        <td>--><?php //echo $topic_item->tid; ?><!--</td>-->
                        <td><?php echo $topic_item->tname; ?></td>

                        <td class='action'>
                            <a class='btn btn-success' data-toggle='tooltip'
                               href='<?= $base_url ?>BiShe/index.php/ChoosableController/displayTopicInfo/<?php echo $topic_item->topid; ?>' title='Zoom'>
                                <i class='icon-zoom-in'></i>
                            </a>
                            <!--<a class='btn btn-info' href='#'>
                                <i class='icon-edit'></i>
                            </a>
                            <a class='btn btn-danger' href='#'>
                                <i class='icon-trash'></i>
                            </a>-->
                        </td>
                    </tr>

            <?php
                }
            endforeach;
            ?>
            <!--<tr class='success'>
                <td>1</td>
                <td>Mark</td>
               <td>Otto</td>
                <td>@mdo</td>
                <td class='action'>
                    <a class='btn btn-success' data-toggle='tooltip' href='#' title='Zoom'>
                        <i class='icon-zoom-in'></i>
                    </a>
                    <a class='btn btn-info' href='#'>
                        <i class='icon-edit'></i>
                    </a>
                    <a class='btn btn-danger' href='#'>
                        <i class='icon-trash'></i>
                    </a>
                </td>
            </tr>-->


            <!--<tr class='danger'>
                <td>2</td>
                <td>Jacob</td>
               <td>Thornton</td>
                <td>@fat</td>
                <td class='action'>
                    <a class='btn btn-success' data-toggle='tooltip' href='#' title='Zoom'>
                        <i class='icon-zoom-in'></i>
                    </a>
                    <a class='btn btn-info' href='#'>
                        <i class='icon-edit'></i>
                    </a>
                    <a class='btn btn-danger' href='#'>
                        <i class='icon-trash'></i>
                    </a>
                </td>
            </tr>-->






            <!--<tr class='warning'>
                <td>3</td>
                <td>Larry</td>

                <td>@twitter</td>
                <td class='action'>
                    <a class='btn btn-success' data-toggle='tooltip' href='#' title='Zoom'>
                        <i class='icon-zoom-in'></i>
                    </a>
                    <a class='btn btn-info' href='#'>
                        <i class='icon-edit'></i>
                    </a>
                    <a class='btn btn-danger' href='#'>
                        <i class='icon-trash'></i>
                    </a>
                </td>
            </tr>
            <tr class='active'>
                <td>4</td>
                <td>Mark</td>

                <td>@mdo</td>
                <td class='action'>
                    <a class='btn btn-success' data-toggle='tooltip' href='#' title='Zoom'>
                        <i class='icon-zoom-in'></i>
                    </a>
                    <a class='btn btn-info' href='#'>
                        <i class='icon-edit'></i>
                    </a>
                    <a class='btn btn-danger' href='#'>
                        <i class='icon-trash'></i>
                    </a>
                </td>
            </tr>
            <tr class='disabled'>
                <td>5</td>
                <td>Jacob</td>

                <td>@fat</td>
                <td class='action'>
                    <a class='btn btn-success' data-toggle='tooltip' href='#' title='Zoom'>
                        <i class='icon-zoom-in'></i>
                    </a>
                    <a class='btn btn-info' href='#'>
                        <i class='icon-edit'></i>
                    </a>
                    <a class='btn btn-danger' href='#'>
                        <i class='icon-trash'></i>
                    </a>
                </td>
            </tr>
            <tr>
                <td>6</td>
                <td>Larry</td>

                <td>@twitter</td>
                <td class='action'>
                    <a class='btn btn-success' data-toggle='tooltip' href='#' title='Zoom'>
                        <i class='icon-zoom-in'></i>
                    </a>
                    <a class='btn btn-info' href='#'>
                        <i class='icon-edit'></i>
                    </a>
                    <a class='btn btn-danger' href='#'>
                        <i class='icon-trash'></i>
                    </a>
                </td>
            </tr>
            <tr>
                <td>7</td>
                <td>Jacob</td>

                <td>@fat</td>
                <td class='action'>
                    <a class='btn btn-success' data-toggle='tooltip' href='#' title='Zoom'>
                        <i class='icon-zoom-in'></i>
                    </a>
                    <a class='btn btn-info' href='#'>
                        <i class='icon-edit'></i>
                    </a>
                    <a class='btn btn-danger' href='#'>
                        <i class='icon-trash'></i>
                    </a>
                </td>
            </tr>
            <tr>
                <td>8</td>
                <td>Larry</td>

                <td>@twitter</td>
                <td class='action'>
                    <a class='btn btn-success' data-toggle='tooltip' href='#' title='Zoom'>
                        <i class='icon-zoom-in'></i>
                    </a>
                    <a class='btn btn-info' href='#'>
                        <i class='icon-edit'></i>
                    </a>
                    <a class='btn btn-danger' href='#'>
                        <i class='icon-trash'></i>
                    </a>
                </td>
            </tr>
            <tr>
                <td>9</td>
                <td>Mark</td>

                <td>@mdo</td>
                <td class='action'>
                    <a class='btn btn-success' data-toggle='tooltip' href='#' title='Zoom'>
                        <i class='icon-zoom-in'></i>
                    </a>
                    <a class='btn btn-info' href='#'>
                        <i class='icon-edit'></i>
                    </a>
                    <a class='btn btn-danger' href='#'>
                        <i class='icon-trash'></i>
                    </a>
                </td>
            </tr>
            <tr>
                <td>10</td>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                <td class='action'>
                    <a class='btn btn-success' data-toggle='tooltip' href='#' title='Zoom'>
                        <i class='icon-zoom-in'></i>
                    </a>
                    <a class='btn btn-info' href='#'>
                        <i class='icon-edit'></i>
                    </a>
                    <a class='btn btn-danger' href='#'>
                        <i class='icon-trash'></i>
                    </a>
                </td>
            </tr>-->

            </tbody>
        </table>

        <!--<div class='panel-footer'>
            <ul class='pagination pagination-sm'>
                <li>
                    <a href='#'>«</a>
                </li>
                <li class='active'>
                    <a href='#'>1</a>
                </li>
                <li>
                    <a href='#'>2</a>
                </li>
                <li>
                    <a href='#'>3</a>
                </li>
                <li>
                    <a href='#'>4</a>
                </li>
                <li>
                    <a href='#'>5</a>
                </li>
                <li>
                    <a href='#'>6</a>
                </li>
                <li>
                    <a href='#'>7</a>
                </li>
                <li>
                    <a href='#'>8</a>
                </li>
                <li>
                    <a href='#'>»</a>
                </li>
            </ul>
            <div class='pull-right'>
                Showing 1 to 10 of 32 entries
            </div>
        </div>
    </div>
    <div class='panel panel-default grid'>
        <div class='panel-heading'>
            <i class='icon-table icon-large'></i>
            Padding Table
        </div>
        <table class='table'>
            <thead>
            <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Username</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class='panel panel-default grid'>
        <div class='panel-heading'>
            <i class='icon-table icon-large'></i>
            Bordered Table
        </div>
        <div class='panel-body'>
            <table class='table table-bordered'>
                <thead>
                <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Username</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class='panel panel-default grid'>
        <div class='panel-heading'>
            <i class='icon-table icon-large'></i>
            Condensed Table
        </div>
        <table class='table table-condensed'>
            <thead>
            <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Username</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
            </tr>
            </tbody>
        </table>
    </div>-->


</div>