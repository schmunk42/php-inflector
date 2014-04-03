<?php

echo "Inflector Test";

require('BaseInflector.php');

echo "<hr>";
echo BaseInflector::slug('Höäpeäöäich Médsui27:;;,.1! *"29p');
echo "<hr>";
echo BaseInflector::slug('HIJO"$(/&T §!"(/&T"§:;;,.1! *"29p');
echo "<hr>";
echo BaseInflector::slug('38917 jiodj d                         ! *"29p');
echo "<hr>";
echo BaseInflector::slug('каи циефле ///!!!');

