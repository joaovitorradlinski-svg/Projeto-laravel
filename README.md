🔧 Pré-requisitos

Antes de iniciar, instale:

✔ PHP 8.1+

(Usando XAMPP, Laragon ou WAMP)

✔ Composer

https://getcomposer.org/download/

✔ Node.js + NPM

https://nodejs.org/

✔ Git

https://git-scm.com/downloads

✔ MySQL

(incluso no XAMPP ou no Laragon)

📥 1. Clonar o repositório

Abra o terminal e execute:

git clone https://github.com/joaovitorradlinski-svg/Projeto-laravel.git
cd Projeto-laravel


Se você estiver em outra branch e quiser migrar para main:

git checkout main

⚙️ 2. Instalar dependências do Laravel
composer install

🎨 3. Instalar dependências do front (Vite)
npm install

📄 4. Configurar arquivo .env

Copie o arquivo de exemplo:

Windows:

copy .env.example .env


Linux/macOS:

cp .env.example .env


Depois configure o banco de dados dentro do .env:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=rpg
DB_USERNAME=root
DB_PASSWORD=


⚠️ Se estiver usando XAMPP, normalmente o usuário é root e a senha é vazia.

🔑 5. Gerar chave da aplicação
php artisan key:generate

🗄 6. Criar o banco de dados

Acesse:

👉 http://localhost/phpmyadmin

Crie um banco chamado:

rpg

🏗 7. Rodar as migrations + seeders

Esse projeto já vem com seeders completos de campanhas, personagens e locais.

Execute:

php artisan migrate --seed

🎭 8. Compilar assets do front-end

Ambiente de desenvolvimento:

npm run dev


Assistente de recompilação:

npm run watch


Build para produção:

npm run build

🚀 9. Rodar o servidor Laravel
php artisan serve


Abra o navegador em:

👉 http://127.0.0.1:8000
