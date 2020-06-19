# CSY2027 Group Project - Assignment (Woodlands UC Website)

Woodlands University College is a higher education establishment based on the outskirts of Buckinghamshire, UK. Woodlands approached me to develop a CMS-based website for the institution's public facing website.

This project is built using my lightweight, custom PHP framework [CupOfPHP](https://github.com/jenewland1999/CupOfPHP).

This website focuses on providing accessible and responsive content to many users be it visitors, prospectus students, donors/stakeholders, researches/academics, existing staff and students.

## CMS Access

As this is a demo, access to the CMS backend is accessed via `/cms/login`. The below login details give the user unrestricted access (demo purposes only):

-   Email: admin@woodlandsuc.uk
-   Password: DRsVat7hyFJE\*49T

## Local Environment Setup

To run this website I'm using a pre-built/configured virtual machine available through Vagrant. The box and details about it can be found at <https://r.je/vje-minimal-virtual-server>.

1. Install Virtual Box, Vagrant, MySQL Workbench, Composer and Git.
2. In your terminal application, navigate to an empty directory and run vagrant init `csy2028/current`
3. Run `vagrant up`
4. Open MySQL Workbench and create a new connection using the DB information below
5. Back in the terminal application, navigate inside `websites` and run `git clone git@github.com:jenewland1999/csy2027_as1 woodlands-uc`
6. Now run `cd woodlands-uc` followed by `composer install`
7. Import database.sql into MySQLWorkbench (Ensure schema is called wuc)
8. Open your web browser of choice and type `https://woodlands-uc.v.je/`
9. Ta-da! Woodlands UC is running.

### Database Connection Info

-   Host: v.je
-   Port: 3306
-   Username: v.je
-   Password: v.je

### SSH Connection Info

-   Host: v.je
-   Username: vagrant
-   Password: vagrant

## Unit Testing

This project uses PHPUnit to perform automated unit testing.

To run the unit tests open your favourite terminal program in the project directory and run the following command:

```bash
./vendor/bin/phpunit --coverage-html=./report
```

To view the coverage report open `./report/index.html` in your favourite web browser.

---

Copyright &copy; 2020 Jordan Newland
