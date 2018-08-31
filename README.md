Calculator Using PHPUnit

What is Calculator?

Calculator is a simple calculator that supports basic arithmetical operations (For now considered only addition operation is considered i.e add or sum). Unit testing is performed using Phpunit. 

This sample demonstrates the following features:

    Unit testing using PHPUnit
    Use of composer
    Autoloading through composer psr4
    Coding style PSR2

Requirements
Since this project to developed to performed unit testing using Phpunit, it is prerequisite to install Php 7

Follow these before you run the sample:

    Git clone repository https://github.com/sonishikha/Calculator in your php document root directory.
    Install Composer
    Go to cloned directory and run composer

Getting Started

    To make calculator work, in the terminal go to the folder where you have cloned the project.
    Type in following command to test calculator functionality:
        php calculator.php sum 2,3
     Note: Have covered only addition operation senario for now.
   
Running the tests

    To run the test cases written in phpunit, go to the terminal and type in:
    	./vendor/bin/phpunit
    This will show test result.
    
    Two errors will be show, which covers invalid testcase scenario;
    
    Testcases are avaible in /tests/CalculateTest.php
    
Versioning

Used github for versioning. Repository is https://github.com/sonishikha/Calculator

Acknowledgments

    Used Phpunit for the first time
    Use of composer to load packages and autoloading was new to me
    Use of autoloading and namespace was fun
    Using a coding standard like PSR2 was a lesson to me
    I think application can be more modularized by using constants, enumeration, create utility file, interface, etc. But due to time constrain cannot cover those features.
    
