<?php

session_start();
session_unset("user");
header("Location: landing_page.html"); ?>