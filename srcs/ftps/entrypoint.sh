telegraf &
# activer ssl (pour FTPs) -Y 1 => modifier l'option par defaut pour utiliser ftps
pure-ftpd -Y 1 -p 21000:21004 -P 192.168.99.232
