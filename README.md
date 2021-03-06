# Project 2 dwa15

## Live URL
<http://p2.samgrise.me/>

## Description
A xkcd password generator using php and forms, with the words used in the password scraped from a website. The features available include: # of words, choice of separator, adding numbers and their quanitity, adding symbols and their quantity, choosing case. Input values and error messages should persist on submission.

## Demo
https://youtu.be/PNnMNS9l4Os

## Details for teaching team
I wasn't sure how detailed you wanted sourcing, so I included pretty much all of the sources I used for figuring out the various php functions and their usage. I did have some issues with the wordscraper that I queried on piazza: I couldn't get my regex expression to grab precisely what I wanted, so I cleaned my matches up after; I set up a condition so that I wouldn't continuously scrape the website for words, but the live server wouldn't allow file writing and was recommended against allowing write priviledges due to security, so the file there is pre loaded with the scrape, locally everything works. I wanted to note that during my demo my internet slowed down when I was showing case choices, and that the application is not normally slow to respond.
For code blocks if ( isset($_GET['add_Number'])){} if (isset($_GET['add_Symbol'])){} although they were similar the differences were dispersed enough, that I felt they didn't warrant getting turned into functions.

## Outside code
* Bootstrap: http://getbootstrap.com/css/#overview
* Bootstrap cdn: https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css
* Word list: https://en.wikipedia.org/wiki/List_of_animal_names
* images are from Word free clipart

## All of the following are references, majority from php.net for figuring out functions and function usage 
* Reference to figure out how to check for an empty string in php: http://stackoverflow.com/questions/11213125/what-is-the-php-syntax-to-check-is-not-null-or-an-empty-string 
* ascii table: http://www.ascii-code.com/ 
* Reference to keep input after submission of form: http://stackoverflow.com/questions/13716443/how-to-keep-input-in-fields-after-form-submitted-for-further-update
* Reference for word scraping into text file: http://stackoverflow.com/questions/27121727/how-to-extract-complete-html-source-code-and-save-it-in-a-text-file-by-using-php
* Reference for figuring out preg_match_all: http://code.runnable.com/U7El7zcmutFiSWiX/finding-hash-and-mention-tag-in-string-for-php-and-preg_match
* Reference for isNaN in js: http://www.w3schools.com/jsref/jsref_isnan.asp
* Reference for figuring out how to read file into array. Showed someone's use of explode & file_get_contents: http://stackoverflow.com/questions/25876002/php-read-list-from-website-into-array
* Reference to regex expressions: http://regexr.com/
* Reference to Susan's wordpress scraper guide: https://gist.github.com/susanBuck/a81365a69d3a8649db0b
* Reference to filesize function: http://php.net/manual/en/function.filesize.php
* Reference to file-exists function: http://php.net/manual/en/function.file-exists.php
* Reference for rand function: http://php.net/manual/en/function.rand.php
* Needed to make sure key exists in $_POST: http://php.net/manual/en/function.array-key-exists.php 
* Reference to figure out if value is numeric: http://php.net/manual/en/function.is-numeric.php 
* Reference for strtoupper function: http://php.net/manual/en/function.strtoupper.php
* Reference for preg_match_all function: http://php.net/manual/en/function.preg-match-all.php* Reference for file_put_contents: http://php.net/manual/en/function.file-put-contents.php
* Reference for preg_replace: http://www.php.net/manual/en/function.preg-replace.php
* Reference for explode: http://php.net/manual/en/function.explode.php
* Reference for file_get_contents: http://php.net/manual/en/function.file-get-contents.php
* Reference for strtolower function: http://php.net/manual/en/function.strtolower.php
* Reference for chr function. In order to add a variety of symbols I used ascii and converted to single char strings: http://php.net/manual/en/function.chr.php 
* Reference for string operators: http://php.net/manual/en/language.operators.string.php