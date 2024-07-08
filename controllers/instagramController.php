<?php
include("models/instagramModel.php"); 

    class InstagramController{
        private $instagramModel;

        public function __construct()
        {
            $this->instagramModel = new InstagramModel();
        }

        public function AddNewAccount($account)
        {
            return $this->instagramModel->AddAccount($account);
        }
    }
?>