<?php

echo "Inflector Test";

require('PhInflector.php');

echo "<hr>";
echo PhInflector::slug('Höäpeäöäich Médsui27:;;,.1! *"29p');
echo "<hr>";
echo PhInflector::slug('HIJO"$(/&T §!"(/&T"§:;;,.1! *"29p');
echo "<hr>";
echo PhInflector::slug('38917 jiodj d                         ! *"29p');
echo "<hr>";
echo PhInflector::slug('каи циефле ///!!!');

