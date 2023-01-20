<?php
namespace App;

class Config
{
    //cakes
    public const DEFAULT_PICTURE_PATH = '/img/default_cake.jpg';

    public const MAX_CAKES = 1000;

    public const MAX_ORDERS = 5000;
    public const MAX_VISITS = 200000;

    public const MAX_SPOTLIGHTED = 15;

    public const MAX_PICTURES_PER_CAKE = 15;
    public const MAX_PICTURES_PER_CAKE_MESSAGE = 'Impossible d\'ajouter au total plus de 15 photos';
    public const MAX_PICTURES_ON_SAME_UPLOAD = 7;
    public const MAX_PICTURES_ON_SAME_UPLOAD_MESSAGE = 'Impossible d\'ajouter plus de 7 photos en une seule fois';

    public const CAKES_INDEX_INFINITE_PAGINATION_LIMIT = 12;


    //domain
    public const MAIL_DSN = 'smtp://ne-pas-repondre@noaliafeedesgateaux.fr:noaliafeedesgateaux1234@ssl0.ovh.net:465';
    //dsn de mailtrap
    // public const MAIL_DSN = 'smtp://322f09919a0f37:6c1c33b7840d0c@smtp.mailtrap.io:2525?encryption=tls&auth_mode=login';

    public const AUTO_MAIL = 'ne-pas-repondre@noaliafeedesgateaux.fr';

    public const DOMAIN = 'noaliafeedesgateaux.fr';

    public const DOMAIN_URL = 'https://noaliafeedesgateaux.fr';
    
}