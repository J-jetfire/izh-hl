<?php
/**
 * Единая система подключений для всего сайта
 * Подключает все необходимые компоненты одним вызовом
 */

// Предотвращаем прямое выполнение файла
if (!defined('INCLUDE_CHECK')) {
    die('Прямой доступ к файлу запрещен');
}

// Подключаем основную конфигурацию (БД + кубки)
require_once __DIR__ . '/database.php';

// Включаем буферизацию вывода для предотвращения проблем с заголовками
if (!ob_get_level()) {
    ob_start();
}

/**
 * Подключает функции для системы логина
 */
function includeLoginFunctions() {
    static $included = false;
    if (!$included) {
        require_once dirname(__DIR__) . '/login/functions.php';
        $included = true;
    }
}

/**
 * Подключает функции для админ панели
 */
function includeAdminFunctions() {
    static $included = false;
    if (!$included) {
        // Здесь можно добавить функции админ панели
        $included = true;
    }
}

/**
 * Подключает функции для iceApp
 */
function includeIceAppFunctions() {
    static $included = false;
    if (!$included) {
        // Здесь можно добавить функции iceApp
        $included = true;
    }
}

/**
 * Инициализирует сессию для логина
 */
function initializeLoginSession() {
    static $initialized = false;
    if (!$initialized) {
        // Проверяем, не отправлены ли уже заголовки
        if (headers_sent()) {
            // Если заголовки уже отправлены, просто запускаем сессию без настроек
            if (session_status() !== PHP_SESSION_ACTIVE) {
                @session_start(); // Используем @ для подавления предупреждений
            }
        } else {
            // Если заголовки не отправлены, можем настроить параметры
            session_name('tzLogin');
            session_set_cookie_params(2*7*24*60*60); // 2 недели
            @session_start(); // Используем @ для подавления предупреждений
        }
        $initialized = true;
    }
}

/**
 * Полная инициализация для системы логина
 */
function initializeLoginSystem() {
    includeLoginFunctions();
    initializeLoginSession();
}

/**
 * Полная инициализация для админ панели
 */
function initializeAdminSystem() {
    includeAdminFunctions();
}

/**
 * Полная инициализация для iceApp
 */
function initializeIceAppSystem() {
    includeIceAppFunctions();
}

?>
