#Notes
  * We uh, don't support IE.  We got edge tho fam.

#Objectives

#Backend Objectives
  * User sets a 'node', with a filter, and based on their current location
  * The node is sent as a post request to the server
  * server parses the post request and adds the node to the database
  * the server then pushes out a notification to all users in the area who have the filter matching and are in the correct radius based on their settings
  * make the available data continging a users current request avialable via a rest endpoint


#Dependencies
    Google maps api https://developers.google.com/maps/documentation/javascript/   AIzaSyAerCKbovDWR9UMFR_ZMOfOao3e2bfBhzg
    Google places api https://developers.google.com/places/javascript/  AIzaSyCmDjLF1JlR93gIzz4vfVw7JCNYHY0HuTk

#Nginx configuration
  * Letsencrypt using this tutorial ./letsencrypt-auto --config /etc/letsencrypt/configs/zacharyjacobcollins.me.conf certonly
  * pointing at zacharyjacobcollins.me

run with -vvvv
