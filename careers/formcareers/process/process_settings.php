<?php

/*
 * Форма обратной связи (https://itchief.ru/lessons/php/feedback-form-for-website)
 * Copyright 2016-2018 Alexander Maltsev
 * Licensed under MIT (https://github.com/itchief/feedback-form/blob/master/LICENSE)
 */

// стартовый путь ('http://mydomain.ru/')
$startPath = 'http://www.mcompany.com.ua' . (isset($_SERVER['HTTPS']) ? 's' : '') . '://' . $_SERVER['HTTP_HOST'] . '/';
// максимальный размер файла 512Кбайт (512*1024=524288)
const MAX_FILE_SIZE = 524288;
// директория для хранения загруженных файлов
$uploadPath = dirname(dirname(__FILE__)) . '/uploads/';
// разрешённые расширения файлов
$allowedExtensions = array('gif', 'jpg', 'png');

// от какого email будет отправляться письмо
const MAIL_FROM = 'rielt@mcompany.com.ua';
// от какого имени будет отправляться письмо
const MAIL_FROM_NAME = 'Millions';
// тема письма
const MAIL_SUBJECT = 'Сообщение с формы обратной связи';
// кому необходимо отправить письмо
const MAIL_ADDRESS = 'millions.immovables@gmail.com';

// настройки mail для информирования пользователя о доставке сообщения
const MAIL_SUBJECT_CLIENT = 'Ваше сообщение доставлено';