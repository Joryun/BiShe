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
            <b>Download</b>

        </div>


        <div class='panel-body filters'>
            <div class='row'>
                <div class='col-md-9'>
                    Remark：Press the Download button to download the files...
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
                <th>File Name</th>
                <th>Uploaded by</th>
                <th class='actions'>
                    Download
                </th>
            </tr>
            </thead>

            <tbody>

            <tr class='default'>
                <td>1</td>
                <td>项目管理工具</td>
                <td>Joryun</td>

                <td class='action'>
                    <a class='btn btn-success' data-toggle='tooltip'
                       href='#' title='Zoom'>
                        <i class='icon-arrow-down'></i>
                    </a>
                </td>
            </tr>

            </tbody>

        </table>

    </div>