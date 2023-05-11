<?php
/**
 * Template name: Homepage Template
 *
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Esquire\'s_Equations
 */

get_header();
the_content();

?>

<main id="primary" class="site-main">
    <div class="container mt-4 mb-4">
        <div class="card text-center">
            <h1>Welcome to Esquir'e Equations!</h1>
            <h3>Instructions:</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In quam quibusdam vero aperiam tempore minus
                ratione sunt, sed dignissimos eaque dolor odit autem quis iure.</p>
        </div>

        <div class="container mt-5 mb-5 bg-info">
            <h1 class="text-center">Random Physics Trivia Question</h1>
            <form class="m-3" class="p-3">
                <div id="question" class="p-3"></div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="answer" id="answer1" value="">
                    <label class="form-check-label" for="answer1"></label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="answer" id="answer2" value="">
                    <label class="form-check-label" for="answer2"></label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="answer" id="answer3" value="">
                    <label class="form-check-label" for="answer3"></label>
                </div>
                <div class="text-center mt-3">
                    <button type="button" class="btn btn-primary" onclick="checkAnswer()">Submit</button>
                </div>
                <div class="text-center mt-3">
                    <button type="button" class="btn btn-primary" onclick="nextButton()">Next</button>
                </div>
            </form>
            <div id="result" class="p-3">

            </div>
        </div>

        <!-- <div class="card d-flex bg-info m-3">
      <div class="card-body">
        <h5 class="card-title">Physics Trivia</h5>
        <p class="card-text">What is the speed of light in a vacuum?</p>
        <form>
          <div class="form-group">
            <label for="answerInput">Your Answer:</label>
            <input type="text" class="form-control" id="answerInput" name="answerInput" placeholder="Enter your answer">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div> -->
    </div>

</main><!-- #main -->
<script>
    // Define an array of question objects

    var questions = [
        {
            question: "What is the formula for Newton's second law?",
            correctAnswer: "F = ma",
            incorrectAnswers: ["E = mc^2", "a = dv/dt", "F = G(m1m2/r^2)"]
        },
        {
            question: "What is the SI unit for electric charge?",
            correctAnswer: "Coulomb",
            incorrectAnswers: ["Ampere", "Volt", "Ohm"]
        },
        {
            question: "What is the speed of sound in air at room temperature?",
            correctAnswer: "343 m/s",
            incorrectAnswers: ["299,792,458 m/s", "1,000 km/h", "768 mph"]
        },
        // Add more question objects as needed
    ];

    // Select a random question object from the array
    var randomIndex = Math.floor(Math.random() * questions.length);
    var randomQuestion = questions[randomIndex];

    // Display the question and answer choices
    function displayQuestion() {
        var questionElement = document.getElementById("question");
        questionElement.innerHTML = "<h3>" + randomQuestion.question + "</h3>";

        var answer1Element = document.getElementById("answer1");
        answer1Element.value = randomQuestion.correctAnswer;
        answer1Element.nextElementSibling.innerHTML = randomQuestion.correctAnswer;

        var answer2Element = document.getElementById("answer2");
        answer2Element.value = randomQuestion.incorrectAnswers[0];
        answer2Element.nextElementSibling.innerHTML = randomQuestion.incorrectAnswers[0];

        var answer3Element = document.getElementById("answer3");
        answer3Element.value = randomQuestion.incorrectAnswers[1];
        answer3Element.nextElementSibling.innerHTML = randomQuestion.incorrectAnswers[1];

        // Clear the previous result
        var resultElement = document.getElementById("result");
        resultElement.innerHTML = "";
    }

    displayQuestion(); // Display the first question

    // Check the user's answer and display the result
    function checkAnswer() {
        var selectedAnswer = document.querySelector('input[name="answer"]:checked').value;
        var resultElement = document.getElementById("result");
        if (selectedAnswer === randomQuestion.correctAnswer) {
            resultElement.innerHTML = "<div class='alert alert-success' role='alert'>Correct!</div>";
        } else {
            resultElement.innerHTML = "<div class='alert alert-danger' role='alert'>Incorrect. The correct answer is " + randomQuestion.correctAnswer + ".</div>";
        }
    }
    answerButtons.forEach(function (button) {
        button.addEventListener('click', function () {
            if (button.textContent === currentQuestion.answer) {
                score++;
                resultElement.textContent = 'Correct!';
            } else {
                resultElement.textContent = 'Wrong!';
            }
            // Show the result message and "Next" button
            resultElement.style.display = 'block';
            nextButton.style.display = 'block';
            // Disable all answer buttons
            answerButtons.forEach(function (button) {
                button.disabled = true;
            });
        });
    });

    // Set up a click event listener for the "Next Question" button
    var nextButton = document.getElementById("nextButton");
    nextButton.addEventListener("click", function () {
        // Select a new random question object
        randomIndex = Math.floor(Math.random() * questions.length);
        randomQuestion = questions[randomIndex];
        // Display the new question
        displayQuestion();
    });


</script>

<?php

get_footer();