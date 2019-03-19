
# COSMOGREEN

This repo contains our project for [Smart India hackathon 2019](https://www.sih.gov.in/)

Problem Statement:Every day we come across several sources of pollution, polluting the very basics of our lives- Rivers, Land, Air and Noise. We know nothing about who/where to report it and how. We suggest an Innovative way to identify the sources of pollution in your area, get it prioritized through people votes, escalate it to the concerned authorities, keep a track of the progress and get notified of the actions taken. It will provide an End-2-End tool to battle pollution democratically partnering with Govt.

Solution Statement: Idea is to create a web based project collaboration platform for software developers, graduate and undergraduate students of any branch, doctoral and postdoctoral researchers. Registered Users can follow their preferred technology and their branch of study. Different collaborated works and projects will be suggested on user’s dashboard. On starting a new project, the project manager will add tags to it like Computer Science/Civil, NodeJS, Angular, ReactJS, Physics, Mechanics, Relativity, Astrophysics, Biochemistry. Users can then follow these projects and be notified about any contributions made to the projects. Students or Faculty can contribute to these projects by connecting with them. Every contribution will be marked. Discussions/Ask and Answer: Every project will have Votes, Contributions, Views, Ask and Answer / Discussions ( for discussions regarding the project ) associated with them. Project Owner will give points to the answers. These badges/points will give credibility to the users. This Platform will also have Built-in text editor. Personalized push notifications will be sent to the users based on their activity via an automated system. People working on similar technology or field can join groups to interact with one another.	

Proposal can be found [here](https://www.sih.gov.in/uploads/template/India%20vs%20Pollution20190120113320.pdf)

## Server Requirements
-   PHP >= 7.1.3
-   OpenSSL PHP Extension
-   PDO PHP Extension
-   Mbstring PHP Extension
-   Tokenizer PHP Extension
-   XML PHP Extension
-   Ctype PHP Extension
-   JSON PHP Extension
-   BCMath PHP Extension
-   Paython 3.x

## Installing

### ML (Machine Learning) Part

One time commands

```shell
git clone https://github.com/rahul2240/flask-api-spam
cd flask-api-spam/
sudo apt install python3-pip
pip3 install flask
pip3 install -U textblob
python3 -m textblob.download_corpora
pip3 install sklearn
pip3 install pandas
pip3 install rake_nltk
```

Run the deployment server

```shell
python3 app.py
```
By default deplyment server will run at: http://0.0.0.0:8800/

### Web Part

Clone this repo or download it on your local system.

Open composer and run this given command.

```shell
composer install
```

Rename the file `.env.example` to `.env`.

```shell
cp .env.example .env
```

Generate the Application key

```php
php artisan key:generate
```

Set DB credentials, Social API details and App Name in `.env`

Migrate the database.

```php
php artisan migrate
```

Seed the database

```php
php artisan db:seed
```

Set project URL in app/Helpers/custom_url.php
For example "http://localhost/beaconzialis/server/public/"

To run this project on development server

```php
php artisan serve
```

This project will by default run on this server:

```
http://localhost:8000/
```

For more details
```php
php artisan serve --help
```
