# Charts using PHP and Google-Graphs
This is my Last solo-jam for the course [IMT2581 - Rapid Prototyping and Innovation](https://www.ntnu.edu/studies/courses/IMT2581/2018/1#tab=omEmnet) with the [IMT2291 - Web Technology](https://www.ntnu.edu/studies/courses/IMT2291#tab=omEmnet) course in mind. 

**Changes from original idea**
The original plan was to use polymer and have interactive charts. 
* Learning Polymer would have been taking up too much time from the actual development so i skipped that part.

## Note
* This project can be looked as a kind of plugin for my [bachelor project](https://github.com/JohanAanesen/CSAMS) and is for displaying charts of the databse contents.
* It's also to practice for an exam I have that involves PHP, Polymer, Twig and technologies like that.
* I use ex `users.id, users.name, users.email_student, users.teacher, users.email_private` instead of `*` in queries for safer extraction.
* The IDE might say there is some errors in `twig/index.html`, but that's wrong. Everything works
* I lost some time to the sql queries because some of them took longer than expected.

## Requirements
**The requirements was very loose, so I make my own** 
* ~~Get number of delivered submissions(re-deliver too) to the different assignments/courses.~~ This dosen't work beacuse when a user re-deliver or withdraws an assignment and deliver again, the assignment will only be updated. i.e there will always be max one assignment submission for each user. 
* Get number of 'active' users vs. non active. The users that don't belong to any courses, and put in pie chart + when clicked show list or more info atleast.
* Get most logged events

## TODO
* Implement twig
* Get more data to create charts with
* Check out `google charts polymer` and implement something like that
* Check out triggers https://developers.google.com/chart/interactive/docs/gallery/piechart

## Installation
1. Clone project
2. Export `cs53` database with settings like this: ![image](https://user-images.githubusercontent.com/32249338/58019361-a4b6b100-7b05-11e9-84c8-2d11bf90b6b7.png)
3. Start XAMPP
4. Import database with name `cs53`
5. Run `composer install` in project
6. Profit

## Sources
1. Former project from [IMT2291](https://www.ntnu.edu/studies/courses/IMT2291#tab=omEmnet) https://github.com/JohanAanesen/MeToobe
2. Bachelor project where the data will come from https://github.com/JohanAanesen/CSAMS
3. https://developers.google.com/chart/interactive/docs/gallery

## Other
I had a lot of techincal issues as I'm kinda new to PHP, twig and polymer.

## Pictures
![image](https://user-images.githubusercontent.com/32249338/58111150-3c44fe00-7bf1-11e9-87e9-8e1dd98a17e0.png)

![image](https://user-images.githubusercontent.com/32249338/58111173-47982980-7bf1-11e9-879b-ff26503a3d34.png)

![image](https://user-images.githubusercontent.com/32249338/58111261-71515080-7bf1-11e9-9ed6-be872d75a907.png)

![image](https://user-images.githubusercontent.com/32249338/58111270-76ae9b00-7bf1-11e9-942a-e11c32c40a37.png)

![image](https://user-images.githubusercontent.com/32249338/58111280-7ca47c00-7bf1-11e9-9165-abaa2b9b8f31.png)

![image](https://user-images.githubusercontent.com/32249338/58111305-83cb8a00-7bf1-11e9-9c13-9a226c4229b0.png)

