<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Hello World!</title>
    </head>
    <body>
<!--        <img src="http://s3.amazonaws.com/blog.invisionapp.com/uploads/2016/11/benjen.gif" alt="Hello World!" />-->
        <img src="https://cdn.dribbble.com/users/244516/screenshots/2985020/monday_bear_3__.gif" alt="Hello World!" />


        <?php
        
            $database   = $user = $password = "project";
            $host       = "mysql";
            $connection = new PDO("mysql:host={$host};dbname={$database};charset=utf8", $user, $password);
            $query      = $connection->query("SELECT TABLE_NAME FROM information_schema.TABLES WHERE TABLE_TYPE='BASE TABLE'");
            $tables     = $query->fetchAll(PDO::FETCH_COLUMN);

            if (empty($tables)) {
                echo "<p>There are no tables in database \"{$database}\".</p>";
            } else {
                echo "<p>Database \"{$database}\" has the following tables:</p>";
                echo "<ul>";
                foreach ($tables as $table) {
                    echo "<li>{$table}</li>";
                }
                echo "</ul>";
            }

//            // connect to a remote host at a given port
//            $connecting_string =  'mongodb://localhost:27017/test';
//            $connection2 =  new Mongo( $connecting_string,array('username'=>'','password'=>''));
//
//            echo $connection2;
//
//
//
//        echo phpinfo(8);


print "Hello from PHP! ";
        $connection = new MongoClient(); // connects to localhost:27017
//        $connection = new MongoClient( "mongodb://example.com" ); // connect to a remote host (default port: 27017)
//        $connection = new MongoClient( "mongodb://example.com:65432" ); // connect to a remote host at a given port




?>

    </body>
</html>
