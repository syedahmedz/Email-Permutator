# Email-Permutator - Gradberry Labs
Checks Email permutations and their validity

Ever wanted to check if a persons email exists, furthermore find that persons email by permutating several combinations of their email. This little PHP web app lets you do just that.

Created using a combination of open source code, this web app is ready to go, just clone our repo and deploy. Add an empty uploads folder if you wish to upload CSV files. 

Supports full CSV email list uploads to check emails for validity 
Supports Email permutation checks

To add more permutation types, simply edit the permutatorEmail.class.php file 

-It currently supports first name and last name permuation types for all domains

IPV4 Calculations are done in the DNS.php file, located in DNS folder

To see it running, test it out here http://gb-emailvalidator.azurewebsites.net/

Suggested hosting: We suggest you host this on a VPS host or a VM, it can put pressure on your server if you use shared hosting so be careful. 

Prettifying 

This isn't exactly the worlds best looking email permuatator and validator, if you want to make it look good...fork in and commit, we'd love some help. 
