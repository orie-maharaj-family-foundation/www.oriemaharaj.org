    openssl genrsa -des3 -out server.key 2048
    
    Generating RSA private key, 2048 bit long modulus
    .........................................................++++++
    ........++++++
    e is 65537 (0x10001)
    Enter PEM pass phrase:
    Verifying password - Enter PEM pass phrase:
    openssl req -new -key server.key -out server.csr

    Country Name (2 letter code) [GB]:US
    State or Province Name (full name) [Colorado]:Colo
    Locality Name (eg, city) []:Trinidad
    Organization Name (eg, company) [My Company Ltd]:Orie Maharaj Family Foundation,Inc.
    Organizational Unit Name (eg, section) []:Non-profit Organization 
    Common Name (eg, your name or your server's hostname) []:public.oriemaharaj.org
    Email Address []:omfamilyfoundation@gmail.com
    Please enter the following 'extra' attributes
    to be sent with your certificate request
    A challenge password []:apple
    An optional company name []:Orie Maharaj Family Foundation,Inc.

    cp server.key server.key.org
    openssl rsa -in server.key.org -out server.key


    -rw-r--r-- 1 root root 745 Jun 29 12:19 server.csr
    -rw-r--r-- 1 root root 891 Jun 29 13:22 server.key
    -rw-r--r-- 1 root root 963 Jun 29 13:22 server.key.org

    openssl x509 -req -days 365 -in server.csr -signkey server.key -out server.crt
    Signature ok
    subject=/C=US/ST=Colo/L=Trinidad/O=Orie Maharaj Family Foundation /OU=Non-profit
    Organization/CN=public.oriemaharaj.org/Email=omfamilyfoundation@gmail.com
    Getting Private key

    cp server.crt /usr/local/apache/conf/ssl.crt
    cp server.key /usr/local/apache/conf/ssl.key
    SSLEngine on
    SSLCertificateFile /usr/local/apache/conf/ssl.crt/server.crt
    SSLCertificateKeyFile /usr/local/apache/conf/ssl.key/server.key
    SetEnvIf User-Agent ".*MSIE.*" nokeepalive ssl-unclean-shutdown
    CustomLog logs/ssl_request_log \
       "%t %h %{SSL_PROTOCOL}x %{SSL_CIPHER}x \"%r\" %b"
    /etc/init.d/httpd stop
    /etc/init.d/httpd stop
