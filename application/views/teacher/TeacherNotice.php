<!DOCTYPE html>
<html class='no-js' lang='en'>

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
    <!--		<link href="assets/images/favicon.ico" rel="icon" type="image/ico" />-->


</head>

<body class='main page'>
<!-- Navbar -->
<div class='navbar navbar-default' id='navbar'>
    <a class='navbar-brand' href='#'>
        <i class='icon-user'></i> Graduation Design
    </a>
    <ul class='nav navbar-nav pull-right'>
        <li class='dropdown'>
            <a class='dropdown-toggle' data-toggle='dropdown' href='#'>
                <i class='icon-envelope'></i> Messages
                <span class='badge'>12</span>
                <b class='caret'></b>
            </a>
            <ul class='dropdown-menu'>
                <li>
                    <a href='#'>New message</a>
                </li>
                <!--<li>
                    <a href='#'>Inbox</a>
                </li>
                <li>
                    <a href='#'>Out box</a>
                </li>
                <li>
                    <a href='#'>Trash</a>
                </li>-->
            </ul>
        </li>
        <!--<li>
  <a href='#'>
    <i class='icon-cog'></i>
    Settings
  </a>
</li>-->
        <li class='dropdown user'>
            <a class='dropdown-toggle' data-toggle='dropdown' href='#'>
                <i class='icon-user'></i>
                <!--<strong>John DOE</strong>-->
                <strong><?php echo $tnum; ?></strong>
                <img class="img-rounded" src="http://placehold.it/20x20/ccc/777"/>
                <b class='caret'></b>
            </a>
            <ul class='dropdown-menu'>
                <li>
                    <a href='#'>Edit Profile</a>
                </li>
                <li class='divider'></li>
                <li>
                    <a href="/">Sign out</a>
                </li>
            </ul>
        </li>
    </ul>
</div>

<div id='wrapper'>
    <!-- Sidebar -->
    <section id='sidebar'>
        <i class='icon-align-justify icon-large' id='toggle'></i>
        <ul id='dock'>
            <li class='active launcher'>
                <i class='icon-cloud'></i>
                <a id="notice" href="<?= $base_url ?>BiShe/index.php/GDindex/queryNotice" target="content">Notice</a>
            </li>

            <!--<li class='launcher'>
    <i class='icon-file-text-alt'></i>
    <a href="forms.html">Data</a>
  </li>-->


            <li class='launcher'>
                <i class='icon-search'></i>
                <a href="<?= $base_url ?>BiShe/index.php/ChoosableController/queryChoosable" target="content">Choosable</a>
            </li>




            <!--<li class='launcher'>
                <i class='icon-bookmark'></i>
                <a href="<?/*= $base_url */?>BiShe/index.php/SelectedController/querySelected" target="content">Selected</a>
            </li>-->

            <li class='launcher'>
                <i class='icon-bookmark'></i>
                <a href="<?= $base_url ?>BiShe/index.php/SelectedController/queryStudentSelected" target="content">Selected</a>
            </li>

            <!--<li class='launcher'>
    <i class='icon-cloud'></i>
    <a href='#'>Data</a>
  </li>-->

            <li class='launcher'>
                <i class='icon-file-text-alt'></i>
                <a href="<?= $base_url ?>BiShe/index.php/DataController/uploadData" target="content">Data</a>
            </li>

            <!--<li class='launcher'>
    <i class='icon-bug'></i>
    <a href='#'>Feedback</a>
  </li>-->
        </ul>
        <!--<div data-toggle='tooltip' id='beaker' title='Made by lab2023'></div>-->
    </section>
    <!-- Tools -->

    <section id='tools'>

        <!--  <ul class='breadcrumb' id='breadcrumb'>
              <li class='title'>Notice</li>
             <li><a href="#">Lorem</a></li>
    <li class='active'><a href="#">ipsum</a></li>
          </ul>-->

        <!--div id='toolbar'>
  <div class='btn-group'>
    <a class='btn' data-toggle='toolbar-tooltip' href='#' title='Building'>
      <i class='icon-building'></i>
    </a>
    <a class='btn' data-toggle='toolbar-tooltip' href='#' title='Laptop'>
      <i class='icon-laptop'></i>
    </a>
    <a class='btn' data-toggle='toolbar-tooltip' href='#' title='Calendar'>
      <i class='icon-calendar'></i>
      <span class='badge'>3</span>
    </a>
    <a class='btn' data-toggle='toolbar-tooltip' href='#' title='Lemon'>
      <i class='icon-lemon'></i>
    </a>
  </div>
  <div class='label label-danger'>
    Danger
  </div>
  <div class='label label-info'>
    Info
  </div>
</div>-->

    </section>


    <iframe src="<?= $base_url ?>BiShe/index.php/GDindex/queryNotice"  name="content" width="100%" frameborder="no" border="0" height="100%">
    </iframe>
    <!-- Content -->
    <!--<div id='content'>

        <?php /*foreach ($notice as $notice_item): */?>
            <div class='panel panel-success'>
                <div class="panel-heading">
                    <b>
                        <?php /*echo $notice_item->ntitle; */?>
                    </b>
                </div>

                <div class="panel-body">

                    <h4>
                        <?php /*echo $notice_item->ncontent; */?>
                    </h4>

                </div>

                <div class="panel-footer">
                    <?php /*echo $notice_item->ndate; */?>
                </div>
            </div>
            <br/>
        <?php /*endforeach; */?>

    </div>-->
</div>
</div>
<!-- Footer -->
<!-- Javascripts -->
<!--<script src="<?/*= base_url */?>bishe/user_guide/_static/js/jquery.js" type="text/javascript"></script>
<script src="<?/*= base_url */?>bishe/user_guide/_static/js/jquery-ui.min.js" type="text/javascript"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js" type="text/javascript"></script>
<script src="<?/*= base_url */?>bishe/user_guide/_static/js/application-985b892b.js" type="text/javascript"></script>-->

<script src="<?= $base_url ?>bishe/user_guide/_static/js/jquery.min.js" type="text/javascript"></script>
<script src="<?= $base_url ?>bishe/user_guide/_static/js/jquery-ui.min.js" type="text/javascript"></script>
<script src="<?= $base_url ?>bishe/user_guide/_static/js/modernizr.min.js" type="text/javascript"></script>
<script src="<?= $base_url ?>bishe/user_guide/_static/js/application-985b892b.js" type="text/javascript"></script>

<!--<script language="JavaScript">
    function postToChoosableController(){

    }
</script>-->
<!-- Google Analytics -->
<script>
    var _gaq = [
        ['_setAccount', 'UA-XXXXX-X'],
        ['_trackPageview']
    ];
    (function (d, t) {
        var g = d.createElement(t),
            s = d.getElementsByTagName(t)[0];
        g.src = ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js';
        s.parentNode.insertBefore(g, s)
    }(document, 'script'));
</script>
</body>

</html>