I've updated SiriPi to work with WolframAlpha.  So you can ask your Raspberry pi any question you'd like as long as you say question at the beginning of the sentence.  Try "Question How big is the moon?".  
Copy the "SiriPi" folder from the "Raspberry Pi App" folder to "/var/www" on your Raspberry Pi.  Then "sudo visudo"
and add the line "www-data ALL=(ALL) NOPASSWD: ALL" without the quotes at the end of the file.  Once you've done that you should be able to take the .apk file from the android App folder and email it to yourself.  
Once received on your Android phone, you can install the application.  Now start talking to your pi.




Don't forget to put your personal WolframAlpha Api Key in detect.php on line 93.  Here's the link to get one.  
https://developer.wolframalpha.com/portal/apisignup.html



This is a fork originally from minimattapps / SiriPi.  Thanks for sharing matt.  
https://github.com/minimattapps/SiriPi

-----------------

SiriPi is an Android App + Raspberry Pi App combo that allows you to control your Raspberry Pi from your Android Phone
It is powered by Java (Android App), PHP and the Google Speech to Text API.

This Project is licensed under the GPL 2.0 
http://www.gnu.org/licenses/gpl-2.0.html
