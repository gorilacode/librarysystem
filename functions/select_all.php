<?php

    $dbHost = '127.0.0.1';
    $dbUsername = 'root';
    $dbPass = '';
    $dbName = 'db_library';

// set the database cridentials to access the needed database
    define("DB_HOST","127.0.0.1");
    define("DB_NAME","db_library");
    define("DB_PORT","3306"); //default port is 3306
    define("DB_USER","root");
    define("DB_PASS","") ;//default password
    
function select_all($table) {
	try{
    $db = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";port=" . DB_PORT,DB_USER,DB_PASS);
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $db->exec("SET NAMES 'utf8'");
	} catch (Exception $e){
	    // if unable to connect to the database
	    echo "Could not connect to the database";
	    exit;
	}
        try{
        $result = $db->query("SELECT * FROM {$table} ORDER BY id ASC");
        }catch(Exception $e){
        echo "could not retrive data, something went wrong ($table) ";
        exit;
        }
        //pass the query into the product variable
        $return = $result->fetchAll(PDO::FETCH_ASSOC);

    return $return;
}

function select_all_limit($table, $department) {
    try{
    $db = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";port=" . DB_PORT,DB_USER,DB_PASS);
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $db->exec("SET NAMES 'utf8'");
    } catch (Exception $e){
        // if unable to connect to the database
        echo "Could not connect to the database";
        exit;
    }
        try{
        $result = $db->prepare("SELECT * FROM {$table} WHERE department = ? ORDER BY Rand() LIMIT 4");
        $result->bindParam(1, $department);
        $result->execute();
        }catch(Exception $e){
        echo "could not retrive data, something went wrong ($table) ";
        exit;
        }
        //pass the query into the product variable
        $return = $result->fetchAll(PDO::FETCH_ASSOC);

    return $return;
}

function select_single($table, $name) {
    try{
    $db = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";port=" . DB_PORT,DB_USER,DB_PASS);
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $db->exec("SET NAMES 'utf8'");
    } catch (Exception $e){
        // if unable to connect to the database
        echo "Could not connect to the database";
        exit;
    }
        try{
        $result = $db->prepare("SELECT * FROM {$table} WHERE id = ?");
        $result->bindParam(1, $name);
        $result->execute();
        }catch(Exception $e){
        echo "could not retrive data, something went wrong ($table) ";
        exit;
        }
        //pass the query into the product variable
        $return = $result->fetchAll(PDO::FETCH_ASSOC);

    return $return;
}

function select_all_reverse($table) {
    try{
    $db = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";port=" . DB_PORT,DB_USER,DB_PASS);
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $db->exec("SET NAMES 'utf8'");
    } catch (Exception $e){
        // if unable to connect to the database
        echo "Could not connect to the database";
        exit;
    }
        try{
        $result = $db->query("SELECT * FROM {$table} ORDER BY id DESC");
        }catch(Exception $e){
        echo "could not retrive data, something went wrong ($table) ";
        exit;
        }
        //pass the query into the product variable
        $return = $result->fetchAll(PDO::FETCH_ASSOC);

    return $return;
}


function update_table($table, $set, $value, $where, $id) {
    try{
    $db = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";port=" . DB_PORT,DB_USER,DB_PASS);
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $db->exec("SET NAMES 'utf8'");
    } catch (Exception $e){
        // if unable to connect to the database
        echo "Could not connect to the database";
        exit;
    }
        try{
        $result = $db->query("UPDATE {$table} SET {$set} = {$value} WHERE {$where} = {$id}");
        }catch(Exception $e){
        echo "could not retrive data, something went wrong ($table) ";
        exit;
        }
        //pass the query into the product variable
        $return = $result->fetchAll(PDO::FETCH_ASSOC);

    return $return;
}


function select_all_asc($table) {
    try{
    $db = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";port=" . DB_PORT,DB_USER,DB_PASS);
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $db->exec("SET NAMES 'utf8'");
    } catch (Exception $e){
        // if unable to connect to the database
        echo "Could not connect to the database";
        exit;
    }
        try{
        $result = $db->query("SELECT * FROM {$table} ORDER BY id ASC");
        }catch(Exception $e){
        echo "could not retrive data, something went wrong ($table) ";
        exit;
        }
        //pass the query into the product variable
        $return = $result->fetchAll(PDO::FETCH_ASSOC);

    return $return;
}

function select_balance($table, $name) {
    try{
    $db = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";port=" . DB_PORT,DB_USER,DB_PASS);
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $db->exec("SET NAMES 'utf8'");
    } catch (Exception $e){
        // if unable to connect to the database
        echo "Could not connect to the database";
        exit;
    }
        try{
        $result = $db->prepare("SELECT account_balance FROM {$table} WHERE account_no = ?");
        $result->bindParam(1, $name);
        $result->execute();
        }catch(Exception $e){
        echo "could not retrive data, something went wrong ($table) ";
        exit;
        }
        //pass the query into the product variable
        $return = $result->fetchAll(PDO::FETCH_ASSOC);

    return $return;
}

function select_des($table, $name) {
    try{
    $db = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";port=" . DB_PORT,DB_USER,DB_PASS);
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $db->exec("SET NAMES 'utf8'");
    } catch (Exception $e){
        // if unable to connect to the database
        echo "Could not connect to the database";
        exit;
    }
        try{
        $result = $db->prepare("SELECT `method` FROM {$table} WHERE id = ?");
        $result->bindParam(1, $name);
        $result->execute();
        }catch(Exception $e){
        echo "could not retrive data, something went wrong ($table) ";
        exit;
        }
        //pass the query into the product variable
        $return = $result->fetch(PDO::FETCH_ASSOC);
        $reply = $return[$field];
    return $reply;
}

function select_single_balance($table, $name) {
    try{
    $db = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";port=" . DB_PORT,DB_USER,DB_PASS);
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $db->exec("SET NAMES 'utf8'");
    } catch (Exception $e){
        // if unable to connect to the database
        echo "Could not connect to the database";
        exit;
    }
        try{
        $result = $db->prepare("SELECT account_balance FROM {$table} WHERE account_no = ?");
        $result->bindParam(1, $name);
        $result->execute();
        }catch(Exception $e){
        echo "could not retrive data, something went wrong ($table) ";
        exit;
        }
        //pass the query into the product variable
        $return = $result->fetch(PDO::FETCH_ASSOC);

        $reply = $return["account_balance"];

    return $reply;
}


function email_view($table, $name) {
    try{
    $db = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";port=" . DB_PORT,DB_USER,DB_PASS);
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $db->exec("SET NAMES 'utf8'");
    } catch (Exception $e){
        // if unable to connect to the database
        echo "Could not connect to the database";
        exit;
    }
        try{
        $result = $db->prepare("SELECT loan_date,loan_id,staff_id,full_name,nexcop_account_no,loan_type,refund_date,amount_requested,amount_received,loan_status FROM {$table} WHERE email = ? ORDER BY id DESC");
        $result->bindParam(1, $name);
        $result->execute();
        }catch(Exception $e){
        echo "could not retrive data, something went wrong ($table) ";
        exit;
        }
        //pass the query into the product variable
        $return = $result->fetchAll(PDO::FETCH_ASSOC);

    return $return;
}

function select_sum($table) {
    try{
    $db = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";port=" . DB_PORT,DB_USER,DB_PASS);
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $db->exec("SET NAMES 'utf8'");
    } catch (Exception $e){
        // if unable to connect to the database
        echo "Could not connect to the database";
        exit;
    }
        try{
        $result = $db->query("SELECT SUM(`account_balance`) as total FROM {$table}");
        }catch(Exception $e){
        echo "could not retrive data, something went wrong ($table) ";
        exit;
        }
        //pass the query into the product variable
        $return = $result->fetchAll(PDO::FETCH_ASSOC);

    return $return;
}


function select_all_ind($table, $name) {
    try{
    $db = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";port=" . DB_PORT,DB_USER,DB_PASS);
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $db->exec("SET NAMES 'utf8'");
    } catch (Exception $e){
        // if unable to connect to the database
        echo "Could not connect to the database";
        exit;
    }
        try{
        $result = $db->prepare("SELECT * FROM $table WHERE name = ? ORDER BY id DESC");
        $result->bindParam(1, $name);
        $result->execute();
        }catch(Exception $e){
        echo "could not retrive data, something went wrong ($table) ";
        exit;
        }
        //pass the query into the product variable
        $return = $result->fetchAll(PDO::FETCH_ASSOC);

    return $return;
}

function select_single_leave($table, $name) {
    try{
    $db = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";port=" . DB_PORT,DB_USER,DB_PASS);
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $db->exec("SET NAMES 'utf8'");
    } catch (Exception $e){
        // if unable to connect to the database
        echo "Could not connect to the database";
        exit;
    }
        try{
        $result = $db->prepare("SELECT * FROM {$table} WHERE email = ? ORDER BY id DESC");
        $result->bindParam(1, $name);
        $result->execute();
        }catch(Exception $e){
        echo "could not retrive data, something went wrong ($table) ";
        exit;
        }
        //pass the query into the product variable
        $return = $result->fetchAll(PDO::FETCH_ASSOC);

    return $return;
}

function select_single_leave_one($table, $name) {
    try{
    $db = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";port=" . DB_PORT,DB_USER,DB_PASS);
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $db->exec("SET NAMES 'utf8'");
    } catch (Exception $e){
        // if unable to connect to the database
        echo "Could not connect to the database";
        exit;
    }
        try{
        $result = $db->prepare("SELECT * FROM {$table} WHERE email = ? ORDER BY id DESC LIMIT 1");
        $result->bindParam(1, $name);
        $result->execute();
        }catch(Exception $e){
        echo "could not retrive data, something went wrong ($table) ";
        exit;
        }
        //pass the query into the product variable
        $return = $result->fetchAll(PDO::FETCH_ASSOC);

    return $return;
}

function select_local($table, $name) {
    try{
    $db = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";port=" . DB_PORT,DB_USER,DB_PASS);
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $db->exec("SET NAMES 'utf8'");
    } catch (Exception $e){
        // if unable to connect to the database
        echo "Could not connect to the database";
        exit;
    }
        try{
        $result = $db->prepare("SELECT * FROM {$table} WHERE state_id = ?");
        $result->bindParam(1, $name);
        $result->execute();
        }catch(Exception $e){
        echo "could not retrive data, something went wrong ($table) ";
        exit;
        }
        //pass the query into the product variable
        $return = $result->fetchAll(PDO::FETCH_ASSOC);

    return $return;
}

    
function row_count($table) {
    try{
    $db = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";port=" . DB_PORT,DB_USER,DB_PASS);
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $db->exec("SET NAMES 'utf8'");
    } catch (Exception $e){
        // if unable to connect to the database
        echo "Could not connect to the database";
        exit;
    }
        try{
        $result = $db->query("SELECT * FROM {$table} ORDER BY id DESC");
        }catch(Exception $e){
        echo "could not retrive data, something went wrong ($table) ";
        exit;
        }
        //pass the query into the product variable
        $return = $result->rowCount();

    return $return;
}

function select_particular($table, $field, $match_field, $id) {
    try{
        $mysqli_1 = new mysqli('127.0.0.1', 'root', '', 'db_nexcop');
        
        $sql_1 = "SELECT $field FROM $table WHERE $match_field = $id";
    } catch (Exception $e){
        // if unable to connect to the database
        $reply = "Could not connect to the database";
        exit;
    }
        try{
            $result = $mysqli_1->query($sql_1);
            if (gettype($result) != "object"){
                $reply = "None";
            }else{
                $return = $result->fetch_assoc();
                $reply = $return[$field];
            }  
        }catch(Exception $e){
             $reply = "could not retrive data, something went wrong (retrive) ";
        exit;
        }
        //pass the query into the product variable
        
        return $reply;
     //return $id;
}

function select_related_books($table, $field, $match_field, $id) {
    try{
    $db = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";port=" . DB_PORT,DB_USER,DB_PASS);
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $db->exec("SET NAMES 'utf8'");
    } catch (Exception $e){
        // if unable to connect to the database
        echo "Could not connect to the database";
        exit;
    }
        try{
        $result = $db->prepare("SELECT {$field} FROM {$table} WHERE {$match_field} = ?");
        $result->bindParam(1, $id);
        $result->execute();
        }catch(Exception $e){
        echo "could not retrive data, something went wrong ($table) ";
        exit;
        }
        //pass the query into the product variable
        $return = $result->fetchAll(PDO::FETCH_ASSOC);
    return $return;
}


function select_all_pagination($table, $start, $end) {
    try{
    $db = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";port=" . DB_PORT,DB_USER,DB_PASS);
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $db->exec("SET NAMES 'utf8'");
    } catch (Exception $e){
        // if unable to connect to the database
        echo "Could not connect to the database";
        exit;
    }
        try{
        $result = $db->query("SELECT * FROM {$table} ORDER BY id DESC LIMIT {$start}, {$end}");
        }catch(Exception $e){
        echo "could not retrive data, something went wrong ($table) ";
        exit;
        }
        //pass the query into the product variable
        $return = $result->fetchAll(PDO::FETCH_ASSOC);

    return $return;
}

// function all_state($table) {
//     $output = '';
//     try{
//     $db = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";port=" . DB_PORT,DB_USER,DB_PASS);
//     $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
//     $db->exec("SET NAMES 'utf8'");
//     } catch (Exception $e){
//         // if unable to connect to the database
//         echo "Could not connect to the database";
//         exit;
//     }
//         try{
//         $result = $db->query("SELECT * FROM $table ");
//         }catch(Exception $e){
//         echo "could not retrive data, something went wrong ($table) ";
//         exit;
//         }
//         //pass the query into the product variable
//         // $value = $result->fetchAll(PDO::FETCH_ASSOC);

//     while($row = $result->fetchAll()){
//         $output .= '<option value="'.$row['id'].'">'.$row['state'].'</option>'; 
//     }

//     return $output;
// }

function bd_nice_number($n) {
        // first strip any formatting;
        $n = (0+str_replace(",","",$n));
        
        // is this a number?
        if(!is_numeric($n)) return false;
        
        // now filter it;
        if($n>1000000000000) return number_format(round(($n/1000000000000),1)).' trillion';
        else if($n>=1000000000) return number_format(round(($n/1000000000),1)).' billion';
        else if($n>=999999) return number_format(($n/1000000),1).' million';
        else if($n>=9999) return number_format(round(($n),1)).' ';
        else if($n>=999) return round(($n),1).' Hundred';
        
        return number_format($n);
    }

function select_particular2($table, $field, $match_field, $id) {
    try{
        $mysqli_1 = new mysqli("127.0.0.1", "root", "", "db_library");
        
        $sql_1 = "SELECT $field FROM $table WHERE $match_field = $id";
    } catch (Exception $e){
        // if unable to connect to the database
        $reply = "Could not connect to the database";
        exit;
    }
        try{
            $result = $mysqli_1->query($sql_1);
            if (gettype($result) != "object"){
                $reply = "None";
            }else{
                $return = $result->fetch_assoc();
                $reply = $return[$field];
            }  
        }catch(Exception $e){
             $reply = "could not retrive data, something went wrong (retrive) ";
        exit;
        }
        //pass the query into the product variable
        
        return $reply;
     //return $id;
}
