<?php

$servername = "";
$username = "";
$password = "";
$dbname = "";


namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Consultant extends Authenticatable
{
    use Notifiable;

    protected $guard = 'consultant';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    class consultant extends Model 
    {
        protected $table = 'consultations';
    }

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, name, type, date, time FROM consultations";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. "type" . 
        $row["type"]. "date" . $row["date"]. "time" . $row["time"] "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
}