<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>S.D.I.E.T</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<script>
function rem(){
    document.getElementById('title').removeAttribute('placeholder');
}
function add()
{
   var x= document.getElementById('title');
       x.placeholder="Enter title of notification";
}
</script>

</head>


<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                  <a class="navbar-brand topnav" href="#">Satyug Darshan Institute Of Engineering And Technology
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            
                <ul class="nav navbar-nav navbar-right">
                    <li>
                      <a href="profile.php"> profile</a>
                    </li>
                    <li>
                      <button class="btn btn-link" style="background:blue"<a href="about.php">logout</a></button>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
<div class="intro-header-modi">
  <div class="wrapper">
    <div class="sidebar-wrapper">
      <ul class="nav nav-pills nav-stacked">
        <li style="margin:10px" ><a href="adminp.php">home</a></li>
        <li style="margin:10px" class="active" style="overflow:hidden"><a href="newnotification.php" name="new" style="overflow:hidden">add notification</a></li>
        <li style="margin:10px"><a href="allnotification.php" name="old">all notification</a></li> 
        <li style="margin:10px" ><a href="deletenotification.php">delete notification</a></li> 
      </ul>
    </div>
  </div>
  <div class="row">
    <div style="margin-top:2%">
      <div class="col-lg-offset-2 col-lg-8 col-lg-offset-2 col-md-offset-2 col-md-8 col-md-offset-2 col-sm-offset-2 col-sm-8 col-sm-offset-2">
          <h2> Enter Details</h2>
          <form class="form-horizontal" role="form"> 
            <div class="form-group"> 
                <label for="title" class="col-sm-2 control-label">Title
                </label> 
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="title" placeholder="Enter title of notification"  onclick="rem();" onblur="add();">
                    </div>
            </div>
            <div class="form-group"> 
                <label for="discription" class="col-sm-2 control-label ">Discription
                </label> 
                    <div class="col-sm-10">
                        <textarea class="form-control" rows="3" placeholder="discription if any*"></textarea>
                    </div>
            </div>
              <div class="form-group"> 
                <label for="coverimage" class="col-sm-2 control-label">Cover image</label> 
                    <div class="col-sm-10">
                       <input type="file" multiple accept='image/*' class="form-control" placeholder="images if any*" value="images">
                    </div>
                    
              </div>
                <div class="form-group"> 
                  <label for="file" class="col-sm-2 control-label">Attachment
                  </label> 
                  <div class="col-sm-10">
                        <input type="file" multiple  class="form-control" placeholder="attachments if any*" value="files">
                  </div>
                </div>
                <div class="form-group"> 
                  <label for="dateissue" class="col-sm-2 control-label">Date of issue</label> 
                    <div class="col-sm-4">
                        <input type="date"   class="form-control">
                    </div>
                       <label for="datelast" class="col-sm-2 control-label">Validity</label> 
                    <div class="col-sm-4">
                        <input type="date"   class="form-control">
                    </div>
                 </div>   
                  <div class="form-group"> 
                        <label for="authority" class="col-sm-2 control-label">Concerned authority</label> 
                        <div class="col-sm-10">
                          <select  class="form-control" id="authority" name="authority">
                            <option value="no">please select one</option>
                            <option value="all">both student and staff</option> 
                            <option value="student">student</option>
                            <option value="staff">staff</option>
                          </select>
                        </div>
                  </div>
          </form>
      </div>
    </div>
  </div>
  <div class="footer" style="margin-top:18%;backround:red;color:red;position:fixed" >

<h1>krishna</h1>
  
  </div>
  </div>
          


    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
