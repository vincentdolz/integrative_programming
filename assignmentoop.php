<?php
    class User{
        public $Name;
        public $Username;
        public $Email;

        function __construct($Name, $Username, $Email){
            $this->name = $Name;
            $this->uname = $Username;
            $this->email = $Email;
        }

        function addFriend(){
            echo  $this->name, " Added a friend."; 
        }
        function postStatus(){
            echo  $this->name, " Posted a status."; 
        }
    }

    $me = new User("Rey Vincent Dolz", "Heisenberg", "vincentdolz12@gmil.com");
    $me->addFriend();
    echo "<br>";
    $me->postStatus();
?> 