<?php
  function julyCheck ($input) {
     if ($input == 'july' || $input == 'July') {
        print "It's July, so it can get really hot.";
     } else {
        print "It’s not July, so at least we’re not in the peak of the heat.";
        }
}

julyCheck ('');
?>
