# Larahub
Final project for online bootcamp about Laravel, tasked to make a website about Q & A like quora where a user can asks, answers and votes (like or dislike) toward questions & answers. These are requirements for the project, including:
- Users have the ability to create an account and log in to the website.
- A voting system, where users can upvote or downvote questions and answers.
- All users have the ability to upvote a question or answer. and will receive 15 points if their post is upvoted.
- Only users with points of 15 or higher can downvote and the owner of post get their point reduced by 1.
- A tagging system, where users can add tags to their questions.
- A search function, where users can search for specific questions or answers by keyword or tag.
- A reputation system, where users can earn points based on their contributions to the website.
- A feature where the author of a question thread can select the "right answer" and the user who provided it will be rewarded with 15 points.
- Use Sweetalert library for the notification feature.
- Use bootstrap CSS framework for the website design.
- Deploy the site to heroku.

![Larahub Homepage](https://cdn.sanity.io/images/qigu3wlz/production/f214d252da20b3827063e9e9afcea3db34a3d504-1920x1771.png?w=828&q=75&fit=clip&auto=format)


# Getting Started
These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.

## Prerequisites
What things you need to install the software and how to install them:
- PHP 7.2^
- Composer
- MySQL
- NPM

A step by step series of examples that tell you how to get a development env running:

1. Clone the repository: git clone `https://github.com/fadilshardy/larahub-project-final-sanbercode`
2. Navigate to the project directory: cd `larahub-project-final-sanbercode`
3. Install dependencies: `composer install` && `npm install`
4. Create a copy of the .env.example file and name it .env: cp .env.example .env
5. Generate an app key: `php artisan key:generate`
6. Set your database credentials in the .env file
7. Migrate the database: `php artisan migrate`
8. Seed the database (if applicable): `php artisan db:seed`
9. Start the development server: `php artisan serve`

Built With
- Laravel - The PHP framework 
- Composer - Dependency management
- NPM - Asset compilation
- Bootstrap - The CSS framework 
- Sweetalert - Popup notification library
