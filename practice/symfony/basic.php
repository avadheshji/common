Symfony CLI is written in go language


COMMAND TO CREATE SYMFONY APPLICATIONS USING SYMFONY CLI

//run this if you are building a traditional web application
1. symfony new PROJECT_NAME --VERSION="6.3.*" --webapp


//Run this if you are building web application

1. symfony new PROJECT_NAME --VERSION="6.3.*"


USING COMPOSER COMMAND TO CREATE SYMFONY APPLICATIONS


//web application

1.  composer create-project symfony/skelton: "6.3.*" PROJECT_NAME

cd PROJECT_NAME

composer require webapp


//API 
1. composer create-project symfony/skelton: "6.3.*" PROJECT_NAME