<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<h1>Installation and Initialization</h1>

<ul>
    <li>Install npm:</li>
    <pre>npm install</pre>
    <li>Install and initialize TailwindCSS:</li>
    <pre>npm install -D tailwindcss postcss autoprefixer
npx tailwindcss init -p</pre>
    <li>Add the following to tailwind.config.js:</li>
      <pre>content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
],</pre>
    <li>resources/css/app.css:</li>
    <pre>@tailwind base;
@tailwind components;
@tailwind utilities;</pre>
    <li>(optional) Add debugbar for troubleshooting:</li>
    <pre>composer require barryvdh/laravel-debugbar --dev</pre>
    <li>Initialize npm and Laravel</li>
    <pre>php artisan serve
npm run dev</pre>
</ul>

<h1>Feature List</h1>
<ul>
    <li>User creation</li>
    <li>Basic session management (Sign in, sign out)</li>
    <li>Basic post management (Create new post, see individual post)</li>
    <li>Search function</li>
</ul>

<h1>Infrastructure</h1>
<ul>
    <li>Database/Model: SQLite, managed via Eloquent ORM</li>
    <li>Backend/Controller: Laravel</li>
    <li>Frontend/View: Blade with TailwindCSS</li>
</ul>

<h1>Preview</h1>
<img src="https://i.imgur.com/Uq1fBM2.png">
