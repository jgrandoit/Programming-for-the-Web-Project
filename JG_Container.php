<div class="mainContent">
    	<div class="colm-1">
			<article>
				<h2>Conversion</h2>
				<form method="post" class="frmConversion">
                    <select id="convertVal" name="convertVal">
                      <option  value="I2F" name="I2F" id="I2F" >Inches to Feet</option>
                      <option  value="F2Y" name="F2Y" id="F2Y">Feet to Yards</option>
                      <option  value="Y2M" name="Y2M" id="Y2M">Yards to Miles</option>
                      <option  value="M2K" name="M2K" id="M2K">Miles to Kilometers</option>
                    </select><br>
                    <label> Enter a Number to Convert: </label><br>
                    <input type="text" name="number" class="container_inpt" id="number" value="1"><br>
                    <input type="submit" name="submit"  id="btnSubmit"><br></form>
                       <?php
                        if(isset($_POST['submit'])){
                            $number = $_POST["number"];
                            $conversionType=$_POST["convertVal"];
                            if($number>0){
                               switch($conversionType)
                                    {
                                        case "I2F":
                                            echo " <span style='color:green;'>$number inches is equal to  </span>" .round($number/12,3) . "feet";
                                            break;
                                        case "F2Y":
                                            echo " <span style='color:green;'>$number feet is equal to  </span>" .round($number/3,3) . "yards";
                                            break;
                                        case "Y2M":
                                            echo " <span style='color:green;'>$number yards is equal to  </span>"  .round($number/1760,3) . "miles";
                                            break;
                                        case "M2K":
                                            echo " <span style='color:green;'>$number miles is equal to  </span>" .round($number/12,3) . "kilometers";
                                            break;
                                        default:
                                            echo "Inavlid entry";
                                            print "This is it";
                                    } 
                            }
                            else{
                                echo "Enter a number >0"; 
                            }
                        }
                ?>        
			</article>			
		</div>
		<div class="articles">
			<article>
				<h2>Description</h2>
				<div class="article-body" id="description">
					<p> The Computer Science program is designed to provide majors with a solid theoretical and technical foundation in the field of computers. The program provides a balance between problem-solving techniques and system implementation. Majors demonstrate skills in critical thinking, project development, independent study, and research.</p>
					<p>The Computer Information Sciences (CIS) program combines the study of computer systems and computer technology with the study of a specialization selected by the student. The Computer Information Sciences student will be well prepared to develop innovative technology applications and pursue ca-reers in the cutting edge fields of digital media or cybersecurity. </p>
				</div>
				<img src="JG_Library/cis.jpg" width="100%" height="345">
			</article>	
		</div>
		
		<div class="sidebar">
			<article>
			    <h2>Current Events</h2>
				<h3><a href="#">Remote Learning 2020</a></h3>
				<p class="article-desc">This was posted on 3rd of April 2020 by JG</p>
				<p class="article-desc"><i>Category:</i> Education</p>
				<div class="article-body">
				<img src="JG_Library/remotel.jpg" width="100%" height="345">
					<p>Google’s page, called Teach From Home, offers recommendations on how teachers can teach remotely using Google products. Right now, the page features ideas like doing a video call with a class using Hangouts or creating an online quiz using Google Forms. 
					The page will “continue to evolve,” according to Google. There’s also a “Teach from Home toolkit,” which has resources about how to teach remotely organized into a series of slides. </p>
				</div>
			</article>
			<article>
				<h3><a href="#">Coronavirus Disease</a></h3>
				<p class="article-desc">This was posted on 3rd of April 2020 by JG</p>
				<p class="article-desc"><i>Category:</i>General</p>
				<div class="article-body">
				<img src="JG_Library/covid.jpg" width="100%" height="345">
					<p>Coronaviruses are a large family of viruses. Some cause illness in people, and others, such as canine and feline coronaviruses, only infect animals. Rarely, animal coronaviruses that infect animals have emerged to infect people and can spread between people. This is suspected to have occurred for the virus that causes COVID-19. Middle East Respiratory Syndrome (MERS) and Severe Acute Respiratory Syndrome (SARS) are two other examples of coronaviruses that originated from animals and then spread to people</p>
				</div>
			</article>
			<article>
				<h3><a href="#">Coronavirus cure: When will we have a drug to treat it?</a></h3>
				<p class="article-desc">This was posted on 30 April 2020 by BBC</p>
				<p class="article-desc"><i>Category:</i>Information</p>
				<div class="article-body">
				<img src="JG_Library/cure.jpg" width="100%" height="345">
					<p>More than 150 different drugs are being researched around the world. Most are existing drugs that are being trialled against the virus.

                    The World Health Organization (WHO) has launched the Solidarity trial aimed at assessing the most promising treatments
                    The UK says its Recovery trial is the the world's biggest, with more than 5,000 patients already taking part
                    And multiple research centres around the world are attempting to use survivors' blood as a treatment</p>
				</div>
			</article>
			<article>
				<h3><a href="#">Researchers restore injured man's sense of touch using brain-computer interface technology</a></h3>
				<p class="article-desc">This was posted on 23 April 2020 by Cell Press</p>
				<p class="article-desc"><i>Category:</i>Research</p>
				<div class="article-body">
				<img src="JG_Library/covid.jpg" width="100%" height="345">
					<p>Researchers have been able to restore sensation to the hand of a research participant with a severe spinal cord injury using a brain-computer interface (BCI) system. The technology harnesses neural signals that are so minuscule they can't be perceived and enhances them via artificial sensory feedback sent back to the participant, resulting in greatly enriched motor function.</p>
				</div>
			</article>
			
		</div>
	</div>