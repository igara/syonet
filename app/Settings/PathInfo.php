<?php

namespace App\Settings;

class PathInfo {
    
    /**
     * publicのindex.phpの上のディレクトリパスを返却する
     * 
     * @param void
     * @return String publicのindex.phpの上のディレクトリパス
     */
    public function getIndexPHPForwardPath() {
        chdir('..');
        return getcwd();
    }

    public function getNodePath() {
        $nodeModulesPath = $this->getIndexPHPForwardPath() . '/node_modules';
        $nodePathInfo = ['phantomjs' => $nodeModulesPath];
        
        
    }

}


