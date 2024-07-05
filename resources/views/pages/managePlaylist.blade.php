@extends('layouts.app')

@section('content')
    <?php session_start() ?>
    <main>
        <div class="managePlaylistTitle"><h3>Your Library</h3></div>

        <div class="managePlaylistSelector">
            <a class="row" href="?content=1">Playlists</a>
            <a class="row" href="?content=2">Albums</a>
            <a class="row" href="?content=3">Artists</a>
        </div>

        <div>
            <?php 
            if (isset($_GET['content'])){
                $content = $_GET['content'];
                switch($content){
                    case '1':
                        echo "<p>Your playlists: </p>";
                        if (isset($_SESSION['username'])){
                            $userName = $_SESSION['username'];
                            $sql = "SELECT id FROM user WHERE username = ?";
                            $statement = $conn->prepare($sql);
                            if ($statement) {
                                $statement->bind_param('s', $userName);
                                $statement->execute();
                                $result = $statement->get_result();
                
                                if ($row = $result->fetch_assoc()) {
                                    $userId = intval($row['id']);
                                    echo "User ID: $userId<br>";
                                }
                            }
                        }
                        break;
                        case '2':
                            echo "<p>Link 2</p>";
                            break;
                        case '3':
                            echo "<p>Link 3</p>";
                            break;
                        default:
                        echo "<p></p>";
                }
            }
            else{
                echo "<p>Select an option to start.</p>";
            }
            ?>
        </div>
    </main>
@endsection