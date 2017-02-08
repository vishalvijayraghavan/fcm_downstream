# FCM Downstream messaging using http using PHP

FCM basically supports two types of downstram messaging <a href="https://firebase.google.com/docs/cloud-messaging/http-server-ref">HTTP</a> and <a href="https://firebase.google.com/docs/cloud-messaging/xmpp-server-ref">XMPP</a> :

This script facilitate Php implementation for FCM Downstream messaging using http.
This script requires five inputs:</br>
1. Server key </br>
&nbsp;&nbsp;&nbsp;Click on the settings icon/cog wheel next to your project name at the top of the new Firebase Console</br>
&nbsp;&nbsp;&nbsp;Click Project settings</br>
&nbsp;&nbsp;&nbsp;Click on the Cloud Messaging tab</br>
&nbsp;&nbsp;&nbsp;The key is right under Server Key.</br>
2. Device Token</br>
&nbsp;&nbsp;&nbsp;This one can through app only using getToken().</br>
3. Message</br>
4. Title</br>
5. Payload data </br>
&nbsp;&nbsp;&nbsp;In script some default data is considered so asper your requirement plz update.

At the time of creation this script is working fine but this post is public expect some changes in future.  

Thanks,</br>
@Vishal VVR.
