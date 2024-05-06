# wp-theme-blog
## Instalação WP e Configurar Banco de Dados
* salvar dados inseridos no BD e inserir em wp-config
* salvar o zip e fazer o upload em file manager em extract.
* exluir os arquivos que estão na manager (default_html e index.php), zip e _Macosx.
1. modificar as informações dos arquivos wp-config
2. modificar functions.php em wp-content

## 1 Configurar wp-config
#### substituir dados pelos dados do servidor remoto
* The name of the database for WordPress */
define( 'DB_NAME', 'local' );

* Database username */
define( 'DB_USER', 'root' );

* Database password */
define( 'DB_PASSWORD', 'root' );

* Database hostname */
define( 'DB_HOST', 'localhost' );

### Configurar o Debug
* if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
} // deve ser false para ambiente de produção.

## 2 configurar functions.php em wp-content
![modificação do código]()


