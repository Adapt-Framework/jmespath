<?php

namespace JmesPath{
    
    class bundle_jmespath extends \adapt\bundle{
        
        public function __construct($data){
            parent::__construct('jmespath', $data);
        }
        
        public function boot(){
            if (parent::boot()){
                require(ADAPT_PATH . "{$this->name}/{$this->name}-{$this->version}/src/JmesPath.php");
                return true;
            }
            
            return false;
        }
        
    }
    
}

?>