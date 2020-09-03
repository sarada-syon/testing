<?php

shell_exec("git switch test");

shell_exec("git pull origin master");

shell_exec("git add --all");

shell_exec("git commit -m 'test'");

shell_exec("git push");

?>