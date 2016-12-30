<!Doctype>
<head>
    <meta charset='utf-8'>
    <meta content='IE=edge,chrome=1' http-equiv='X-UA-Compatible'>
    <title>Graduation Design</title>
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

<!--    studentInfo-->
    <?php foreach ($studentInfo as $studentInfo_item): ?>
    <div class="panel panel-primary">
        <div class="panel-body">
            <b>NO: </b><?php echo $studentInfo_item->snum; ?>
        </div>
    </div>

    <div class="panel panel-success">
        <div class="panel-body">
            <b>Name: </b><?php echo $studentInfo_item->sname; ?>
        </div>
    </div>

    <div class="panel panel-info">
        <div class="panel-body">
            <b>Sex: </b>
            <?php
            if($studentInfo_item->ssex == 1){
                echo '男';
            }else{
                echo '女';
            }
            ?>
        </div>
    </div>

    <div class="panel panel-warning">
        <div class="panel-body">
            <b>Age: </b><?php echo $studentInfo_item->sage; ?>
        </div>
    </div>

    <div class="panel panel-danger">
        <div class="panel-body">
            <b>Dept: </b><?php echo $studentInfo_item->sdept; ?>
        </div>
    </div>

    <div class="panel panel-warning">
        <div class="panel-body">
            <b>Class: </b><?php echo $studentInfo_item->sclass; ?>
        </div>
    </div>

    <!--<div class="panel panel-success">
        <div class="panel-body">
            <b>Subject:</b>
        </div>
    </div>-->

    <div class="panel panel-info">
        <div class="panel-body">
            <b>Grade: </b>
            <?php
            if($studentInfo_item->grade == null){
                echo '暂无成绩';
            }else{
                echo $studentInfo_item->grade;
            }
            ?>
        </div>
    </div>

    <div class="panel panel-primary">
        <div class="panel-body">
            <b>Is pass: </b>
            <?php
            if($studentInfo_item->grade == null){
                echo '评阅中，请耐心等待结果...';
            }else{
                echo $studentInfo_item->grade;
            }
            ?>
        </div>
    </div>

    <?php endforeach; ?>

</div>