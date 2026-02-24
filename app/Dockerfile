# Dockerfile
FROM httpd:2.4

# copiando dados do projeto
COPY ./ /usr/local/apache2/htdocs

# Copiando arquivo de configuração
COPY ./httpd.conf /usr/local/apache2/conf/my-httpd.conf

# Adicionando as configurações ao arquivo de configuração do apache
RUN echo "Include /usr/local/apache2/conf/my-httpd.conf" >> /usr/local/apache2/conf/httpd.conf

# Expondo a porta do serviço
EXPOSE 80
