<?php

/**
 * Created by PhpStorm.
 * User: User
 * Date: 07.06.2018
 * Time: 13:00
 */
class SendMail
{

  // функция для проверки количества символов в тексте
  function checkTextLength($text, $minLength, $maxLength)
  {
    $result=false;
    $textLength=mb_strlen($text, 'UTF-8');
    if(($textLength>=$minLength) && ($textLength<=$maxLength)){
      $result=true;
    }
    return $result;
  }

  //фильтрация входящих данных
  function filter($input)
  {
    $text=filter_var($input, FILTER_SANITIZE_STRING); // защита от XSS
    return $text;
  }


  //валидация форм
  //слово фильтруется, а потом проверяется на количество символов
  function length($input, $min, $max)
  {
    $text=$this->filter($input);
    $checkTextLength=$this->checkTextLength($text, $min, $max);
    return $checkTextLength;
  }

  //вывод ошибки невалидной формы
  function res($nameInput, $text)
  {
    $data[$nameInput]="<b>$nameInput</b>".$text;
    $data['result']='error';
    return $data;
  }


  //формирование шаблона письма
  function bodyMail($search, $var, $template)
  {
    $data=str_replace($search, isset($var) ? $var : '-', $template);
    return $data;
  }


  //отправка письма в файл
  function sendFile($name){
    $text = isset($name) ? $name : '-';
    return $text;
  }
  //отправка письма в файл
  function label($label, $name){
    $output = $label . $this->sendFile($name) . "\n";
    return $output;
  }

}