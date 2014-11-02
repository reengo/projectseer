<?php
/**
 *  Declare all functions here
 */

/**
 * Convert $var to human readable string.
 *
 * @param array|string $var
 * @param string $label
 * @param boolean $echo
 * @return string
 */
function debug($var, $label = null, $echo = true)
{
	require_once 'Zend/Debug.php';
	return Zend_Debug::dump($var, $label, $echo);
}

/**
 * Loads a model from a specific module (e.g. admin, news, default ...)
 *
 * @param string $model
 * @param string $module
 * @return Model
 * @throws Zend_Controller_Exception
 */
function loadModel($modelName, $module = '')
{
    $front = Zend_Controller_Front::getInstance();
    
    /**
     * Get Base directory
     */
    $request = $front->getRequest();
    if (!$module) {
        $module  = $request->getModuleName();
    }
    $dirs    = $front->getControllerDirectory();
    if (empty($module) || !isset($dirs[$module])) {
        $module = $front->getDispatcher()->getDefaultModule();
    }
    $baseDir = dirname($dirs[$module]) . DIRECTORY_SEPARATOR;
    
    /**
     * Define modulename
     */
    if (empty($module)) {
        $moduleName = $request->getModuleName();
    } else {
        $moduleName = $module;
    }

    if ($moduleName && $moduleName != 'default') {
        $moduleName = new Inflector($moduleName);
        $moduleName = $moduleName->camelize() . '_';
    } else {
        $moduleName = '';
    }
    
    /**
     * Get the model
     */
    $modelFile = $modelName . '.php';
    $modelDir  = $baseDir . 'models' . DIRECTORY_SEPARATOR;
    if (!file_exists($modelDir . $modelFile)) {
        throw new Zend_Controller_Exception(
            'Missing model:' . $modelFile . ' in directory ("' . $modelDir . '")');
    } else {
        require_once $modelDir . $modelFile;
        $model = strtolower($modelName);
        $modelClass = new Inflector($model);
        $modelClass = $moduleName . $modelClass->camelize();
        if (class_exists($modelClass)) {
            return new $modelClass;
        } else {
            throw new Zend_Controller_Exception("Missing class: $modelClass in file ('$modelFile')");
        }
    }
}

// function hex2bin($hexdata)
// {
//     $bindata = '';
    
//     for ($i = 0; $i < strlen($hexdata); $i += 2) {
//         $bindata .= chr(hexdec(substr($hexdata, $i, 2)));
//     }
    
//     return $bindata;
// }

function except()
{
    $args = func_get_args(); 
    return array('except' => $args);
}

function only()
{
    $args = func_get_args();
    return array('only' => $args);
}