<?php 

class PerQuestionTimerQuiz
{
    /**
     * Initialize the plugin by setting hooks
     */
    public function __construct()
    {
        add_shortcode('pqt_quiz', array($this, 'pqt_quiz_shortcode'));
        
    }

   
   

    /**
     * Output the quiz HTML
     */
    public function pqt_quiz_shortcode()
    {
        ob_start();
        ?>
        <div class="pqt-quiz-container">
            <h1 class="pqt-quiz-title">Quiz Title</h1>
            <form action="" method="post">
                <div class="pqt-question-container">
                    <p class="pqt-question">Question 1</p>
                    <div class="pqt-answer-options">
                        <label for="pqt-answer1">
                            <input type="radio" id="pqt-answer1" name="pqt-question1" value="option1">
                            Option 1
                        </label>
                        <label for="pqt-answer2">
                            <input type="radio" id="pqt-answer2" name="pqt-question1" value="option2">
                            Option 2
                        </label>
                        <label for="pqt-answer3">
                            <input type="radio" id="pqt-answer3" name="pqt-question1" value="option3">
                            Option 3
                        </label>
                    </div>
                    <div class="pqt-question-timer"></div>
                </div>
                <div class="pqt-question-container">
                    <p class="pqt-question">Question 2</p>
                    <div class="pqt-answer-options">
                        <label for="pqt-answer4">
                            <input type="radio" id="pqt-answer4" name="pqt-question2" value="option1">
                            Option 1
                        </label>
                        <label for="pqt-answer5">
                            <input type="radio" id="pqt-answer5" name="pqt-question2" value="option2">
                            Option 2
                        </label>
                        <label for="pqt-answer6">


<input type="radio" id="pqt-answer6" name="pqt-question2" value="option3">
                        Option 3
                    </label>
                </div>
                <div class="pqt-question-timer"></div>
            </div>
            <input type="submit" value="Submit">
        </form>
    </div>
    <?php
   return ob_get_clean();
    
}
}