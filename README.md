# yii2-api-example
Guide and example of using yii2 API

## Overview

This is a guide of implementing API in an yii2 application.
It demontrades
* Implementation of API (with API versioning).
* Many ways of authentication.
* How to access the API in an yii2 application.

## Environment setup

In this guide, we use yii2 advanced template to create the application.
This application has three parts.
* **api** part.
* **frontend** for API testing.
* **backend** for displaying data.

### Create api skeleton
The yii2 advanced template includes frontend and backend parts. Lets create the **api** part.
1. Copy *frontend* to *api*, *environments/dev/frontend* to *environments/dev/api* and *environments/prod/frontend* to *environments/prod/api*.
```shell
cp -R frontend api
cp -R environments/dev/frontend environments/dev/api
cp -R environments/prod/frontend environments/prod/api
```
2. Adjust namespaces and paths to start with *api* instead of *frontend*.
3. In common\config\bootstrap.php add Yii::setAlias('@api', dirname(dirname(\_\_DIR\_\_)) . '/api');.
4. Make adjustments to environments/index.php

Ref: https://github.com/yiisoft/yii2-app-advanced/blob/master/docs/guide/topic-adding-more-apps.md

## Web application

### Create user for login
Use user sign up in frontend menu to create new user.

## API implementation
## Test the API
## Test the code
## API versioning