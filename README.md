EtKey
=====


Simple PHP etkey generator for Wolfenstein: Enemy Territory.


This code was created to allow LAN party players without Internet access to
obtain an etkey file to facilitate XP and Stat saves on the server.



Installation:


Install into the web server DocRoot directory.

Make sure that the etkey-next.dat file can be written by the web server user.



Local Customization:


Adjust the script values as needed.  These are in the genkey.php file.


The default values are as follows:


  $keyPrefix: 000000100

    This seems to be a defacto standard from observed keys from other sources.
    This does not seem to be used to create the GUID.


  $keyBase: 299330745953

    This base was obtained from etkey.org, and may be modified for local use.
    For a small number of friends who primarily play on a single server, there
    is probably no reason to change it.  Players who use many servers are 
    advised to use one of the established key sources on the internet for
    their key, not this script.  This number, and the $keySeq seem to be the
    sole basis for the GUID.


  $keySuffix: 480

    This number is entirely arbitrary.  This does not seem to be used for the
    GUID.


The etkey-next.dat file contains the next sequence number which will be 
assigned to $keySeq, which will be appended to $keyBase to create the
GUID hash at the server side.



License-ish:


This code is provided free of any restrictions.  It has been created from data
obtained from a number of Internet sources.  This code is entirely the product
of this author, and does not contain any direct code from any other source.
The keys generated by the code are not universally unique.  It is very likely
that two servers using this code will assign the same key to different users.
Again, players joining many servers are advised to obtain a code from one of
the more definitive sources on the Internet.


25 Feb 2013

-Drummond

