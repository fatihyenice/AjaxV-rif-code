<?php 
header("Content-Type: application/json");

// Connexion à la base de données
$host = 'localhost';
$dbname = 'teste';
$user = 'root';
$password = '';
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo json_encode(["success" => false, "message" => "Erreur de connexion à la base de données"]);
    exit;
}

// Récupérer et décoder les données JSON envoyées par AJAX
$input = json_decode(file_get_contents("php://input"), true);
if (!isset($input['code'])) {
    echo json_encode(["success" => false, "message" => "Code manquant"]);
    exit;
}

$code = $input['code'];

// Vérifier si le code existe dans la base de données
$query = $pdo->prepare("SELECT * FROM users WHERE username = ?");
$query->execute(array('toto')); 
$count = $query->rowCount();
if ($count == 1) {    
        $ft = $query->fetch();
        
        if(password_verify($code,$ft['password'])){
            echo json_encode(["success" => true]); 
        }else{
            echo json_encode(["success" => false]); 
        }
} else {
    echo json_encode(["success" => false]);  
}
?>