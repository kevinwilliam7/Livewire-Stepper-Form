<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Preview
![ezgif-1-7d16549adda5](https://user-images.githubusercontent.com/76833135/137588190-39ce3ec6-7373-4943-96ce-95950be0b9e8.gif)

## Component Version
- [Laravel Framework](https://laravel.com/docs/8.x/installation) Version 8.55.0
- [Livewire Version](https://laravel-livewire.com/docs/2.x/installation) Version 2.5.5
- [Tailwind CSS](https://tailwindcss.com/docs/guides/laravel) Version 2.2.7

## Installation
```composer require livewire/livewire```
```npm install```
```npm install -D tailwindcss@latest postcss@latest autoprefixer@latest```
```npx tailwindcss init```

put this code in the file tailwind.config.js
```
module.exports = {
purge: [],
purge: [
 './resources/**/*.blade.php',
 './resources/**/*.js',
 './resources/**/*.vue',
],
darkMode: false, // or 'media' or 'class'
theme: {
  extend: {},
},
variants: {
  extend: {},
},
plugins: [],
}
```

put this code in the file webpack.mix.js
```
mix.js("resources/js/app.js", "public/js")
.postCss("resources/css/app.css", "public/css", [
 require("tailwindcss"),
]);
```


put this code in the file /resources/css/app.css
```
@tailwind base;
@tailwind components;
@tailwind utilities;
```



## Features
- [X] Dynamic Depedent Dropdown 
- [X] Simple Upload Image

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
