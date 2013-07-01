<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Базовий клас віджетів
 */
class Controller_Widgets extends Controller_Template {
	
	public function before()
	{
		parent::before();
        // якщо даний запит є запитом ініціалізації (тобто він викликався з браузера а не з іншого контроллера)
        // то забороняємо виводити даний віджет
        if(Request::current()->is_initial())
        {
            $this->auto_render = FALSE;
        }
	}
}