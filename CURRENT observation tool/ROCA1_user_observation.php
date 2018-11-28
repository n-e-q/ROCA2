<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="ISO-8859-1">
	<title>Observation</title>
	<link rel="stylesheet" href="ROCA1_user_observation.css">
	<link rel="stylesheet" href="themify-icons.css">
	<link rel="stylesheet" href="fonts/stylesheet.css">
	<script type="text/javascript" src="ROCA1_user_observation.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<?php 
		include 'database.php';
	?>
</head>
<body onload="setAllDefaultValues()">
	<!-- Data from forms set to invisible iframe: WILL NEED TO CHANGE THIS LATER -->
	<iframe name="dump_data_frame" id="dump_data_frame"></iframe>
	
	<div class="body_content">
		<!-- BEGIN: left_side div -->
		<!-- Contains classroom pic and majority of inputs -->
		<div id="left_side">
			<!-- BEGIN: top_left div -->
			<!-- Contains back button and room name -->
			<div id="top_left">
				<div><a onclick="reload()" style=" vertical-align: middle"><span id="back_arrow" class="ti-arrow-left" ></span></a>&nbsp;&nbsp;&nbsp;MEC 305</div>
			</div>
			<!-- BEGIN: classroom mapping -->
			<div id="classroom_mapping">
				<form autocomplete="off" id="student_events_form" target="dump_data_frame">
					
				</form>
			</div>
			
			<div id="bottom_left">
				<div class="dropdown">
					<button class="button">student activities</button>
					<div class="dropdown-content">
						<?php getfromcodebank(2) ?>
					</div>
				</div>

				<div class="dropdown">
					<button class="button">instructor activities</button>
					<div class="dropdown-content">
							<!-- <a onclick="dataToFeed(event, this)">Lecturing</a>
							<a onclick="dataToFeed(event, this)">Lecturing while writing</a>
							<a onclick="dataToFeed(event, this)">Lecturing from pre-made visuals</a>
							<a onclick="dataToFeed(event, this)">Lecturing with demonstration of phenomena</a>
							<a onclick="dataToFeed(event, this)">Interactive lecture</a>
							<a onclick="dataToFeed(event, this)">Multimedia</a>
							<a onclick="dataToFeed(event, this)">Clicker question</a>
	
	
	
							<div class="dropdownInsideDropdown">
								<a onclick="showSubmenu()">Administrative Task</a>
								<div class="dropdown2-content">
									<a onclick="dataToFeed(event, this);hideSubmenu();">1</a>
									<a onclick="dataToFeed(event, this);hideSubmenu();">2</a>
									<a onclick="dataToFeed(event, this);hideSubmenu();">3</a>
									<a onclick="dataToFeed(event, this);hideSubmenu();">4</a>
								</div>
							</div>
	
	
	
	
	
							<a onclick="dataToFeed(event, this)">Idle</a> -->
							<?php getfromcodebank(1) ?>
					</div>
				</div>

				<div class="dropdown">
					<button class="button">instructor events</button>
					<div class="dropdown-content">
							<?php getfromcodebank(3) ?>
					</div>
				</div>
				
				<button class="circularButton" title="Reset" type="button" id="reset_button" onclick="reload()"><span class="ti-reload" style="vertical-align: -2px"></span></button>
				<button class="pulse-button" title="Start" type="button" onclick="start_or_stop()" id="start_button"><span class="ti-control-play" style="vertical-align: -2px"></span></button>
				<button class="circularButton" title="Feed" type="button" id="feed_button" onclick="openFeed(event)"><span class="ti-comment-alt" style="vertical-align: -2px"></span></button>
				<br /><div id="timer" style="position: absolute">Timer</div><br />
				<div class="fadingFeed" style="position: absolute"></div>

				<div id="feed" class="modal">
					<!-- Modal content -->
					<div class="modal-content">
					  <div class="modal-header">
						<span class="close"></span>
						Feedback
					  </div>
						  
					  <div class="modal-body"></div>  
					  
					</div>
			    </div>



			</div>
		</div>
		<!-- END: left_side div -->
		
		<!-- BEGIN: right_side div -->
		<!-- Contains interval reading form -->
		<div id="right_side">
			<form id="interval_readings_form" target="dump_data_frame">
				<!-- Interval form category 1: Pedagogical Strategies -->
				<div id="Pedagogical_Strategies">
					<div class="subheader">What's the instructor doing</div>
						<div class="checkbox-grid">
						  	<?php getfromcodebank(5) ?> 	 		
						</div>
				</div>
				<!-- Interval form category 2: Instructional Technologies -->
				<div id="Instructional Technologies">
					<div class="subheader">What's the instructor using</div>
					<div class="checkbox-grid">
						<?php getfromcodebank(7) ?>
					</div>
				</div>
				<!-- Interval form category 3: Student Engagement -->
				<div id="Student Engagement">
					<div class="subheader">What're students doing</div>
					<div class="checkbox-grid">
						<?php getfromcodebank(6) ?>
					</div>
				</div>
			</form>
		</div>
		<!-- END: right_side div -->
	</div>

</body>
</html>