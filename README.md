# Austin-Xuanwen-Team-12

<div id="top"></div>
<!-- PROJECT LOGO -->
<br />
<div align="center">

  <h3 align="center">PHP-CMS-Laravel</h3>
  
</div>



<!-- TABLE OF CONTENTS -->
<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
      <ul>
        <li><a href="#built-with">Built With</a></li>
      </ul>
    </li>
    <li>
      <a href="#getting-started">Getting Started</a>
    </li>
    <li><a href="#project-scope">Project Scope</a></li>
    <li><a href="#license">License</a></li>
    <li><a href="#tutorial-requirements">Tutorial Requirements</a></li>
  </ol>
</details>



<!-- ABOUT THE PROJECT -->
## About The Project

This repository is copy of the simple PHP CMS except the CMS has been converted to Laravel. The code consists of a simple login process, a dashboard, a place to view/add/edit/delete users, and a place to view/add/edit/delete projects. In an effort to keep the PHP code focused and basic, only the absolute basics have been included. The whole CMS only consists of HTML, PHP, and SQL.

<p align="right">(<a href="#top">back to top</a>)</p>



### Built With

* [PHP](https://www.php.net/)
* [Laravel](https://laravel.com/)
* [CSS](https://www.w3.org/Style/CSS/)
* [HTML](https://www.w3.org/html/)
* [MySQL](https://www.mysql.com/)

<p align="right">(<a href="#top">back to top</a>)</p>



<!-- GETTING STARTED -->
## Getting Started

- Clone the repository in Visual Studio Code
- Locate the project folder on the computer
- The CMS uses the public storage driver, make sure to update your .env file to:

```php
FILESYSTEM_DRIVER=public
```

- Create the symbolic link to set the File Storage for image functions:

```
php artisan storage:link
```

- The database setup includes migrations and seeding. Run the following command to initialize the database:

```
php artisan migrate:refresh --seed
```

- Run the Laravel project:

```
php artisan serve
```

- Check the users table in the host service. All user acocunts will have the default password of "password".
- The project has been set up


<p align="right">(<a href="#top">back to top</a>)</p>



<!-- Project Scope -->
## Project Scope

- Manage Projects (CRUD) -Xuanwen
- Manage Educations (CRUD) -Xuanwen
- Manage Skills (CRUD) -Austin
- Manage Work Experience (CRUD) -Xuanwen
- Manage Emails (CRUD) -Austin
- Manage Extra Contents (CRUD) -Xuanwen
- Manage Blogs (CRUD) -Austin
- Manage Accounts (CRUD) -Austin
- Dashboard -Austin
- CSS style -Austin

<p align="right">(<a href="#top">back to top</a>)</p>


<!-- LICENSE -->
## License

Distributed under the MIT License.

<p align="right">(<a href="#top">back to top</a>)</p>


<!-- Tutorial Requirements -->
## Tutorial Requirements

* [Visual Studio Code](https://code.visualstudio.com/) or [Brackets](http://brackets.io/) (or any code editor)
* [Laravel](https://laravel.com/)

Full tutorial URL: https://codeadam.ca/learning/php-cms-laravel.html

<a href="https://codeadam.ca">
<img src="https://codeadam.ca/images/code-block.png" width="100">
</a>
