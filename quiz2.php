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
    <from action="" method="post">
        <div class="ques" id="left">
            <li>
                <p>4) How do you insert a comment in a CSS file?</p>
                <div>
                    <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                    <label for="question-1-answers-A">A) // this is a comment // </label>
                </div>
                <div>
                    <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                    <label for="question-1-answers-B">B) // this is a comment</label>
                </div>
                <div>
                    <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                    <label for="question-1-answers-C">C) /* this is a comment */</label>
                </div>
                <div>
                    <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                    <label for="question-1-answers-D">D) ' this is a comment</label>
                </div>
            </li>

            <li>
                <p>5) The label tag links text to which property?</p>
                <div>
                    <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                    <label for="question-1-answers-A">A) id   </label>
                </div>
                <div>
                    <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                    <label for="question-1-answers-B">B) class </label>
                </div>
                <div>
                    <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                    <label for="question-1-answers-C">C) input  </label>
                </div>
                <div>
                    <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                    <label for="question-1-answers-D">D) type </label>
                </div>
            </li>

            <li>
                <p>6) What does the "div" tag do?</p>
                <div>
                    <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                    <label for="question-1-answers-A">A) Divides content   </label>
                </div>
                <div>
                    <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                    <label for="question-1-answers-B">B) Makes text bold </label>
                </div>
                <div>
                    <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                    <label for="question-1-answers-C">C) Makes text bigger  </label>
                </div>
                <div>
                    <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                    <label for="question-1-answers-D">D) Puts text into a list </label>
                </div>
            </li>
        </div>
        <!--        <div  id="right" class="img">
                    <img src="./image/nao.jpg">
                    
                </div>-->       
    </from>

    <br>
    <form action="quiz.php" method="POST">    
        <input type="submit" name="previous" value="Previous">   
    </form>
    <hr>
    <center>
        <form action="check.php" method="POST">    
            <input type="submit" name="submit" value="Submit">   
        </form>
    </center></hr>
</body>
</html>
