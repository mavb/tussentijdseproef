<!DOCTYPE html>
<html>
    <head>
        <title>Tussentijds</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="css/style.css" media="screen" rel="stylesheet" />
        <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->  
 
        
    </head>
    <body>

<div id="container"> 

	<header>
            <h4>top</h4>    
             
            <h5>Company Name</h5>
           
            <h6>Company Slogan</h6>
        </header><!-- end header -->
        <section>
        <nav>
        	<ul>
            	<li><a href="#" title="title"></a></li>
                <li><a href="#" title="title"> </a></li>
                <li><a href="#" title="title"></a></li>
                <li><a href="#" title="title"></a></li>
                <li><a href="#" title="title"></a></li>
                <li><a href="../contact.html" title="title"> </a></li>
                <li><a href="#" title="title"> </a></li>
                </ul>        
            </nav><!-- end nav -->   
    <article>
    
    	<div id="content-left"> </br></br></br></br></br></br></br></br>
            <form action = "#" method = "post">
                aantal : <input type = "text" name = "getal1" /><br />
                <br />                       
            </form>                       
        </div><!-- end content left -->
        
        <div id="content-mid"></br></br></br></br></br></br></br></br>
            <form action = "#" method = "post">
                aantal : <input type = "text" name = "getal2" /><br />            
                <br />                        
            </form>
        </div><!-- end content left -->
       
        <div id="content-right"></br></br></br></br></br></br></br></br>
            <form action = "#" method = "post">
                aantal : <input type = "text" name = "getal3" /><br />            
                <br />                        
            </form>
        </div><!-- end content right -->
        
        <div id="onder">            
            <input type = "submit" value = "Bestel" name = "sumbit" /> 
            <?php 
            if($_POST['submit'] == "Bestel"){  
                $som = $_POST['getal1'] + $_POST ['getal2'] + + $_POST ['getal3']; 
            
                echo '<p> aantal is : ' . $som . '</p>';                        
            }
            ?>
            </br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
            <form name="form" method="post" action="mail.php">
            Uw mail: <input type="text" name="to"><br>
            
            <input type="submit" value="send">
        </div>
    </article><!-- end content -->
</section>   
   <!--     <footer>&copy; 2003 Your Company. All rights reserved.</footer><!-- end footer -->
</div>

</body>
</html>
