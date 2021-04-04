<?php

    interface Handler {
        public function setNext(Handler $h);
        public function handle($request);
    }

    class BaseHandler implements Handler {
        private Handler $next;

        function setNext(Handler $h){
            $this->next = $h;
        }

        function handle($request){
            if($this->next){
                $this->next->handle($request);
            }
        }
    }

    class ConcreteHandler1 extends BaseHandler{
        function handle($request){
            if($request == true){
                echo 'Concrete Handler 1';
            } else {
                parent::handle($request);
            }
        }
    }

    class ConcreteHandler2 extends BaseHandler{
        function handle($request){
            if($request == false){
                echo 'Concrete Handler 2';
            } else {
                parent::handle($request);
            }
        }
    }

    $h1 = new ConcreteHandler1();
    $h2 = new ConcreteHandler2();
    $h1->setNext($h2);

    $h1->handle(true);

?>