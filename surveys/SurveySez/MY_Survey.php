<?php
//MY_Survey.php

namespace SurveySez;

class MY_Survey extends Survey
{
	function __contruct($id)
	{
		parent::__construct($id);
		
	}//end of MY_Survey contsructor
	
	function showQuestions()
	{
		if($this->TotalQuestions > 0)
		{#be certain there are questions
			foreach($this->aQuestion as $question)
			{#print data for each 
					
				echo '
				<div class="panel panel-primary">
				  <div class="panel-heading">
					<h3 class="panel-title">' . $question->Text . '</h3>
				  </div>
				  <div class="panel-body">
					<p>' . $question->Description . '</p>
					' . $question->showAnswers() . '
				  </div>
				</div>
				';
				
				#call showAnswers() method to display array of Answer objects
				//$question->showAnswers() . "<br />";
			}
		}else{
			echo "There are currently no questions for this survey.";	
		}
	}# end showQuestions() method

}//end of MY_Survey class