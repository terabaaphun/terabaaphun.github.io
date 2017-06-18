<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=0.1">
<link href="https://fonts.googleapis.com/css?family=Inknut+Antiqua|Tillana|Aref+Ruqaa|Indie+Flower|Quicksand|Shadows+Into+Light|Amatic+SC|Orbitron" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="shortcut icon" type="image/png" href="AJ.png">
	<title>HOME</title>
<!--
	<style>
		
body {
	overflow-x : hidden;
	background-color : #fff;
}
* {
	box-sizing : border-box;
}

h2                  { position: absolute; 
					  top: 10vw;  
					  width: 100%; 
					}
h2 span.b           { margin-left : 9vw;
					  color: rgb(255, 255, 255); 
					  border-radius: 1.4vw;
					  font: bold 6vw 'Inknut Antiqua', serif; 
					  letter-spacing: 1px;                       
					  background: rgba(45, 165, 245, 0.15); 
					  padding: 0vw 3.125vw 0vw 3.125vw; 
					  text-align: center;
					  z-index : 1000;					  
					  box-shadow : 0 4px 8px 0px rgba(0, 0, 0, 0.3), 0px 6px 20px 0px rgba(0, 0, 0, 0.3);						  			   
					}
h2 span.a		    { margin-left : 16vw;
					  color: rgb(255, 255, 255); 
					  border-radius: 1.4vw;
					  font: bold 6vw 'Inknut Antiqua', serif; 
					  letter-spacing: 1px;                       
					  background-color: rgba(45, 165, 245, 0.3);
					  padding: 0px 3.125vw 0px 3.125vw;
					  text-align : center;
					  z-index : 1000;					  
					  box-shadow : 0 0.55vw 1.1vw 0px rgba(0, 0, 0, 0.6), 0px 0.825vw 2.75vw 0px rgba(0, 0, 0, 0.6);
					}
#sidebar 			{ color: #ffffff;
    				  border: 1px solid #ffffff;
    				  border-radius: 4px;
    				  padding: 10px;
    				  width: 320px;
    				  top: 0;
    				  right: 0;
    			 	  position: absolute;
    				  font-size: 80%;
    				  line-height: 20px;
					}
.nav1				{ position: fixed;
					  width : 100%;
					  height : 9.1%;
					  background-color: rgba(0, 0, 0, 0.5);
					  top : 0px;
					  z-index : 1000;
					  border-radius : 0px;
					  margin-left : -10px;
					}
.links				{ position : relative;
					  margin-left : 16.5%;
					  bottom : px;
					  font-size : 310%;
					  font-family : Calibri Light;
					  color : rgb(255, 255, 255);
					  letter-spacing : 0px;
					  text-decoration : none;	
					}
.linksH				{ position : relative;
					  margin-left : 16.5%;
					  bottom : 0px;
					  padding-bottom : 0px;
					  height : 50px;
					  background-color: rgba(255, 255, 255, 0.5);
					  font-size : 310%;
					  font-family : Calibri Light;
					  color : rgb(255, 255, 255);
					  letter-spacing : 0px;
					  text-decoration : none;	
					}
.introbeg			{ text-align : center;
					  margin-top : 2.9vw;
					  margin-bottom : 0px;
					  font-size : 4.8vw;
					  font-family : 'Quicksand', sans-serif;
					  color : rgb(91, 155, 213);
					}
.introbeglow    	{ text-align : center;
					  margin-top : -5px;
					  margin-bottom : 50px;
					  font-size : 26px;
					  
					  font-family : 'Tillana', cursive;
					  color : rgb(91, 155, 213);
					}
.image				{ height : 50px;
					  width : auto;
					  margin-top : 10px;	
					}
.nametag			{ position : realtive;
					  background: linear-gradient( rgba(50,120,200,0.4), rgba(50,120,200,0.5));
					  color : rgb(255, 255, 255);
					  font-size : 3vw;
					  font-family : 'Amatic SC', cursive;
					  text-align : center;
					  padding : 200px;
					  margin-top : 120px;
					  letter-spacing : 2px;
					  margin-left : -7px;
					  width : 100vw;
					}
.edutag				{ position : realtive;
					  background : linear-gradient( rgba(50,120,200,0.5), rgba(50,120,200,0.6));
					  color : rgb(255, 255, 255);
					  font-size : 3vw;
					  font-family : 'Amatic SC', cursive;
					  text-align : center;
					  padding : 200px;
					  margin-top : 50px;
					  letter-spacing : 2px;
					  line-height : 130%;
					  margin-left : -7px;
					  width : 100vw;
					  box-shadow: 0 0 0 0 rgba(0, 0, 0, 0);
					  transition : box-shadow 1s;
					  
					}
.exptag				{ position : realtive;
					  background : linear-gradient( rgba(50,120,200,0.6), rgba(50,120,200,0.7));
					  color : rgb(255, 255, 255);
					  font-size : 3vw;
					  font-family : 'Amatic SC', cursive;
					  text-align : center;
					  padding : 200px;
					  margin-top : 50px;
					  letter-spacing : 2px;
					  line-height : 130%;
					  margin-left : -7px;
					  width : 100vw;
					}
.endtag				{ position : absolute;
					  background-color : rgba(0, 0, 0, 1);
					  color : rgb(255, 255, 255);
					  font-size : 1vw;
					  font-family : 'Orbitron', sans-serif;
					  text-align : center;
					  padding : 20px;
					  letter-spacing : 4px;
					  width : 100%;
					  margin-left : -10px;
					  margin-bottom : -8px;
					  box-sizing : border-box; 	
					}
.tags 				{ box-shadow: 0 0 0 0 rgba(0, 0, 0, 0);
	   				  opacity : 0;
	   				  transition:opacity 0.3s, box-shadow 1s;
	  				}
.tags:hover			{ box-shadow: 10px 10px 10px 0 rgba(0, 0, 0, 0.2), 20px 18px 40px 0 rgba(0, 0, 0, 0.19);
					  opacity : 1;
					}

.edutag a:link 		{ text-decoration : none;
					  color : rgb(91, 155, 213);
					}
.edutag a:visited	{ text-decoration : none;
					  color : rgb(91, 155, 100);
					}
ul.navbar 			{ list-style-type: none;
    				  margin: 0px 0px 0px -8px;
    				  padding: 0;
					  position : fixed;
    				  overflow : inherit;
    				  border: 1px solid rgba(0, 0, 0, 0.5);
    				  background-color: rgba(0, 0, 0, 0.5);
					  position : fixed;
					  width : 100vw;
					  z-index : 20000;
					}

li.navbar1 			{ float: left;
					}
li.navbar1:first-child { margin-left:1.4vw;
					   }

li.navbar1 a, .dropbtn { display: block;
    					 color: rgb(255, 255, 255);
    					 text-align: center;
						 font-size : 2.4vw;
						 font-family: 'Quicksand', sans-serif;
    					 padding: 1.47vw 2.02vw;
    					 text-decoration: none;
						 cursor : pointer;	
					   }

li.navbar1 a:hover:not(.active), .dropdown:hover .dropbtn {	background-color: rgba(0, 0, 0, 0.5);
															/*border-style : solid;
															border-width : 0px 1px 0px 1px;
															border-color : rgb(255, 255, 255)*/
														  }

li.navbar1 a.active { color: white;
     				  background-color: rgba(91, 155, 213, 0.6);
					}

li.dropdown 		{ display: inline-block;
					}
.dropdown-content 	{ visibility:hidden;
    				  position: absolute;
					  /*margin-top : 1.5px;*/
    				  background-color: rgba(255, 255, 255,0.6);
    				  min-width: 17.8%;
    				  box-shadow: 0px 1vw 2vw 0px rgba(0,0,0,0.2);
					  opacity: 0;
    				  transition: opacity 1s;
					}
.dropdown-content img.cv1 { width:300px;
					    height:auto;
					    margin-top : 0px;
					    padding: 0px;
					    opacity : 0.4;
					    /*margin-right: 500px;*/
					  }

.dropdown-content a { color: rgb(91,155,213);
					  font-size : 160%;
					  font-family : 'Quicksand', sans-serif;
					  padding: .5vw 2vw;
    				  text-decoration: none;
    				  display: block;
    				  text-align: left;
					  z-index : 20000;
					  
					}
.dropdown-content a:first-child { color: rgb(91,155,213);
				                  font-size : 160%;
				                  font-family : 'Quicksand', sans-serif;
				                  padding: .5vw 2vw;
   				                  text-decoration: none;
   				                  display: block;
   				                  text-align: left;
				                  z-index : 20000;
				                  margin-top : 2vw;
				                }
	

.dropdown-content a:hover { background-color: rgba(255, 255, 255, 1);
						  }

.dropdown:hover .dropdown-content { visibility:visible;
									opacity : 1;
								  }

@media screen and (max-width: 480px),(max-height: 500px) {
    .tags	{ opacity : 1;
    		  box-shadow: 10px 10px 10px 0 rgba(0, 0, 0, 0.2), 20px 18px 40px 0 rgba(0, 0, 0, 0.19);
    		}
}
	</style>
-->
	<style>
		html,
body {
  width: 100%;
  height: 100%;
  margin: 0;
  padding: 0;
	background-color: rgb(52, 143, 212);
}
body {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  background-color: #4684ee;
}
.loader {
  color: #fff;
  font-family: Consolas, Menlo, Monaco, monospace;
  font-weight: bold;
  font-size: 30vh;
  opacity: 0.8;
}
.loader span {
  display: inline-block;
  -webkit-animation: pulse 0.4s alternate infinite ease-in-out;
          animation: pulse 0.4s alternate infinite ease-in-out;
}
.loader span:nth-child(odd) {
  -webkit-animation-delay: 0.4s;
          animation-delay: 0.4s;
}
@-webkit-keyframes pulse {
  to {
    -webkit-transform: scale(0.8);
            transform: scale(0.8);
    opacity: 0.5;
  }
}
@keyframes pulse {
  to {
    -webkit-transform: scale(0.8);
            transform: scale(0.8);
    opacity: 0.5;
  }
}
	</style>
</head>

<body>
<!--menu bar
<div style="position: relative; margin-top: -8px; width: 100%; " class="menu">
<ul class="navbar">
	<li class="navbar1"><a class="active" href="#">HOME</a></li>
	<li class="dropdown"><a  class="dropbtn" href="RESUME.html">RESUME</a>
	<div class="dropdown-content">
	<img src="img/CV1.jpg" alt="Resume" class="cv1">	
	</div>
	</li>
	<li class="dropdown"><a href="GALLERY.html" class="dropbtn">GALLERY</a></li>
	<li class="dropdown"><a class="dropbtn">ABOUT</a>
    <div class="dropdown-content">
      <a target="_blank" href="https://anubhavjai.wordpress.com/"><img class="image" src="img/wordpress.png" alt="https://anubhavjai.wordpress.com/"></a>
      <a target="_blank" href="https://www.facebook.com/anubhavjaiswal786"><img class="image" src="img/fb.png" alt="https://www.facebook.com/anubhavjaiswal786"></a>
      <a target="_blank" href="https://in.linkedin.com/in/anubhav-jaiswal-b54386122"><img class="image" src="img/linkedin.png" alt="https://in.linkedin.com/in/anubhav-jaiswal-b54386122"></a>
	  <a target="_blank" href="https://plus.google.com/u/0/109328188640616955309"><img class="image" src="img/gplus.png" alt="https://plus.google.com/u/0/109328188640616955309"></a>
	  <a target="_blank" href="https://github.com/anubhavj99"><img class="image" src="img/github.png" alt="https://github.com/anubhavj99"></a>
	  <a target="_blank" href="https://www.iiitd.ac.in/"><i class="material-icons" style="font-size : 48px;color : rgb(0, 0, 0)">school</i></a>
    </div>
  </li>
	<!--<li class="navbar1"><a href="ABOUT.html">ABOUT</a></li>
		
</ul>
</div>
<!--menu bar ends
<!--image and name
<img src="img/21.jpg" style="width : 101.2%; height : auto; opacity : 1; top : -5px; margin-top : -18px; margin-left : -8px; margin-bottom : 0px; z-index : 100;">
<h2><span class="b">अनुभव</span><span class="a">जायसवाल</span></h2>
<!--image and names end-->
<!--<div style="position: relative; margin-bottom: 5px; width: 100%; " class="menu">
<div class="nav"><div style="postion:fixed;"><a class="linksH" href="HOME.html">HOME</a><a class="links" href="RESUME.html">RESUME</a>
<a class="links" href="ABOUT.html">ABOUT</a></div>
</div></div>-->

<!--Intro heading
<p class="introbeg">LET's BEGIN!</p>
<p class="introbeglow">क्योंकि शुरुआत अच्छी हो तो सब अच्छा होता है...</p>
<!--nametag
<div style="box-sizing:border-box;"></div>
<p class="nametag tags"> My name is Anubhav Jaiswal, (as if you didn't get it by the big ass header</br></br>OR may be you don't know hindi...).</p>
<!--edutag
<p class="edutag tags">Next, my schooling started in Airforce Bal Bharti School. I was transferred to Father Agnel and lastly to The Mother's International School.</br>
Finally, in the year 2016, I got myself admitted in IIITD (<i>Indraprastha Institute of Information Technology, Delhi</i>), AND this AIN'T IP!!</p>
<!--exptag
<p class="exptag tags">Experience...</br>umm...aaa...ummm</br> Actually, no! I don't have any of it till date.</br>
But I would surely like to be a part of something great!</p>


<!--endtag
<p class="endtag"> Handcrafted with <i class="fa fa-heart" style="font-size : 22px;"></i> in India</p>
</div>
-->
<div class="loader">
  <span>{</span><span>}</span>
</div>
</body>
</html>
