<?php
function includeControllerIfExist(string $controllerName){
    $controllerPath = DOCROOT."controllers/".$controllerName.".php";

    if(file_exists($controllerPath)){
        include $controllerPath;
        return true;
    }else{
        return false;
    }
}

function callActionIfExist(string $action){
    $action = "action_".$action;
    if (function_exists($action)){
        $action();
        return true;
    }else{
        return false;
    }
}

function navigate($controller,$action){
    if(!includeControllerIfExist($controller)){
        echo "Контроллер не существует";
        //TODO: 404
    }else if(!callActionIfExist($action)){
        echo "Функция обработки запроса не найдена";
        //TODO: 404
    }
}

function renderView(string $view,array $data =[]){
    extract($data);
    $viewFile = DOCROOT."views/".$view.".php";
    include DOCROOT."template.php";

}
