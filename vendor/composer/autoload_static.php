<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc4e11b6961f273000dd28a2707b7f18f
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Rodolfo\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Rodolfo\\' => 
        array (
            0 => __DIR__ . '/..' . '/hcodebr/php-classes/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Slim' => 
            array (
                0 => __DIR__ . '/..' . '/slim/slim',
            ),
        ),
        'R' => 
        array (
            'Rain' => 
            array (
                0 => __DIR__ . '/..' . '/rain/raintpl/library',
            ),
        ),
    );

    public static $classMap = array (
        'EasyPeasyICS' => __DIR__ . '/..' . '/phpmailer/phpmailer/extras/EasyPeasyICS.php',
        'PHPMailer' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmailer.php',
        'PHPMailerOAuth' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmaileroauth.php',
        'PHPMailerOAuthGoogle' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmaileroauthgoogle.php',
        'POP3' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.pop3.php',
        'SMTP' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.smtp.php',
        'ntlm_sasl_client_class' => __DIR__ . '/..' . '/phpmailer/phpmailer/extras/ntlm_sasl_client.php',
        'phpmailerException' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmailer.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc4e11b6961f273000dd28a2707b7f18f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc4e11b6961f273000dd28a2707b7f18f::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitc4e11b6961f273000dd28a2707b7f18f::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitc4e11b6961f273000dd28a2707b7f18f::$classMap;

        }, null, ClassLoader::class);
    }
}
