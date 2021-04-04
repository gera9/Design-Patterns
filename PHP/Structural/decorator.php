<?php

	interface Component{
       	public function execute();
    }

    class ConcreteComponent implements Component{
       	public function execute(){
        	return 'Message';
        }
    }

    class BaseDecorator implements Component{
       	private Component $wrappee;

       	public function __construct(Component $c){
            $this->wrappee = $c;
        }

        public function execute(){
        	return $this->wrappee->execute();
        }
    }

    class ConcreteDecorator extends BaseDecorator{
    	public function execute(){
        	return $this->extra(parent::execute());
        }

        public function extra(String $data){
    		return 'Added ' . $data;
        }
    }

	$a = new ConcreteComponent();
    $b = new ConcreteDecorator($a);

    echo $b->execute();
?>
