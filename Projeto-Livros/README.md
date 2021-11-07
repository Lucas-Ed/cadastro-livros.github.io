# Desafio Criação de sistema de cadastro de livro com :
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="300" height="150"></a></p>
### Referência de tutorial usado para fazer o projeto aqui: 

[1](https://bit.ly/31yAPOJ)
[2](https://www.toptal.com/laravel/restful-laravel-api-tutorial)
[3](https://www.devmedia.com.br/exemplo-pratico-regras-e-tipos-de-relacionamentos-sql-server-2008-parte-3/18409)
[4](https://dev.to/roxie/adding-and-removing-columns-from-existing-tables-using-laravel-migrations-389g)
__________________________________________________________________
Comandos utilizados no laravel:


Criar um novo projeto: laravel new Nome do projeto
startar server local: php artisan serve
Listar comandos laravel: lista comandos: php artisan
criar migrations: php artisan make:model Models\\ModelBook -m
cria as tabelas: php artisan migrate 
Criar um controller: php artisan make:controller Nome do controller
Criar uma seeder: php artisan make:seeder GenerousTableSeeder 

---------------------------------------------------
Etapas:
1- Fazer o modelo-artisan -m
2- informar os campos na migration e no model
3- rodar a migration para criar as tabelas
-----------------------------------------------
4- via artisan criar o controller/usar book como referência no Authorcontroller.
5-routes/ api.php/ criar as rotas do crude color / author/ author id

6-testar no insonia 

7-começar o front e ver chamada para api

### Sequência da api: rota-> controller-> model-> Grava no banco

[Consumir api](https://www.twilio.com/blog/criar-e-consumir-uma-api-restful-no-php-laravel)

[relacionamento banco](https://matheusteixeira.com.br/blog/elaborando-relacionamentos-entre-modelos-no-laravel/)

http://127.0.0.1:8000/api/authors

http://127.0.0.1:8000/api/generous

http://127.0.0.1:8000/api/books



Comandos:
Uso:
  comando [opções] [argumentos]

Opções:
  -h, --help Exibe ajuda para o comando fornecido. Quando nenhum comando é dado, exibe ajuda para o comando list
  -q, --quiet Não exibe nenhuma mensagem
  -V, --version Exibe esta versão do aplicativo
      --ansi | --no-ansi Força (ou desativa --no-ansi) saída ANSI
  -n, --no-interação Não faça nenhuma pergunta interativa
      --env [= ENV] O ambiente em que o comando deve ser executado
  -v | vv | vvv, --verbose Aumenta a verbosidade das mensagens: 1 para saída normal, 2 para saída mais detalhada e 3 para depuração

Comandos disponíveis:
  clear-compiled Remove o arquivo de classe compilado
  db Inicie uma nova sessão CLI de banco de dados
  para baixo Coloque o aplicativo em modo de manutenção / demonstração
  env Exibe o ambiente de estrutura atual
  help Mostra a ajuda para um comando
  inspirar Mostre uma citação inspiradora
  list Listar comandos
  migrate Execute as migrações de banco de dados
  otimizar Cache os arquivos de inicialização do framework
  servir Servir o aplicativo no servidor de desenvolvimento PHP
  test Execute os testes do aplicativo
  mexer Interaja com seu aplicativo
  Tire o aplicativo do modo de manutenção
 auth
  auth: clear-resets Liberar tokens de redefinição de senha expirada
 esconderijo
  cache: limpar Limpar o cache do aplicativo
  cache: esquecer Remover um item do cache
  cache: table Crie uma migração para a tabela de banco de dados de cache
 config
  config: cache Cria um arquivo de cache para carregamento mais rápido da configuração
  config: clear Remover o arquivo de cache de configuração
 db
  bd: seed Semear o banco de dados com registros
  db: wipe Eliminar todas as tabelas, visualizações e tipos
 evento
  evento: descubra em cache e armazene em cache os eventos e ouvintes do aplicativo
  evento: limpar Limpar todos os eventos e ouvintes em cache
  evento: gerar Gerar os eventos ausentes e ouvintes com base no registro
  evento: lista lista os eventos e ouvintes do aplicativo
 chave
  chave: gerar Definir a chave do aplicativo
 faço
  make: cast Crie uma nova classe de eloquent personalizada
  make: channel Crie uma nova classe de canal
  make: command Cria um novo comando Artisan
  make: component Cria uma nova classe de componente de visualização
  make: controller Cria uma nova classe de controlador
  make: event Cria uma nova classe de evento
  make: exception Cria uma nova classe de exceção personalizada
  make: factory Crie um novo modelo de fábrica
  make: job Cria uma nova classe de trabalho
  make: listener Crie uma nova classe de ouvinte de evento
  make: mail Crie uma nova classe de e-mail
  make: middleware Crie uma nova classe de middleware
  make: migration Criar um novo arquivo de migração
  make: model Crie uma nova classe de modelo do Eloquent
  make: notification Cria uma nova classe de notificação
  make: observer Cria uma nova classe de observador
  make: policy Cria uma nova classe de política
  make: provider Crie uma nova classe de provedor de serviço
  make: request Cria uma nova classe de solicitação de formulário
  make: resource Cria um novo recurso
  make: rule Cria uma nova regra de validação
  make: semeador Cria uma nova classe de semeador
  make: test Cria uma nova classe de teste
 migrar
  migrate: fresh Elimine todas as tabelas e execute novamente todas as migrações
  migrar: instalar Criar o repositório de migração
  migrar: atualizar Redefinir e executar novamente todas as migrações
  migrar: redefinir Reverter todas as migrações de banco de dados
  migrar: rollback Reverter a última migração do banco de dados
  migrate: status Mostra o status de cada migração
 modelo
  modelo: podar modelos Prune que não são mais necessários
 notificações
  notificações: tabela Crie uma migração para a tabela de notificações
 otimizar
  otimizar: limpar Remover os arquivos de bootstrap em cache
 pacote
  pacote: descobrir Reconstruir o manifesto do pacote em cache
 fila
  queue: batches-table Crie uma migração para a tabela de banco de dados de lotes
  fila: limpar Exclui todos os trabalhos da fila especificada
  fila: falha Lista todos os trabalhos da fila com falha
  queue: failed-table Criar uma migração para a tabela de banco de dados de tarefas de fila com falha
  queue: flush Libera todos os trabalhos da fila com falha
  fila: esqueça Excluir um trabalho de fila com falha
  queue: listen Ouça uma determinada fila
  fila: monitor Monitora o tamanho das filas especificadas
  queue: prune-batches Remova entradas obsoletas do banco de dados de lotes
  fila: falha de remoção Limpe entradas obsoletas da tabela de tarefas com falha
  fila: reiniciar Reiniciar daemons de trabalho da fila após o trabalho atual
  fila: repetir Tente novamente um trabalho de fila com falha
  queue: retry-batch Repetir os trabalhos com falha para um lote
  fila: tabela Crie uma migração para a tabela de banco de dados de tarefas de fila
  fila: trabalho



