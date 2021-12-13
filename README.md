 <h2>Instrukcija projekta palaišanai</h2>
заходим в Windows Terminal 
<pre>wsl</pre>
идем пути
<pre>cd ~</pre>
кланируем проэкт из моей репозитории
<pre>git clone https://github.com/Grjaznovs/tet-test.git</pre>
проверяем директорию
<pre>dir</pre>
заходим в сосдонную директорию
<pre>cd tet-test</pre>
компелируем DOCKER
<pre>docker-compose build</pre>
подымаем DOCKER
<pre>docker-compose up -d</pre>

извеняюсь случайно удалил папку надо создать :)
<pre>cd project/tet <br/>mkdir migrations <br/>cd ..<br/>cd .. </pre>
запущенному контейнеру. процесс внутри пространства процессов контейнера
<pre>docker exec -it php8-sf6 bash<br/>cd tet<br/>symfony server:start -d</pre>
создаюм таблицы путюм системы контроля версий
<pre>php bin/console make:migration<br/>php bin/console doctrine:migrations:migrate<br/>exit</pre>

смотрим кокие контейнеры запушены
<pre>docker ps</pre>
нас интересует "postgres:13-alpine" смотрим его CONTAINER ID запущенному контейнеру. процесс внутри пространства процессов контейнера
<pre>docker exec -it change_to_CONTAINER_ID bash<br/>docker exec -it 890b98fbefa1 bash</pre>

заходим во внутрь базы данных
<pre>psql --host=database --username=symfony --dbname=app<br/>pass:ChangeMe</pre>

вывод базы данных нас интересует ДБ app
<pre>\l</pre>
вывод таблиц нас интересует "tet_test", "tet_test_id_seq"
<pre>\d</pre>

если все вышло то запускаем 
<pre>http://localhost:9000/</pre>
