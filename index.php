<?php
$date = date('Y');
?>

<?php

//Connecting to gospeltruth database///

require_once("includes/dbcon.php");
?>


<?php

    if(isset($_POST['contact_btn'])){
        $contact_name = $_POST['name'];
        $contact_email = $_POST['email'];
        $contact_message = $_POST['comment'];
        
                
        ////Checking for empty fields here!//////
        
        if(empty($contact_name && $contact_email && $contact_message)){
            echo "All fields are required!";
        }else{
       
            ////Auto-generating Job Serial Numner (sn) for the Job Creation///
            
            $query = " SELECT * FROM contactus ";
            $run_query = mysqli_query($connection, $query);
                
            $total_contacts = mysqli_num_rows($run_query);
            $increase_num = $total_contacts + 1;
            $contact_id = $increase_num;
            
               $query = "INSERT INTO contactus(contact_id, name, email, message) VALUES('{$contact_id}','{$contact_name}','{$contact_email}','{$contact_message}')";
                        
                    $run_query = mysqli_query($connection, $query);

                        if($run_query == true){
                            echo "Thank you! We have received your message!";
                            }else{
                                echo "Ooops! Sorry, unexpected error. Please try again later!";
                            }
            header("location: index.php");
                        }
                
    
            
        
    }
    
   
?>

<!DOCTYPE HTML>
<html>
<head><meta name="viewport" content="width=device-width"/>
<title>Infosys Digital Solution</title>
<!-- STYLES & JQUERY 
================================================== -->
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="stylesheet" type="text/css" href="css/icons.css"/>
<link rel="stylesheet" type="text/css" href="css/slider.css"/>
<link rel="stylesheet" type="text/css" href="css/skinblue.css"/><!-- change skin color -->
<link rel="stylesheet" type="text/css" href="css/responsive.css"/>
<link rel="stylesheet" type="text/css"  href="includes/body.css" /> <!---- Linking to External CSS ---->
<script src="js/jquery-1.9.0.min.js"></script><!-- the rest of the scripts at the bottom of the document -->


</head>
<body>

<!-- UNDER SLIDER - BLACK AREA
================================================== -->
<div class="">
	<div class="">
		<div class="">
			<div class="c12">
                <img src="images/roll4.PNG">
			</div>
		</div>
	</div>
</div>   
<div class="boxedtheme">
<!-- TOP LOGO & MENU
================================================== -->
<div class="grid">
	<div class="row space-bot">
			<!--Logo-->
		<div class="c4">
			<a href="index.php">
			<img src="images/logo.png" class="logo" alt="" class="logopic">
			</a>
		</div>
		<!--Menu-->
		<div class="c8">
			<nav id="topNav">
			<ul id="responsivemenu">
				<li class="active"><a href="index.php"><i class="icon-home homeicon"></i><span class="showmobile">Home</span></a></li>
				
				<li><a href="#">Portfolio</a>
				<ul style="display: none;">
					<li><a href="about.html">Infosys Services</a></li>
                    <li><a href="testimonials.html">Testimonials</a></li>
					<li><a href="gallery.html">Gallery</a></li>
				</ul>
				</li>
				<li><a href="#">Vacancies</a>
				<ul style="display: none;">					
					<li class="last"><a href="timeline.html">Job Policies</a></li>
					<li class="last"><a href="applicants/app_viewjobs.php">View Jobs</a></li>
					<li class="last"><a href="applicants/">Apply Now</a></li>
					<li class="last"><a href="applicants/signup/">Sign-up</a></li>
				</ul>
				</li>

				<li><a href="admin/">Admin</a>
				</li>
				<li><a href="#">Help</a>
				<ul>
					<li><a href="faq.html">F.A.Q.s</a></li>
					<li><a href="appGuide.html">Application Guide</a></li>
					
				</ul>
				</li>				
				<li class="last"><a href="contact.php">Contact</a></li>
				
			</ul>
			</nav>
		</div>
	</div>
</div>
<div class="undermenuarea">
    <!----- Internal Job Search codes begin here ------->           
<div style="padding:20px; alignment:center;">
<p align="center" ><form action="app_search.php" method="POST" style="padding-left: 10px; padding-right:10px; color: blue; text:center; " >
    <p align="center" ><select name="query" style="padding-left: 10px; padding-right:10px; color: black; text:center; width:35%;">
                    <option value="None" selected>Select Jobs Categories and Jobs Titles to Search For Here...!</option> 
                     
                    <option value="Data Miner-Data Scientist">Data Miner-Data Scientist</option>
                    <option value="Framework Developers">Framework Developers</option>     
                    <option value="IT Education">IT Education</option>     
                    <option value="Management Science">Management Science</option>     
                    <option value="Menial Jobs">Menial Jobs</option>     
                    <option value="Programming">Programming</option>     
                    <option value="Secretarial">Secretarial</option>     
                    <option value="Software Engineering">Software Engineering</option>     
                    <option value="General Duties">General Duties</option>     
    </select>   
        
    <!--<input type="text" name="query" style="width:40%;"placeholder=" &nbsp;&nbsp; " /> -->
    <p align="center"><input type="submit" class="button" style="font-size:20px;padding-left: 10px; padding-right:10px; width:10%;" value="SEARCH"  /></p> <br />
</form>
    
<!----- Internal Job Search codes stop here ------->
</div>
    <div class="boxedshadow">
    </div>
	<!-- SLIDER AREA
	================================================== -->
	<div id="da-slider" class="da-slider">
		<!--Slide 1-->
		<div class="da-slide">
			<h2> PROGRAMMERS </h2>
			<p>
				<b>REQUIREMENTS: B.SC, B.TECH and HND in Computer Science, Programming, and Computer Engineering. Working experience considered.</b>
				
			</p>
			<a href="applicants/" class="da-link" style="width:202px;">Apply Now!</a>
			<div class="da-img">
		
			</div>
		</div>
		<!--Slide 2-->
		<div class="da-slide">
			<h2>FRONTDESK OFFICERS</h2>
			<p>
			<b>REQUIREMENTS: B.SC, B.TECH and HND in Computer Science,Secretarial Studies and other Office Management Technology Related courses.</b>
			
			</p>
			<a href="applicants/" class="da-link" style="width:192px;">Apply Now!</a>
			<div class="da-img">
				
			</div>
		</div>
		<!--Slide 3-->
		<div class="da-slide">
			<h2> GRADUATES RECRUITMENT </h2>
			<p>
				 INFOSYS DIGITAL SOLUTION invites applications from suitable qualified 'fresh' graduates of Social Science and IT related courses origin.
				 
			</p>
			<a href="applicants/" class="da-link" style="width:230px;">Apply Now!</a>
			<div class="da-img">
				
			</div>
		<!--Slide 4
		<div class="da-slide">
			<h2> LEADERSHIP </h2>
			<p>
				
			</p>
			<a href="#" class="da-link" style="width:230px;">ENGAGE US</a>
			<div class="da-img">
				<img src="http://placehold.it/238x420&text=Silhouette+here" alt="">
			</div>	
			-->
		</div>
		<nav class="da-arrows">
		<span class="da-arrows-prev"></span>
		<span class="da-arrows-next"></span>
		</nav>
	</div>
</div>
<!-- UNDER SLIDER - BLACK AREA
================================================== -->
<div class="undersliderblack">
	<div class="grid">
		<div class="row space-bot">
			<div class="c12">
				<!--Box 1-->
				<div class="c4 introbox introboxfirst">
					<div class="introboxinner">
						<span class="homeicone">
						<i class="icon-bolt"></i>
						</span> <b>VISION:</b> Changing lives using cutting edge training methodology while focusing on excellent delivery. 
					</div>
				</div>
				<!--Box 2-->
				<div class="c4 introbox introboxmiddle">
					<div class="introboxinner">
						<span class="homeicone">
						<i class="icon-cog"></i>
						</span> <b>MISSION:</b> Providing tools to enhance ICT learning while shaping young minds for Global opportunities.
					</div>
				</div>
				<!--Box 3-->
				<div class="c4 introbox introboxlast">
					<div class="introboxinner">
						<span class="homeicone">
						<i class="icon-lightbulb"></i>
						</span>
						<b>CORE VALUES:</b> We uphold the right Integrity, Quality delivery, Personal development, Team spirit, Possibilities.
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="shadowunderslider">
</div>
<!-- START content area
================================================== -->
<div class="grid">
	<div class="row space-bot">
		<!--INTRO-->
		<div class="c12">
			<div class="royalcontent">
				<h1 class="royalheader" text="Red"><b>WELCOME TO INFOSYS ONLINE JOB RECRUITMENT SYSTEM</b></h1>
			</div>
		</div>
		
	<!-- CALL TO ACTION 
	================================================== -->
	<div class="row space-bot">
		<div class="c12">
			<div class="wrapaction">
				<div class="c12">
					<h1 class="subtitles" "c3 text-center"><b>Infosys Digital Soltuion Limited</b></h1>
                    <p align="justify"><b>Infosys Digital Solution is a pan-African organization partnering with Microsoft IT and Comptia A+ Networking Academy primarily involved in delivering Information Technology in schools. Through us, IT is rendered in a scheme that runs seamlessly with the academic curriculum of the school, in line with the learning culture and pace associated with such school in areas of Information and Communication Technology while utilizing same to enhance education and learning. Our Organization also equips students and institutions with ICT infrastructures (Computers) as a tool for educational development while harnessing their entrepreneurial skills at a tender (secondary school) age. These programs are at Zero cost to the schools.</b></p>
				</div>
			</div>
			<div class="wrapaction">
				<div class="c12">
				<p align="justify"><b>Infosys Digital Solution is the leading provider of Information Communication Technologies business solutions. A focused player in the provision on ICT Training solutions and Infrastructure, we partner with some of the world’s leading Information Technology Company to proffer world class solution for government and private institutions.</b></p>
				</div>
			</div>
		</div>
	</div>
</div><!-- end grid -->
<form style="padding-left:200px; padding-right: 200px; background: #c9e6fa; color:#1893ad;">    
<h4><p><b>Get-In-Touch-With-Others</b></p></h4>
<?php
/*

VIEW OTHER PEOPLE'S COMMENTS AND COMMENTS AS WELL

Displays all data from 'CONTACTUS TABLE

*/

// connect to the database

include('includes/dbcon.php');

// get results from database

$result = mysqli_query($connection,"SELECT * FROM contactus ")

or die(mysqli_error("Awaiting Resources"));

// display data in a table without border

// loop through results of database query, displaying them in the table

while($row = mysqli_fetch_array( $result )) {

// echo out the contents of each row into a table


echo "<tr>";
echo '<p>' ;
echo '<b>|&nbsp;'. '<td>' . $row['name'] . '</td>'. '&nbsp;|'. '</b>'. '<br>'; 
echo '<td>' . $row['email'] . '</td>'. '&nbsp;|'. '<br>';


echo '<b>|&nbsp;'.'<td>' . $row['message'] . '</td>'. '&nbsp;|'. '</b>'. '<br>';
echo '<td>' . $row['commentdate'] . '</td>';
echo "<hr> <hr>";
echo '</p>' ;
echo "</tr>";

}
// close table>
echo "</table>";

?>   
    
</form> 
    
<hr><hr>
		<div class="row space-top"><p align="center">
			<!-- CONTACT FORM -->
			<div class="c8 space-top">
				<h1 class="maintitle">
				<span><i class="icon-envelope-alt" style="padding-left:200px; "></i> Comments</span>
				</h1>
				<div class="wrapcontact">
					<div class="done">
						<div class="alert-box success ctextarea">
							 Your message has been sent. Thank you! <a href="" class="close">x</a>
						</div>
					</div>
					<form method="post" action="" id="" style="padding-left:200px; text-color:white; background-color:#1893ad">
						<div class="form">
							<div class="c6 noleftmargin">
								<label><b>Name</b></label>
								<input type="text" name="name">
							</div>
							<div class="c6 noleftmargin">
								<label><b>E-mail address</b></label>
								<input type="email" name="email">
							</div>
							<label><b>Message</b></label>
							<textarea name="comment" class="ctextarea" rows="15"></textarea>
							<input type="submit" name="contact_btn" class="button" style="font-size:20px;" value="SUBMIT">
                            <br>
						</div>
					</form>
				</div>
			</div>
    <div class="c4 space-top">
				<h1 class="maintitle">
				<span><i class="icon-map-marker"></i> Locations</span>
				</h1>
				<p>
					<a class="link-2" href="about.html"><b>Infosys Digital Solution</b></a>
				</p>
				<dl>
					<dt>Federal Science and Technical college (FSTC) Doma, Nasarawa State (NS), North-Central, Nigeria, West Africa.</dt>
					<dd><span>Telephone:</span>+234 703 948 5184</dd>
					<dd><span>FAX:</span>+234 703 948 5184</dd>
					<dd>E-mail: <a href="www.infosysitacademy.com">info@infosysitacademy.com</a></dd><br />
                    <h1 class="maintitle"><span><i class="icon-map-marker"></i> Our Value Proposition</span></h1>
                    <p align="justify"><b>Our drive centers on equipping young minds, making them technologically liberated. We strongly believe they can build on the skill set we provide and be opportune to take their technological craft anywhere in the world. We achieve this by delivering cutting edge technologies to the students whilst creating a positive change in way of developing talent and harnessing their entrepreneurial skills.</b></p> 
				</dl>
				<br/>
				
			</div>
		</p></div>
<!---end grid -->

<!-- FOOTER
================================================== -->
<div id="wrapfooter">
	<div class="grid">
		<div class="row" id="footer">
			<!-- to top button  -->
			<p class="back-top floatright">
				<a href="#top"><span></span></a>
			</p>
			<!-- 1st column -->
			<div class="c3">
				<img src="images/logo-footer.png" style="padding-top: 70px;" alt="">
			</div>
			<!-- 2nd column -->
			<div class="c3">
				<h2 class="title"><i class="icon-twitter"></i> Follow us</h2>
				<hr class="footerstress">
				<div id="ticker" class="query">
				</div>
			</div>
			<!-- 3rd column -->
			<div class="c3">
				<h2 class="title"><i class="icon-envelope-alt"></i>Head Office</h2>
				<hr class="footerstress">
				<dl>
					<dt>34, Curtis Adeniyi Jones Close, Off Gbajumo Street, Adeniyi Jones, Surulere, Lagos, Nigeria</dt>
					<dd><span>Telephone:</span>+234 703 948 5184</dd>
					<dd>E-mail: <a href="more.html">info@infosysitacademy.com</a></dd>
				</dl>
				<ul class="social-links" style="margin-top:15px;">
					<li class="twitter-link smallrightmargin">
					<a href="#" class="twitter has-tip" target="_blank" title="Follow Us on Twitter">Twitter</a>
					</li>
					<li class="facebook-link smallrightmargin">
					<a href="#" class="facebook has-tip" target="_blank" title="Join us on Facebook">Facebook</a>
					</li>
					<li class="google-link smallrightmargin">
					<a href="#" class="google has-tip" title="Google +" target="_blank">Google</a>
					</li>
					<li class="linkedin-link smallrightmargin">
					<a href="#" class="linkedin has-tip" title="Linkedin" target="_blank">Linkedin</a>
					</li>
					<li class="pinterest-link smallrightmargin">
					<a href="#" class="pinterest has-tip" title="Pinterest" target="_blank">Pinterest</a>
					</li>
				</ul>
			</div>
			<!-- 4th column -->
			<div class="c3">
				<h2 class="title"><i class="icon-link"></i> Links</h2>
				<hr class="footerstress">
				<ul>
					<li>Missions</li>
					<li>Profile</li>
					<li>Value Proposition</li>
					<li>Core Values</li>
					<li>Studentpreneur</li>
					<li>Testimonies</li>
					<li>Contact</li>
					<li>Movere</li>
					<li>Gallery</li>
					<li>Portfolio</li>
				</ul>
			</div>
			<!-- end 4th column -->
		</div>
	</div>
</div>
<!-- copyright area -->
<div class="copyright">
	<div class="grid">
		<div class="row">
			<div class="c6">
				 Infosys Digital Solution Limited &copy; <?php echo "{$date}"; ?>. All Rights Reserved.
			</div>
			<div class="c6">
				<span class="right">
				Online Job Recruitment System &copy; Designed by Christian Akpan </span>
			</div>
		</div>
	</div>
</div>

</div>
<!-- JAVASCRIPTS
================================================== -->
<!-- all -->
<script src="js/modernizr-latest.js"></script>

<!-- menu & scroll to top -->
<script src="js/common.js"></script>

<!-- slider -->
<script src="js/jquery.cslider.js"></script>

<!-- cycle -->
<script src="js/jquery.cycle.js"></script>

<!-- carousel items -->
<script src="js/jquery.carouFredSel-6.0.3-packed.js"></script>

<!-- twitter -->
<script src="js/jquery.tweet.js"></script>

<!-- Call Showcase - change 4 from min:4 and max:4 to the number of items you want visible -->
<script type="text/javascript">
$(window).load(function(){			
			$('#recent-projects').carouFredSel({
				responsive: true,
				width: '100%',
				auto: true,
				circular	: true,
				infinite	: false,
				prev : {
					button		: "#car_prev",
					key			: "left",
						},
				next : {
					button		: "#car_next",
					key			: "right",
							},
				swipe: {
					onMouse: true,
					onTouch: true
					},
				scroll : 2000,
				items: {
					visible: {
						min: 4,
						max: 4
					}
				}
			});
		});	
</script>

<!-- Call opacity on hover images from carousel-->
<script type="text/javascript">
$(document).ready(function(){
    $("img.imgOpa").hover(function() {
      $(this).stop().animate({opacity: "0.6"}, 'slow');
    },
    function() {
      $(this).stop().animate({opacity: "1.0"}, 'slow');
    });
  });
</script>
</body>
</html>