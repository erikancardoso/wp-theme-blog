<footer class="site-footer">
    <div class="container">
        <div class="copyright">
            <p> <?php echo get_theme_mod('sec_copyright', esc_html__('Copyrght X - All Right Reserved', 'wp-devs')); ?></p> <!--recuperar o valor do campo theme mod, a ultima alteração feita no banco de dados do customizer-->
        </div>
       <!--posso criar uma nav aqui-->
    </div>
    </footer>
        </div>
        <?php wp_footer(); ?>
        <!--necessário para rodar o arquivo js que foi definido no functions, para carregar no rodapé, sem a necessidade de procurar o arquivo no inicio do carregamento da página-->
    </body>
</html>
