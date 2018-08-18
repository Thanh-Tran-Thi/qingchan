<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Quiz Your-self</title>
        <link rel="stylesheet" href="quiz.css">
    </head>
    <body>
    <center><header>Quiz Your-Self</header></center>
    <form action="" method="post">
        <div class="ques" id="left">
            <li>
                <p>1) CSS Stands for...</p>
                <div>
                    <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                    <label for="question-1-answers-A">A) Computer Styled Sections </label>
                </div>
                <div>
                    <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                    <label for="question-1-answers-B">B) Cascading Style Sheets</label>
                </div>
                <div>
                    <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                    <label for="question-1-answers-C">C) Crazy Solid Shapes</label>
                </div>
                <div>
                    <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                    <label for="question-1-answers-D">D) None of the above</label>
                </div>
            </li>

            <li>
                <p>2) HTML Stands for...</p>
                <div>
                    <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                    <label for="question-1-answers-A">A) Hyper Throttle Manly Language  </label>
                </div>
                <div>
                    <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                    <label for="question-1-answers-B">B) Hypertext Markup Language </label>
                </div>
                <div>
                    <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                    <label for="question-1-answers-C">C) How to make language </label>
                </div>
                <div>
                    <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                    <label for="question-1-answers-D">D) How to move language</label>
                </div>
            </li>
            <li>
                <p>3) Which HTML attribute is used to define inline styles?</p>
                <div>
                    <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                    <label for="question-1-answers-A">A) Style  </label>
                </div>
                <div>
                    <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                    <label for="question-1-answers-B">B) Class </label>
                </div>
                <div>
                    <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                    <label for="question-1-answers-C">C) Styles </label>
                </div>
                <div>
                    <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                    <label for="question-1-answers-D">D) Font</label>
                </div>
            </li>
        </div>

        <div id="right">
            
        </div>
        <br>
    </form>
    <form action="quiz2.php" method="POST">
        <input type="submit" name="next" value="next">   
    </form>
</body>
</html>
