<?php
session_start();
                                if(isset($_SESSION['password'])){
                                    session_destroy();
                                    header('Location:../login.php');
                                }
                                ?>