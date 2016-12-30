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

<!--    studentList-->

    <div class='panel panel-default grid'>
        <div class='panel-heading'>
            <i class='icon-table icon-large'></i>
            <b>Student List</b>
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
<!--                <th>Title</th>-->
                <th>Student</th>
                <th>Topic</th>
                <th class='actions'>
                    Details
                </th>
            </tr>
            </thead>


            <tbody>



            <?php foreach ($studentList as $studentList_item):

                if($studentList_item->sid % 2 == 0){
                    ?>
                    <tr class='default'>
                        <td><?php echo $studentList_item->sid; ?></td>
                        <td><?php echo $studentList_item->sname; ?></td>
                        <td><?php echo $studentList_item->ttitle; ?></td>

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
                        <td><?php echo $studentList_item->sid; ?></td>
                        <td><?php echo $studentList_item->sname; ?></td>
                        <!--                <td>Thornton</td>-->
                        <!--                        <td>--><?php //echo $topic_item->tid; ?><!--</td>-->
                        <td><?php echo $studentList_item->ttitle; ?></td>

                        <td class='action'>
                            <a class='btn btn-success' data-toggle='tooltip'
                               href='<?= $base_url ?>BiShe/index.php/ChoosableController/displayTopicInfo/<?php echo $studentList_item->topid; ?>' title='Zoom'>
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

            </tbody>
        </table>


    </div>