# shanshizi-avatar


### 如何使用

````

composer require ssz/avatar

````


##### 在laravel中注册服务和门面,在config里app.php文件中注册

````

providers = [
    Ssz\Avatar\AvatarProvider::class,
];

aliases = [
    'Avatar' => \Ssz\Avatar\Facades\Avatar::class,
];

````


### publish

```

php artisan vendor:publish

```

### 编写配置文件


```

return [
    'type' => 'png', // jpeg|png|gif|bmp
    'width' => '100',
    'height' => '100',
    'size' => '14',
    'font_file' => public_path() . '/fonts/WawaSC-Regular.otf',
];

```

### 使用


```

$name='张三';
$file='1.png';
Avatar::output($name,file);

```
