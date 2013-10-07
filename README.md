How to make IVR with HTTP OzML
==============

In this guide you can see an example on how to make an Interactive Voice Response (IVR) with the help of your own webserver using an OzML script. In addition you will see how to identify a client if he provides his PIN code. If the PIN code is correct, the customer can get information about his account.

Ozeki Phone System XE makes it easy to connect it to other IT application through HTTP API. An OzML script can be placed on an own website. It can be given with the Ozeki Phone System XE HTTP API which website’s content the Ozeki Phone System XE should ask for in case of an incoming call.

Step 1: Place your OzML script on your webserver
==============

In this example you can see three php files.

The first file (incomingcall.php) contains the welcome IVR menu that will be played to the client who calls your company.

The second file (dtmf_received.php) will be responsible for verifying the PIN code.

Finally, the third file (members_area.php) will query the account balance of customer based on the account id and talk it to the customer.

Step 2: Subscribe for incoming calls
==============

After you have copied your files to the webserver, you need to provide the address of your PHP file that will receive the incoming calls. Click on Productivity from the upper menu bar and then select HTTP API. On the following page, click on Subscribe for events button and then give the HTTP address of the incomingcall.php file.

Learn more
==============
http://www.ozekiphone.com/ivr-with-http-ozml-1144.html
