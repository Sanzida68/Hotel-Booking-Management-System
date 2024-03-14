    <?php
    $hname = 'localhost';
    $uname = 'root';
    $pass = '';
    $db = 'hotel_managment';

    $con = mysqli_connect($hname, $uname, $pass , $db);

    if (mysqli_connect_error()) {
        exit('Error connecting to database' . mysqli_connect_error());
    }

    if (!isset($_POST['name'], $_POST['email'], $_POST['phone'], $_POST['address'], $_POST['pin'], $_POST['date_of_birth'], $_POST['password'], $_POST['cpassword'])) {
        exit('Empty Field(s)');
    }

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $pin = $_POST['pin'];
    $date_of_birth = $_POST['date_of_birth'];
    $password = $_POST['password'];

    if (empty($name) || empty($email) || empty($phone) || empty($address) || empty($pin) || empty($date_of_birth) || empty($password)) {
        exit('Values empty');
    }

    if ($stmt = $con->prepare('SELECT id, password FROM registration_info WHERE email = ?')) {
        $stmt->bind_param('s', $_POST['email']);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            echo "<script>
            alert('Username already exists.');
            window.location.href = 'index.php';
            </script>";
        } else {
            if ($stmt = $con->prepare('INSERT INTO registration_info (name, email, phone_no, address, pin_code, date_of_birth, password) VALUES (?, ?, ?, ?, ?, ?, ?)')) {
                $stmt->bind_param('sssssss', $_POST['name'], $_POST['email'], $_POST['phone'], $_POST['address'], $_POST['pin'], $_POST['date_of_birth'], $_POST['password']);
                $stmt->execute();
                echo "<script>
                alert('Successfully registered.');
                window.location.href = 'index.php';
                </script>";
            }
            else {
                echo "<script>
                alert('Couldn't Connect with Server.');
                window.location.href = 'index.php';
                </script>";
            }
        }
        $stmt->close();
    } else {
        echo "<script>
        alert('Couldn't Connect with Server.');
        window.location.href = 'index.php';
        </script>";
    }
    $con->close();
    
    ?>

