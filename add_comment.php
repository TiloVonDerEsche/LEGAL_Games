<?php

/*
include "db_connect.php";
$thread_id = $_GET["t_id"]; ;
$comment_content = $_GET["commentContent"];
$comment_author = $_GET["commentAuthor"];


echo "<h2>Trying to add a new Comment: $comment_content => $comment_author </h2>";
$sql = "INSERT INTO comments (thread_id, content, author)
 VALUES ('$thread_id', '$comment_content', '$comment_author')";
$result = $conn->query($sql) or die(mysqli_error());

include "search_all_comments.php";*/

/**
 * Fügt einen neuen Kommentar sicher in die Datenbank ein.
 *
 * @param mysqli $conn             Die aktive DB-Verbindung
 * @param int    $thread_id        Die ID des Threads
 * @param string $comment_content  Der Text des Kommentars
 * @param string $comment_author   Der Name des Autors
 * @return bool                    True bei Erfolg, andernfalls False
 */

 function addComment($conn, $thread_id, $comment_content, $comment_author) {
    // Prepared Statement für maximale Sicherheit
    $sql = "INSERT INTO comments (thread_id, content, author) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("iss", $thread_id, $comment_content, $comment_author);
        $result = $stmt->execute();
        $stmt->close();
        return $result;
    }
    return false;
} /*
function addComment($conn, $thread_id, $comment_content, $comment_author) {
    echo "<h2>Trying to add a new Comment: " . htmlspecialchars($comment_content) . " => " . htmlspecialchars($comment_author) . " </h2>";

    // Prepared Statement vorbereiten (Schutz vor SQL-Injection!)
    $sql = "INSERT INTO comments (thread_id, content, author) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);

    if ($stmt === false) {
        die("Fehler bei der Vorbereitung: " . $conn->error);
    }

    // Parameter an die Fragezeichen binden ('i' = integer, 's' = string, 's' = string)
    $stmt->bind_param("iss", $thread_id, $comment_content, $comment_author);

    // Ausführen
    $result = $stmt->execute();

    if (!$result) {
        die("Fehler beim Einfügen: " . $stmt->error);
    }

    $stmt->close();
    return $result;
}*/


?>
