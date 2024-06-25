@echo off
title capture the flag

setlocal enabledelayedexpansion

rem Define the correct password
set correct_password=Dragon123

echo Welcome to the Quiz Game!
echo Answer all questions correctly to get the flag.

rem Questions and Answers (format: question|correct_answer)
set /a question_number=0
:ask_question
set /a question_number+=1

rem Display questions based on question_number
if %question_number% equ 1 (
    set "question=What is the capital of France?|Paris"
) else if %question_number% equ 2 (
    set "question=Which planet is known as the Red Planet?|Mars"
) else if %question_number% equ 3 (
    set "question=What is the largest mammal on Earth?|Blue whale"
) else if %question_number% equ 4 (
    set "question=What is the currency of Japan?|Yen"
) else (
    goto :end_questions
)

for /f "tokens=1,2 delims=|" %%a in ("%question%") do (
    set "question_text=Question %question_number%: %%a"
    set "correct_answer=%%b"
)

echo.
echo %question_text%
set /p "answer=Your answer: "

rem Check if the answer is correct
if /i "%answer%"=="%correct_answer%" (
    echo Correct answer! Moving to the next question.
    pause
    cls
    goto :ask_question
) else (
    echo Incorrect answer! Try again.
    pause
    cls
    goto :ask_question
)

:end_questions
echo Congratulations! You answered all questions correctly.
echo Here is the flag : UNITED STATES

pause >nul
