# About

htmlbuilder-php-bridge is serverside and client tools for uploading static sites. 
It is addon for https://github.com/ArtNazarov/htmlbuilder

# О расширении

htmlbuilder-php-bridge это утилита из 2 частей для сервера и клиента для загрузки статических сайтов. 
Это дополнение предназначено для https://github.com/ArtNazarov/htmlbuilder


# Using of bridge from serverside

1. Set API key in bridge.php and form.php
2. Upload to serverside files bridge.php and bridge.php
3. You can test receiving and unpacking with zip archive files.zip using form.php
If all right, for domain example.com, will be create page http://example.com/test_dir/test2.html
4. Delete form.php and unpacked files after test


# Использование моста со стороны сервера

1. Назначьте ключ API в файле bridge.php и form.php
2. Выгрузите на сервер файлы bridge.php и form.php
3. Вы можете протестировать загрузку и распаковку архива files.zip, используя form.php
Если все в порядке, для домена example.com будет создана страница http://example.com/test_dir/test2.html
4. Удалите распакованные файл и файл form.php


# Publication of zip archive from client

1. Change domain in send-files.py to own
2. Send API key corresponding to API key from the bridge.php
2. Call python3 script send-files.py in terminal

```
python3 send-files.py
```

# Публикация zip архива от клиента

1. Установите свой домен в send-files.py
2. Установите ключ API в соответствии со значением API из bridge.php
2. Запустите скрипт send-files.py в терминале

```
python3 send-files.py
```

During this action:

1. File files.zip will be uploaded to server
2. Bridge.php unpack to document root content of zip archive
3. Bridge.php remove from server archive files.zip

Во время этого действия:

1. Файл files.zip выгружается на сервер
2. Мост bridge.php распакует содержимое архива в корневую папку
3. Мост bridge.php удалит с сервера файл files.zip