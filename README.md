# ICPP - Interactive Charts using Polymer and PHP 
This is my Last solo-jam for the course [IMT2581 - Rapid Prototyping and Innovation](https://www.ntnu.edu/studies/courses/IMT2581/2018/1#tab=omEmnet) with the [IMT2291 - Web Technology](https://www.ntnu.edu/studies/courses/IMT2291#tab=omEmnet) course in mind.

## Note
* This project can be looked as a kind of plugin for my [bachelor project](https://github.com/JohanAanesen/CSAMS) and is for displaying charts of the databse contents.
* It's also to practice for an exam I have that involves PHP, Polymer, Twig and technologies like that.
* I use ex `users.id, users.name, users.email_student, users.teacher, users.email_private` instead of `*` in queries for safer extraction.

## Requirements
**The requirements was very loose, so I make my own** 
* ~~Get number of delivered submissions(re-deliver too) to the different assignments/courses.~~ This dosen't work beacuse when a user re-deliver or withdraws an assignment and deliver again, the assignment will only be updated. i.e there will always be max one assignment submission for each user. 
* Get number of 'active' users vs. non active. The users that don't belong to any courses, and put in pie chart + when clicked show list or more info atleast.
* Get most logged events

## TODO
* Implement twig
* Get more data to create charts with
* Check out `google charts polymer` and implement something like that

## Installation
1. Clone project in to `C:\xampp\htdocs`
2. Start xampp
3. Export `cs53` database with settings like this: ![image](https://user-images.githubusercontent.com/32249338/58019361-a4b6b100-7b05-11e9-84c8-2d11bf90b6b7.png)
3. Profit <!-- TODO add more here later -->

## Sources
1. Former project from [IMT2291](https://www.ntnu.edu/studies/courses/IMT2291#tab=omEmnet) https://github.com/JohanAanesen/MeToobe
2. Bachelor project where the data will come from https://github.com/JohanAanesen/CSAMS
