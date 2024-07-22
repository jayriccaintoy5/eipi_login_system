# PHP Complete CRUD Application

### ****Creating the Database Table****

Create a table named *user_form* inside your MySQL database using the following code.

```sql
CREATE TABLE `user_form` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
)
```

### ****Copy files to htdocs folder****

Download the above files. Create a folder named *crud* inside *htdocs* folder in *xampp* directory. Finally, copy the *crud* folder inside *htdocs* folder. Now, visit [localhost/user_form](http://localhost/user_form) in your browser and you should see the application.
