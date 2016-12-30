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

        <?php foreach ($notice as $notice_item): ?>
    <div class='panel panel-success'>
        <div class="panel-heading">
            <b>
                <?php echo $notice_item->ntitle; ?>
            </b>
        </div>

        <div class="panel-body">

            <h4>
                <?php echo $notice_item->ncontent; ?>
            </h4>

        </div>

        <div class="panel-footer">
            <?php echo $notice_item->ndate; ?>
        </div>
    </div>
    <br/>
<?php endforeach; ?>

</div>