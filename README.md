<h1> бэк на laravel для фронта который пишется на react TS</h1>
<a href="https://github.com/TheFasWalker/LaravelReactFront">Фронт на реакте</a>

<h2>Локальная разработка (запускается на Linux или через wsl):</h2>
<h3>Если вы запускаетесь в первый раз:</h3>
<ol>
<li>

Переименовать `.env.example` в `.env` <b>(обязательно восстановить после этого файл example.env)</b> </li>
<li>

Сгенерировать папку vendor `composer install` </li>

<li> 

`sail up -d` - запуск сервера</li>

>Для того, чтобы выполнять запуск с помощью sail, необходимо в файл <b>.bashrc</b> (Находится в корневой дериктории пользователя) добавить `alias sail='sh $([ -f sail ] && echo sail || echo vendor/bin/sail)'`. Либо запускать через ./vendor/bin/sail<br>

<li>

`sail npm install` установка npm пакетов для vite</li>

<li>

`sail npm run dev` - запуск vite с hot reload (чавсть разработки ведётся не для API)</li>
</ol>

<h3>Если вы запускаетесь НЕ в первый раз:</h3>

>`sail composer update` - если были установлены новые пакеты или плагины<br>

`sail up -d` - запуск сервера<br>
`sail npm run dev` - запуск vite слежка + автообновление браузера<br>
`sail atrisan migrate:fresh --seed ` - обновление БД с засеиванием БД пустыми данными
<h2>Дополнительно</h2>

При возникновении ошибки `Installation failed, reverting ./composer.json to its original content.` выполнить `composer diagnose`<br>
если `cURL version: missing, using php streams fallback, which reduces performance`, выполнить `sudo apt-get install php-curl`<br>

При ошибках создания контейнера с базой<br> 
`sail down --volumes` <br>
`sail up` <br>

Если при разворачивании проекта с 0 вылезает 500 ошибка<br>

решение 1 - доступы к файлам (для linux)<br>
`sudo chmod -R 755 1tvchTemplate
chmod -R o+w 1tvchTemplate/storage`

решение 2<br>
сгенерировать новый ключ в файле .env (должна быть переменная `APP_KEY`)<br>
`sail php artisan key:generate`<br>

При возникновении ошибки <br>
`error decoding 'ports': Invalid hostPort: 8080`<br>
Необходимо в notepad++ (или другим способом) изменить формат конца строк на Unix <br>

	---

   *****N.B!!!*****
   Запуск для разработки
   1. запустить контейнер Laravel
   2. запустить сборщик vite в контейнере с laravel
   3. запустить react приложение 

   п.с. Если запустить сначала реакт , потом запускать контейнер c Laravel может вылезти конфликт портов


 
