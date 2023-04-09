<?php
class Worker extends User
{
    public $access; //доступ
    public $home_dir;
    
    //Сканирование домашней директории
    public function scan()
    {
        return scandir('.');
    }
}
?>