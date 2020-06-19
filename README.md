# Woodlands UC Website

The public-facing website prototype for Woodlands University College - a theoretical higher education institute based in the UK. Woodlands UC was the client for our second-year university group project module. This codebase, as well as the designs for the website, were my main contribution to the project.

This project is built using my lightweight, custom PHP framework [CupOfPHP](https://github.com/jenewland1999/cup-of-php).

This website focuses on providing accessible and responsive content to many users be it visitors, prospectus students, donors/stakeholders, researches/academics, existing staff and students.

## Deployment

This website was deployed using [Docker](https://docker.com) on [Digital Ocean](https://digitalocean.com).

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

- Host: v.je
- Port: 3306
- Username: v.je
- Password: v.je

### SSH Connection Info

- Host: v.je
- Username: vagrant
- Password: vagrant

## Unit Testing

This project uses PHPUnit to perform automated unit testing.

To run the unit tests open your favourite terminal program in the project directory and run the following command:

```bash
./vendor/bin/phpunit --coverage-html=./report
```

To view the coverage report open `./report/index.html` in your favourite web browser.

---

&copy; 2020 Jordan Newland
