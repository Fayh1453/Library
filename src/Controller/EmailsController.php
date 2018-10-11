<?php
   namespace App\Controller;
   use App\Controller\AppController;
   use Cake\Mailer\Email;

   class EmailsController extends AppController{
      public function index(){
         $email = new Email('default');
         $email->to('lr.infographie@gmail.com')->subject('Testing')->send('Fonctionne!');
      }
   }
?>