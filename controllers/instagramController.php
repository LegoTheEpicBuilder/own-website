<?php
include("models/instagramModel.php"); 

    class InstagramController{
        private $instagramModel;

        public function __construct()
        {
            $this->instagramModel = new InstagramModel();
        }

        public function AddNewUser($account)
        {
            return $this->instagramModel->AddUser($account);
        }
    }
?>