<?php

namespace app\controllers;

Class Page1 {

    public function action_showPage1() {
        if (!inRole('admin')) {
            getMessages()->addError("Tylko admin może wejść na tę stronę!");
//            getRouter()->setAction('calcShow');
//            getRouter()->go();
            forwardTo('calcShow');
        } else {
            getMessages()->addInfo('Witaj w kolejnej stronie');
            $this->getFromDatabase();
            $this->generateView();
        }
    }

    
     private function getFromDatabase() {
        $data = getDatabase()->select("wyniki", [
            "idwynik",
            "kwota",
            "liczba_lat",
            "procent",
            "rata",
            "data"
        ]);
        
        getSmarty()->assign('data', $data);
    }
    
    
    public function generateView() {
        getSmarty()->assign('user', unserialize($_SESSION['user']));
        getSmarty()->assign('page_title', 'Kolejna strona');
        getSmarty()->display('Page1View.tpl');
    }
}
